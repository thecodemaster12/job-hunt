<?php

use App\Http\Controllers\JobListingController;
use App\Http\Controllers\OrganizationController;
use Illuminate\Support\Facades\Route;

// TODO JobListing
Route::get('/', [JobListingController::class, 'index'])->name('job.index');
Route::get('/create', [JobListingController::class, 'create'])->name('job.create');


// TODO Organization
Route::get('/organization', [OrganizationController::class, 'index'])->name('org.index');
Route::get('/organization/{id}', [OrganizationController::class, 'show'])->name('org.show');
Route::post('/organization', [OrganizationController::class, 'store'])->name('org.store');
Route::put('/organization', [OrganizationController::class, 'update'])->name('org.update');
Route::get('/org/create', [OrganizationController::class, 'create'])->name('org.create');
Route::get('/organization/edit/{id}', [OrganizationController::class, 'edit'])->name('org.edit');
Route::delete('/organization/{id}', [OrganizationController::class, 'destroy'])->name('org.destroy');

// Route::get('/', [JobListingController::class], 'index');