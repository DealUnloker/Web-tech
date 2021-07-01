<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function news()
    {
        return view('pages.news');
    }

    public function reviews()
    {
        return view('pages.reviews');
    }

    public function about()
    {
        return view('pages.about');
    }
}
