<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $id = Auth::user()->id;
        $review = Review::firstWhere('user_id', $id);
        if (isset($review))
            $text = $review->text;
        else
            $text = null;
        return view('menu', compact('text'));
    }

    public function add_review(Request $request)
    {
        $params = $request->all();
        $params['user_id'] = Auth::user()->id;
        Review::create($params);
        return redirect()->route('menu');
    }
}
