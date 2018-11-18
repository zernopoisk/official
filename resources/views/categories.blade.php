@extends('layouts.master')

@section('title', mb_convert_case($alias, MB_CASE_TITLE))

@section('content')
    <h3 class="pt-4">Раздел "{{mb_convert_case($alias, MB_CASE_TITLE)}}"</h3>
    <p class="pt-3">Страница со списком всех объявлений для раздела "{{mb_convert_case($alias, MB_CASE_TITLE)}}".</p>
@endsection