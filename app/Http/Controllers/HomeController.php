<?php

namespace App\Http\Controllers;

use App\Region;
use App\Complaint;
use App\ComplaintType;
use Illuminate\Http\Request;

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

    public function list(Region $region)
    {
        $complaint_types = ComplaintType::parents()->get();
        return view('admin.content_type',compact('complaint_types','region'));
    }
    public function type($region, $type = 'aoli')
    {
        $region = Region::where('slug', $region)->first();
        $complaints = Complaint::with('region')
        ->where(function ($query) use ($region) {
            $query->whereRegionId($region->id);
        })->get();
        // dd($complaints);
        return view('admin.content_detail',compact('complaints', 'region'));
    }

    public function test(){
        $type = ComplaintType::find(1)->with('parent')->get();
        
        return $type;
    }

}