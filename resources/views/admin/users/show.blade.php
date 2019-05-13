@extends('adminlte::page')
@section('breadcrumbs', Breadcrumbs::render('users.show',$user))
@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Фойдаланувчини кўриш</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('users.index') }}"> Орқага</a>

        </div>

    </div>

</div>


<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Исм:</strong>

            {{ $user->name }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Э-почта:</strong>

            {{ $user->email }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Худуд:</strong>

            {{ optional($user->region)->name }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Рол:</strong>

            @if(!empty($user->getRoleNames()))

                @foreach($user->getRoleNames() as $v)

                    <label class="badge badge-success">{{ $v }}</label>

                @endforeach

            @endif

        </div>

    </div>

</div>

@endsection