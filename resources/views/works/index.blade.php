@extends('layouts.app')

@section('content')
    <div class="container">
        <a href=" {{ route('works.create') }}" class="btn btn-success">Добавить</a>
        <br><br>
            <table class="table table-bordered">
                <thead>
                    <th>ID</th>
                    <th>Заголовок</th>
                    <th>Описание</th>
                    <th>Превью</th>
                    <th>Картинка</th>
                    <th>Действия</th>
                </thead>
                <tbody>
                @forelse($data as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->description }}</td>
                        <td>
                            {{ $item->preview_img }}
                        </td>
                        <td>{{ $item->img }}</td>
                        <td>
                            <a href=" {{ route('works.edit', ['id' => $item->id]) }}" class="btn btn-default">Редактировать</a>
                            <a href=" {{ route('works.destroy', ['id' => $item->id]) }}" class="btn btn-danger">Удалить</a>
                        </td>
                    </tr>
                @empty
                    <tr class="text-center">
                        <td colspan="5" >Записей нет!</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </form>
    </div>
@stop

@section('js')
    <script>
        $(function () {
            $("#notify_select_all").on('change',function(){
                if($("#notify_select_all").prop("checked") != true){
                    $('.notify_checkbox').prop('checked', false);
                }else{
                    $('.notify_checkbox').prop('checked', this.checked);
                }
            });
        });
    </script>
@stop