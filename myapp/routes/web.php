<?php

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return view('home', [
        'nama'=>'Farhan Fansuri',
        'umur'=>12
]);
});

Route::get('/about', function(){
    return view('about');
});


// //route basic
// Route::get('/admin', function(){
//     return 'Hello World!';
// });

// Route::get('/server', function(){
//     return view('server');
// });


// // //route view
// // Route::get('/client', function(){
// //     return view('client', parameter taruh sini);
// // });


// //route veiw lebih simple
// Route::view('/client','client',['name'=>'nama client', 'umur' => '12']);

// //mengirimkan argument ke routes view
// //sama aja

// //redirect
// Route::redirect('/client','/'); //masih error
// // Route::redirect('/client', '/server');


// //parameter
// // Route::view('/client/{id}','client',['name'=>'nama client', 'umur' => '12']);
