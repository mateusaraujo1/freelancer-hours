<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    //__invoke indica que só terá esse método

    public function __invoke(Request $request)
    {
        // $user = User::query()->create([
        //     'name' => 'Rafael',
        //     'email' => 'rafaeel@gmail.com',
        //     'password' => '1234'
        // ]);

        // dump($user);
    }
}
