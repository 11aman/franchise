<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\franchise;
use App\user;
use Auth;
use App\student;
use DB;
class FranchiseController extends Controller
{
    public function addfranchise()
    {
    	return view('franchise.add');
    }

    public function savefranchise(Request $request)
    {
    	

        $obj=new user;
    	$obj->name=$request->franchise_name;
    	$obj->email=$request->franchise_code;
    	$obj->password=bcrypt($request->franchise_password);
    	$obj->type=0;
    	$obj->save();

    	$data=new Franchise;
    	$data->user_id=$obj->id;
    	$data->franchise_name=$request->franchise_name;
    	$data->franchise_code=$request->franchise_code;
    	$data->franchise_password=$request->franchise_password;
    	$data->register_no=$request->register_no;
    	$data->contact_person_name=$request->contact_person_name;
    	$data->number=$request->number;
    	$data->address=$request->address;
    	$data->account_number=$request->account_number;
    	$data->ifsc_code=$request->ifsc_code;
    	$data->account_holder_name=$request->account_holder_name;
    	$data->bank_name=$request->bank_name;
            
        $created=$data->save();

        if ($created) {
        	return redirect('add')->with('message','successfully added');
        }
    }

    public function viewfranchise()
    {
    	$data=franchise::all();
    	return view('franchise.viewfranchise',compact('data'));
    }

    public function showfranchise($id)
    {
    	$data=franchise::find($id);
    	return view('franchise.showfranchise',compact('data'));
    }

    public function editfranchise($id)
    {
    	$data=franchise::find($id);
        return view('franchise.edit',compact('data'));
    }

    public function updatefranchise(Request $request)
    {
        franchise::where('id',$request->id)->update([
           'franchise_name'=>$request->franchise_name,
           'franchise_code'=>$request->franchise_code,
           'franchise_password'=>$request->franchise_password,
           'register_no'=>$request->register_no,
           'contact_person_name'=>$request->contact_person_name,
           'number'=>$request->number,
           'address'=>$request->address,
           'account_number'=>$request->account_number,
           'ifsc_code'=>$request->ifsc_code,
           'account_holder_name'=>$request->account_holder_name,
           'bank_name'=>$request->bank_name
        ]);

        user::where('id',$request->user_id)->update([
             'name'=>$request->franchise_name,
             'email'=>$request->franchise_code,
             'password'=>bcrypt($request->franchise_password)
        ]);



        
            return redirect('view')->with('message','Successfully Updated !');

    }

    public function deletefranchise($id)
    {
        $post=franchise::find($id);
        $deleted=$post->delete();
        if ($deleted) 
        {
            return redirect('view')->with('message','post succesfully deleted');
        }
    }

    public function certificate()
    {
        $data = student::all();
        return view('certificate.certificate', compact('data'));
    }

    public function addcertificate($id)
    {
        $data = student::find($id);
        return view('certificate.addcertificate', compact('data'));
    }

    public function updatecertificate(Request $request)
    {
        // dd($request->all());
       if($request->hasfile('certificate'))
       {
        $file = $request->file('certificate');
        $filename = 'certificate' . time() .'.'. $request->certificate->extension();
        $file->move('upload/',$filename);

        $data = student::find($request->id);
        $data->certificate = $filename;
        $updated=$data->save();
        }

        return redirect('certificate')->with('message','updated');
    }

    public function viewcertificate()
    {
        $data = student::all();
        return view('certificate.viewcertificate', compact('data'));
    }

    public function showcertificate($id)
    {

        $show=student::find($id);
        // $filepath = public_path('uploads/')."$show->certificate";
        // //return Response::download($filepath);
        //  dd($filepath);
        return view('certificate.showcertificate',compact('show'));
    }

}

