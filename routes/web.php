<?php

Auth::routes();

//FrontEnd Route
Route::get('/','FrontEndController@index');
Route::get('/home','FrontEndController@index');
Route::get('/user-dashboard','FrontEndController@userDashboard');

Route::get('/service-category/{id}','FrontEndController@serviceCategoryDetails');
Route::get('/service-details/{id}','FrontEndController@serviceDetails');
Route::get('category-blog/{id}','FrontEndController@categoryBlog');
Route::get('blog','FrontEndController@blog');
Route::get('blog-details/{id}','FrontEndController@blogDetails');
Route::get('comment','FrontEndController@comment');
Route::post('comment-store','FrontEndController@commentSave')->name('comment.store');
Route::get('/reply/{id}','FrontEndController@replyWithId');
Route::post('reply-store','FrontEndController@replySave')->name('reply.store');
Route::get('jobOppurtunity','FrontEndController@jobOppurtunity');
Route::get('event','FrontEndController@event');
Route::get('event-details/{id}','FrontEndController@eventDetails');
Route::get('about','FrontEndController@about');
Route::get('trainers','FrontEndController@trainers');
Route::get('team','FrontEndController@team');
Route::get('erp','FrontEndController@erp');
Route::get('erp-details/{id}','FrontEndController@erpDetails');


/*Route::get('course-name/{id}','FrontEndController@courseName');*/
Route::get('course-name/{id}','FrontEndController@course');
Route::get('/course-search/{serchText}','ajax\CourseSearchController@courseSearch');

Route::get('/course-details/{id}','FrontEndController@courseDetails');
Route::get('contact','FrontEndController@contact');
//Mail Route
Route::post('contact-mail','frontend\MailController@mailContact')->name('mail.contact');
Route::post('appointment-mail','frontend\MailController@mailAppointment')->name('mail.appointment');
//Common Route

//Admin Route
Route::prefix('admin')->group(function(){	
Route::get('dashboard','admin\AdminController@index')->name('dashboard.index');
Route::resource('post-category','admin\PostCategoryController');
Route::resource('post','admin\PostController');
Route::resource('service-category','admin\ServiceCategoryController');
Route::resource('service','admin\ServiceController');

Route::resource('service-details','admin\ServiceDetailController');
Route::resource('course-category','admin\CourseCategoryController');
Route::resource('course','admin\CourseController');
Route::resource('course-details','admin\CourseDetailController');
Route::resource('curriculum','admin\CurriculumController');
Route::resource('author','admin\AuthorController');
Route::resource('team','admin\TeamController');
Route::resource('erp','admin\ErpController');
Route::resource('event','admin\EventController');
Route::resource('job-opportunity','admin\JobopportunityController');
});

//Route::get('service-description')