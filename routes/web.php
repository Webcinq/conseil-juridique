
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
})->name('landing');

// Vous pouvez aussi créer des routes pour login/register si elles n'existent pas
Route::get('/login', function () {
    return redirect('/'); // Redirige temporairement vers la landing page
})->name('login');

Route::get('/register', function () {
    return redirect('/'); // Redirige temporairement vers la landing page
})->name('register');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/student/dashboard', function () {
    return view('student.dashboard');
})->name('student.dashboard');

// Route pour accéder à un cours spécifique
Route::get('/student/course/{id}', function ($id) {
    // Ici vous pouvez récupérer les données du cours depuis la base de données
    return view('student.course', compact('id'));
})->name('student.course');