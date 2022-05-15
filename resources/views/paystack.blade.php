@extends('layouts.app')
    @section('content')

@php
    use App\Models\User;
@endphp
                    
                    <!--SLIDER-->
                    <div class="slider-container">
                   

  <img class="mySlides" src="img/pix1.jpg" style="width:100%">
  <img class="mySlides" src="img/pix2.jpg" style="width:100%">
  <img class="mySlides" src="img/pix3.jpg" style="width:100%">

                                
                                
                    </div>
                  



        
        <!--MAIN-->
                    <br />

        <div>
            
        <!--REGISTER FORM-->
        <div class="border-center">
        <div id="paystackform" class="register-container w3-center w3-xxxlarge w3-white w3-border-xlarge">
        <br />

             <form id="paymentForm" method="POST" action="javascript:void(0);" enctype="multipart/Form-data">
                  {{method_Field('POST')}}
                  @csrf

                            <div class="form-group">
                              <label for="email">Email Address</label>
                              <input type="email" id="email-address" value="<?php echo auth()->user()->email ?>" required />
                            </div>
                            <div class="form-group">
                              <label for="amount">Amount</label>
                              <input type="tel" id="amount" name="amountpaid" required />
                            </div>
                            <div class="form-group">
                              <label for="first-name">First Name</label>
                              <input type="text" id="first-name" />
                            </div>
                            <div class="form-group">
                              <label for="last-name">Last Name</label>
                              <input type="text" id="last-name" />
                            </div>
                            <div class="form-group">
                              <label for="refereer-number">Refereer No.</label>
                              <input type="number" id="refereer-number" />
                            </div>
                            <br />
                            <div class="form-submit">
                              <button type="submit" class="w3-text-white w3-blue submit w3-center w3-border-large w3-round-xxlarge w3-jumbo" onclick="payWithPaystack(event)" style="width: 40%;"> Pay </button>
                            </div>



                  <br />
            </form>
                        <!--SIGNOUT-->
                        <a href="/logout">Logout</a>

            <script src="https://js.paystack.co/v1/inline.js"></script>

        </div>
        </div>



        </div>





     <script>
                   
            $(document).ready(function(){
                var amounttpaid = $("input#amount").val();
                var refeerer_no = $("input#refereer-number").val();
            });
     </script>

    @endsection