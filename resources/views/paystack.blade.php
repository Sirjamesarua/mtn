@extends('layouts.app')
    @section('content')
                    
                    <!--SLIDER-->
                    <div class="slider-container">
                   

  <img class="mySlides" src="img/pix1.jpg" style="width:100%">
  <img class="mySlides" src="img/pix2.jpg" style="width:100%">
  <img class="mySlides" src="img/pix3.jpg" style="width:100%">

                                
                                
                    </div>
                  



        
        <!--MAIN-->
                    <br />

        <div>
            

             <form id="paymentForm">
  <div class="form-group">
    <label for="email">Email Address</label>
    <input type="email" id="email-address" required />
  </div>
  <div class="form-group">
    <label for="amount">Amount</label>
    <input type="tel" id="amount" required />
  </div>
  <div class="form-group">
    <label for="first-name">First Name</label>
    <input type="text" id="first-name" />
  </div>
  <div class="form-group">
    <label for="last-name">Last Name</label>
    <input type="text" id="last-name" />
  </div>
  <div class="form-submit">
    <button type="submit" onclick="payWithPaystack()"> Pay </button>
  </div>
</form>
<script src="https://js.paystack.co/v1/inline.js"></script>
            
        </div>





     

    @endsection