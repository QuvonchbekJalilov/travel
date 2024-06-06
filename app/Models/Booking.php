<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'tour_id',
        'total_price',
        'full_name',
        'phone_number',
    ];

    public function tour(){
        return $this->belongsTo(Tour::class);
    }
}
