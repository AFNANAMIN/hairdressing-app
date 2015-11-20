@if(count($errors) > 0)
  <div class="alert alert-danger text-center">
    There were problems with your form. Please fix them.
  </div>
@endif

<div class="form-group {{ $errors->has('season') ? 'has-error text-danger' : '' }}">
  <label for="season" class="col-sm-2 control-label">Season</label>
  <div class="col-sm-10">
    {!! Form::text('season', $hours->season, ['class' => 'form-control']) !!}
    @include('partials.error-help-block', ['field' => 'season'])
  </div> {{-- /.col-sm-10 --}}
</div> {{-- /.form-group --}}

<div class="form-group {{ $errors->has('description') ? 'has-error text-danger' : '' }}">
  <label for="description" class="col-sm-2 control-label">Hours Description</label>
  <div class="col-sm-10">
    {!! Form::textarea('description', $hours->description, ['class' => 'form-control']) !!}
    @include('partials.error-help-block', ['field' => 'description'])
  </div> {{-- /.col-sm-10 --}}
</div> {{-- /.form-group --}}

<div class="form-group {{ $errors->has('active') ? 'has-error text-danger' : '' }}">
  <label for="active" class="col-sm-2 control-label">Active</label>
  <div class="col-sm-10">
    {!! Form::select('active', ['0' => 'no', '1' => 'yes'], $hours->active, ['class' => 'form-control']) !!}
    @include('partials.error-help-block', ['field' => 'active'])
  </div> {{-- /.col-sm-10 --}}
</div> {{-- /.form-group --}}