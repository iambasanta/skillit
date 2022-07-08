<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'facilitator',
        'date',
        'time'
    ];

    public function Date() : Attribute{
        return Attribute::make(
            get: fn($value) => Carbon::parse($value)->format('M d, Y'),
        );
    }

    public function Time() : Attribute{
        return Attribute::make(
            get: fn($value) => Carbon::parse($value)->format('H:i A'),
        );
    }

}
