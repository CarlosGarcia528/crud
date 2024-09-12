<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>tiendasena10</title>
      
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
     <link rel="stylesheet" href="./css/style.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body id="home">
    <header id="header">
  <nav id="mainNavbar" class="navbar navbar-expand-lg bg-nav fixed-top">
    <a class="navbar-brand" href="index.php">
      <img class="logo" src="./img/logo2.png" alt="logo">
    </a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#mainNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="loginView.php">Inciar Sesión</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ingreso.php">Registrarse</a>
        </li>
        
      </ul>
      
    </div>
  </nav> <!-- /.navbar -->
 
  <div class="top-carousel"> 
 
  <div id="work" class="carousel slide" data-ride="carousel">
   	<div class="banner-content text-left">
   	<h1>DESIGN WEBSITE<span> WHICH<br> MAKES</span> YOU PROUD</h1> 
      <p class="col-md-5 adjust">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat veritatis iste, nulla architecto quam saepe? Totam quisquam nam officia dignissimos nesciunt quis molestias, sit hic nulla suscipit unde odit voluptates.
      </p>
       <br>   
        <p class="pt-4"><a class="btn btn-success btn-lg" href="#">Learn Today!</a></p>
      </div> 
    <ol class="carousel-indicators">
      <li data-target="#work" data-slide-to="0" class="active"></li>
      <li data-target="#work" data-slide-to="1"></li>
      <li data-target="#work" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./img/sena1.png" class="d-block w-100" alt="">  
           
      </div>
      <div class="carousel-item">
        <img src="./img/img5.jpg" class="d-block w-100" alt="">
      </div>
      <div class="carousel-item">
        <img src="./img/img3.jpg" class="d-block w-100" alt="">
      </div>
    </div>
  </div>
  </div>
  <div class="skew-header"></div>
</header>

<br>
 
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script>
$(document).ready(function() {
	$("#carouselBanner").swiperight(function() {
	  $(this).carousel('prev');
	});
	$("#carouselBanner").swipeleft(function() {
	  $(this).carousel('next');
	});
});
</script>

<script>
$(document).ready(function(){
	$('a.page-scroll').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		  var target = $(this.hash);
		  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		  if (target.length) {
			$('html,body').animate({
			  scrollTop: target.offset().top - 100
			}, 900);
			return false;
		  }
		}
	});

	// Show Menu on Book
	$(window).bind('scroll', function() {
		var navHeight = $(window).height() - 500;
		if ($(window).scrollTop() > navHeight) {
			$('.navbar').addClass('on');
		} else {
			$('.navbar').removeClass('on');
		}
	});

	$('body').scrollspy({ 
		target: '.navbar',
		offset: 100
	});

	// Hide nav on click
  	$(".navbar-nav li a").click(function (event) {
		// check if window is small enough so dropdown is created
		var toggle = $(".navbar-toggler").is(":visible");
		if (toggle) {
		  $(".navbar-collapse").collapse('hide');
		}
  	});
});
</script>

<script>
$(document).ready(function() {
  $('#y-play-video').on('click', function(ev) {
    $(".y-video-thumbnail").hide();
    $(".y-video-embed").show();
    $("#y-video")[0].src += "&autoplay=1";
    ev.preventDefault();
  });
});
</script>

</body>

</html>


