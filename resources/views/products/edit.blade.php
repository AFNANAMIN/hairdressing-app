@extends('layouts.master')

@section('content')
  <div class="admin-header"> <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
                  <p class="subheading">Edit Product<p>
              </div>
            </div>
            </div>
          </div> <!-- / container -->
      </div> <!-- / jumbotron -->
  <div class="container padded-div">

    <p class="text-center subheading">{{ $product->name }}</p>

    {!! Form::open(['route' => ['products.update', $product->id], 'class' => 'form-horizontal']) !!}

      {!! Form::hidden('_method', 'PUT') !!}

      @include('products._form')

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Update product</button>
        </div> {{-- /.col-sm-10 --}}
      </div> {{-- /.form-group --}}

    {!! Form::close() !!} {{-- /.form --}}

    <div class="row">
      <div class="col-sm-offset-2 col-sm-10">
        <?php
          if ($product->brand == "joico") {
            $hash = '#joico';
          } else {
            $hash = '#keune';
          }
        ?>
        <a class="btn btn-default" href="{{ route('panel') }}{{$hash}}" role="button"><span class="glyphicon glyphicon-arrow-left"></span> Back to Admin Panel</a>
      </div>
    </div>

    <hr>
    <p class="text-center subheading">Delete product</p>

    {!! Form::open(['route' => ['products.destroy', $product->id], 'class' => 'form-horizontal', 'method' => 'delete']) !!}

      <div class="col-sm-offset-2 col-sm-10">
        <p>Do you want to remove this product from the website? Be careful! This action cannot be undone!</p>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Remove product</button>
        </div> {{-- /.col-sm-10 --}}
      </div> {{-- /.form-group --}}

    {!! Form::close() !!} {{-- /.form --}}

  </div> {{-- /.container --}}
@endsection
