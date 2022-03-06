<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserListController extends Controller
{    
    public function index() {
        $users =User::all();
        $users =User::orderBy('created_at','desc')->paginate(5);
        return view('users/userList', compact ('users'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('users.create');
    }
    public function store(Request $request) 
    {
        $this->validate($request,
        [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        User::create($request->all());

        return redirect()->route('users.index')
        ->with('success', 'Account created successfully.');
    }
    public function edit($id, Request $request)
    {
        $users = User::find($id);
        return view('users.edit', ['users' => $users]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Users  $user
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $users = User::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;
       
        $users->save();
        return redirect()->route('users.index')
            ->with('success', 'Project updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();

        return redirect()->route('users.index')
            ->with('success', 'Account deleted successfully');
    }
}