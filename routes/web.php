<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about.index', ["name" => "Junielvic Diputado"]);
});

Route::get('/teas', function () {
   $teas = [
        ["name" => "Green Tea", "price" => 100, "id" => 1],
        ["name" => "Black Tea", "price" => 150, "id" => 2],
        ["name" => "Milk Tea", "price" => 120, "id" => 3],
        ["name" => "Oolong Tea", "price" => 200, "id" => 4],
        ["name" => "Jasmine Tea", "price" => 180, "id" => 5],
    ];
    return view('teas.index', ["teas" => $teas]);
});


Route::get('/teas/{id}', function ($id) {
    $teas = [
         ["name" => "Green Tea", "price" => 100, "id" => 1],
         ["name" => "Black Tea", "price" => 150, "id" => 2],
         ["name" => "Milk Tea", "price" => 120, "id" => 3],
         ["name" => "Oolong Tea", "price" => 200, "id" => 4],
         ["name" => "Jasmine Tea", "price" => 180, "id" => 5],
     ];
     return view('teas.teadetail', ["tea" => $teas[$id - 1]]);
 });
 