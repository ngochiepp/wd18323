@extends('asm.admin.layout')
@section('title', 'Sửa danh mục')
@section('content')
    <div class="py-4">
        <h4>Sửa sản phẩm</h4>
    </div>
    @if (session('updateCateSuccess'))
        <div class="alert alert-success" role="alert">
            {{ session('updateCateSuccess') }}
        </div>
    @endif
    @if (session('updatePrd'))
        <div class="alert alert-success" role="alert">
            {{ session('updatePrd') }}
        </div>
    @endif
    <form action="{{ route('admin.prdUpdate', $man) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="title" class="form-label">Tên sản phẩm</label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp"
                value="{{ $man->title }}">
            @error('title')
                <p class="text-danger">Tên sản phẩm không được để trống</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image_url" class="form-label">Ảnh sản phẩm</label>
            <input type="file" class="form-control" id="image_url" name="image_url" aria-describedby="emailHelp"
                value="{{ $man->name }}">
            <img src="{{ asset('storage/' . $man->image_url) }}" id="img" alt="Image" width="50px">
            @error('image_url')
                <p class="text-danger">Ảnh sản phẩm không được để trống</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Giá sản phẩm</label>
            <input type="number" min="1" class="form-control" id="price" name="price"
                aria-describedby="emailHelp" value="{{ $man->price_old }}">
            @error('price')
                <p class="text-danger">Giá sản phẩm không được để trống</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="sold" class="form-label">Đã bán</label>
            <input type="number" class="form-control" id="sold" name="sold" aria-describedby="emailHelp"
                value="{{ $man->sold }}" readonly>
        </div>
        <div class="mb-3">
            <label for="introduct" class="form-label">Mô tả sản phẩm</label>
            <input type="text"  class="form-control" id="introduct" name="introduct"
                aria-describedby="emailHelp" value="{{ $man->introduct }}">
            @error('introduct')
                <p class="text-danger">Mô tả sản phẩm không được để trống</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">Danh mục</label>
            <select class="form-select" aria-label="Default select example" id="category_id" name="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $man->category_id === $category->id ? 'selected' : '' }}>
                        {{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-warning">Sửa</button>
        <a href="{{ route('admin.productsAdmin') }}" class="btn btn-secondary">Danh sách</a>
    </form>
    <script>
        var image = document.querySelector('#image_url');
        var img = document.querySelector('#img');
        image.addEventListener('change', function(e) {
            e.preventDefault();
            var reader = new FileReader();
            reader.onload = function(event) {
                img.src = event.target.result;
            }
            reader.readAsDataURL(e.target.files[0]);
        });
    </script>
@endsection