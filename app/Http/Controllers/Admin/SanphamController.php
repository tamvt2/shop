<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sanpham;
use App\Services\Sanpham\SanphamService;
use Illuminate\Http\Request;

class SanphamController extends Controller
{
    protected $sp;

    public function __construct(SanphamService $sp) {
        $this->sp = $sp;
    }

    public function create() {
        return view('admin.sanpham.add', [
            'title' => 'Thêm sản phẩm'
        ]);
    }
}
