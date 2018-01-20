<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('layouts.analytics')

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'v-coin.info') }}@yield('pagename')</title>
    <meta name="description" content="v-coin.infoは、主にZaif等の国内での仮想通貨取引所・販売所の価格表示を行っている趣味ページです" >

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}?date=<?php echo date('YmdHis') ?>" rel="stylesheet">
    <link href="https://cdn.datatables.net/v/bs4/jqc-1.12.3/dt-1.10.16/datatables.min.css" rel="stylesheet"/>
    <link href="{{ asset('css/vcoinapp.css')}}?date=<?php echo date('YmdHis') ?>" rel="stylesheet">
    <link href="{{ asset('css/footer.css')}}?date=<?php echo date('YmdHis') ?>" rel="stylesheet">
    <style>
        html, body {
            font-family: "Hiragino Kaku Gothic ProN","メイリオ", sans-serif;
        }
    </style>


</head>
<body>
@include('layouts.navigation')

@yield('content')

@include('layouts.affiliate')

@include('layouts.footer')

<!-- Javascript -->
<script src="{{ asset('js/app.js') }}?date=<?php echo date('YmdHis') ?>" type="text/javascript"></script>
<script src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js" type="text/javascript"></script>
<script src="{{ asset('js/vcoinapp.js') }}?date=<?php echo date('YmdHis') ?>" type="text/javascript"></script>
</body>

</html>
