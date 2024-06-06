<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'from_country',
        'text_uz',
        'text_ru',
        'text_en',
        'image',
    ];
}
