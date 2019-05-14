@extends('adminlte::page')

@section('breadcrumbs', Breadcrumbs::render('permissions.show', $permission))

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2> Рухсатномани кўриш</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('permissions.index') }}"> Орқага</a>

        </div>

    </div>

</div>


<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <h3>
             <strong>Номи:</strong>
                {{ $permission->name }}
            </h3>
        </div>

    </div>

</div>

@endsection