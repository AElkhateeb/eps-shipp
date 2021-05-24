<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|Route::get('/', function () {
    return view('welcome');
});
*/


Route::group(['namespace'=>'Site'],function () {
    // Route::get('/', function () {echo "home";});
    Route::get('/', 'SiteController@index');
    Route::get('home','SiteController@index');
    Route::get('about','SiteController@about');
    Route::get('categories','SiteController@categories');
    Route::get('categories/{id}','SiteController@category');
    Route::get('categories/{id}/products','SiteController@categoryProducts');
    Route::get('categories/{id}/posts','SiteController@categoryPosts');
    Route::get('products','SiteController@products');
    Route::get('posts','SiteController@posts');
    Route::get('products/{id}','SiteController@product');
    Route::get('posts/{id}','SiteController@post');
    Route::get('contact','SiteController@contact');
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('admin-users')->name('admin-users/')->group(static function() {
            Route::get('/',                                             'AdminUsersController@index')->name('index');
            Route::get('/create',                                       'AdminUsersController@create')->name('create');
            Route::post('/',                                            'AdminUsersController@store')->name('store');
            Route::get('/{adminUser}/impersonal-login',                 'AdminUsersController@impersonalLogin')->name('impersonal-login');
            Route::get('/{adminUser}/edit',                             'AdminUsersController@edit')->name('edit');
            Route::post('/{adminUser}',                                 'AdminUsersController@update')->name('update');
            Route::delete('/{adminUser}',                               'AdminUsersController@destroy')->name('destroy');
            Route::get('/{adminUser}/resend-activation',                'AdminUsersController@resendActivationEmail')->name('resendActivationEmail');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::get('/profile',                                      'ProfileController@editProfile')->name('edit-profile');
        Route::post('/profile',                                     'ProfileController@updateProfile')->name('update-profile');
        Route::get('/password',                                     'ProfileController@editPassword')->name('edit-password');
        Route::post('/password',                                    'ProfileController@updatePassword')->name('update-password');
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('sliders')->name('sliders/')->group(static function() {
            Route::get('/',                                             'SlidersController@index')->name('index');
            Route::get('/create',                                       'SlidersController@create')->name('create');
            Route::post('/',                                            'SlidersController@store')->name('store');
            Route::get('/{slider}/edit',                                'SlidersController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'SlidersController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{slider}',                                    'SlidersController@update')->name('update');
            Route::delete('/{slider}',                                  'SlidersController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('identities')->name('identities/')->group(static function() {
            Route::get('/',                                             'IdentitiesController@index')->name('index');
            Route::get('/create',                                       'IdentitiesController@create')->name('create');
            Route::post('/',                                            'IdentitiesController@store')->name('store');
            Route::get('/{identity}/edit',                              'IdentitiesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'IdentitiesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{identity}',                                  'IdentitiesController@update')->name('update');
            Route::delete('/{identity}',                                'IdentitiesController@destroy')->name('destroy');
        });
    });
});



/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('pros')->name('pros/')->group(static function() {
            Route::get('/',                                             'ProsController@index')->name('index');
            Route::get('/create',                                       'ProsController@create')->name('create');
            Route::post('/',                                            'ProsController@store')->name('store');
            Route::get('/{pro}/edit',                                   'ProsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ProsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{pro}',                                       'ProsController@update')->name('update');
            Route::delete('/{pro}',                                     'ProsController@destroy')->name('destroy');
        });
    });
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('services')->name('services/')->group(static function() {
            Route::get('/',                                             'ServicesController@index')->name('index');
            Route::get('/create',                                       'ServicesController@create')->name('create');
            Route::post('/',                                            'ServicesController@store')->name('store');
            Route::get('/{service}/edit',                               'ServicesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ServicesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{service}',                                   'ServicesController@update')->name('update');
            Route::delete('/{service}',                                 'ServicesController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('jobs')->name('jobs/')->group(static function() {
            Route::get('/',                                             'JobsController@index')->name('index');
            Route::get('/create',                                       'JobsController@create')->name('create');
            Route::post('/',                                            'JobsController@store')->name('store');
            Route::get('/{job}/edit',                                   'JobsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'JobsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{job}',                                       'JobsController@update')->name('update');
            Route::delete('/{job}',                                     'JobsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('applications')->name('applications/')->group(static function() {
            Route::get('/',                                             'ApplicationsController@index')->name('index');
            Route::get('/create',                                       'ApplicationsController@create')->name('create');
            Route::post('/',                                            'ApplicationsController@store')->name('store');
            Route::get('/{application}/edit',                           'ApplicationsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ApplicationsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{application}',                               'ApplicationsController@update')->name('update');
            Route::delete('/{application}',                             'ApplicationsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('testimonials')->name('testimonials/')->group(static function() {
            Route::get('/',                                             'TestimonialsController@index')->name('index');
            Route::get('/create',                                       'TestimonialsController@create')->name('create');
            Route::post('/',                                            'TestimonialsController@store')->name('store');
            Route::get('/{testimonial}/edit',                           'TestimonialsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'TestimonialsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{testimonial}',                               'TestimonialsController@update')->name('update');
            Route::delete('/{testimonial}',                             'TestimonialsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('socials')->name('socials/')->group(static function() {
            Route::get('/',                                             'SocialsController@index')->name('index');
            Route::get('/create',                                       'SocialsController@create')->name('create');
            Route::post('/',                                            'SocialsController@store')->name('store');
            Route::get('/{social}/edit',                                'SocialsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'SocialsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{social}',                                    'SocialsController@update')->name('update');
            Route::delete('/{social}',                                  'SocialsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('packages')->name('packages/')->group(static function() {
            Route::get('/',                                             'PackagesController@index')->name('index');
            Route::get('/create',                                       'PackagesController@create')->name('create');
            Route::post('/',                                            'PackagesController@store')->name('store');
            Route::get('/{package}/edit',                               'PackagesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'PackagesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{package}',                                   'PackagesController@update')->name('update');
            Route::delete('/{package}',                                 'PackagesController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('pages')->name('pages/')->group(static function() {
            Route::get('/',                                             'PagesController@index')->name('index');
            Route::get('/create',                                       'PagesController@create')->name('create');
            Route::post('/',                                            'PagesController@store')->name('store');
            Route::get('/{page}/edit',                                  'PagesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'PagesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{page}',                                      'PagesController@update')->name('update');
            Route::delete('/{page}',                                    'PagesController@destroy')->name('destroy');
        });
    });
});
