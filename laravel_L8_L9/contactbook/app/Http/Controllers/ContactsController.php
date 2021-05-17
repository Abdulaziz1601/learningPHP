<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index() {
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
    }

}
