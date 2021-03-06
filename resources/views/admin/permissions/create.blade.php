@extends('adminlte::page')

@section('breadcrumbs', Breadcrumbs::render('permissions.create'))

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Янги Рухсатномани яратиш</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('permissions.index') }}"> Орқага</a>

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


{!! Form::open(array('route' => 'permissions.store','method'=>'POST')) !!}

<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Номи:</strong>

            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

        <button type="submit" class="btn btn-primary">Сақлаш</button>

    </div>

</div>

{!! Form::close() !!}

@endsection