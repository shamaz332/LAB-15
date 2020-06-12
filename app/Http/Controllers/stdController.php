<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class stdController extends Controller
{
    //

public function home (Request $request)
{
    return view("student");
}

}
