<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;
use App\Conversations\UserConversation;

class BotManController extends Controller
{
    public function handle()
{
    $botman = app('botman');

    $botman->hears('hi', function(BotMan $botman) {
        $botman->startConversation(new UserConversation());
    });

    $botman->listen();
}
    // public function handle()
    // {
    //     $botman = app('botman');

    //     $botman->hears('{message}', function(BotMan $botman, $message) {
    //         if ($message == 'hi') {
    //             $this->askQuestion1($botman);
    //         } else {
    //             $botman->reply("Please type 'hi' to start the conversation.");
    //         }
    //     });

    //     $botman->listen();
    // }

    // public function askQuestion1(BotMan $botman)
    // {
    //     $botman->ask('Hello! What is your name?', function(Answer $answer) use ($botman) {
    //         $name = $answer->getText();
    //         $botman->userStorage()->save(['name' => $name]);
    //         $this->askQuestion2($botman);
    //     });
    // }

    // public function askQuestion2(BotMan $botman)
    // {
    //     // dd($botman);
    //     $botman->ask('Nice to meet you! How old are you?', function(Answer $answer) use ($botman) {
    //         $age = $answer->getText();
    //         $botman->userStorage()->save(['age' => $age]);

    //         // Call the next question correctly
    //         $this->askQuestion3($botman);
    //     });
    // }

    // public function askQuestion3(BotMan $botman)
    // {
    //     $botman->ask('What is your favorite color?', function(Answer $answer) use ($botman) {
    //         $color = $answer->getText();
    //         $botman->userStorage()->save(['color' => $color]);

    //         // Call the next question correctly
    //         $this->askQuestion4($botman);
    //     });
    // }

    // public function askQuestion4(BotMan $botman)
    // {
    //     $botman->ask('Which city do you live in?', function(Answer $answer) use ($botman) {
    //         $city = $answer->getText();
    //         $botman->userStorage()->save(['city' => $city]);

    //         // Call the next question correctly
    //         $this->askQuestion5($botman);
    //     });
    // }

    // public function askQuestion5(BotMan $botman)
    // {
    //     $botman->ask('What is your favorite food?', function(Answer $answer) use ($botman) {
    //         $food = $answer->getText();
    //         $botman->userStorage()->save(['food' => $food]);

    //         // Show summary after the last question
    //         $this->showSummary($botman);
    //     });
    // }

    // public function showSummary(BotMan $botman)
    // {
    //     $user = $botman->userStorage()->all();

    //     $botman->reply("Thank you! Here's a summary of your answers:");
    //     $botman->reply("Name: " . $user['name']);
    //     $botman->reply("Age: " . $user['age']);
    //     $botman->reply("Favorite color: " . $user['color']);
    //     $botman->reply("City: " . $user['city']);
    //     $botman->reply("Favorite food: " . $user['food']);
    // }

    // public function tinker()
    // {
    //     return view('tinker');
    // }
}
