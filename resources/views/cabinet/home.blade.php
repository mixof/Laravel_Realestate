@extends('layouts.cabinet')
@section('title')
Личный кабинет
@endsection
@section('content')
    <div class="dashboard-header">
        <h1>Личный кабинет</h1>

        <a href="{{ url('/cabinet/properties/add') }}" class="btn btn-primary">Разместить объявление</a>
    </div><!-- /.dashboard-header -->

    <div class="dashboard-subheader text-center">
        <h2 class="text-center">Размещено объявлений 0 из 3</h2>

    </div><!-- /.dashboard-header -->


@endsection
