<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $usernumber = auth()->user()->number;
        $userid=auth()->user()->id;
        $userpaystacks = DB::table('paystacks')->where('userid',$userid)->get();
        $invites = DB::table('paystacks')->where('refeererid',$userid)->count();
        if(DB::table('paystacks')->where('userid',$userid)->exists()){
            return view('home')->with('userpaystacks',$userpaystacks)->with('invites',$invites)->with('usernumber',$usernumber);
        }else{
            return redirect('/paystack');
        }
    }

    public function paystack()
    {
        $userid=auth()->user()->id;
        //$paiduser = DB::table('paystacks')->where('userid',$userid)->get();
        if(DB::table('paystacks')->where('userid',$userid)->exists()){
            return redirect('/home');
        }else{
            return view('paystack');
        }
    }

}
