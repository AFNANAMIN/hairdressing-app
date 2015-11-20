@extends('layouts.master')

@section('css')

<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>

@endsection

@section('content')
    <div class="about-header"> <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p class="subheading">About Us<p>
                    </div>
                </div>
            </div>
        </div> <!-- / container -->
    </div> <!-- / jumbotron -->

    <div class="container">

    	<div class="row">
    		<div class="col-sm-12 text-center">
    			<p class="subheading">A team to be proud of</p>
    		</div>
    	</div>
    	<div class="row padded-div">
    		<div class="col-sm-6">
    			<p>Vestibulum et est facilisis, mollis dui at, sagittis purus. Quisque condimentum ullamcorper odio in rhoncus. Etiam rhoncus lacus metus, vitae suscipit lorem porttitor a.</p>
    		</div>
    		<div class="col-sm-6">
    			<p>Quisque luctus varius sem sed tempus. Sed vitae vulputate turpis, nec vestibulum nisl. Integer vehicula magna felis, sed tincidunt mi lacinia quis.</p>
    		</div>
    	</div>

    	<div class="row">
            <div class="col-sm-12 text-center">
    		    <p class="subheading">Our range of services</p>
                <p class="spacer">Phasellus at tellus luctus, posuere magna et, fringilla tellus. Praesent tincidunt, massa id finibus sagittis.</p>
            </div>
        </div>

    	<div class="row padded-div list text-center">
    		<div class="col-sm-6">
    			<ul>
    				<li>Women's Cuts</li>
    				<li>Men's Cuts</li>
    				<li>Children's Cuts</li>
    				<li>Colour Full Head</li>
    				<li>Colour Foils</li>
    			</ul>
    		</div>
    		<div class="col-sm-6">
    			<ul>
    				<li>Blow waving</li>
    				<li>Highlights</li>
                    <li>Perm</li>
                    <li>Treatments</li>
    				<li>Updos</li>
    			</ul>
    		</div>
    	</div>

    </div> <!-- /container -->

    <div class="slider anchor-spacer" id="slider">
        <div><img src="about-slider/viktor-jakovlev.jpg" alt="Creative Commons photo by Viktor Jakovlev. Found on Unsplash.com"></div>
        <div><img src="about-slider/jakub-sejkora.jpg" alt="Creative Commons photo by Jakub Sejkora. Found on Unsplash.com"></div>
        <div><img src="about-slider/sebastian-unrau.jpg" alt="Creative Commons photo by Sebastian Unrau. Found on Unsplash.com"></div>
        <div><img src="about-slider/clem-onojeghuo.jpg" alt="Creative Commons photo by Clem Onojeghuo. Found on Unsplash.com"></div>
        <div><img src="about-slider/sudarshan-bhat.jpg" alt="Creative Commons photo by Sudarshan Bhat. Found on Unsplash.com"></div>
        <div><img src="about-slider/perdo-gandra.jpg" alt="Creative Commons photo by Perdo Gandra. Found on Unsplash.com"></div>
        <div><img src="about-slider/pierre-bouillot.jpg" alt="Creative Commons photo by Pierre Bouillot. Found on Unsplash.com"></div>
    </div>
@endsection

@section('scripts')
<script type="text/javascript" src="slick/slick.min.js"></script>
<script type="text/javascript" src="slick/initialise.js"></script>
@endsection
