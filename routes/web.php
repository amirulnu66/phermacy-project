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
//
//Route::get('/', function () {
//    return view('welcome');
//});

//admin dashboard
//Route::get('/dashboard','Backend\WelcomeController@index');

Route::get('/login', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/', 'Backend\HomeController@index');
Route::get('/dashboard', 'Backend\HomeController@index');

//Company settings
Route::get('/settinge/settings-info', 'Backend\SettingsController@settingShow');
Route::post('/settinges/manage-settings', 'Backend\SettingsController@ManageSettings');

//Medicin route
Route::get('/pharmacy/products/add_new_porduct', 'Backend\MedicinController@createMedicin');
Route::get('/pharmacy/products/products-list', 'Backend\MedicinController@showMedicin');

//Medicine Brand route
Route::get('/pharmacy/Brands/brands','Backend\BrandController@showBrands');
Route::get('/pharmacy/Brands/addBrandView','Backend\BrandController@createBrand');

//supplier route
Route::get('/pharmacy/suppliers/New_suppliers','Backend\SupplierController@createSupplier');
Route::get('/pharmacy/suppliers','Backend\SupplierController@showSupplier');

//Medicine category route
Route::get('/pharmacy/category/categories','Backend\CategoryController@createCategory');
Route::get('/pharmacy/category/category-list','Backend\CategoryController@showCategories');
Route::get('/pharmacy/category/category/edit/{id}','Backend\CategoryController@MedicinCategoryEdit');
Route::post('/pharmacy/category/category/update','Backend\CategoryController@categoryStore');
Route::get('/pharmacy/category/delete/{id}','Backend\CategoryController@deleteCategory');

//medicine Sells controller
Route::get('/pharmacy/medicine/medicine-sells','Backend\SellController@createSells');
Route::get('/pharmacy/medicine/sells-invoice','Backend\SellController@showselinvoice');


//customer route
Route::get('/pharmacy/Ccustomer/customer','Backend\CustomerController@createCustomer');
Route::post('/pharmacy/Ccustomer/store','Backend\CustomerController@managecustomerStore');
Route::get('/pharmacy/Ccustomer/edit/{customerId}','Backend\CustomerController@managecustomerEdit');

Route::get('/pharmacy/Ccustomer/customer-show','Backend\CustomerController@showCustomer');
Route::get('/pharmacy/Ccustomer/customer/delete/{id}','Backend\CustomerController@customerDelete');
Route::get('/pharmacy/Ccustomer/paid_customer','Backend\CustomerController@paidCustomer');
Route::get('/pharmacy/Ccustomer/credit_customer','Backend\CustomerController@creditCustomer');


//user staff route
Route::get('/pharmacy/staff/accountant','Backend\StaffController@createStaff');
Route::get('/pharmacy/staff/manage-accountant','Backend\StaffController@showStaff');

//Stoks Reports route 
Route::get('/pharmacy/Creport/stoke-reports','Backend\StokeController@stokeReports');
Route::get('/pharmacy/Creport/stock-report-supplier-wise','Backend\StokeController@stSuppReports');
Route::get('/pharmacy/Creport/stock-report-product-wise','Backend\StokeController@stProReports');
Route::get('/pharmacy/Creport/stock-report-batch-wise','Backend\StokeController@stbatchReports');

//purchase invoice Reports route
Route::get('/pharmacy/products/envantory-list','Backend\InvoiceController@envantoryList');
//Sales invoice Reports route
Route::get('/pharmacy/products/purchase-list','Backend\InvoiceController@purchaseList');

//company route
Route::get('/company/manage-company','Backend\CompanyController@companyManage');






