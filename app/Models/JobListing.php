<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobListing extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'location', 'salary', 'deadline', 'organization_id', 'publish'];

    public function organization() {
        return $this->belongsTo(Organization::class);
    }
}
