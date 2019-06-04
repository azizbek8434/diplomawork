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
        
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>ComplaintType</th>
              <th>Region</th>
              <th>Neighorhood Citizen </th>
              <th>Sender Name </th>
              <th>Sender Email </th>
            </tr>
            </thead>
            <tbody>
            @foreach ($complaints as $complaint)
            <tr>
              <td>{{ $complaint->id }}</td>
              <td>{{ $complaint->title }}</td>
              <td>{{ $complaint->ComplaintType->name }}</td>
              <td>{{ $complaint->region->name }}</td>
              <td>{{ $complaint->neighborhoodCitizen->name }}</td>
              <td>{{ $complaint->sender_full_name }}</td>
              <td>{{ $complaint->sender_email }}</td>
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