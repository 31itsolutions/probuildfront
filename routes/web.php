<?php

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
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdmindesignController;


Route::get('/', [HomeController::class, 'welcome'])->name('index');
Auth::routes();

// Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::post('/mail/{id}', [HomeController::class, 'mail'])->name('contactmail');


// Route::get('/login/admin', [LoginController::class, 'login'])->name('admin');

//apply filter

Route::post('apply/filter/', [CustomerController::class, 'apply_filter'])->name('apply_filter');

Route::post('tender_req/posted/{id}', [CustomerController::class, 'tender_req'])->name('tender_req');

Route::get('sub_category_load', [CustomerController::class, 'sub_category_load'])->name('sub_category_load');

Route::get('customer_profile/edit/{id}', [CustomerController::class, 'customer_profile_edit'])->name('customer_profile_edit');

Route::get('/login/vendor', [LoginController::class, 'showVendorLoginForm'])->name('vendor_login');
Route::get('/login/customer', [LoginController::class, 'showCustomerLoginForm'])->name('customer_login');
Route::get('/register/vendor', [RegisterController::class, 'showVendorRegisterForm'])->name('vendor_register');
Route::get('/register/customer', [RegisterController::class, 'showCustomerRegisterForm'])->name('customer_register');

Route::post('/login/modalVendor', [LoginController::class, 'vendorModalLogin'])->name('vendorModalLogin');
Route::post('/login/vendor', [LoginController::class, 'vendorLogin']);
Route::post('/login/customer', [LoginController::class, 'customerLogin']);
Route::post('/register/vendor', [RegisterController::class, 'createVendor']);
Route::post('/register/customer', [RegisterController::class, 'createCustomer']);

Route::get('/get_sub_category', [CustomerController::class, 'get_sub_category'])->name('get_sub_category');





Route::post('vendor/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('vendor.logout');

Route::post('customer/logout', 'App\Http\Controllers\Auth\LoginController@customerLogout')->name('customer_logout');

// Route::post('admin/logout', 'App\Http\Controllers\Auth\LoginController@adminLogout')->name('admin.logout');


Route::group(['middleware' => 'auth:customer'], function () {

	Route::get('/customer-home', [CustomerController::class, 'customer_Home'])->name('customer');

	Route::get('customer/tender', [CustomerController::class, 'tender'])->name('customer_tendor');
	Route::get('request/call/{id}', [CustomerController::class, 'request_call'])->name('request_call');
	Route::get('request/list', [CustomerController::class, 'request_call_li'])->name('request_call_li');
	Route::post('/requestFQ', [CustomerController::class, 'requestFQ'])->name('requestFQ');

});



Route::group(['middleware' => 'auth:vendor'], function () {

	Route::get('vendor_profile/edit/{id}', [VendorController::class, 'vendor_profile_edit'])->name('vendor_profile_edit');
	Route::get('getVendor_detail', [HomeController::class, 'getVendor_detail'])->name('getVendor_detail');

	Route::get('vendor/company/profile/{id}', [VendorController::class, 'vendor_company_profile'])->name('vendor_company_profile');

	Route::post('update/profile/{id}', [VendorController::class, 'update_vendor_profile'])->name('update_vendor_profile');

	Route::get('vendor/packages/yearly/', [VendorController::class, 'vendor_package'])->name('vendor_package');

	Route::get('add_business/page', [VendorController::class, 'add_business'])->name('add_business');

	Route::get('/vendor-home', [VendorController::class, 'vendor_home'])->name('vendor');

	Route::get('vendor/package/monthly/', [VendorController::class, 'vendor_package_monthly'])->name('vendor_package_monthly');

	Route::get('tendor/request/{id}', [VendorController::class, 'tendor_request'])->name('tendor_request');

	Route::post('multipleImage_upload', [VendorController::class, 'multipleImage_upload'])->name('multipleImage_upload');

	// Route::post('attachments','UploadController@store')->name('attachments');

	Route::get('request/action/accepted/{id}', [VendorController::class, 'request_action_accepted'])->name('request_action_accepted');

	Route::get('request/action/rejected/{id}', [VendorController::class, 'request_action_rejected'])->name('request_action_rejected');

	Route::get('request/request/removed/{id}', [VendorController::class, 'request_call_removed'])->name('request_call_removed');

	Route::get('request/action/removed/{id}', [VendorController::class, 'request_action_removed'])->name('request_action_removed');
	Route::get('deleteBusiness/{id}', [VendorController::class, 'deleteBusiness'])->name('deleteBusiness');


	Route::post('update/gallery/image/{id}', [VendorController::class, 'update_gallery_image'])->name('update_gallery_image');

	// Route::get('request/action/accepted/{id}', [VendorController::class, 'request_action_accepted'])->name('request_action_accepted');

	Route::get('request/call/vendor/{id}', [VendorController::class, 'request_call_vendor'])->name('request_call_vendor');
	Route::get('request/for/q/{id}', [VendorController::class, 'request_for_q'])->name('request_for_q');

	// Route::get('request/request/removed/{id}', [VendorController::class, 'request_call_removed'])->name('request_call_removed'); 
// Route::get('request/action/removed/{id}', [VendorController::class, 'request_action_removed'])->name('request_action_removed');
	Route::get('tendor/action/accepted/{id}', [VendorController::class, 'tendor_action_accepted'])->name('tendor_action_accepted');

	Route::get('tendor/action/rejected/{id}', [VendorController::class, 'tendor_action_rejected'])->name('tendor_action_rejected');

	Route::get('tendor/request/removed/{id}', [VendorController::class, 'tendor_request_removed'])->name('tendor_request_removed');

	Route::get('tendor/action/removed/{id}', [VendorController::class, 'tendor_action_removed'])->name('tendor_action_removed');



	Route::get('package/checkout/{id}', [VendorController::class, 'package_checkout'])->name('package_checkout');

});



Route::delete('/delete_image/{id}', [AdmindesignController::class, 'delete_image'])->name('delete_image');

Route::get('add_product_image/{id}', [AdminController::class, 'add_product_image'])->name('add_product_image');
Route::delete('/delete/business/{id}', [AdmindesignController::class, 'delete_business'])->name('delete_business');
Route::post('/change_business_status', [AdminController::class, 'change_business_status'])->name('change_business_status');
Route::post('/change_business_featured_status', [AdminController::class, 'change_business_featured_status'])->name('change_business_featured_status');
Route::get('edit/company_profile/{id}', [AdmindesignController::class, 'edit_company_profile'])->name('edit_company_profile');


/**
 * Customer page 
 */

Route::post('add_customer/image/{id}', [CustomerController::class, 'addImage'])->name('Add_image');

// Route::get('update/profile/{id}', [CustomerController::class, 'updateProfile'])->name('update_profile'); 

Route::post('profile/updated/{id}', [CustomerController::class, 'update_profile_info'])->name('update_profile_info');

Route::get('Add_tendor/information/{id}', [CustomerController::class, 'updateProfile'])->name('update_profile');

Route::get('customer/wishlist/', [CustomerController::class, 'wishlist'])->name('wishlist');
Route::post('wishlists/store', [CustomerController::class, 'wishlists_store'])->name('wishlists_store');


Route::post('tendor/posted/{id}', [CustomerController::class, 'postTendor'])->name('post_tendor');


Route::get('/customer_company/{id}', [CustomerController::class, 'customer_company'])->name('customer_company');
/**
 * Vendor page 
 */
// Route::post('update/profile/{id}', [VendorController::class, 'updateProfile'])->name('update_profile'); 

Route::post('add/image/{id}', [VendorController::class, 'addImage'])->name('Add_vendor_image');

// Route::get('vendor/packages', [VendorController::class, 'vendorPackages'])->name('vendor_package'); 

// Route::get('tendor/request', [VendorController::class, 'tendorRequest'])->name('tendor_request'); 

// Route::get('package/checkout', [VendorController::class, 'packageCheckout'])->name('package_checkout'); 

// package decide

// Route::get('standard_package/page', [VendorController::class, 'standard_package_page'])->name('standard_package_page'); 

// Route::get('premium_package/page', [VendorController::class, 'premium_package_page'])->name('premium_package_page'); 


Route::post('update/business/', [VendorController::class, 'update_business'])->name('update_business');

Route::post('attachments', [VendorController::class, 'store_image'])->name('store_image');

Route::get('vendor_profile/page', [VendorController::class, 'vendor_profile'])->name('vendor_profile');

Route::get('business/edit/{id}', [VendorController::class, 'business_edit'])->name('business_edit');

Route::post('business/edit_update/', [VendorController::class, 'edit_update_business'])->name('edit_update_business');

//update business logo
Route::post('business/update/logo/{id}', [VendorController::class, 'update_logo'])->name('update_logo');

//update banner
Route::post('business/update/banner/{id}', [VendorController::class, 'update_banner'])->name('update_banner');

//update update_brochure
Route::post('business/update/brochure/{id}', [VendorController::class, 'update_brochure'])->name('update_brochure');

//update update_brochure
Route::post('business/update/document/{id}', [VendorController::class, 'update_document'])->name('update_document');

//add more gallery image
Route::post('business/update/image/{id}', [VendorController::class, 'update_g_image'])->name('update_g_image');

//add more gallery image
Route::post('business/add/image/{id}', [VendorController::class, 'add_more_image'])->name('add_more_image');

//add more add more product 
Route::post('add/more/product{id}', [VendorController::class, 'add_more_product'])->name('add_more_product');

//update location 
Route::post('update/location{id}', [VendorController::class, 'update_location'])->name('update_location');

//update location 
Route::post('update/social{id}', [VendorController::class, 'update_social'])->name('update_social');

//update location 
Route::post('update/contact{id}', [VendorController::class, 'update_contact'])->name('update_contact');

//update location 
Route::post('update/time{id}', [VendorController::class, 'update_time'])->name('update_time');

//update product
Route::post('update/product/{id}', [VendorController::class, 'update_product'])->name('update_product');

// Route::post('dropzone/upload', 'DropzoneController@upload')->name('dropzone.upload');
// Route::get('dropzone/fetch', 'DropzoneController@fetch')->name('dropzone.fetch');
// Route::get('dropzone/delete', 'DropzoneController@delete')->name('dropzone.delete');


/**
 * Admin portion
 */

Route::get('package/details', [AdminController::class, 'PackageDetail'])->name('PackageDetail');


Route::post('update/package/{id}', [AdminController::class, 'update_package'])->name('update_package');

Route::post('create/package/', [AdminController::class, 'store_package'])->name('store_package');

//delete-package
Route::delete('/delete-package/{id}', [AdminController::class, 'delete_package'])->name('delete_package');

Route::get('edit/package/{id}', [AdminController::class, 'edit_package'])->name('edit_package');

Route::get('create/package/', [AdminController::class, 'create_package'])->name('create_package');

Route::get('create/admin/', [AdminController::class, 'create_vendor'])->name('create_vendor');

Route::post('create/vendor/', [AdminController::class, 'store_vendor'])->name('store_vendor');

Route::get('view_package_detail/{id}', [AdminController::class, 'view_package_detail'])->name('view_package_detail');


// Design update
Route::get('create_image/', [AdmindesignController::class, 'create_image'])->name('create_image');
Route::post('update_image/', [AdmindesignController::class, 'update_image'])->name('update_image');
Route::get('advertisement/', [AdmindesignController::class, 'advertisement'])->name('advertisement');

//  advertisement 
Route::post('update_advertisement/', [AdmindesignController::class, 'update_advertisement'])->name('update_advertisement');
Route::post('update_advertisement_next/', [AdmindesignController::class, 'update_advertisement_next'])->name('update_advertisement_next');
Route::post('update_edited_advertisement/{id}', [AdmindesignController::class, 'update_edited_advertisement'])->name('update_edited_advertisement');
Route::delete('/delete_advertisement/{id}', [AdmindesignController::class, 'delete_advertisement'])->name('delete_advertisement');

//  advertisement next
Route::get('edit_advertisement_next/', [AdmindesignController::class, 'edit_advertisement_next'])->name('edit_advertisement_next');
Route::post('update_edited_advertisement_next/{id}', [AdmindesignController::class, 'update_edited_advertisement_next'])->name('update_edited_advertisement_next');
Route::get('edit_advertisement/', [AdmindesignController::class, 'edit_advertisement'])->name('edit_advertisement');
Route::delete('/delete_advertisement_next/{id}', [AdmindesignController::class, 'delete_advertisement_next'])->name('delete_advertisement_next');



Route::get('main_category/', [AdmindesignController::class, 'main_category'])->name('main_category');
Route::post('update_category/', [AdmindesignController::class, 'update_category'])->name('update_category');
Route::get('view_category/', [AdmindesignController::class, 'view_category'])->name('view_category');
Route::delete('/delete_category/{id}', [AdmindesignController::class, 'delete_category'])->name('delete_category');
Route::get('edit_category/{id}', [AdmindesignController::class, 'edit_category'])->name('edit_category');
Route::post('update_edited_category/{id}', [AdmindesignController::class, 'update_edited_category'])->name('update_edited_category');


Route::get('/searchText', [CustomerController::class, 'searchText'])->name('searchText');
Route::get('/business/subCategory', [VendorController::class, 'business_subCategory'])->name('business_subCategory');


Route::get('/search_filter', [CustomerController::class, 'search_filter'])->name('search_filter');
Route::get('/subCategorys/{id}', [CustomerController::class, 'subCategorys'])->name('subCategorys');
Route::get('sub_category/', [AdmindesignController::class, 'sub_category'])->name('sub_category');
Route::post('update_sub_category/', [AdmindesignController::class, 'update_sub_category'])->name('update_sub_category');
Route::get('view_sub_category/', [AdmindesignController::class, 'view_sub_category'])->name('view_sub_category');
Route::delete('/delete_sub_category/{id}', [AdmindesignController::class, 'delete_sub_category'])->name('delete_sub_category');
Route::get('edit_sub_category/{id}', [AdmindesignController::class, 'edit_sub_category'])->name('edit_sub_category');
Route::post('update_edited_sub_category/{id}', [AdmindesignController::class, 'update_edited_sub_category'])->name('update_edited_sub_category');





//admin Customer details
Route::get('user_accounts/', [AdminController::class, 'user_accounts'])->name('user_accounts');
Route::get('user_account/{id}', [AdminController::class, 'user_account'])->name('user_account');
Route::get('user_account/tendor_req/{id}', [AdminController::class, 'tendor_req'])->name('tendor_req');
Route::post('updating/status/{id}', [AdminController::class, 'change_status'])->name('change_status');
Route::get('edit_customer/{id}', [AdminController::class, 'edit_customer'])->name('edit_customer');
Route::post('update_customer/{id}', [AdminController::class, 'update_customer'])->name('update_customer');



//admin Vendor details
Route::get('vendor_accounts/', [AdminController::class, 'vendor_accounts'])->name('vendor_accounts'); // view vendor li
Route::get('vendor_account/{id}', [AdminController::class, 'vendor_account'])->name('vendor_account'); //view vendor profile
Route::get('edit_vendor/{id}', [AdminController::class, 'edit_vendor'])->name('edit_vendor'); //edit vendor profile 
Route::post('update_vendor/{id}', [AdminController::class, 'update_vendor'])->name('update_vendor'); //update edited vendor profile

Route::get('company_profile/{id}', [AdminController::class, 'company_profile'])->name('company_profile');
Route::get('business_detail/{id}', [AdminController::class, 'business_detail'])->name('business_detail');
Route::get('add_company_profile/{id}', [AdminController::class, 'add_company_profile'])->name('add_company_profile');


Route::get('tendor_detail/{id}', [AdminController::class, 'tendor_detail'])->name('tendor_detail');
Route::post('change_account_status/{id}', [AdminController::class, 'change_account_status'])->name('change_account_status');
Route::post('/change_premium', [AdminController::class, 'change_premium'])->name('change_premium');
Route::post('change_package_details/{id}', [AdminController::class, 'change_package_details'])->name('change_package_details');
Route::post('/change-status', [AdminController::class, 'change_status_vendor'])->name('change_status_vendor');




/**
 * Forget Password
 */
//Vendor 

Route::get('vendor-forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('vendor.forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');


//customer
Route::get('customer-forget-password', [ForgotPasswordController::class, 'showcustomerForgetPasswordForm'])->name('customer.forget.password.get');
Route::post('customer-forget-password', [ForgotPasswordController::class, 'submitcustomerForgetPasswordForm'])->name('customer.forget.password.post');
Route::get('customer-reset-password/{token}', [ForgotPasswordController::class, 'showcustomerResetPasswordForm'])->name('customer.reset.password.get');
Route::post('customer-reset-password', [ForgotPasswordController::class, 'submitcustomerResetPasswordForm'])->name('customer.reset.password.post');




Route::post('add_business_admin/{id}', [AdmindesignController::class, 'add_business_admin'])->name('add_business_admin');
Route::post('add_business_admin/{id}', [AdmindesignController::class, 'add_business_admin'])->name('add_business_admin');
Route::post('update_business_admin/{id}', [AdmindesignController::class, 'update_business_admin'])->name('update_business_admin');

Route::delete('/delete_product/{id}', [AdmindesignController::class, 'delete_product'])->name('delete_product');

Route::post('add_product_admin/{id}', [AdmindesignController::class, 'add_product_admin'])->name('add_product_admin');
Route::post('add_more_product_admin/{id}', [AdmindesignController::class, 'add_more_product_admin'])->name('add_more_product_admin');
Route::post('update_product_admin/{id}', [AdmindesignController::class, 'update_product_admin'])->name('update_product_admin');

Route::post('add_image_admin/{id}', [AdmindesignController::class, 'add_image_admin'])->name('add_image_admin');
Route::post('update_image_admin/{id}', [AdmindesignController::class, 'update_image_admin'])->name('update_image_admin');
Route::post('update_more_image_admin/{id}', [AdmindesignController::class, 'update_more_image_admin'])->name('update_more_image_admin');



// footer detail
Route::get('about_us/', [AdmindesignController::class, 'about_us'])->name('about_us');
Route::post('update_about_us/', [AdmindesignController::class, 'update_about_us'])->name('update_about_us');
Route::get('termsAndConditions', [AdmindesignController::class, 'termsAndConditions'])->name('termsAndConditions');
Route::get('privacyPolicy', [AdmindesignController::class, 'privacyPolicy'])->name('privacyPolicy');
Route::get('about_uspage', [AdmindesignController::class, 'about_usPage'])->name('about_usPage');
Route::get('faq_page', [AdmindesignController::class, 'faq_page'])->name('faq_page');
Route::post('addFAQ_us', [AdmindesignController::class, 'addFAQ_us'])->name('addFAQ_us');
Route::get('privacy_policy/', [AdmindesignController::class, 'privacy_policy'])->name('privacy_policy');
Route::get('terms_of_policy/', [AdmindesignController::class, 'terms_of_policy'])->name('terms_of_policy');
Route::get('content_us/', [AdmindesignController::class, 'content_us'])->name('content_us');
Route::post('addContact_us/', [AdmindesignController::class, 'addContact_us'])->name('addContact_us');



// Admin profile dtail

Route::get('admin/profile/', [HomeController::class, 'admin_profile'])->name('admin_profile');
Route::post('admin/profile/update/', [HomeController::class, 'update_profile'])->name('update_profile');

Route::get('getVendor_detail', [HomeController::class, 'getVendor_detail'])->name('getVendor_detail');


// update review 

Route::post('update/review/{id}', [CustomerController::class, 'update_review'])->name('update_review');



Route::get('under_construction', [HomeController::class, 'under_construction'])->name('under_construction');