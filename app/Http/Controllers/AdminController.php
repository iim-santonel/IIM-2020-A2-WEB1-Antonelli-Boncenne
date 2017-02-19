<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::paginate(10);

        return view('admin', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::find($id);
        return view('admin.index', compact('article'));
    }

    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();

        return redirect()->route('admin.index')->with('success', 'L\'article a bien été supprimé cher administrateur');
    }
}
