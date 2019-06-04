@extends('adminlte::page')

@section('title', 'Slugname')

@section('breadcrumbs', Breadcrumbs::render('content.subtype',$region, $suptype))

@section('content_header')
   <h1>
    {{ $suptype->name }}га тегишли суб категориялар
    </h1>
@stop

@section('content')
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          <!-- small box -->
        @foreach ($complaint_types as $subtype)
            <div class="col-lg-3 col-xs-12">
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h4>{{ $subtype['name'] }}</h4>
              </div>
              <div class="icon">
                <span>{{ $subtype['complaintCount'] ?? '0' }}</span>
              </div>
              <a href="{{ url('dashboard/'. $region->slug .'/'.$suptype->slug.'/'.$subtype['slug']) }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
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