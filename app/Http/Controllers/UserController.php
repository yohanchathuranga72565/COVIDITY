<?php

namespace App\Http\Controllers;
use App\User;
use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('role:user',['except' => ['register','registerCreate']]);
        $this->middleware('role:admin|phi|user',['only' => ['register','registerCreate']]);
    }

    public function index()
    {
        return view('user.index');
    }

    public function register()
    {
        return view('user.register');
    }

    public function registerCreate(Request $data){
        $data->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'address' => ['required', 'string'],
            'dob' => ['date'],
            'pno' => ['regex:/^(?:0|94|\+94)?(?:(?P<area>11|21|23|24|25|26|27|31|32|33|34|35|36|37|38|41|45|47|51|52|54|55|57|63|65|66|67|81|912)(?P<land_carrier>0|2|3|4|5|7|9)|7(?P<mobile_carrier>0|1|2|4|5|6|7|8)\d)\d{6}$/']
        ]);

        $user =  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'address' => $data['address'],
            'gender' => $data['gender'],
            'dob' => $data['dob'],
            'phone_number' => $data['pno'],
            'password' => Hash::make($data['password']),
        ]);

        $user->attachRole('user');
        return redirect()->route('phi.showAllUsers');
    }

    public function viewProfile($id){
        $user = User::find($id);
        return view('user.profileDetails')->with(['user'=>$user]);
    }

    public function editProfile(Request $data,$id){
        $data->validate([
            'name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string'],
            'dob' => ['date'],
            'pno' => ['regex:/^(?:0|94|\+94)?(?:(?P<area>11|21|23|24|25|26|27|31|32|33|34|35|36|37|38|41|45|47|51|52|54|55|57|63|65|66|67|81|912)(?P<land_carrier>0|2|3|4|5|7|9)|7(?P<mobile_carrier>0|1|2|4|5|6|7|8)\d)\d{6}$/']
        ]);
        $user = User::where('id',$id)->update([
            'name' => $data->name,
            'address' => $data->address,
            'dob' => $data->dob,
            'phone_number' => $data->pno   
        ]);
        return redirect()->back()->with('success','Profile Updated.');
        // return $user;
    }

}
