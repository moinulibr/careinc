<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
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




Route::get('/clear', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});


Route::get('/', function () {
    return redirect(app()->getLocale());
});


Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => '[a-zA-Z]{2}'],
    'middleware' => 'setlocale',
], function() {


    Route::get('/','FrontendController@index')->name('frontend');
    Route::get('about','FrontendController@about')->name('about');
    Route::get('contact','FrontendController@contact')->name('contact');

    Route::get('online-pharmacy','FrontendController@onlinepharmacy')->name('online.pharmacy');
    Route::get('home-care','FrontendController@homecare')->name('home.care');
    Route::get('telemedicine','FrontendController@telemedicine')->name('telemedicine');
    Route::get('medicaltourism','FrontendController@medicaltourism')->name('medicaltourism');


    //route group and route resource use koren....


});









Auth::routes();







Route::get('logout','HomeController@logout')->name('logout');
Route::get('/home', 'HomeController@index')->name('home');




Route::group(['prefix'=>'admin/user','namespace'=>'Backend\User','middleware'=>['auth','admin']],function(){
      Route::get('index','UserController@index')->name('user.index');
      Route::get('create','UserController@create')->name('user.create');
      Route::post('store','UserController@store')->name('user.store');
      Route::get('show/{id}','UserController@show')->name('user.show');
      Route::get('edit/{id}','UserController@edit')->name('user.edit');
      Route::post('update/{id}','UserController@update')->name('user.update');
      Route::get('destroy/{id}','UserController@destroy')->name('user.destroy');


      Route::get('profile','ProfileController@index')->name('user.profile');
      Route::get('profile/edit','ProfileController@edit')->name('user.profile.edit');
      Route::post('profile/update','ProfileController@update')->name('user.profile.update');
      Route::get('setting','ProfileController@setting')->name('user.setting');
      Route::post('setting/update','ProfileController@changepassword')->name('user.setting.update');

});



Route::group(['prefix'=>'admin/category','namespace'=>'Backend\News','middleware'=>['auth','admin']],function(){
  		Route::get('index','CategoryController@index')->name('category.index');
  		Route::get('create','CategoryController@create')->name('category.create');
  		Route::post('store','CategoryController@store')->name('category.store');
  		Route::get('show/{id}','CategoryController@show')->name('category.show');
  		Route::get('edit/{id}','CategoryController@edit')->name('category.edit');
  		Route::post('update/{id}','CategoryController@update')->name('category.update');
  		Route::get('destroy/{id}','CategoryController@destroy')->name('category.destroy');
});


Route::group(['prefix'=>'sub/category','namespace'=>'Backend\News','middleware'=>['auth','admin']],function(){
  		Route::get('index','CategorysubController@index')->name('categorysub.index');
  		Route::get('create','CategorysubController@create')->name('categorysub.create');
  		Route::post('store','CategorysubController@store')->name('categorysub.store');
  		Route::get('show/{id}','CategorysubController@show')->name('categorysub.show');
  		Route::get('edit/{id}','CategorysubController@edit')->name('categorysub.edit');
  		Route::post('update/{id}','CategorysubController@update')->name('categorysub.update');
  		Route::get('destroy/{id}','CategorysubController@destroy')->name('categorysub.destroy');
});




Route::group(['prefix'=>'news','namespace'=>'Backend\News','middleware'=>['auth','admin']],function()
	{

  		Route::get('index','NewsController@index')->name('news.index');
  		Route::get('create','NewsController@create')->name('news.create');
  		Route::post('store','NewsController@store')->name('news.store');
  		Route::get('show/{id}','NewsController@show')->name('news.show');
  		Route::get('edit/{id}','NewsController@edit')->name('news.edit');
  		Route::post('update/{id}','NewsController@update')->name('news.update');
  		Route::get('destroy/{id}','NewsController@destroy')->name('news.destroy');


        Route::get('show/sub/category','NewsController@showsubcategory')->name('get.subcategory');



      Route::get('letter/index','LetterNewsController@index')->name('letter.news.index');
      Route::get('letter/create','LetterNewsController@create')->name('letter.news.create');
      Route::post('letter/store','LetterNewsController@store')->name('letter.news.store');
      Route::get('letter/show/{id}','LetterNewsController@show')->name('letter.news.show');
      Route::get('letter/approval/{id}','LetterNewsController@edit')->name('letter.news.edit');
      Route::post('letter/update/{id}','LetterNewsController@update')->name('letter.news.update');
      Route::get('letter/destroy/{id}','LetterNewsController@destroy')->name('letter.news.destroy');

      Route::get('letter/daft/{id}','LetterNewsController@daft')->name('letter.news.daft');
      Route::get('letter/proccessing/{id}','LetterNewsController@proccessing')->name('letter.news.proccessing');

});


Route::group(['prefix'=>'tag','namespace'=>'Backend\News','middleware'=>['auth','admin']],function()
{
  		Route::get('index','TagController@index')->name('tag.index');
  		Route::get('create','TagController@create')->name('tag.create');
  		Route::post('store','TagController@store')->name('tag.store');
  		Route::get('show/{id}','TagController@show')->name('tag.show');
  		Route::get('edit/{id}','TagController@edit')->name('tag.edit');
  		Route::post('update/{id}','TagController@update')->name('tag.update');
  		Route::get('destroy/{id}','TagController@destroy')->name('tag.destroy');

});


Route::group(['prefix'=>'pagelist','namespace'=>'Backend\News','middleware'=>['auth','admin']],function()
{
      Route::get('index','PageListController@index')->name('pagelist.index');
      Route::get('create','PageListController@create')->name('pagelist.create');
      Route::post('store','PageListController@store')->name('pagelist.store');
      Route::get('show/{id}','PageListController@show')->name('pagelist.show');
      Route::get('edit/{id}','PageListController@edit')->name('pagelist.edit');
      Route::post('update/{id}','PageListController@update')->name('pagelist.update');
      Route::get('destroy/{id}','PageListController@destroy')->name('pagelist.destroy');

});


















Route::group(['prefix'=>'reporter','namespace'=>'Backend\User','middleware'=>['auth','admin']],function()
	{

  		Route::get('index','ManPowerController@reproterindex')->name('reporter.index');
  		Route::get('create','ManPowerController@reprotercreate')->name('reporter.create');
  		Route::post('store','ManPowerController@reproterstore')->name('reporter.store');
  		Route::get('show/{id}','ManPowerController@reprotershow')->name('reporter.show');
  		Route::get('edit/{id}','ManPowerController@reproteredit')->name('reporter.edit');
  		Route::post('update/{id}','ManPowerController@reproterupdate')->name('reporter.update');
  		Route::get('destroy/{id}','ManPowerController@reproterdestroy')->name('reporter.destroy');

});


Route::group(['prefix'=>'writter','namespace'=>'Backend\User','middleware'=>['auth','admin']],function()
	{
  		Route::get('index','ManPowerController@index')->name('writter.index');
  		Route::get('create','ManPowerController@create')->name('writter.create');
  		Route::post('store','ManPowerController@store')->name('writter.store');
  		Route::get('show/{id}','ManPowerController@show')->name('writter.show');
  		Route::get('edit/{id}','ManPowerController@edit')->name('writter.edit');
  		Route::post('update/{id}','ManPowerController@update')->name('writter.update');
  		Route::get('destroy/{id}','ManPowerController@destroy')->name('writter.destroy');
});











Route::group(['prefix'=>'division','namespace'=>'Backend\Area','middleware'=>['auth','admin']],function()
	{
  		Route::get('index','DivisionController@index')->name('division.index');
  		Route::get('create','DivisionController@create')->name('division.create');
  		Route::post('store','DivisionController@store')->name('division.store');
  		Route::get('show/{id}','DivisionController@show')->name('division.show');
  		Route::get('edit/{id}','DivisionController@edit')->name('division.edit');
  		Route::post('update/{id}','DivisionController@update')->name('division.update');
  		Route::get('destroy/{id}','DivisionController@destroy')->name('division.destroy');
});


Route::group(['prefix'=>'district','namespace'=>'Backend\Area','middleware'=>['auth','admin']],function()
	{
  		Route::get('index','DistrictController@index')->name('district.index');
  		Route::get('create','DistrictController@create')->name('district.create');
  		Route::post('store','DistrictController@store')->name('district.store');
  		Route::get('show/{id}','DistrictController@show')->name('district.show');
  		Route::get('edit/{id}','DistrictController@edit')->name('district.edit');
  		Route::post('update/{id}','DistrictController@update')->name('district.update');
  		Route::get('destroy/{id}','DistrictController@destroy')->name('district.destroy');
});


Route::group(['prefix'=>'thana','namespace'=>'Backend\Area','middleware'=>['auth','admin']],function()
	{
  		Route::get('index','ThanaController@index')->name('thana.index');
  		Route::get('create','ThanaController@create')->name('thana.create');
  		Route::post('store','ThanaController@store')->name('thana.store');
  		Route::get('show/{id}','ThanaController@show')->name('thana.show');
  		Route::get('edit/{id}','ThanaController@edit')->name('thana.edit');
  		Route::post('update/{id}','ThanaController@update')->name('thana.update');
  		Route::get('destroy/{id}','ThanaController@destroy')->name('thana.destroy');
});





Route::group(['prefix'=>'website','namespace'=>'Backend\Setting','middleware'=>['auth','admin']],function()
  {
      Route::get('index','WebsiteSettingController@index')->name('website.setting.index');
      Route::get('create','WebsiteSettingController@create')->name('website.setting.create');
      Route::post('store','WebsiteSettingController@store')->name('website.setting.store');
      Route::get('show/{id}','WebsiteSettingController@show')->name('website.setting.show');
      Route::get('edit/','WebsiteSettingController@edit')->name('website.setting.edit');
      Route::post('update','WebsiteSettingController@update')->name('website.setting.update');
      Route::get('destroy/{id}','WebsiteSettingController@destroy')->name('website.setting.destroy');
});





Route::group(['prefix'=>'ads/position','namespace'=>'Backend\Ads','middleware'=>['auth','admin']],function()
  {
      Route::get('index','AdsPositionController@index')->name('ads.position.index');
      Route::get('create','AdsPositionController@create')->name('ads.position.create');
      Route::post('store','AdsPositionController@store')->name('ads.position.store');
      Route::get('show/{id}','AdsPositionController@show')->name('ads.position.show');
      Route::get('edit/{id}','AdsPositionController@edit')->name('ads.position.edit');
      Route::post('update/{id}','AdsPositionController@update')->name('ads.position.update');
      Route::get('destroy/{id}','AdsPositionController@destroy')->name('ads.position.destroy');

});


Route::group(['prefix'=>'ads','namespace'=>'Backend\Ads','middleware'=>['auth','admin']],function()
  {
      Route::get('index','AdsController@index')->name('ads.index');
      Route::get('create','AdsController@create')->name('ads.create');
      Route::post('store','AdsController@store')->name('ads.store');
      Route::get('show/{id}','AdsController@show')->name('ads.show');
      Route::get('edit/{id}','AdsController@edit')->name('ads.edit');
      Route::post('update/{id}','AdsController@update')->name('ads.update');
      Route::get('destroy/{id}','AdsController@destroy')->name('ads.destroy');

});









Route::group(['prefix'=>'gallery','namespace'=>'Backend\Gallery','middleware'=>['auth','admin']],function()
  {
      Route::get('index','GalleryController@index')->name('gallery.index');
      Route::get('create','GalleryController@create')->name('gallery.create');
      Route::post('store','GalleryController@store')->name('gallery.store');
      Route::get('show/{id}','GalleryController@show')->name('gallery.show');
      Route::get('edit/{id}','GalleryController@edit')->name('gallery.edit');
      Route::post('update/{id}','GalleryController@update')->name('gallery.update');
      Route::get('destroy/{id}','GalleryController@destroy')->name('gallery.destroy');

});




Route::group(['prefix'=>'poll','namespace'=>'Backend\Poll','middleware'=>['auth','admin']],function()
  {
      Route::get('index','PollController@index')->name('poll.index');
      Route::get('create','PollController@create')->name('poll.create');
      Route::post('store','PollController@store')->name('poll.store');
      Route::get('show/{id}','PollController@show')->name('poll.show');
      Route::get('edit/{id}','PollController@edit')->name('poll.edit');
      Route::post('update/{id}','PollController@update')->name('poll.update');
      Route::get('destroy/{id}','PollController@destroy')->name('poll.destroy');


      Route::get('poll/option/destroy/{id}','PollController@deletepollvalue')->name('poll.option.destroy');

});



Route::group(['prefix'=>'social-media','namespace'=>'Backend\Setting','middleware'=>['auth','admin']],function()
  {
      Route::get('index','SocialMediaController@index')->name('social.index');
      Route::get('create','SocialMediaController@create')->name('social.create');
      Route::post('store','SocialMediaController@store')->name('social.store');
      Route::get('show/{id}','SocialMediaController@show')->name('social.show');
      Route::get('edit/{id}','SocialMediaController@edit')->name('social.edit');
      Route::post('update/{id}','SocialMediaController@update')->name('social.update');
      Route::get('destroy/{id}','SocialMediaController@destroy')->name('social.destroy');

});







