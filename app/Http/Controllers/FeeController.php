<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\student;
use App\fee;
class FeeController extends Controller
{
    public function addfee()
    {
    	 $data = student::where('franchise_name',Auth::user()->name)->orderby('id','desc')->get();

    	// $data=DB::table('students')->get();
    	// echo $data;

    	return view('fee.addfee',compact('data'));
    }

    public function addfeeform($id)
    {
        $data = student::where('id',$id)->first();
        return view('fee.addfeeform', compact('data'));
    }

    public function addfeesubmit(Request $request)
    {
    	$data = student::where('regno', $request->regno)->first();
    	$data1 = $data->course_fees - $request->remaining_fees;

    	student::where('regno', $request->regno)->update([
        
        'submitted_fees'=> $data1


    	]);

    	$reg = new fee;
    	$reg->regno = $request->regno;
    	$reg->course_fees = $data1;
    	$reg->submitted_fees = $request->submitted_fees;
    	$reg->payment_method = $request->payment_method;
    	$reg->franchise_name = $request->franchise_name;

    	$reg->save();

    	return redirect('addfee')->with('message','done');
    	


    }
}
