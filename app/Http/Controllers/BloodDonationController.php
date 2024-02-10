<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class BloodDonationController extends Controller
{
    public $blood_group_counts;

    function __construct()
    {
        $this->blood_group_counts = User::select('blood_type', DB::raw('count(*) as count'))
            ->groupBy('blood_type')
            ->get()
            ->pluck('count', 'blood_type')
            ->toArray();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::paginate(10);
        return view('donations')->with('data',$data)->with('blood_group_counts',$this->blood_group_counts);
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
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function getDonationByBloodType($type)
    {
        $data = User::where('blood_type',$type)->paginate(10);
        return view('donations')->with('type',$type)->with('data',$data)->with('blood_group_counts',$this->blood_group_counts);
    }
}
