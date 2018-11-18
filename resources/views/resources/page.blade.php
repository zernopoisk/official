@extends('layouts.master')

@section('title', $alias)

@section('content')
    <h3 class="pt-4">{{$alias}}</h3>
    <p class="pt-3">Страница "{{$alias}}".</p>
@endsection