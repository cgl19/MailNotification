<?php
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LeadController;
use Illuminate\Support\Facades\Route;
use App\Models\Detail;
use Illuminate\Http\Request;
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

// Route::get('/', function () {
//     return view('auth.login');
// });


Route::get('/test', function () {


    $detail = Detail::all();
    $user = Auth::user();
    return view('test', ['detail' => $detail, 'user' => $user]);
});



// creating login 
Route::get('/', function () {

    return view('auth.login');
});


//creating leads page dashboard
Route::get('/getleads', function () {

    $detail = Detail::all();
    $user = Auth::user();
    return view('leads', ['detail' => $detail, 'user' => $user]);
})->middleware(['auth', 'verified']);


// Creating lead form

Route::get('/createlead', function () {

    return view('leadform');
})->middleware(['auth', 'verified']);



//Saving lead form
Route::post('/savelead', [LeadController::class, 'saveLead'])->name('savelead');
// Route::post('/savelead', function (Request $request) {

//     // $validatedData = $request->validate([
//     //     'firstname' => 'required',
//     //     'lastname' => 'required',
//     //     'email' => 'required|email',
//     //     'phone' => 'required',
//     //     // Add validation rules for other fields
//     // ]);

//     // $detail = Detail::create($request->all());

     
//     // if ($detail) {
//     //     // Redirect back with success message
//     //     return redirect()->back()->with('success', 'Response submitted successfully!');
//     // } else {
//     //     // Redirect back with error message
//     //     return redirect()->back()->with('error', 'Failed to submit response. Please try again.');
//     // }
// })->name('savelead');;







// Dashboard
Route::get('/dashboard', function () {
    $user = Auth::user();
    return view('dashboard', ['user' => $user]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
