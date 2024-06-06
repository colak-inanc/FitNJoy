<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PersonelController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UyeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BesinController;

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('registerP', [AuthController::class, 'registerP'])->name('registerP');
Route::post('/login1', [AuthController::class, 'loginP'])->name('loginP');
Route::get("logout",[AuthController::class,"logoutP"])->name("logoutP");


Route::get("/admin",[adminController::class,"index"])->name('adminPanel.home');

Route::get('/personels', [PersonelController::class, 'index'])->name('personels.index');

// Yeni personel formu
Route::get('/personels/create', [PersonelController::class, 'create'])->name('personels.create');

// Yeni personel kaydetme
Route::post('/personels', [PersonelController::class, 'store'])->name('personels.store');

// Personel gösterme
Route::get('/personels/{personel}', [PersonelController::class, 'show'])->name('personels.show');

// Personel düzenleme formu
Route::get('/personels/{personel}/edit', [PersonelController::class, 'edit'])->name('personels.edit');

// Personel güncelleme
Route::put('/personels/{personel}', [PersonelController::class, 'update'])->name('personels.update');

// Personel silme
Route::delete('/personels/{personel}', [PersonelController::class, 'destroy'])->name('personels.destroy');

Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes.index');

// Yeni tarif oluşturma formu
Route::get('/recipes/create', [RecipeController::class, 'create'])->name('recipes.create');

// Yeni tarif kaydetme
Route::post('/recipes', [RecipeController::class, 'store'])->name('recipes.store');

// Belirli bir tarifi gösterme
Route::get('/recipes/{recipe}', [RecipeController::class, 'show'])->name('recipes.show');

// Tarifi düzenleme formu
Route::get('/recipes/{recipe}/edit', [RecipeController::class, 'edit'])->name('recipes.edit');

// Tarifi güncelleme
Route::put('/recipes/{recipe}', [RecipeController::class, 'update'])->name('recipes.update');

// Tarifi silme
Route::delete('/recipes/{recipe}', [RecipeController::class, 'destroy'])->name('recipes.destroy');




Route::get('/adminUsers', [UyeController::class, 'index'])->name('adminPanel.users.index');
Route::get('/users', [UyeController::class, 'index'])->name('users.index');
Route::get('/users/create', [UyeController::class, 'create'])->name('users.create');
Route::post('/users', [UyeController::class, 'store'])->name('users.store');
Route::get('/users/{user}', [UyeController::class, 'show'])->name('users.show');
Route::get('/users/{user}/edit', [UyeController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [UyeController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [UyeController::class, 'destroy'])->name('users.destroy');

Route::get('/besins', [BesinController::class, 'index'])->name('besins.index');
Route::get('/besins/create', [BesinController::class, 'create'])->name('besins.create');
Route::post('/besins', [BesinController::class, 'store'])->name('besins.store');
Route::get('/besins/{besin}/edit', [BesinController::class, 'edit'])->name('besins.edit');
Route::put('/besins/{besin}', [BesinController::class, 'update'])->name('besins.update');
Route::delete('/besins/{besin}', [BesinController::class, 'destroy'])->name('besins.destroy');

Route::get("/userPanel",function (){
    return view("userPanel.app");
})->name("userPanel.home");



Route::get("/userPanel",function (){
    return view("userPanel.main");
})->name("userPanel.home");

Route::get("/userPanel/klinikKadro",[UserController::class,"getKlinikKadro"])->name("userPanel.klinikKadro");
Route::get("/userPanel/recipes",[UserController::class,"getRecipes"])->name("userPanel.recipes");
Route::get("/userPanel/besins",[UserController::class,"getBesins"])->name("userPanel.besins");



