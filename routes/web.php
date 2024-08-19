<?php

use App\Http\Controllers\JobListingController;
use App\Http\Controllers\OrganizationController;
use Illuminate\Support\Facades\Route;

// TODO JobListing
Route::get('/', [JobListingController::class, 'index'])->name('job.index');
Route::get('/create', [JobListingController::class, 'create'])->name('job.create');
Route::post('/', [JobListingController::class, 'store'])->name('job.store');
Route::get('/{job}',[JobListingController::class, 'show'])->name('job.show');
Route::get('/{job}/edit',[JobListingController::class, 'edit'])->name('job.edit');
Route::put('/update/{job}',[JobListingController::class, 'update'])->name('job.update');
Route::post('/publish/{job}', [JobListingController::class, 'publish'])->name('job.publish');


// TODO Organization
// Route::get('/organization', function() { return 'ok'; })->name('org.index');
Route::get('/organization', [OrganizationController::class, 'index'])->name('org.index');
Route::get('/organization/{id}', [OrganizationController::class, 'show'])->name('org.show');
Route::post('/organization', [OrganizationController::class, 'store'])->name('org.store');
Route::put('/organization/{id}', [OrganizationController::class, 'update'])->name('org.update');
Route::get('/org/create', [OrganizationController::class, 'create'])->name('org.create');
Route::get('/organization/{id}/edit', [OrganizationController::class, 'edit'])->name('org.edit');
Route::delete('/organization/{id}', [OrganizationController::class, 'destroy'])->name('org.destroy');


Route::get('/test/test', function() { 
    return 'ok'; 
});