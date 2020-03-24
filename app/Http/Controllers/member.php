<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


use App\User;

class member extends Controller
{
    //
    public function member_list(){
       $instance= User::all();
       return view('members.member_list',['instance'=> $instance]);
    }

    public function create(){
        return view('members.create');
    }

    public function store(Request $request){
        $this->member_create_form_validation($request);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect('/member_list');
    }

    protected function member_create_form_validation($request){
        $request->validate(
            [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]
        );
    }
}
