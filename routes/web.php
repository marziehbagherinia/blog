<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacts', function () {

    $contacts = \App\Models\Contact::all();

    $output = "<pre>";

    foreach ($contacts as $contact) {
        $output = $output . $contact->getAttribute('first_name') . "&nbsp&nbsp&nbsp";
        $output = $output . $contact->getAttribute('last_name') . "&nbsp&nbsp&nbsp";
        $output = $output . $contact->getAttribute('company_id') . "\n";
    }

    $output = $output . "</pre>";

    return nl2br($output);

});
