@extends('layouts.master')

@section('title','Перейти к оплате объявления')

@section('content')
    <div class="row">
        <div class="col">
            <h3 class="pt-4">Перейти к оплате объявления</h3>
        </div>
        <div class="col">
            @include('controls.offer-create-options')
        </div>
    </div>
    <p class="pt-3"> <strong>Шаг 3</strong>: Оплатить мое объявление любым из доступных способов</p>
@endsection