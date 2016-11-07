@extends('layouts.app')

@section('content')
    <div class="container">
        <form enctype="multipart/form-data" class="form" method="post"  >
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" value="{{ $data->title }}" placeholder="Заголовок">
            </div>
            <div class="form-group">
                <label for="descr">Description</label>
                <textarea name="description" id="descr" class="form-control"  cols="30" rows="10">{{ $data->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="smimg">Preview img</label>
                <input type="file" name="preview_img" value="{{ $data->preview_img }}" id="smimg">
            </div>
            <div class="form-group">
                <label for="img">Image</label>
                <input type="file" name="img" value="{{ $data->img }}" id="img">
            </div>
            <button type="submit" class="btn btn-default">Добавить</button>
        </form>
    </div>
@stop
