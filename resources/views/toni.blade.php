@extends('master')
@section('content')
	<div id="home" class="container-fluid">
	<nav class="navbar navbar-inverse navbar-fixed-top">
       <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand logo" style="padding-left:50px; padding-top:20px; color:#330000" href="#home">Star Your Future</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse" style="float:right">
            <ul class="nav navbar-nav" style="font-weight:bold">
              <li><a href="#home">Home</a></li>
              <div class="garis">&nbsp;</div>
              <li><a href="#section1" id="sectionn1">About</a></li>
              <div class="garis">&nbsp;</div>
              <li><a href="#section2">Contact</a></li>
              <div class="garis">&nbsp;</div>
              <li><a href="#section3">Experience</a></li>
          </div><!--/.nav-collapse -->
		  </div>
      </nav>
<div class="jumbotron text-center" style="margin-top:60px; background: url('me.jpg') 50% 0 repeat-y fixed;">
  <h1 class="wow bounceIn" data-wow-delay="0.9s">My Profile</h1>
  <p class="wow fadeInUp" data-wow-delay="1.6s">All about Toni you can<font style="color:#330000"> find in here</font></p>
</div>
  <div id="pricing" class="container">
  <div class="row slideanim wow flipInX">  
  <center style="padding-top:95px;"><a href="#section1"><button type="button" class="btn btn-default btn-lg" style="border-radius:10px; border:2px solid; border-color: #330000">Start</button></a></center>
  <br> 
		<br>
		<br>
		<br>
		<br>
	 </div>      
    </div> 
    </div>   
<div id="section1" class="container-fluid">
  <div class="row" style="margin-top:90px">
            <div class="box">
                <div class="col-lg-12 wow bounceInLeft" data-wow-delay="0.5s" data-wow-duration="1s">
                    <hr>
                    <h2 class="intro-text text-center">About
                        <strong>MySelf</strong>
                    </h2>
                    <hr>
                </div>
                <center><div class="col-md-6 wow fadeInUp" data-wow-delay="1s">
                    <img class="img-responsive img-border-left img-rounded"" src="<?php echo asset('toni.png')?>" align=right width=400 height=400>
                </div></center>
                <div class="col-md-4 wow fadeInUp" data-wow-delay="1s" style="margin-top:60px">
                    <h4 style=" font-family: Footlight MT Light; font-size: 2em; font-weight: 900; letter-spacing:2px">ABOUT ME:</h4>
                    <p style="font-family: Footlight MT Light; font-size: 2em; font-weight: 900; color:#660000; letter-spacing:5px">Toni Ming Gwan</p>
          					<p>Hello. My name is Toni, I am from Malang, Jawa Timur, Indonesia.  I am a student in universitas Ma Chung. 21 years old. i love Entrepreneur ways. sometimes I was often invited in many many seminar. i've talked in many seminar like in hotel solaris, amway company, many school, and the other.My motivation is <font style="font-family:Brush Script MT; font-size:30px; color:#330000">"The Result Will Never Betray The Process"</font></p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
		
</div>
<div id="section2" class="container-fluid">
<div class="row wow bounceInUp" style="margin-top:100px">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">My
                        <strong>CONTACT PERSON</strong>
                    </h2>
                    <hr>
                </div>
                <center><div class="col-md-6 wow fadeInUp" data-wow-delay="1s" style="margin-top:50px">
                    <img class="img-responsive img-border-left img-rounded"" src="<?php echo asset('Address-Book-icon.png')?>" align="right" width="200" height="200">
                </div></center>
                <div class="col-md-6 wow fadeInUp" data-wow-delay="1s" style="margin-top:50px">
                    
                    <h4 style=" font-family: Footlight MT Light; font-size: 25px; font-weight: 900; letter-spacing:2px">Line : ToniMingGwanteng</h4><br>
                    <h4 style=" font-family: Footlight MT Light; font-size: 25px; font-weight: 900; letter-spacing:2px">WhatsApp : 082245494812</h4><br>
                    <h4 style=" font-family: Footlight MT Light; font-size: 25px; font-weight: 900; letter-spacing:2px">BBM : 527A9624</h4>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
		
</div>
<div id="section3" class="container-fluid">
<div class="row " style="margin-top:60px">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">My
                        <strong>Experience</strong>
                    </h2>
                    <hr>
                </div>

            <div class="col-md-4 wow fadeInLeft" data-wow-delay="0.5s"style="margin-top:20px">
                <center><img class=" img-fluid" src="<?php echo asset('toni1.jpg')?>" width="300" height="300"></center>
                <center><font style="font-family:vijaya; font-size:30px; color:#330000">Motivation in SMPN 2 Malang</font></center>
                <center><p>i give motivation to some student in there before they take nation indonesian exam</p></center>
            </div>
            <!-- card -->
            <div class="col-md-4 wow fadeInLeft" data-wow-delay="0.9s"style="margin-top:20px">
                <center><img class="card-img-top img-fluid" src="<?php echo asset('toni2.jpg')?>" width="300" height="300"></center>
                <center><font style="font-family:vijaya; font-size:30px; color:#330000">Motivation Amway Company</font></center>
                <center><p>this moment when i share my some experience about "dream" to the people in amway company</p></center>
            </div>
            <!-- card -->
            <div class="col-md-4 wow fadeInLeft" data-wow-delay="1.3s" style="margin-top:20px">
                <center><img class="card-img-top img-fluid" src="<?php echo asset('toni3.jpg')?>" width="300" height="300"></center>
                <center><font style="font-family:vijaya; font-size:30px; color:#330000">Motivation In Hotel Solaris Malang</font></center>
                <center><p>i share my experience to the participant who attend seminar which name is "camp entrepreneur"</p></center>
            </div>
            </div>
</div>
</div>
<div id="section4" class="container-fluid col-md-12">
    <a class="navbar-brand logo" style="padding-left:100px; padding-top:60px; color:#330000">Star Your Future</a>
    <p style="color:white; float: right; text-align: right; padding-top:60px; padding-right:330px; font-family:Raleway; font-size: 15px;">Copyright By Toni.MG &nbsp
    <a href="https://www.facebook.com/toni.minggwan"><img src="http://icons.iconarchive.com/icons/yootheme/social-bookmark/24/social-facebook-box-blue-icon.png">&nbsp&nbsp</a><a href="https://www.instagram.com/toniming/"><img src="http://icons.iconarchive.com/icons/blackvariant/button-ui-requests-14/16/Instagram-icon.png"></a></p>
</div>

</div>
		<!--/.container-fluid -->
@stop
