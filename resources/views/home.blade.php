@extends('layouts.master')

@section('title','Главная')

@section('content')
    <div class="pricing-header px-3 py-3 pt-md-4 pb-md-5 mx-auto text-center">
        <h1 class="display-3">ЗерноПоиск</h1>
        <p class="lead pt-2">Получайте <u class="bold">самые выгодные предложения</u> по ценам на зерно.</p>
        <p class="pt-3"><b>ЗерноПоиск</b> &mdash; специализированная доска объявлений <u>для производителей и продавцов зерновых Украины</u>, где можно <strong>продать зерно</strong> по самым выгодным ценам, получая предложения от покупателей со всей страны.</p>
        <p class="pt-3"><a href="{{route('offer.create')}}" class="btn btn-danger" title="Подать объявление о продаже зерна">+ Подать объявление</a></p>
    </div>
@endsection