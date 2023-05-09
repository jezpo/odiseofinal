@extends('layouts.default')

@section('title', config('hermes.name').' :: '.'panel')

@push('css')
{{-- Aqui se coloca los CSS de assets --}}
@endpush

@section('header-nav')

@endsection

@section('content')
<!-- begin breadcrumb -->
{{--
<ol class="breadcrumb float-xl-right">
    <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
    <li class="breadcrumb-item"><a href="javascript:;">Form Stuff</a></li>
    <li class="breadcrumb-item active">Form Elements</li>
</ol>

<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Form Elements <small>header small text goes here...</small></h1>
<!-- end page-header -->
--}}
<!-- begin row -->
<!-- end row -->
<div class="col-xl-12 ui-sortable">
    <!-- begin panel -->
    <div class="panel panel-inverse" data-sortable-id="form-dropzone-1">
        <div class="panel-heading ui-sortable-handle">
            <h4 class="panel-title">Dropzone</h4>
            
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                </div>
        </div>
        <div class="panel-body">

            <div>
                <h2 class="text-center">{!! config('hervis.name') !!}</h2>
               
            </div>
            <form class="form-horizontal" data-parsley-validate="true" name="demo-form" novalidate="">
                <div class="form-group row m-b-15">
                    <label class="col-md-4 col-sm-4 col-form-label" for="fullname">Full Name * :</label>
                    <div class="col-md-8 col-sm-8">
                        <input class="form-control" type="text" id="fullname" name="fullname" placeholder="Required" data-parsley-required="true">
                    </div>
                </div>
                <div class="form-group row m-b-15">
                    <label class="col-md-4 col-sm-4 col-form-label" for="email">Email * :</label>
                    <div class="col-md-8 col-sm-8">
                        <input class="form-control" type="text" id="email" name="email" data-parsley-type="email" placeholder="Email" data-parsley-required="true">
                    </div>
                </div>
                <div class="form-group row m-b-15">
                    <label class="col-md-4 col-sm-4 col-form-label" for="website">Website :</label>
                    <div class="col-md-8 col-sm-8">
                        <input class="form-control" type="url" id="website" name="website" data-parsley-type="url" placeholder="url">
                    </div>
                </div>
                <div class="form-group row m-b-15">
                    <label class="col-md-4 col-sm-4 col-form-label" for="message">Message (20 chars min, 200 max) :</label>
                    <div class="col-md-8 col-sm-8">
                        <textarea class="form-control" id="message" name="message" rows="4" data-parsley-range="[20,200]" placeholder="Range from 20 - 200"></textarea>
                    </div>
                </div>
                <div class="form-group row m-b-15">
                    <label class="col-md-4 col-sm-4 col-form-label" for="message">Digits :</label>
                    <div class="col-md-8 col-sm-8">
                        <input class="form-control" type="text" id="digits" name="digits" data-parsley-type="digits" placeholder="Digits">
                    </div>
                </div>
                <div class="form-group row m-b-15">
                    <label class="col-md-4 col-sm-4 col-form-label" for="message">Number :</label>
                    <div class="col-md-8 col-sm-8">
                        <input class="form-control" type="text" id="number" name="number" data-parsley-type="number" placeholder="Number">
                    </div>
                </div>
                <div class="form-group row m-b-0">
                    <label class="col-md-4 col-sm-4 col-form-label">&nbsp;</label>
                    <div class="col-md-8 col-sm-8">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="panel-body text-inverse">
            <div id="dropzone">
                <form action="/upload" class="dropzone needsclick dz-clickable" id="demo-upload">
                    <div class="dz-message needsclick">
                        Drop files <b>here</b> or <b>click</b> to upload.<br>
                        <span class="dz-note needsclick">
                            (This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)
                        </span>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
    <!-- end panel -->
    </div>

@endsection

@push('scripts')
{{-- Aqui se coloca los JS de assets --}}
@endpush