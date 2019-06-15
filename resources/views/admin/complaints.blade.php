@extends('adminlte::page')

@section('title', 'Slugname')

@section('breadcrumbs', Breadcrumbs::render('complaint.list',$region, $suptype, $subtype))

@section('content_header')
   <h1>
    {{ $subtype->name }}га тегишли муаммолар ройҳати
    </h1>
@stop

@section('content')
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          <!-- small box -->
      <div class="box-body">
          <table id="example2" class="table table-bordered table-hover" style="width:100%">
          <div id="extra-buttons"></div>
            <thead>
            <tr>
              <th>Т/Р</th>
              <th>Туман</th>
              <th>МФЙ</th>
              <th>ФИО</th>
              <th>Шикоят тури</th>
              <th>Мавзу</th>
              <th>Почта</th>
              <th>Телефон</th>
              <th>Статус</th>
              <th>Амаллар</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($complaints as $complaint)
            <tr class="item{{$complaint->id}} @if(!$complaint->status) warning @endif ">
              <td>{{ $complaint->id }}</td>
              <td>{{ $complaint->region->name }}</td>
              <td>{{ $complaint->neighborhoodCitizen->name }}</td>
              <td>{{ $complaint->sender_full_name }}</td>
              <td>{{ $complaint->ComplaintType->name }}</td>
              <td>{{ $complaint->title }}</td>
              <td>{{ $complaint->sender_email }}</td>
              <td>{{ $complaint->sender_phone }}</td>
              <td class="{{ $complaint->status ? 'text-green' : 'text-red' }}">{{ $complaint->status ? 'Хал бўлди' : 'Хал бўлмади' }}</td>
              <td><button class="edit-modal btn btn-info"
            data-info="{{$complaint->id}},{{$complaint->region_id}},{{$complaint->complaint_type_id}},{{$complaint->neighborhood_citizen_id}},{{$complaint->title}},{{$complaint->text}},{{$complaint->sender_full_name}},{{$complaint->sender_phone}},{{$complaint->sender_email}},{{$complaint->status}}">
                <span class="glyphicon glyphicon-edit"></span>
            </button>
            <button class="delete-modal btn btn-danger" 
            data-info="{{$complaint->id}},{{$complaint->region_id}},{{$complaint->complaint_type_id}},{{$complaint->neighborhood_citizen_id}},{{$complaint->title}},{{$complaint->text}},{{$complaint->sender_full_name}},{{$complaint->sender_phone}},{{$complaint->sender_email}},{{$complaint->status}}">
                <span class="glyphicon glyphicon-trash"></span>
            </button></td>
            </tr>
            @endforeach
            </tbody>
            </table>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')  

@stop