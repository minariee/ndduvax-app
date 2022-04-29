<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use App\Models\Vaccine;
use App\Models\VaccineType;
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
        $vaccine_brands = VaccineType::all();

        return view('auth.register', ['vaccine_brands' => $vaccine_brands]);
    }

    /**
     * Write code on Method.
     *
     * @return response()
     */
    public function register(RegistrationRequest $request)
    {
        $data = [
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => $request->password,
            'mobile_number' => $request->mobile_number,
            'occupation' => $request->occupation,
            'gender' => $request->gender,
        ];
        $this->create($data);

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
            'email' => $data['email'],
            'mobile_number' => $data['mobile_number'],
            'password' => Hash::make($data['password']),
        ]);

        $user->account()->create([
            'first_name' => $data['first_name'],
            'middle_name' => $data['middle_name'],
            'last_name' => $data['last_name'],
            'occupation' => $data['occupation'],
            'gender' => $data['gender'],
        ]);
        $user->assignRole($userRole);
        return $user;
    }
}
