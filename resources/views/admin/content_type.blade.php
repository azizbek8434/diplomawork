@extends('adminlte::page')

@section('title', 'Slugname')

@section('breadcrumbs', Breadcrumbs::render('content.region',$region))

@section('content_header')
   <h1>
    Slugname
    </h1>
@stop

@section('content')
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          <!-- small box -->
        @foreach ($complaint_types as $complaint_type)
          <div class="col-lg-3 col-xs-12">
            <div class="small-box bg-aqua">
            <div class="inner">
              <h4>{{ $complaint_type->name }}</h4>
            </div>
            <div class="icon">
              <span>{{ $complaint_type->id }}</span>
            </div>
            <a href="{{ route('content.type',[ $region->slug ,$complaint_type->slug]) }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
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