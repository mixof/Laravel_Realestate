@extends('layouts.app')

@section('title')
Авторизация
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4">
                <form method="post" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email">E-Mail</label>
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email адресс.." required autofocus>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label for="">Пароль</label>
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Пароль.." required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div><!-- /.form-group -->

                    <div class="form-group-btn">
                        <button type="submit" class="btn btn-primary pull-right">Войти</button>
                    </div><!-- /.form-group-btn -->

                    <div class="form-group-bottom-link">
                        <a href="{{ route('password.request') }}">Забыли пароль?<i class="fa fa-long-arrow-right"></i></a>
                    </div><!-- /.form-group-bottom-link -->
                </form>
            </div><!-- /.col-* -->
        </div><!-- /.row -->
    </div><!-- /.container -->
@endsection
