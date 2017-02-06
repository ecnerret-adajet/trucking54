@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">Add Customer</div>

                <div class="panel-body">
             {!! Form::model($customer = new \App\Customer, ['class' => 'form-horizontal', 'url' => 'customers', 'files' => 'true', 'enctype' => 'multipart\form-data']) !!}
            {!! csrf_field() !!}


                    @include('customers.form', ['submitButtonText' => 'Submit'])

            
            {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


