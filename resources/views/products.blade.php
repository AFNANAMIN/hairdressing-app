@extends('layouts.master')

@section('content')
    <div class="products-header"> <!-- Main jumbotron for a primary marketing message or call to action -->
    	<div class="jumbotron">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
				        <p class="subheading">Our Product Range<p>
				    </div>
			    </div>
      		</div>
      	</div> <!-- / container -->
    </div> <!-- / jumbotron -->


	<p class="text-center subheading">Two leading brands</p>

    <div class="container">

    	<div class="row padded-div">
	    	<div class="col-sm-6">
	    		<p>Curabitur risus enim, congue id hendrerit porttitor, molestie sit amet nibh. Duis at erat in erat faucibus ullamcorper. Vivamus ac tristique turpis. Donec vulputate lobortis mauris, vitae.</p>
			</div>

			<div class="col-sm-6">
	    		<p>Congue turpis condimentum sit amet. Proin faucibus ut libero a vehicula. Morbi id convallis lorem. Mauris ac est erat. Duis sed enim id ipsum blandit iaculis a et ex. Proin pharetra lacus in nulla.</p>
			</div>
		</div>

	</div> <!-- /container -->

	<div class="accent-div" id="featured">
		 <div class="container">

			<div class="row">
	    		<div class="col-sm-12">
	    			<p class="text-center subheading">Featured Brand One Products</p>
	    		</div>
	    	</div>
			<div class="row text-center padded-div">
			    @foreach($one as $product)
			    	<div class="col-sm-4">
						@if(Auth::check())
							<p>
								<a href="{{ route('products.edit', $product->slug) }}" class="btn btn-default">
									<span class="glyphicon glyphicon-pencil"></span> Edit product
								</a>
							</p>
						@endif
			    		<p><img src="icons/one.png" alt="Brand One Icon"></p>
						<p class="text-uppercase">{{ $product->name }}</p>
						<p>{!! nl2br($product->description) !!}</p>
					</div>
				@endforeach
			</div>

			<div class="row">
	    		<div class="col-sm-12">
	    			<p class="text-center subheading">Featured Brand Two Products</p>
	    		</div>
	    	</div>
			<div class="row text-center padded-div">
			    @foreach($two as $product)
			    	<div class="col-sm-4">
						@if(Auth::check())
							<p>
								<a href="{{ route('products.edit', $product->slug) }}" class="btn btn-default">
									<span class="glyphicon glyphicon-pencil"></span> Edit product
								</a>
							</p>
						@endif
			    		<p><img src="icons/two.png" alt="Brnad Two Icon"></p>
						<p class="text-uppercase">{{ $product->name }}</p>
						<p>{!! nl2br($product->description) !!}</p>
					</div>
				@endforeach
			</div>

		</div> <!-- /accent-div -->
	</div> <!-- /container -->
@endsection
