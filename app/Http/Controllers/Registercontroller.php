<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Facades\Agent;
use Validator;
use App\Models\Register;
use App\Models\Details;
use App\Models\Address;
use Session;
use Browser;

class Registercontroller extends Controller
{

  

     public function index(Request $request)
    {
      
      $ip=$request->ip();
      $useragent=request()->userAgent();
      $device=Browser::deviceType();
      $browser=Browser::browserName();  
      


     Details::create([
            'ip'          => $ip,
            'useragent'   => $useragent,
            'device'      => $device,
            'browser'     => $browser,
           
        ]);

      return view('firstform');
      // dd(123);
    }
     public function last(Request $request)
    {
      // dd(1236);
      return view('third');
    }
     public function store(Request $request)
    {
    	// dd($request->all());
        $validator = Validator::make($request->all(), [
           'fname'         => 'required',
           'lname'         => 'required',
           'lstDobDay' => 'required|integer|',
           'lstDobMonth' => 'required|integer',
           'lstDobYear' => 'required|integer',
           'email' => 'required|email|max:255|unique:registertable,email',
           'phone' => 'required|unique:registertable,phone|integer'
        ]);

         if($validator->fails())
         {
                return back()->with('error_reg',$validator->messages());
         }

           $dob=$request->lstDobDay."/".$request->lstDobMonth."/".$request->lstDobYear;
           // dd($dob);
        Register::create([
            'fname'      => $request->fname,
            'lname'       => $request->lname,
            'dob'       => $dob,
            'email'    => $request->email,
            'phone'   => $request->phone,
        ]);
        // return view('second');
          $name=$request->fname;
        return View("second", compact('name'));
        // return View("second", compact($request->fname));
        // return view('second', compact('$request->fname'));
        // return back()->with('success_reg','Added Successfully');

    }
     public function storeaddress(Request $request)
    {
      // dd($request->all());
        $address1=$request->add11." ".$request->add12." ".$request->add13;
        // dd($address,$request->fname);

       Address::create([
            'name'      => $request->fname,
            'address'       =>$address1,
           
        ]);
       if($request->add21!=null||$request->add22!=null||$request->add23)
       {
         $address2=$request->add21." ".$request->add22." ".$request->add23;
       

       Address::create([
            'name'      => $request->fname,
            'address'       =>$address2,
           
        ]);
       }
         if($request->add31!=null||$request->add32!=null||$request->add33)
       {
         $address3=$request->add31." ".$request->add32." ".$request->add33;
        // dd($address,$request->fname);

       Address::create([
            'name'      => $request->fname,
            'address'       =>$address2,
           
        ]);
       }
       return view('third');
    }
    
}
