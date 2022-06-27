<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_en',
        'name_ru',
        'name_mn',
        'intro_en',
        'intro_ru', 
        'intro_mn',
        'logo_en',
        'logo_ru',
        'logo_mn',
        'direction_en',
        'direction_ru',
        'direction_mn',
        'start_year',
        'company_size',
        'phone',
        'email',
        'facebook',
    ];

    // public function brand()
    // {
    //     return $this->hasMany(Brand::class);
    // }
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
