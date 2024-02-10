<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
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

    public function dashboard(){
        return view('dashboard')->with('blood_group_counts',$this->blood_group_counts);
    }
}
