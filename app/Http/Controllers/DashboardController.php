<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard(){
        if(Auth::User()->is_role == "2")
        {
            $data['meta_title'] = 'Dashboard do Superadmin';
            $data['getRecord'] = User::find(Auth::user()->id);
            return view('superadmin.dashboard', $data);
        }else if(Auth::User()->is_role == "1")
        {
            $data['meta_title'] = 'Dashboard do Admin';
            $data['getRecord'] = User::find(Auth::user()->id);
            return view('admin.dashboard', $data);
        }else if(Auth::User()->is_role == 0)
        {
            $data['meta_title'] = 'Dashboard do Usuario';
            $data['getRecord'] = User::find(Auth::user()->id);
            return view('user.dashboard', $data);
        }
    }
}
