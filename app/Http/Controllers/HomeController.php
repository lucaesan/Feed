<?php

namespace App\Http\Controllers;

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
     * redirect home to Feed. just works :)
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return redirect()->route('Feed.index');
    }
}
