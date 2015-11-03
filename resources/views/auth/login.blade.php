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
  <div class="container padded-div">

    <p class="text-center subheading">Log in</p>

    {!! Form::open(['route' => 'auth.accept', 'class' => 'form-signin']) !!}

      @if(count($errors) > 0)
        <div class="alert alert-danger">There were problems with your form. Please fix them.</div>
      @endif

      <div class="form-group {{ $errors->has('email') ? 'has-error text-danger' : '' }}">
        <label for="email" class="control-label">Email</label>
        {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
      </div>

      <div class="form-group {{ $errors->has('password') ? 'has-error text-danger' : '' }}">
        <label for="password" class="control-label">Password</label>
        {!! Form::password('password', ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
        <label>{!! Form::checkbox('remember') !!} Remember Me</label>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-lg btn-primary btn-block"><span class="glyphicon glyphicon-ok"></span> Log in</button>
      </div>
      <div class="form-group">
        <p><a href="{{ route('password.email') }}">Forgot Password?</a></p>
      </div>
    {!! Form::close() !!}
  </div>
@endsection
