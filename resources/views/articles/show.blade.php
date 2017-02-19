@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $article->title }}</div>
                    <div class="panel-body">
                        {{ $article->content }}

                        <br>
                        <br>

                        <strong>{{ $article->user->name }}</strong>

                        <br>
                        <a href="{{ route('article.edit', $article->id) }}" class="btn btn-primary">Modifier</a>

                        <form method="POST" action="{{ route('article.destroy', $article->id) }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="delete">
                            <input type="submit" value="Supprimer" class="btn btn-danger">
                        </form>

                        <div class="panel-heading">{{ $article->title }}</div>
                        <div class="panel-body">
                            {{ $article->content }}

                            <br>
                            <br>
                            <h2>Commentaire</h2>
                                <li>{{$comments }}</li>

                            <div class="panel panel-default">
                                <div class="panel-heading">Publier un commentaire</div>

                                <div class="panel-body">
                                    <form action="{{ route('comment.store') }}" method="POST">
                                        {{ csrf_field() }}

                                        <div class="form-group">
                                            <textarea name="content" placeholder="Votre contenu" class="form-control"></textarea>
                                        </div>

                                        <input type="submit" value="Publier" class="btn btn-info">
                                    </form>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection