<?php

namespace App\Http\Controllers;

use App\Bid;
use App\Car;
use App\Review;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except([
            'show',
            'index',
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function show(User $user)
    {
        $cars = Car::where('seller_id',$user->id)->get();
        $purchases = Car::allPurchases($user);
//        $lastbid = $purchases->lastBid();
//        dd($lastbid);
        return view('users.show', compact('user','cars','purchases'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        if (request()->status !== NULL){
            User::where('id',$id)->update([
                'status' => request()->status
            ]);
            return back();
        }
        if (auth()->id() == $id){
        $this->validate(request(),[
            'name' => 'required',
            'phone' => 'required|min:10|max:11|unique:users,phone,'.auth()->id(),
            'email' => 'required|unique:users,email,'.auth()->id(),
        ]);
        auth()->user()->update([
            'name' => request()->name,
            'phone' => request()->phone,
            'email' => request()->email,
        ]);
        return redirect()->back();
        }
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Bid::where('bidder_id',$id)->delete();
        Car::where('seller_id',$id)->delete();
        Review::where('creator_id',$id)->orWhere('target_id',$id)->delete();
        User::where('id',$id)->delete();
        return back();
    }

    public function showResetForm(User $user){
        if (Auth()->id() == $user->id){
        return view('users.reset',compact('user'));
        }
        return redirect('/');
        }


    public function changePassword(Request $request){

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }

        $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success","Password changed successfully !");

        }
}
