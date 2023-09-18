<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donhangchitiet extends Model
{
    use HasFactory;

    protected $fillable = [
        'sanphamID',
        'soluong',
        'gia'
    ];

    public $timestamps = false;
}
