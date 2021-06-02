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
    const TYPE_FAVICON = 'FAVICON';
    const TYPE_META = 'META';

    protected $fillable = [
        'name',
        'link',
        'type'
    ];

}
