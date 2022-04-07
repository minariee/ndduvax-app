<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Write code on Method.
     *
     * @return response()
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    /**
     * Write code on Method.
     *
     * @return response()
     */
    public function register(RegistrationRequest $request)
    {
        $path = $request->file('vaccination-record')->store('records');

        $this->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'mobile_number' => $request->mobile_number,
            'occupation' => $request->occupation,
            'proof_of_vaccination' => $path,
        ]);

        return redirect('register')->with('status', 'User successfully registered!');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $userRole = Role::where(['name' => 'user'])->first();
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'mobile_number' => $data['mobile_number'],
            'password' => Hash::make($data['password']),
        ]);

        $user->account()->create([
            'occupation' => $data['occupation'],
            'name' => $data['name'],
            'proof_of_vaccination' => $data['proof_of_vaccination'],
        ]);

        $user->assignRole($userRole);

        return $user;
    }
}
