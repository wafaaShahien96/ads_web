<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use App\Models\Article;
use App\Models\Tag;
use App\Models\ArticleTag;
use Auth;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::paginate(5);
        return view('dashboard.article.index',compact('articles'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        return view('dashboard.article.create',compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        try{
        DB::beginTransaction();
        // dd($request);
                $article_data = $request->except(['_token','tags','image']);
                // Save Image
                if (request()->hasFile('image'))
                {
                    $path = $request->image->hashName();
                    $article_img = Image::make($request->image)->encode('jpg');
                    Storage::disk('local')->put('public/images/articles/' . $path, (string)$article_img, 'public');
                    $article_data['image'] = $path;
                }                
                $article = auth()->user()->article()->create($article_data);
                $tags = $request->tags;
                foreach($tags as $tag )
                {
                $tags = ArticleTag::create([
                    "tag_id"=>$tag,
                    "article_id"=>$article->id,   
                ]);    
                }     
                
            DB::commit();
            return  redirect("admin/article/")->with('success','Article has added successfuly');
        }
        catch (\Throwable $th)
        {
            dd($th); 
            // delete artice if an error arises and return server error
            DB::rollBack();
            //log error///??
            // Log::error(['article store error'=>$th]);
            return abort(500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);
        $tags = ArticleTag::where('article_id','=',$id);
        return view('dashboard.article.show',compact('article','tags'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        $tags = Tag::all();
        $articletags= ArticleTag::where('article_id',$id)->pluck('tag_id')->toArray();
        return view('dashboard.article.edit',compact('article','tags','articletags')); 
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, $id)
    {
        try{
            DB::beginTransaction();
                $article = article::find($id);
                $article->update($request->except(['_token','tags']));
                if (request()->hasFile('image'))
                {
                    $path = $request->image->hashName();
                    $article_img = Image::make($request->image)->encode('jpg');
                    Storage::disk('local')->put('public/images/articles/' . $path, (string)$article_img, 'public');
                    $article_data['image'] = $path;
                }   
                ArticleTag::where('article_id','=',$article->id)->forceDelete(); 
                $tags = $request->tags;
                foreach($tags as $tag )
                {
                    $tags = articleTag::create([
                        "tag_id"=>$tag,
                        "article_id"=>$article->id,   
                    ]); 
                } 
                DB::commit();
            return  redirect("admin/article/".$article->id)->with('success','article has updated successfuly');  
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
        $article = Article::find($id); 
        $article->delete();
            return redirect('admin/article/')->with('success','Article deleted successfully ');
    }
}
