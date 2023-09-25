<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Danhmuc;
use App\Services\Danhmuc\DanhmucService;
use Illuminate\Http\Request;

class DanhmucController extends Controller
{
    protected $danhmuc;

    public function __construct(DanhmucService $danhmuc) {
        $this->danhmuc = $danhmuc;
    }

    public function create() {
        return view('admin.danhmuc.add', [
            'title' => 'Thêm danh mục'
        ]);
    }

    public function store(Request $request) {
        $this->danhmuc->insert($request);
        return redirect()->back();
    }

    public function index() {
        return view('admin.danhmuc.list', [
            'title' => 'Danh sách danh mục',
            'values' => $this->danhmuc->getAll()
        ]);
    }

    public function show(Danhmuc $id) {
        return view('admin.danhmuc.edit', [
            'title' => 'Chỉnh sửa danh mục: '.$id->id,
            'value' => $id
        ]);
    }

    public function update(Request $request, Danhmuc $id) {
        $result = $this->danhmuc->update($request, $id);
        if ($result) {
            return redirect('/admin/danhmuc/list');
        }
        return redirect()->back();
    }

    public function destroy(Request $request) {
        $result = $this->danhmuc->destroy($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công danh mục'
            ]);
        }
        return response()->json([
            'error' => true,
            'message' => 'Xóa danh mục thất bại'
        ]);
    }
}
