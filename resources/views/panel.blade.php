@extends('layouts.master')

@section('content')
    <div class="admin-header"> <!-- Main jumbotron for a primary marketing message or call to action -->
    	<div class="jumbotron">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
				        <p class="subheading">Admin Panel<p>
				    </div>
			    </div>
      		</div>
      	</div> <!-- / container -->
    </div> <!-- / jumbotron -->	

	<a href="#" class="back-to-top">Back to Top</a>

    <div class="container padded-div">

    	<div data-example-id="togglable-tabs">

		    <!-- Nav tabs -->
		    <ul id="myTabs" class="nav nav-tabs" role="tablist">
		      <li role="presentation" class="active hours"><a href="#hours" id="hours-tab" role="tab" data-toggle="tab" aria-controls="hours" aria-expanded="true">Hours</a></li>
		      <li role="presentation" class="stylists"><a href="#stylists" role="tab" id="stylists-tab" data-toggle="tab" aria-controls="stylists">Stylists</a></li>
		      <li role="presentation" class="dropdown">
		        <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">Products <span class="caret"></span></a>
		        <ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
		          <li class="brandone"><a href="#brandone" role="tab" id="brandone-tab" data-toggle="tab" aria-controls="brandone">Brand One</a></li>
		          <li class="brandtwo"><a href="#brandtwo" role="tab" id="brandtwo-tab" data-toggle="tab" aria-controls="brandtwo">Brand Two</a></li>
		        </ul>
		      </li>
		    </ul>

		    <!-- Tab panes -->
		    <div id="myTabContent" class="tab-content">
		      <div role="tabpanel" class="tab-pane fade in active anchor-spacer" id="hours" aria-labelledBy="hours-tab">
		        <p class="text-center subheading admin-heading">Hours</p>
		        <p>Add, edit and delete sets of hours for specific seasons.</p>
		        <p class="spacer">You can "Activate" the currently available set of hours by toggling the button in the "Change Status" column. You may "Activate" more than one set of hours, however, that will make multiple sets of hours display in the footer and on the contact page. If you wish to "Deactivate" a set of hours, simply toggle the button.</p>
		        <table class="table table-hover table-bordered">
		          <thead>
		            <th>Season</th>
		            <th>Description</th>
		            <th>Change Status</th>
		            <th>Action</th>
		          </thead>
		          <tbody>
		            @foreach($hours as $hours)
		            @if($hours->active == true)
		              <tr class="active">
		            @else
		              <tr>
		            @endif
		              <td>{{ $hours->season }}</td>
		              <td>{!! nl2br($hours->description) !!}</td>
		              @if($hours->active == true )
		              <td>
		                {!! Form::open(['route' => ['hours.update', $hours->id], 'class' => 'form-horizontal', 'method' => 'PUT']) !!}
		                {!! Form::hidden('active', 0) !!}
		                {!! Form::hidden('season', $hours->season) !!}
		                {!! Form::hidden('description', $hours->description) !!}
		                <button type="submit" class="btn btn-danger btn-block"><span class="glyphicon glyphicon-remove"></span> Deactivate</button>
		                {!! Form::close() !!} {{-- /.form --}}
		              </td>
		              @else
		              <td>
		                {!! Form::open(['route' => ['hours.update', $hours->id], 'class' => 'form-horizontal', 'method' => 'PUT']) !!}
		                {!! Form::hidden('active', 1) !!}
		                {!! Form::hidden('season', $hours->season) !!}
		                {!! Form::hidden('description', $hours->description) !!}
		                <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-ok"></span> Activate</button>
		                {!! Form::close() !!} {{-- /.form --}}
		              </td>
		              @endif
		              <td>
		                <a href="{{ route('hours.edit', $hours->slug) }}" class="btn btn-default btn-block">
		                <span class="glyphicon glyphicon-pencil"></span> Edit
		              </a>
		            </td>
		            </tr>
		            @endforeach
		          </tbody>
		        </table>
		        <p>
		          <a href="{{ route('hours.create') }}" class="btn btn-success btn-fixed">
		            <span class="glyphicon glyphicon-plus"></span> Add Season
		          </a>
		        </p>
		      </div>
		      <div role="tabpanel" class="tab-pane fade anchor-spacer" id="stylists" aria-labelledBy="stylists-tab">
		        <p class="text-center subheading admin-heading">Stylists</p>
		        <p class="spacer">You can edit, delete and add stylists below.</p>
		        <table class="table table-hover table-bordered">
		          <thead>
		            <th>Photo</th>
		            <th>Name</th>
		            <th>Bio</th>
		            <th>Action</th>
		          </thead>
		          <tbody>
		            @foreach($stylists as $stylist)
		            <tr>
		              <td><img src="{{ $stylist->photo->url('thumb') }}" alt="{{ $stylist->first_name }}"></td>
		              <td>{{ $stylist->first_name }}</td>
		              <td>{!! nl2br($stylist->bio) !!}</td>
		              <td>
		                <a href="{{ route('stylists.edit', $stylist->slug) }}" class="btn btn-default btn-block">
		                <span class="glyphicon glyphicon-pencil"></span> Edit
		              </a>
		            </td>
		            </tr>
		            @endforeach
		          </tbody>
		        </table>
		        <p>
		          <a href="{{ route('stylists.create') }}" class="btn btn-success btn-fixed">
		            <span class="glyphicon glyphicon-plus"></span> Add Stylist
		          </a>
		        </p>
		      </div>
		      <div role="tabpanel" class="tab-pane fade anchor-spacer" id="brandone" aria-labelledBy="brandone-tab">
		        <p class="text-center subheading admin-heading">Brand One</p>

		        <div class="row padded-panel">
		        @foreach($brandone as $product)
		          <div class="col-sm-4">
		            <div class="bordered-div">
		              <p>
		                  <a href="{{ route('products.edit', $product->slug) }}" class="btn btn-block btn-default btn-block">
		                  <span class="glyphicon glyphicon-pencil"></span> Edit this product
		                </a>
		              </p>
		                <p class="text-uppercase">{{ $product->name }}</p>
		                <p>{!! nl2br($product->description) !!}</p>
		              </div>
		          </div>
		          @endforeach
		        </div>

		      {!! Form::open(['route' => ['products.featured'], 'class' => 'form-horizontal', 'method' => 'POST']) !!}
		        <div class="row">
		          {!! Form::hidden('brand', 'brandone') !!}
		          <div class="col-sm-4 {{ $errors->has('one') ? 'has-error text-danger' : '' }}">
		            <p><strong>First Product</strong></p>

		            {!! Form::select('one', $brandOneAll, $brandOneActive[1], ['class' => 'form-control']) !!}

		              @include('partials.error-help-block', ['field' => 'one'])
		          </div> {{-- /.form-group --}}

		          <div class="col-sm-4 {{ $errors->has('two') ? 'has-error text-danger' : '' }}">
		            <p><strong>Second Product</strong></p>
		            {!! Form::select('two', $brandOneAll, $brandOneActive[2], ['class' => 'form-control']) !!}
		              @include('partials.error-help-block', ['field' => 'two'])
		          </div> {{-- /.form-group --}}

		          <div class="col-sm-4 {{ $errors->has('three') ? 'has-error text-danger' : '' }}">
		            <p><strong>Third Product</strong></p>
		            {!! Form::select('three', $brandOneAll, $brandOneActive[3], ['class' => 'form-control']) !!}
		              @include('partials.error-help-block', ['field' => 'three'])
		          </div> {{-- /.form-group --}}
		        </div>

		        <div class="row padded-panel">
		          <div class="col-sm-4">
		            <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-ok"></span> Save changes</button>
		          </div>  
		        </div>
		      {!! Form::close() !!} {{-- /.form --}}

		      <p><strong>All Brand One Products</strong></p>
		      <table class="table table-hover table-bordered">
		          <thead>
		            <th>Brand</th>
		            <th>Product Name</th>
		            <th>Description</th>
		            <th>Action</th>
		          </thead>
		          <tbody>
		            @foreach($brandOneList as $product)
		            <tr>
		              <td>Brand One</td>
		              <td>{{ $product->name }}</td>
		              <td>{!! nl2br($product->description) !!}</td>
		              <td>
		                <a href="{{ route('products.edit', $product->slug) }}" class="btn btn-default btn-block">
		                <span class="glyphicon glyphicon-pencil"></span> Edit
		              </a>
		            </td>
		            </tr>
		            @endforeach
		          </tbody>
		        </table>
		        <p>
		          <a href="{{ route('products.create') }}" class="btn btn-success btn-fixed">
		            <span class="glyphicon glyphicon-plus"></span> Add Product
		          </a>
		        </p>
		      </div>
		      <div role="tabpanel" class="tab-pane fade anchor-spacer" id="brandtwo" aria-labelledBy="brandtwo-tab">
		        <p class="text-center subheading admin-heading">Brand Two</p>

		        <div class="row padded-panel">
		        @foreach($brandtwo as $product)
		          <div class="col-sm-4">
		            <div class="bordered-div">
		              <p>
		                  <a href="{{ route('products.edit', $product->slug) }}" class="btn btn-block btn-default btn-block">
		                  <span class="glyphicon glyphicon-pencil"></span> Edit this product
		                </a>
		              </p>
		                <p class="text-uppercase">{{ $product->name }}</p>
		                <p>{!! nl2br($product->description) !!}</p>
		              </div>
		          </div>
		          @endforeach
		        </div>

		      {!! Form::open(['route' => ['products.featured'], 'class' => 'form-horizontal', 'method' => 'POST']) !!}
		        <div class="row">
		          {!! Form::hidden('brand', 'brandtwo') !!}
		          <div class="col-sm-4 {{ $errors->has('one') ? 'has-error text-danger' : '' }}">
		            <p><strong>First Product</strong></p>

		            {!! Form::select('one', $brandTwoAll, $brandTwoActive[1], ['class' => 'form-control']) !!}

		              @include('partials.error-help-block', ['field' => 'one'])
		          </div> {{-- /.form-group --}}

		          <div class="col-sm-4 {{ $errors->has('two') ? 'has-error text-danger' : '' }}">
		            <p><strong>Second Product</strong></p>
		            {!! Form::select('two', $brandTwoAll, $brandTwoActive[2], ['class' => 'form-control']) !!}
		              @include('partials.error-help-block', ['field' => 'two'])
		          </div> {{-- /.form-group --}}

		          <div class="col-sm-4 {{ $errors->has('three') ? 'has-error text-danger' : '' }}">
		            <p><strong>Third Product</strong></p>
		            {!! Form::select('three', $brandTwoAll, $brandTwoActive[3], ['class' => 'form-control']) !!}
		              @include('partials.error-help-block', ['field' => 'three'])
		          </div> {{-- /.form-group --}}
		        </div>

		        <div class="row padded-panel">
		          <div class="col-sm-4">
		            <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-ok"></span> Save changes</button>
		          </div>  
		        </div>  
		      {!! Form::close() !!} {{-- /.form --}}
		      
		      <p><strong>All Brand Two Products</strong></p>
		      <table class="table table-hover table-bordered">
		          <thead>
		            <th>Brand</th>
		            <th>Product Name</th>
		            <th>Description</th>
		            <th>Action</th>
		          </thead>
		          <tbody>
		            @foreach($brandTwoList as $product)
		            <tr>
		              <td>Brand Two</td>
		              <td>{{ $product->name }}</td>
		              <td>{!! nl2br($product->description) !!}</td>
		              <td>
		                <a href="{{ route('products.edit', $product->slug) }}" class="btn btn-default btn-block">
		                <span class="glyphicon glyphicon-pencil"></span> Edit
		              </a>
		            </td>
		            </tr>
		            @endforeach
		          </tbody>
		        </table>
		        <p>
		          <a href="{{ route('products.create') }}" class="btn btn-success btn-fixed">
		            <span class="glyphicon glyphicon-plus"></span> Add Product
		          </a>
		        </p>
		      </div>
		    </div>

		</div><!-- /tabs -->

    </div> <!-- /container -->
@endsection

@section('scripts')
<script type="text/javascript" src="js/back-to-top.js"></script>
<script>
	$(document).ready(function () {
		if (document.querySelector(window.location.hash + '-tab')) {
			$(window.location.hash + '-tab').tab('show');
		}
		$('#myTabs a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
			console.log(e.target);
  			history.pushState({}, e.target.text, e.target.href);

		});
	});
</script>
@endsection
