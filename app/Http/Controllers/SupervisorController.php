<?php

namespace App\Http\Controllers;

use App\Supervisor;


use App\User;
use App\Comment;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed department
 */
class SupervisorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:supervisor');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    //////////////////////////////////////////
///
///    SUPERVISOR CONTROLLERS,
///    u need to be logged as Supervisor to use it.
///
/////////////////////////////////////////

    // main Supervisor page
    public function index()
    {

        $username = Auth::user('supervisor')->username;
        $count = Auth::user('supervisor')->count;
        $counttotal = Auth::user('supervisor')->counttotal;
        $dep = Auth::user('supervisor')->department;
        $users = User::all()->where('department', 'LIKE', $dep);


        return view('supervisor.supervisor', compact('users', 'count', 'username','counttotal'));
    }

    // Users profile, passing comments to display them
    public function userProfile($id)
    {

        $user = User::all()->where('id', 'LIKE', $id)->first();
        $comments = Comment::where('user_id',$id)->orderByDesc('created_at')->get();

        return view('supervisor.userProfile', compact('user', 'comments'));
    }



    ////////////////////////////
    ///
    ///  Increment func set the letter and redirect to comment form with param $letter
    ///
    /// /////////////////////

    public function incrementi($id)
    {

        $letter = 'Integrity';
        return redirect()->route('supervisor.create.comment',['id'=>$id,'letter'=>$letter]);

    }

    public function incrementq($id)
    {

        $letter = 'Qustomer Dedication';
        return redirect()->route('supervisor.create.comment',['id'=>$id,'letter'=>$letter]);
    }

    public function incremento($id)
    {

        $letter = 'Open Communication';
        return redirect()->route('supervisor.create.comment',['id'=>$id,'letter'=>$letter]);
    }

    public function incrementr($id)
    {
        $letter = 'Respect';
        return redirect()->route('supervisor.create.comment',['id'=>$id,'letter'=>$letter]);
    }

    public function incrementi2($id)
    {

        $letter = 'Innovation';
        return redirect()->route('supervisor.create.comment',['id'=>$id,'letter'=>$letter]);
    }

    public function incrementa($id)
    {
    $letter = 'Accountability';
    return redirect()->route('supervisor.create.comment',['id'=>$id,'letter'=>$letter]);
    }

    public function incrementn($id)
    {

    $letter = 'Need to give back';
    return redirect()->route('supervisor.create.comment',['id'=>$id,'letter'=>$letter]);
    }

}
