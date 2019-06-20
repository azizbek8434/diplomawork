<?php

namespace App\Http\Controllers;

use App\Region;
use App\Complaint;
use App\ComplaintType;
use App\NeighborhoodCitizen;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        if($user->roles[0]->id == 1){
            $complaints = Complaint::orderBy('created_at', 'DESC')->get();
        }else{
            $complaints = Complaint::where('region_id', $user->region->id)->orderBy('created_at', 'DESC')->get();
        }
        return view('admin.complaints.index', compact('complaints'));
    }

    public function showComplaintForm()
    {
        $user = auth()->user();
        if($user->roles[0]->id == 1){
            $regions = Region::get();
            $neighborhoods = [];
        }else{
            $regions = Region::where('id', $user->region->id)->get();
            $neighborhoods = NeighborhoodCitizen::with('region')->where('region_id', $user->region->id)->get();
        }
        $suptypes = ComplaintType::parents()->get();
        return view('admin.complaints.add', compact('suptypes','neighborhoods','regions','user'));
    }

    public function getneighborhood(){
        $id=$_REQUEST['id'];
        $neighborhoods = NeighborhoodCitizen::with('region')->where('region_id', $id)->get();
        echo "<option value=''>Танланг:</option>";
        foreach ($neighborhoods as $neighborhood)
        {
            echo "<option value=".$neighborhood->id.">".$neighborhood->name."</option>";
        }
    }

    public function getsubtype(){
        $id = $_REQUEST['id'];
        $subtypes = ComplaintType::subtypes($id)->get();
        echo "<option value=''>Танланг:</option>";
        foreach ($subtypes as $subtype)
        {
            echo "<option value=".$subtype->id.">".$subtype->name."</option>";
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'complaint_type_id' => 'required',
            'region_id' => 'required',
            'neighborhood_citizen_id' => 'required',
            'text' => 'required',
            'sender_full_name' => 'required',
            'sender_phone' => 'required',
            'sender_email' => 'required|email|unique:complaints,sender_email',
        ]);
        $input = $request->all();
        if(array_key_exists('status', $input)){
            $input['status'] = 1;
        }
        $complaint = Complaint::create($input);
        return redirect()->route('complaints.index')->with('success', 'Муаммо муваффақиятли яратилди.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}