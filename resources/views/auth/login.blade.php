<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
</head>

<body>
    <div class="container-fluid vh-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col col-10 col-md-9 col-lg-8 col-xl-6 col-xxl-5">
                <div class="card p-4">
                    <div class="card-title">
                        <h2 class="text-center">Log in</h2>
                    </div>
                    <div class="card-body p-4">

                        @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <form action="{{ route('login') }}" method="POST" class="mb-3">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="idemail" class="form-label">Email: </label>
                                <input id="idemail" class="form-control" name="email" type="email" placeholder="Email" value="{{ old('email') }}" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="idpassword" class="form-label">Password: </label>
                                <input id="idpassword" class="form-control" name="password" type="password" placeholder="Password" value="{{ old('password') }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Log in</button>
                        </form>
                        <div class="text-center">
                            <p>Don't have an account? <a href="{{ action([App\Http\Controllers\AuthController::class, 'showRegister']) }}">Register here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

</body>

</html>