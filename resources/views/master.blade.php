<!doctype html>
<html>
	<head>

    {!! Html::script(elixir('js/app.js')) !!}
    {!! Html::style(elixir('css/app.css')) !!}
		<style>
	body {
      position: relative;
  }
  #home {height:700px;}
  #section1 {height:700px;color: black; background-color: #fff7e6;}
  #section2 {height:700px;color: black; background-color: #fff2cc;}
  #section3 {height:700px;color: black; background-color: #fff2e6;}
  #section4 {height:130px;color: black; background-color: black;}
  </style>


	</head>
	
<body data-spy="scroll" data-target=".navbar" data-offset="50">
 <!-- Static navbar -->
 @yield('content')
 <script>
$(function(){
    //fungsi dibawah hanya berjalan untuk semua tag <a> yang diawali (^) dengan hash (#)
    $('a[href^="#"]').on('click', function(e){
        $target = $(this.hash);
        $jarak = 0;
        $('html, body').stop().animate(
            {
                'scrollTop' : $target.offset().top - $jarak
            },
            1500, //durasi dalam milisekon
            'swing', //efek transisi (opsi : swing / linear)
            function(){
                window.location.hash = target;
            }
        );
    });
});
</script>
<script>
$(document).ready(function(){
    $("#sectionn1").click(function(){
        $("#gj").fadeIn(3000);
    });
});

</script>
  <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };
  </script>
  <script type="text/javascript">
  fullpage.initialize('#fullpage', {
    anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
    menu: '#menu',
    css3:true
  });

</script>
 </body>
</html>

<!-- <script src="<?php echo asset('resources/assets/bootstrap/js/jquery.min.js') ?>"></script>//

    <link rel="stylesheet" type="text/css" href="<?php echo asset('resources/assets/bootstrap/css/bootstrap.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo asset('resources/assets/bootstrap/css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo asset('resources/assets/bootstrap/css/animate.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo asset('resources/assets/bootstrap/css/site.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo asset('resources/assets/bootstrap/css/javascript.fullPage.css')?>" />
    <script src="<?php echo asset('resources/assets/bootstrap/js/wow.js') ?>"></script>
    <script src="<?php echo asset('resources/assets/bootstrap/js/bootstrap.min.js') ?>"></script>

     -->