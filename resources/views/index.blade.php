@extends('layouts.app')
@section('scripts')
    @parent


@endsection
@section('content')

        <div class="row justify-content-center">
            <div class="col-11">
                @foreach($posts as $post)
                    <div class="card">
                        <div class="card-header">{{$post->title}}</div>
                            Категория: {{$post->catalogs->name}}
                        <div class="card-body">
                            {!!$post->body!!}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

@endsection
