<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FooterConfig extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'phone',
        'email',
        'youtube',
        'time_working',
        'contact',
        'introduce',
        'return_policy',
        'privacy_policy',
        'terms_of_service',
    ];
}
