<?php



Route::group([
	'middleware' => 'auth',
	'prefix' => 'admin'
	], function () {

//Banner
Route::get('/create_banner', 'BannerController@index');
Route::post('/create_banner', 'BannerController@insert');
Route::get('/banner', 'BannerController@view');
Route::get('/view_banner/{id}', 'BannerController@read');
Route::get('/delete_banner/{id}', 'BannerController@delete');
Route::get('/edit_banner/{id}', 'BannerController@edit');
Route::post('/update_banner', 'BannerController@update');

// Route::get('/', 'GeneralController@backup');
Route::get('/backup', 'GeneralController@backup');
Route::get('/profile', 'UserController@index');
Route::post('/profile', 'UserController@update');
// General Information
// Route::get('/summernote', 'GeneralController@index');
// Route::post('/create_gen_info', 'GeneralController@insert');
Route::get('/gen_info', 'GeneralController@view');
Route::get('/view_gen_info/{id}', 'GeneralController@read');
// Route::get('/delete_gen_info/{id}', 'GeneralController@delete');
Route::get('/edit_gen_info/{id}', 'GeneralController@edit');
Route::post('/update_gen_info', 'GeneralController@update');

//About President
// Route::post('/create_about_president', 'PresidentController@insert');
Route::get('/about_president', 'PresidentController@view');
Route::get('/view_about_president/{id}', 'PresidentController@read');
// Route::get('/delete_about_president/{id}', 'PresidentController@delete');
Route::get('/edit_about_president/{id}', 'PresidentController@edit');
Route::post('/update_about_president', 'PresidentController@update');

//Vision and Mission
// Route::post('/create_vision_mission', 'VisionController@insert');
Route::get('/vision_mission', 'VisionController@view');
Route::get('/view_vision_mission/{id}', 'VisionController@read');
Route::get('/delete_vision_mission/{id}', 'VisionController@delete');
Route::get('/edit_vision_mission/{id}', 'VisionController@edit');
Route::post('/update_vision_mission', 'VisionController@update');

//LOGO
// Route::post('/create_logo', 'LogoController@insert');
Route::get('/about_logo', 'LogoController@view');
Route::get('/view_logo/{id}', 'LogoController@read');
Route::get('/delete_logo/{id}', 'LogoController@delete');
Route::get('/edit_logo/{id}', 'LogoController@edit');
Route::post('/update_logo', 'LogoController@update');

//Corevalues
// Route::post('/create_core_values', 'CorevaluesController@insert');
Route::get('/core_values', 'CorevaluesController@view');
Route::get('/view_core_values/{id}', 'CorevaluesController@read');
Route::get('/delete_core_values/{id}', 'CorevaluesController@delete');
Route::get('/edit_core_values/{id}', 'CorevaluesController@edit');
Route::post('/update_core_values', 'CorevaluesController@update');

//Core Competencies
// Route::post('/create_core_competencies', 'CorecompetenciesController@insert');
Route::get('/core_competencies', 'CorecompetenciesController@view');
Route::get('/view_core_competencies/{id}', 'CorecompetenciesController@read');
Route::get('/delete_core_competencies/{id}', 'CorecompetenciesController@delete');
Route::get('/edit_core_competencies/{id}', 'CorecompetenciesController@edit');
Route::post('/update_core_competencies', 'CorecompetenciesController@update');

//Graduate Attributes
// Route::post('/create_grad_attribute', 'GraduateattributeController@insert');
Route::get('/grad_attribute', 'GraduateattributeController@view');
Route::get('/view_grad_attribute/{id}', 'GraduateattributeController@read');
Route::get('/delete_grad_attribute/{id}', 'GraduateattributeController@delete');
Route::get('/edit_grad_attribute/{id}', 'GraduateattributeController@edit');
Route::post('/update_grad_attribute', 'GraduateattributeController@update');

//Academic Policies
// Route::post('/create_academic_policy', 'AcademicController@insert');
Route::get('/academic_policy', 'AcademicController@view');
Route::get('/view_academic_policy/{id}', 'AcademicController@read');
Route::get('/delete_academic_policy/{id}', 'AcademicController@delete');
Route::get('/edit_academic_policy/{id}', 'AcademicController@edit');
Route::post('/update_academic_policy', 'AcademicController@update');

//Academic Policies
// Route::post('/create_academic_policy', 'AcademicController@insert');
// Route::get('/about_academic_policy', 'AcademicController@view');
// Route::get('/view_academic_policy/{id}', 'AcademicController@read');
// Route::get('/delete_academic_policy/{id}', 'AcademicController@delete');
// Route::get('/edit_academic_policy/{id}', 'AcademicController@edit');
// Route::post('/update_academic_policy', 'AcademicController@update');

//Requirements
// Route::post('/create_requirement', 'RequirementController@insert');
Route::get('/requirement', 'RequirementController@view');
Route::get('/view_requirement/{id}', 'RequirementController@read');
Route::get('/delete_requirement/{id}', 'RequirementController@delete');
Route::get('/edit_requirement/{id}', 'RequirementController@edit');
Route::post('/update_requirement', 'RequirementController@update');

//Guidelines
// Route::post('/create_guidelines', 'GuidelinesController@insert');
Route::get('/guidelines', 'GuidelinesController@view');
Route::get('/view_guidelines/{id}', 'GuidelinesController@read');
Route::get('/delete_guidelines/{id}', 'GuidelinesController@delete');
Route::get('/edit_guidelines/{id}', 'GuidelinesController@edit');
Route::post('/update_guidelines', 'GuidelinesController@update');

//Registration
// Route::post('/create_registration', 'RegistrationController@insert');
Route::get('/registration', 'RegistrationController@view');
Route::get('/view_registration/{id}', 'RegistrationController@read');
Route::get('/delete_registration/{id}', 'RegistrationController@delete');
Route::get('/edit_registration/{id}', 'RegistrationController@edit');
Route::post('/update_registration', 'RegistrationController@update');

//Enrollment
// Route::post('/create_enrollment', 'EnrollmentController@insert');
Route::get('/enrollment', 'EnrollmentController@view');
Route::get('/view_enrollment/{id}', 'EnrollmentController@read');
Route::get('/delete_enrollment/{id}', 'EnrollmentController@delete');
Route::get('/edit_enrollment/{id}', 'EnrollmentController@edit');
Route::post('/update_enrollment', 'EnrollmentController@update');

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

//Scholarships
// Route::post('/create_scholarship', 'ScholarshipController@insert');
// Route::get('/scholarship', 'ScholarshipController@view');
// Route::get('/view_scholarship/{id}', 'ScholarshipController@read');
// Route::get('/delete_scholarship/{id}', 'ScholarshipController@delete');
// Route::get('/edit_scholarship/{id}', 'ScholarshipController@edit');
// Route::post('/update_scholarship', 'ScholarshipController@update');

//Administrative
// Route::post('/create_administrative', 'AdministrativeController@insert');
// Route::get('/administrative', 'AdministrativeController@view');
// Route::get('/view_administrative/{id}', 'AdministrativeController@read');
// Route::get('/delete_administrative/{id}', 'AdministrativeController@delete');
// Route::get('/edit_administrative/{id}', 'AdministrativeController@edit');
// Route::post('/update_administrative', 'AdministrativeController@update');

//Alumni
// Route::post('/create_alumni', 'AlumniController@insert');
// Route::get('/alumni', 'AlumniController@view');
// Route::get('/view_alumni/{id}', 'AlumniController@read');
// Route::get('/delete_alumni/{id}', 'AlumniController@delete');
// Route::get('/edit_alumni/{id}', 'AlumniController@edit');
// Route::post('/update_alumni', 'AlumniController@update');

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

