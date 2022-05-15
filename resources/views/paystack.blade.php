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
    var token='{{csrf_token()}}';
              


            //paystack
            const paymentForm = document.getElementById('paymentForm');
            paymentForm.addEventListener("submit", payWithPaystack, false);
            function payWithPaystack(e) {
              e.preventDefault();
                var amountpaid = $("input#amount").val();
                var refeerer_no = $("input#refereer-number").val();
                alert(amountpaid);
              let handler = PaystackPop.setup({
                key: 'pk_test_6fa4bde5ef3fed310ae776d4ea59b9e3e8b203a4', // Replace with your public key
                email: document.getElementById("email-address").value,
                amount: document.getElementById("amount").value * 100,
                ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                // label: "Optional string that replaces customer email"
                onClose: function(){
                  alert('Window closed.');
                },


                    callback: function(response){
                      $.ajax({
                        url:  "/verify-payment/"+response.reference,
                        type: 'GET',
                        success: function (response) {
                                console.log("Correctsuces");
                            if(response.status = true){
                                console.log("Correct1");
                                alert(amountpaid);
                                //window.location.replace("/paystack/save");

                                    $.ajaxSetup({
                                        headers:{
                                            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content'),
                                        }
                                    });

                                      $.ajax({
                                        url:  "/paystack/save",
                                        type: 'POST',
                                        data:{
                                            '_token': token,
                                            amountpaid:amountpaid,
                                            refeerer_no:refeerer_no,
                                        },
                                        success: function (response) {
                                        console.log(amountpaid);
                                        console.log("Correctsuces2");
                                                if(response.status==200){
                                                    window.location.replace("/home");
                                                    console.log("Correct2");
                                                    console.log(response.amount);
                                                }
                                        }
                                      });
                                console.log("endCorrectsuces");

                            } else{
                                alert("payment not successful");
                            }
                          

                        }
                      });

                    }






              });
              handler.openIframe();
            }


    </script>



    @endsection