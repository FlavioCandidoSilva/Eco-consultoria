<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cadastro</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.ico') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }} ">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="{{ asset('images/eco_icon.png') }}" alt="IMG" width="250px">
                </div>
                <form action={{ route('register.register') }} method="POST">
                    @csrf
                    <span class="login100-form-title">
                        Cadastro
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Digite seu nome">
                        <input class="input100" id="inputFirstName" type="text" placeholder="Digite seu nome"
                            name="name" value="{{ old('name') }}" required> <b>

                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Formato valido: ex@abc.xyz">
                        <input class="input100" id="inputEmail" type="email" placeholder="name@example.com"
                            value="{{ old('email') }}" name="email" required> <b>

                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>

                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Digite sua senha">
                        <input class="input100" id="inputPassword" type="password" placeholder="Digite sua senha"
                            value="{{ old('password') }}" name="password" required> <b>

                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>

                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Confirme sua senha">
                        <input class="input100" id="inputPasswordConfirm" type="password"
                            placeholder="Confirme sua senha" value="{{ old('password_confirmation') }}" name="password"
                            required> <b>

                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>

                    </div>


                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit" href="{{ route('login.login') }}">
                            Criar conta
                        </button>
                    </div>
                </form>

                <div class="text-center p-t-136">
                    <a class="txt2" href="{{ route('login.login') }}">Já tem conta? faça
                        login </a><i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </div>




    <!--===============================================================================================-->
    <script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/tilt/tilt.jquery.min.js') }}"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
