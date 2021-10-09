<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Responsive Landing Page Template With Flexbox</title>

	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('land_panel/assets/css/styles.css')}}">

</head>

<body>

	<header>
		<h2><a href="#">Rental Scooter</a></h2>
		<nav>
            
            @if (Route::has('login'))
                    @auth
                        <li><a href="{{ url('/home') }}">Home</a></li>
                    @else
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @endauth
                </div>
            @endif
		</nav>
	</header>


	<section class="hero">
		<div class="background-image" style="background-image: url({{ asset('land_panel/assets/img/hero.jpg')}});"></div>
		<h1>Rental Nice Scooters</h1>
		<h3>Please visit site carefully.</h3>
		<a href="{{ route('register') }}" class="btn">Join Here</a>
	</section>


	<section class="our-work">
		<h3 class="title">Some of My Scooters</h3>
		<p>I have nice scooters which are running well. </p>
		<hr>

		<ul class="grid">
			<li class="small" style="background-image: url({{ asset('land_panel/assets/img/coast.jpg')}})"></li>
			<li class="large" style="background-image: url({{ asset('land_panel/assets/img/island.jpg')}})"></li>
			<li class="large" style="background-image: url({{ asset('land_panel/assets/img/balloon.jpg')}})"></li>
			<li class="small" style="background-image: url({{ asset('land_panel/assets/img/mountain.jpg')}})"></li>
		</div>
	</section>
	

	<section class="features">
		<h3 class="title">Features and services</h3>
		<p>We Rent Scooters</p>
		<hr>

		<ul class="grid">
			<li>
				<i class="fa fa-camera-retro"></i>
				<h4>ID Verify</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id felis et ipsum bibendum ultrices vitae pulvinar velit.</p>
			</li>
			<li>
				<i class="fa fa-cubes"></i>
				<h4>Sign Term</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id felis et ipsum bibendum ultrices vitae pulvinar velit.</p>
			</li>
			<li>
				<i class="fa fa-newspaper-o"></i>
				<h4>Add Money</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id felis et ipsum bibendum ultrices vitae pulvinar velit.</p>
			</li>
		</div>
	</section>


	<section class="reviews">
		<h3 class="title">What others say:</h3>

		<p class="quote">Mauris sit amet mauris a arcu eleifend ultricies eget ut dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
		<p class="author">— Patrick Farrell</p>

		<p class="quote">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id felis et ipsum bibendum ultrices. Morbi vitae pulvinar velit. Sed aliquam dictum sapien, id sagittis augue malesuada eu.</p>
		<p class="author">— George Smith</p>

		<p class="quote">Donec commodo dolor augue, vitae faucibus tortor tincidunt in. Aliquam vitae leo quis mi pulvinar ornare. Integer eu iaculis metus.</p>
		<p class="author">— Kevin Blake</p>

		
	</section>


	<section class="contact">
		<h3 class="title">Join our newsletter</h3>	
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id felis et ipsum bibendum ultrices. Morbi vitae pulvinar velit. Sed aliquam dictum sapien, id sagittis augue malesuada eu.</p>
		<hr>

		<form>
			<input type="email" placeholder="Email">
			<a href="#" class="btn">Subscribe now</a>
		</form>
	</section>

	<footer>
		<ul>
			<li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
			<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
			<li><a href="#"><i class="fa fa-snapchat-square"></i></a></li>
			<li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
			<li><a href="#"><i class="fa fa-github-square""></i></a></li>
		</ul>
		<p>Made by <a href="http://tutorialzine.com/" target="_blank">tutorialzine</a>. images courtesy to <a href="http://unsplash.com/" target="_blank">unsplash</a>.</p>
		<p>No attribution required. you can remove this footer.</p>
	</footer>

</body>

</html>
