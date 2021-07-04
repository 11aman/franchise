@include('layouts.master')
@section('data')

  <div class="container">
     <div class="row">
         <div class="col-md-12">
            <div class="card">
            <div class="card-header">
            <center><strong class="card-title">View Student For Certificate</strong></center>
                            </div>
                            <div class="card-body">
                                <table class="table">

                                                           @if(session('message'))

                                                           <p class="alert alert-primary">
                                                           {{session('message')}}
                                                           </p>
                                                            @endif
                                                            <br>


                                    <thead class="thead-dark">

                                        <tr>
                                            <th>Sr.no</th>
                                            <th>Reg no</th>
                                            <th>Name</th>
                                            
                                            <th>Course</th>
                                            <th>Franchise Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                              @foreach($data as $show)
                                    <tbody>
                                        <tr>
                                            
                                           <td>{{$show->id}}</td>
                                           <td>{{$show->regno}}</td>
                                           <td>{{$show->name}}</td>
                                           
                                           <td>{{$show->course}}</td>
                                           <td>{{$show->franchise_name}}</td>


                                        <td>
       
                                           <a href="{{url('addcertificate/'.$show->id)}}"><button  class="btn btn-info">Add Certificate</button></a>

                                        
                                        </tr>
                                       
                                    </tbody>
                                     @endforeach
                                </table>


                            </div>
                        </div>
                    </div>