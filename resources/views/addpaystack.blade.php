@extends('layouts.app')
    @section('content')

@php
    use App\Models\User;
@endphp
                    
                 

        <!--REGISTER FORM-->
        <div class="border-center">
        <div id="paystackform" class="register-container w3-center w3-xxxlarge w3-white w3-border-xlarge">
        <br />

             <form id="paymentForm" method="POST" action="/paystack/addpaystack" enctype="multipart/Form-data">
                  {{method_Field('POST')}}
                  @csrf

                            <div class="form-group">
                              <label for="email">Email Address</label>
                              <input type="email" id="email-address" value="<?php echo auth()->user()->email ?>" required />
                            </div>
                            <div class="form-group">
                              <label for="amount">Amount</label>
                              <!--<input type="tel" id="amount" name="amountpaid" required />-->
                              <select id="amount" name="amountpaid" style="width: 60%">
                                <option value=100000>&#8358 100,000</option>
                                <option value=50000>&#8358 50,000</option>
                                <option value=30000>&#8358 30,000</option>
                                <option value=20000>&#8358 20,000</option>
                                <option value=15000>&#8358 15,000</option>
                                <option value=10000>&#8358 10,000</option>
                              </select>
                            </div>


                            <div class="form-group">
                              <input type="hidden" id="refereer-number" name="refereer-no" value="1" />
                            </div>


                            <br />
                            <div class="form-submit">
                              <button type="submit" class="w3-text-white w3-blue submit w3-center w3-border-large w3-round-xxlarge w3-jumbo" style="width: 40%;"> Pay </button>
                            </div>



                  <br />
            </form>
                        <!--SIGNOUT-->
                        <a href="/logout">Logout</a>


        </div>
        </div>


        @endsection