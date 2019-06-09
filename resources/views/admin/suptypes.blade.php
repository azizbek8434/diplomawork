@extends('adminlte::page')

@section('title', 'Slugname')

@section('breadcrumbs', Breadcrumbs::render('content.suptype',$region))

@section('content_header')
<h1>
    {{ $region->name }}, Муаммолар Категорияси
</h1>
@stop

@section('content')
<!-- Main content -->
<section class="content">
    @foreach(array_chunk($complaint_types, 4) as $complaint_type)
    <div class="row">
        @foreach($complaint_type as $suptype)
        <div class="col-lg-3 col-xs-12">
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h4>{{ $suptype['name'] }}</h4>
                </div>
                <div class="icon">
                    <span>{{ $suptype['complaintCount'] ?? '0' }}</span>
                </div>
                <a href="{{ url('dashboard/'. $region->slug .'/'.$suptype['slug']) }}" class="small-box-footer">Барчасини кўриш<i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        @endforeach
    </div>
    @endforeach
</section>
@stop

@section('css')
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')

@stop
