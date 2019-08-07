@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header"> <h2>Домашняя страница пользователя {!!Auth::user()->name!!}</h2> </div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="bs-example bs-example-tabs bts-block">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active mat"><a href="#my_post" aria-controls="my_post"
                                                                      class="btn btn-outline-primary" role="tab"
                                                                      data-toggle="tab">Мои записи</a></li>
                        <li role="presentation" class="mat"><a href="#edit_post" aria-controls="edit_post"
                                                               class="btn btn-outline-primary" role="tab"
                                                               data-toggle="tab">Создать запись</a></li>

                    </ul>
                    <div class="tab-content my_content">
                        <div role="tabpanel" class="tab-pane active" id="my_post">
                            Место отображения моих записей
                            @foreach($posts as $post)

                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">{!!$post->title!!}</h5>
                                        Дата: {!!$post->created_at!!}
                                    </div>
                                    <div class="card-body">

                                        <p class="card-text">{!!$post->body!!}</p>
                                        <a href="#edit_post" class="btn btn-primary">Изменить записи</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div role="tabpanel" class="tab-pane" id="edit_post">
                            Место для создания и редактирования новых записей
                        </div>

                        <div role="tabpanel" class="tab-pane" id="projects">

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>>

@endsection
