<?php

namespace App\Http\Controllers;

use App\User;
use App\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:user-list', ['except' => ['profile','uprofile']]);
        $this->middleware('permission:farg-ona-tumani');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::orderBy('id', 'DESC')->paginate(5);
        return view('admin.users.index',compact('data'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.create
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $regions = Region::pluck('name','id')->all();
        $roles = Role::pluck('name','name')->all();
        return view('admin.users.create',compact('roles','regions'));
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
            'name' => 'required',
            'region_id' => 'required|exists:regions,id',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);
        $user->assignRole($request->input('roles'));
        $permission = $user->region->slug;
        $user->givePermissionTo($permission);
        return redirect()->route('users.index')
            ->with('success', 'Фойдаланувчи муваффақиятли яратилди.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        $region = $user->region;
        return view('admin.users.show', compact('user','region'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::with('region')->findOrFail($id);
        $regions = Region::pluck('name','id')->all();
        $userRegion = $user->region()->pluck('id')->all();
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
        return view('admin.users.edit', compact('user', 'roles', 'userRole','regions', 'userRegion'));
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
        $this->validate($request,
        [
            'name' => 'required',
            'region_id' => 'required|exists:regions,id',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);
        $input = $request->all();
       
        
        if(!empty($input['password'])){
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = array_except($input,array('password'));   
        }
        $user = User::findOrFail($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id', $id)->delete();
        $user->assignRole($request->input('roles'));
        $permission = Region::find($request->input('region_id'))->slug;
        $user->syncPermissions($permission);
        return redirect()->route('users.index')
        ->with('success', 'Фойдаланувчи муваффақиятли янгиланди.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('users.index')
            ->with('success', 'Фойдаланувчи муваффақиятли ўчирилди.');
    }

    public function profile(){
        $id = \Auth::user()->id;
        $user = User::with('region')->findOrFail($id);
        $userRegion = $user->region()->pluck('name','id')->all();
        $userRole = $user->roles->pluck('name','name')->all();
        return view('admin.users.profile', compact('user', 'userRole', 'userRegion'));
    }

    public function uprofile(Request $request, $id){
        $this->validate($request,
        [
            'name' => 'required',
            'region_id' => 'required|exists:regions,id',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);
        
        $input = $request->all();
        if(!empty($input['password'])){
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = array_except($input,array('password'));   
        }
        $user = User::findOrFail($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id', $id)->delete();
        $user->assignRole($request->input('roles'));
        return redirect()->route('users.profile')->with('success', 'Фойдаланувчи муваффақиятли янгиланди.');
    }
}