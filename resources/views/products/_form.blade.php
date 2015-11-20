@if(count($errors) > 0)
  <div class="alert alert-danger text-center">
    There were problems with your form. Please fix them.
  </div>
@endif

<div class="form-group {{ $errors->has('name') ? 'has-error text-danger' : '' }}">
  <label for="name" class="col-sm-2 control-label">Product Name</label>
  <div class="col-sm-10">
    {!! Form::text('name', $product->name, ['class' => 'form-control']) !!}
    @include('partials.error-help-block', ['field' => 'name'])
  </div> {{-- /.col-sm-10 --}}
</div> {{-- /.form-group --}}

<div class="form-group {{ $errors->has('description') ? 'has-error text-danger' : '' }}">
  <label for="description" class="col-sm-2 control-label">Description</label>
  <div class="col-sm-10">
    {!! Form::textarea('description', $product->description, ['class' => 'form-control']) !!}
    @include('partials.error-help-block', ['field' => 'description'])
  </div> {{-- /.col-sm-10 --}}
</div> {{-- /.form-group --}}

<div class="form-group {{ $errors->has('brand') ? 'has-error text-danger' : '' }}">
  <label for="brand" class="col-sm-2 control-label">Brand</label>
  <div class="col-sm-10">
    {!! Form::select('brand', ['one' => 'Brand One', 'two' => 'Brand Two'], $product->brand, ['class' => 'form-control']) !!}
    @include('partials.error-help-block', ['field' => 'brand'])
  </div> {{-- /.col-sm-10 --}}
</div> {{-- /.form-group --}}