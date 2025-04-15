<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Partner extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $primaryKey = 'id'; 
    protected $fillable = [
        'id',
        'title',
        'desc',
    ];
}
