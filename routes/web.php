<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EntryController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Resources;
use App\Models\Entry;
use App\Http\Resources\EntryResource;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/entries', function () {
    $entries = Entry::all();
    return Inertia::render('Entries', [
        'entries' => $entries
    ]);
});

Route::get('/entries/{id}', [EntryController::class, 'show']);

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('api/entries', [EntryController::class, 'list']);
Route::get('api/entries/{id}', [EntryController::class, 'entry']);
Route::post('api/entries/add', [EntryController::class, 'add'])->middleware('guest');
//Route::get('api/entries/{id}', function (string $id) {
//    return new EntryResource(Entry::findOrFail($id));
//});
//Route::get('/entries/{id}', function (string $id) {
//    return new EntryResource(Entry::findOrFail($id));
//});

require __DIR__.'/auth.php';
