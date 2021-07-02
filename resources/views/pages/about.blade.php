@extends('layouts.master')

@section('title', 'Послуги')

@section('content')
    <header class="py-5 bg-image-full"
            style="background-image: url('/img/about_bg1.png')">
        <div class="text-center my-5">
            <img class="img-fluid rounded-circle mb-4" width="150" height="150" src="/img/krnu.jpg"
                 alt="..."/>
            <h1 class="text-white fs-3 fw-bolder">Олександр Крохальов</h1>
            <p class="text-white-50 mb-0">Created By</p>
        </div>
    </header>
    <section class="py-5">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h2> Курсовий проект </h2>
                    <p class="lead">Розробка ІС для спортивного комлпексу</p>
                </div>
            </div>
        </div>
    </section>
    <div class="py-5 bg-image-full" style="background-image: url('/img/about_bg2.png')">
        <div style="height: 20rem"></div>
    </div>
@endsection
