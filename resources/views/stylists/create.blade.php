@extends('layouts.master')

@section('content')
    <div class="admin-header"> <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
                  <p class="subheading">Add Stylist<p>
              </div>
            </div>
            </div>
          </div> <!-- / container -->
      </div> <!-- / jumbotron -->
    <div class="container padded-div">

    <p class="subheading text-center">Add a new stylist</p>

    {!! Form::open(['route' => 'stylists.store', 'class' => 'form-horizontal', 'files' => true]) !!}

      @include('stylists._form')

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Add Stylist</button>
        </div> {{-- /.col-sm-10 --}}
      </div> {{-- /.form-group --}}

    {!! Form::close() !!} {{-- /.form --}}

    <div class="row">
      <div class="col-sm-offset-2 col-sm-10">
        <a class="btn btn-default" href="{{ route('panel') }}#stylists" role="button"><span class="glyphicon glyphicon-arrow-left"></span> Back to Admin Panel</a>
      </div>
    </div>

  </div> {{-- /.container --}}
@endsection
