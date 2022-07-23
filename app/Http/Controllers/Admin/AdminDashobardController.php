<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use PDF;

class AdminDashobardController extends Controller
{

    public function index()
    {
        $users = User::orderBy('name')->with('workshop','session')->paginate(10);

        return view('admin.index', compact('users'));
    }

    public function savePDF()
    {
        $registrants = User::orderBy('name')->get();

        $pdf = PDF::loadView('admin.registrants', compact('registrants'));

        return $pdf->download('registrants.pdf');
    }
}
