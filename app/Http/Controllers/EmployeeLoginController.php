<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EmployeeLoginController extends Controller
{
    public function index(){

        

        if(!auth('employee')->attempt(['email' => 'ahmedmohamed123@gmail.com' , 'password' =>'password']))
        return "error";
        // $user= User::find(1);

        // Auth::guard('web')->login($user , true);
        request()->session()->regenerate();
        return to_route('my_profile');


    }
}
