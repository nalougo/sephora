<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\controllers\Auth\connexioncontroller;
use App\Http\Controllers\Auth\indexcontroller;
use App\Http\Controllers\planningcontroller;
use App\Http\Controllers\planningcontroller as ControllersPlanningcontroller;
use App\Http\Controllers\singlecontroller;
use App\Http\Controllers\sousAdmine\filmcontroller;
use App\Http\Controllers\sousAdmine\formproducteur;
use App\Http\Controllers\sousAdmine\formprojection;
use App\Http\Controllers\sousAdmine\formprojectioncontroller;
use App\Http\Controllers\sousAdmine\formrealisateur;
use App\Http\Controllers\sousAdmine\formutilisateurcontroller;
use App\Http\Controllers\sousAdmine\inspectioncontroller;
use App\Http\Controllers\sousAdmine\productioncontroller;
use App\Http\Controllers\sousAdmine\projectioncontroller;
use App\Http\Controllers\sousAdmine\sousAdminecontroller;
use App\Http\Controllers\testcontroller;
use App\Http\Controllers\testcontoller;
//use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UtilisateurController;

Route::get('/', [Homecontroller::class, 'affichehome'])->name('home');
Route::middleware('auth')->group(function () {
    Route::get('/index', [indexcontroller::class, 'index'])->name('index');
    Route::post('/logout', function () {
        Auth::logout();
        return redirect()->route('home');
    })->name('logout');
});

Route::middleware('guest')->group(function () {
    Route::get('/inscription', function () {
        return view('pages/inscription');
    })->name('register.form');

    Route::get('/connexion', [connexioncontroller::class, 'pageconnexion'])->name('connecter');
    Route::post('/inscription', [RegisterController::class, 'register'])->name('register');
    Route::post('/connexion', [connexioncontroller::class, 'login'])->name('login');
});

Route::get('/sousAdmine',[sousAdminecontroller::class,'sousAd'])->name('sousAdmine');
Route::get('/sousAdmine', [sousAdminecontroller::class, 'afficherUtilisateurs']);
Route::delete('/utilisateurs/{id}', [sousAdminecontroller::class, 'destroy'])->name('utilisateurs.destroy');


Route::get('/inspection',[inspectioncontroller::class,'pageinspection'])->name('inspection');

Route::get('/formRealisateur', [formrealisateur::class, 'formrea'])->name('realisateur');
Route::post('/realisateurs', [formrealisateur::class, 'store'])->name('realisateurs.store');
Route::delete('/realisateur/{id}', [formrealisateur::class, 'destroy'])->name('realisateur.destroy');

// Route pour afficher le formulaire d'ajout d'un producteur
Route::get('/formproducteur', [FormProducteur::class, 'producteur'])->name('producteur');
Route::post('/producteurs', [FormProducteur::class, 'store'])->name('producteurs.store');
Route::delete('/producteurs/{id}', [FormProducteur::class, 'destroy'])->name('producteurs.destroy');

Route::get('/inspection', [InspectionController::class, 'index'])->name('inspection');

Route::get('/formfilm',[filmcontroller::class,'film'])->name('film');
Route::get('/formfilm', [FilmController::class, 'pointe'])->name('films');
Route::post('/films', [FilmController::class, 'store'])->name('films.store');
Route::delete('/films/{film}', [FilmController::class, 'destroy'])->name('films.destroy');

Route::get('/production',[productioncontroller::class,'respopro'])->name('production');


Route::get('/test',[testcontroller::class,'pont'])->name('projections');
Route::get('/test', [TestController::class, 'pon'])->name('projection');


// Enregistrer une projection
Route::post('/projection/store', [TestController::class, 'store'])->name('projection.store');

Route::get('/production', [testcontroller::class, 'index'])->name('production');
Route::delete('/projection/{id}', [testcontroller::class, 'destroy'])->name('projection.delete');



route::get('/planning',[Planningcontroller::class,'planning'])->name('planning');
Route::get('/planning', [PlanningController::class, 'element']);

route::get('/formutilisateur',[formutilisateurcontroller::class,'utilise'])->name('ok');


Route::post('/utilisateurs', [formutilisateurcontroller::class, 'store'])->name('utilisateurs.store');

Route::get('/single', [SingleController::class, 'index'])->name('single');
Route::get('/single', [SingleController::class, 'show']);
Route::get('/film/{id}', [SingleController::class, 'show'])->name('film.show');

