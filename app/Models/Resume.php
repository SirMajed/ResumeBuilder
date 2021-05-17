<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;
    protected $fillable = [
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
        'language',
    ];
}
