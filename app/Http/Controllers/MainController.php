<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function check(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'age' => 'numeric|min:18'
        ]);

        return 'Your name is ' . $request->input('name') . ', your age is ' . $request->input('age');
    }
}
