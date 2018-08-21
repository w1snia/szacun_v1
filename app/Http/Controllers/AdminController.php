<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Supervisor;
use App\User;
use Illuminate\Http\Request;

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
}
