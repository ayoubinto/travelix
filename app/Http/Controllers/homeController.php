<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    public function index(){
        $result = DB::table('ville')->get();
        dd($result);
        return view('welcome');
    }
    public function about(){
        return view('About');
    }
    public function contact(){
        return view('Contact');
    }
}
