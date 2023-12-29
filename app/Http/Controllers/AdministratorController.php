<?php

namespace App\Http\Controllers;

use App\Models\administrator;
use App\Http\Requests\StoreadministratorRequest;
use App\Http\Requests\UpdateadministratorRequest;

class AdministratorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('administrator.data')->with([

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
    public function store(StoreadministratorRequest $request)
    {
        $validate =$request->validated();
        $administrators = new administrator;
        $administrators->levelUser = $request->levelUser;
        $administrators->keterangan = $request->keterangan;
        $administrators->save();

        return redirect('administrator')->with('msg','add data  Level users successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(administrator $administrator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(administrator $administrator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateadministratorRequest $request, administrator $administrator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(administrator $administrator)
    {
        //
    }
}
