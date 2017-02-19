@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                @include('messages.error')

                <div class="panel panel-default">
                    <div class="panel-heading">Entrer en Contact</div>

                    <div class="panel-body">
                        <form action="{{ route('contact.store') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                            </div>
                            <div class="form-group">
                                <textarea name="content" placeholder="Votre message" class="form-control"></textarea>
                            </div>

                            <input type="submit" value="Publier" class="btn btn-info">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection