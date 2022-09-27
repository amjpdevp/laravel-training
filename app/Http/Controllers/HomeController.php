<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){
        $dataoftable = User::paginate(10);
        return view('home',compact('dataoftable'));
    }
}
