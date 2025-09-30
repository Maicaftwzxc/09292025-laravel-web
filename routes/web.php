<?php

use Illuminate\Support\Arr;     
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/genre', function () {
    return view('genre', [ 
        'genres' => [
            [
                'id' => 1,
                'category' => 'Ballad',
            ],
            [
                'id' => 2,
                'category' => 'Rock'
            ],
            [
                'id' => 3,
                'category' => 'Pop'
            ],
            [
                'id' => 4,
                'category' => 'HipHop'
            ],
        ]
        
    ]);
});

Route::get('/genre/{id}', function ($id) {
        $genres =  [
            [
                'id' => 1,
                'category' => 'Ballad',
            ],
            [
                'id' => 2,
                'category' => 'Rock'
            ],
            [
                'id' => 3,
                'category' => 'Pop'
            ],
            [
                'id' => 4,
                'category' => 'HipHop'
            ],
        ];

       $genre = Arr::first($genres, fn($genre) => $genre['id'] == $id);
        
       return view('genre-details', ['genre' => $genre]);
});

Route::get('/contact', function () {
    return view('contact');
});
