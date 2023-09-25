@extends('admin.main')

@section('content')
	<div class="container-fluid">
		@include('layout.alert')
		<form action="" method="post">
			@csrf
			<div class="mb-3">
				<label for="exampleInputtext1" class="form-label">Tên danh mục</label>
				<input type="text" name="danhmuc" class="form-control" placeholder="Tên danh mục" value="{{ $value->tendanhmuc }}">
			</div>
			<div class="mb-4">
				<button type="submit" class="btn btn-primary w-100 py-8 fs-4 rounded-2">Lưu</button>
			</div>
		</form>
	</div>
@endsection