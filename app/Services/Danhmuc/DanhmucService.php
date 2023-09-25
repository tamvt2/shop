<?php
namespace App\Services\Danhmuc;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use App\Models\Danhmuc;

class DanhmucService
{
	public function insert($request) {
        try {
            Danhmuc::create([
                'tendanhmuc' => $request->input('danhmuc')
            ]);
            Session::flash('success', 'Thêm danh mục thành công');
        } catch (\Exception $e) {
            Session::flash('error', 'Thêm thất bại');
            Log::info($e->getMessage());
            return false;
        }
        return true;
    }

	public function getAll() {
		return Danhmuc::orderBy('id', 'asc')->paginate(15);
	}

	public function update($request, $id) {
		try {
			$id->fill([
				'tendanhmuc' => $request->input('danhmuc')
			]);
			$id->save();
			Session::flash('success', 'Cập nhật danh mục thành công');
        } catch (\Exception $e) {
            Session::flash('error', 'Cập nhật thất bại');
            Log::info($e->getMessage());
            return false;
        }
        return true;
	}

	public function destroy($request) {
        $id = $request->input('id');
        $value = Danhmuc::where('id', $id)->first();
        if ($value) {
            return Danhmuc::where('id', $id)->delete();
        }
        return false;
    }
}