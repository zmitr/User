@extends('layouts.app')
@section('scripts')
    @parent


@endsection
@section('content')



                @foreach($posts as $post)
                    <div class="card">
                        <div class="card-header">{{$post->title}}</div>
                        <h5 align="right">{{$post->catalogs->name}}</h5>
                        <div class="card-body">
                            {!!$post->body!!}
                        </div>
                    </div>
                @endforeach



@endsection
