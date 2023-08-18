<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeeLoginController;
use App\Http\Controllers\ProfileController;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



// Route::middleware('guest:employee')->group(function(){
    
// });




Route::get('employee/login' , [EmployeeLoginController::class , 'index'])->Middleware('guest:employee');
Route::get('employee' , function(){
    return auth('employee')->user();

})->Middleware('auth:employee')->name('my_profile');
Route::get('/test' , function(){

    // return Auth::guard('web')->user()?->name ? 'founded' : 'notfounded';
    // return Auth::guard('employee')->user()?->name;
//    $user = User::create([
//         'name'=>'ahmed mohamed',
//         'email'=>'ahmedmohamed123@gmail.com',
//         'password'=>Hash::make('123456879'),
//         //123456789
//     ]);

//     return $user;

});



Route::get('openweb' , function (){
    //session()->invalidate();
    auth('web')->attempt(['email' => 'ahmedmohamed123@gmail.com' , 'password' =>'password']);
    request()->session()->regenerate();

     

    return "done";
})->Middleware('guest:web');



