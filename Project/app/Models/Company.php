<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'cm_name',
        'cm_phone',
        'cm_full_name',
        'cm_about_cm',
        'cm_income',
        'cm_img'
    ];
}
