<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RawMeat extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_name',
        'item_price',
        'item_picture',
        'review',
        'description',
    ];
}
