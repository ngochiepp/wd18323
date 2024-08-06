@extends('asm.admin.layout')
@section('title', 'Sản phẩm')
@section('content')
    <div class="d-grid gap-2 d-md-flex justify-content-md-end pt-2">
        <a href="{{ route('admin.prdFormAdd') }}" class="btn btn-success me-md-2" type="button">Thêm mới</a>
    </div>
    @if (session('deletePrd'))
        <div class="alert alert-success" role="alert">
            {{ session('deletePrd') }}
        </div>
    @endif
    @if (session('addPrd'))
        <div class="alert alert-success" role="alert">
            {{ session('addPrd') }}
        </div>
    @endif
    <h4>Sản phẩm</h4>
    <table class="table">
        <thead>
            <tr>
                <th style="width: 1%" scope="col">Id</th>
                <th style="width: 10%" scope="col">Name</th>
                <th style="width: 10%" scope="col">Image Url</th>
                <th style="width: 10%" scope="col">Price</th>
                <th style="width: 10%" scope="col">Sold</th>
                <th style="width: 10%" scope="col">Introduce</th>
                <th style="width: 9%" scope="col">Category_id</th>
                <th style="width: 10%" scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($manga as $man)
                <tr>
                    <td>{{ $man->id }}</td>
                    <td>{{ $man->title }}</td>
                    <td><img src="{{ asset('storage/' . $man->image_url) }}" alt="image" width="50px"></td>
                    <td>{{ number_format($man->price, 0, ',', '.') }} VNĐ</td>
                    <td>{{ $man->sold }}</td>
                    <td>{{ $man->introduce }}</td>
                    <td>{{ $man->category->name }}</td>
                    <td>
                        <a href="{{ route('admin.prdFormUpdate', $man) }}" class="btn btn-warning">Sửa</a>
                        <form action="{{ route('admin.prdDelete', $man) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Xoa san pham')">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $manga->links() }}

@endsection
