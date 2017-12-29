<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'v-coin.info') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        html, body {
            font-family: "Hiragino Kaku Gothic ProN","メイリオ", sans-serif;
        }
    </style>


</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">v-coin.info</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="/about">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<!-- Affiliate -->
<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-3">
        <a href="https://zaif.jp?ac=uow5wet4sg" rel="nofollow"><img src="https://d2p8taqyjofgrq.cloudfront.net/images/affiliate/banner/zaif_D_234x60.png?ac=uow5wet4sg" /></a>
    </div>
    <div class="col-sm-3">
        <a href="https://coincheck.com/?c=dtg96HPJ0H8" target="_blank"><img src="https://coincheck.com/images/affiliates/05_cc_banner_234x60.png" alt="ビットコイン取引高日本一の仮想通貨取引所 coincheck bitcoin"></a>
    </div>
    <div class="col-sm-4">
        <a href="https://bitflyer.jp?bf=iv4xrw0g" target="_blank"><img src="https://bitflyer.jp/Images/Affiliate/affi_04_468x60.gif?201709" alt="bitFlyer ビットコインを始めるなら安心・安全な取引所で"></a>
    </div>
    <div class="col-sm-1"></div>
</div>

<!-- Javascript -->
<script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
