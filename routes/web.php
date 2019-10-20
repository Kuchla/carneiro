<?php

Auth::routes();

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

Route::get('/galleries/{category}/{album}', 'Site\SiteController@filterGallery')->name('site.gallery.filter');
Route::get('/galleries/{album}', 'Site\SiteController@filterNewsGallery')->name('site.gallery.filter.album');
Route::get('/galleries', 'Site\SiteController@galleriesIndex')->name('site.gallery.index');

Route::get('/courses/{id}', 'Site\SiteController@courseShow')->name('site.courses.show');

Route::get('/news/{id}', 'Site\SiteController@newsShow')->name('site.news.show');
Route::get('/news', 'Site\SiteController@newsIndex')->name('site.news.index');

