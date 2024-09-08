<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChangePass;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
 use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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


//----------------Test Area  ----------------------------------------//

 
Route::get('/', function () {
    $brands= DB::table('brands')->get();
    return view('home',compact('brands'));
});

 

Route::get('/category/all' ,[CategoryController::class,'AllCat'])->name('all.category');
//----------------Categories ----------------------------------------//
Route::group(['middleware'=>['auth','admin']],function(){
Route::get('/dashboard', [UserController::class,'index'])->name('dashboard');


Route::post('/category/add' ,[CategoryController::class,'AddCat'])->name('store.category');


//Edit category
Route::get('/category/edit/{id}' ,[CategoryController::class,'Edit']);
Route::post('/category/update/{id}' ,[CategoryController::class,'Update']);


//Delete Category
Route::get('softdelete/category/update/{id}' ,[CategoryController::class,'Softdelete']);


//Restore Category
Route::get('category/restore/{id}' ,[CategoryController::class,'Restore']);
Route::get('pdelete/category/{id}' ,[CategoryController::class,'Pdelete']);


//----------------Slider  Routes ----------------------------------------//
Route::get('home/slider' , [HomeController::class,'homeSlider'])->name('home.slider');
Route::get('add/slider' , [HomeController::class,'AddSlider'])->name('add.slider');
Route::post('store/slider' , [HomeController::class,'StoreSlider'])->name('store.slider');
Route::get('/slider/edit/{id}' ,[HomeController::class,'edit']);
Route::post('/slider/update/{id}' ,[HomeController::class,'update'])->name('slider.update');
Route::get('/slider/delete/{id}' ,[HomeController::class,'destroy']);

});
//----------------brand routes ----------------------------------------//
 
Route::get('/brand/all', [BrandController::class, 'index'])->name('all.brand');
Route::post('/brand/add' ,[BrandController::class,'store'])->name('store.brand')->middleware('admin');
Route::get('/brand', [BrandController::class, 'index']);
Route::get('/brand/edit/{id}' ,[BrandController::class,'edit']);
Route::post('/brand/update/{id}' ,[BrandController::class,'update']);
Route::get('/brand/delete/{id}' ,[BrandController::class,'destroy']);

 
//----------------FrontEnd  ----------------------------------------//
Route::get('/contact' ,[ContactController::class,'index']);
//----------------Portfolio Routes ----------------------------------------//
Route::get('/portfolio', [AboutController::class,'Portfolio'])->name('portfolio');


//----------------user Auth ----------------------------------------//
Route::get('/user/logout', [BrandController::class,'Logout'])->name('user.logout');

//----------------Multi Image Route ----------------------------------------//
Route::get('multi.image' , [BrandController::class,'Multipic'])->name('multi.image');
Route::post('image.add' , [BrandController::class,'Storemultiimage'])->name('store.image');

//----------------Verify Emaill ----------------------------------------//

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');


//----------------About Routes ----------------------------------------//
Route::get('home/about' , [AboutController::class,'HomeAbout'])->name('home.about');
Route::get('add/about' , [AboutController::class,'AddAbout'])->name('add.about');
Route::post('store/about' , [AboutController::class,'StoreAbout'])->name('store.about');
Route::get('/about/edit/{id}' ,[AboutController::class,'EditAbout']);
 Route::post('/update/homeabout/{id}' ,[AboutController::class,'UpdateAbout']);
 Route::get('/about/delete/{id}' ,[AboutController::class,'DeleteAbout']);


//----------------Admin Contact  Page Routes ----------------------------------------//
Route::get('admin/contact' , [ContactController::class,'AdminContact'])->name('admin.contact');
Route::get('admin/add/contact' , [ContactController::class,'AdminAddcontact'])->name('add.contact');
Route::post('admin/store/contact' , [ContactController::class,'AdminStorecontact'])->name('store.contact');
Route::get('admin/message' , [ContactController::class,'AdminMessage'])->name('admin.message');
 
//----------------Home contact  Routes ----------------------------------------//

Route::get('contact' , [ContactController::class,'Contact'])->name('contact');
Route::post('contact/form' , [ContactController::class,'ContactForm'])->name('contact.form');


//----------------Change user profile route ----------------------------------------//
 
Route::get('user/password' , [ChangePass::class,'Cpassword'])->name('change.password');
Route::post('/password/update', [ChangePass::class, 'UpdatePassword'])->name('password.update');


// User Profile 
Route::get('/user/profile', [ChangePass::class, 'PUpdate'])->name('profile.update');
Route::post('/user/profile/update', [ChangePass::class, 'UpdateProfile'])->name('update.user.profile');





// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     // Route::get('/dashboard', function () {
//     //     $users = DB::table('users')->get();
//     //     return view('dashboard',compact('users'));
//     // })->name('dashboard');
// });

// Auth::routes();


 