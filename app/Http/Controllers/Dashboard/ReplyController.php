<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Reply;

class ReplyController extends Controller
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
        $reply_id = $request->id;
        $reply = Reply::create([
            "user_id" => Auth::id(),
            'content' => $request->content,
            "user_id" =>Auth::id(),
            "comment_id"=>$reply_id->comment->id
            ]);
        DB::commit();
        ///////EDIT URL/////////
            return  redirect("/article".$reply_id->comment->article->id)->with('success');
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
            $reply = Reply::find($id);
            $reply->update($request->all());   
            DB::commit();
                    ///////EDIT URL/////////
            return redirect("reply/")->with('success');  
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
        $reply = Reply::find($id); 
        $article =$reply->article->id;  
        $reply->delete();
                ///////EDIT URL/////////
        return redirect('article/'.$article)->with('success');
    }
}
