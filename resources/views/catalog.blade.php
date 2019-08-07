@extends('layouts.app')

@section('content')
    Отбор сообщений по имени категории {{$cat->name}}
    @foreach($posts as $post)

            <div class="card">
                <div class="card-header">{{$post->title}}</div>
                <h5 align="right">Категория: {{$post->catalogs->name}}</h5>
                <div class="card-body">
                    {!!$post->body!!}

                </div>
            </div>

    @endforeach
@endsection