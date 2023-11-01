<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\AgentController;
use App\Http\Controllers\IndexController;

use App\Http\Controllers\SliderController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\PropertyTypeController;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Controllers\AgentPropertyController;
use App\Http\Controllers\PropertyFacilityController;
use App\Http\Controllers\PropertyAmenitiesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Start Prevent-back-history
Route::group(['middleware' => 'prevent-back-history'],function(){

Route::get('/', [IndexController::class, 'Index']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Start Middleware
Route::middleware('auth')->group(function(){

    // Admin Management All Routes Starts
    Route::prefix('admin')->middleware(['auth','role:admin'])->group(function() {
        Route::get('/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
        Route::get('/logout', [AdminController::class, 'AdminDestroy'])->name('admin.logout');
        Route::get('/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
        Route::post('/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
        Route::get('/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
        Route::post('/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('admin.update.password');
    }); // Admin Management All Routes Ends

    // Agent Management All Routes Starts
    Route::prefix('agent')->middleware(['auth','role:agent'])->group(function() {
        Route::get('/dashboard', [AgentController::class, 'AgentDashboard'])->name('agent.dashboard');
        Route::get('/logout', [AgentController::class, 'AgentDestroy'])->name('agent.logout');
        Route::get('/profile', [AgentController::class, 'AgentProfile'])->name('agent.profile');
        Route::post('/profile/store', [AgentController::class, 'AgentProfileStore'])->name('agent.profile.store');
        Route::get('/change/password', [AgentController::class, 'AgentChangePassword'])->name('agent.change.password');
        Route::post('/update/password', [AgentController::class, 'AgentUpdatePassword'])->name('agent.update.password');
    }); // Admin Management All Routes Ends

    // Customer Management All Routes Starts
    Route::prefix('customer')->middleware(['auth','role:customer'])->group(function() {
        Route::get('/dashboard', [CustomerController::class, 'CustomerDashboard'])->name('customer.dashboard');
        Route::get('/logout', [CustomerController::class, 'CustomerDestroy'])->name('customer.logout');
        Route::get('/profile', [CustomerController::class, 'CustomerProfile'])->name('customer.profile');
        Route::post('/profile/store', [CustomerController::class, 'CustomerProfileStore'])->name('customer.profile.store');
        Route::get('/change/password', [CustomerController::class, 'CustomerChangePassword'])->name('customer.change.password');
        Route::post('/update/password', [CustomerController::class, 'CustomerUpdatePassword'])->name('customer.update.password');
    }); // Admin Management All Routes Ends




// All Login Route
Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->middleware(RedirectIfAuthenticated::class);
Route::get('/agent/login', [AgentController::class, 'AgentLogin'])->name('agent.login')->middleware(RedirectIfAuthenticated::class);


// All Admin Routes Middleware  Starts Here
Route::middleware(['auth','role:admin'])->group(function () {

        // All Agent Route
        Route::prefix('admin')->controller(AdminController::class)->group(function () {
            Route::get('/all-agent', 'allAgent')->name('admin.all-agent-view');
            Route::post('/change-status', 'changeStatus')->name('changeStatus');

        });

        // Slider Route
        Route::prefix('slider')->controller(SliderController::class)->group(function () {
            Route::get('/view', 'sliderView')->name('slider.view');
            Route::get('/add', 'sliderAdd')->name('slider.add');
            Route::post('/store', 'sliderstore')->name('slider.store');
            Route::get('/edit/{id}', 'sliderEdit')->name('slider.edit');
            Route::post('/update', 'sliderUpdate')->name('slider.update');
            Route::get('/delete/{id}', 'sliderDelete')->name('slider.delete');
        });

        // Property Type Route
        Route::prefix('property-type')->controller(PropertyTypeController::class)->group(function () {
            Route::get('/view', 'propertytypeView')->name('property-type.view');
            Route::post('/store', 'propertytypestore')->name('property-type.store');
            Route::put('/update/{id}', 'propertytypeUpdate')->name('property-type.update');
            Route::get('/delete/{id}', 'propertytypeDelete')->name('property-type.delete');
        });

        // Property Amenities Route
        Route::prefix('property-amenities')->controller(PropertyAmenitiesController::class)->group(function () {
            Route::get('/view', 'propertyamenitiesView')->name('property-amenities.view');
            Route::post('/store', 'propertyamenitiesstore')->name('property-amenities.store');
            Route::put('/update/{id}', 'propertyamenitiesUpdate')->name('property-amenities.update');
            Route::get('/delete/{id}', 'propertyamenitiesDelete')->name('property-amenities.delete');
        });

        // Property Facility Route
        Route::prefix('property-facility')->controller(PropertyFacilityController::class)->group(function () {
            Route::get('/view', 'propertyfacilitiesView')->name('property-facilities.view');
            Route::post('/store', 'propertyfacilitiesstore')->name('property-facilities.store');
            Route::put('/update/{id}', 'propertyfacilitiesUpdate')->name('property-facilities.update');
            Route::get('/delete/{id}', 'propertyfacilitiesDelete')->name('property-facilities.delete');
        });

        // Property Route
        Route::prefix('property')->controller(PropertyController::class)->group(function () {
            Route::get('/view', 'propertyView')->name('property.view');
            Route::get('/add', 'propertyAdd')->name('property.add');
            Route::post('/store', 'propertyStore')->name('property.store');
            Route::get('/edit/{id}/{slug}', 'propertyEdit')->name('property.edit');

            Route::post('/update', 'propertyUpdate')->name('property.update');

            Route::post('/thumbnail-update', 'propertyThumbnailUpdate')->name('property.thumbnail.update');

            Route::post('/multiimage-update', 'propertyMultiimageUpdate')->name('property.multiimage.update');
            Route::get('/multiimg/delete/{id}', 'PropertyMultiImageDelete')->name('property.multiimg.delete');

            Route::post('/store-multiimage', 'storeMultiimage')->name('store.multiimage');

            Route::post('/update-facilities', 'propertyFacilitiesUpdate')->name('property.facilities.update');

            Route::get('details/{id}/{slug}', 'propertyDetails')->name('property.details');

            Route::get('/pdelete/{id}', 'propertyDelete')->name('property.delete');
        });


    });//End Middleware





});// All Admin End Middleware


// All Agent Routes Middleware  Starts Here
Route::middleware(['auth', 'role:agent'])->group(function () {

        // Property Route
        Route::prefix('agent-property')->controller(AgentPropertyController::class)->group(function () {
            Route::get('/view', 'agentPropertyView')->name('agent-property.view');
            Route::get('/add', 'agentPropertyAdd')->name('agent-property.add');
            Route::post('/store', 'agentPropertyStore')->name('agent-property.store');
            Route::get('/edit/{id}/{slug}', 'agentPropertyEdit')->name('agent-property.edit');

            Route::post('/update', 'agentPropertyUpdate')->name('agent-property.update');

            Route::post('/thumbnail-update', 'agentPropertyThumbnailUpdate')->name('agent-property.thumbnail.update');

            Route::post('/multiimage-update', 'agentPropertyMultiimageUpdate')->name('agent-property.multiimage.update');
            Route::get('/multiimg/delete/{id}', 'agentPropertyMultiImageDelete')->name('agent-property.multiimg.delete');

            Route::post('/store-multiimage', 'agentPropertystoreMultiimage')->name('agent-property-store.multiimage');

            Route::post('/update-facilities', 'agentPropertyFacilitiesUpdate')->name('agent-property.facilities.update');

            Route::get('details/{id}/{slug}', 'agentPropertyDetails')->name('agent-property.details');

            Route::get('/pdelete/{id}', 'agentPropertyDelete')->name('agent-property.delete');
        });

});// All Agent End Middleware




});//End Prevent-back-history


// All Page Routes
Route::get('/listing', [ListingController::class, 'listing']);

Route::get('/blog', [BlogController::class, 'blog']);
Route::get('/pricing', [PricingController::class, 'pricing']);
Route::get('/contact-us', [ContactController::class, 'contact']);


