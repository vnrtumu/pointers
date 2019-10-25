<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
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

    public function index()
    {
        // $users = User::all();
        $users = DB::table('users as u')
            ->select([
                'u.name',
                'u.email',
                'p.profile',
                'p.mobile_no',
                'p.address',
                'p.city',
            ])
            ->Join('profiles as p', 'u.id', '=', 'p.user_id')
            ->get();

        // return route("users")->compact('users', $users);
        return view('users', compact('users'));
    }
}
