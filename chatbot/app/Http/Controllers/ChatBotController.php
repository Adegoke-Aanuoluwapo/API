<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use OpenAI\Laravel\Facades\OpenAI;



class ChatBotController extends Controller
{
    //
    public function sendChat(Request $request){

        try {
            $result = OpenAI::chat()->create([
//                'max-tokens'=> 100,
                'model' => 'gpt-3.5-turbo',
                'messages'=>['role'=>'user', 'content'=>'Hello'],

            ]);
        }catch (\Exception $e){
            Log::info($e->getMessage());
        }



        $response = array_reduce(
            $result->toArray()['choices'],
            fn(string $result, array $choice) => $result.$choice['text'], ""
        );
        return $response;

    }
}
