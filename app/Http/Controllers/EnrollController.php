<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enroll;

class EnrollController extends Controller
{
    public function index()
    {

        return view('enroll');
    }

    public function store()
    {
        $check = Enroll::all();
        if ($check->isEmpty()) {
          return Enroll::create(['number' => 1]);
        }
        $last_roll = Enroll::all()->last()->number;
        return Enroll::create(['number' => ($last_roll+1)]);
    }
}
