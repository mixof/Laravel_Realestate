@extends('layouts.app')
@section('title')
Регистрация
@endsection
@section('content')
    <div class="container">
        <form method="post" action="{{ route('register') }}">
            @csrf
            <div class="row">
                <div class="col-md-12 col-lg-8 col-lg-offset-2">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Имя</label>
                                <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" placeholder="Ваше имя" required autofocus>

                                @if ($errors->has('first_name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <label for="">Фамилия</label>
                                <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" placeholder="Ваша Фамилия" required autofocus>

                                @if ($errors->has('last_name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div><!-- /.form-group -->

                            <div class="form-group">
                                <label for="">E-mail</label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="E-Mail адрес" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div><!-- /.form-group -->

                        </div><!-- /.col-* -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Телефон</label>
                                <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" placeholder="Телефон" required autofocus>

                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <label for="">Пароль</label>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Ваш пароль" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div><!-- /.form-group -->

                            <div class="form-group">
                                <label for="">Повторите пароль</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Пароль повторно" required>
                            </div><!-- /.form-group -->
                        </div><!-- /.col-* -->
                    </div><!-- /.row -->

                    <div class="center">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">Я принимаю <a href="terms-conditions.html">условия использования</a>.
                            </label>
                        </div><!-- /.form-group -->

                        <div class="form-group-btn">
                            <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
                        </div><!-- /.form-group-btn -->
                    </div><!-- /.center -->

                    <div class="form-group-bottom-link">
                        <a href="{{ route('login') }}">У меня уже есть аккаунт<i class="fa fa-long-arrow-right"></i></a>
                    </div><!-- /.form-group-bottom-link -->
                </div><!-- /.col-* -->

            </div><!-- /.row -->
        </form>
    </div><!-- /.container -->
@endsection
