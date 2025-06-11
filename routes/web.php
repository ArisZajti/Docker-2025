<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

// Redirect root to login if not authenticated
Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('menus.index');
    }
    return redirect()->route('login');
});

// Main page and CRUD, protected by auth
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [MenuController::class, 'index'])->name('menus.index');
    Route::resource('menus', MenuController::class)->except(['index']);
    Route::get('/welcome', function () {
        return view('welcome');
    });
});

// Authentication routes
Route::get('login', function () {
    return view('auth.login');
})->name('login');
Route::post('login', function (Request $request) {
    $credentials = $request->only('email', 'password');
    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('/home');
    }
    return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
});

Route::get('register', function () {
    return view('auth.register');
})->name('register');
Route::post('register', function (Request $request) {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ]);
    $user = \App\Models\User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
    ]);
    Auth::login($user);
    return redirect('/home');
});

Route::post('logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/login');
})->name('logout');
