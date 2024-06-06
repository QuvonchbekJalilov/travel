<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'job_uz',
        'job_ru',
        'job_en',
        'description_uz',
        'description_ru',
        'description_en',
        'image',
    ];
}
