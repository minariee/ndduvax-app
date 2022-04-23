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
        $path = $request->file('proof_of_vaccination')->store('records');
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'mobile_number' => $request->mobile_number,
            'occupation' => $request->occupation,
            'proof_of_vaccination' => $path,
            'gender' => $request->gender,
            'vaccine_brand' => VaccineType::find($request->vaccine_brand),
            'vaccine_type' => $request->vaccine_type,
            'latest_dosage_date' => $request->latest_dosage_date,
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
            'name' => $data['name'],
            'email' => $data['email'],
            'mobile_number' => $data['mobile_number'],
            'password' => Hash::make($data['password']),
        ]);

        $user->account()->create([
            'occupation' => $data['occupation'],
            'name' => $data['name'],
            'gender' => $data['gender'],
        ]);

        $vaccine = new Vaccine([
            'vaccine_type' => $data['vaccine_type'],
            'proof_of_vaccination' => $data['proof_of_vaccination'],
            'vaccine_brand' => $data['vaccine_brand']->brand_name,
            'current_dose' => $data['vaccine_brand']->dose,
            'latest_dosage_date' => $data['latest_dosage_date'],
        ]);

        $user->assignRole($userRole);
        $user->account->vaccines()->save($vaccine);

        return $user;
    }
}
