<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserListController extends Controller
{    
    public function index(Request $request) {
        $users =User::all();

        if ($request->has('view_deleted')) {
            $users = User::onlyTrashed()
                ->get();
        } else {
            $users = User::get();
        }
        $users =User::orderBy('created_at','desc')->simplepaginate(5);
        return view('users.index', compact('users'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show form for creating user
     * 
     * @return \Illuminate\Http\Response
     */
    public function create() 
    {
        return view('users.create');
    }

    /**
     * Store a newly created user
     * 
     * @param User $user
     * @param StoreUserRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function store(User $users, StoreUserRequest $request) 
    {
        $this->validate($request,
        [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'mobile_number' => ['required','varchar', 'min:14'],
        ]);
        User::create($request->all());

        return redirect()->route('users.index')
            ->withSuccess(__('User created successfully.'));
    }

    /**
     * Show user data
     * 
     * @param User $users
     * 
     * @return \Illuminate\Http\Response
     */
    public function show(User $users) 
    {
        return view('users.show', [
            'user' => $users
        ]);
    }

    /**
     * Edit user data
     * 
     * @param User $users
     * 
     * @return \Illuminate\Http\Response
     */
    public function edit(User $users) 
    {
        return view('users.edit', [
            'user' => $users
        ]);
    }

    /**
     * Update user data
     * 
     * @param User $users
     * @param UpdateUserRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function update(User $users, UpdateUserRequest $request) 
    {
        $users = User::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->mobile_number = $request->mobile_number;
       
        $users->save();
        return redirect()->route('users.index')
            ->withSuccess(__('User updated successfully.'));
    }

    /**
     * Delete user data
     * 
     * @param User $users
     * 
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $users) 
    {
        $users->delete();

        return redirect()->route('users.index')
            ->withSuccess(__('User deleted successfully.'));
    }

    /**
     *  Restore user data
     * 
     * @param User $users
     * 
     * @return \Illuminate\Http\Response
     */
    public function restore($id) 
    {
        User::withTrashed()->find($id)->restore();
        return redirect()->route('users.index', ['status' => 'archived'])
            ->withSuccess(__('User restored successfully.'));
    }

    /**
     * Force delete user data
     * 
     * @param User $users
     * 
     * @return \Illuminate\Http\Response
     */
    public function forceDelete($id) 
    {
        User::where('id', $id)->withTrashed()->forceDelete();

        return redirect()->route('users.index', ['status' => 'archived'])
            ->withSuccess(__('User force deleted successfully.'));
    }

    /**
     * Restore all archived users
     * 
     * @param User $users
     * 
     * @return \Illuminate\Http\Response
     */
    public function restoreAll() 
    {
        User::onlyTrashed()->restore();
        
        return redirect()->back();
    }

}