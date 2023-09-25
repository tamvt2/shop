<?php
namespace App\Services\Sanpham;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use App\Models\Sanpham;

class SanphamService
{
	public function insert($request) {
        try {
            Sanpham::create([
                'tendanhmuc' => $request->input('danhmuc')
            ]);
            Session::flash('success', 'Thêm sản phăm thành công');
        } catch (\Exception $e) {
            Session::flash('error', 'Thêm thất bại');
            Log::info($e->getMessage());
            return false;
        }
        return true;
    }

	public function getAll() {
		return Sanpham::orderBy('id', 'asc')->paginate(15);
	}

	public function update($request, $id) {
		try {
			$id->fill([
				'tendanhmuc' => $request->input('danhmuc')
			]);
			$id->save();
			Session::flash('success', 'Cập nhật sản phẩm thành công');
        } catch (\Exception $e) {
            Session::flash('error', 'Cập nhật thất bại');
            Log::info($e->getMessage());
            return false;
        }
        return true;
	}

	public function destroy($request) {
        $id = $request->input('id');
        $value = Sanpham::where('id', $id)->first();
        if ($value) {
            return Sanpham::where('id', $id)->delete();
        }
        return false;
    }
}