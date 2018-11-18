@extends('layouts.master')

@section('title','Создать объявление')

@section('content')
    <div class="row">
        <div class="col">
            <h3 class="pt-4">Создать объявление</h3>
        </div>
        <div class="col">
            @include('controls.offer-create-options')
        </div>
    </div>
    <p class="pt-3"> <strong>Шаг 1</strong>: Создайте свое объявление о продаже зерна</p>
@endsection