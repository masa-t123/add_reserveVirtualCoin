@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <button type="button" id="disp-all"     class="btn btn-default">All</button>
            <button type="button" id="disp-zaif"    class="btn btn-info">Zaif</button>
            <button type="button" id="disp-cc"      class="btn btn-success">CoinCheck</button>
            <button type="button" id="disp-bf"      class="btn btn-primary">BitFlyer</button>
            <button type="button" id="disp-binance" class="btn btn-warning">Binance</button>
        </div>
        <div class="col-sm-1"></div>
    </div>
    <hr>
    @include('top.parts.zaif')

    @include('top.parts.coincheck')

    @include('top.parts.bitflyer')

    @include('top.parts.binance')
@endsection

@section('affiliate')
    @include('layouts.affiliate')
@endsection