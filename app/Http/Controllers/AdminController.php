<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Exports\SupervisorsExport;
use App\Exports\UsersExport;
use App\Http\Requests\AdminRequest;
use App\Supervisor;
use App\User;
use App\Comment;


//use Barryvdh\DomPDF\PDF;

use Barryvdh\DomPDF\Facade as PDF;


use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Facades\Excel as Excel;
use Maatwebsite\Excel\Concerns\FromView;

/////////////////////////////////////////
///
///    ADMIN CONTROLLERS,
///    u need to be logged as Admin to use it.
///
/////////////////////////////////////////

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


    // Downloading report to .PDF
    public function downloadReport()
    {
        $users = User::all();
        $supervisors = Supervisor::all();
        $pdf = PDF::loadView('admin.showReport', compact('users', 'supervisors'));
        return $pdf->download('szacun_raport.pdf');
    }


    // Report in excel for users
    public function downloadReportExcel()
    {
        return Excel::download(new UsersExport(), 'users.xlsx');
    }

    // Report in excel for supervisors
    public function downloadReportExcel2()
    {
        return Excel::download(new SupervisorsExport(), 'supervisors.xlsx');
    }

    //Showing page with reports
    public function showReport()
    {

        $users = User::all();
        $supervisors = Supervisor::all();

        return view('admin.showReport', compact('users', 'supervisors'));
    }

    // Main admin's page (supervisors list)
    public function index()
    {

        $supervisors = Supervisor::all();
        return view('admin.admin', compact('supervisors'));
    }


    //Page with list of users
    public function showUsers()
    {
        $users = User::all();
        return view('admin.show_users', compact('users'));

    }

    public function userProfile($id)
    {

        $user = User::all()->where('id', 'LIKE', $id)->first();
        $comments = Comment::where('user_id', $id)->orderByDesc('created_at')->get();

        return view('admin.userProfile', compact('user', 'comments'));
    }

    //Page with form to create user
    public function createUser()
    {
        return view('admin.create_user');
    }

    // Function store user from form to database and redirect to main admin page
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

    // Function deleting user from database
    public function deleteUser($del_id)
    {
        User::destroy($del_id);
        return redirect()->route('admin.show.user');
    }

    // Deleting supervisor from database
    public function deleteSupervisor($del_id)
    {
        Supervisor::destroy($del_id);
        return redirect()->route('admin.dashboard');
    }

    //Page with form to create user
    public function createSupervisor()
    {
        return view('admin.create_supervisor');
    }

    // Function store supervisor from form to database and redirect to main admin page
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

    // Page with supervisor profile, passing $users that have same departament as supervisor
    public function supervisorProfile($id)
    {
        $supervisor = Supervisor::all()->where('id', 'LIKE', $id)->first();
        $dep = $supervisor->department;
        $users = User::all()->where('department', 'LIKE', $dep);
        return view('admin.supervisorProfile', compact('supervisor', 'users'));
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


    //Page with reports
    public function reports()
    {
        return view('admin.reports');
    }


    // function reset all SZACUN points and supervisor counters (doesn't reset TOTAL points)
    public function resetChar()
    {
        DB::table('users')->update(['i' => 0]);
        DB::table('users')->update(['q' => 0]);
        DB::table('users')->update(['o' => 0]);
        DB::table('users')->update(['r' => 0]);
        DB::table('users')->update(['i2' => 0]);
        DB::table('users')->update(['a' => 0]);
        DB::table('users')->update(['n' => 0]);
        DB::table('supervisors')->update(['count' => 0]);
        return redirect()->route('admin.dashboard');
    }

    // deleting all comments
    public function resetComment()
    {

        $comments = Comment::all();
        foreach ($comments as $comment) {
            $comment->forceDelete();
        }
//        return response()->json(['error' => false]);


        return redirect()->route('admin.dashboard');
    }
}
