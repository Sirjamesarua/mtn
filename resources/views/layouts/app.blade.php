<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head> 
    <title>MTN X2 PROMO</title>
    <!--AJAX CDN-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>


  <script src="https://unpkg.com/react@16/umd/react.production.min.js"></script>
  <script src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js"></script>
  <script src="https://unpkg.com/babel-standalone@6.15.0/babel.min.js"></script>

      <link rel = "stylesheet" href = "https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/w3-css/4.1.0/w3.css" ></link>
    <link rel="stylesheet" href="{{asset('w3.css')}}" />
    <link rel="stylesheet" href="{{asset('bootstrap.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" ></link><meta charset="utf-8">
    
    <style>
                body{
                    background-color:#FFB700;
                    font-family:serif;
                }

                .border-center{
                    display:flex;
                    justify-content:center;
                }

                #invitelinkdiv{
                    display: none;
                }
                
                 
                /*MAIN HEADER*/
                .main-header{
                    /*height:150px;*/
                }

                #paystackform{
                    width:90%;
                }
                
                
                /*MENU NAV*/
                .sidenav{
                        height:100%;
                        z-index:1;
                        width:100%;
                        position:fixed;
                        overflow-x:hidden;
                        background-color:#FFB700;
                        display:none;
                }
                
                .menu-pix{
                    height:600px;
                }
                
                
                /*SLIDER*/
                .slider-container{
                        background-color:rgba(255,255,255,0.7);
                    
                }
                
                .slider{
                    height:100px;
                    background-color:rgba(0,0,0,0.7);
                }
                
                    .mySlides {
                            display:none;
                            height:800px;
                            background-color:rgba(0,0,0,0.7);
                            font-family:serif;
                    }
                    
                    /*REGISTER*/
                    /*REGISTER*/
                    #registerbtn, #loginbtn{
                        display:block;
                    }
                    
                    #registerbtn, #loginbtn a{
                        text-decoration:none;
                    }
                    
                    #form , #loginform{
                        display:none;
                    }
                    
                    .submit{
                        border-color:#2196F3;
                        width:100%;
                    }
                    
                    
                    .submit{
                        border-color:#2196F3;
                        width:100%;
                    }
                    
                    /*FOOTER*/
                    .main-footer{
                    }
                    
                    .footer-img{
                            height:100px;
                            width:100px;
                    }

                    #withdrawalform{
                        display: none;
                    }

                    
                
      </style>
</head>
<body>
<div>

        <!--HEADER-->
        <div class="header-container">
        
        
        
                    <!--NAV BAR-->
                    <div id="sidenav" class="sidenav">
                                <!--CLOSE BUTTON-->
                                <div class="w3-jumbo w3-container"><a class=" w3-text-black" id="closebtn" href="javascript:void(0);" onclick="closebtn()"><b>&times</b></a></div>
                                
                                <!--MENU PIX-->
                                <img class="menu-pix" src="img/menu.jpg" style="width:100%">

                                <!--MENU LIST-->
                                <div class="container menu-list-container w3-center w3-xxxlarge">
                                
                                        <br />
                                        <div class="menu-list"><a href="/"><b>HOME</b></a></div>
                                        <div class="w3-border"></div>
                                        <br />
                                        
                                        <div class="menu-list"><a href="#"><b>SUPPORT</b></a></div>
                                        <div class="w3-border"></div>
                                        <br />
                                        
                                        <div class="menu-list"><a href="#"><b>ABOUT US</b></a></div>
                                        <div class="w3-border"></div>
                                        <br />
                                        
                                        <div class="menu-list"><a href="#"><b>CONTACT US</b></a></div>
                                        <div class="w3-border"></div>
                                        <br />
                                        
                                </div>
                                
                                <div class="w3-text-blue w3-xxxlarge"><b>everywhere you go!</b></div>
                                
                    </div>
                    
                    
                    
        
                    
                    <!--MAIN HEADER-->
                    <div class="container main-header w3-xxxlarge w3-bar">
                        <div class="row" style="justify-content: space-between;">
            
                            <div class="">
                                    <b>Deposit</b> and
                            <br>
                                    get <b>Double</b>
                            </div>
                            
                            
                            <!--OPEN BUTTON-->
                            <!--<div class="w3-xxlarge"><a id="openbtn" href="javascript:void(0);" onclick="openbtn()"><b>OPEN</b></a></div>-->



                            <div class="" style="width:10%;"><i class="fa fa-bars fa-2x w3-text-blue" id="openbtn" href="javascript:void(0);" onclick="openbtn()"></i></div>





                                
                        </div>
                    </div>

                @yield('content')
            
            <!--FOOTER-->
            

<br />
<br />
<br />

        <!--FOOTER-->
        <!--MAIN FOOTER-->
        <div class="w3-container">
                <div class="main-footer w3-border-top-large w3-border-black w3-text-white">
                        <div class="w3-center w3-xxxlarge w3-text-grey">
                        
                                <div><a href="#" class="w3-text-grey"><b><i>SUPPORT</i></b></a></div>
                                <div class="w3-border"></div>
                                
                                <div><a href="#" class="w3-text-grey"><b><i>CAREERS</i></b></a></div>
                                <div class="w3-border"></div>
                                
                                <div><a href="#" class="w3-text-grey"><b><i>ABOUT US</i></b></a></div>
                                <div class="w3-border"></div>
                                
                                <div><a href="#" class="w3-text-grey"><b><i>CONTACT US</i></b></a></div>
                                <br />
                                
                        </div>
                </div>
        </div>
        
        
        
        <!--FOOTER PIX-->
        <div class="footer-container w3-bottom">
                    <br />
                    <div class="footer">
                            <img class="w3-right footer-img" src="img/mtnlogo.jpg" alt=""></img>
                    </div>
                    <br />
        </div>
        
        

</div>

<script>
    /*SLIDER*/
    var slideIndex = 0; 
    carousel();

    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none"; 
      }
      slideIndex++;
      if (slideIndex > x.length) {slideIndex = 1;} 
      x[slideIndex-1].style.display = "block"; 
      setTimeout(carousel, 5000); 
    }

    /*MENU CLOSEBTN*/
    function closebtn(){
        var x= document.getElementById("sidenav");
        x.style.display="none";
    }

    /*MENU OPENBTN*/
    function openbtn(){
        var x= document.getElementById("sidenav");
        x.style.display="block";
    }

    /*REGISTER BUTTON*/
    function registerbtn(){
        var xx= document.getElementById("loginform");
        var yy= document.getElementById("loginbtn");
        var x= document.getElementById("form");
        var y= document.getElementById("registerbtn");
        var loginbtn= document.getElementById("loginbtn");
        loginbtn.style.display="none";
        xx.style.display="none";
        yy.style.display="none";
        x.style.display="block";
        y.style.display="none";
    }

    /*LOGIN BUTTON*/
    function loginbtn(){
        var xx= document.getElementById("form");
        var yy= document.getElementById("registerbtn");
        var x= document.getElementById("loginform");
        var y= document.getElementById("loginbtn");
        var registerbtn= document.getElementById("registerbtn");
        registerbtn.style.display="none";
        xx.style.display="none";
        yy.style.display="none";
        x.style.display="block";
        y.style.display="none";
    }

    /*NEXTSTEP*/
    var loginnumber = $("input#loginnumber");
    var loginpassword = $("input#loginpassword");
    var loginpassword2 = $("input#loginpassword2");
    //var loginpasswordcomfirm = $("input#loginpasswordcomfirm");

            

    function nextstep(){
            document.getElementById("nextstepbtn").style.display="none";
            document.getElementById("secondstep").style.display="block";
    }

    /*PHONR NUMBER VALIDATION*/
    function phonecheck(){
        var form=document.form;
        var number=form.elements["number"].value;
        if( number=="08140480701"){
            document.getElementById("output").innerHTML("<b>Correct</b>");
            };
    }

    function copyrefeererlink(){
        var copytext = $("#invitelink").val();

        //navigator.clipboard.writeText(copytext);

        //alert(copytext);
    }

     

    function invitelink(){
        var invitelinkdiv=document.getElementById("invitelinkdiv");
        if(invitelinkdiv.style.display=="none"){
            invitelinkdiv.style.display="block";
        }else{
            invitelinkdiv.style.display="none";
        }
    }






</script>
                    

</body>
</html>