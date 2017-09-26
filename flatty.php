<?php

namespace App\Http\Controllers;

use \App\Http\Requests\validate;
use  \App\user;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use \App\Mylib\Myclass;
//use \App\Http\Providers\saifprovider;
use DB;
use App;
//use Illuminate\Http\Requests\validate;
class flatty extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$id)
    {
        echo "WELCOME TO  ".ucfirst($request->path());
     echo $id;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contents.signup');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validate $request)
    {
          $savedata=new user;
          $savedata=DB::table('users')->insert(['name'=>$request->UserName,'password'=>$request->UserPassword,'email'=>$request->email,'country'=>$request->country,'date_of_birth'=>$request->DateOfBirth]);
          session()->push('name',$request->UserName);
           session()->flash('message','Welcome '.ucfirst($request->UserName).' To INTERNO  We Hope We Serve You Best' );
           return redirect('/');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
echo "hello ".$id ;
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $value=Auth::user();
        return view('contents.edit',compact('value'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     
     $user=user::find($id);
     if($user==true)
     {
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->country=$request->country;
        $user->dateofbirth=$request->dateofbirth;
        $user->phone=$request->phone;
        if($user->save())
        {
            session()->flash('message','Successfully Updated The Data');
            return redirect('/home');
        }
        else
        {
            session()->flash('message','Fails To Update Your Account');
            return redirect('/interno/edit');        }

        
     }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    //login form view
    public function login_form()
    {
         return view('contents/login');
    }
  
}
