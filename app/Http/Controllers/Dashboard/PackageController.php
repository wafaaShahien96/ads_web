<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\PackageRequest;
use App\Http\Controllers\Controller;
use App\Models\Package;

class PackageController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = Package::all();
        return view('dashboard.package.index',compact('packages'));

    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.package.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PackageRequest $request)
    {
        try{
            // dd($request);
        DB::beginTransaction();                  
                $package_data = Package::create($request->except(['_token']));
        DB::commit();
            return  redirect("admin/package/")->with('success','package has been added successfuly');
        }
        catch (\Throwable $th)
        {
            // delete partner if an error arises and return server error
            dd($th);
            DB::rollBack();
            //log error///??
            // Log::error(['article store error'=>$th]);
            /////////////??
            return abort(500);
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $package = Package::findOrFail($id);
        return view('dashboard.package.edit',compact('package')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PackageRequest $request, $id)
    {
        try{
            DB::beginTransaction();
                $package = package::find($id);
                $package_data=Package::update($request->except(['_token']));
                DB::commit();
            return redirect("admin/package")->with('success','package has updated successfuly');  
        }
         catch (\Throwable $th)
        {
            // delete artice if an error arises and return server error
            DB::rollBack();
            //log error///
            return abort(500);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $package = package::find($id); 
        $package->delete();
            return redirect('admin/package/')->with('success','package deleted successfully ');
    }
}