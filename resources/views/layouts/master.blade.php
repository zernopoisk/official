<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>@yield('title') &mdash; {{config('app.name')}}</title>

        <!-- Bootstrap core CSS -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- Custom application styles -->
        <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">
    </head>
    <body>
        <!-- Navigation -->
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
            <h5 class="my-0 mr-md-auto font-weight-normal">
                <a href="{{route('home')}}" class="navbar-brand" title="Главная ЗерноПоиск">
                    {{config('app.name')}}
                </a>
            </h5>
            <nav class="my-2 my-md-0 mr-md-3">
                @foreach (config('dict.crops') as $item)
                    @if ("yes" === $item['available'])
                        <a class="p-2 text-dark" href="{{route('categories', ['alias'=>$item['translit']])}}">
                            {{mb_convert_case($item['name'], MB_CASE_TITLE)}}
                        </a>
                    @endif
                @endforeach
            </nav>
            <!-- Sell Corn Btn -->
            <a href="{{route('offer.create')}}" class="btn btn-danger" title="Подать объявление о продаже зерна">
                + Подать объявление
            </a>
        </div>
        <div class="container">
            @yield('content')
            @include('layouts.footer')
        </div> <!-- end container -->

        @include('layouts.js')
    </body>
</html>