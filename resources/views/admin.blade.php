@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @include('messages.success')
                <div class="panel panel-default">
                    <div class="panel-heading">Liste des articles</div>

                    <div class="panel-body">
                        <ul>
                            @foreach($articles as $article)
                                <li><a href="{{ route('article.show', $article->id) }}">{{ $article->title }}</a></li>
                                <form method="POST" action="{{ route('article.destroy', $article->id) }}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="delete">
                                    <input type="submit" value="Supprimer" class="btn btn-danger">
                                </form>
                            @endforeach
                        </ul>

                        {{ $articles->links() }}
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Liste des commentaires</div>

                    <div class="panel-body">
                        <ul>
                            @foreach($articles as $article)
                                <li><a href="{{ route('admin.show', $article->id) }}">{{ $article->title }}</a></li>
                                <form method="POST" action="{{ route('admin.destroy', $article->id) }}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="delete">
                                    <input type="submit" value="Supprimer" class="btn btn-danger">
                                </form>
                            @endforeach
                        </ul>

                        {{ $articles->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection