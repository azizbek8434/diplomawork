@extends('adminlte::page')

@section('breadcrumbs', Breadcrumbs::render('permissions.index'))

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Рухсатномаларни бошқариш</h2>

        </div>

        <div class="pull-right">

        @can('perm-list')

            <a class="btn btn-success" href="{{ route('permissions.create') }}"> Қўшиш</a>

            @endcan

        </div>

    </div>

</div>


@if ($message = Session::get('success'))

    <div class="alert alert-success">

        <p>{{ $message }}</p>

    </div>

@endif


<table class="table table-bordered">

  <tr>

     <th>No</th>

     <th>Номи</th>

     <th width="280px">Амаллар</th>

  </tr>

    @foreach ($permissions as $key => $perm)

    <tr>

        <td>{{ ++$i }}</td>

        <td>{{ $perm->name }}</td>

        <td>

            <a class="btn btn-info" href="{{ route('permissions.show',$perm->id) }}">Кўриш</a>

            @can('perm-list')

                <a class="btn btn-primary" href="{{ route('permissions.edit',$perm->id) }}">Таҳрирлаш</a>

            @endcan

            @can('perm-list')

                {!! Form::open(['method' => 'DELETE','route' => ['permissions.destroy', $perm->id],'style'=>'display:inline']) !!}

                    {!! Form::submit('Ўчириш', ['class' => 'btn btn-danger']) !!}

                {!! Form::close() !!}

            @endcan

        </td>

    </tr>

    @endforeach

</table>


{!! $permissions->render() !!}


@endsection