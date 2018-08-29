<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Http\Requests\AdminRequest;
use App\Supervisor;
use App\User;
use App\Comment;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supervisors = Supervisor::all();
        return view('admin.admin', compact('supervisors'));
    }

    public function showUsers()
    {
        $users = User::all();
        return view('admin.show_users',compact('users'));

    }



    public function userProfile($id)
    {

        $user = User::all()->where('id','LIKE',$id)->first();
        $comments = Comment::all()->where('id_user','LIKE',$id);

        return view('admin.userProfile', compact('user','comments'));
    }

    public function createUser()
    {
        return view('admin.create_user');
    }

    public function storeUser(AdminRequest $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $name = $request->input('name');
        $surname = $request->input('surname');
        $department = $request->input('department');
        $email = $request->input('email');

        User::create($request->all());
        return redirect()->route('admin.dashboard');
    }

    public function deleteUser($del_id)
    {
        User::destroy($del_id);
        return redirect()->route('admin.show.user');
    }

    public function createSupervisor()
    {
        return view('admin.create_supervisor');
    }

    public function storeSupervisor(AdminRequest $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $name = $request->input('name');
        $surname = $request->input('surname');
        $department = $request->input('department');
        $email = $request->input('email');

        Supervisor::create($request->all());
        return redirect()->route('admin.dashboard');
    }

    public function supervisorProfile($id)
    {
        $supervisor = Supervisor::all()->where('id','LIKE',$id)->first();
        $dep = $supervisor->department;
        $users = User::all()->where('department','LIKE',$dep);
        return view('admin.supervisorProfile', compact('supervisor','users'));
    }

    public function deleteSupervisor($del_id)
    {
        Supervisor::destroy($del_id);
        return redirect()->route('admin.dashboard');
    }

    public function createAdmin()
    {
        return view('admin.create_admin');
    }

    public function storeAdmin(AdminRequest $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $name = $request->input('name');
        $surname = $request->input('surname');
        $email = $request->input('email');

        Admin::create($request->all());
        return redirect()->route('admin.dashboard');
    }


    public function reports()
    {
        return view('admin.reports');
    }

    public function resetChar()
    {
        DB::table('users')->update(['i'=>0]);
        DB::table('users')->update(['q'=>0]);
        DB::table('users')->update(['o'=>0]);
        DB::table('users')->update(['r'=>0]);
        DB::table('users')->update(['i2'=>0]);
        DB::table('users')->update(['a'=>0]);
        DB::table('users')->update(['n'=>0]);
        DB::table('supervisors')->update(['count'=>0]);
        return redirect()->route('admin.dashboard');
    }

    public function resetComment()
    {

        $comments = Comment::all();
        foreach($comments as $comment)
        {
            $comment->forceDelete();
        }
//        return response()->json(['error' => false]);


        return redirect()->route('admin.dashboard');
    }
}
