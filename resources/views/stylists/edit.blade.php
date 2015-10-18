@extends('layouts.master')

@section('content')
  <div class="container">

    <h1 class="text-center">Edit stylist</h1>

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

    <hr>
    <h1 class="text-center">Delete stylist</h1>

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
