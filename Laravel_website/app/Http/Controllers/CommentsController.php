<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
    }
    

    
    public function store(Request $request, $id)
    {
        if(!auth()->check())
          return redirect("/login")->with('error', 'Ви навіть не залогінелись!'); 

        $this -> validate($request, [
            'comment-add' => 'max:400|min:1'            
        ]);

        $comment = new Comment();
        $comment->text = $request->input('comment-add');
        $comment->article_id = $id;
        $comment->user_id = auth()->user()->id;
        $comment->save();

        return redirect("/article/{$id}")->with('success', 'Коментар додано');
    }

     
    
    public function destroy($id)
    {
        $comment = Comment::find($id);
        $article_id =  $comment->article->id;
        $user_id = $comment->user->id;
       

        if(auth()->user()->id != $user_id)
            return redirect("/article/{$article_id}")->with('error', 'Цей коментар не ваш!');                   
           
        $comment->delete();
         return redirect("/article/{$article_id}")->with('success', 'Коментар видалено');
    }
}
