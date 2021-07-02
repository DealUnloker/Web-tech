@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card menu-card">
            <img src="{{ Storage::url(Auth::user()->avatar) }}" class="card-img-top" alt="avatar">
            <div class="card-body">
                <h1>Ім'я: {{Auth::user()->name}}</h1>
                <h4 class="card-text">Email: {{Auth::user()->email}}</h4>
                @if(Auth::user()->admin)
                    <h4>Роль: Адміністратор</h4>
                @else
                    <h4>Роль: Користувач</h4>
                @endif
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="card border-dark mb-3" style="width: 25rem; margin-top: 30px">
                <div class="card-header">Ваш відгук</div>
                <div class="card-body text-dark">
                    @if($text != null)
                        <p class="card-text">{{$text}}</p>
                    @else
                        <form action="{{ route('add_review') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <textarea class="form-control" id="text" name="text" rows="3"
                                          style="resize: none;"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Залишити відгук</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
