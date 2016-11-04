@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST">
            {{ csrf_field() }}
            <table class="table table-bordered">
                <thead>
                    <th><input type="checkbox" name="notify_select_all" id="notify_select_all" title="Обрати все"></th>
                    <th>ID</th>
                    <th>Тип</th>
                    <th>Имя клиента</th>
                    <th>E-mail клиента</th>
                    <th>Телефон клиента</th>
                    <th>Дата создания заявки</th>
                </thead>
                <tbody>
                @forelse($data as $item)
                    <tr class="{{ empty($item['read_at']) ? 'notread' : 'read'}}">
                        <td><input type="checkbox" class="notify_checkbox" name="notify_id[]" value="{!! $item['id'] !!}"></td>
                        <td>{{ $item['id'] }}</td>
                        <td>{{ config('notifystatuses.'.$item['type']) }}</td>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['email'] }}</td>
                        <td>{{ $item['phone'] }}</td>
                        <td>{{ $item['created_at'] }}</td>
                    </tr>
                @empty

                @endforelse
                </tbody>
            </table>
            <input value="Прочитать отмеченные сообщения" type="submit" class="btn btn-info">
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