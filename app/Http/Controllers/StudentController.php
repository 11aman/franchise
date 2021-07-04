<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\student;
use App\fee;
use DB;
use Auth ;
class StudentController extends Controller
{
    public function addstudent()
    {
    	return view('student.addstudent');
    }

    public function savestudent(Request $request)
    {
    	$file = $request->file('image');
    	// dd($file);
    	// exit;
    	$filename = 'image' . time().'.'.$request->image->extension();
    	// dd($filename);
    	// exit;
    	$file->move('upload/',$filename);
    	// dd($file);
    	

    	$obj = new user;
    	$obj->name = $request->name;
    	$obj->email = $request->email;
    	$obj->password = bcrypt($request->mobile);
    	$obj->type =2;
    	 $obj->save();

    	 $data=new student;
    	 $data->user_id=$obj->id;
         $data->regno=$obj->id;
         $data->name = $request->name;
         $data->fathers_name = $request->fathers_name;
         $data->Dob = $request->Dob;
         $data->course = $request->course;
         $data->image = $filename;
         $data->mobile = $request->mobile;
         $data->email = $request->email;
         $data->franchise_name = $request->franchise_name;
         $data->course_fees = $request->course_fees;
         $data->submitted_fees = $request->submitted_fees;
         $data->payment_remark = $request->payment_remark;
         $data->payment_method = $request->payment_method;
         $data->registration_date = $request->registration_date;


        $is_saved=$data->save();

        $data->save();
        // print_r($data);die;
        // dd($data);
        if($is_saved)
        {
        	$num_padded = sprintf('%04s',$data->id);
        	DB::table('students')
        	->where('id',$data->id)
        	->update(['regno' => "Ape2019".$num_padded]);


        //	dd($data);

           $obj =new fee;
           $obj->regno = "Ape2019".$num_padded;
             $obj->course_fees = $request->course_fees;
           $obj->submitted_fees = $request->submitted_fees;
           $obj->payment_method = $request->payment_method;
           $obj->franchise_name = $request->franchise_name;
           $obj->save();

           return back()->with('success',1);
 
        }


    } 

    public function viewstudent()
    {
    	  $data = student::where('franchise_name',Auth::user()->name)->orderby('id','desc')->get();

    	  return view('student.viewstudent',compact('data'));
    }

    public function editstudent($id)
    {
    	$data = student::find($id);

    	// print_r($data);
    	return view('student.editstudent', compact('data'));
    }

    public function updatestudent(Request $request)
    {
    	// dd($request->all());
    	if($request->hasfile('image'))
    	{
    		$file = $request->file('image');
    		//dd($file);

    		$filename = 'image' . time().'.'.$request->image->extension();
    		// dd($filename);
    	    // exit;

    	    $file->move('upload/',$filename);
    	     dd($file);

    	     student::where('id',$request->id)->update([
              
             'name' =>$request->name,
             'fathers_name' =>$request->fathers_name,
             'Dob'=>$request->Dob,
             'course'=>$request->course,
             'mobile'=>$request->mobile,
             'email'=>$request->email,
             'course_fees'=>$request->course_fees,
             'submitted_fees'=>$request->submitted_fees,
             'payment_remark'=>$request->payment_remark,
             'payment_method'=>$request->payment_method,
             'registration_date'=>$request->registration_date,
             'image'=>$request->image,
             ]);

    	     user::where('id',$request->id)->update([
              
                 'name'=>$request->name,
                 'email'=>$request->email,
                 'password'=>bcrypt($request->password),
             ]);
    	}

    	else
    	{
    		student::where('id',$request->id)->update([
            'name'=>$request->name,
            'fathers_name' =>$request->fathers_name,
             'Dob'=>$request->Dob,
             'course'=>$request->course,
             'mobile'=>$request->mobile,
             'email'=>$request->email,
             'course_fees'=>$request->course_fees,
             'submitted_fees'=>$request->submitted_fees,
             'payment_remark'=>$request->payment_remark,
             'payment_method'=>$request->payment_method,
             'registration_date'=>$request->registration_date,
    		]);

    		user::where('id',$request->user_id)->update([

             'name'=>$request->name,
             'email'=>$request->email,
             'password'=>bcrypt($request->password),   
            ]);

    		fee::where('id',$request->id)->update([
               
               'course_fees'=>$request->course_fees,
            'submitted_fees'=>$request->submitted_fees,
            'payment_method'=>$request->payment_method,
            'franchise_name'=>$request->franchise_name,
    		]);
    	}

    	return redirect('/viewstudent')->with('message','student details updated');
    }

    public function deletestudent($id)
    {
        $post=student::find($id);
        $deleted=$post->delete();
        if ($deleted) 
        {
            return redirect('viewstudent')->with('message','post succesfully deleted');
        }
    }


    public function showcertificate()
    {
       $show = student::where('email',Auth::user()->email)->first();
       // $filepath = public_path('uploads/')."$show->certificate";
       // // dd($filepath);
       //  return response()->download($filepath);
       return view('certificate.showcertificate',compact('show'));
    }
    
    public function myprofile()
    {
        $data=student::where('email',Auth::user()->email)->first();
        //dd($data);
        return view('student.viewprofile',compact('data'));
    }

    


}
