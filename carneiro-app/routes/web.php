<?php

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
Route::group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function()
{
    Route::get('/', 'AdminController@index')->name('admin.home');

    Route::get('/courses', 'CourseController@index')->name('admin.courses.index');
    Route::get('/courses/create', 'CourseController@create')->name('admin.courses.create');
    Route::get('/courses/{course}/edit', 'CourseController@edit')->name('admin.courses.edit');
    Route::patch('courses/{course}', 'CourseController@update')->name('admin.courses.update');
    Route::get('/courses/{course}', 'CourseController@show')->name('admin.courses.show');
    Route::delete('/courses/{course}', 'CourseController@destroy')->name('admin.courses.destroy');
    Route::post('/courses/store', 'CourseController@store')->name('admin.courses.store');

    Route::resource('news', 'NewsController')->names('admin.news');
    Route::resource('links', 'LinkController')->names('admin.links');
    Route::resource('institutionals', 'InstitutionalController')->names('admin.institutionals');
    Route::resource('collaborators', 'CollaboratorController')->names('admin.collaborators');
    Route::resource('galleries', 'GalleryController')->names('admin.galleries');
    Route::resource('users', 'UserController')->names('admin.users');

});

Route::get('/', 'Site\SiteController@index')->name('site.home');
Route::get('/paginate', 'Site\SiteController@paginateGallery')->name('site.home.gallery');
Route::get('/gallery/{category}', 'Site\SiteController@searchGallery')->name('site.home.gallery');


Route::get('/courses/{id}', 'Site\SiteController@course')->name('site.courses.show');
Route::get('/news/{id}', 'Site\SiteController@news')->name('site.news.show');
Route::get('/news', 'Site\SiteController@newsIndex')->name('site.news');

Route::get('/galleries', 'Site\SiteController@galleriesIndex')->name('site.gallery');
// Route::get('/galleries', 'Site\SiteController@galleriesIndex')->name('site.galleries');

Auth::routes([]);

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
