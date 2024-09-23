<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

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
//     return redirect()->route('login');
// })->name('/');

Route::get('test', function () {
        return view('test');
    });
// website routes



Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'Home']);
Route::get('rtimarathi', [App\Http\Controllers\website\MainController::class, 'rtimarathi'])->name('rtimarathi');
Route::get('about-drp', [App\Http\Controllers\website\MainController::class, 'aboutDrp'])->name('about-drp');
Route::get('department-history', [App\Http\Controllers\website\MainController::class, 'departmentHistory'])->name('department-history');
Route::get('vision-mission-marathi', [App\Http\Controllers\website\MainController::class, 'visionMissionMarathi'])->name('vision-mission-marathi');
Route::get('organization-structure-marathi', [App\Http\Controllers\website\MainController::class, 'organizationStructureMarathi'])->name('organization-structure-marathi');
Route::get('our-leaderhip-marathi', [App\Http\Controllers\website\MainController::class, 'ourLeaderhipMarathi'])->name('our-leaderhip-marathi');
Route::get('authority-members-marathi', [App\Http\Controllers\website\MainController::class, 'authorityMembersMarathi'])->name('authority-members-marathi');
Route::get('our-affiliated-offices-marathi', [App\Http\Controllers\website\MainController::class, 'ourAffiliatedOfficesmarathi'])->name('our-affiliated-offices-marathi');
Route::get('thane-city-marathi', [App\Http\Controllers\website\MainController::class, 'thaneCityMarathi'])->name('thane-city-marathi');
Route::get('our-projects-marathi', [App\Http\Controllers\website\MainController::class, 'ourProjectsMarathi'])->name('our-projects-marathi');
Route::get('tenders-notices-marathi', [App\Http\Controllers\website\MainController::class, 'tendersNoticesMarathi'])->name('tenders-notices-marathi');
Route::get('resources-marathi', [App\Http\Controllers\website\MainController::class, 'resourcesMarathi'])->name('resources-marathi');
Route::get('notification-acts-marathi', [App\Http\Controllers\website\MainController::class, 'notificationActsMarathi'])->name('notification-acts-marathi');
Route::get('coopertaive-department-marathi', [App\Http\Controllers\website\MainController::class, 'coopertaiveDepartmentMarathi'])->name('coopertaive-department-marathi');
Route::get('act-rules-marathi', [App\Http\Controllers\website\MainController::class, 'actRulesMarathi'])->name('act-rules-marathi');
Route::get('housing-manual-marathi', [App\Http\Controllers\website\MainController::class, 'housingManualMarathi'])->name('housing-manual-marathi');
Route::get('government-resolutions', [App\Http\Controllers\website\MainController::class, 'governmentResolutions'])->name('government-resolutions');
Route::get('ordersm', [App\Http\Controllers\website\MainController::class, 'ordersm'])->name('ordersm');
Route::get('gis-mis-slum-data-marathi', [App\Http\Controllers\website\MainController::class, 'gisMisSlumDataMarathi'])->name('gis-mis-slum-data-marathi');
Route::get('circularm', [App\Http\Controllers\website\MainController::class, 'circularm'])->name('circularm');
Route::get('gallery', [App\Http\Controllers\website\MainController::class, 'gallery'])->name('gallery');
Route::get('photo-gallery', [App\Http\Controllers\website\MainController::class, 'photoGallery'])->name('photo-gallery');

Route::get('processtracker', [App\Http\Controllers\website\MainController::class, 'processtracker'])->name('processtracker');

Route::get('rentmanagemntsystemmr', [App\Http\Controllers\TestController::class, 'rentmanagemntsystemmr'])->name('rentmanagemntsystemmr');

Route::get('transferoftenements', [App\Http\Controllers\TestController::class, 'transferoftenements'])->name('transferoftenements');


Route::get('contactusmarathi', [App\Http\Controllers\TestController::class, 'contactusmarathi'])->name('contactusmarathi');


Route::get('contactdirectorymarathi', [App\Http\Controllers\TestController::class, 'contactdirectorymarathi'])->name('contactdirectorymarathi');

Route::get('righttoservicemarathi', [App\Http\Controllers\TestController::class, 'righttoservicemarathi'])->name('righttoservicemarathi');

Route::get('enviornmentcellmarathi', [App\Http\Controllers\TestController::class, 'enviornmentcellmarathi'])->name('enviornmentcellmarathi');

Route::get('6', [App\Http\Controllers\TestController::class, 'eknath_shinde'])->name('eknath_shinde');
Route::get('7', [App\Http\Controllers\TestController::class, 'devendra_fadanvis'])->name('devendra_fadanvis');

Route::get('8', [App\Http\Controllers\TestController::class, 'ajitpawar'])->name('ajitpawar');


Route::get('10', [App\Http\Controllers\TestController::class, 'atulsave'])->name('atulsave');
Route::get('14', [App\Http\Controllers\TestController::class, 'valsyasingha'])->name('valsyasingha');

Route::get('16', [App\Http\Controllers\TestController::class, 'mahendrakalyankar'])->name('mahendrakalyankar');

Route::get('faq', [App\Http\Controllers\TestController::class, 'faq'])->name('faq');


Route::get('actandrulesmarathi', [App\Http\Controllers\TestController::class, 'actandrulesmarathi'])->name('actandrulesmarathi');

Route::get('notification---acts-marathi', [App\Http\Controllers\TestController::class, 'notificationactsmarathi'])->name('notificationactsmarathi');

// Route::get('gis-mis-slum-data-marathi', [App\Http\Controllers\TestController::class, 'gismisslumdatamarathi'])->name('gismisslumdatamarathi');


// use App\Http\Controllers\BotManController;

// Route::match(['get', 'post'], '/botman', [App\Http\Controllers\BotManController::class, 'handle']);
Route::get('/bot', [App\Http\Controllers\BotManController::class, 'tinker']);

// Route::post('/chat', [App\Http\Controllers\ChatController::class, 'chat']);

// Route::match(['get', 'post'], '/botman', [App\Http\Controllers\BotManController::class, 'handle']);
Route::match(['get', 'post'], '/botman', [App\Http\Controllers\BotManController::class, 'handle']);

// Guest Users
Route::middleware(['guest', 'PreventBackHistory', 'firewall.all'])->group(function () {

    Route::get('login', [App\Http\Controllers\Admin\AuthController::class, 'showLogin'])->name('login');
    Route::post('login', [App\Http\Controllers\Admin\AuthController::class, 'login'])->name('signin');
    Route::get('register', [App\Http\Controllers\Admin\AuthController::class, 'showRegister'])->name('register');
    Route::post('register', [App\Http\Controllers\Admin\AuthController::class, 'register'])->name('signup');
});




// Authenticated users
Route::middleware(['auth', 'PreventBackHistory', 'firewall.all'])->group(function () {

    // Auth Routes
    Route::get('home', fn () => redirect()->route('dashboard'))->name('home');
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::post('logout', [App\Http\Controllers\Admin\AuthController::class, 'Logout'])->name('logout');
    Route::get('change-theme-mode', [App\Http\Controllers\Admin\DashboardController::class, 'changeThemeMode'])->name('change-theme-mode');
    Route::get('show-change-password', [App\Http\Controllers\Admin\AuthController::class, 'showChangePassword'])->name('show-change-password');
    Route::post('change-password', [App\Http\Controllers\Admin\AuthController::class, 'changePassword'])->name('change-password');



    // Masters
    Route::resource('wards', App\Http\Controllers\Admin\Masters\WardController::class);




    // Users Roles n Permissions
    Route::resource('users', App\Http\Controllers\Admin\UserController::class);
    Route::get('users/{user}/toggle', [App\Http\Controllers\Admin\UserController::class, 'toggle'])->name('users.toggle');
    Route::get('users/{user}/retire', [App\Http\Controllers\Admin\UserController::class, 'retire'])->name('users.retire');
    Route::put('users/{user}/change-password', [App\Http\Controllers\Admin\UserController::class, 'changePassword'])->name('users.change-password');
    Route::get('users/{user}/get-role', [App\Http\Controllers\Admin\UserController::class, 'getRole'])->name('users.get-role');
    Route::put('users/{user}/assign-role', [App\Http\Controllers\Admin\UserController::class, 'assignRole'])->name('users.assign-role');
    Route::resource('roles', App\Http\Controllers\Admin\RoleController::class);
});




Route::get('/php', function (Request $request) {
    if (!auth()->check())
        return 'Unauthorized request';

    Artisan::call($request->artisan);
    return dd(Artisan::output());
});
