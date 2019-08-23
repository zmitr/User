@extends('layouts.app')


@section ('scripts')
    @parent
    <script src="https://cdn.ckeditor.com/ckeditor5/12.3.1/classic/ckeditor.js"></script>
    <script src={{asset('js/formEnable.js')}}> </script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection


@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Домашняя страница пользователя {!!Auth::user()->name!!}</h2>
            </div>

            <div class="card-body">
                @if(session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="bs-example bs-example-tabs bts-block">
                    <!-- Nav tabs -->
                    <div class="tab-content my_content">

                        <form action="#" method="POST">
                            {!! csrf_field() !!}

                            <input type="text" class="form-control" placeholder="Введите ваш заголовок" aria-label="title" name="title" value = "" aria-describedby="basic-addon1">

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="SelectCategory">Выберете категорию</label>
                                </div>
                                <select class="custom-select" id="SelectCategory" name="category_id" value="">

                                </select>
                            </div>

                            <textarea class="form-control" id="editor" rows="8" name="body">

                                </textarea>
                            <input type="text" class="form-control" placeholder="Введите краткое содержание" name="titlrexcerpt" value = "Введите краткое содержание поста" aria-describedby="basic-addon1">
                            <textarea class="form-control" id="simpletext" rows="3" name="excerpt">

                                </textarea>
                            <div class="form-check">
                                <input class="form-check-input all" type="radio" name="UserViewType" id="exampleRadios1" value="1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Всем пользователям
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input all" type="radio" name="UserViewType" id="exampleRadios2" value="2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Зарегестрированным пользователям
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="UserViewType" id="exampleRadios3" value="3">
                                <label class="form-check-label" for="exampleRadios3">
                                    Конкретным пользователям из списка
                                </label>
                            </div>
                            <select multiple class="form-control" id="exampleFormControlSelect2" disabled>
                                @include('templates.users')
                            </select>



                            <button type="submit" class="btn btn-primary">Сохранить запись</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
