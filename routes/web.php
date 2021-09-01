<?php

use App\Http\Controllers\IndexAboutController;
use App\Http\Controllers\IndexContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\IndexPortfolioController;
use App\Http\Controllers\IndexSkillController;
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


// FRONT
Route::get('/', [IndexController::class, "index"])->name('home');

Route::get('/backoffice', [IndexController::class, "indexBack"])->name('back');

// BACK

// ABOUT

Route::get('/backoffice/about', [IndexAboutController::class, 'index'])->name('aboutBack');

Route::get('/backoffice/about/create', [IndexAboutController::class, 'create'])->name('aboutCreate');

Route::post('/backoffice/about/store', [IndexAboutController::class, 'store'])->name('aboutStore');

Route::get('/backoffice/{id}/about/edit', [IndexAboutController::class, 'edit'])->name('aboutEdit');

Route::put('/backoffice/{id}/about/update', [IndexAboutController::class, 'update'])->name('aboutUpdate');


// PORTFOLIO

Route::get('/backoffice/portfolio', [IndexPortfolioController::class, 'index'])->name('portfolioBack');

Route::get('/backoffice/portfolio/create', [IndexPortfolioController::class, 'create'])->name('portfolioCreate');

Route::post('/backoffice/portfolio/store', [IndexPortfolioController::class, 'store'])->name('portfolioStore');

Route::get('/backoffice/{id}/portfolio/show', [IndexPortfolioController::class, 'show'])->name('portfolioShow');

Route::delete('/backoffice/{id}/portfolio/delete', [IndexPortfolioController::class, 'destroy'])->name('portfolioDelete');

Route::get('/backoffice/{id}/portfolio/edit', [IndexPortfolioController::class, 'edit'])->name('portfolioEdit');

Route::put('/backoffice/{id}/portfolio/update', [IndexPortfolioController::class, 'update'])->name('portfolioUpdate');


// CONTACT

Route::get('/backoffice/contact', [IndexContactController::class, 'index'])->name('contactBack');

Route::get('/backoffice/{id}/contact/edit', [IndexContactController::class, 'edit'])->name('contactEdit');

Route::put('/backoffice/{id}/contact/update', [IndexContactController::class, 'update'])->name('contactUpdate');


// SKILLS

Route::get('/backoffice/skills', [IndexSkillController::class, 'index'])->name('skillsBack');

Route::get('/backoffice/skills/create', [IndexSkillController::class, 'create'])->name('skillsCreate');

Route::post('/backoffice/skills/store', [IndexSkillController::class, 'store'])->name('skillsStore');

Route::get('/backoffice/{id}/skills/show', [IndexSkillController::class, 'show'])->name('skillsShow');

Route::get('/backoffice/{id}/skills/edit', [IndexSkillController::class, 'edit'])->name('skillsEdit');

Route::put('/backoffice/{id}/skills/update', [IndexSkillController::class, 'update'])->name('skillsUpdate');

Route::delete('/backoffice/{id}/skills/delete', [IndexSkillController::class, 'destroy'])->name('skillsDelete');

