@extends('adminlte::page')

@section('breadcrumbs', Breadcrumbs::render('roles.show', $role))

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2> Ролни кўриш</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('roles.index') }}"> Орқага</a>

        </div>

    </div>

</div>


<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Номи:</strong>

            {{ $role->name }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Рухсатномалар:</strong>

            @if(!empty($rolePermissions))

                @foreach($rolePermissions as $v)

                    <label class="label label-success">{{ $v->name }},</label>

                @endforeach

            @endif

        </div>

    </div>

</div>

@endsection