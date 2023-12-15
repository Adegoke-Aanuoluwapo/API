<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;

class ChatBotController extends Controller
{
    //
    public function sendChat(Request $request){
        $request = OpenAI::completions()->create([
            'max-token'=> 100,
            'model' => 'text-davinci-003',
            'prompt' => $request->input
        ]);
        $response = array_reduce(
            $result->toArray()[]
        )
    }
}
