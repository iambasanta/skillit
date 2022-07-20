<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Session\StoreSessionRequest;
use App\Http\Requests\Session\UpdateSessionRequest;
use App\Models\Session;
use Illuminate\Http\Request;
use PDF;

class AdminSessionController extends Controller
{
    public function index()
    {
        $sessions = Session::latest()->paginate(10);

        return view('admin.sessions.index', compact('sessions'));
    }

    public function create()
    {
        return view('admin.sessions.create');
    }

    public function store(StoreSessionRequest $request)
    {
        Session::create($request->validated());

        return redirect()->route('admin.sessions.index')->with('success', 'Session created successfully!');
    }

    public function show(Session $session){
        $registrants = $session->users()->paginate(10);

        return view('admin.sessions.show',compact('session','registrants'));
    }

    public function edit(Session $session)
    {

        return view('admin.sessions.edit', compact('session'));
    }

    public function update(UpdateSessionRequest $request, Session $session)
    {
        $session->update($request->validated());

        return redirect()->route('admin.sessions.index')->with('success', 'Session updated successfully!');
    }

    public function destroy(Session $session)
    {
        $session->delete();

        return redirect()->route('admin.sessions.index')->with('success', 'Session deleted successfully!');
    }

    public function savePDF(Session $session){
        $registrants = $session->users()->get();

        $pdf = PDF::loadView('admin.sessions.registrants',compact('session','registrants'));

        return $pdf->download($session->title.'.pdf');
    }
}
