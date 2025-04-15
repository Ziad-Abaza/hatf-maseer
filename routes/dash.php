<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dash\BlogController;
use App\Http\Controllers\Dash\RoleController;
use App\Http\Controllers\Dash\AdminController;
use App\Http\Controllers\Dash\BackupController;

use App\Http\Controllers\Dash\BannerController;
use App\Http\Controllers\Dash\PartnerController;
use App\Http\Controllers\Dash\ProductController;
use App\Http\Controllers\Dash\ServiceController;
use App\Http\Controllers\Dash\SettingController;
use App\Http\Controllers\Dash\ContactsController;
use App\Http\Controllers\Dash\LanguageController;
use App\Http\Controllers\Dash\AdvantageController;



Route::prefix('dash')->group(function () {

    Route::resource('roles',    RoleController::class);


    Route::resource('admins', AdminController::class)->except(['show']);
    Route::get('admins/profile', [AdminController::class, 'profile'])->name('admins.profile');
    Route::put('admins/profile/update', [AdminController::class, 'updateProfile'])->name('admins.profile.update');

    Route::get('languages/{slug?}', [LanguageController::class, 'index'])->name('languages.index');
    Route::get('languages/dash/edit/{locale}/{language}/{key}/{slug?}', [LanguageController::class, 'edit'])->name('languages.edit');
    Route::put('languages/dash/update/{locale}/{language}/{key}/{slug?}', [LanguageController::class, 'update'])->name('languages.update');

    Route::get('settings/edit',   [SettingController::class, 'edit'])->name('settings.edit');
    Route::put('settings/update', [SettingController::class, 'update'])->name('settings.update');
    Route::get('settings/sitemap', [SettingController::class, 'sitemap'])->name('settings.sitemap');

    // Custom create route

    Route::resource('backups', BackupController::class);
    Route::get('/backups/monitor', [BackupController::class,'monitor'])->name('backups.monitor');
    Route::post('/backups/retrive', [BackupController::class, 'retrive'])->name('backups.retrive');
  
    //routes Home Page
    Route::resource('contacts', ContactsController::class)->except(['show']);
    Route::get('contacts/show/{contact}/{slug}', [ContactsController::class, 'show'])->name('contacts.show');
    
    Route::resource('banners', BannerController::class);

    Route::resource('partenrs', PartnerController::class);

    Route::resource('advatages', AdvantageController::class);

    Route::resource('services', ServiceController::class);

    Route::resource('products', ProductController::class);

    // blogs
    Route::resource('blogs', BlogController::class);

});
