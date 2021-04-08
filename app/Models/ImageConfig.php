<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageConfig extends Model
{
    use HasFactory;

    const TYPE_SLIDER = 'SLIDER';
    const TYPE_BANNER = 'BANNER';
    const TYPE_LOGO = 'LOGO';

    protected $fillable = [
        'name',
        'link',
        'type'
    ];

}
