@extends('admin.main')

@section('content')
    <div class="container-fluid">
        <table class="table">
            <thead>
                <tr>
                    <th style="width: 50px">ID</th>
                    <th>Tên danh mục</th>
                    <th style="width: 100px">&nbsp</th>
                </tr>
            </thead>
            <tbody>
                @foreach($values as $key => $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->tendanhmuc }}</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="/admin/danhmuc/edit/{{ $value->id }}">
                                <i class="ti ti-edit"></i>
                            </a>
                            <a class="btn btn-danger btn-sm" href="" onclick="removeRow('{{ $value->id }}', '/admin/danhmuc/destroy')">
                                <i class="ti ti-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-5">
            {{ $values->links() }}
        </div>
    </div>
@endsection