@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                Enter the new wish title
            </div>
                <form action="/wishes/ {{ $id }}" method="POST">
                    @method('PUT')
                    @csrf
                    <input type="text" name='title' class='form-control'>
                    <button type="submit" class='btn btn-primary'>Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection