@if(count($errors) > 0)
  <div class="alert alert-danger text-center">
    There were problems with your form. Please fix them.
  </div>
@endif

<div class="form-group {{ $errors->has('first_name') ? 'has-error text-danger' : '' }}">
  <label for="first_name" class="col-sm-2 control-label">First Name</label>
  <div class="col-sm-10">
    {!! Form::text('first_name', $stylist->first_name, ['class' => 'form-control']) !!}
    @include('partials.error-help-block', ['field' => 'first_name'])
  </div> {{-- /.col-sm-10 --}}
</div> {{-- /.form-group --}}
<div class="form-group {{ $errors->has('bio') ? 'has-error text-danger' : '' }}">
  <label for="bio" class="col-sm-2 control-label">Bio</label>
  <div class="col-sm-10">
    {!! Form::textarea('bio', $stylist->bio, ['class' => 'form-control']) !!}
    @include('partials.error-help-block', ['field' => 'bio'])
  </div> {{-- /.col-sm-10 --}}
</div> {{-- /.form-group --}}

<div class="form-group {{ $errors->has('photo') ? 'has-error text-danger' : '' }}">
  <label for="photo" class="col-sm-2 control-label">Photo</label>
  <div class="col-sm-10">
    {!! Form::file('photo', ['class' => 'form-control']) !!}
    @include('partials.error-help-block', ['field' => 'photo'])
  </div> {{-- /.col-sm-10 --}}
</div> {{-- /.form-group --}}
