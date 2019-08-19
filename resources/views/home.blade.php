@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Домашняя страница пользователя {!!Auth::user()->name!!}</h2>
            </div>

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
                        <li> <a href="{{asset('/home/post_create/')}}" class="btn btn-primary">Создать записи</a></li>

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
                                        <a href="{{asset('/home/edit/'.$post->id)}}" class="btn btn-primary">Изменить записи</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div role="tabpanel" class="tab-pane" id="edit_post">
                            <form action="action="{{asset('/home/create/')}}" method="POST"">
                                <p></p>
                                <input type="text" class="form-control" placeholder="Введите ваш заголовок" aria-label="title" aria-describedby="basic-addon1">
                                <p></p>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Введите текс сообщения</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect2">Сообщение видно следующим пользователям:</label>
                                    <select multiple class="form-control" id="exampleFormControlSelect2">
                                        <option>Всем</option>
                                        <option>Только зарегестрировванным</option>
                                        <option>dima</option>
                                        <option>pavel</option>
                                        <option>anton</option>
                                        <option>denis</option>
                                    </select>
                                </div>
                                <a href="#edit_post" class="btn btn-primary">Сохранить запись</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
