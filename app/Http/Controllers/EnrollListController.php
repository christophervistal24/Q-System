<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enroll;
use Exception;

class EnrollListController extends Controller
{
    protected $enroll;
    public function __construct(Enroll $enroll)
    {
        $this->enroll = $enroll;
    }

    public function index()
    {
        $next = Enroll::all(); //get all the list
        if ($next->isEmpty()) {
            $next = Enroll::first()->number;
        } else {
            $next = Enroll::all()->last()->number;
        }
        return view('list',compact('next'));
    }

    public function retrievenext($current_no)
    {

        try {
          $next_top = $this->enroll->next($current_no)->number;
          return response()->json(['number' => $next_top , 'success' => true]);
        } catch (Exception $e) {
           return response()->json(['message' => 'You reach the last number' , 'success' => false]);
        }
    }

}
