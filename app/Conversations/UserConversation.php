<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation; // Import Conversation class
use BotMan\BotMan\Messages\Incoming\Answer;

class UserConversation extends Conversation
{
    // Implement the run method
    public function run()
    {
        $this->askName();
    }


    public function askName()
    {
        $this->ask('Can I rent my SRA flat?', function(Answer $answer) {
            $name = $answer->getText();
            $this->bot->userStorage()->save(['name' => $name]);
            $this->askAge();
        });
    }

    public function askAge()
    {
        $this->ask('What rules of SRA flat on rent?', function(Answer $answer) {
            $age = $answer->getText();
            $this->bot->userStorage()->save(['age' => $age]);
            $this->askColor();
        });
    }

    public function askColor()
    {
        $this->ask('What are the qualifications for purchasing an SRA apartment?', function(Answer $answer) {
            $color = $answer->getText();
            $this->bot->userStorage()->save(['color' => $color]);
            $this->askCity();
        });
    }

    public function askCity()
    {
        $this->ask('Can a house be registered in two names in India?', function(Answer $answer) {
            $city = $answer->getText();
            $this->bot->userStorage()->save(['city' => $city]);
            $this->askFood();
        });
    }

    public function askFood()
    {
        $this->ask('Whether CHS is required to pay income tax?', function(Answer $answer) {
            $food = $answer->getText();
            $this->bot->userStorage()->save(['food' => $food]);
            // $this->showSummary();
        });
    }

    // public function showSummary()
    // {
    //     $user = $this->bot->userStorage()->all();

    //     $this->bot->reply("Thank you! Here's a summary of your answers:");
    //     $this->bot->reply("Name: " . $user['name']);
    //     $this->bot->reply("Age: " . $user['age']);
    //     $this->bot->reply("Favorite color: " . $user['color']);
    //     $this->bot->reply("City: " . $user['city']);
    //     $this->bot->reply("Favorite food: " . $user['food']);
    // }
}
