<?php
use Illuminate\Support\Facades\Input;
 
 
Route::get('error', function(){
	abort(404);
});

Auth::routes();

//Users page - Homepage
Route::get('/', 'WebController@home');

//User Page - About Page
Route::get('/about', 'WebController@about');
Route::get('/about/{id}', 'WebController@about_read');

//User Page - News
Route::get('/news', 'WebController@news');
Route::get('/news/{id}', 'WebController@news_read');

// User Page - Admission
Route::get('/admission', 'WebController@admission');
Route::get('/admission/{id}', 'WebController@admission_read');

// User Page - Course Offering
Route::get('/course_offering', 'WebController@course_offering');

// User Page - Scholarships
Route::get('/scholarships', 'WebController@scholarship');
Route::get('/scholarships/{id}', 'WebController@scholarship_read');

// User Page - Administrative 
Route::get('/administrative', 'WebController@administrative');

// User Page - Arabic Department 
Route::get('/arabic_department', 'WebController@arabic_department');
Route::get('/arabic_department/{id}', 'WebController@arabic_department_view');

// User Page - Contact Us
Route::get('/contact_us', 'WebController@contact_us');

// Blank Page
Route::get('/blank', 'WebController@blank');


// User Page - Alumni 
Route::get('/alumni', 'WebController@alumni');

// Alumni Search Page
Route::any('/search_alumni',function(){
    $q = Input::get ( 'q' );
    $data = DB::table('tb_alumni')->where('name','LIKE','%'.$q.'%')->orWhere('id','LIKE','%'.$q.'%')->get();
    if($q != "")
    return view('user.pages.alumni.alumni')->withDetails($data)->withQuery ( $q );
	
	if($q == "")
    return view('user.pages.alumni.alumni')->withMessage('Please enter Alumni ID or Name First');
	
	// if($q == "")
	// return view('user.pages.alumni.alumni')->withMessage('No Details found. Try to search again !');

    else return view ('user.pages.alumni.alumni')->withMessage('No Details found. Try to search again !');
	});

Route::get('/dashboard', 'TestController@index');
 
Route::group([
	'middleware' => 'auth',
	'prefix' => 'admin'
	], function () {

// Change Avatar
Route::get('/profile', 'UserController@index');
Route::post('/profile', 'UserController@update');

//register
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register');

//edit password
Route::get('/reset/{id}', 'UserController@edit');
Route::post('/reset', 'UserController@updatePass');

//Banner
Route::get('/create_banner', 'BannerController@index');
Route::post('/create_banner', 'BannerController@insert');
Route::get('/banner_search', 'BannerController@search');
Route::get('/banner', 'BannerController@view');
Route::get('/view_banner/{id}', 'BannerController@read');
Route::get('/delete_banner/{id}', 'BannerController@delete');
Route::get('/edit_banner/{id}', 'BannerController@edit');
Route::post('/update_banner', 'BannerController@update');

// Route::get('/backup', 'GeneralController@backup');
// Route::get('/', 'BannerController@view');


//About
Route::post('/create_about', 'AboutController@insert');
Route::get('/about_search', 'AboutController@search');
Route::get('/add_about', 'AboutController@index');
Route::get('/about', 'AboutController@view');
Route::get('/view_about/{id}', 'AboutController@read');
Route::get('/delete_about/{id}', 'AboutController@delete');
Route::get('/edit_about/{id}', 'AboutController@edit');
Route::post('/update_about', 'AboutController@update');

//News
Route::post('/create_news', 'NewsController@insert');
Route::get('/news_search', 'NewsController@search');
Route::get('/add_news', 'NewsController@index');
Route::get('/about_news', 'NewsController@view');
Route::get('/view_news/{id}', 'NewsController@read');
Route::get('/delete_news/{id}', 'NewsController@delete');
Route::get('/edit_news/{id}', 'NewsController@edit');
Route::post('/update_news', 'NewsController@update');

//Admission
Route::post('/create_admission', 'AdmissionController@insert');
Route::get('/add_admission', 'AdmissionController@index');
Route::get('/admission_search', 'AdmissionController@search');
Route::get('/admission', 'AdmissionController@view');
Route::get('/view_admission/{id}', 'AdmissionController@read');
Route::get('/delete_admission/{id}', 'AdmissionController@delete');
Route::get('/edit_admission/{id}', 'AdmissionController@edit');
Route::post('/update_admission', 'AdmissionController@update');


//Course Offering
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
Route::get('/scholarship_search', 'ScholarshipController@search');
Route::get('/scholarship', 'ScholarshipController@view');
Route::get('/view_scholarship/{id}', 'ScholarshipController@read');
Route::get('/delete_scholarship/{id}', 'ScholarshipController@delete');
Route::get('/edit_scholarship/{id}', 'ScholarshipController@edit');
Route::post('/update_scholarship', 'ScholarshipController@update');

//Administrative
Route::get('/add_administrative', 'AdministrativeController@index');
Route::post('/create_administrative', 'AdministrativeController@insert');
Route::get('/administrative_search', 'AdministrativeController@search');
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
Route::get('/arabdept_search', 'ArabdeptController@search');
Route::get('/add_arabic_department', 'ArabdeptController@index');
Route::get('/arabic_department', 'ArabdeptController@view');
Route::get('/view_arabic_department/{id}', 'ArabdeptController@read');
Route::get('/delete_arabic_department/{id}', 'ArabdeptController@delete');
Route::get('/edit_arabic_department/{id}', 'ArabdeptController@edit');
Route::post('/update_arabic_department', 'ArabdeptController@update');
	
//Contact
// Route::get('/create_contact', 'ContactUs@index');
Route::get('/contact_search', 'ContactUs@search');
// Route::post('/add_contact', 'ContactUs@insert');
Route::get('/contact', 'ContactUs@view');
Route::get('/view_contact/{id}', 'ContactUs@read');
Route::get('/delete_contact/{id}', 'ContactUs@delete');
Route::get('/edit_contact/{id}', 'ContactUs@edit');
Route::post('/update_contact', 'ContactUs@update');
	

});
