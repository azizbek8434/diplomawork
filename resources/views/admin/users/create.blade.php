@extends('adminlte::page')
@section('breadcrumbs', Breadcrumbs::render('users.create'))
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Янги фойдаланувчи яратиш</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Орқага</a>
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
{!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}

<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Исм:</strong>

            {!! Form::text('name', null, array('placeholder' => 'Исм','class' => 'form-control')) !!}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Э-почта:</strong>

            {!! Form::text('email', null, array('placeholder' => 'Э-почта','class' => 'form-control')) !!}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Худуд:</strong>
            
            {!! Form::select('region_id',$regions, null, array('class' => 'form-control')) !!}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Парол:</strong>

            {!! Form::password('password', array('placeholder' => 'Парол','class' => 'form-control')) !!}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Паролни тасдиқлаш:</strong>

            {!! Form::password('confirm-password', array('placeholder' => 'Паролни тасдиқлаш','class' => 'form-control')) !!}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Рол:</strong>

            {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

        <button type="submit" class="btn btn-primary">Сақлаш</button>

    </div>

</div>

{!! Form::close() !!}

@endsection