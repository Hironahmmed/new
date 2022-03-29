<?php

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;
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
//Frontend Routes
 Route::get('/','Frontend\FrontendController@index')->name('home');
 Route::get('/blog','Frontend\FrontendController@blog')->name('blog');
 Route::get('/blog/post/{slug}','Frontend\FrontendController@details')->name('post.details');
 Route::get('/faq','Frontend\FrontendController@faq')->name('faq');
 Route::get('/about','Frontend\FrontendController@about')->name('about');
 Route::get('/member','Frontend\FrontendController@member')->name('member');
 Route::get('/privacy','Frontend\FrontendController@privacy')->name('privacy');
 Route::get('/terms','Frontend\FrontendController@terms')->name('terms');
 Route::get('/affiliate','Frontend\FrontendController@affiliate')->name('affiliate');
 Route::get('/contact-us','Frontend\FrontendController@contact')->name('contact-us');
 Route::post('/emails', 'Customer\DashboardController@emails')->name('emails');


// Public Subscriber
Route::post('subscriber','Admin\SubscriberController@store')->name('subscriber.store');

// Filepond File Upload
Route::post('upload', 'FileUploadController@store');

// Download video Route
Route::get('download/{video}', function($video)
{
    // Check if file exists in app/storage/file folder
    $file_path = storage_path().'/app/public/video/'.$video;
    if (file_exists($file_path))
    {
        // Send Download
        return Response::download($file_path, $video, [
            'Content-Length: '. filesize($file_path)
        ]);
        return back();
    }
    else
    {
        return back();
    }
})->where('video', '[A-Za-z0-9\-\_\.]+');


// Download Gif one Route
Route::get('download/{gif_one}', function($gif_one)
{
    // Check if file exists in app/storage/file folder
    $file_path = storage_path().'/app/public/gif/'. $gif_one;
    if (file_exists($file_path))
    {
        // Send Download
        return Response::download($file_path, $gif_one, [
            'Content-Length: '. filesize($file_path)
        ]);
        return back();
    }
    else
    {
        // Error
        return back();
    }
})->where('gif_one', '[A-Za-z0-9\-\_\.]+');

// Download Gif Two Route
Route::get('download/{gif_two}', function($gif_two)
{
    // Check if file exists in app/storage/file folder
    $file_path = storage_path().'/app/public/gif/'. $gif_two;
    if (file_exists($file_path))
    {
        // Send Download
        return Response::download($file_path, $gif_two, [
            'Content-Length: '. filesize($file_path)
        ]);
        return back();
    }
    else
    {
        // Error
        return back();
    }
})->where('gif_two', '[A-Za-z0-9\-\_\.]+');

// Download Gif Three Route
Route::get('download/{gif_two}', function($gif_two)
{
    // Check if file exists in app/storage/file folder
    $file_path = storage_path().'/app/public/gif/'. $gif_two;
    if (file_exists($file_path))
    {
        // Send Download
        return Response::download($file_path, $gif_two, [
            'Content-Length: '. filesize($file_path)
        ]);
        return back();
    }
    else
    {
        // Error
        return back();
    }
})->where('gif_two', '[A-Za-z0-9\-\_\.]+');

Auth::routes();

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
| Here is only admin related routes. These
| routes are loaded by the admin within a group which
| contains the "web" admin group.
*/
Route::group(['as'=>'admin.','prefix'=>'admin','namespace','Admin','middleware'=>['auth','admin']], function(){
    Route::get('dashboard','Admin\DashboardController@index')->name('dashboard');
    Route::get('settings','Admin\SettingsController@index')->name('settings');
    Route::put('profile-update','Admin\SettingsController@updateProfile')->name('profile.update');
    Route::put('password-update','Admin\SettingsController@updatePassword')->name('password.update');
    // Freelancer
    Route::resource('freelancer','Admin\FreelancerController');
    Route::get('freelancer/{user_id}/{status}','Admin\FreelancerController@UpdateStatus')->name('freelancer.status');
    // Author
    Route::resource('author','Admin\AuthorController');
    Route::get('author/{user_id}/{status}','Admin\AuthorController@UpdateStatus')->name('author.status');
    // Customer
    Route::resource('customer','Admin\CustomerController');
    Route::get('customer/{user_id}/{status}','Admin\CustomerController@UpdateStatus')->name('customer.status');
    // Options
    Route::resource('option/collection','Admin\CollectionController');
    Route::resource('option/platform','Admin\PlatformController');
    Route::resource('option/country','Admin\CountryController');
    // Aliexpress Explore
    Route::resource('explore/aliexpress','Admin\AliexpressController');
    Route::get('explore/alipending','Admin\AliexpressController@pendingAliexpress')->name('aliexpress.pending');
    Route::put('explore/aliexpress/{id}/approve','Admin\AliexpressController@approval')->name('aliexpress.approve');
    // Amazon
    Route::resource('explore/amazon','Admin\AmazonController');
    Route::put('explore/amazon/{id}/approve','Admin\AmazonController@approval')->name('amazon.approve');
    // Shopify
    Route::resource('explore/shopify','Admin\ShopifyController');
    Route::put('explore/shopify/{id}/approve','Admin\ShopifyController@approval')->name('shopify.approve');
    // Facebook
    Route::resource('ads/facebook','Admin\FacebookController');
    Route::put('ads/facebook/{id}/approve','Admin\FacebookController@approval')->name('facebook.approve');
    // Tiktok
    Route::resource('ads/tiktok','Admin\TiktokController');
    Route::put('ads/tiktok/{id}/approve','Admin\TiktokController@approval')->name('tiktok.approve');
    // Blog
    Route::resource('blog/tag','Admin\TagController');
    Route::resource('blog/category','Admin\CategoryController');
    Route::resource('blog/post','Admin\PostController');
    Route::get('blog/pending/post','Admin\PostController@pending')->name('post.pending');
    Route::put('blog/post/{id}/approve','Admin\PostController@approval')->name('post.approve');
    // Subscriber
    Route::get('subscriber','Admin\SubscriberController@index')->name('subscriber.index');
    Route::delete('subscriber/{subscriber}','Admin\SubscriberController@destroy')->name('subscriber.destroy');
    // Pages
    Route::resource('page/privacy','Admin\PrivacyController');
    Route::resource('page/term','Admin\TermController');
    Route::resource('page/plan','Admin\PlanController');
});

/*
|--------------------------------------------------------------------------
| Freelancer Routes
|--------------------------------------------------------------------------
| Here is only freelancer related routes. These
| routes are loaded by the freelancer within a group which
| contains the "web" freelancer group.
*/
Route::group(['as'=>'freelancer.','prefix'=>'freelancer','namespace','Freelancer','middleware'=>['auth','freelancer']], function(){
    Route::get('dashboard','Freelancer\DashboardController@index')->name('dashboard');
    Route::get('settings','Freelancer\SettingsController@index')->name('settings');
    Route::put('profile-update','Freelancer\SettingsController@updateProfile')->name('profile.update');
    Route::put('password-update','Freelancer\SettingsController@updatePassword')->name('password.update');
    // Tiktok
    Route::resource('ads/tiktok','Freelancer\TiktokController');
    // Facebook
    Route::resource('ads/facebook','Freelancer\FacebookController');
    // Aliexpress Explore
    Route::resource('explore/aliexpress','Freelancer\AliexpressController');
    // Amazon
    Route::resource('explore/amazon','Freelancer\AmazonController');
    // Shopify
    Route::resource('explore/shopify','Freelancer\ShopifyController');
});

/*
|--------------------------------------------------------------------------
| Customer Routes
|--------------------------------------------------------------------------
| Here is only customer related routes. These
| routes are loaded by the customer within a group which
| contains the "web" customer group.
*/
Route::group(['as'=>'customer.','namespace','Customer','middleware'=>['auth','customer']], function(){
    Route::get('dashboard','Customer\DashboardController@index')->name('dashboard');
    Route::get('settings','Customer\SettingsController@index')->name('settings');
    Route::put('profile-update','Customer\SettingsController@updateProfile')->name('profile.update');
    Route::put('password-update','Customer\SettingsController@updatePassword')->name('password.update');
    Route::get('profile','Customer\DashboardController@profile')->name('profile');
    // Facebook
    Route::get('facebook','Customer\ProductController@facebookAd')->name('facebook');
    Route::get('facebook/{slug}','Customer\ProductController@facebookDetails')->name('facebook.details');
    // Tiktok
    Route::get('tiktok','Customer\ProductController@tiktokad')->name('tiktok');
    Route::get('tiktok/{slug}','Customer\ProductController@tiktokDetails')->name('tiktok.details');
    // Shopify
    Route::get('shopify','Customer\ProductController@shopify')->name('shopify');
    // Aliexpress
    Route::get('aliexpress','Customer\ProductController@aliexpress')->name('aliexpress');
    // Amazon
    Route::get('amazon','Customer\ProductController@amazon')->name('amazon');
    // FAQ
    Route::get('my.faq','Customer\DashboardController@faq')->name('faq');
    // Contact Us
    Route::get('contact','Customer\DashboardController@contact')->name('contact');
    // Tutorials
    Route::get('tutorial','Customer\DashboardController@tutorial')->name('tutorial');
    // Favorite Ads Facebook
    Route::post('facebook/{facebook}/add','Customer\FavoriteController@addFacebook')->name('facebook.favorite');
    Route::get('favorite/facebook','Customer\FavoriteController@facebook')->name('facebook.favorite.index');
    // Favorite Ads Tiktok
    Route::post('tiktok/{tiktok}/add','Customer\FavoriteController@addTiktok')->name('tiktok.favorite');
    Route::get('favorite/tiktok','Customer\FavoriteController@tiktok')->name('tiktok.favorite.index');
    // Signup Page two
    Route::get('checkout','Customer\DashboardController@checkout')->name('checkout');

    Route::post('email', 'Customer\DashboardController@email')->name('email');
    
    Route::post('/subscribe', 'Customer\SubscriptionController@index')->name('subscribe');

    Route::get('/cancel-subscribe', 'Customer\SubscriptionController@cancel')->name('cancel-subscribe');
});

/*
|--------------------------------------------------------------------------
| Author Routes
|--------------------------------------------------------------------------
| Here is only author related routes. These
| routes are loaded by the author within a group which
| contains the "web" author group.
*/
Route::group(['as'=>'author.','prefix'=>'author','namespace','Author','middleware'=>['auth','author']], function(){
    Route::get('dashboard','Author\DashboardController@index')->name('dashboard');
    Route::get('settings','Author\SettingsController@index')->name('settings');
    Route::put('profile-update','Author\SettingsController@updateProfile')->name('profile.update');
    Route::put('password-update','Author\SettingsController@updatePassword')->name('password.update');
    Route::resource('blog/post','Author\PostController');
});


