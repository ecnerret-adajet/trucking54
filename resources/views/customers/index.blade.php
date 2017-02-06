@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h4>Customers
                <a data-toggle="modal" class="btn btn-default" data-target=".bs-show-customer-modal-lg" href="">
                Add New Customer
                </a>
                </h4>

                </div>

                <div class="panel-body">
                    


                      <!-- table tab list -->
    <div class="tabbable-panel">
      <div class="tabbable-line">
        <ul class="nav nav-tabs tabtop  tabsetting">
          <li class="active"> <a href="#tab_default_1" data-toggle="tab"> Active Customers <span class="badge">{{$customers->count()}}</span> </a> </li>
          <li> <a href="#tab_default_2" data-toggle="tab"> Inactive Customers  <span class="badge">0</span> </a> </li>
          <li> <a href="#tab_default_3" data-toggle="tab"> Archive Documents </a> </li>
        </ul>
        <div class="tab-content margin-tops">
          <div class="tab-pane active fade in" id="tab_default_1">
            <div class="col-md-12">

                <!-- table data -->
                <table id="table-data" class="table nowrap display table-striped table-hover table_custom" width="100%">
                    <thead>
                        <tr>
                                <th>
                                Drdr No
                                </th>
                                <th>
                                Document Title
                                </th>
                                <th>
                                Reason of Request
                                </th>
                                <th>
                                Revision #
                                </th>
                                <th>
                                Reviewer Status
                                </th>
                                <th>
                                Option
                                </th>
                        </tr>
                    </thead>
                <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <td>
                        {{$customer->id}}
                        </td>

                        <td>
                        {{$customer->name}}
                        </td>

                        <td>
                        {{$customer->city}}
                        </td>        

                        <td>
                        {{$customer->province}}
                        </td>   

                        <td>
                        {{$customer->phone}}
                        </td>
           
                        <td>
                          <div class="btn-group">
                            <div class="btn-group">
                              <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                Option
                                <span class="caret"></span>
                              </a>
                              <ul class="dropdown-menu">
                                <li>
                                <a data-toggle="modal" data-target=".bs-delete{{$customer->id}}-modal-lg" href="">
                                   Move to trash
                                </a>
                                </li>
                                <li>
                                <a data-toggle="modal" data-target=".bs-archive{{$customer->id}}-modal-lg" href="">
                                  Mark as archive
                                </a>
                                </li>
                                <li><a href="#">Cancel Document</a></li>
                               </ul>
                            </div>
                          </div>
                        </td>

                    </tr>
                @endforeach
                </tbody>
                </table>

              </div>
          </div>


          <div class="tab-pane fade" id="tab_default_2">
            <div class="col-md-12">


              </div>
          </div>


          <div class="tab-pane fade" id="tab_default_3">
            <div class="col-md-12">



              </div>
          </div>


        
        </div><!-- table content -->
      </div><!-- table line -->
    </div><!-- table panel -->

                </div>
            </div>
        </div>
    </div>
</div>






 <!-- create building modal -->
      <div class="modal fade bs-show-customer-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog">
          <div class="modal-content" style="min-width: 850px;  margin-left: -80px;">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Add Customer</h4>
            </div>
            <div class="modal-body">
                  {!! Form::model($customer = new \App\Customer,  ['class' => 'form-horizontal',  'url' => 'customers'] )!!}
                  {!! csrf_field() !!}

                  @include('customers.form')
          
            
            </div><!-- modal body -->
            <div class="modal-footer">
            
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" >Submit</button>

              {!! Form::close() !!}
            </div>
            
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->    
<!-- end create model customer -->
@endsection
