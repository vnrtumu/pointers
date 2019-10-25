<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use App\user;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('profile.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $user = Profile::select('*')->where('user_id', $request->user_id)->get();
        $user = DB::table('profiles')->where('user_id',  $request->user_id)->get();
        if(count($user) == 0){
            $profileInput  = $request->except('profile');
            $image = $request->profile;
            if($image){
                $image = str_replace('data:image/png;base64,', '', $image);
                $image = str_replace(' ', '+', $image);
                $imageName = rand(0,1000).time().'.png';
                \File::put(public_path('images/profiles'). '/' . $imageName, base64_decode($image));
                $profileInput['profile'] = $imageName;
            }
            // $profileInput->profile = $imageName;
            Profile::create($profileInput);
            return redirect( route('profile') )->with('message', 'Profile is stored successfully ');
        }else{
            return redirect( route('profile') )->with('message', 'Profile is already created');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        // $id = base64_decode($profile->id);
        // dd(Auth::user()->id);

        // // Auth::user()->id;
        // return view('profile.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
