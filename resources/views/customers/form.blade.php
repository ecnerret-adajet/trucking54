<div class="row{{ $errors->has('name') ? ' has-error' : '' }}">
<div class="col-md-12 ">
<label class="control-label">
{!! Form::label('name', 'Customer Name:') !!}
</label>
</div>

<div class="col-md-12">
{!! Form::text('name', null, ['class' => 'form-control'] ) !!}
@if ($errors->has('name'))
<span class="help-block">
<strong>{{ $errors->first('name') }}</strong
></span>
@endif
</div>
</div>

<div class="row{{ $errors->has('city') ? ' has-error' : '' }}">
<div class="col-md-12 ">
<label class="control-label">
{!! Form::label('city', 'City:') !!}
</label>
</div>

<div class="col-md-12">
{!! Form::text('city', null, ['class' => 'form-control'] ) !!}
@if ($errors->has('city'))
<span class="help-block">
<strong>{{ $errors->first('city') }}</strong>
</span>
@endif
</div>
</div>


<div class="row{{ $errors->has('province') ? ' has-error' : '' }}">
<div class="col-md-12 ">
<label class="control-label">
{!! Form::label('province', 'Province:') !!}
</label>
</div>

<div class="col-md-12">
{!! Form::text('province', null, ['class' => 'form-control'] ) !!}
@if ($errors->has('province'))
<span class="help-block">
<strong>{{ $errors->first('province') }}</strong>
</span>
@endif
</div>
</div>



<div class="row{{ $errors->has('phone') ? ' has-error' : '' }}">
<div class="col-md-12 ">
<label class="control-label">
{!! Form::label('phone', 'Contact Number:') !!}
</label>
</div>

<div class="col-md-12">
{!! Form::text('phone', null, ['class' => 'form-control'] ) !!}
@if ($errors->has('phone'))
<span class="help-block">
<strong>{{ $errors->first('phone') }}</strong>
</span>
@endif
</div>
</div>


