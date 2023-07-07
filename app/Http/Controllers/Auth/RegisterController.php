<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(Request $request){
       $validatedDate = $request->validate(
            [
                'name'=>'required',
                'gender'=>'required',
                'email'=>'required|email',
                'contact'=> 'required|numeric|digits:10',
                'dob'=>'required',
                'password'=>'required|confirmed'


            ],[
                'name.required' => 'Please Enter The Name',

                'email.required' => 'Please Enter The Email Address',
                'email.email' => 'Please Enter The valid Address',

                'contact.required' => 'Please Enter The Contact',
                'contact.numeric' => 'Please Enter The Number Only',
                'contact.digits' => 'Please Enter Only 10 digits'

            ]);




        $user = new User;
        $user->name = $request->input('name');
        $user->gender = $request->input('gender');
        $user->email = $request->input('email');
        $user->contact = $request->input('contact');
        $user->dob = $request->input('dob');
        $user->password = Hash::make( $request->input('password'));

        $user->save();

        Auth::login($user);

       return redirect('list');

    }

    public function show()
    {
        $data= User::all();
       return view('auth.list',['users'=>$data]);
    }

    public function viewad()
    {
        $data= User::all();
       return view('auth.admin_view',['users'=>$data]);
    }

    public function delete($id)
    {
        $data= User::find($id);
        $data->delete();
        return redirect('list');
    }
    public function showData($id)
    {

        $data= User::find($id);
        return view('auth.edit',['data'=>$data]);
    }

    public function viewData($id)
    {

        $data= User::where('id',$id)->get();
       return view('auth.admin_view',['users'=>$data]);
    }

    public function update(Request $req)
    {

        $data= User::find($req->id);
        $data->name=$req->name;
        $data->gender=$req->gender;
        $data->dob=$req->dob;

        $data->email=$req->email;
        //$data->password=$req->password;
        $data->contact=$req->contact;
        $data->save();

        return redirect('list');


    }


}


