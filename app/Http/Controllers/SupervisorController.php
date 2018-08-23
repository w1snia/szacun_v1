<?php

namespace App\Http\Controllers;

use App\Supervisor;
use App\User;
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

////        $supid = Auth::id();
//        $supervisor = Supervisor::all()->where(Auth::id(),'LIKE','id');
        $name = Auth::user('supervisor')->name;
        $dep = Auth::user('supervisor')->department;
        $users = User::all()->where('department','LIKE',$dep);



        return view('supervisor.supervisor',compact('users','name'));
    }

    public function incrementi($id)
    {
        $authid = Auth::id();
        DB::table('supervisors')->where('id',$authid)->increment('count',1);
        DB::table('users')->where('id', $id)->increment('i',1);
        return redirect()->route('supervisor.dashboard');
    }

    public function incrementq($id)
    {
        $authid = Auth::id();
        DB::table('supervisors')->where('id',$authid)->increment('count',1);
        DB::table('users')->where('id', $id)->increment('q',1);
        return redirect()->route('supervisor.dashboard');
    }

    public function incremento($id)
    {
        $authid = Auth::id();
        DB::table('supervisors')->where('id',$authid)->increment('count',1);
        DB::table('users')->where('id', $id)->increment('o',1);
        return redirect()->route('supervisor.dashboard');
    }

    public function incrementr($id)
    {
        $authid = Auth::id();
        DB::table('supervisors')->where('id',$authid)->increment('count',1);
        DB::table('users')->where('id', $id)->increment('r',1);
        return redirect()->route('supervisor.dashboard');
    }

    public function incrementi2($id)
    {
        $authid = Auth::id();
        DB::table('supervisors')->where('id',$authid)->increment('count',1);
        DB::table('users')->where('id', $id)->increment('i2',1);
        return redirect()->route('supervisor.dashboard');
    }

    public function incrementa($id)
    {
        $authid = Auth::id();
        DB::table('supervisors')->where('id',$authid)->increment('count',1);
        DB::table('users')->where('id', $id)->increment('a',1);
        return redirect()->route('supervisor.dashboard');
    }

    public function incrementn($id)
    {
        $authid = Auth::id();
        DB::table('supervisors')->where('id',$authid)->increment('count',1);
        DB::table('users')->where('id', $id)->increment('n',1);
        return redirect()->route('supervisor.dashboard');
    }

}
