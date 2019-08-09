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
                    <div class="tab-content my_content">

                            <form action="#">
                                <p></p>
                                <input type="text" class="form-control" placeholder="Введите ваш заголовок" aria-label="title" value = "{{$obj->title}}" aria-describedby="basic-addon1">
                                <p></p>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Введите текс сообщения</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"> {{$obj->body}}</textarea>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Всем пользователям
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="2">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Зарегестрированным пользователям
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="3">
                                    <label class="form-check-label" for="exampleRadios3">
                                        Конкретным пользователям из списка
                                    </label>
                                </div>


                                    <select multiple class="form-control" id="exampleFormControlSelect2" disabled>
                                        <option>Всем</option>
                                        <option>Только зарегестрировванным</option>
                                        <option>dima</option>
                                        <option>pavel</option>
                                        <option>anton</option>
                                        <option>denis</option>
                                    </select>

                                <a href="#edit_post" class="btn btn-primary">Сохранить запись</a>
                            </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
