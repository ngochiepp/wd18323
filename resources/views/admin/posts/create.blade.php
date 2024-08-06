{{-- <div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
</div> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container ư-50">
        <h1> Create new post</h1>
        <a href="{{ route('post.index') }}" class="btn btn-success">List post</a>
        {{-- Thông báo lỗi khi validate --}}
        @if ($errors->any())
          <div class="alert alert-danger mt-3">
            <ul>
              @foreach ($errors->all() as $error )
                <li>{{$error}}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label  class="form-label">Title</label>
                <input type="" class="form-control"  name="title" value="{{ old('title')}}">
                @error('title')
                  <span class="text-danger">{{ $message}}</span>
                @enderror
              </div>
              {{-- Hình ảnh --}}
              <div class="mb-3">
                <label  class="form-label">Image</label>
                <input type="file" class="form-control"  name="image" value="{{ old('image')}}">
                @error('image')
                <span class="text-danger">{{ $message}}</span>
              @enderror
              </div>

              <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description"  rows="3">{{ old('description')}}</textarea>
                @error('description')
                <span class="text-danger">{{ $message}}</span>
              @enderror
              </div>

              <div class="mb-3">
                <label class="form-label">Content</label>
                <textarea class="form-control" name="content"  rows="6">{{ old('content')}}</textarea>
                @error('content')
                <span class="text-danger">{{ $message}}</span>
              @enderror
              </div>

              <div class="mb-3">
                <label class="form-label">View</label>
                <textarea class="form-control" name="view"  class="form-control"> {{ old('view')}}</textarea>
                @error('view')
                <span class="text-danger">{{ $message}}</span>
              @enderror
              </div>

              <div class="mb-3">
                <label class="form-label">Category</label>
                <select name="cate_id" class="form-select">
                    @foreach ($categories as $cate)
                        <option value="{{ $cate->id}}">
                            @selected($cate->id == old('cate_id'))
                            {{ $cate->name}}
                        </option>
                    @endforeach
                </select>
              </div>

              <div class="mb-b">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
        </form>
    </div>
</body>

</html>
