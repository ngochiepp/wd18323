<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Danh sách </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <h1>Danh sách bài viết </h1>
    @if (session('message'))
       <div class="alert alert-succes">{{session('message')}}</div>
    @endif
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#ID</th>
            <th scope="col">Tittle</th>
            <th scope="col">Image</th>
            <th scope="col">Description</th>
            <th scope="col">View</th>
            <th scope="col">Cate_name</th>
            
            
            <th scope="col">
              <a href="{{ route('post.create')}}" class="btn btn-primary">Crete new</a>
            </th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post )
            <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->title}}</</td>
                <td>
                    <img src="{{ asset('/storage/' . $post->image)}} " width="50" alt="">
                </td>
                <td>{{$post->description}}</</td>
                <td>{{$post->view}}</</td>
                <td>{{$post->category->name}}</</td>
                <td>
                  <a href="{{ route('post.edit', $post)}}" class="btn btn-primary">Edit</a>
                  <form action="{{ route('post.destroy', $post)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm ('Bạn có muốn xóa không ?')" type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </td>
              </tr>
            @endforeach
          
          
        </tbody>
        {{$posts->links()}};
      </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>