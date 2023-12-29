<?php

namespace App\Http\Controllers;

use App\Models\users;
use App\Models\administrator;
use App\Http\Requests\StoreusersRequest;
use App\Http\Requests\UpdateusersRequest;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('users.data')->with([

            'administrator' => administrator::all()

        ]);
    }
    public function listadmin()
    {
        return view('users.formAddUser')->with([

            'administrator' => administrator::all()

        ]);
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
    public function store(StoreusersRequest $request)
    {
       // dd('berhasil kesini');

        $validate = $request->validated();
        $user = new users;
        $user->user = $request->user;
        $user->name = $request->name;
        $user->gender = $request->gender;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->password = $request->Password;
        $user->save();

        return redirect('users')->with('msg','add data User successfully');


    }

    /**
     * Display the specified resource.
     */
    public function show(users $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(users $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateusersRequest $request, users $users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(users $users)
    {
        //
    }
}
