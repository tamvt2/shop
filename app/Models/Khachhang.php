<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khachhang extends Model
{
    use HasFactory;

    protected $fillable = [
        'hoten',
        'username',
        'password',
        'diachi',
        'email',
        'dienthoai',
        'gioitinh'
    ];

    public $timestamps = false;
}
