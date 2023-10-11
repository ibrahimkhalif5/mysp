<?php


use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\Auth\VerificationController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// normal user without registration
Route::get('/',[HomeController::class,'home']);
Route::get('/about-us',[HomeController::class,'aboutus']);
Route::get('/gallery/view',[HomeController::class,'gallery']);
Route::get('/contact',[HomeController::class,'contact']);
Route::post('/contact-us',[HomeController::class,'contactus']);


Auth::routes(['verify' => true]);

// Admin section .only admin and super admin
Route::group(['middleware' => ['auth', 'verified',AdminMiddleware::class]], function () {
    Route::get('/admin/dashboard', [AdminController::class,'index']);
    Route::get('/user/home', [AdminController::class,'userhome']);

    Route::get('/admin/opportunities', [AdminController::class,'create']);
    Route::post('/admin/opportunities', [AdminController::class,'store']);
    Route::get('/admin/opportunities/view', [AdminController::class,'view']);
    Route::get('/career/edit/{id}', [AdminController::class,'jobedit']);
    Route::put('/career/update/{id}', [AdminController::class,'jobupdate']);

    Route::get('/fetch-careers', [AdminController::class,'fetchCareers']);


    // application

    Route::get('/user/application', [AdminController::class,'application']);
    Route::post('user/application/create', [AdminController::class,'appstore']);
    Route::get('user/application/edit/{id}', [AdminController::class,'appview']);
    Route::put('user/application/update/{id}', [AdminController::class,'appupdate']);
   
    
    Route::get('/gallery', [AdminController::class,'galleryview']);
    Route::get('/gallery-add', [AdminController::class,'galleryadd']);
    Route::post('/gallery', [AdminController::class,'gallery']);

    Route::get('/partner', [AdminController::class,'partner']);
    Route::get('/partner/add', [AdminController::class,'partneradd']);
    Route::post('/partner', [AdminController::class,'partnerstore']);
    
    Route::get('/add-users', [AdminController::class,'adduser']);
    Route::get('/users', [AdminController::class,'viewuser']);
    Route::post('/users', [AdminController::class,'userstore']);
    Route::get('/user-role/{id}', [AdminController::class,'userview']);
    Route::put('/user-update/{id}', [AdminController::class,'usersupdate']);

    Route::get('/profile-view/{id}', [AdminController::class,'profile']);
    Route::get('/group-view/{id}', [AdminController::class,'groupview']);
    Route::get('/admin/applicant/CV/{id}', [AdminController::class,'cv']);
   
    // Report links
    Route::get('/admin/youth/report', [AdminController::class,'youthregistration']);
    Route::get('/admin/postgraduate/report', [AdminController::class,'postg']);
    Route::get('/admin/undergraduate/report', [AdminController::class,'underg']);
    Route::get('/admin/college/report', [AdminController::class,'college']);
    Route::get('/admin/vocational/report', [AdminController::class,'vocational']);
    Route::get('/admin/secondary/report', [AdminController::class,'kcse']);
    Route::get('/admin/primary/report', [AdminController::class,'KCPE']);
    Route::get('/admin/madarasa/report', [AdminController::class,'madarasa']);
});
// Admin section ends here