@extends('layouts.app')

@section('content')
    <div class="container admin">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Управління послугами</h5>
                        <a href=" {{ route('services.index') }}" class="btn btn-primary">Перейти</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Управління новинами</h5>
                        <a href=" {{ route('news.index') }}" class="btn btn-primary">Перейти</a>
                    </div>
                </div>
            </div>
{{--            <div class="col-sm-6">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-body">--}}
{{--                        <h5 class="card-title">Управління відгуками</h5>--}}
{{--                        <a href="#" class="btn btn-primary">Перейти</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
@endsection
