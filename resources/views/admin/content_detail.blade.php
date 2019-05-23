@extends('adminlte::page')

@section('title', 'Slugname')

{{-- @section('breadcrumbs', Breadcrumbs::render('content.type',$complaints)) --}}

@section('content_header')
   <h1>
    complaints Detail
    </h1>
@stop

@section('content')
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          <!-- small box -->
        @foreach ($complaints as $complaint)
          <div class="col-lg-3 col-xs-12">
            <div class="small-box bg-aqua">
            <div class="inner">
              <h4>{{ $complaint->title }}</h4>
            </div>
            <div class="icon">
              <span>{{ $complaint->complaint_type_id }}</span>
            </div>
          </div> 
        </div>
        @endforeach
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