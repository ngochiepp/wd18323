<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

<body>
    <header class="bg-danger-subtle">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-danger-subtle">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Danh mục</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Sản phẩm</a>
                            </li>
                            <li class="nav-item">
                                @if (Auth::user()->role == 'admin')
                                    <a class="nav-link active"
                                        href="{{ route('admin.listUser', Auth::user()) }}">User</a>
                                @endif
                            </li>
                        </ul>
                        <div class="d-flex">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="{{ route('admin.home') }}">
                                        <img src="{{ asset('storage/' . Auth::user()->avatar) }}" alt=""
                                            height="25px" width="25px" class="rounded-pill"
                                            style="object-fit: cover; object-position: center;">
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="{{ route('admin.logout') }}">Logout:
                                        <span class="badge badge-danger bg-danger">{{ Auth::user()->username }}</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="container">
        @if (session('loginSuccess'))
            <div class="alert alert-success" role="alert">
                {{ session('loginSuccess') }}
            </div>
        @endif
        @if (session('updateSuccess'))
            <div class="alert alert-success" role="alert">
                {{ session('updateSuccess') }}
            </div>
        @endif
        <form action="{{ route('admin.update', Auth::user()) }}" method="post" class="pt-3"
            enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="fullname" class="form-label">Fullname</label>
                <input type="text" class="form-control" id="fullname" placeholder="fullname" name="fullname"
                    value="{{ Auth::user()->fullname }}">
                @error('fullname')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" placeholder="username" name="username"
                    value="{{ Auth::user()->username }}">
                @error('username')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="email" name="email"
                    value="{{ Auth::user()->email }}">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="new password" name="passwordN"
                    value="">
                @error('passwordN')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="avatar" class="form-label">Avatar</label>
                <input type="file" class="form-control" id="avatar" placeholder="avatar" name="avatar"
                    value="{{ old('avatar') }}">
                <img src="{{ asset('storage/' . Auth::user()->avatar) }}"  style="object-fit: cover; object-position: center;" width="50px" height="50px"
                    id="avt" class="rounded-pill pt-1">
                @error('avatar')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Update</button>
           
        </form>
    </div>
</body>
<script>
    const avt = document.getElementById('avt');
    const avatar = document.getElementById('avatar');

    avatar.addEventListener('change', function(e) {
        e.preventDefault();
        const reader = new FileReader();
        reader.onload = function(event) {
            avt.src = event.target.result;
        };
        reader.readAsDataURL(this.files[0]);
    });
</script>

</html>