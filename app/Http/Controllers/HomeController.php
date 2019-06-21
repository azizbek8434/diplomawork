<?php

namespace App\Http\Controllers;

use App\User;
use App\Region;
use App\Complaint;
use App\ComplaintType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $solved_complaints_count = Complaint::status()->get()->count();
        $complaint_counts = Complaint::all()->count();
        $data = [
        'complaint_counts' => $complaint_counts,
        'solved_complaints_persentage' =>($complaint_counts * $solved_complaints_count)/100,
        'users_count' => User::all()->count(),
        'complaint_types' => ComplaintType::all()->count()
        ];
        return view('admin.dashboard', compact('data'));
    }

    public function chart(){

        $regions = Region::pluck('name')->toArray();
        $count = Region::withCount('complaints')->pluck('complaints_count')->toArray();
        $colors = ["#469990", "#911eb4","#e6194B","#000075","#f032e6","#a9a9a9","#800000","#ffe119", "#fffac8", "#bfef45","#f58231", "#000000", "#aaffc3", "#fabebe", "#ba5850","#6f5850","#469990", "#911eb4","#e6194B"];
        return response([
            "regions" => $regions, 
            "count" => $count,
            "colors" => $colors
        ]);

    }

    public function region(Region $region)
    {
        $complaint_types = ComplaintType::parents()->get()->toArray();
    
        return view('admin.suptypes',compact('complaint_types','region'));
    }

    public function suptype(Region $region, ComplaintType $suptype)
    {   
        $complaint_types = ComplaintType::subtypes($suptype->id)->get()->toArray();
        // dd($complaint_types);
        return view('admin.subtypes',compact('complaint_types', 'region', 'suptype'));
    }

    public function subtype(Region $region, ComplaintType $suptype, $subtype)
    {
        $subtype = ComplaintType::where('slug', $subtype)->first(); 
        if($subtype){
            $complaints = Complaint::with('region','complaintType','neighborhoodCitizen')
            ->where(function ($query) use ($region, $subtype) {
            $query->whereRegionId($region->id)
            ->whereComplaintTypeId($subtype->id);
            })->get();
        }
    
        return view('admin.complaints',compact('complaints', 'region', 'suptype', 'subtype'));
    }
}