@extends('layouts.master')

@section('content')
	<div class="contact-header"> <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p class="subheading">Contact Us<p>
                    </div>
                </div>
            </div>
        </div> <!-- / container -->
    </div> <!-- / jumbotron -->

    <div class="container">

    	<p class="text-center subheading">Find our salon</p>

    	<div class="row">
    		<div class="col-sm-6 padded-div">
    			<p>Have a look at our hours for this season:</p>
    			@foreach($hours as $hours)
					<p class="text-uppercase hours-contact"><strong>{{ $hours->season }} hours</strong></p>
					<p>{!! nl2br($hours->description) !!}</p>
					@if(Auth::check())
						<p>
							<a href="{{ route('hours.edit', $hours->slug) }}" class="btn btn-default">
								<span class="glyphicon glyphicon-pencil"></span> Edit {{ $hours->season }} hours
							</a>
						</p>
					@endif
				@endforeach
    		</div>
    		<div class="col-sm-6 padded-div">
    			<p>You can find Hairdressing in City’s Suburb, situated on Average Street.</p> 
				<p>Come by and say hello or give us a call using the number below to claim your complimentary consultation!</p>
				<p class="icon location-contact"><img src="../../icons/location-grey.png" alt="Location">123, Average Street, Suburb, City</p>
          		<p class="icon"><img src="../../icons/phone-grey.png" alt="Phone">05 555 5555</p>
    		</div>
    	</div>

    </div> <!-- /container -->

    <div id="map-canvas"></div>

    <div class="container anchor-spacer" id="booking">
    	<p class="text-center subheading">Request a consultation</p>
    	<p>Please use the form below to request a booking. Our team will get back to you within 3 days to set up your appointment.</p>
    	<p>If your query is urgent, please call us instead. Our phone number is 05 555 5555.</p>
    	{!! Form::open(['route' => 'mail', 'class' => 'form-horizontal contact-form']) !!}

	    	<div class="row">
	    		<div class="col-sm-6 inline-field">
	    			<div class="form-group {{ $errors->has('name') ? 'has-error text-danger' : '' }}">
				  		<label for="name">Your Name *</label>
				    	{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Jane Doe']) !!}
				    	@include('partials.error-help-block', ['field' => 'name'])
				    </div>
				</div> {{-- /.form-group --}}

				<div class="col-sm-6 inline-field phone-field">
					<div class="form-group {{ $errors->has('phone') ? 'has-error text-danger' : '' }}">
					    <label for="phone">Your Phone Number *</label>
					    {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => '027 123 4567']) !!}
					    @include('partials.error-help-block', ['field' => 'phone'])
					</div>
				</div> {{-- /.form-group --}}
			</div> {{-- /.row --}}

			<div class="row">
				<div class="col-sm-12">
					<div class="form-group {{ $errors->has('service') ? 'has-error text-danger' : '' }}">
					  <label for="service">Desired Service *</label>
					    {!! Form::select('service', ['Cut and Colour' => 'Cut and Colour', 'Haircut' => 'Haircut', 'Updo' => 'Updo', 'Highlights' => 'Highlights', 'Treatment' => 'Treatment'], null, ['class' => 'form-control', 'placeholder' => 'Pick your desired service']) !!}
					    @include('partials.error-help-block', ['field' => 'service'])
					</div> {{-- /.form-group --}}
				</div>
			</div> {{-- /.row --}}

			<div class="row">
				<div class="col-sm-12">
					<div class="form-group {{ $errors->has('details') ? 'has-error text-danger' : '' }}">
					  <label for="details">Message</label>
					  	{!! Form::textarea('details', null, ['class' => 'form-control', 'placeholder' => 'Duis a quam vel erat gravida lacinia aliquet nec nisl. Aenean tristique, dolor in ornare aliquet, nunc ex maximus dolor, egestas tristique libero nisl id magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.']) !!}
					    @include('partials.error-help-block', ['field' => 'details'])
					</div> {{-- /.form-group --}}
				</div>
			</div> {{-- /.row --}}

			<div class="row padded-div">
				<div class="col-sm-3 pull-right form-group">
			        <button type="submit" class="btn btn-success btn-block">Submit Request</button>
			    </div> {{-- /.form-group --}}
			</div> {{-- /.row --}}

    	{!! Form::close() !!} {{-- /.form --}}
    </div> <!-- /container -->
@endsection
@section('scripts')
	<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
	{!! JsValidator::formRequest('App\Http\Requests\BookingRequest') !!}
	<script src="https://maps.googleapis.com/maps/api/js?key=YOUR-KEY"></script> 
	<script>
		var map = new google.maps.Map(document.getElementById('map-canvas'), {
			center: {
				lat: -36.844125,
				lng: 174.770572
			},
			zoom: 10,
			scrollwheel: false,
		    navigationControl: false,
		    mapTypeControl: false,
		    scaleControl: false
		});

		var marker = new google.maps.Marker({
			position: {
				lat: -36.844125,
				lng: 174.770572
			},
			map: map
		});
	</script>
@endsection