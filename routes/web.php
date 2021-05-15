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

Route::get('/auth', function () {
    return view('dashboard.layouts.auth');
});




    Route::get('/', 'FrontPageController@index')->name('blog');

    Route::get('/home', 'FrontPageController@home')->name('home');

    Route::get('/blog', 'FrontPageController@blog')->name('blog');

    Route::get('/about', 'FrontPageController@about')->name('about');

    Route::get('/contact', 'FrontPageController@contact')->name('contact');

    Route::get('/search_results', 'FrontPageController@search_results')->name('search_results');

    Route::get('/single_post', 'FrontPageController@single_post')->name('single_post');



Route::group(['middleware' => ['auth', 'admin'],'prefix'=> 'admin'], function () {


});  



Route::group(['prefix'=> 'author'], function () {

    Route::get('/', 'AuthorDashboardController@home')->name('author.home');

    Route::get('/all_posts', 'AuthorDashboardController@all_posts')->name('author.all_posts');
    
    Route::get('/create_post', 'AuthorDashboardController@create_post')->name('author.create_post');

    Route::get('/edit_post/{post_code}', 'AuthorDashboardController@edit_post')->name('author.edit_post');

    Route::get('/trashed_posts', 'AuthorDashboardController@trashed_posts')->name('author.trashed_posts');
    
    Route::get('/draft_posts', 'AuthorDashboardController@draft_posts')->name('author.draft_posts');

    Route::get('/authors_feed', 'AuthorDashboardController@authors_feed')->name('author.authors_feed');
    
    Route::get('/categories_feed', 'AuthorDashboardController@categories_feed')->name('author.categories_feed');

    Route::get('/my_interest', 'AuthorDashboardController@my_interest')->name('author.my_interest');
    
    Route::get('/saved_posts', 'AuthorDashboardController@saved_posts')->name('author.saved_posts');

    Route::get('/notifications', 'AuthorDashboardController@notifications')->name('author.notifications');
    
    Route::get('/my_profile', 'AuthorDashboardController@my_profile')->name('author.my_profile');

    Route::get('/settings', 'AuthorDashboardController@settings')->name('author.settings');



});


Route::get('auth/{provider}', 'SocialiteController@redirectToProvider');

Route::get('auth/{provider}/callback', 'SocialiteController@handleProviderCallback');

Auth::routes();

Route::post('/upload_post_image', 'PostController@upload_post_image')->name('upload_post_image');

Route::post('/update_post_image', 'PostController@update_post_image')->name('update_post_image');

Route::post('/upload', 'PostController@store')->name('upload.store');

Route::get('/create_post', 'PostController@create_post')->name('create_post');

Route::get('/draft_post', 'PostController@draft_post')->name('draft_post');

Route::get('/edit_post', 'PostController@edit_post')->name('edit_post');

Route::get('/trash_post', 'PostController@trash_post')->name('trash_post');



Route::get('/feeds', 'PostController@feeds')->name('feeds');





// Route::get('/home', 'HomeController@index')->name('home');
