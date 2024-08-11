<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'address'];

    public function job() {
        return $this->hasMany(JobListing::class);
    }
}
