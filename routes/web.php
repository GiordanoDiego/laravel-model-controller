<?php

use Illuminate\Support\Facades\Route;

// controller importazioni
use App\Http\Controllers\Guest\PageController;
use App\Http\Controllers\Guest\MovieController;

//non sono percorsi ma nameSpace-> percorsi concettuali



// Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/chi-siamo', [PageController::class, 'about'])->name('about');

Route::get('/', [MovieController::class, 'index'])->name('movies.index');

//definisco una rotta parametrica che cambia l'url
Route::get('/movies{id}', [MovieController::class, 'show'])->name('movies.show');


// Route::get(PERCORSO CON CUI ARRIVARE ALLA PAGINA, FUNZIONE DI CALLBACK CHE MI CREA LA RISPOSTA DA DARE ALL UTENTE)
