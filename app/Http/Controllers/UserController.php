<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    function index(){
        
        
        $users = DB::table('users')->paginate();
        // return view('/dashboard'  ,compact('users'));
        return view('admin.index'  ,compact('users'));
  
    }
}