<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ItemController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Models\Item;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/about', function () {
    return Inertia::render('AboutPage', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/blog', function () {
    return Inertia::render('BlogPage', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/sitemap', function () {
    return Inertia::render('Sitemap', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/terms-and-conditions', function () {
    return Inertia::render('Footer/Terms', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/privacy', function () {
    return Inertia::render('Footer/Privacy', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/cookies', function () {
    return Inertia::render('Footer/Cookies', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

/**Route::get('/contact', function () {
    return Inertia::render('ContactPage', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});**/

/*** BLOG POSTS ***/
Route::get('/andorra-government-ai-ethical-code', function () {
    return Inertia::render('Articles/Andorra-government-ai-ethical-code', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/andorra-flaunts-economic-prowess', function () {
    return Inertia::render('Articles/Andorra-flaunts-economic-prowess', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/morabanc-launches-first-bitcoin-fund', function () {
    return Inertia::render('Articles/Morabanc-launches-first-bitcoin-fund', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/fitch-ratings-andorra-inflation-2024', function () {
    return Inertia::render('Articles/Fitch-ratings-andorra-inflation-2024', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/andorra-house-prices-breaks-records', function () {
    return Inertia::render('Articles/Andorra-house-prices-breaks-records', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/andorra-banking-renaissance', function () {
    return Inertia::render('Articles/Andorra-banking-renaissance', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/andorra-sign-association-agreement', function () {
    return Inertia::render('Articles/Andorra-sign-association-agreement', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/retiring-in-andorra', function () {
    return Inertia::render('Articles/Retiring-in-andorra', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/andorra-digital-content-creators', function () {
    return Inertia::render('Articles/Andorra-digital-content-creators', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

/*** END BLOG POSTS ***/

//Route::post('/contact', ContactController::class)->name('contact');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| Items CRUD Routes
|--------------------------------------------------------------------------
|
| Here is where you can register CRUD routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('items', ItemController::class)
    ->only(['index', 'store'])
    ->middleware(['auth', 'verified']);

Route::get('/', function() {
        return Inertia::render('Items/Home', [
              'items' => Item::all(),
        ]);
});

Route::get('/stats', function() {
        return Inertia::render('Items/Stats', [
              'items' => Item::all(),
        ]);
});

Route::get('/stats', function() {
        return Inertia::render('Items/Stats', [
              'items' => Item::all()
        ]);
});

Route::delete('items/{item}', [ItemController::class, 'destroy'])->name('items.destroy');
Route::patch('items/{item}', [ItemController::class, 'update'])->name('items.update');

/* END Items CRUD Routes */

require __DIR__.'/auth.php';
