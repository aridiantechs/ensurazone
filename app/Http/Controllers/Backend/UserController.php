<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = User::whereHas(
            'roles', function($q){
                $q->where('name','<>','superadmin');
            }
        )->with('roles')->get();
        $roles=Role::where('name','<>','superadmin')->get();
        /* dd($user[0]->roles[0]->name); */
        return view('backend.user.list',compact('user','roles'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $roles=Role::where('name','<>','superadmin')->get();
        return view('backend.user.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* dd($request->all()); */
        $validator = Validator::make($request->all(),[
            "role_id"    => "required|array",
            "role_id.*"  => "required|integer",
            'name'  => 'required|string',
            'email' => 'required|string',
            'password'  => 'required|string',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
            /* return 'error'; */
        }

        $user = new User;
        $user->name=$request->name;
        $user->email=$request->email;
        if ($request->has('password')) {
			$user->password =  Hash::make($request->password);
		}
        $user->save();

        foreach ($request->role_id as $key => $value) 
        {
            $role=Role::where('id',$value)->first();
            $user->assignRole($role->name);
        }
        
        return redirect()->back()->with("status", "User has been Created.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function assignRole(Request $request)
    {
        $user=User::findOrFail($request->user_id);
        if ($user) {
            $role=Role::where('id',$request->role_id)->first();
            if ($role) {
                $user->removeRole($user->roles[0]->name);
                $user->assignRole($role->name);
                return redirect()->back()->with("status", "Role has been Updated.");
            }
        }

    }

    public function updateStatus(Request $request)
    {
        /* dd($request->all()); */
        $user=User::findOrFail($request->user_id);
        $user->status=$request->status;
        $user->save();
        return redirect()->back()->with("status", "Status Updated.");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user= User::findOrFail($id);
        $roles=Role::where('name','<>','superadmin')->get();
        return view('backend.user.create',compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        /* dd($request->all()); */
        $validator = Validator::make($request->all(),[
            "role_id"    => "required|array",
            "role_id.*"  => "required|integer",
            'name'  => 'required|string',
            'email' => 'required|string',
            'password'  => 'string|nullable',
        ]);
        
        if ($validator->fails()) {
            return $validator->errors();
            /* return redirect()->back()
                        ->withErrors($validator)
                        ->withInput(); */
            /* return 'error'; */
        }

        $user =User::findOrFail($id);
        $user->name=$request->name;
        $user->email=$request->email;
        if ($request->has('password')) {
			$user->password =  Hash::make($request->password);
		}
        $user->save();

        if ($request->has('role_id')) {
            $user->roles()->detach();
            foreach ($request->role_id as $key => $value) 
            {
                $role=Role::where('id',$value)->first();
                $user->assignRole($role->name);
            }
        }
        
        return redirect()->back()->with("status", "User has been Updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::findOrFail($id);
        $user->delete();
        return redirect()->back();
    }
}
