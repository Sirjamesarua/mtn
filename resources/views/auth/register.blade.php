@extends('layouts.app')
    @section('content')
                    
                    <!--SLIDER-->
                    <div class="slider-container">
                   

  <img class="mySlides" src="img/pix1.jpg" style="width:100%">
  <img class="mySlides" src="img/pix2.jpg" style="width:100%">
  <img class="mySlides" src="img/pix3.jpg" style="width:100%">

                                
                                
                    </div>
                    
        </div>



        
        <!--MAIN-->
                    <br />
     <div class="w3-container">
        <div class="main-container">
                
                    <!--TEXT-->
                    <div class="text-container w3-center">
                                <div class="text w3-jumbo">
                                            <i class="w3-text-red">MTN X2 PROMO </i>
                                            <i>Is A One Time Investment Students Promo That Doubles Any Amount Deposited From &#8358 10,000 To &#8358 100,000 Of Our Loyal Customer After 7days</i>
                                </div>
                    </div>
                    
                    
                    <!--PRICE-->
                    <br />
                    <br />
                    <div class="container price-container">
                    
                    <div class="price w3-round-jumbo w3-white w3-center w3-xxxlarge w3-border-large">
                                            <b>&#8358 10,000 ==> &#8358 20,000</b>
                                </div>
                                <br />
                                <div class="price w3-round-jumbo w3-white w3-center w3-xxxlarge w3-border-large">
                                            <b>&#8358 15,000 ==> &#8358 30,000</b>
                                </div>
                                <br />
                                <div class="price w3-round-jumbo w3-white w3-center w3-xxxlarge w3-border-large">
                                            <b>&#8358 20,000 ==> &#8358 40,000</b>
                                </div>
                                <br />
                                <div class="price w3-round-jumbo w3-white w3-center w3-xxxlarge w3-border-large">
                                            <b>&#8358 50,000 ==> &#8358 100,000</b>
                                </div>
                                <br />
                                <div class="price w3-round-jumbo w3-white w3-center w3-xxxlarge w3-border-large">
                                            <b>&#8358 100,000 ==> &#8358 200,000</b>
                                </div>
                                <br />
                                
                    </div>
                    <br />
                    <br />
                    
                    
                    
                    
                    
                    
                    
                    
            <!--REGISTER BUTTON-->
                    <div id="registerbtn" class="container w3-center w3-border-large w3-border-white w3-round-xxlarge w3-jumbo w3-blue">
                        <a href="javascript:void(0);" onclick="registerbtn()"><b class="w3-text-white">REGISTER</b></a>
                    </div>
                    <br />
                    
            <!--LOGIN BUTTON-->
                    <div id="loginbtn" class="container w3-center w3-border-large w3-border-white w3-round-xxlarge w3-jumbo w3-blue">
                        <a href="javascript:void(0);" onclick="loginbtn()"><b class="w3-text-white">LOGIN</b></a>
                    </div>
                    <br />
                    
                    
                    <!--REGISTER FORM-->
                    <div id="form" class="register-container w3-center w3-xxxlarge w3-white w3-border-xlarge">
                    <br />
                            <!--STEPS-->
                            <div class="w3-text-red">
                                <b><i id="steps">Step 1/3</i></b>
                            </div>
                    
                            <div class="form">
                                    <div>
                                            <form method="POST" class="w3-padding" onsubmit="phonecheck()" action="{{ route('register') }}">
                                                @csrf

                                                
                                            
                                            <div id="output"></div>
                                            <div class="" id="firststep">
                                                    <!--PHONE NUMBER-->
                                                    <br />
                                                    <b><i>Phone Number :</i></b>
                                                    <br />
                                                    <small><i id="numbererror" class="w3-text-red"></i></small>
                                                    <input type="number" style="height: 100px; font-size: 100%;" name="number" id="loginnumber" class="form-control @error('number') is-invalid @enderror" value="{{ old('number') }}" required autocomplete="number" />

                                                    @error('number')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <br />


                                                    <!--PHONE NUMBER-->
                                                    <br />
                                                    <b><i>Email Address :</i></b>
                                                    <br />
                                                    <small><i id="emailerror" class="w3-text-red"></i></small>
                                                    <input type="email" style="height: 100px; font-size: 100%;" name="email" id="loginemail" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email">

                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <br />
                                                    
                                                    
                                                    <!--PASSWORD-->
                                                    <br />
                                                    <b><i>Password :</i></b>
                                                    <br />
                                                    <small><i id="passworderror" class="w3-text-red"></i></small>
                                                    <input id="loginpassword" style="height: 100px; font-size: 100%;" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"  />

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <br />
                                                    
                                                    <!--COMFIRM PASSWORD-->
                                                    <br />
                                                    <b><i>Comfirm Password :</i></b>
                                                    <br />
                                                    <input id="loginpassword2" style="height: 100px; font-size: 100%;" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                    <br />
                                                    
                                                <br />
                                        <!--NEXT BUTTON-->
                                        <div class="container">
                                                    <b><input class="w3-text-white w3-blue submit w3-center w3-border-large w3-round-xxlarge w3-jumbo" type="submit" value="NEXT"></b>
                                                    <br />

                                                    <i>Already An Investor? <a href="javascript:void(0);" onclick="loginbtn()">Login</a></i>
                                        </div>
                                                    
                                            </div>

                                            </form>
                                    </div>
                            </div>
                    
                    
                    <br />
                    </div>







                    <!--LOGIN FORM-->
                    <div id="loginform" class="register-container w3-center w3-xxxlarge w3-white w3-border-xlarge">
                    <br />
                            <!--STEPS-->
                            <div class="w3-text-red">
                                <b><i>Step 1/4</i></b>
                            </div>
                    
                            <div class="form">
                                    <div>
                                            <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            
                                            <div id="output"></div>
                                            <br />
                                                    <!--PHONE NUMBER-->
                                                    <b class=""><i>{{ __('E-Mail Address') }}:</i></b>
                                                <br />
                                    
                                                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus style="width:60%" placeholder="Enter Your Email">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                              


                                                    <br />
                                                    <br />
                                                    <b class=""><i>{{ __('Password') }} :</i></b>
                                                    <br />
                                                    <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password" style="width:60%" placeholder="Enter Your Password">
                                                    
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror


                                                    
                                                    
                                                <br />
                                                <br />
                                        <!--NEXT BUTTON-->
                                        <div class="container">
                                                    <b><input class="w3-text-white w3-blue submit w3-center w3-border-large w3-round-xxlarge w3-jumbo" type="submit" value="LOGIN"></b>
                                        </div>
                                        <br />

                                        <i>Not An Investor? <a href="javascript:void(0);" onclick="registerbtn()">Register</a></i>


                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}" style="font-size:100%;">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif

                                                    
                                            </form>
                                    </div>
                            </div>
                    
                    
                    <br />
                    </div>







                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    <!--STEP2 FORM-->
                    <!--<div id="" class="register-container w3-center w3-xxxlarge w3-white w3-border-xlarge">
                    <br />
                            <!--STEPS-->
                            <!--<div class="w3-text-red">
                                <b><i>Step 2/4</i></b>
                            </div>
                    
                            <div class="form">
                                    <div>
                                            <form method="POST">
                                            
                                                    
                                                    <!--STEP 2-->
                                                    <!--<div id="step2" class="">
                                                    
                                                                    <b class="w3-text-grey">WITHDRAWAL DETAIL</b>
                                                                    <br />
                                                                    
                                                                    <b>WARNING :</b><i>Please Fill The Form With Correct Detail Of The Bank You Wish To Use For Withdrawal</i>
                                                                    <br />
                                                                    <b>NOTE :</b>
                                                                    <br />
                                                                    <i>Any Mistake Made Will Not Be Revoke Unless Due Processes Are Followed</i>
                                                                    
                                                                    <br />
                                                                    <br />
                                                                    
                                                                    <b><i>Account Name :</i></b>
                                                                    <br />
                                                                    <input type="text" name="aname" required>
                                                                    <br />
                                                                    
                                                                    <b><i>Account Number :</i></b>
                                                                    <br />
                                                                    <input type="number" name="anumber" required>
                                                                    <br />
                                                                    
                                                                    <b><i>Card Number :</i></b>
                                                                    <br />
                                                                    <input type="number" name="cnumber" required>
                                                                    <br />
                                                            
                                                                    <b><i>Cvv :</i></b>
                                                                    <br />
                                                                    <input type="number" name="cvv" required>
                                                                    <br />
                                                                    
                                                                    <b><i>Card Exp Date :</i></b>
                                                                    <br />
                                                                    <input type="number" name="exp" placeholder="mm/yyyy" required>
                                                                    <br />
                                                                    
                                                                    <b><i>Bank Name :</i></b>
                                                                    <br />
                                                                    <input type="text" name="bankname" required>
                                                        </div>
                                                    
                            
                                                <br />
                                        <!--NEXT BUTTON-->
                                        <!--<div class="container">
                                                    <b><input class="w3-text-white w3-blue submit w3-center w3-border-large w3-round-xxlarge w3-jumbo" type="submit" value="NEXT"></b>
                                        </div>
                                                    
                                            </form>
                                    </div>
                            </div>
                    
                    
                    <br />
                    </div>-->
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    

                    
        </div>
     </div>



    @endsection
