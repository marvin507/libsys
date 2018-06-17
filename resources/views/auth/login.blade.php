<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.min.css')}}">
</head>

<body>
    <div id="login-one" class="login-one" style="height:649px;">
        <form class="login-one-form" method="POST" action="{{route('login')}}">
            @csrf
            <div class="col">
                <div class="login-one-ico"><i class="fa fa-unlock-alt" id="lockico"></i></div>
                <div class="form-group">
                    <div>
                        <h3 id="heading">Iniciar Sesión</h3>
                    </div>
                    <input class="form-control" name="username" type="text" placeholder="Nombre de usuario" id="input" autofocus required>{!!$errors->first('username', ':message')!!}
                    <input class="form-control" name="password" type="password" placeholder="Contraseña" id="input" required>{!!$errors->first('password', ':message')!!}
                    <button class="btn btn-primary" type="submit" id="button" style="background-color:#007ac9;">Entrar</button></div>
            </div>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>