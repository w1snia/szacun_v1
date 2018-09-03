<?php

namespace App\Http\Controllers;

use App\Comment;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



//////////////////////////////////////////
///
///    COMMENT CONTROLLERS,
///    u need to be logged as Supervisor to use it.
///
/////////////////////////////////////////
///
///
    public function __construct()
    {
        $this->middleware('auth:supervisor');
    }

    //page with form where supervisors create comment for user
    public function index($id, $letter)
    {

        $user = User::all()->where('id', 'LIKE', $id)->first();
        return view('supervisor.create_comment', compact('user', 'letter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    // Storing comment in database
    // Also increment specific letter($letter) for specific user($user)
    // Title for comment is automatically set depends of $letter
    public function store(Request $request, $id, $letter)
    {
        $this->validate($request, array(
            'title' => 'required|max:255',
            'body' => 'required|min:5|max:1000'
        ));

        $user = User::all()->where('id', 'LIKE', $id)->first();

        $comment = new Comment();
        $comment->title = $request->title;
        $comment->body = $request->body;
        $comment->user()->associate($user);

        $comment->save();


        switch ($letter) {
            case 'Integrity':
                $l = 'i';
                $ltotal = 'itotal';
                break;
            case "Qustomer Dedication":
                $l = 'q';
                $ltotal = 'qtotal';
                break;
            case "Open Communication":
                $l = 'o';
                $ltotal = 'ototal';
                break;
            case "Respect":
                $l = 'r';
                $ltotal = 'rtotal';
                break;
            case "Innovation":
                $l = 'i2';
                $ltotal = 'i2total';
                break;
            case "Accountability":
                $l = 'a';
                $ltotal = 'atotal';
                break;
            case "Need to give back":
                $l = 'n';
                $ltotal = 'ntotal';
                break;
        }

        $authid = Auth::id();
        DB::table('supervisors')->where('id', $authid)->increment('count', 1);
        DB::table('supervisors')->where('id', $authid)->increment('counttotal', 1);
        DB::table('users')->where('id', $id)->increment($l, 1);
        DB::table('users')->where('id', $id)->increment($ltotal, 1);


        return redirect()->route('supervisor.dashboard');


    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
