@extends('layouts.app')

@section('content')

@php
    foreach($userpaystacks as $userpaystack){
        $userpaystack=$userpaystack;
    };

    $homelink= url('/login');
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
                                


                        <div class="container">
                            <small><b><i class="w3-text-red">3days 44hours remaining for withdrawal</small><br>
                            <small><b><i class="w3-text-blue">Invite a friend and earn &#8358 3,000</small>
                            <br />
                            <br />
                            <div class="row">

                                <div id="" class="w3-center w3-border-large w3-border-white w3-round-xxlarge w3-blue" style="width:50%;">
                                    <a href="javascript:void(0);" onclick=""><b class="w3-text-white">Withdraw</b></a>
                                </div>
                                <br />
                                
                        <!--LOGIN BUTTON-->
                                <div id="" class="w3-center w3-border-large w3-border-white w3-round-xxlarge w3-blue" style="width:50%;">
                                    <a href="javascript:void(0);" onclick=""><b class="w3-text-white">Invite</b></a>
                                </div>

                            </div>
                        </div><br />

                        <input id="invitelink" type="text" value="{{$homelink}}/{{$usernumber}}/{{auth()->user()->id}}" class="" readonly>
                        <button onclick="copyrefeererlink()">copy</button>


                        <br />
                        <!--SIGNOUT-->
                        <a href="/logout">Logout</a>




                    
                    <br />
                    </div>


@endsection
