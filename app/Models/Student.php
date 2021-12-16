<?php

namespace App\Models;

use App\William\Decorators\SingleImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Student extends SingleImage
{
    use HasFactory;

    protected $fillable = [
       'admission',
       'course',
        'unit1',
       'marks1',
        'unit2',
        'marks2',
        'unit3',
        'marks3',
        'unit4',
        'marks4',
        'unit5',
        'marks5',
        'comment',
    ];
}
