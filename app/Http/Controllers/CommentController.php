<?php

namespace App\Http\Controllers;

use App\Article;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comment = Comment::all('id', 'ASC')->where('article_id', $id);
        return view('article.show', ['article' => $id, 'comment' => $comment]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param $id
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request ,$id)
    {
        $this->validate($request,
            [
                'content' => 'required|min:10'
            ],
            [
                'content.required' => 'Contenu requis',
                'content.min' => 'Minimum 10 caractères'
            ]);

        Comment::create(array(
            'user_id' => Auth::user()->id,
            'article_id' => $id,
            //Ne tenez pas compte de "l'erreur"
            'content' => $request->content,
        ));
        return redirect()->route('article.show',$id)->with('success', 'Le comment a bien été publié');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('comments.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
