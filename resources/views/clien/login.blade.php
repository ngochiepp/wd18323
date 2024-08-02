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
    <div class="container">
        <h1>Login</h1>
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        @if (session('updateSuccess'))
            <div class="alert alert-danger">{{ session('updateSuccess') }}</div>
        @endif
        @if (session('logoutSuccess'))
            <div class="alert alert-danger">{{ session('logoutSuccess') }}</div>
        @endif
        @if (session('registerSuccess'))
            <div class="alert alert-danger">{{ session('registerSuccess') }}</div>
        @endif
        @if (session('loginError'))
            <div class="alert alert-danger">{{ session('loginError') }}</div>
        @endif
        <form class="row g-3" action="{{ route('submitlogin') }}" method="Post">
            @csrf
            <div class="col-12">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="inputEmail4">
            </div>
            <div class="col-12">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="inputPassword4">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Login</button>
                <button type="submit" class="btn btn-primary"><a href="{{ route('submitregister') }}"></a>Register</button>
            </div>
        </form>
    </div>
</body>

</html>
