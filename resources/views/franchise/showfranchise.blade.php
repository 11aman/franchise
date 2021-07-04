@extends('layouts.master')

@section('data')


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		label{
			font-weight: bold;
			margin:0;
			padding: 0.2rem;
		}
		
	</style>
</head>
<body>

	<center> <button><a href="{{url('/view')}}"><i class="fa fa-hand-point-left"></i>Back</a></button></center>

	<center>
		<table border="5px">
           
           <tr>
           	<th>Franchise Name</th>
           	<th>Franchise Code</th>
           	<th>Franchise Password</th>
           	<th>User Id</th>
           	<th>Register No.</th>
           	<th>Contact Person Name</th>
           	<th>Number</th>
           	<th>Address</th>
           	<th>Account Number</th>
           	<th>Ifsc Code</th>
           	<th>Account Holder Name</th>
           	<th>Bank Name</th>
           </tr>
            
             <tr>
               <td>{{$data->franchise_name}}</td>
               <td>{{$data->franchise_code}}</td>
               <td>{{$data->franchise_password}}</td>
               <td>{{$data->user_id}}</td>
               <td>{{$data->register_no}}</td>
               <td>{{$data->contact_person_name}}</td>
               <td>{{$data->number}}</td>
               <td>{{$data->address}}</td>
               <td>{{$data->account_number}}</td>
               <td>{{$data->ifsc_code}}</td>
               <td>{{$data->account_holder_name}}</td>
               <td>{{$data->bank_name}}</td>
              </tr>


		</table>
	</center>

</body>
</html>

@endsection