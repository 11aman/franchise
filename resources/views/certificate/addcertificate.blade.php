@extends('layouts.master')
@section('data')
    <div class="col-lg-12">
 <div class="card text-center">
  <br>
    <div class="card-header" style="font-size: 30px;">
     <strong>ADD CERTIFICATE</strong> 
    </div>
     <center> <div class="card-body card-block">
    <form action="{{url('updatecertificate')}}" method="POST" class="form-horizontal col-md-6 " enctype="multipart/form-data">

           @if(session('message'))

         <p class = "alert alert-success">
            {{session('message')}}
         </p>
         @endif
         <br>

        {{csrf_field()}}

        <input type="hidden" name="id" value="{{$data->id}}">
        


    <div class="row form-group ">
    <div class="col col-md-3"><label for="hf-email" class=" form-control-label" style="text-align: left">Name</label></div>
    <div class="col-12 col-md-9"><input type="text" id="hf-email" name="name" placeholder="Enter name..." class="form-control" value="{{$data->name}}"></div>
    </div>

    <div class="row form-group ">
    <div class="col col-md-3"><label for="hf-email" class=" form-control-label">Regno</label></div>
    <div class="col-12 col-md-9"><input type="text" id="hf-email" name="regno" placeholder="Enter regno" class="form-control" value="{{$data->regno}}"></div>
    </div>

    <div class="row form-group ">
    <div class="col col-md-3"><label for="hf-email" class=" form-control-label">certificate</label></div>
    <div class="col-12 col-md-9"><input type="file" id="hf-email" name="certificate"  class="form-control"></div>
    </div>

    
</div>  

</div>
<div class="card-footer">
    <button type="submit" class="btn btn-primary btn-sm">
    add certificate
    </button>
    </center>
</div>
    </form>
</div>
@endsection