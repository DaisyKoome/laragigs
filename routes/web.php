<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
use phpDocumentor\Reflection\PseudoTypes\List_;

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
/* Common Resource Routes:
// index - Show all listings
// show - Show a single listing
// create - Show form to create a new listing
// store - Store a new listing
// edit - Show form to edit a listing
// update - Update a listing
 destroy - Delete a listing */

//All Listings
Route::get('/', [ListingController::class, 'index']);

//Show Create Form
Route::get('/listings/create', [ListingController::class, 'create']);

//Store Listing Data
Route::post('/listings', [ListingController::class, 'store']);

//Show Edit Form
Route::get('listings/{listing}/edit', [ListingController::class, 'edit']);

//Update Listings
Route::put('listings/{listing}/', [ListingController::class, 'update']);

//Delete Listing
Route::delete('listings/{listing}/', [ListingController::class, 'destroy']);

//Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

//Show Register/Create Form
Route::get('/register', [UserController::class, 'create']);

//Create New User
Route::post('/users',[UserController::class, 'store']);

//Log user out
Route::post('/logout', [UserController::class, 'logout']);

//Show Login Form
Route::get('/login',[UserController::class, 'login']);

//Log In User
Route::post('users/authenticate', [UserController::class, 'authenticate']);