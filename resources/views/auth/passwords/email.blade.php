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
                                            <i>Is A One Time Investment Students Promo That Doubles Any Amount Deposited From &#8358 5000 To &#8358 50,000 Of Our Loyal Customer After 21days</i>
                                </div>
                    </div>
                    
                    
                    <!--PRICE-->
                    <br />
                    <br />
                    <div class="container price-container">
                    
                                <div class="price w3-round-jumbo w3-white w3-center w3-xxxlarge w3-border-large">
                                            <b>&#8358 5000 ==> &#8358 10,000</b>
                                </div>
                                <br />
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
                                            <b>&#8358 30,000 ==> &#8358 60,000</b>
                                </div>
                                <br />
                                
                    </div>
                    <br />
                    <br />
                    


<div class="register-container w3-center w3-xxxlarge w3-white w3-border-xlarge">
    <div class="">
        <div class="">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>
                <br />

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="">
                            <i for="email" class="">{{ __('Email Address') }}</i>
                            <br />

                                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <br />

                        <div class="">
                            <div class="">
                                <button type="submit" class="btn btn-primary" style="font-size:80%;">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div><br />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
