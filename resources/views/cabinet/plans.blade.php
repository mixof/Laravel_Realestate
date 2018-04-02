@extends('layouts.cabinet')
@section('title')
   Тарифные планы
@endsection
@section('content')
    <div class="pricing-boxed">
		<div class="page-header">
			<h2>Тарифные планы</h2>
		</div><!-- /.page-header -->

		<div class="pricing">
	<div class="row">
		<div class="pricing-col-wrapper col-lg-4">
			<div class="pricing-col">
				<h2 class="pricing-title">Старт</h2>

				<div class="pricing-price">
					 0.00<span class="pricing-currency"> руб</span>
				</div><!-- /.pricing-price -->

				<div class="pricing-description">
Решение для быстрого старта
</div><!-- /.pricing-description -->

				<ul class="pricing-features">
					<li>3 Объявления</li>
					<li>Техподдержка</li>
				</ul><!-- /.pricing-featured -->

				<a href="#" class="pricing-btn">Выбрать план</a>
			</div><!-- /.pricing-col -->
		</div><!-- /.pricing-col-wrapper-->

		<div class="pricing-col-wrapper col-lg-4">
			<div class="pricing-col">
				<h2 class="pricing-title">Бизнес</h2>

				<div class="pricing-price">
                    300.00<span class="pricing-currency"> руб</span>
				</div><!-- /.pricing-price -->

				<div class="pricing-description">
Решение для малого бизнеса
</div><!-- /.pricing-description -->

				<ul class="pricing-features">
					<li>30 Объявлений</li>
					<li>Управление агенством</li>
					<li>Техподдержка</li>
				</ul><!-- /.pricing-featured -->

				<a href="#" class="pricing-btn">Выбрать план</a>
			</div><!-- /.pricing-col -->
		</div><!-- /.pricing-col-wrapper -->

		<div class="pricing-col-wrapper col-lg-4">
			<div class="pricing-col">
				<h2 class="pricing-title">Профессионал</h2>

				<div class="pricing-price">
                    700.00<span class="pricing-currency"> руб</span>
				</div><!-- /.pricing-price -->

				<div class="pricing-description">
Решение для крупного бизнеса
</div><!-- /.pricing-description -->

				<ul class="pricing-features">
					<li>Бесконечные объявления</li>
					<li>Управление агенством</li>
					<li>Техподдержка</li>
				</ul><!-- /.pricing-featured -->

				<a href="#" class="pricing-btn">Выбрать план</a>
			</div><!-- /.pricing-col -->
		</div><!-- /.pricing-col-wrapper -->
	</div><!-- /.row -->
</div><!-- /.pricing -->
	</div>
@endsection