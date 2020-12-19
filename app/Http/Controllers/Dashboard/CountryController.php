<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCountryRequest;
use App\Http\Requests\UpdateCountryRequest;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\CountryTranslation;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::paginate(10);
        return view('dashboard.country.index' ,compact('countries'));
    }

    public function create()
    {
      return view('dashboard.country.create');
    }

    public function store( StoreCountryRequest $request)
    {
        $country = Country::create($request->all());
        return redirect()->route('admin.country.index')->with('success' , 'Country has Created Successfully');
    }

    public function edit(Country $country)
    {
        return view('dashboard.country.edit' ,compact('country'));
    }

    public function update(UpdateCountryRequest $request ,Country $country)
    {
        $country->update($request->all());
        return redirect()->route('admin.country.index')->with('success' , 'Country has Updated Successfully');
    }

    public function destroy(Country $country)
    {
        $country->translations()->delete();
        $country->delete();
        return back();
        return redirect()->route('admin.country.index');
    }
}
