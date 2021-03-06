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

    Route::get('/public_profile/{id}', 'FrontPageController@public_profile')->name('public_profile');

    Route::get('/contact', 'FrontPageController@contact')->name('contact');

    Route::get('/search_results', 'FrontPageController@search_results')->name('search_results');

    Route::get('/single_post/{post_code}', 'FrontPageController@single_post')->name('single_post');

    Route::get('/category/{category_name}', 'FrontPageController@category')->name('category');



Route::group(['middleware' => ['auth', 'admin'],'prefix'=> 'admin'], function () {


});  



Route::group(['middleware' => ['auth'],'prefix'=> 'author'], function () {

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

    //credential update

    Route::post('/update_email', 'AuthorDashboardController@update_email')->name('author.update_email');

    Route::post('/update_password', 'AuthorDashboardController@update_password')->name('author.update_password');

    Route::post('/update_username', 'AuthorDashboardController@update_username')->name('author.update_username');



});


Route::get('auth/{provider}', 'SocialiteController@redirectToProvider');

Route::get('auth/{provider}/callback', 'SocialiteController@handleProviderCallback');

Auth::routes();

Route::post('/upload_post_image', 'PostController@upload_post_image')->name('upload_post_image');

Route::post('/update_post_image', 'PostController@update_post_image')->name('update_post_image');

Route::post('/upload', 'PostController@store')->name('upload.store');

Route::post('/create_post', 'PostController@create_post')->name('create_post');

Route::get('/draft_post', 'PostController@draft_post')->name('draft_post');

Route::post('/edit_post', 'PostController@edit_post')->name('edit_post');

Route::get('/trash_post', 'PostController@trash_post')->name('trash_post');

Route::get('/choose', 'ChooseRoleController@choose')->name('choose');

Route::get('/feeds', 'PostController@feeds')->name('feeds');

Route::get('/get_views', 'PostController@get_views')->name('get_views');


Route::post('/getLikes', 'PostController@getLikes')->name('getLikes');

Route::post('/getUnlikes', 'PostController@getUnlikes')->name('getUnlikes');

Route::post('/registerLike', 'PostController@registerLike')->name('registerLike');

Route::post('/registerUnlike', 'PostController@registerUnlike')->name('registerUnlike');



Route::post('/getSubscriptionStatus', 'CategorySubscriptionController@getSubscriptionStatus');

Route::post('/subscribeCategory', 'CategorySubscriptionController@subscribeCategory');

Route::post('/unsubscribeCategory', 'CategorySubscriptionController@unsubscribeCategory');


Route::post('/getAllComments', 'CommentController@getAllComments');

Route::post('/post_comment', 'CommentController@post_comment');

Route::post('/getSecondGenComments', 'CommentController@getSecondGenComments');

Route::post('/getFollowers', 'FollowerController@getFollowers');

Route::post('/followAuthor', 'FollowerController@followAuthor');

Route::post('/unfollowAuthor', 'FollowerController@unfollowAuthor');

Route::post('/query_posts', 'SearchController@query_posts')->name('query_posts');

Route::get('/get_wp_posts', 'PostController@get_wp_posts')->name('get_wp_posts');





// Route::get('/home', 'HomeController@index')->name('home');
