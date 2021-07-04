@extends('layouts.master')
@section('data')
 <div class="col-lg-12">
 <div class="card text-center">
  <br>
    <div class="card-header" style="background-color: black;color: white;border-radius: 30px; font-size: 30px; ">
     <strong>ADD FRANCHISE DATA</strong> 
    </div>
     <center> <div class="card-body card-block">
    <form action="{{url('/save')}}" method="post" class="form-horizontal col-md-6 " >

           @if(session('message'))

         <p class = "alert alert-success">
            {{session('message')}}
         </p>
         @endif
         <br>

        {{csrf_field()}}


    <div class="row form-group ">
    <div class="col col-md-3"><label for="hf-email" class=" form-control-label" style="text-align: left"> Franchise Name</label></div>
    <div class="col-12 col-md-9"><input type="text" id="hf-email" name="franchise_name" placeholder="Enter Franchise name..." class="form-control"></div>
    </div>

    <div class="row form-group ">
    <div class="col col-md-3"><label for="hf-email" class=" form-control-label"> Franchise Code</label></div>
    <div class="col-12 col-md-9"><input type="text" id="hf-email" name="franchise_code" placeholder="Enter Franchise code..." class="form-control"></div>
    </div>

    <div class="row form-group ">
    <div class="col col-md-3"><label for="hf-email" class=" form-control-label"> Franchise Password</label></div>
    <div class="col-12 col-md-9"><input type="password" id="hf-email" name="franchise_password" placeholder="Enter Franchise password..." class="form-control"></div>
    </div>

    <div class="row form-group">
    <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Register No.</label></div>
    <div class="col-12 col-md-9"><input type="text" id="hf-password" name="register_no" placeholder="Enter Register No..." class="form-control"></div>
    </div>

    <div class="row form-group">
    <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Contact Person Name</label></div>
    <div class="col-12 col-md-9"><input type="text" id="hf-password" name="contact_person_name" placeholder="Enter Franchise Contact Person Name..." class="form-control"></div>
    </div>

    <div class="row form-group">
    <div class="col col-md-3"><label for="hf-password" class=" form-control-label"> Number</label></div>
    <div class="col-12 col-md-9"><input type="text" id="hf-password" name="number" placeholder="Enter Number..." class="form-control"></div>
    </div>

    <div class="row form-group">
    <div class="col col-md-3"><label for="hf-password" class=" form-control-label"> Address</label></div>
    <div class="col-12 col-md-9"><input type="text" id="hf-password" name="address" placeholder="Enter Your Address..." class="form-control"></div>
    </div>

    <div class="row form-group">
    <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Account Number</label></div>
    <div class="col-12 col-md-9"><input type="text" id="hf-password" name="account_number" placeholder="Enter Franchise Account Number..." class="form-control"></div>
    </div>

    <div class="row form-group">
    <div class="col col-md-3"><label for="hf-password" class=" form-control-label">IFSC CODE</label></div>
    <div class="col-12 col-md-9"><input type="text" id="hf-password" name="ifsc_code" placeholder="Enter Ifsc Code..." class="form-control"></div>
    </div>

    <div class="row form-group">
    <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Account Holder Name</label></div>
    <div class="col-12 col-md-9"><input type="text" id="hf-password" name="account_holder_name" placeholder="Enter Account Holder name..." class="form-control"></div>
    </div>

    <div class="row form-group">
    <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Bank Name</label></div>
    <div class="col-12 col-md-9"><input type="text" id="hf-password" name="bank_name" placeholder="Enter Bank Name..." class="form-control"></div>
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