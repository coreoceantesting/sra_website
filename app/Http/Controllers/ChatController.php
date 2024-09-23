<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ChatController extends Controller
{
    public function chat(Request $request)
    {
        $client = new Client();
        $response = $client->post('https://api.openai.com/v1/engines/davinci-codex/completions', [
            'headers' => [
                'Authorization' => 'Bearer YOUR_OPENAI_API_KEY',
            ],
            'json' => [
                'prompt' => $request->input('message'),
                'max_tokens' => 150,
            ],
        ]);

        $data = json_decode($response->getBody(), true);

        return response()->json(['message' => $data['choices'][0]['text']]);
    }
}
