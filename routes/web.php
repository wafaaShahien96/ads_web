<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;



// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/dash', function () {

//         return view('dashboard.includes.home');
// });


Auth::routes();


Route::get('/', function () {
    return view('welcome');
    })->name('welcome');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
});

Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');

// Route::post('ads' ,'Dashboard\AdsController@ads')->name('ads');



Route::group(
[
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function(){

    Route::namespace('Dashboard')->prefix('admin')->name('admin.')->group(function(){
        Route::namespace('Auth')->group(function(){
        //Login Routes
        Route::get('/login','LoginController@showLoginForm')->name('login');
        Route::post('/login','LoginController@login');
        Route::get('/logout','LoginController@logout')->name('logout');

        });
        Route::middleware('auth:admin')->group(function(){
            Route::get('/', 'HomeController@index')->name('home');
            Route::resource('tag', 'tagController')->only(['index','create','store','edit','update','destroy']);
            Route::resource('article', 'ArticleController');
            Route::resource('partner', 'PartnerController');
            Route::resource('package', 'PackageController');
            Route::resource('payment', 'PaymentController');

            Route::get('/', 'HomeController@index')->name('home');

            Route::resource('country' , 'CountryController');
            Route::resource('state' , 'StateController');
            Route::get('get-state-list','StateController@getStateList');
            Route::get('get-city-list','CityController@getCityList');
            Route::resource('city' , 'CityController');
            Route::resource('users' , 'UserController');
            Route::resource('categories' , 'CategoryController');
            Route::resource('ads' , 'AdsController');
            Route::get('get-subcategory-list','CategoryController@getCategoryList');

            // Route::resource('contacts' , 'ContactsController');
        });

    });

});

