<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Register</h1>
    <form class="row g-3" action="{{route ('submitregister')}}" method="Post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label  class="form-label">Fullname</label>
            <input type="" class="form-control"  name="fullname" value="{{ old('fullname')}}">
            @error('fullname')
                <span class="text-danger">{{ $message}}</span>
            @enderror
          </div>
          <div class="mb-3">
            <label  class="form-label">Username</label>
            <input type="" class="form-control"  name="username" value="{{ old('username')}}">
            @error('username')
            <span class="text-danger">{{ $message}}</span>
        @enderror
          </div>
        <div class="col-12">
          <label for="inputEmail4" class="form-label">Email</label>
          <input type="email" class="form-control" name="email" id="inputEmail4" value="{{ old('email')}}">
          @error('email')
          <span class="text-danger">{{ $message}}</span>
      @enderror
        </div>
        <div class="col-12">
          <label for="inputPassword4" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" id="inputPassword4" value="{{ old('password')}}">
        </div>
        <div class="mb-3">
            <label  class="form-label">Avatar</label>
            <input type="file" class="form-control"  name="avatar">
          </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Register</button>
          <a href="{{ route('login')}}" class="btn btn-primary">Login</a>
        </div>
      </form>
    </div>
</body>
<script>
    const avt = document.getElementById('avt');
    const avatar = document.getElementById('avatar');

    avatar.addEventListener('change', function(e) {
        e.preventDefault();
        const reader = new FileReader();
        reader.onload = function(event){
            avt.src = event.target.result;
        };
        reader.readAsDataUrl(this.files[0]);
    })
</script>
</html>

