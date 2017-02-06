<div class="form-group{{ $errors->has('truck_list') ? ' has-error' : '' }}">
<div class="col-md-12 ">
<label class="control-label">
{!! Form::label('truck_list', 'Plate Number:') !!}
</label>
</div>

<div class="col-md-12">
{!! Form::select('truck_list', $trucks, null, ['class' => 'form-control', 'placeholder' => '--- Select Plate Number ---'] ) !!}
@if ($errors->has('truck_list'))
<span class="help-block">
<strong>{{ $errors->first('truck_list') }}</strong>
</span>
@endif
</div>
</div>


<div class="form-group{{ $errors->has('customer_list') ? ' has-error' : '' }}">
<div class="col-md-12 ">
<label class="control-label">
{!! Form::label('customer_list', 'Customer:') !!}
</label>
</div>

<div class="col-md-12">
{!! Form::select('customer_list', $customers, null, ['class' => 'form-control', 'placeholder' => '--- Select Customer ---'] ) !!}
@if ($errors->has('customer_list'))
<span class="help-block">
<strong>{{ $errors->first('customer_list') }}</strong>
</span>
@endif
</div>
</div>




<!-- submit or cancel button section -->



     <div class="row">
      <div class="col-md-6">
        <button type="reset" class="btn btn-default btn-block">Cancel</button>
      </div>

      <div class="col-md-6">
        <input type="button" class="btn btn-primary btn-block pull-right" value="Submit" data-toggle="modal" data-target="#myModal">
    </div>
    </div>


 <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Confirm Changes</h4>
      </div>
      <div class="modal-body">
        Are you sure you want to save changes? 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

         {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary'])  !!}

      </div>
    </div>
  </div>
</div>

