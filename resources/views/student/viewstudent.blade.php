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
                                        	<th>ID</th>
                                            <th>name</th>
                                            <th>course</th>
                                            <th>course_fees</th>
                                            <th>submitted_fees</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php $id=1; ?>
                                    	@foreach($data as $pn)
                                        <tr>
                                            <td>{{$id++}}</td>
                                            <td>{{$pn->name}}</td>
                                            <td>{{$pn->course}}</td>
                                            <td>{{$pn->course_fees}}</td>
                                            <td>{{$pn->submitted_fees}}</td>
                                            <td>
                                            	<!-- <a href="">show</a> -->
                                            	<a href="{{url('/editstudent/'.$pn->id)}}">edit</a>
                                            	<a href="{{url('/deletestudent/'.$pn->id)}}">delete</a>

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!--content -->

@endsection


