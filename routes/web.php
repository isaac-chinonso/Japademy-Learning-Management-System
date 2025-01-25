<?php

use App\Http\Controllers\Admin\AdminPageController;
use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\User\UserPageController;
use App\Http\Controllers\User\UserPostController;

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

Route::get('/', [PageController::class, 'index'])->name('homepage');

Route::get('/contact-us', [PageController::class, 'contact'])->name('contact');

Route::get('/login', [PageController::class, 'login'])->name('login');

Route::get('/register', [PageController::class, 'register']);

Route::post('/sigin', [AuthController::class, 'signin'])->name('signin');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/savelogin', [AuthController::class, 'savelogin'])->name('savelogin');

Route::middleware(['auth'])->get('/pathway', [PageController::class, 'pathway'])->name('pathway');

Route::middleware(['auth'])->get('/choose-a-pathway', [PageController::class, 'choosepathway'])->name('choosepathway');

Route::middleware(['auth'])->get('/scholarship-form', [PageController::class, 'scholarship'])->name('scholarship');

Route::middleware(['auth'])->post('/scholarship-apply', [UserPostController::class, 'savescholarship'])->name('scholarship.apply');


Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'before' => 'admin'], function () {

    Route::get('/dashboard', [AdminPageController::class, 'dashboard'])->name('admindashboard');

    Route::get('/settings', [AdminPageController::class, 'setting'])->name('adminsettings');


    Route::get('/category', [AdminPageController::class, 'category'])->name('admincategory');

    Route::post('save-course-category', [AdminPostController::class, 'savecoursecategory']);

    Route::post('update-course-category/{id}', [AdminPostController::class, 'updatecoursecategory'])->name('updatecoursecategory');

    Route::get('delete-course-category/{id}', [AdminPostController::class, 'deletecoursecategory'])->name('deletecoursecategory');


    Route::get('/courses', [AdminPageController::class, 'courses'])->name('admincourses');

    Route::get('/add-course', [AdminPageController::class, 'addcourse']);

    Route::post('/save-course', [AdminPostController::class, 'savecourse']);

    Route::get('edit-course/{slug}', [AdminPageController::class, 'editcourse'])->name('admineditcourse');

    Route::post('update-course/{slug}', [AdminPostController::class, 'updatecourse'])->name('updatecourse');

    Route::get('delete-course/{id}', [AdminPostController::class, 'deletecourse'])->name('deletecourse');


    Route::get('/lesson', [AdminPageController::class, 'lesson'])->name('adminlesson');

    Route::get('create-lesson', [AdminPageController::class, 'createlesson']);

    Route::post('save-lesson', [AdminPostController::class, 'savelesson']);

    Route::post('update-lesson/{id}', [AdminPostController::class, 'updatelesson'])->name('updatelesson');

    Route::get('delete-lesson/{id}', [AdminPostController::class, 'deletelesson'])->name('deletelesson');


    Route::get('members', [AdminPageController::class, 'users']);

    Route::get('activate-user', [AuthController::class, 'activateuser'])->name('activateuser');

    Route::get('deactivate-user', [AuthController::class, 'deactivateuser'])->name('deactivateuser');


    Route::get('/resources', [AdminPageController::class, 'resources'])->name('adminresources');

    Route::get('/add-resources', [AdminPageController::class, 'addresources']);

    Route::post('/save-resources', [AdminPostController::class, 'saveresources']);

    Route::get('delete-resources/{id}', [AdminPostController::class, 'deleteresources'])->name('deleteresources');


    Route::get('reviews', [AdminPageController::class, 'reviews']);

    Route::get('delete-review/{id}', [AdminPostController::class, 'deletereview'])->name('deletereview');

    Route::get('/approve-review/{id}', [AdminPostController::class, 'approvereview'])->name('adminapprovereview');


    Route::get('orders', [AdminPageController::class, 'orders']);

});

Route::group(['middleware' => 'auth', 'prefix' => 'learner', 'before' => 'learner'], function () {

    Route::get('/dashboard', [UserPageController::class, 'dashboard'])->name('learnerdashboard');

    Route::get('/settings', [UserPageController::class, 'setting'])->name('learnersettings');

    Route::post('/update-profile', [AuthController::class, 'updateprofile'])->name('learnerupdateprofile');

    Route::get('/resources', [UserPageController::class, 'resources'])->name('learnerresources');

    Route::get('/courses', [UserPageController::class, 'courses'])->name('learnercourses');

    Route::get('/support', [UserPageController::class, 'review'])->name('learnerreview');

    Route::post('/save-ticket', [UserPostController::class, 'saveticket'])->name('learnersaveticket');
    

});

