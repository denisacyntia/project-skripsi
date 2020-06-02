<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\User;

class DashboardController extends Controller
{
    //
    public function dashboard(){
        return view('user.index');
    }

}
