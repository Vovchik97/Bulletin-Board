<?php

namespace App\Http\Controllers;

use App\Models\Bb;

class BbsController extends Controller
{
    public function index()
    {
        $bbs = Bb::latest()->get();
        return view('index', compact('bbs'));
    }

    /**
     * @param Bb $bb
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function detail(Bb $bb)
    {
        return view("detail", compact('bb'));
    }

}
