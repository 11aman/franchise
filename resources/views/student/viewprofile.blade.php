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
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        	
                                            <th>name</th>
                                            <th>fathers name</th>
                                            <th>DOB</th>
                                            <th>mobile</th>
                                            <th>email</th>
                                            <th>image</th>
                                            <th>registraion no</th>
                                            <th>course</th>
                                            <th>course fees</th>
                                            <th>submitted fees</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	
                                        <tr>
                                            
                                            <td>{{$data->name}}</td>
                                            <td>{{$data->fathers_name}}</td>
                                            <td>{{$data->Dob}}</td>
                                            <td>{{$data->mobile}}</td>
                                            <td>{{$data->email}}</td>
                                            <td>
                                                @php
                                                if(!empty($data->certificate))
                                               {
                                                @endphp
                                                <img src="{{asset('upload/' .$data->certificate)}}" style="height: 100px; width: 100px;">
                                                @php}
                                                else
                                                {@endphp
                                                
                                                   <p>no certificate found</p>
                                                 @php} 
                                                @endphp

                                            </td>
                                            
                                            <td>{{$data->regno}}</td>
                                            <td>{{$data->course}}</td>
                                            <td>{{$data->course_fees}}</td>
                                            <td>{{$data->submitted_fees}}</td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!--content -->

@endsection


