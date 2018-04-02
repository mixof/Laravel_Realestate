@extends('layouts.cabinet')
@section('title')
    Разместить объявление
@endsection
@section('content')
 @if($errors->any())
    <div class="alert alert-danger" role="alert" style="margin-top: 20px;">
        <strong>Внимание!</strong> Проверьте правильность заполнения всех полей.
    </div>
 @endif
<form method="post" action="{{ url('cabinet/properties/add')}}">
    @csrf
    <div class="page-header page-header-small">
        <h3>Основная информация</h3>
    </div><!-- /.page-header -->

    <div class="form-group">
        <label for="title">Заголовок</label>
        <input id="title" name="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" value="{{ old('title') }}" required>
        @if ($errors->has('title'))
            <span class="invalid-feedback">
                        <strong>{{ $errors->first('title') }}</strong>
            </span>
        @endif
    </div><!-- /.form-group -->

    <div class="form-group">
        <label for="description">Описание</label>
        <textarea id="description" name="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" value="{{ old('description') }}" rows="6" required></textarea>
        @if ($errors->has('description'))
            <span class="invalid-feedback">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
        @endif
    </div><!-- /.form-group -->
    <div class="row">

        <div class="col-sm-4">
            <div class="form-group">
                <label for="category">Категория</label>
                <select id="category" name="category_id" class="form-control" required>
                    <option value="1">Квартиры</option>
                    <option value="2">Дома</option>
                    <option value="3">Помещения</option>
                </select>
                @if ($errors->has('category'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('category') }}</strong>
                    </span>
                @endif
            </div><!-- /.form-group -->
        </div><!-- /.col-* -->

        <div class="col-sm-4">
            <div class="form-group">
                <label for="type">Тип обьявления</label>

                <select id="type" name="rent_type" class="form-control" required>
                    <option value="1">Почасовая Аренда</option>
                    <option value="2">Посуточная Аренда</option>
                    <option value="3">Долгосрочная Аренда</option>
                    <option value="4">Продажа</option>
                </select>
                @if ($errors->has('rent_type'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('rent_type') }}</strong>
                    </span>
                @endif
            </div><!-- /.form-group -->
        </div><!-- /.col-* -->
    </div>
    <div class="row">
            <div class="form-group">
        <div id="fine-uploader-gallery"></div>

        <!-- Your code to create an instance of Fine Uploader and bind to the DOM/template
        ====================================================================== -->
        <script>
            var galleryUploader = new qq.FineUploader({
                element: document.getElementById("fine-uploader-gallery"),
                template: 'qq-template-gallery',
                request: {
                    endpoint: '/server/uploads'
                },
                thumbnails: {
                    placeholders: {
                        waitingPath: '/source/placeholders/waiting-generic.png',
                        notAvailablePath: '/source/placeholders/not_available-generic.png'
                    }
                },
                validation: {
                    allowedExtensions: ['jpeg', 'jpg', 'gif', 'png']
                }
            });
        </script>

        </div>
    </div>

    <div class="page-header page-header-small">
        <h3>Платежная информация</h3>
    </div><!-- /.page-header -->

    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label for="price">Цена</label>
                <input name="price" id="price" type="text" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" value="{{ old('price') }}" required>
                @if ($errors->has('price'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('price') }}</strong>
                    </span>
                @endif
            </div><!-- /.form-group -->
        </div><!-- /.col-* -->

        <div class="col-sm-4">
            <div class="form-group">
                <label for="price_type">Валюта</label>

                <select name="price_type" id="price_type" class="form-control{{ $errors->has('price_type') ? ' is-invalid' : '' }}" required>
                    <option value="1">Российский Рубль (RUB)</option>
                    <option value="2">Американский Доллар (USD)</option>
                </select>
            </div><!-- /.form-group -->
        </div><!-- /.col-* -->
    </div><!-- /.row -->

    <div class="page-header page-header-small">
        <h3>Местоположение</h3>
    </div><!-- /.page-header -->

    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label for="city">Город</label>
                <select id="city" name="location_id" class="form-control{{ $errors->has('location_id') ? ' is-invalid' : '' }}" required>
                    <option value="1">Донецк</option>
                    <option value="2">Луганск</option>
                </select>
                @if ($errors->has('location_id'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('location_id') }}</strong>
                    </span>
                @endif
            </div><!-- /.form-group -->
        </div><!-- /.col-* -->

        <div class="col-sm-4">
            <div class="form-group">
                <label for="street">Улица</label>
                <input id="street" name="street" type="text" class="form-control{{ $errors->has('street') ? ' is-invalid' : '' }}" value="{{ old('street') }}" required>
                @if ($errors->has('street'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('street') }}</strong>
                    </span>
                @endif
            </div><!-- /.form-group -->
        </div><!-- /.col-* -->

    </div><!-- /.row -->
    <div class="row">
        <div class="col-sm-4">
        <div class="checkbox">
            <label><input id="check_location" type="checkbox"> Отметить на карте</label>
        </div><!-- /.checkbox-->
        </div>
    </div><!-- /.row -->

    <div class="page-header page-header-small">
        <h3>Параметры Недвижимости</h3>
    </div><!-- /.page-header -->

    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label for="rooms">Кол-во комнат</label>
                <input id="rooms" name="rooms_count" type="text" class="form-control{{ $errors->has('rooms_count') ? ' is-invalid' : '' }}" value="{{ old('rooms_count') }}" required>
                @if ($errors->has('rooms_count'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('rooms_count') }}</strong>
                    </span>
                @endif
            </div><!-- /.form-group -->
        </div><!-- /.col-* -->

        <div class="col-sm-4">
            <div class="form-group">
                <label for="area">Площадь м<sup> 2</sup></label>
                <input id="area" name="area" type="text" class="form-control{{ $errors->has('area') ? ' is-invalid' : '' }}" value="{{ old('area') }}" required>
                @if ($errors->has('area'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('area') }}</strong>
                    </span>
                @endif
            </div><!-- /.form-group -->
        </div><!-- /.col-* -->

        <div class="col-sm-4">
            <div class="form-group">
                <label for="bathrooms">Кол-во сан.узлов</label>
                <input id="bathrooms" name="bathrooms_count" type="text" class="form-control{{ $errors->has('bathrooms_count') ? ' is-invalid' : '' }}" value="{{ old('bathrooms_count') }}" required>
                @if ($errors->has('bathrooms_count'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('bathrooms_count') }}</strong>
                    </span>
                @endif
            </div><!-- /.form-group -->
        </div><!-- /.col-* -->

        <div class="col-sm-4">
            <div class="form-group">
                <label for="bedrooms">Кол-во спален</label>
                <input id="bedrooms" name="bedrooms_count" type="text" class="form-control{{ $errors->has('bedrooms_count') ? ' is-invalid' : '' }}" value="{{ old('bedrooms_count') }}" required>
                @if ($errors->has('bedrooms_count'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('bedrooms_count') }}</strong>
                    </span>
                @endif
            </div><!-- /.form-group -->
        </div><!-- /.col-* -->
    </div>


    <div class="page-header page-header-small">
        <h3>Контактная информация</h3>
    </div><!-- /.page-header -->

    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label for="email">E-Mail</label>
                <input id="email" name="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div><!-- /.form-group -->
        </div><!-- /.col-* -->

        <div class="col-sm-4">
            <div class="form-group">
                <label for="phone">Телефон</label>
                <input name="phone" id="phone" type="tel" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" value="{{ old('phone') }}" required>
                @if ($errors->has('phone'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                @endif
            </div><!-- /.form-group -->
        </div><!-- /.col-* -->

        <div class="col-sm-4">
            <div class="form-group">
                <label for="phone_2">Дополнительный телефон</label>
                <input name="phone_2" id="phone_2" type="tel" class="form-control{{ $errors->has('phone_2') ? ' is-invalid' : '' }}" value="{{ old('phone_2') }}">
                @if ($errors->has('phone_2'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('phone_2') }}</strong>
                    </span>
                @endif
            </div><!-- /.form-group -->
        </div><!-- /.col-* -->
    </div>

    <div class="page-header page-header-small">
        <h3>Дополнительная Информация</h3>
    </div><!-- /.page-header -->
    <div class="checkbox">
        <label><input id="check_rules" type="checkbox"> Я соглашаюсь с условиями размещения</label>
    </div>

    <div class="center">
        <button type="submit" class="btn btn-primary">Разместить объявление</button>
    </div><!-- /.center -->
</form>
@endsection