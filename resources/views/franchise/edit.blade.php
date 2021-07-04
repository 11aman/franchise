@extends('layouts.master')
@section('data')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="{{url('/update')}}">

		@if(session('message'))

		 <p class = "alert alert-success">
		 	{{session('message')}}
		 </p>
		 @endif
		 <br>

		{{csrf_field()}}

		<input type="hidden" name="id" value="{{$data->id}}">
		<input type="hidden" name="user_id" value="{{$data->user_id}}">

		<label>Franchise Name</label>
		<input type="text" name="franchise_name" value="{{$data->franchise_name}}"><br><br>
		<label>Franchise Code</label>
		<input type="text" name="franchise_code" value="{{$data->franchise_code}}"><br><br>
		<label>Franchise Password</label>
		<input type="Password" name="franchise_password" value="{{$data->franchise_password}}"><br><br>
		<label>Register No.</label>
		<input type="text" name="register_no" value="{{$data->register_no}}"><br><br>
		<label>Contact Person Name</label>
		<input type="text" name="contact_person_name" value="{{$data->contact_person_name}}"><br><br>
		<label>Number</label>
		<input type="text" name="number" value="{{$data->number}}"><br><br>
		<label>Address</label>
		<input type="text" name="address" value="{{$data->address}}"><br><br>
		<label>Account No.</label>
		<input type="text" name="account_number" value="{{$data->account_number}}"><br><br>
		<label>IFSC Code</label>
		<input type="text" name="ifsc_code" value="{{$data->ifsc_code}}"><br><br>
		<label>Account Holder Name</label>
		<input type="text" name="account_holder_name" value="{{$data->account_holder_name}}"><br><br>
		<label>Bank Name</label>
		<input type="text" name="bank_name" value="{{$data->bank_name}}"><br><br>

		<button type="submit" class="btn btn-primary btn-sm">
          Update
        </button>
    </form>

</body>
</html>
@endsection