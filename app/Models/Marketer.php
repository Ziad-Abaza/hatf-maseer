<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Marketer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'phone', 'referral_code'];

    public function contacts()
    {
        return $this->hasMany(Contacts::class);
    }
}
