@extends('adminlte::page')
@section('breadcrumbs', Breadcrumbs::render('complaint.create'))
@section('content')
@section('content_header')
<h1>
    Янги муаммони қўшиш
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
@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif
<form action="{{ route('complaints.store') }}" method="post" role="form" class="contactForm">
    {{csrf_field()}}
    <div class="form-group">
        <label for="suptype">Шикоятлар категорияси:&nbsp;<span class="text-red">*</span></label>
        <select class="form-control" name="complaint_type_id" id="suptype" data-rule="required" data-msg="Танланиши мажбурий">
            <option value="">Танланг:</option>
            @foreach ($suptypes as $suptype)
            <option value="{{ $suptype->id }}"
                {{ (collect(old('complaint_type_id'))->contains($suptype->id)) ? 'selected':'' }}>{{ $suptype->name }}
            </option>
            @endforeach
        </select>
        <div class="validation"></div>
    </div>
    <div class="form-group">
        <label for="subtype">Шикоятлар субкатегорияси:&nbsp;<span class="text-red">*</span></label>
        <select class="form-control" name="complaint_type_id" id="subtype" data-rule="required" data-msg="Танланиши мажбурий">
            <option value="">Танланг:</option>
        </select>
        <div class="validation"></div>
    </div>
    <div class="form-group">
        <label for="region">Вилоятлар:&nbsp;<span class="text-red">*</span></label>
        <select class="form-control" name="region_id" id="region" data-rule="required" data-msg="Танланиши мажбурий">
            <option value="">Танланг:</option>
            @foreach ($regions as $region)
            <option value="{{ $region->id }}" {{ (collect(old('region_id'))->contains($region->id)) ? 'selected':'' }}>
                {{ $region->name }}</option>
            @endforeach
        </select>
        <div class="validation"></div>
    </div>
    <div class="form-group">
        <label for="neighborhood">МФЙ ройҳати:&nbsp;<span class="text-red">*</span></label>
        <select class="form-control" name="neighborhood_citizen_id" id="neighborhood" data-rule="required"
            data-msg="Танланиши мажбурий">
            <option value="">Танланг:</option>
            @foreach ($neighborhoods as $neighborhood)
            <option value="{{ $neighborhood->id }}"
                {{ (collect(old('neighborhood_citizen_id'))->contains($neighborhood->id)) ? 'selected':'' }}>
                {{ $region->name }}>{{ $neighborhood->name }}</option>
            @endforeach
        </select>
        <div class="validation"></div>
    </div>
    <div class="form-group">
        <label for="title">Сарлавҳа:&nbsp;<span class="text-red">*</span></label>
        <input type="text" class="form-control" name="title" value="{{ old('title') }}" id="title" data-rule="required"
            data-msg="Тўлдирилиши мажбурий">
        <div class="validation"></div>
    </div>
    <div class="form-group">
        <label for="complaint">Шикоят:&nbsp;<span class="text-red">*</span></label>
        <textarea class="form-control" name="text" rows="5" id="complaint" data-rule="required"
            data-msg="Тўлдирилиши мажбурий">{{ old('text') }}</textarea>
        <div class="validation"></div>
    </div>
    <div class="form-group">
        <label for="full_name">Фуқоронинг ФИОси:&nbsp;<span class="text-red">*</span></label>
        <input type="text" class="form-control" name="sender_full_name" value="{{ old('sender_full_name') }}"
            id="full_name" data-rule="required" data-msg="Тўлдирилиши мажбурий" />
        <div class="validation"></div>
    </div>
    <div class="form-group">
        <label for="phone">Фуқоронинг Телефон рақами:&nbsp;<span class="text-red">*</span></label>
        <input type="text" class="form-control" name="sender_phone" value="{{ old('sender_phone') }}" id="phone"
            data-rule="required" data-msg="Тўлдирилиши мажбурий">
        <div class="validation"></div>
    </div>
    <div class="form-group">
        <label for="email">Фуқоронинг Э-почта манзили:&nbsp;<span class="text-red">*</span></label>
        <input type="email" class="form-control" id="email" name="sender_email" {{ old('sender_email') }} data-rule="email" data-msg="Тўғри электрон почта манзилини киритинг">
        <div class="validation"></div>
    </div>
    <div class="form-group">
        <label for="status">Статус:&nbsp;</label>
        <label class="switch">
            <input type="checkbox" name="status">
            <span class="slider"></span>
        </label>
    </div>
    <div class="form-group button">
        <button type="reset" class="btn btn-default reset">Бекор қилиш</button>
        <button type="submit" class="btn btn-primary">Қўшиш</button>
</form>
@stop
@section('css')
<link rel="stylesheet" href="{{ asset('admin/css/add_complaints.css') }}">
@stop
@section('js')
<script src="{{ asset('admin/js/add_complaints.js')}}"></script>
@stop
