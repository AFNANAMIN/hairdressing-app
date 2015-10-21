@extends('layouts.master')

@section('content')
  <div class="container">

    <h1 class="text-center">Edit product</h1>

    {!! Form::open(['route' => ['products.update', $product->id], 'class' => 'form-horizontal']) !!}

      {!! Form::hidden('_method', 'PUT') !!}

      @include('products._form')

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Update product</button>
        </div> {{-- /.col-sm-10 --}}
      </div> {{-- /.form-group --}}

    {!! Form::close() !!} {{-- /.form --}}

    <hr>
    <h1 class="text-center">Delete product</h1>

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
