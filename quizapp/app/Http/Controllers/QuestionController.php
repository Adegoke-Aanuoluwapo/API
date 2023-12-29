<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use \Illuminate\Support\Facades\Log;



class QuestionController extends Controller
{
    //
    public function fetch_Insert(Request $request)
    {

        // dd(config('services.quiz_api.base_url'));
        $limit = $request->query('limit') ?? 10;
        $url = config('services.quiz_api.base_url').'questions';
        $response = Http::get($url, [
            'apiKey' => config('services.quiz_api.key'),
            'limit' => $limit,
        ]);
//         config('services.quiz_api.base_url') . 'questions'
// base_url => 'https://quiz-api.io/api/v1/'
        $question = json_decode($response->body());
        // Log::info($question);
        foreach ($question as $q){
            Question::create([
                'question' => $q->question,
                'answer_a' => $q->answers->answer_a,
                'answer_b' => $q->answers->answer_b,
                'answer_c' => $q->answers->answer_c,
            ]);

            // $question = new Question();
            // $question->question = $q->question;
            // $question->answer_a = $q->answers->answer_a;
            // $question->answer_b = $q->answers->answer_b;
            // $question->answer_c = $q->answers->answer_c;

            // $question->save();
        }
        // vwmZp8ZJAduxdLu4Je7bh9zrHDmq4Tr3wX0TbJRl
        return "Data fetched from external api and saved into Database";
    }

    public function show()
    {
        $data['questions'] = Question::all();
        return view('welcome', $data);
    }
}
