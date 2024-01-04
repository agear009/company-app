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
    // public function show(administrator $administrator,$id)
     public function show(administrator $administrator)

    {

        // echo $levelUser;
    //     $data =$administrator->find($id);
    //    return view('administrator.formedit')->with([
    //             'id'=> $id,
    //             'levelUser'=> $data->levelUser,
    //             'keterangan'=> $data->keteranga
    //   ]);
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
    public function update(UpdateadministratorRequest $request, administrator $administrator,$id)
    {

         $data =$administrator->find($id);

        $data->levelUser = $request->levelUser;
        $data->keterangan = $request->keterangan;
        $data->save();

        return redirect('administrator')->with('msg','data'.$data->levelUser.'  Level users successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(administrator $administrator,$id)
    {
        $data =$administrator->find($id);
        $data->delete();

        return redirect('administrator')->with('msg',' Delete Level '.$data->levelUser.' successfully');
    }
}
