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

    <p class="text-center subheading">Reset Password</p>

    {!! Form::open(['route' => 'password.accept', 'class' => 'form-signin']) !!}
      {!! Form::hidden('token', $token) !!}

      @if(count($errors) > 0)
        <div class="alert alert-danger">There were problems with your form. Please fix them.</div>
      @endif

      <div class="form-group {{ $errors->has('email') ? 'has-error text-danger' : '' }}">
        <label for="email" class="control-label">Email</label>
        {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
        @include('partials.error-help-block', ['field' => 'email'])
      </div>

      <div class="form-group {{ $errors->has('password') ? 'has-error text-danger' : '' }}">
        <label for="password" class="control-label">Password</label>
        {!! Form::password('password', ['class' => 'form-control']) !!}
        @include('partials.error-help-block', ['field' => 'password'])
      </div>

      <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error text-danger' : '' }}">
        <label for="password_confirmation" class="control-label">Confirm Password</label>
        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
        @include('partials.error-help-block', ['field' => 'password_confirmation'])
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-lg btn-primary btn-block">Reset Password</button>
      </div>
    {!! Form::close() !!}
  </div>
@endsection
