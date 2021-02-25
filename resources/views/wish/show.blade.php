@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                INFORMATION
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $wish->title }}</h5>
                <p class="card-text"> Created at - {{ $wish->created_at }} </p>
                <p class="card-text"> Updated at - {{ $wish->updated_at }} </p>
                <a href="/wishes" class="btn btn-primary">Go back</a>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection