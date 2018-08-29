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
    public function index()
    {

        $name = Auth::user('supervisor')->name;
        $count = Auth::user('supervisor')->count;
        $counttotal = Auth::user('supervisor')->counttotal;
        $dep = Auth::user('supervisor')->department;
        $users = User::all()->where('department', 'LIKE', $dep);


        return view('supervisor.supervisor', compact('users', 'count', 'name','counttotal'));
    }

    public function userProfile($id)
    {

        $user = User::all()->where('id', 'LIKE', $id)->first();
        $comments = Comment::all()->where('id_user', 'LIKE', $id);

        return view('supervisor.userProfile', compact('user', 'comments'));
    }


    public function incrementi($id)
    {
//        $authid = Auth::id();
//        DB::table('supervisors')->where('id', $authid)->increment('count', 1);
//        DB::table('supervisors')->where('id', $authid)->increment('counttotal', 1);
//        DB::table('users')->where('id', $id)->increment('i', 1);
//        DB::table('users')->where('id', $id)->increment('itotal', 1);
        $letter = 'Integrity';
        return redirect()->route('supervisor.create.comment',['id'=>$id,'letter'=>$letter]);

    }

    public function incrementq($id)
    {
////        $authid = Auth::id();
////        DB::table('supervisors')->where('id', $authid)->increment('count', 1);
////        DB::table('supervisors')->where('id', $authid)->increment('counttotal', 1);
////        DB::table('users')->where('id', $id)->increment('q', 1);
////        DB::table('users')->where('id', $id)->increment('qtotal', 1);
//        return redirect()->route('supervisor.dashboard');

        $letter = 'Qustomer Dedication';
        return redirect()->route('supervisor.create.comment',['id'=>$id,'letter'=>$letter]);
    }

    public function incremento($id)
    {
//        $authid = Auth::id();
//        DB::table('supervisors')->where('id', $authid)->increment('count', 1);
//        DB::table('supervisors')->where('id', $authid)->increment('counttotal', 1);
//        DB::table('users')->where('id', $id)->increment('o', 1);
//        DB::table('users')->where('id', $id)->increment('ototal', 1);
//        return redirect()->route('supervisor.dashboard');

        $letter = 'Open Communication';
        return redirect()->route('supervisor.create.comment',['id'=>$id,'letter'=>$letter]);
    }

    public function incrementr($id)
    {
//        $authid = Auth::id();
//        DB::table('supervisors')->where('id', $authid)->increment('count', 1);
//        DB::table('supervisors')->where('id', $authid)->increment('counttotal', 1);
//        DB::table('users')->where('id', $id)->increment('r', 1);
//        DB::table('users')->where('id', $id)->increment('rtotal', 1);
//        return redirect()->route('supervisor.dashboard');
        $letter = 'Respect';
        return redirect()->route('supervisor.create.comment',['id'=>$id,'letter'=>$letter]);
    }

    public function incrementi2($id)
    {
//        $authid = Auth::id();
//        DB::table('supervisors')->where('id', $authid)->increment('count', 1);
//        DB::table('supervisors')->where('id', $authid)->increment('counttotal', 1);
//        DB::table('users')->where('id', $id)->increment('a', 1);
//        DB::table('users')->where('id', $id)->increment('atotal', 1);
//        return redirect()->route('supervisor.dashboard');

        $letter = 'Innovation';
        return redirect()->route('supervisor.create.comment',['id'=>$id,'letter'=>$letter]);
    }

    public function incrementa($id)
    {
//        $authid = Auth::id();
//        DB::table('supervisors')->where('id', $authid)->increment('count', 1);
//        DB::table('supervisors')->where('id', $authid)->increment('counttotal', 1);
//        DB::table('users')->where('id', $id)->increment('a', 1);
//        DB::table('users')->where('id', $id)->increment('atotal', 1);
//        return redirect()->route('supervisor.dashboard');

    $letter = 'Accountability';
    return redirect()->route('supervisor.create.comment',['id'=>$id,'letter'=>$letter]);
    }

    public function incrementn($id)
    {
//        $authid = Auth::id();
//        DB::table('supervisors')->where('id', $authid)->increment('count', 1);
//        DB::table('supervisors')->where('id', $authid)->increment('counttotal', 1);
//        DB::table('users')->where('id', $id)->increment('n', 1);
//        DB::table('users')->where('id', $id)->increment('ntotal', 1);
//        return redirect()->route('supervisor.dashboard');
    $letter = 'Need to give back';
    return redirect()->route('supervisor.create.comment',['id'=>$id,'letter'=>$letter]);
    }

}
