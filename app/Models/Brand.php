<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'intro_en', 'intro_ru', 'intro_mn', 'logo', 'slider_image', 'start_year', 'company_size', 'phone', 'email', 'facebook', 'company_id'];

    public function company()
    {
        
        return $this->belongsTo(Company::class);
    }
}
