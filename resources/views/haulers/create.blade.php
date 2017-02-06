@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">Create Trip</div>

                <div class="panel-body">
       		 {!! Form::model($hauler = new \App\Hauler, ['class' => 'form-horizontal', 'url' => 'haulers', 'files' => 'true', 'enctype' => 'multipart\form-data']) !!}
			{!! csrf_field() !!}


					@include('haulers.form', ['submitButtonText' => 'Submit'])

            
  			{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


