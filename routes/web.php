<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Controllers
|--------------------------------------------------------------------------
*/
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CouponController;

use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\LevelController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\ImportController;

use App\Http\Controllers\Frontend\SubjectController as WebSubjectController;
use App\Http\Controllers\Frontend\LevelController as WebLevelController;
use App\Http\Controllers\Admin\OrderController;

use App\Models\Order;
use App\Models\Product;
use App\Http\Controllers\StaticPageController;


use App\Http\Controllers\Admin\QpLevelController;
use App\Http\Controllers\Admin\QpSubjectController;
use App\Http\Controllers\Admin\QpSessionController;
use App\Http\Controllers\Admin\QpQuestionPaperController;
use App\Http\Controllers\Admin\QpImportController;
use App\Http\Controllers\Frontend\QpFrontendController;

use Illuminate\Support\Str;
/*
|--------------------------------------------------------------------------
| HOME
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/materials/{material}', [ProductController::class, 'materialIndex'])
    ->whereIn('material', [
        'solved-assignments',
        'guess-papers',
        'previous-year-papers'
    ]);

    /*
|--------------------------------------------------------------------------
| MATERIAL PRODUCT DETAIL
|--------------------------------------------------------------------------
*/
Route::get('/materials/{material}/{level}/{slug}', [ProductController::class, 'show'])
    ->whereIn('material', [
        'solved-assignments',
        'guess-papers',
        'previous-year-papers'
    ])
    ->whereIn('level', ['ug', 'pg'])
    ->name('materials.product.show');

/*
|--------------------------------------------------------------------------
| FRONTEND – LEVEL → SUBJECT → MATERIAL FLOW
|--------------------------------------------------------------------------
*/

// Levels (UG / PG)
Route::get('/levels/{level:slug}', [WebSubjectController::class, 'index'])
    ->name('levels.subjects');

Route::get('/levels/{level:slug}/{subject:code}', [WebSubjectController::class, 'show'])
    ->name('levels.subject.show');

/*
|--------------------------------------------------------------------------
| CART & CHECKOUT
|--------------------------------------------------------------------------
*/
Route::get('/cart', [CartController::class, 'index']);
Route::post('/cart/add', [CartController::class, 'add']);
Route::post('/cart/update', [CartController::class, 'update']);
Route::post('/cart/remove', [CartController::class, 'remove']);

Route::post('/cart/apply-coupon', [CouponController::class, 'apply']);
Route::post('/cart/remove-coupon', [CouponController::class, 'remove']);

Route::post('/checkout/whatsapp', [CheckoutController::class, 'whatsapp']);

/*
|--------------------------------------------------------------------------
| AUTH (BREEZE)
|--------------------------------------------------------------------------
*/
require __DIR__ . '/auth.php';

/*
|--------------------------------------------------------------------------
| AUTHENTICATED USER
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| ADMIN PANEL
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->group(function () {

        Route::get('/dashboard', function () {
            return Inertia::render('Admin/Dashboard', [
                'stats' => [
                    'orders'   => Order::count(),
                    'revenue'  => Order::sum('total'),
                    'products' => Product::count(),
                ]
            ]);
        });

                // ✅ ADD THIS
        Route::get('/orders', [OrderController::class, 'index'])
            ->name('admin.orders');

        Route::get('/orders/{order}', [OrderController::class, 'show'])
            ->name('admin.orders.show');

        // Levels
        Route::get('/levels', [LevelController::class, 'index']);
        Route::get('/levels/create', [LevelController::class, 'create']);
        Route::post('/levels', [LevelController::class, 'store']);

        // Subjects
        Route::get('/subjects', [SubjectController::class, 'index']);
        Route::get('/subjects/create', [SubjectController::class, 'create']);
        Route::post('/subjects', [SubjectController::class, 'store']);
        Route::get('/subjects/{subject}', [SubjectController::class, 'show']);

        // Products
        Route::resource('/products', AdminProductController::class);

        // Coupons
        Route::resource('/coupons', CouponController::class)
            ->except(['show', 'edit', 'update']);

        // Import
        Route::get('/import', [ImportController::class, 'show']);
        Route::post('/import', [ImportController::class, 'store']);
});


// Route::get('/{page}', function ($page) {

//     $path = resource_path("views/internal/{$page}.html");

//     if (!file_exists($path)) {
//         abort(404);
//     }

//     return Inertia::render('StaticPage', [
//         'title'       => ucwords(str_replace('-', ' ', $page)),
//         'description' => 'IGNOU Study Material by Unnati Educations',
//         'html'        => file_get_contents($path),
//     ]);

// })->where('page', '^(?!api|admin|login|register).*');


Route::prefix('admin/question-papers')->middleware(['auth'])->group(function () {

    Route::get('/levels', [QpLevelController::class, 'index']);
    Route::post('/levels', [QpLevelController::class, 'store']);

    Route::get('/subjects', [QpSubjectController::class, 'index']);
    Route::post('/subjects', [QpSubjectController::class, 'store']);

    Route::get('/sessions', [QpSessionController::class, 'index']);
    Route::post('/sessions', [QpSessionController::class, 'store']);

    Route::get('/', 
        [QpQuestionPaperController::class, 'index']
    );

    Route::get('/papers', 
        [QpQuestionPaperController::class, 'create']
    );

    Route::post('/papers', 
        [QpQuestionPaperController::class, 'store']
    );


    Route::get('/papers/{paper}/edit', 
        [QpQuestionPaperController::class, 'edit']
    );

    Route::put('/papers/{paper}', 
        [QpQuestionPaperController::class, 'update']
    );


    // Route::post('/import/subjects', [QpImportController::class, 'importSubjects']);

        // VIEW PAGE
    Route::get('/import', [QpImportController::class, 'index']);

    // ACTION
    Route::post('/import', [QpImportController::class, 'importSubjects']);
});




Route::prefix('question-papers')->group(function () {

    // STEP 1: Levels
    Route::get('/', [QpFrontendController::class, 'levels']);

    // STEP 2: Subjects
    Route::get('{level:slug}', [QpFrontendController::class, 'subjects']);

    // STEP 3: Subject → Question Paper (session via query)
    Route::get('{level:slug}/{subject:slug}', [QpFrontendController::class, 'paper']);
});


Route::get('/pages/{slug}', function ($slug) {
    return Inertia::render('Static/StaticPage', [
        'slug' => $slug
    ]);
});




Route::get('ignou/{slug}', function ($slug) {

    // Convert slug to PascalCase file name
    // ignou-admission → IgnouAdmission
    $component = 'Static/' . Str::studly($slug);

    // Optional: prevent accessing admin / api routes
    if (in_array($slug, ['admin', 'login', 'register', 'cart'])) {
        abort(404);
    }

    // Check if React component exists
    $path = resource_path("js/Pages/Static/" . Str::studly($slug) . ".jsx");

    if (!file_exists($path)) {
        abort(404);
    }

    return Inertia::render($component);

})->where('slug', '[a-z0-9\-]+');
