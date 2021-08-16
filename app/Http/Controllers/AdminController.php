<?php

namespace App\Http\Controllers;
use App\User;
use App\Role;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin');
    }

    public function index()
    {
        return view('admin.index');
    }

    public function viewProfile($id){
        $admin = User::find($id);
        return view('admin.profileDetails')->with(['admin'=>$admin]);
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

    public function showAllUsers(){
        $users = User::paginate(10);
        return view('phi.showUserProfiles')->with(['users'=>$users]);
    }

    public function deleteUser($id){
        $user = User::where('id',$id)->first();
        $phi = Role:: where('name', 'phi')->first();
        $user->detachRole($phi);
        $user->delete();

        return redirect()->back()->with('success','Account Deleted.');
    }
}
