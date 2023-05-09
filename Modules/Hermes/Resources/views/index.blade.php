@extends('hermes::layouts.master')

@section('content')

@push('css')
{{-- Aqui se coloca los CSS de assets --}}
@endpush

@section('header-nav')
        <li>
            <div class="pull-left">
            <h4 style="padding-top: 20px;">Sistema de correspondecia</h4>
            </div>
        </li>
        <li class="dropdown navbar-language">
            <a href="#" class="dropdown-toggle pr-1 pl-1 pr-sm-3 pl-sm-3" data-toggle="dropdown">
                <span class="flag-icon flag-icon-us" title="us"></span>
                <span class="name d-none d-sm-inline">EN</span> <b class="caret"></b>
            </a>
            <div class="dropdown-menu">
                <a href="javascript:;" class="dropdown-item"><span class="flag-icon flag-icon-us" title="us"></span> English</a>
                <a href="javascript:;" class="dropdown-item"><span class="flag-icon flag-icon-cn" title="cn"></span> Chinese</a>
                <a href="javascript:;" class="dropdown-item"><span class="flag-icon flag-icon-jp" title="jp"></span> Japanese</a>
                <a href="javascript:;" class="dropdown-item"><span class="flag-icon flag-icon-be" title="be"></span> Belgium</a>
                <div class="dropdown-divider"></div>
                <a href="javascript:;" class="dropdown-item text-center">more options</a>
            </div>
        </li>
@endsection


    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('hermes.name') !!}
    </p>
@endsection


@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">Form Stuff</a></li>
        <li class="breadcrumb-item active">Form Elements</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Form Elements <small>header small text goes here...</small></h1>
    <!-- end page-header -->
    <!-- begin row -->
    <div class="row">
        @php
        for($i = 0; $i <200; $i++){
            echo "<h3>Hola, Peter</h3>";
        }
        @endphp
    </div>
    <!-- end row -->
@endsection

@push('scripts')
    {{-- Aqui se coloca los JS de assets --}}
@endpush