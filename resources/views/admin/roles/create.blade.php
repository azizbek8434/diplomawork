@extends('adminlte::page')

@section('breadcrumbs', Breadcrumbs::render('roles.create'))

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Янги ролни яратиш</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('roles.index') }}"> Орқага</a>

        </div>

    </div>

</div>


@if (count($errors) > 0)

    <div class="alert alert-danger">

        <strong>Whoops!</strong> Киришингиз билан боғлиқ айрим муаммолар мавжуд.<br><br>

        <ul>

        @foreach ($errors->all() as $error)

            <li>{{ $error }}</li>

        @endforeach

        </ul>

    </div>

@endif


{!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}

<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Номи:</strong>

            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Рухсатнома:</strong>

            <br/>

            @foreach($permission as $value)

                <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}

                {{ $value->name }}</label>

            <br/>

            @endforeach

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

        <button type="submit" class="btn btn-primary">Сақлаш</button>

    </div>

</div>

{!! Form::close() !!}

@endsection