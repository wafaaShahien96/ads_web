<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStateRequest;
use App\Http\Requests\UpdateStateRequest;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\State;
use App\Models\StateTranslation;
use App\Models\City;
use App\Models\CityTranslation;
use DB;

class StateController extends Controller
{
    public function index()
    {
        $states = State::paginate(10);
        return view('dashboard.state.index' ,compact('states'));
    }

    public function getStateList(Request $request)
    {
        $states = State::where("country_id",$request->country_id)
        ->withTranslation()
        ->translatedIn(app()->getLocale())
        ->get();
        return $states;
    }

    public function create()
    {
        return view('dashboard.state.create')->with('countries' ,Country::all());
    }

    public function store( StoreStateRequest $request)
    {
       $state = State::create($request->all());
       return redirect()->route('admin.state.index')->with('success' , 'State has Created Successfully');
    }

    public function edit(State $state)
    {
       return view('dashboard.state.edit' ,compact('state'))->with('countries' ,Country::all());
    }

    public function update(UpdateStateRequest $request ,State $state )
    {
        $state->update($request->all());
        return redirect()->route('admin.state.index')->with('success' , 'State has Updated Successfully');
    }

    public function destroy(State $state)
    {
        $state->delete();
        $state->translations()->delete();
        return back();
        return redirect()->route('admin.state.index');

    }
}
