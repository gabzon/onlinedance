<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\StyleController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware(['auth:sanctum', 'verified','verifyHasAccess'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified', 'paidCustomer'])->get('/subscribe', function () {
    return view('pages.subscribe',[
        'intent' => auth()->user()->createSetupIntent(),
    ]);
})->name('subscribe');

Route::middleware(['auth:sanctum', 'verified', 'paidCustomer'])->post('/subscribe', function (Request $request) {    
    auth()->user()->newSubscription('OnlineClass', $request->plan)
                    ->trialDays(1)
                    ->create($request->paymentMethod, [
                        'metadata' => ['note' => 'Monthly access'],
                    ]);
    return redirect('dashboard');
})->name('subscribe.post');


Route::middleware(['auth:sanctum', 'verified', 'payingCustomer'])->get('members', function () {
    return view('pages.members');
})->name('members');

Route::middleware(['auth:sanctum', 'verified'])->group(function(){    
    Route::resource('admin/setting', SettingController::class);
    Route::resource('admin/course', CourseController::class);
    Route::resource('admin/style', StyleController::class);
    Route::resource('admin/instructor', InstructorController::class);
    Route::resource('admin/user', UserController::class);
});

Route::middleware(['auth:sanctum', 'verified', 'payingCustomer'])->get('invoices', function () {
    return view('pages.invoices', ['invoices' => auth()->user()->invoices()]);
})->name('invoices');


Route::get('styles', function(){
    return view('pages.styles');
})->name('styles');

Route::get('instructors', function(){
    return view('pages.instructors');
})->name('instructors');


Route::get('/user/invoice/{invoice}', function (Request $request, $invoiceId) {
    return $request->user()->downloadInvoice($invoiceId, [
        'vendor' => 'Online Class',
        'product' => 'Monthly program',
    ]);
});
