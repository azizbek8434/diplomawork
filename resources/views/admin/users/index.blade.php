@extends('adminlte::page')

@section('breadcrumbs', Breadcrumbs::render('users.index'))


@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Фойдаланувчиларни бошқариш</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-success" href="{{ route('users.create') }}">Қўшиш</a>

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

   <th>Исм</th>

   <th>Худуд</th>

   <th>Э-почта</th>

   <th>Роллар</th>

   <th width="280px">Амаллар</th>

 </tr>

 @foreach ($data as $key => $user)

  <tr>

    <td>{{ ++$i }}</td>

    <td>{{ $user->name }}</td>

    <td>{{ optional($user->region)->name }}</td>

    <td>{{ $user->email }}</td>

    <td>

      @if(!empty($user->getRoleNames()))

        @foreach($user->getRoleNames() as $v)

           <label class="badge badge-success">{{ $v }}</label>

        @endforeach

      @endif

    </td>

    <td>

       <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Кўриш</a>

       <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Таҳрирлаш</a>

        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}

            {!! Form::submit('Ўчириш', ['class' => 'btn btn-danger']) !!}

        {!! Form::close() !!}

    </td>

  </tr>

 @endforeach

</table>


{!! $data->render() !!}


@endsection