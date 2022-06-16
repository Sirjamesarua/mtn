@extends('layouts.app')

@section('content')

@php
    foreach($userpaystacks as $userpaystack){
        $userpaystack=$userpaystack;
    };

    $homelink= url('/register');
@endphp

                    
                    <!--HOME -->
                    <div id="" class="register-container w3-center w3-xxxlarge w3-white w3-border-xlarge w3-round-xxxlarge">
                    <br />
                    
                    <b class="w3-text-grey"><u>MY ACCOUNT</u></b>
                    <br />
                    <br />


                        @php
                                $stackamount=$userpaystack->amount;
                                $invitesprice= 3000 * $invites;
                                $stackdouble= 2 * $stackamount;
                                $totalprice= $invitesprice + $stackdouble;
                        @endphp
                                
                        <!--TOTAL/STACK BALANCE-->
                        <div class="">
                            <div class="">
                                <b><i>Total Balance :</i><br>
                                <small><b class="w3-text-blue">&#8358 {{$totalprice}}</b></small></b><br />

                                <hr />

                                <b><i class="">Amount Stack :</i><br>
                                <small><b class="w3-text-blue">&#8358 {{$userpaystack->amount}}</b></small></b><br />

                                <hr />

                                <b><i class="">Total Invites :</i><br>
                                <small><b class="w3-text-blue">{{$invites}} invites</b></small></b><br />

                                <hr />

                                <b><i class="">Invites Balance :</i><br>
                                <small><b class="w3-text-blue">&#8358 {{$invitesprice}}</b></small></b><br />

                            </div>
                        </div>

                                <hr />
                                <br />


                        <?php
                            /*$register=$userpaystack->created_at;
                            $register1=$userpaystack->created_at;
                            $mmm=date('y/m/d',strtotime($register1));
                            $nextdate=date('d-m-y',strtotime($register.'+1 days'));
                            $rem= strtotime($nextdate)-time();
                            //$rem= strtotime('2022-08-01 14:00:00')-time();
                            //$rem=$nextdate-time();
                            $day=floor($rem/86400);
                            $hr=floor(($rem%86400)/3600);*/
                            $register=$userpaystack->created_at;
                            $nextdate=date('y/m/d',strtotime($register.'+1 days'));
                            //$nextdate=$register.'+14 days';
                            $newdate=strtotime($register.'+1 days');
                            $rem= $newdate-time();
                            $time=time();
                            if($time>=$newdate){
                                $withdrawalinfo="you are eligible for withdrawal";
                                $showwithdrawalform="true";
                            }else{
                                //$rem= strtotime($register.'+14 days')-time();
                                //$rem=$nextdate-time();
                                $day=floor($rem/86400);
                                $hr=floor(($rem%86400)/3600);
                                $withdrawalinfo=$day."days"." ".$hr."hours ".$nextdate."remaining for withdrawal";
                                $showwithdrawalform="false";

                            }



                         ?>
                                


                        <div class="container">
                            <small><b><i class="w3-text-red"><?php echo $withdrawalinfo ?></small><br>
                            <small><b><i class="w3-text-blue">Invite a friend and earn &#8358 3,000</small>
                            <br />
                            <br />
                            <div class="row">

                                <div id="" class="w3-center w3-border-large w3-border-white w3-round-xxlarge w3-blue" style="width:50%;">
                                    <a href="javascript:void(0);" onclick="withdrawal()"><b class="w3-text-white">Withdraw</b></a>
                                </div>
                                <br />
                                
                        <!--LOGIN BUTTON-->
                                <div id="" class="w3-center w3-border-large w3-border-white w3-round-xxlarge w3-blue" style="width:50%;">
                                    <a href="javascript:void(0);" onclick="invitelink()"><b class="w3-text-white">Invite</b></a>
                                </div>

                            </div>
                        </div><br />



                        <?php

                        ?>
                        <div id="invitelinkdiv">
                            <input id="invitelink" type="text" value="{{$homelink}}/{{$usernumber}}/{{auth()->user()->id}}" class="" readonly>
                            <button onclick="copyrefeererlink()">copy</button>
                        </div>





                                <div class="form" id="withdrawalform">
                                    <div>
                                            <form method="POST" class="w3-padding" onsubmit="phonecheck()" action="{{ route('register') }}">
                                                @csrf

                                                

                                            <!--STEP2-->
                                            <div class="" id="">
                                                <!--STEPS
                                                <div class="w3-text-red">
                                                    <b><i id="steps">Step 2/4</i></b>
                                                </div>-->
                                                
                                                    
                                                    <!--STEP 2-->
                                                    <div id="" class="">
                                                    
                                                                    <b class="w3-text-grey">WITHDRAWAL DETAIL</b>
                                                                    <br />
                                                                    
                                                                    <b>WARNING :</b><i>Please Fill The Form With Correct Detail Of The Bank You Wish To Use For Withdrawal</i>
                                                                    <br />
                                                                    <br />
                                                                    
                                                                    <b><i>Account Name :</i></b>
                                                                    <br />
                                                                    <input type="text" style="height: 100px; font-size: 100%;" name="accountname"  id="accountname" class="form-control @error('accountname') is-invalid @enderror" value="{{ old('accountname') }}" required autocomplete="accountname">
                                                                    <br />
                                                                    @error('accountname')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                    
                                                                    <b><i>Account Number :</i></b>
                                                                    <br />
                                                                    <input type="number" style="height: 100px; font-size: 100%;" name="accountnumber"  id="accountnumber" class="form-control @error('accountnumber') is-invalid @enderror" value="{{ old('accountnumber') }}" required autocomplete="accountnumber">
                                                                    <br />
                                                                    @error('accountnumber')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                    
                                                                    
                                                                    <b><i>Bank Name :</i></b>
                                                                    <br />
                                                                    <input type="text" style="height: 100px; font-size: 100%;" name="bankname"  id="bankname" class="form-control @error('bankname') is-invalid @enderror" value="{{ old('bankname') }}" required autocomplete="bankname">
                                                                    <br />
                                                                    @error('bankname')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                        </div>
                                                    
                            
                                                <br />
                                        <!--NEXT BUTTON-->
                                        <div class="container">
                                                    <b><input class="w3-text-white w3-blue submit w3-center w3-border-large w3-round-xxlarge w3-jumbo" type="submit" value="WITHDRAW"></b>
                                                    <br />

                                        </div>
                                                    
                                            </div>

                                            </form>
                                    </div>
                            </div>
                    









                        <br />
                        <!--SIGNOUT-->
                        <a href="/logout">Logout</a>




                    
                    <br />
                    </div>


                    <script>
                        

                            function withdrawal(){
                                <?php echo "var formstatus="."'".$showwithdrawalform."'".";"; ?>
                                if (formstatus=="true") {
                                    <?php echo "var invites="."'".$invites."'".";"; ?>
                                    if (invites >=1) {
                                        var withdrawalform=document.getElementById("withdrawalform");
                                        if(withdrawalform.style.display=="none"){
                                            withdrawalform.style.display="block";
                                        }else{
                                            withdrawalform.style.display="none";
                                        }
                                    }else{
                                        alert("sorry you must refer other mtn users to benefit from this program before you will be able to withdraw");
                                    }
                                }else{
                                    <?php echo "var report="."'you are not eligible for withdrawal until ".$nextdate."'".";"; ?>
                                    alert(report);
                                }
                            }

                    </script>


@endsection
