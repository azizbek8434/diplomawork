<?php

namespace App\Http\Controllers;

use App\Link;
use App\User;
use App\Slider;
use App\Message;
use App\Complaint;
use App\ComplaintType;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
    $links = Link::all();
    $sliders = Slider::all();
    $solved_complaints_count = Complaint::status()->get()->count();
    $complaint = Complaint::all();
    $complaint_counts = $complaint->count();
    $complaints = $complaint->where('status', '1')->random(10);
    $data = [
    'complaint_counts' => $complaint_counts,
    'solved_complaints_persentage' =>($complaint_counts * $solved_complaints_count)/100,
    'users_count' => User::all()->count(),
    'complaint_types' => ComplaintType::all()->count()
    ];

    return view('front.layouts.master', compact('links', 'sliders','data', 'complaints'));
    }




    public function message(Request $request){
        
        $this->validate($request,
        [
            'full_name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $input = $request->except('_token');
        $message = Message::create($input);
        return Response()->json(['msg'=>'OK']);
    }
}