<?php

namespace App\Http\Controllers;

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
        return view('admin.dashboard');
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