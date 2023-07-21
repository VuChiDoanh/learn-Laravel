<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Custommer extends Model
{
    use HasFactory;

    // trỏ đến tên bẳng 
    protected $table = 'custommer';
    // thêm các trường của bảng add
    protected $fillable = [
        'image',
        'name',
        'email',
        'birthday',
        'gender',

    ];
}
