@extends('layouts.master')
@section('data')
    <div class="col-lg-12">
 <div class="card text-center">
  <br>
    <div class="card-header" style="font-size: 30px;">
     <strong>EDIT STUDENT DATA</strong> 
    </div>
     <center> <div class="card-body card-block">
    <form action="{{url('updatestudent')}}" method="post" class="form-horizontal col-md-6 " enctype="multipart/form-data">

           @if(session('message'))

         <p class = "alert alert-success">
            {{session('message')}}
         </p>
         @endif
         <br>

        {{csrf_field()}}

        <input type="hidden" name="id" value="{{$data->id}}">
        <input type="hidden" name="user_id" value="{{$data->user_id}}">
        <input type="hidden" name="franchise_name" value="{{ Auth::user()->name }}">


    <div class="row form-group ">
    <div class="col col-md-3"><label for="hf-email" class=" form-control-label" style="text-align: left">Name</label></div>
    <div class="col-12 col-md-9"><input type="text" id="hf-email" name="name" placeholder="Enter name..." class="form-control" value="{{$data->name}}"></div>
    </div>

    <div class="row form-group ">
    <div class="col col-md-3"><label for="hf-email" class=" form-control-label"> Fathers Name</label></div>
    <div class="col-12 col-md-9"><input type="text" id="hf-email" name="fathers_name" placeholder="Enter Fathers Name..." class="form-control" value="{{$data->fathers_name}}"></div>
    </div>

    <div class="row form-group ">
    <div class="col col-md-3"><label for="hf-email" class=" form-control-label"> Dob</label></div>
    <div class="col-12 col-md-9"><input type="text" id="hf-email" name="Dob" placeholder="mm/dd/yyyy" class="form-control" value="{{$data->Dob}}"></div>
    </div>

    <div class="row form-group">
    <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Course</label></div>
    <div class="col-12 col-md-9"><input type="text" id="hf-password" name="course" placeholder="Enter Course" class="form-control" value="{{$data->course}}"></div>
    </div>

    <div class="row form-group">
    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Image</label></div>
    <div class="col-12 col-md-9">

        <img src="{{url('/upload/'.$data->image)}}" style="height:150px; width: 150px; border-radius: 100%;"><br>

        <input type="file" id="file-input" name="image" placeholder="" class="form-control-file" value="{{$data->image}}">
    </div>
    </div>

    <div class="row form-group">
    <div class="col col-md-3"><label for="hf-password" class=" form-control-label"> Mobile</label></div>
    <div class="col-12 col-md-9"><input type="text" id="hf-password" name="mobile" placeholder="Enter Mobile Number..." class="form-control" value="{{$data->mobile}}"></div>
    </div>

    <div class="row form-group">
    <div class="col col-md-3"><label for="hf-password" class=" form-control-label"> Email</label></div>
    <div class="col-12 col-md-9"><input type="text" id="hf-password" name="email" placeholder="Enter Your Email..." class="form-control" value="{{$data->email}}"></div>
    </div>

    <div class="row form-group">
    <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Course Fees</label></div>
    <div class="col-12 col-md-9"><input type="text" id="hf-password" name="course_fees" placeholder="Enter Course Fees..." class="form-control" value="{{$data->course_fees}}"></div>
    </div>

    <div class="row form-group">
    <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Submitted Fees</label></div>
    <div class="col-12 col-md-9"><input type="text" id="hf-password" name="submitted_fees" placeholder="Enter Submitted Fees..." class="form-control" value="{{$data->submitted_fees}}"></div>
    </div>

    <div class="row form-group">
    <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Payment Remark</label></div>
    <div class="col-12 col-md-9"><input type="text" id="hf-password" name="payment_remark" placeholder="Give Remark" class="form-control" value="{{$data->payment_remark}}"></div>
    </div>

    <div class="row form-group">
    <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Payment Method</label></div>
    <div class="col-12 col-md-9"><input type="text" id="hf-password" name="payment_method" placeholder="Method" class="form-control" value="{{$data->payment_method}}"></div>
    </div>

    <div class="row form-group">
    <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Registration Date</label></div>
    <div class="col-12 col-md-9"><input type="text" id="hf-password" name="registration_date" placeholder="mm/dd/yyyy" class="form-control" value="{{$data->registration_date}}"></div>
    </div>

</div>
<div class="card-footer">
    <button type="submit" class="btn btn-primary btn-sm">
    submit
    </button>
    <button type="reset" class="btn btn-danger btn-sm">
    <i class="fa fa-ban"></i> Reset
    </button></center>
</div>
    </form>
</div>
@endsection