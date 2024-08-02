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
        <h1> Edit post</h1>
        @if (session('message'))
        <div class="alert alert-succes">{{session('message')}}</div>
     @endif
        <a href="{{ route('post.index') }}">List post</a>
        <form action="{{ route('post.update', $post) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label  class="form-label">Title</label>
                <input type="" class="form-control"  name="title" value="{{ $post->title}}">
              </div>
              {{-- Hình ảnh --}}
              <div class="mb-3">
                <label  class="form-label">Image</label>
                <input type="file" class="form-control"  name="image" id="fileImage" alt="">
                <img id="img" src="{{asset('/storage/' . $post->image)}}" width="60" alt="{{ $post->title}}">
              </div>

              <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description"  rows="3">{{ $post->description}}</textarea>
              </div>

              <div class="mb-3">
                <label class="form-label">Content</label>
                <textarea class="form-control" name="content"  rows="6">{{ $post->content}}</textarea>
              </div>

              <div class="mb-3">
                <label class="form-label">View</label>
                <input class="form-control" name="view"  class="form-control" value="{{ $post->view}}"></input>
              </div>

              <div class="mb-3">
                <label class="form-label">Category</label>
                <select name="cate_id" class="form-select">
                    @foreach ($categories as $cate)
                        <option value="{{ $cate->id}}">
                            @if ($cate->id== $post->cate_id)
                                selected
                            @endif
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
    <script>
        // xem trước hình ảnh tải lên trước khi nhấn cập nhật
        var fileImage = document.querySelector("#fileImage")
        var img = document.querySelector("#img");
        fileImage.addEventListener('change', function(e){
            e.preventDefault()
            img.src = URL.createObjectURL(this.files[0])
        })
    </script>
</body>

</html>
