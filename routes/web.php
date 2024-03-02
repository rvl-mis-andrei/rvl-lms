<?php

use App\Http\Controllers\AuthController\Login as LoginController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SysAdminController\Page as SysAdminPage;

use App\Http\Controllers\AdminController\Page as AdminPage;
use App\Services\SystemServices\WebRoute as SystemRoute;

// GUEST ROUTES
use App\Http\Controllers\GuestController\Page as GuestPage;
use App\Http\Controllers\GuestController\PageData as GuestPageData;

// MIS ROUTES
use App\Http\Controllers\MISController\Page as MISPage;
use App\Http\Controllers\MISController\Action\Create as MISCreate;
use App\Http\Controllers\MISController\Action\Update as MISUpdate;

Route::get('/', function(){ return redirect()->route('guest_login'); });

Route::group(['prefix'=>'ilearn','middleware'=>['preventBackHistory']],function(){

    Route::get('/', function(){ return redirect()->route('guest_login'); });
    Route::get('csrf', function(){ return csrf_token(); });

    Route::controller(LoginController::class)->group(function () {
        Route::group(['middleware'=>['prevent.authenticated']],function(){
            Route::get('/mis', 'index')->name('mis_login');
            Route::get('/guest', 'index')->name('guest_login');
        });

        Route::group(['middleware'=>['check.throttle']],function(){
            Route::post('/login', 'login')->name('login');
            Route::post('logout', 'logout')->name('logout');
        });
    });

    Route::group(['prefix'=>'mis','middleware'=>['auth','mis']],function(){

        Route::controller(MISPage::class)->group(function () {
            Route::post('/page-content', 'page_content');
            $routes = (new SystemRoute())->getMisRoutes();
            if($routes){
                foreach ($routes as $data) {
                    if (($name = $data->name) && !Route::has($name)) {
                        Route::get($data->url, $data->method)->name($name);
                    }
                }
            }
        });

        Route::post('/mis-create',[MISCreate::class,'index'])->name('mis.create');
        Route::post('/mis-update',[MISUpdate::class,'eq_qrcode'])->name('mis.update');

    });

    Route::group(['prefix'=>'guest','middleware'=>['auth','isGuest']],function(){
        Route::post('/page-data',[GuestPageData::class,'page_data']);

        Route::controller(GuestPage::class)->group(function () {

            Route::post('/page-content', 'page_content');

            $routes = (new SystemRoute())->getGuestRoutes();
            if($routes){
                foreach ($routes as $data) {
                    if (($name = $data->name) && !Route::has($name)) {
                        Route::get($data->url, $data->method)->name($name);
                    }
                }
            }

        });

    });

});


// Route::group(['prefix'=>'admin','middleware'=>['auth','admin']], function() {

//     Route::controller(AdminPage::class)->group(function () {

//         Route::post('/page-content', 'page_content');

//         $routes = (new SystemRoute())->getAdminRoutes();
//         if($routes){
//             foreach ($routes as $data) {
//                 if (($name = $data->name) && !Route::has($name)) {
//                     Route::get($data->url, $data->method)->name($name);
//                 }
//             }
//         }

//     });

// });

// Route::group(['prefix'=>'system-admin','middleware'=>['auth','system.admin']],function(){

//     Route::controller(SysAdminPage::class)->group(function () {

//         Route::post('/page-content', 'page_content');

//         Route::get('/dashboard', 'index');

//     });

// });


