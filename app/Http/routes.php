<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
-------------------------------------------------------------------------------------------------------------------------------
 									Start URLs that are open for all...
 ------------------------------------------------------------------------------------------------------------------------------
*/

//Route::get('/try', 'AdminReviewController@websiteOfTheDay'); 

Route::get('/', 'PagesController@getIndex');

Route::get('about', 'PagesController@getAbout');

Route::get('contact-us', 'ContactUSController@contactUS');
Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);

Route::get('evaluationmethod', 'PagesController@getEvaluationMethod');

Route::get('profile', ['as'=>'profile', 'uses'=>'PagesController@getProfile']);

Route::get('ranking', 'PagesController@getRanking');

Route::get('tbpreview', 'PagesController@getTbpReview');

Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');

Route::auth();

//Route::get('/home', ['as'=>'home', 'uses'=>'HomeController@index']);

Route::get('/loginorregister','PagesController@LoginOrRegister');


Route::post('/login/custom',[
	'uses' =>'LoginController@login',
	'as' => 'login.custom'
	]);

Route::get('/check-front-free-review/{id}', 'PagesController@CheckFreeReview');
Route::get('/check-front-text-review/{id}', 'PagesController@CheckTextReview');
Route::get('/check-front-video-review/{id}', 'PagesController@CheckVideoReview');

// This Logout route is for Admin Logout...
Route::get('/logout', 'LoginController@getLogout');

/*
-------------------------------------------------------------------------------------------------------------------------------
 										End URLs that are open for all...
 ------------------------------------------------------------------------------------------------------------------------------
*/
 
/*
-------------------------------------------------------------------------------------------------------------------------------
 									Start URLs For Admin Only.....
 ------------------------------------------------------------------------------------------------------------------------------
*/

Route::group(['middleware'=>['auth', 'prevent-back-history', 'admin']], function(){

	Route::get('/dashboard','AdminDashboard@getIndex');

	Route::get('/admin-about', 'AdminAboutController@getAbout');
	Route::post('/admin-about', ['as'=>'adminaboutus.store','uses'=>'AdminAboutController@postAbout']);

	Route::get('/admin-evalution-method', 'EvalutionMethodController@getMethod');
	Route::post('/admin-evalution-method', ['as'=>'evalutionmethod.store','uses'=>'EvalutionMethodController@postMethod']);

	Route::get('/userlist', 'AdminController@getUserList');

	Route::get('/total-websites', 'AdminController@getTotalWebsites');
	Route::get('/reviewed-websites', 'AdminController@getReviewedWebsites');
	Route::get('/remaining-websites', 'AdminController@getRamainingWebsites');

	Route::get('/free-plan-websites', 'AdminController@getFreePlanWebsites');
	Route::get('/text-plan-websites', 'AdminController@getTextPlanWebsites');
	Route::get('/video-plan-websites', 'AdminController@getVideoPlanWebsites');

	Route::get('/admin-review-Responsiveness', 'AdminReviewController@getAdminReviewResponsiveness');

	Route::get('/start-text-review/{id}', ['as' =>'ShowTextReview','uses'=>'AdminReviewController@StartTextReview']);
	Route::post('/start-text-review/{id}', ['as'=>'ShowTextReview','uses'=>'StoreTextReview@storeTextReview']);

	Route::get('/start-free-review/{id}', ['as'=>'ShowFreeReview','uses'=>'AdminReviewController@StartFreeReview']);
	Route::post('/start-free-review/{id}', ['as'=>'ShowFreeReview','uses'=>'StoreFreeReview@storeFreeReview']);

	Route::get('/start-video-review/{id}', ['as'=>'ShowVideoReview','uses'=>'AdminReviewController@StartVideoReview']);
	Route::post('/start-video-review/{id}', ['as'=>'ShowVideoReview','uses'=>'StoreVideoReview@storeVideoReview']);

	Route::get('/make-admin/{id}', 'AdminController@makeAdmin');
	Route::get('/remove-admin/{id}', 'AdminController@removeAdmin');

});

Route::get('no-rights-admin', 'AdminController@noRightsAdmin');

/*
-------------------------------------------------------------------------------------------------------------------------------
 										End Admin URLs
 ------------------------------------------------------------------------------------------------------------------------------
*/

/*
-------------------------------------------------------------------------------------------------------------------------------
 									Start URLs for Users only...
 ------------------------------------------------------------------------------------------------------------------------------
*/

Route::get('noRights', 'UserController@noRights');

Route::group(['middleware'=>['auth', 'prevent-back-history', 'ruser']], function(){

	Route::get('/user-dashboard', function(){
		return view('user.UserDashboard');
	})->name('user-dashboard');

	
	//Route::get('/dashboard', 'AdminDashboard@getIndex');
	//Route::get('/submitsite', 'SubmitSiteController@getSubmitForm');
	//Route::post('/submitsite', ['as'=>'submitsite.store','uses'=>'SubmitSiteController@postSubmitForm']);	

	Route::get('/user-total-websites', 'UserDashboardController@getTotalWebsites');	

	Route::get('/user-total-reviewed-websites', 'UserDashboardController@getReviewedWebsites');

	Route::get('/user-total-remaining-websites', 'UserDashboardController@getRamainingWebsites');
	
	Route::get('/user-free-plan-websites', 'UserController@getFreePlanWebsites');
	
	Route::get('/user-text-plan-websites', 'UserController@getTextPlanWebsites');
	
	Route::get('/user-video-plan-websites', 'UserController@getVideoPlanWebsites');	

	Route::get('freeform', 'FreeFormController@getFreeForm');
	Route::post('freeform', ['as'=>'freeform.store','uses'=>'FreeFormController@postFreeForm']);

	Route::get('textform', 'TextFormController@getTextForm');
	Route::post('textform', ['as'=>'textform.store','uses'=>'TextFormController@postTextForm']);

	Route::get('videoform', 'VideoFormController@getVideoForm');
	Route::post('videoform', ['as'=>'videoform.store','uses'=>'VideoFormController@postVideoForm']);

	Route::get('/paytextplan', 'TextFormController@getPaymentPage');
	Route::get('/payvideoplan', 'VideoFormController@getPaymentPage');

	Route::post('/pay/{product}', [
    	'uses' => 'OrderController@postPayWithStripe',
    	'as' => 'pay'
	]);
 
	Route::post('/store', [
    	'uses' => 'OrderController@postPayWithStripe',
    	'as' => 'store'
	]);

	//Route::post('start-review/{id}','AdminReviewController@edit');

	Route::get('/user-dashboard', 'UserController@Index');

	//Route::get('/user-reviewed-website', 'UserController@getWebsiteList');
	
	Route::get('/check-free-review/{id}', 'UserController@CheckFreeReview');
	Route::get('/check-text-review/{id}', 'UserController@CheckTextReview');
	Route::get('/check-video-review/{id}', 'UserController@CheckVideoReview');

});

/*
-------------------------------------------------------------------------------------------------------------------------------
 										End Users URLs
 ------------------------------------------------------------------------------------------------------------------------------
*/

 /*

Route::controller('datatables', 'DatatablesController', [
    'anyData'  => 'datatables.data',
    'getIndex' => 'datatables',
]);

*/


