@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-2">
            <span class="label label-success">Zaif</span>
        </div>
        <div class="col-sm-5">&nbsp;</div>
        <div class="col-sm-3 text-right get-data-date">
            {{ $items['created_at'] }}
        </div>
        <div class="col-sm-1"></div>
    </div>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Coin</th>
                        <th>Price</th>
                        <th>%(Yesterday)</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items['dataList'] as $data)
                        @if ($data['per'] == 0)
                            <tr>
                        @elseif ($data['per'] > 0)
                            <tr class="success">
                        @else
                            <tr class="danger">
                        @endif
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <span class="icon-base icon-{{ $data['coin'] }}">
                                <span class="coin-name">{{ $data['coin'] }}</span>
                            </span>
                        </td>
                        <td>&yen;{{ $data['price'] }}</td>
                        <td>{{ $data['per'] }}%</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-sm-1"></div>
    </div>
@endsection

@section('affiliate')
    @include('layouts.affiliate')
@endsection