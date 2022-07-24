<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\paystack;
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
        $usertoken = auth()->user()->token;
        $userid=auth()->user()->id;
        $userpaystacks = DB::table('paystacks')->where('userid',$userid)->get();
        $invites = DB::table('paystacks')->where('refeererid',$userid)->count();
        if(DB::table('paystacks')->where('userid',$userid)->exists()){
            return view('home')->with('userpaystacks',$userpaystacks)->with('invites',$invites)->with('usertoken',$usertoken);
        }else{
            return redirect('/paystack'); 
        }
    }

    public function paystack()
    {
        $userid=auth()->user()->id;
        if(DB::table('paystacks')->where('userid',$userid)->exists()){
            return redirect('/home');
        }else{
            return view('paystack');
        }
    }

    public function addpaystack()
    {
        $userid=auth()->user()->id;
        //return view('addpaystack');
        
        if(DB::table('paystacks')->where('userid',$userid)->exists()){
          return view('home')->with('userpaystacks',$userpaystacks)->with('invites',$invites)->with('usernumber',$usernumber);
        }else{
          return view('addpaystack');
        }

    }

    public function savepaystack()
    {
        $amountpaid=$_POST['amountpaid'];
        $refeerer_no=$_POST['refereer-no'];
        $userid=auth()->user()->id;

        /*$paystack = new Paystack;
        $paystack->userid=$userid;
        $paystack->amount=$amountpaid;
        $paystack->refeererid=$refeerer_no;
        $paystack->save();*/


            DB::insert('insert into paystacks (amount, userid, refeererid) values (?, ?, ?)', [$amountpaid, $userid, $refeerer_no]);
        
        return redirect('/home');
        /*if(
          DB::insert('insert into paystacks (amount, userid, refeererid) values (?, ?, ?)', [$amountpaid, $userid, $refeerer_no])){
            return redirect('/home'); 
          }else{
            return redirect('/paystack/addpaystack');
          }
        //DB::insert('insert into paystacks (amount, userid, refeererid) values (?, ?, ?)', [$amountpaid, $userid, $refeerer_no2]);
        //return $refeerer_no;
    }

    public function verify($reference){
         /*$curl = curl_init();
         $sec="sk_test_c6804e7ad469d1e972bb693b13e25018a09d3cc2";
  
          curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/".$reference,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
              "Authorization: Bearer $sec",
              "Cache-Control: no-cache",
            ),
          ));
          
          $response = curl_exec($curl);
          $err = curl_error($curl);

          $new_data = json_decode($response);
          return [$new_data];*/


        $curl = curl_init();
         //$sec="sk_test_c6804e7ad469d1e972bb693b13e25018a09d3cc2";
         $sec="sk_live_0aeb5091e20f80e9e5ea2d53f077976fd31e4d9b";
          
          curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/:reference",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
              "Authorization: Bearer $sec",
              "Cache-Control: no-cache",
            ),
          ));
          
          $response = curl_exec($curl);
          $err = curl_error($curl);
          //curl_close($curl);
          
          /*if ($err) {
            echo "cURL Error #:" . $err;
          } else {
            echo $response;
          }*/
          return $response;
          //$new_data = json_decode($response);
          //return $new_data;




    }


    public function paystacksave(Request $request){
        
            //$amountpaid=$request->input('amountpaid');
            $amountpaid=$_POST['amountpaid'];
            $refeerer_no=$_POST['refeerer_no'];
            $userid=auth()->user()->id;


          //$usersdb = DB::table('users')->where('userid',$userid)->get();
          if($refeerer_no == ""){
            $refeerer_no2=00;
          }else{
            if(DB::table('users')->where('id',$refeerer_no)->exists()){
              //$refeerer_no2=DB::table('users')->where('number',$refeerer_no)->first()->get();
              $refeerer_no2=$refeerer_no;
            }else{
              $refeerer_no2=00;
            }
          }

        if($amountpaid != ""){

            DB::insert('insert into paystacks (amount, userid, refeererid) values (?, ?, ?)', [$amountpaid, $userid, $refeerer_no2]);
            /*$paystack = new Paystack;
            $paystack->amount=$amountpaid;
            $paystack->userid=auth()->user()->id;
            $paystack->refeererid=$refeerer_no;
            $paystack->save();*/

            return response()->json([
                'status'=>200,
            ]); 

        }else{
            return response()->json([
                'status'=>400,
                //'errors'=>$validator->messages(),
            ]);

        }
        
    }


    


}
