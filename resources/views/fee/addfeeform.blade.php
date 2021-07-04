@extends('layouts.master')
@section('data')


<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Data table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Fee Detail</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>regno</th>
                                            <th>name</th>
                                            <th>course</th>
                                            <th>course_fees</th>
                                            <th>submitted_fees</th>
                                            <th>remaining fees</th>
                                            <th>payment_method</th>
                                            <th>franchise_name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                
                                        <tr>
                                            <td>{{$data->regno}}</td>
                                            <td>{{$data->name}}</td>
                                            <td>{{$data->course}}</td>
                                            <td>{{$data->course_fees}}</td>
                                            <td>{{$data->submitted_fees}}</td>
                                            <td>{{$data->course_fees - $data->submitted_fees}}</td>
                                            <td>{{$data->payment_method}}</td>
                                            <td>{{$data->franchise_name}}</td>
                                        </tr>
                                    
                                    </tbody>
                                </table><br><br>

                                 <form action="{{url('addfeesubmit')}}" method="POST" enctype="multipart/form-data">

                                    {{csrf_field()}}

                                    <input type="hidden" name="regno" value="{{$data->regno}}">
                                    <input type="hidden" name="franchise_name" value="{{Auth::user()->name}}">
                                    
                                    <div class="row form-group ">
                                    <div class="col col-md-3"><label for="hf-email" class=" form-control-label" style="text-align: left">Name</label></div>
                                    <div class="col-12 col-md-9">
                                      <input type="text" id="hf-email" name="name" placeholder="Enter name..." class="form-control"
                                      value="{{$data->name}}"></div>
                                    </div>

                                    <div class="row form-group ">
                                    <div class="col col-md-3"><label for="hf-email" class=" form-control-label" style="text-align: left"  >course</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="hf-email" name="course" placeholder="Enter course.." class="form-control" value="{{$data->course}}"></div>
                                    </div>

                                   <div class="row form-group ">
                                   <div class="col col-md-3"><label for="hf-email" class=" form-control-label" style="text-align: left"  >course_fees</label></div>
                                   <div class="col-12 col-md-9"><input type="text" id="hf-email" name="course_fees" placeholder="Enter course_fees..." class="form-control" value="{{$data->course_fees}}"></div>
                                   </div>

                                  <div class="row form-group ">
                                  <div class="col col-md-3"><label for="hf-email" class=" form-control-label" style="text-align: left" >submitted_fees</label></div>
                                  <div class="col-12 col-md-9"><input type="text" id="hf-email" name="submitted_fees" placeholder="Enter submitted_fees..." class="form-control" value="{{$data->submitted_fees}}"></div>
                                  </div>

                                  <div class="row form-group ">
                                  <div class="col col-md-3"><label for="hf-email" class=" form-control-label" style="text-align: left" >remaining_fees</label></div>
                                  <div class="col-12 col-md-9"><input type="text" id="hf-email" name="remaining_fees" placeholder="Enter remaining_fees..." class="form-control" value="{{$data->course_fees - $data->submitted_fees}}"></div>
                                  </div>

                                  <div class="row form-group ">
                                  <div class="col col-md-3"><label for="hf-email" class=" form-control-label" style="text-align: left"  >payment_method</label></div>
                                  <div class="col-12 col-md-9"><input type="text" id="hf-email" name="payment_method" placeholder="Enter payment_method..." class="form-control" value="{{$data->payment_method}}"></div>
                                  </div>

                                 <div class="card-footer">
                                 <button type="submit" class="btn btn-primary btn-sm">
                                  submit
                                 </button>
                                </center>
                                  </div>

                                 </form>

                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!--content -->

@endsection


