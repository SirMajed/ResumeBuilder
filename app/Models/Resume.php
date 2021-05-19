<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'birth_day',
        'bio',
        'degree',
        'university',
        'gpa',
        'graduation_date',
        'skills',
        'exp_name',
        'exp_company',
        'exp_description',
        'certificate_name',
        'certificate_issuer',
        'certificate_date',
        'native_language',
        'other_language',
    ];
}
