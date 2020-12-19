<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Requests\PartnerRequest;
use App\Models\Partner;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partner::paginate(5);
        return view('dashboard.partner.index',compact('partners'));

    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.partner.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PartnerRequest $request)
    {
        try{
        DB::beginTransaction();                  
                $partner_data = $request->except(['_token']);
    // Save image
                if (request()->hasFile('logo'))
                {
                    $path = $request->logo->hashName();
                    $partner_img = Image::make($request->logo)->encode('jpg');
                    Storage::disk('local')->put('public/images/partners/' . $path, (string)$partner_img, 'public');
                    $partner_data['logo'] = $path;
                }        
                $partner = Partner::create($partner_data);        
            DB::commit();
            return  redirect("admin/partner/")->with('success','partner has added successfuly');
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
        $partner = Partner::findOrFail($id);
        return view('dashboard.partner.edit',compact('partner')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PartnerRequest $request, $id)
    {
        try{
            DB::beginTransaction();
                $partner = partner::find($id);
                $partner_data=$request->except(['_token']);
                if (request()->hasFile('logo'))
                {
                    $path = $request->logo->hashName();
                    $partner_img = Image::make($request->logo)->encode('jpg');
                    Storage::disk('local')->put('public/images/partners/' . $path, (string)$partner_img, 'public');
                    $partner_data['logo'] = $path;
                    $partner->update($partner_data);
                }               
                DB::commit();
            return redirect("admin/partner")->with('success','partner has updated successfuly');  
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
        $partner = partner::find($id); 
        $partner->delete();
            return redirect('admin/partner/')->with('success','partner deleted successfully ');
    }
}
