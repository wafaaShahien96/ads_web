<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use Auth;

class CommentController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommentRequest $request)
    {
        try{
        DB::beginTransaction();
        $comment_id = $request->id;
        $comment = Comment::create([
            "user_id" => Auth::id(),
            'content' => $request->content,
            "user_id" =>Auth::id(),
            "article_id"=>$comment_id->article->id
            ]);
        DB::commit();
        ///////EDIT URL/////////
            return  redirect("/article".$comment_id->article->id)->with('success');
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CommentRequest $request, $id)
    {
        try{
            DB::beginTransaction();
            $comment = Comment::find($id);
            $comment->update($request->all());   
            DB::commit();
                    ///////EDIT URL/////////
            return redirect("comment/")->with('success');  
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
        $comment = Comment::find($id); 
        $article =$comment->article->id;  
        $comment->delete();
                ///////EDIT URL/////////
        return redirect('article/'.$article)->with('success');
    }
}
