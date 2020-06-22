<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    public function home()
    {
        if(\Auth::user()->type){
            return view('doctor.home');
        }
        return view('patient.home');
    }
    public function form()
    {
        return view('patient.form');
    }
    public function next(Request $request)
    {
        return view('patient.xray');
    }
    public function critical()
    {
        return view('doctor.critical');
    }
    public function details()
    {
        return view('patient.details');
    }
}
