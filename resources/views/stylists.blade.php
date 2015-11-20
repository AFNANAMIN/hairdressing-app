@extends('layouts.master')

@section('content')
     <div class="stylists-header"> <!-- Main jumbotron for a primary marketing message or call to action -->
    	<div class="jumbotron">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
				        <p class="subheading">Meet the Team<p>
				    </div>
			    </div>
      		</div>
      	</div> <!-- / container -->
    </div> <!-- / jumbotron -->

    <div class="container">
    	<div class="row">
    		<div class="col-sm-12">
    			<p class="text-center subheading">A group of professionals</p>
    		</div>
    	</div>
    	<div class="row padded-div">
	    	<div class="col-sm-6">
	    		<p>Nam euismod at erat quis facilisis. Sed tempor, lectus tincidunt sodales commodo, neque urna pellentesque ex, sed lobortis dolor risus vitae erat. Nullam a lobortis neque. Quisque placerat vehicula nibh in lacinia.</p>
			</div>

			<div class="col-sm-6">
	    		<p>Phasellus vestibulum nisl auctor, pharetra nibh rhoncus, luctus eros. Duis scelerisque lectus a dolor vulputate, vel ultrices sem finibus. Integer nec mi eget nunc dictum vestibulum id id leo.</p>
			</div>
		</div>

		<div>
			@if(($stylists->count() % 3) == 2)

				<?php $topRow = $stylists->slice(0, 2) ?>
				<div class="row">
					@foreach($topRow as $stylist)
						<div class="col-sm-offset-3">
							<div class="col-sm-4 text-center">
								@include('partials.stylist')
							</div>
						</div>
					@endforeach
				</div>

				<div class="row">
					<?php $bottomRow = $stylists->slice(2) ?>
					@foreach($bottomRow as $stylist)
						<div class="col-sm-4 text-center">
							@include('partials.stylist')
						</div>
					@endforeach
				</div>

			@elseif(($stylists->count() % 3) == 1)

				<?php $topRow = $stylists->slice(0, 1) ?>
				<div class="row">
					@foreach($topRow as $stylist)
						<div class="col-sm-4 text-center center-block">
							@include('partials.stylist')
						</div>
					@endforeach
				</div>

				<div class="row">
					<?php $bottomRow = $stylists->slice(1) ?>
					@foreach($bottomRow as $stylist)
						<div class="col-sm-4 text-center">
							@include('partials.stylist')
						</div>
					@endforeach
				</div>

			@else

				<div class="row">
					@foreach($stylists as $stylist)
						<div class="col-sm-4 text-center">
							@include('partials.stylist')
						</div>
					@endforeach
				</div>

			@endif
		</div>

    </div> <!-- /container -->
@endsection
