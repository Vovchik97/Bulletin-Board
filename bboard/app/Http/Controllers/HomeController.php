<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBBRequest;
use App\Models\Bb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('home');
    }

    public function showAddBbForm()
    {
        return view("bb_add");
    }

    public function storeBb(StoreBBRequest $request)
    {
        $data = $request->validated();

        Auth::user()->bbs()->create($data);

        return redirect()->route("home.index");
    }

    public function showEditBbForm(Bb $bb)
    {
        return view("bb_edit", compact('bb'));
    }

    public function updateBb(Request $request, Bb $bb)
    {
        $bb->update($request->all());
        return redirect()->route("home.index");
    }

    public function showDeleteBbForm(Bb $bb)
    {
        return view("bb_delete", compact('bb'));
    }

    public function destroyBb(Bb $bb)
    {
        $bb->delete();
        return redirect()->route("home.index");
    }
}

