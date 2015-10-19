@extends('layouts.master')

@section('content')
  <div class="container">

    <h1 class="text-center">Add a new product</h1>

    {!! Form::open(['route' => 'products.store', 'class' => 'form-horizontal', 'files' => true]) !!}

      @include('products._form')

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Add Product</button>
        </div> {{-- /.col-sm-10 --}}
      </div> {{-- /.form-group --}}

    {!! Form::close() !!} {{-- /.form --}}

  </div> {{-- /.container --}}
@endsection
