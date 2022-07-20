<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Workshop\StoreWorkshopRequest;
use App\Http\Requests\Workshop\UpdateWorkshopRequest;
use App\Models\Workshop;
use Illuminate\Http\Request;
use PDF;

class AdminWorkshopController extends Controller
{
    public function index()
    {
        $workshops = Workshop::latest()->paginate(10);

        return view('admin.workshops.index', compact('workshops'));
    }

    public function create()
    {
        return view('admin.workshops.create');
    }

    public function store(StoreWorkshopRequest $request)
    {
        Workshop::create($request->validated());

        return redirect()->route('admin.workshops.index')->with('success', 'Workshop created successfully!');
    }

    public function show(Workshop $workshop){
        $registrants = $workshop->users()->paginate(10);

        return view('admin.workshops.show',compact('workshop','registrants'));
    }

    public function edit(Workshop $workshop)
    {

        return view('admin.workshops.edit', compact('workshop'));
    }

    public function update(UpdateWorkshopRequest $request, Workshop $workshop)
    {
        $workshop->update($request->validated());

        return redirect()->route('admin.workshops.index')->with('success', 'Workshop updated successfully!');
    }

    public function destroy(Workshop $workshop)
    {
        $workshop->delete();

        return redirect()->route('admin.workshops.index')->with('success', 'Workshop deleted successfully!');
    }

    public function savePDF(Workshop $workshop){
        $registrants = $workshop->users()->get();

        $pdf = PDF::loadView('admin.workshops.registrants',compact('workshop','registrants'));

        return $pdf->download($workshop->title.'.pdf');
    }
}
