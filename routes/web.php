<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailsController;
use App\Http\Controllers\User\HomeserviceController;
use App\Http\Controllers\User\NewspaperController;
use App\Http\Controllers\User\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialAuthController;
use App\Http\Controllers\User\HoneyController;
use App\Http\Controllers\User\HouseListingController;
use App\Http\Controllers\User\LogisticsController;
use App\Http\Controllers\User\NotificationController;
use App\Http\Controllers\User\OrderHistoryController;
use App\Http\Controllers\User\PartnershipController;
use App\Http\Controllers\User\ProductReviewController;
use App\Http\Controllers\User\SavedSubmissionController;

Route::get('auth/google', [SocialAuthController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('google/callback', [SocialAuthController::class, 'handleGoogleCallback']);

Route::get('test', function () {
    return view('user.orderhistory');
});

Route::get('about-us', function () {
    return view('frontend.aboutus');
})->name('aboutus');

Route::get('terms', function () {
    return view('frontend.terms');
})->name('terms');

Route::get('privacy', function () {
    return view('frontend.privacy');
})->name('privacy');


Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('resend/code/now', [MailsController::class, 'sendcode'])
        ->name('resend.code.now');

Route::post('/user/verify', [HomeController::class, 'ver'])->middleware(['auth', 'verified'])->name('user.verify');
Route::get('/user/verify', [HomeController::class, 'index'])->middleware(['auth', 'verified']);



//User info
Route::get('/user/profile', [ProfileController::class, 'index'])->middleware(['auth', 'verified'])->name('user.profile');

Route::get('/user/profile/edit', [ProfileController::class, 'edit'])->middleware(['auth', 'verified'])->name('user.profile.edit');
Route::post('/user/profile', [ProfileController::class, 'update'])->middleware(['auth', 'verified'])->name('user.profile.update');

Route::get('/user/profile/password/edit', [ProfileController::class, 'passwordedit'])->middleware(['auth', 'verified'])->name('user.profile.password.edit');
Route::post('/user/profile/password', [ProfileController::class, 'passwordupdate'])->middleware(['auth', 'verified'])->name('user.profile.password');



//User Homeservice
Route::get('/user/homeservice', [HomeserviceController::class, 'index'])->middleware(['auth', 'verified'])->name('user.homeservice');
Route::post('/user/homeservice', [HomeserviceController::class, 'store'])->middleware(['auth', 'verified'])->name('user.homeservice.store');
Route::get('/user/homeservice/delete/{id}', [HomeserviceController::class, 'deletehoney'])->middleware(['auth', 'verified'])->name('user.homeservice.delete');
Route::post('/user/homeservice/payment/upload', [HomeserviceController::class, 'paymentupload'])->middleware(['auth', 'verified'])->name('user.homeservice.payment.upload');


//User Honey Order
Route::get('/user/honey', [HoneyController::class, 'index'])->middleware(['auth', 'verified'])->name('user.honey');
Route::get('/user/honey/delete/{id}', [HoneyController::class, 'deletehoney'])->middleware(['auth', 'verified'])->name('user.honey.delete');
Route::post('/user/honey/payment/upload', [HoneyController::class, 'paymentupload'])->middleware(['auth', 'verified'])->name('user.honey.payment.upload');
Route::post('/user/honey', [HoneyController::class, 'store'])->middleware(['auth', 'verified'])->name('user.honey.store');
Route::post('/user/honey/home', [HoneyController::class, 'storehome'])->middleware(['auth', 'verified'])->name('user.honey.home.store');

//User Logistics
Route::get('/user/logistics', [LogisticsController::class, 'index'])->middleware(['auth', 'verified'])->name('user.logistics');
Route::post('/user/logistics', [LogisticsController::class, 'store'])->middleware(['auth', 'verified'])->name('user.logistics.store');


//Order History
Route::get('/user/orderhistory', [OrderHistoryController::class, 'index'])->middleware(['auth', 'verified'])->name('user.orderhistory');
Route::get('/user/orderhistory/{id}', [OrderHistoryController::class, 'destroy'])->middleware(['auth', 'verified'])->name('user.orderhistory.destroy');


//House listing
Route::get('/user/houselisting', [HouseListingController::class, 'index'])->middleware(['auth', 'verified'])->name('user.houselisting');
Route::post('/user/houselisting', [HouseListingController::class, 'store'])->middleware(['auth', 'verified'])->name('user.houselisting.store');

//House listing
Route::get('/user/partnership', [PartnershipController::class, 'index'])->middleware(['auth', 'verified'])->name('user.partnership');
Route::post('/user/partnership', [PartnershipController::class, 'store'])->middleware(['auth', 'verified'])->name('user.partnership.store');

Route::get('/user/notification', [NotificationController::class, 'index'])->middleware(['auth', 'verified'])->name('user.notification');

Route::get('/user/savedsubmission', [SavedSubmissionController::class, 'index'])->middleware(['auth', 'verified'])->name('user.savedsubmission');
Route::get('/user/savedsubmission/{id}', [SavedSubmissionController::class, 'destroy'])->name('user.savedsubmission.delete');
Route::get('/user/savedsubmission/{id}/upload', [SavedSubmissionController::class, 'uploadSavedSubmission'])->name('user.savedsubmission.upload');


//Newsletter route
//Route::get('/user/newspaper', [NewspaperController::class, 'index'])->middleware(['auth', 'verified'])->name('user.newspaper.index');
Route::post('/user/newspaper', [NewspaperController::class, 'store'])->middleware(['auth', 'verified'])->name('user.newspaper.store');


//Product review route
Route::get('/user/review', [ProductReviewController::class, 'index'])->middleware(['auth', 'verified'])->name('user.review.index');
Route::post('/user/review', [ProductReviewController::class, 'store'])->middleware(['auth', 'verified'])->name('user.review.store');
Route::get('/user/review/delete/{id}', [ProductReviewController::class, 'destroy'])->middleware(['auth', 'verified'])->name('user.review.delete');

//House listed
Route::get('/user/houselisted', [HouseListingController::class, 'listed'])->middleware(['auth', 'verified'])->name('user.houselisted');
Route::get('/user/houselisted/delete/{id}', [HouseListingController::class, 'deletelisted'])->middleware(['auth', 'verified'])->name('user.houselisted.delete');


require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
