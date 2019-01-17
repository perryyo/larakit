<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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
        return view('dashboard.dashboard');
    }
    public function add()
    {
        return view('dashboard.file.add');
    }
    public function list()
    {
        return view('dashboard.file.list');
    }
    public function upload()
    {
        return view('dashboard.permission.list');
    }

}
