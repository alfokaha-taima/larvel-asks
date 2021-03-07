<?php

namespace App\Http\Controllers;
use App\Form;
use Illuminate\Http\Request;

class formController extends Controller
{
    public function index()
    {
        $user = Form::all();
        return view('Form', compact('user'));
    }
    function store(Request $req)
    {

        $validateData = $req->validate([
            'name' => 'required|min:3|alpha_dash',
            'email' => 'required|unique:users|email',
            'mobile' => 'required|min:10|max:13',
           
        ]);
       


        
        $user = new Form();
        $user->name     = $req['name'];
        $user->email    = $req['email'];
        $user->mobile  = $req['mobile'];
        $user->save();
        return redirect('/Form');

    }
}
