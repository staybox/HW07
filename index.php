<?php
require "config.php";

$user = User::Create(['name' => "K44111fs745hiitj Soni", 'email' => "k45111474fshitij206@gmail.com", 'password' => password_hash("1234",PASSWORD_BCRYPT), ]);

$user->todo()->create([

    'todo' => "Working with Eloquent Without PHP",

    'category' => "eloquent",

    'description' => "Testing the work using eloquent without laravel"

]);


