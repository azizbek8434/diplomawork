@extends('adminlte::page')
@section('breadcrumbs', Breadcrumbs::render('complaint.create', auth()->user()->region))
@section('content')
@section('content_header')
<h1>
    {{ auth()->user()->region->name }} худудига тегишли янги муаммони қўшиш
</h1>
@stop
@if (count($errors) > 0)
<div class="row">
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Киришингиз билан боғлиқ айрим муаммолар мавжуд.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif
<form action="{{ route('complaints.store') }}" method="post">
    {{csrf_field()}}
    <div class="form-group">
        <label for="suptype">Шикоятлар категорияси:</label>
        <select class="form-control" name="complaint_type_id" id="suptype">
            <option value="">Танланг:</option>
            @foreach ($suptypes as $suptype)
            <option value="{{ $suptype->id }}">{{ $suptype->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="subtype">Шикоятлар субкатегорияси:</label>
        <select class="form-control" name="complaint_type_id" id="subtype">
            <option value="">Танланг:</option>
        </select>
    </div>
    <div class="form-group">
        <label for="neighborhood">МФЙ ройҳати:</label>
        <select class="form-control" name="neighborhood_citizen_id" id="neighborhood">
            <option value="">Танланг:</option>
            @foreach ($neighborhoods as $neighborhood)
            <option value="{{ $neighborhood->id }}">{{ $neighborhood->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="title">Сарлавҳа:</label>
        <input type="text" class="form-control" name="title" id="title">
    </div>
    <div class="form-group">
        <label for="complaint">Шикоят:</label>
        <textarea class="form-control" name="text" rows="5" id="complaint"></textarea>
    </div>
    <div class="form-group">
        <label for="full_name">Фуқоронинг ФИОси:</label>
        <input type="text" class="form-control" name="sender_full_name" id="full_name">
    </div>
    <div class="form-group">
        <label for="phone">Фуқоронинг Телефон рақами:</label>
        <input type="text" class="form-control" name="sender_phone" id="phone">
    </div>
    <div class="form-group">
        <label for="email">Фуқоронинг Э-почта манзили:</label>
        <input type="email" class="form-control" name="sender_email" id="email">
    </div>
    <div class="form-group">
        <label for="status">Статус: &nbsp;</label>
        <label class="switch">
            <input type="checkbox" name="status">
            <span class="slider"></span>
        </label>
    </div>
    <button type="submit" class="btn btn-primary">Қўшиш</button>
</form>
@stop

@section('css')
<style>
    .switch {
        position: relative;
        display: inline-block;
        width: 40px;
        height: 24px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 16px;
        width: 16px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked+.slider {
        background-color: #2196F3;
    }

    input:focus+.slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked+.slider:before {
        -webkit-transform: translateX(16px);
        -ms-transform: translateX(16px);
        transform: translateX(16px);
    }

</style>
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
<script>
    $(function () {
        $('#toggle-one').bootstrapToggle();
    })

</script>
@stop
