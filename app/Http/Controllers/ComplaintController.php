<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComplaintRequest;
use App\Http\Requests\UpdateComplaintRequest;
use App\Models\Complaint;
use Symfony\Contracts\Service\Attribute\Required;

class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $complaints = Complaint::paginate(15);

        return view('complaint.index', [
            'complaints' => $complaints
        ]);

        // return view('complaint.index', compact('complaints'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComplaintRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Complaint $complaint)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Complaint $complaint)
    {
        //dd(); //die n dump
        return view('complaint.edit', [
            'complaint' => $complaint
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComplaintRequest $request, Complaint $complaint)
    {
       // dd($request->all()); cara debug

        //1.validate data yg nk update
        $request->validate([
            'title' => ['required','max:100'],
            'description' => ['required']

        ]);

        //2. update data

        $complaint->update([
            'title' => $request->input('title'),
            'description' => $request->input('description')

        ]);

        //3 . redirect user ke another page

        return back()->with('success','Record update successfully'); //return back page sama
       // return to_route('complaint.index')->with('success','Record update successfully');// return back ke dahboard/muka utama
        //4.


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Complaint $complaint)
    {
        //
    }
}
