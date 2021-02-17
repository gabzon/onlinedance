<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\StyleController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Cashier\SubscriptionBuilder\RedirectToCheckoutResponse;

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

//verifyHasAccess

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/dashboard', [ProfileController::class,'dashboard'])->name('dashboard');
    Route::get('/plan', [ProfileController::class,'plan'])->name('plan');
    Route::get('/favorites', [ProfileController::class,'favorites'])->name('favorites');
    Route::get('/todo', [ProfileController::class,'todo'])->name('todo');
});


Route::middleware(['auth:sanctum', 'verified', 'paidCustomer'])->get('/subscribe', function () {
    return view('pages.subscribe');
})->name('subscribe');

Route::middleware(['auth:sanctum', 'verified', 'paidCustomer'])->post('/subscribe', function (Request $request) {    
    // dd($request->all());
    $user = auth()->user();

    $name = 'main  membership';
    $plan = $request->plan;

    if(!$user->subscribed($name, $plan)) {

        $result = $user->newSubscription($name, $plan)->create();

        if(is_a($result, RedirectToCheckoutResponse::class)) {
            return $result; // Redirect to Mollie checkout
        }        

        return redirect('/dashboard')->with('status', 'Welcome to the ' . $plan . ' plan');
    }

    return redirect('/dashboard')->with('status', 'You are already on the ' . $plan . ' plan');
})->name('subscribe.post');


Route::middleware(['auth:sanctum', 'verified', 'payingCustomer'])->get('members', function () {
    return view('pages.members');
})->name('members');


Route::middleware(['auth:sanctum', 'verified'])->group(function(){    
    Route::get('admin/setting', [SettingController::class,'main'])->name('setting.main');
    Route::get('admin/setting/seo', [SettingController::class,'seo'])->name('setting.seo');
    Route::get('admin/setting/terms', [SettingController::class,'terms'])->name('setting.terms');
    Route::get('admin/setting/social', [SettingController::class,'social'])->name('setting.social');
    Route::get('admin/setting/faq', [SettingController::class,'faq'])->name('setting.faq');
    Route::get('admin/setting/billing', [SettingController::class,'billing'])->name('setting.billing');
    Route::get('admin/setting/design', [SettingController::class,'design'])->name('setting.design');
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
