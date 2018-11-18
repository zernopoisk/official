@extends('layouts.master')

@section('title','Просмотреть мое объявление')

@section('content')
    <div class="row">
        <div class="col">
            <h3 class="pt-4">Просмотреть мое объявление</h3>
        </div>
        <div class="col">
            @include('controls.offer-create-options')
        </div>
    </div>
    <p class="pt-3"> <strong>Шаг 2</strong>: Просмотрите как будет выглядеть ваше объявление на сайте</p>
@endsection