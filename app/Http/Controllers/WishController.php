<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Wish;
use App\User;

use Illuminate\Http\Request;

class WishController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list =  Auth::user()->wishes()->get();

        return view('wish/index', [
            'list' => $list
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wish/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $wish = new Wish();
        $wish->title = $request->input("title");
        $wish->user()->associate(Auth::user());
        $wish->save();
        return redirect('wishes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wish =  Auth::user()->wishes()->get()->find($id);
        return view('wish/show', [
            'wish' => $wish
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('wish/edit', [
            'id' => $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $new_title = $request->input('title');
        $wish = Wish::find($id);
        $wish ->title = $new_title;
        $wish -> save();
        return redirect('wishes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Wish::destroy($id);
        return redirect('wishes');  
    }
}
