@extends('Layouts.base')

@section('content')
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-2">
            <span class="label label-success">Zaif</span>
        </div>
        <div class="col-sm-6">&nbsp;</div>
        <div class="col-sm-3">
            {{ $items['created_at'] }}
        </div>
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
                        @if ($data['per'] > 0)
                            <tr class="success">
                        @else
                            <tr class="danger">
                        @endif
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data['coin'] }}</td>
                        <td>{{ $data['price'] }} jpy</td>
                        <td>{{ $data['per'] }}%</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-sm-1"></div>
    </div>
@endsection