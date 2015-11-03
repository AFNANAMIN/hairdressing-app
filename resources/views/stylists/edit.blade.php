@extends('layouts.master')

@section('content')
    <div class="admin-header"> <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
                <p class="subheading">Edit Stylist<p>
            </div>
          </div>
          </div>
        </div> <!-- / container -->
    </div> <!-- / jumbotron -->

  <div class="container padded-div">

    <p class="text-center subheading">{{ $stylist->first_name }}</p>

    {!! Form::open(['route' => ['stylists.update', $stylist->id], 'class' => 'form-horizontal', 'files' => true]) !!}

      {!! Form::hidden('_method', 'PUT') !!}

      @include('stylists._form')

      <div class="form-group">
      <label class="col-sm-2 control-label">Current Photo</label>
        <div class="col-sm-10">
          <p><img src="{{ $stylist->photo->url('thumb') }}" alt="" class="img-rounded"></p>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Update stylist</button>
        </div> {{-- /.col-sm-10 --}}
      </div> {{-- /.form-group --}}

    {!! Form::close() !!} {{-- /.form --}}

    <div class="row">
      <div class="col-sm-offset-2 col-sm-10">
        <a class="btn btn-default" href="{{ route('panel') }}#stylists" role="button"><span class="glyphicon glyphicon-arrow-left"></span> Back to Admin Panel</a>
      </div>
    </div>

    <hr>
    <p class="text-center subheading">Delete stylist</p>

    {!! Form::open(['route' => ['stylists.destroy', $stylist->id], 'class' => 'form-horizontal', 'method' => 'delete']) !!}

      <div class="col-sm-offset-2 col-sm-10">
        <p>Do you want to remove this stylist from the website? Be careful! This action cannot be undone!</p>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Remove stylist</button>
        </div> {{-- /.col-sm-10 --}}
      </div> {{-- /.form-group --}}

    {!! Form::close() !!} {{-- /.form --}}

  </div> {{-- /.container --}}
@endsection
