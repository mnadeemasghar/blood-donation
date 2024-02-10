<?php

namespace App\Http\Controllers;

use App\Http\Requests\BloodRequestRequest;
use App\Models\BloodRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BloodRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blood_requests = BloodRequest::where('user_id',Auth::user()->id)->get();
        return view('blood-requests.index')->with('blood_requests',$blood_requests);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blood-requests.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BloodRequestRequest $request)
    {
        $data = $request->except('_token');
        $data['user_id'] = Auth::user()->id;
        BloodRequest::create($data);
        return redirect()->back()->with('success','Blood request created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blood_request = BloodRequest::findOrFail($id);
        return view('blood-requests.edit')->with('blood_request',$blood_request);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->except('_token');
        $blood_request = BloodRequest::findorFail($id);
        $blood_request->update($data);
        return redirect()->back()->with('success','Blood request updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blood_request = BloodRequest::findOrFail($id);
        $blood_request->delete();
        return redirect()->back()->with('success','Blood request deleted successfully');
    }
}
