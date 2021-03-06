<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\job_description;

class JobdescController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $job_description = job_description::all();
        return view('admin.jobdesc.jobdescMasterData', compact('job_description'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jobdesc.addJobdesc');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $job_description = new job_description();
        try{
            $job_description->job_description_name = $request->name;
            $job_description->description = $request->description;
            $job_description->save();
        }catch(\Exception $exception){
            return redirect()->route('data-job_description')->with('alert','Terjadi kesalahan, silahkan coba lagi!');
        }
        return redirect()->route('data-job_description')->with('success','Data Telah Masuk');
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
        $job_description = job_description::findOrFail($id);

        return view('admin.jobdesc.editJobdesc', compact('job_description'));
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
        $job_description = job_description::findOrFail($id);
        try{
            $job_description->job_description_name = $request->name;
            $job_description->description = $request->description;
            $job_description->update();
        }catch(\Exception $exception){
            return redirect()->route('data-job_description')->with('alert','Terjadi kesalahan, silahkan coba lagi!');
        }
        return redirect()->route('data-job_description')->with('success','Data Telah Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $job_description = job_description::findOrFail($id);
            $job_description->delete();
        }catch(\Exception $exception){
            return redirect()->route('data-job_description')->with('alert','Terjadi kesalahan, silahkan coba lagi!');
        }
        return redirect()->route('data-job_description')->with('success','Data Telah Terhapus');
    }
}
