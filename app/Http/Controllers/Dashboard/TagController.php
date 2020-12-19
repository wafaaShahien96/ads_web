<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Requests\TagRequest;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    public function index()
    {
         $tags = Tag::latest()->paginate(5);
    return view('dashboard.tag.index', compact('tags'));
    }

   
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.tag.create');
    }
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagRequest $request)
    {
        try {  
            DB::beginTransaction();
            $tag = Tag::create($request->all()); 
            DB::commit();
            return redirect()->route('admin.tag.index')->with(['success', 'tag Added Successfully']);
        } catch (\Exception $ex) {   
            DB::rollBack();
            // $exeption = $ex->getMessage();
            // Api\ApplicationEventslogWritter::write($exeption , 'Error');
            return redirect()->route('admin.tag.index')->with(['success', 'There Are Wrong, Try Agin']);
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
        $tag = Tag::findOrFail($id);
        return view('dashboard.tag.edit',compact('tag'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TagRequest $request, tag $tag)
    {
        try {

            $tag->update(request()->all());
            if(!$tag)
            {
                return redirect()->route('admin.tag.index')->with(['success', 'Tag Not Found']);
            }
            
            $tag->update($data);

            return redirect()->route('admin.tag.index')->with(['success', 'tag Updated Successfully']);
        } catch (\Exception $ex) {
            return redirect()->route('admin.tag.index')->with(['success', 'There Are Wrong, Try Agin']);
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
        try {
            $tag = Tag::findOrFail($id);
            if(!$tag)
            {
                return redirect()->route('admin.tag.index')->with(['success', 'The tag Not Found']);
            }

            $tag->translations()->delete();
            $tag->delete();
            return redirect()->route('admin.tag.index')->with(['success', 'tag Deleted Successfully']);
        } catch (\Exception $ex) {
            return redirect()->route('admin.tag.index')->with(['success', 'There Are Wrong, Try Agin']);
        }  
    }
}
