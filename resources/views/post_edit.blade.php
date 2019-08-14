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

                            <form action="{{asset('/home/edit/'.$obj->id)}}" method="POST">
                                {!! csrf_field() !!}
                                @if($errors->has('title'))
                                    <div>
                                        <b class='errors'>
                                        {{$errors->first('title')}}
                                        </b>
                                    </div>
                                @endif
                                `<input type="text" class="form-control" placeholder="Введите ваш заголовок" aria-label="title" name="title" value = "{{$obj->title}}" aria-describedby="basic-addon1">
                                {!! csrf_field() !!}
                                @if($errors->has('category_id'))
                                    <div>
                                        <b class='errors'>
                                            {{$errors->first('category_id')}}
                                        </b>
                                    </div>
                                @endif
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Выберете категорию</label>
                                    </div>
                                    <select class="custom-select" id="inputGroupSelect01" name="ctegory_id" value="{{$obj->category_id}}">
                                        @foreach($catalogs as $cat)
                                            <option value={{$cat->id}} {{($obj->category_id==$cat->id)?'selected':''}}>{{$cat->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <textarea class="form-control" name="content" id="editor" rows="8" name="body">
                                   {{$obj->body}}
                                </textarea>

                                <div class="form-check">
                                    <input class="form-check-input all" type="radio" name="exampleRadios" id="exampleRadios1" value="1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Всем пользователям
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input all" type="radio" name="exampleRadios" id="exampleRadios2" value="2">
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
