<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function UserDelete(){
        $user = auth()->user();
        $user->delete();
        return redirect('login')->with('global', 'Your account has been deleted!');
    
    }
}
