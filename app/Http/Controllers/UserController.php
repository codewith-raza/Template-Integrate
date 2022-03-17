<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
        $users = User::all();
        return view('user.list', compact('users','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'Name'=>'required',
            'Email'=> 'required',
            'Password' => 'required'

        ]);
 
        $user = new User([
            'name' => $request->get('Name'),
            'email'=> $request->get('Email'),
            'password'=> $request->get('Password')
        ]);
 
        $user->save();
        return redirect('/user')->with('success', 'User has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
        $user = \App\Models\user::findOrFail($id);
        return view('user.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = \App\Models\User::findOrFail($id);
        return view('user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'Name'=>'required',
            'Email'=> 'required',
            'Passowrd' => 'required'
        ]);
 
 
        $user = \App\Models\User::findOrFail($id);
        $user->name = $request->get('Name');
        $user->email = $request->get('Email');
        $user->Password = $request->get('Password');
 
        $user->update();
 
        return redirect('/user')->with('success', 'User  updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = \App\Models\User::findOrFail($id);
        $user->delete();
        return redirect('/user')->with('success', 'User deleted successfully');
    }
   
}
