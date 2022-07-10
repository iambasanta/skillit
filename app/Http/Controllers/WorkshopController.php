<?php

namespace App\Http\Controllers;

use App\Models\Workshop;
use Illuminate\Http\Request;

class WorkshopController extends Controller
{
    public function index(){
        $workshops = Workshop::with('users')->latest()->get();

        return view('workshops',compact('workshops'));
    }
}
