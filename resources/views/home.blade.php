@extends('layouts.master')

@section('css')

<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>

@endsection

@section('content')
    <div class="home-header"> <!-- Main jumbotron for a primary marketing message or call to action -->
    	<div class="jumbotron">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-md-5">
				        <p class="subheading">Welcome to our Hairdressing Salon!<p>
				        <p> Nam ipsum tellus, iaculis vitae ultricies quis, vehicula sed urna. Integer efficitur mi nibh, in fermentum quam bibendum porttitor.</p>
				        <p><a class="btn btn-success btn-lg col-sm-6" href="{{ route('contact') }}#booking" role="button">Book Now</a></p>
				    </div>
			    </div>
      		</div>
      	</div> <!-- / container -->
    </div> <!-- / jumbotron -->

    <p class="text-center subheading">A bit about our salon</p>

    <div class="accent-div">
	    <div class="container">
	    	<div class="row">
		    	<div class="col-sm-6">
		    		<p><strong>Donec tempor dui est, non ullamcorper erat finibus et.</strong></p>
		    		<p>Suspendisse et velit sed nisl commodo suscipit. Proin iaculis suscipit libero sed egestas. Fusce luctus diam sed quam sagittis, vel molestie lectus suscipit. Integer ut ultrices ante, quis sodales lectus. Praesent vel nibh efficitur, hendrerit orci nec, dictum libero. Nam ipsum tellus, iaculis vitae ultricies quis, vehicula sed urna.</p>
				</div>

				<div class="col-sm-6">
					<p>Nullam ac nibh dictum, blandit nunc in, commodo nunc. Etiam pulvinar congue tellus id iaculis. Phasellus ac sem in nulla molestie tempus eget id justo. Sed lorem nibh, euismod nec nisi non, euismod iaculis elit. Donec maximus dictum nisl sed lobortis.</p>
					<p class="home-last">Proin iaculis suscipit libero sed egestas. Fusce luctus diam sed quam sagittis, vel molestie lectus suscipit. Aliquam erat volutpat.</p>
					<p><a class="btn btn-success btn-lg col-sm-6 pull-right" href="{{ route('stylists') }}" role="button">Meet the Team</a></p>
				</div>
			</div>
		</div> <!-- / container -->
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<p class="text-center subheading">We offer a wide variety of services for our clients!</p>
			</div>
		</div>
		<div class="row padded-div">
			<div class="col-sm-4 text-center">
				<p><img src="icons/haircuts.png" alt="Haircuts Icon"></p>
				<p class="service-name">Haircuts</p>
				<p>Nam ipsum tellus, iaculis vitae ultricies quis, vehicula sed urna. Integer efficitur mi nibh, in fermentum quam bibendum porttitor.</p>
			</div>
			<div class="col-sm-4 text-center">
				<p><img src="icons/colour.png" alt="Colour Icon"></p>
				<p class="service-name">Colour</p>
				<p>Donec congue pellentesque nibh, a convallis ante ullamcorper at. Quisque non luctus nisi. Etiam mattis eu odio quis commodo.</p>
			</div>
			<div class="col-sm-4 text-center">
				<p><img src="icons/updos.png" alt="Updos Icon"></p>
				<p class="service-name">Updos</p>
				<p>Ut cursus tortor a bibendum suscipit.  In dolor ex, mollis vel orci et, consectetur commodo nulla. Sed lobortis fermentum nulla.</p>
			</div>
		</div>

    </div> <!-- /container -->

    <div class="reviews no-select">
		<p class="text-center subheading">What our customers say</p>

	    <div class="slider no-select">
	        <div class="text-center item no-select">
	        	<p>Aliquam nec nulla quis ex mattis euismod. In convallis lacus ut justo lobortis, in finibus nisl tincidunt. Pellentesque pretium nulla vel nisl cursus, in malesuada purus eleifend. Curabitur aliquet commodo nulla sed lacinia. Fusce vestibulum, eros a congue malesuada, neque dui iaculis enim, et lobortis mauris eros nec lorem.</p>
				<p class="text-uppercase">Jane Doe</p>
	        </div>
	        <div class="text-center item no-select">
	        	<p>Vivamus lacinia dictum leo, interdum posuere nulla vulputate vel. Maecenas eget ultricies turpis. Integer non elit dignissim, mattis felis ut, feugiat tellus. Vivamus aliquam tortor suscipit, euismod eros eu, vestibulum diam. Vestibulum quis tempus quam. Fusce eros purus, aliquam eget elementum vel, scelerisque vel sapien. Praesent hendrerit nisi in cursus rhoncus. Etiam ultrices eleifend facilisis.</p>
				<p class="text-uppercase">Sarah Smith</p>
	        </div>
	        <div class="text-center item no-select">
	        	<p>Aliquam vulputate laoreet sodales. Praesent sit amet pharetra mi, non scelerisque risus. In hac habitasse platea dictumst. Praesent ornare lectus quis maximus ultricies. Donec vestibulum diam justo, non auctor purus finibus a. Maecenas fermentum scelerisque lacus. Aenean sed urna nunc. Nam quis sapien auctor, mollis arcu ut, accumsan lectus. Mauris porttitor dolor.</p>
				<p class="text-uppercase">Beth Roe</p>
	        </div>
	    </div>
	</div>
@endsection

@section('scripts')
<script type="text/javascript" src="slick/slick.min.js"></script>
<script type="text/javascript" src="slick/initialise.js"></script>
@endsection
