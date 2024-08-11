<?php

use App\Http\Controllers\JobListingController;
use App\Http\Controllers\OrganizationController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return 'Hi';
// });


// TODO JobListing
Route::get('/', [JobListingController::class, 'index'])->name('job.index');


// TODO Organization
Route::get('/organization', [OrganizationController::class, 'index'])->name('org.index');
Route::get('/organization/{id}', [OrganizationController::class, 'show'])->name('org.show');
Route::get('/organization/create', [OrganizationController::class, 'create'])->name('org.create');
Route::get('/organization/edit/{id}', [OrganizationController::class, 'edit'])->name('org.edit');

// Route::get('/', [JobListingController::class], 'index');