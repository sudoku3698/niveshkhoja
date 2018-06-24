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


Route::get('/','enduser\SearchController@landing')->name('landing');

Route::post('/add_listing','enduser\SearchController@add_listing')->name('add_listing');

Route::get('getAvailableCities','logic\LogicController@getAvailableCities');

Route::post('searchServices','enduser\SearchController@searchService')->name('searchServices');

Route::get('get_service_by_name/{service_type}','enduser\SearchController@get_service_by_name')->name('get_service_by_name');

Route::get('search-list','enduser\SearchController@getSerachList')->name('search-list');

Route::get('search-list-by-service','enduser\SearchController@getSearchListByService')->name('search-list-by-service');


Route::post('add_city_filter','enduser\SearchController@add_city_filter')->name('add_city_filter');

Route::post('add_cat_filter','enduser\SearchController@add_cat_filter')->name('add_cat_filter');

Route::get('list-details/{service}/{id}','enduser\SearchController@list_details')->name('list-details');

Route::post('submit-review','enduser\ReviewController@postReview')->name('submit-review');

Route::get('/admin', function () {
    return redirect('login');
});


Route::get('/login', function () {
    return view('login');
});

Route::post('postlogin','LoginController@index');

Route::get('logout','LoginController@logout')->name('logout');


Route::get('get_cities','logic\LogicController@get_cities');

Route::get('get_tables','logic\LogicController@get_tables');

Route::post('get_services','logic\LogicController@get_services');

Route::post('get_service_list','logic\LogicController@get_service_list');

Route::post('get_list_detail','logic\LogicController@get_list_detail');

Route::group(['middleware' => ['CheckUserSession','web']], function (){

Route::get('/listings','AddListingController@get_listings')->name('listings');

Route::get('/reviews','AddListingController@get_reviews')->name('reviews');

Route::get('get_sms','PublicActivityController@get_sms')->name('get_sms');

Route::get('get_quotes','PublicActivityController@get_quotes')->name('get_quotes');

Route::get('get_categories','CategoriesController@get_categories')->name('get_categories');

Route::get('add_new_category','CategoriesController@add_new_category')->name('add_new_category');

Route::post('post_new_category','CategoriesController@post_new_category')->name('post_new_category');

Route::get('edit_category/{cat_id}','CategoriesController@edit_category')->name('edit_category');

Route::post('update_category','CategoriesController@update_category')->name('update_category');

Route::get('delete_category/{cat_id}','CategoriesController@delete_category')->name('delete_category');

Route::get('get_service_info','PublicActivityController@get_service_info')->name('get_service_info');

Route::get('dashboard','LoginController@dashboardcount')->name('dashboardcount');

Route::get('advertisement','AdvertisementController@index')->name('advertisement');

Route::post('/add_ad','AdvertisementController@add_ad')->name('add_ad');

Route::post('/delete_ad','AdvertisementController@delete_ad')->name('delete_ad');

Route::get('/bank','BankController@bank')->name('bank');

Route::get('/cfacategory', function () {
    return view('cfacategory');
})->name('cfacategory');


Route::get('/insurance', function () {
    return view('insurance');
})->name('insurance');

Route::post('/bankdetails','BankController@addbankdetails');

Route::get('downloadbankdetailsExcel/{type}', 'MaatwebsiteController@downloadbankdetailsExcel')->name('downloadbankdetailsExcel');
Route::post('importbankdetailsExcel', 'MaatwebsiteController@importbankdetailsExcel')->name('importbankdetailsExcel');

Route::get('downloadbrokersubbrokerdetailsExcel/{type}', 'MaatwebsiteController@downloadbrokersubbrokerdetailsExcel')->name('downloadbrokersubbrokerdetailsExcel');
Route::post('importbrokersubbrokerdetailsExcel', 'MaatwebsiteController@importbrokersubbrokerdetailsExcel')->name('importbrokersubbrokerdetailsExcel');

Route::get('downloadcfadetailsExcel/{type}', 'MaatwebsiteController@downloadcfadetailsExcel')->name('downloadcfadetailsExcel');
Route::post('importcfadetailsExcel', 'MaatwebsiteController@importcfadetailsExcel')->name('importcfadetailsExcel');

Route::get('downloadinsurancedetailsExcel/{type}', 'MaatwebsiteController@downloadinsurancedetailsExcel')->name('downloadinsurancedetailsExcel');
Route::post('importinsurancedetailsExcel', 'MaatwebsiteController@importinsurancedetailsExcel')->name('importinsurancedetailsExcel');

Route::get('downloadloandetailsExcel/{type}', 'MaatwebsiteController@downloadloandetailsExcel')->name('downloadloandetailsExcel');
Route::post('importloandetailsExcel', 'MaatwebsiteController@importloandetailsExcel')->name('importloandetailsExcel');

Route::get('downloadmutualfunddetailsExcel/{type}', 'MaatwebsiteController@downloadmutualfunddetailsExcel')->name('downloadmutualfunddetailsExcel');
Route::post('importmutualfunddetailsExcel', 'MaatwebsiteController@importmutualfunddetailsExcel')->name('importmutualfunddetailsExcel');

Route::get('downloadpostofficedetailsExcel/{type}', 'MaatwebsiteController@downloadpostofficedetailsExcel')->name('downloadpostofficedetailsExcel');
Route::post('importpostofficedetailsExcel', 'MaatwebsiteController@importpostofficedetailsExcel')->name('importpostofficedetailsExcel');

Route::get('downloadinvestment_advisorsdetailsExcel/{type}', 'MaatwebsiteController@downloadinvestment_advisorsdetailsExcel')->name('downloadinvestment_advisorsdetailsExcel');
Route::post('importinvestment_advisorsdetailsExcel', 'MaatwebsiteController@importinvestment_advisorsdetailsExcel')->name('importinvestment_advisorsdetailsExcel');

Route::get('downloadresearch_analystdetailsExcel/{type}', 'MaatwebsiteController@downloadresearch_analystdetailsExcel')->name('downloadresearch_analystdetailsExcel');
Route::post('importresearch_analystdetailsExcel', 'MaatwebsiteController@importresearch_analystdetailsExcel')->name('importresearch_analystdetailsExcel');

Route::get('/broker-add', function () {
    return view('broker_sub_broker');
})->name('broker-add');

Route::get('/loan', function () {
    return view('loan');
})->name('loan');

Route::get('/mutual_fund_distributors', function () {
    return view('mutual_fund_distributors');
})->name('mutual_fund_distributors');

Route::get('/postofficepage', function () {
    return view('postoffice');
})->name('postofficepage');

Route::get('/investment_advisors', function () {
    return view('investment_advisors');
})->name('investment_advisors');


Route::get('/research_analyst', function () {
    return view('research_analyst');
})->name('research_analyst');

// Route::get('/getbankdetails_fetch/{id}', function () {
//     return view('bankdetails');
// })->name('getbankdetails_fetch');



Route::post('postbrokersubbroker','BankController@postbrokersubbroker');
Route::get('getbankdetails','BankController@getbankdetails')->name('getbankdetails');
Route::post('/postcfacategory','BankController@cfacategory');
Route::post('/postinsurance','BankController@postinsurance');
Route::post('/postloan','BankController@postloan');
Route::post('/postmutual_fund','BankController@postmutual_fund');
Route::post('/postoffice','BankController@postoffice');
Route::post('/postinvestment_advisors','BankController@postinvestment_advisors');
Route::post('/postresearch_analyst','BankController@postresearch_analyst');
Route::get('getbrokersubbroker','BankController@getbrokersubbroker')->name('getbrokersubbroker');
Route::get('getcfacategory','BankController@getcfacategory')->name('getcfacategory');
Route::get('getloan','BankController@getloan')->name('getloan');
Route::get('getmutual_fund','BankController@getmutual_fund')->name('getmutual_fund');
Route::get('getInsurance','BankController@getInsurance')->name('getInsurance');
Route::get('getpostoffice','BankController@getpostoffice')->name('getpostoffice');
Route::get('getinvestment_advisors','BankController@getinvestment_advisors')->name('getinvestment_advisors');
Route::get('getresearch_analyst','BankController@getresearch_analyst')->name('getresearch_analyst');

Route::get('editbankdetails/{id}','BankController@getbankdetails_fetch');
Route::post('updatebankdetails','BankController@updatebankdetails');

Route::get('editbrokersubbroker/{id}','BankController@broker_add_fetch');
Route::post('updatebrokersubbroker','BankController@updatebrokersubbroker');

Route::get('editcfacategory_fetch/{id}','BankController@postcfacategory_fetch');
Route::post('updatecfacategory','BankController@updatecfacategory');

Route::get('editinsurance_fetch/{id}','BankController@updatepostinsurance_fetch');
Route::post('updatepostinsurance','BankController@updatepostinsurance');

Route::get('editloan_fetch/{id}','BankController@updateloan_fetch');
Route::post('updateLoan','BankController@updatepostloan');

Route::get('editmutualfund_fetch/{id}','BankController@updatemutualfund_fetch');
Route::post('updatepostmutual_fund','BankController@updatepostmutual_fund');

Route::get('editpostoffice_fetch/{id}','BankController@updatepostoffice_fetch');
Route::post('updatepostoffice','BankController@updatepostoffice');


Route::get('editpostinvestment_fetch/{id}','BankController@updatepostinvestment_fetch');
Route::post('updatepostinvestment_advisors','BankController@updatepostinvestment_advisors');


Route::get('editResearchAnalyst_fetch/{id}','BankController@updateResearchAnalyst_fetch');
Route::post('updatepostresearch_analyst','BankController@updatepostresearch_analyst');



Route::get('deletebank/{id}','BankController@deletebankdetails');


Route::get('deletebroker/{id}','BankController@deleteBrokersubbroker');

Route::get('deletecfa/{id}','BankController@deletecfa');


Route::get('deleteinsurance/{id}','BankController@deleteinsurance');


Route::get('deleteloan/{id}','BankController@deleteloan');
Route::get('deletemutualfund/{id}','BankController@deletemutualfund');
Route::get('deletepostoffice/{id}','BankController@deletepostoffice');


Route::get('deleteinvestment/{id}','BankController@deleteinvestment');
Route::get('deleteResearchAnalyst/{id}','BankController@deleteResearchAnalyst');
Route::post('searchkeyword','SearchController@search_category');
Route::get('search','SearchController@master_cat');


});