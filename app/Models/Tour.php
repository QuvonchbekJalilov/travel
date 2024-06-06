<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_uz',
        'title_ru',
        'title_en',
        'content_uz',
        'content_ru',
        'content_en',
        'price',
        'day',
        'image',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }


}
