<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $contacts = [
        [
            "fullname"=> "Abdulaziz Abdullaev",
            "email" => "abdulaziz@mail.ru",
            "categories" => collect(["Friend", "Family"]),
            'notes' => collect(["Do this", "Do that"])
        ],
        [
            "fullname"=> "Abdulaziz Abdullaev",
            "email" => "abdulaziz@mail.ru",
            "categories" => collect(["Friend", "Family"]),
            'notes' => collect(["Do this", "Do that"])
        ],
        [
            "fullname"=> "Abdulaziz Abdullaev",
            "email" => "abdulaziz@mail.ru",
            "categories" => collect(["Friend", "Family"]),
            'notes' => collect(["Do this", "Do that"])
        ]
    ];
    return view('welcome', ['contacts'=>$contacts]);
});
