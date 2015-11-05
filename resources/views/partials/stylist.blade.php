@if(Auth::check())
	<p>
		<a href="{{ route('stylists.edit', $stylist->id) }}" class="btn btn-default btn-block btn-stylist">
			<span class="glyphicon glyphicon-pencil"></span> Edit {{ $stylist->first_name }}
		</a>
	</p>
@endif
<p><img class="img-responsive" src="{{ $stylist->photo->url('medium') }}" alt="{{ $stylist->first_name }}"></p>
<p class="text-uppercase"><strong>{{ $stylist->first_name }}</strong></p>
<p class="padded-div">{!! nl2br($stylist->bio) !!}</p>
