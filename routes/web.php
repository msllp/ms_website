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

Route::get('/', function () {
    return view('Home.index');
});

Route::get('/erp-in-india',function () {return view('SeoPages.erpIndia');});
Route::get('/erp-provider-in-india',function () {return view('SeoPages.erpIndia');});


Route::get('/web-based-erp', '\F\SeoPages\Controller@erpIndia');
Route::get('/offline-erp', '\F\SeoPages\Controller@erpIndia');
//Route::get('/scada-erp', '\F\SeoPages\Controller@erpIndia');
Route::get('/about-us', function () {return view('Home.company');});
Route::get('/product/ms-flex', function () {return view('Product.msflex');});
Route::get('/product/ms-erp', function () {return view('Product.mserp');});
Route::get('/product/ms-crm', function () {return view('Product.mscrm');});
Route::get('/product/ms-cca', function () {return view('Product.mscca');});

Route::get('/contact-us', function () {return view('Home.contactus');});

Route::get('/service/it-consultancy', function () {return view('Service.it');});
Route::get('/service/web-development-designing', function () {return view('Service.web');});
Route::get('/service/custom-erp-development', function () {return view('Service.erp');});
Route::get('/industries/retail', function () {return view('Industries.retail');});
Route::post('/Query/post', "\B\Query\Controller@post");

// Route::get('/erp-for-canteen', '\F\SeoPages\Controller@erpCan');

// Route::get('/erp-for-manufacturing','\F\SeoPages\Controller@erpMan');


// Route::get('/erp-for-infrastructure','\F\SeoPages\Controller@erpInfr');

// Route::get('/erp-for-food-processing','\F\SeoPages\Controller@erpFood');


// Route::get('/erp-for-small-enterprise', '\F\SeoPages\Controller@erpSE');


// Route::get('/erp-for-medium-enterprise', '\F\SeoPages\Controller@erpME');

// Route::get('/erp-for-big-enterprise', '\F\SeoPages\Controller@erpBE');

// Route::get('/erp-for-government-organizations', '\F\SeoPages\Controller@erpGO');
