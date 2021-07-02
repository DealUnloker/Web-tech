<?php

namespace App\Http\Controllers;

use App\Models\NewsItem;
use App\Models\Review;
use App\Models\Service;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $news = NewsItem::paginate(3);
        return view('index', compact('news'));
    }

    public function services()
    {
        $services = Service::all();
        return view('pages.services', compact('services'));
    }

    public function news()
    {
        $news = NewsItem::all();
        return view('pages.news', compact('news'));
    }

    public function reviews()
    {
        $reviews = Review::all();
        return view('pages.reviews', compact('reviews'));
    }

    public function about()
    {
        return view('pages.about');
    }
}
