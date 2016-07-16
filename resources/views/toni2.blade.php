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
            <a class="navbar-brand" href="#home">Toni's Profil</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="#home">Home</a></li>
              <li><a href="#section1" id="sectionn1">About</a></li>
              <li><a href="#section2">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#section3">Action</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
		  </div>
      </nav>
	  </div>
<div class="jumbotron text-center">
  <h1>My Profile</h1>
  <p>All about Toni you can find in here</p>
</div>
  <div id="pricing" class="container">
  <div class="row slideanim">  
  <center><img src="<?php echo asset('resources/views/jadi2.jpg')?>" class="img-circle" width="304" height="236"> 
  <br> 
  <h1><b>Toni Ming Gwan</b></h1></center>  
		<br>
		<br>
		<br>
		<br>
	 </div>      
    </div>    
  </div>
</div>
<div id="section1" class="container-fluid">
  <div class="row" id="gj"  style="display: none">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">About
                        <strong>MySelf</strong>
                    </h2>
                    <hr>
                </div>
                <center><div class="col-md-6">
                    <img class="img-responsive img-border-left img-rounded"" src="<?php echo asset('resources/views/jadi2.jpg')?>" align=right width=200 height=200>
                </div></center>
                <div class="col-md-4">
                    <p>Name 		  				: Toni Ming Gwan</p>
                    <p>Call Name 					: Toni</p>
                    <p>Born			  				: Malang, 4 June 1995</p>
					<p>Name of University		    : Universitas Ma Chung</p>
					<p>Semester		  				: 6</p>
					<p>direct		  				: informatics engineering</p>
					<p>Specialist	  				: Networking</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
		
</div>
<div id="section2" class="container-fluid">
<div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">My
                        <strong>CONTACT PERSON</strong>
                    </h2>
                    <hr>
                </div>
                <center><div class="col-md-6">
                    <img class="img-responsive img-border-left img-rounded"" src="<?php echo asset('resources/views/Address-Book-icon.png')?>" align="right" width="200" height="200">
                </div></center>
                <div class="col-md-4">
                    <p>Phone Number 	: 082245494812</p>
                    <p>Line 			: ToniMingGwanteng</p>
                    <p>Whatsapp		 	: 082245494812</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
</div>
<div id="section3" class="container-fluid">
  <div class="container">
        <div class="row">
            <div class="col-lg-12 text-xs-center">
                <h2 class="m-t-0 text-primary">Flexbox</h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-lg-4 col-md-4 text-xs-center">
                <div class="feature">
                    <i class="icon-lg ion-ios-grid-view-outline wow fadeIn" data-wow-delay=".1s"></i>
                    <h6 class="text-uppercase">Easier</h6>
                    <p class="text-muted m-b-0">Flexbox provides <a href="http://v4-alpha.getbootstrap.com/getting-started/flexbox">simpler, more flexible layout</a> options like vertical centering.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 text-xs-center">
                <div class="feature">
                    <i class="icon-lg ion-social-sass wow fadeInUp"></i>
                    <h6 class="text-uppercase">Sass-y</h6>
                    <p class="text-muted m-b-0">Simply set the <code>$enable-flex</code> variable to <a target="ext" href="http://codeply.com/go/YFFFWHVoRB">enable flexbox</a> in Bootstrap 4.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 text-xs-center">
                <div class="feature">
                    <i class="icon-lg ion-social-css3-outline wow fadeIn" data-wow-delay=".1s"></i>
                    <h6 class="text-uppercase">It's Modern</h6>
                    <p class="text-muted m-b-0">Introduced in CSS3, flexbox won't work in older browsers like <a href="http://caniuse.com/#feat=flexbox">IE9</a>.</p>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
		<!--/.container-fluid -->
@stop
