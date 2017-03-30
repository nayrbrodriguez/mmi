<?php

 
 
Route::group([
	'middleware' => 'auth',
	'prefix' => 'admin'
	], function () {

//Banner
Route::get('/create_banner', 'BannerController@index');
Route::post('/create_banner', 'BannerController@insert');
Route::get('/banner_search', 'BannerController@search');
Route::get('/banner', 'BannerController@view');
Route::get('/view_banner/{id}', 'BannerController@read');
Route::get('/delete_banner/{id}', 'BannerController@delete');
Route::get('/edit_banner/{id}', 'BannerController@edit');
Route::post('/update_banner', 'BannerController@update');

// Route::get('/', 'GeneralController@backup');
Route::get('/backup', 'GeneralController@backup');
Route::get('/', 'BannerController@view');
Route::get('/profile', 'UserController@index');
Route::post('/profile', 'UserController@update');

//About
Route::post('/create_about', 'AboutController@insert');
Route::get('/add_about', 'AboutController@index');
Route::get('/about', 'AboutController@view');
Route::get('/view_about/{id}', 'AboutController@read');
Route::get('/delete_about/{id}', 'AboutController@delete');
Route::get('/edit_about/{id}', 'AboutController@edit');
Route::post('/update_about', 'AboutController@update');

//News
Route::post('/create_news', 'NewsController@insert');
Route::get('/add_news', 'NewsController@index');
Route::get('/about_news', 'NewsController@view');
Route::get('/view_news/{id}', 'NewsController@read');
Route::get('/delete_news/{id}', 'NewsController@delete');
Route::get('/edit_news/{id}', 'NewsController@edit');
Route::post('/update_news', 'NewsController@update');

//Admission
Route::post('/create_admission', 'AdmissionController@insert');
Route::get('/add_admission', 'AdmissionController@index');
Route::get('/admission', 'AdmissionController@view');
Route::get('/view_admission/{id}', 'AdmissionController@read');
Route::get('/delete_admission/{id}', 'AdmissionController@delete');
Route::get('/edit_admission/{id}', 'AdmissionController@edit');
Route::post('/update_admission', 'AdmissionController@update');


//Course Offering
// Route::resource('queries', 'QueryController@search');
Route::post('/create_course_offering', 'CourseController@insert');
Route::get('/add_course_offering', 'CourseController@index');
Route::get('/course_search', 'CourseController@search');
Route::get('/course_offering', 'CourseController@view');
Route::get('/view_course_offering/{id}', 'CourseController@read');
Route::get('/delete_course_offering/{id}', 'CourseController@delete');
Route::get('/edit_course_offering/{id}', 'CourseController@edit');
Route::post('/update_course_offering', 'CourseController@update');

// Scholarships
Route::post('/create_scholarship', 'ScholarshipController@insert');
Route::get('/add_scholarship', 'ScholarshipController@index');
Route::get('/scholarship', 'ScholarshipController@view');
Route::get('/view_scholarship/{id}', 'ScholarshipController@read');
Route::get('/delete_scholarship/{id}', 'ScholarshipController@delete');
Route::get('/edit_scholarship/{id}', 'ScholarshipController@edit');
Route::post('/update_scholarship', 'ScholarshipController@update');

//Administrative
Route::get('/add_administrative', 'AdministrativeController@index');
Route::post('/create_administrative', 'AdministrativeController@insert');
Route::get('/administrative', 'AdministrativeController@view');
Route::get('/view_administrative/{id}', 'AdministrativeController@read');
Route::get('/delete_administrative/{id}', 'AdministrativeController@delete');
Route::get('/edit_administrative/{id}', 'AdministrativeController@edit');
Route::post('/update_administrative', 'AdministrativeController@update');

// Alumni
Route::get('/create_alumni', 'AlumniController@index');
Route::get('/alumni_search', 'AlumniController@search');
Route::post('/add_alumni', 'AlumniController@insert');
Route::get('/alumni', 'AlumniController@view');
Route::get('/view_alumni/{id}', 'AlumniController@read');
Route::get('/delete_alumni/{id}', 'AlumniController@delete');
Route::get('/edit_alumni/{id}', 'AlumniController@edit');
Route::post('/update_alumni', 'AlumniController@update');

//Arabic Dept
Route::post('/create_arabic_department', 'ArabdeptController@insert');
Route::get('/search', 'ArabdeptController@search');
Route::get('/add_arabic_department', 'ArabdeptController@index');
Route::get('/arabic_department', 'ArabdeptController@view');
Route::get('/view_arabic_department/{id}', 'ArabdeptController@read');
Route::get('/delete_arabic_department/{id}', 'ArabdeptController@delete');
Route::get('/edit_arabic_department/{id}', 'ArabdeptController@edit');
Route::post('/update_arabic_department', 'ArabdeptController@update');


});
Auth::routes();

Route::get('/admin', 'HomeController@index');

//Users page
Route::get('/', 'WebController@home');
Route::get('/about', 'WebController@about');
Route::get('/about/{id}', 'WebController@about_read');
Route::get('/news', 'WebController@news');
Route::get('/news/{id}', 'WebController@news_read');
Route::get('/admission', 'WebController@admission');
Route::get('/admission/{id}', 'WebController@admission_read');
Route::get('/course_offering', 'WebController@course_offering');

Route::get('/scholarships', 'WebController@scholarship');
Route::get('/scholarships/{id}', 'WebController@scholarship_read');
Route::get('/administrative', 'WebController@administrative');

Route::get('/alumni', 'WebController@alumni');

Route::get('/arabic_department', 'WebController@arabic_department');
Route::get('/arabic_department/{id}', 'WebController@arabic_department_view');
Route::get('/contact_us', 'WebController@contact_us');
Route::get('/blank', 'WebController@blank');



