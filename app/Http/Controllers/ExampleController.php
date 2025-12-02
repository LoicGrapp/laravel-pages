<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function home () {
        $allfruits = ['apple', 'banana', 'cherry', 'date'];
        return view ('homepage', ['fruits' => $allfruits], ['users' => [ 'Alice' => 25, 'Bob' => 30, 'Charlie' => 35 ]]);
    }

    public function about () {
        return view ('about');
    }
}
