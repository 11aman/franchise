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
                                
                                <td>
                                 @php
                                   if(!empty($data->certificate))
                                  {
                                    @endphp
                                    <img src="{{url('uploads/'.$data->certificate)}}" style="height: 100px; width: 100px;">
                                    @php}
                                    else
                                    {@endphp
                                       
                                       <p>no certificate found</p>
                                  @php} 
                                  @endphp
                                </td>


                                <table class="table">
                                  
@if(session('message'))

         <p class = "alert alert-success">
            {{session('message')}}
         </p>
         @endif
                                                            <br>

                                    <thead class="thead-dark">


                                        <tr>
                                            <th>Sr.no</th>
                                            <th>Reg no</th>
                                            <th>Name</th>
                                            <th>Certificate</th>
                                            <th>Action</th>
                                           
                                            
                                        </tr>
                                    </thead>
                                              @foreach($data as $show)
                                    <tbody>
                                        <tr>
                                            
                                           <td>{{$show->id}}</td>
                                           <td>{{$show->regno}}</td>
                                           <td>{{$show->name}}</td>
                                           <td>{{$show->certificate}}</td>
                                           <td>
                                             <a href="{{url('/showcertificate/'.$show->id)}}">show certificate</a>
                                           </td>
                                           
                                           
                                        
                                        </tr>
                                       
                                    </tbody>
                                     @endforeach
                                </table>


                            </div>
                        </div>
                    </div>