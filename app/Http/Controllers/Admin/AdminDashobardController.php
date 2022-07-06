<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashobardController extends Controller
{

    public function index(){
        $users = User::orderBy('id')->paginate(10);

        return view('admin.index',compact('users'));
    }

}
