@extends('layouts.app')

@section('content')

    <div class="container d-flex align-items-center flex-column">
        <div class="d-flex">
            <div><a class="btn btn-danger" href="{{ route('admin') }}"
                    style="width: 200px; margin-bottom: 20px">Назад</a></div>
            <div><a class="btn btn-success" href="{{ route('services.create') }}"
                    style="width: 200px; margin-bottom: 20px; margin-left: 20px">Створити</a></div>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($services as $service)
                <tr>
                    <th scope="row"> {{$service->id}} </th>
                    <td>{{$service->name }}</td>
                    <td>
                        <form method="POST" action="/admin/services/{{$service->id}}">
                            @csrf
                            {{ method_field('DELETE') }}

                            <div class="form-group">
                                <input type="submit" class="btn btn-danger" value="DELETE">
                            </div>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
