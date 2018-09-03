<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//////////////////////////////////////////
///
///    USER CONTROLLERS,
///    u need to be logged as User to use it.
///
/////////////////////////////////////////

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $id = Auth::user()->id;
        $comments = Comment::where('user_id',$id)->orderByDesc('created_at')->get();

        return view('home',compact('user','comments'));
    }
}
