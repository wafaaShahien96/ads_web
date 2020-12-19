<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCityRequest;
use App\Http\Requests\UpdateCityRequest;
use Illuminate\Http\Request;
use App\Models\State;
use App\Models\CityTranslation;
use App\Models\City;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::paginate(10);
        return view('dashboard.city.index' ,compact('cities'));
    }

    public function getCityList(Request $request)
    {
        $cities = City::where("state_id",$request->state_id)
        ->withTranslation()
        ->translatedIn(app()->getLocale())
        ->get();
        return $cities;
    }

    public function create()
    {
      return view('dashboard.city.create')->with('states' ,State::all());
    }

    public function store( StoreCityRequest $request)
    {
       $city = City::create($request->all());
       return redirect()->route('admin.city.index')->with('success' , 'City has Created Successfully');
    }

    public function edit(City $city)
    {
       return view('dashboard.city.edit' ,compact('city'))->with('states' ,State::all());
    }

    public function update(UpdateCityRequest $request ,City $city)
    {
        $city->update($request->all());
        return redirect()->route('admin.city.index')->with('success' , 'City has Updated Successfully');
    }

    public function destroy(City $city)
    {
        $city->delete();
        $city->translations()->delete();
        return back()->with('success' , 'City has deleted Successfully');

    }
}
