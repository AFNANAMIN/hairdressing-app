@extends('layouts.master')

@section('content')
    <div class="sitemap-header"> <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p class="subheading">Sitemap<p>
                    </div>
                </div>
            </div>
        </div> <!-- / container -->
    </div> <!-- / jumbotron -->

    <div class="container">
        <p class="text-center subheading">Get around our site</p>

    	<ul class="padded-div list text-center">
			<li class="spacer"><a href="{{ route('home') }}">Home</a></li>
			<li><a href="{{ route('about') }}">About Us</a></li>
            <li class="spacer"><a href="{{ route('about') }}#slider">Salon Photos</a></li>
			<li><a href="{{ route('stylists') }}">Stylist Bios</a></li>
			<li class="spacer"><a href="{{ route('products') }}">Product Range</a></li>
			<li><a href="{{ route('contact') }}">Contact Us</a></li>
            <li><a href="{{ route('contact') }}">Hours</a></li>
            <li><a href="{{ route('contact') }}#booking">Bookings</a></li>
		</ul>

    </div> <!-- /container -->
@endsection
