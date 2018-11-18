<!-- Footer -->
<footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">

        <div class="col-12 col-md">
            <img class="mb-2" src="{{asset('assets/img/brand/zernopoisk-logo.svg')}}" alt="ЗерноПоиск" width="24" height="24">
            <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
        </div>

        <div class="col-6 col-md">
            <ul class="list-unstyled text-small">
                @foreach (config('dict.crops') as $item)
                    @if ("yes" === $item['available'])
                        <li>
                            <a href="{{route('categories', ['alias'=>$item['translit']])}}" class="text-muted">
                                {{mb_convert_case($item['name'], MB_CASE_TITLE)}}
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>

        <div class="col-6 col-md">
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="{{route('resource', ['alias'=>'placement-rules'])}}" title="Правила размещения объявлений">Правила размещения</a></li>
                <li><a class="text-muted" href="{{route('resource', ['alias'=>'incoterms-2010'])}}" title="Правила Инкотермс-2010">Инкотермс-2010</a></li>
                <li><a class="text-muted" href="{{route('resource', ['alias'=>'classiness-of-grain'])}}" title="Классность зерна">Классность зерна</a></li>
            </ul>
        </div>
        
        <div class="col-6 col-md">
            <ul class="list-unstyled text-small">
                <li><a href="{{route('sitemap')}}" class="text-muted">Карта сайта</a></li>
                <li><a href="{{route('contact')}}" class="text-muted">Контакты</a></li>
                <li><a href="{{route('ad')}}" class="text-muted">Реклама</a></li>
            </ul>
        </div>

    </div> <!-- end div.row -->
</footer>