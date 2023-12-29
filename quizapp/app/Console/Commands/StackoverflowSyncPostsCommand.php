<?php

namespace App\Console\Commands;

use Illuminate\Support\Carbon;
use App\Models\StackOverflowTag;
use Illuminate\Http\Client\Response;
use App\Models\StackOverflowQuestion;
use GuzzleHttp\Promise\PromiseInterface;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Console\View\Components\components;
class StackoverflowSyncPostsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'stackoverflow:sync-posts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        $response = Http::get('https://api.stackexchange.com/2.3/search/advanced', [
            'order'    => 'desc',
            'sort'     => 'creation',
            'tagged'   => 'laravel',
            'site'     => 'stackoverflow',
            'pagesize' => '10',
        ]); 
        $this->saveQuestions($response);
        $newQuestions = $this->saveQuestions($response);

        $this->components->info('Added new questions: ' . $newQuestions); 



    }

    private function saveQuestions(PromiseInterface|Response $response): int
    {
        $questions = json_decode($response->body())->items;
        $newQuestions = 0;

        foreach ($questions as $question) {
            $questionTags = [];
            foreach ($question->tags as $tag) {
                $questionTags[] = StackOverflowTag::firstOrCreate(['name' => $tag])->id;
            }

            $savedQuestion = StackOverflowQuestion::updateOrCreate(
                [
                    'link' => $question->link,
                ],
                [
                    'title'         => $question->title,
                    'link'          => $question->link,
                    'creation_date' => Carbon::createFromTimestamp($question->creation_date),
                    'is_answered'   => $question->is_answered,
                ]
            );

            if ($savedQuestion->wasRecentlyCreated) {
                $newQuestions++;
            }

            if ($savedQuestion->tags()->count() === 0) {
                $savedQuestion->tags()->attach($questionTags);
            }
        }

        return $newQuestions;
    } 
}
