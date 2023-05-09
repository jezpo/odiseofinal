@extends('layouts.default')

@section('title', config('hervis.name').' :: '.'panel')

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
<div class="row">
    <div id="data-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer col-xl-12">
        <div class="col-xl-12 ui-sortable">
            <div class="panel panel-primary" data-sortable-id="ui-widget-1">
                <div class="panel-heading">
                    <h4 class="panel-title">CORRESPONDENCIA</h4>
                    <div class="panel-heading-btn">
                        <a href="#" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand">
                            <i class="fa fa-expand"></i>
                        </a>
                    </div>
                </div>
                <div class="panel-body">
                    <div>
                        <h2 class="text-center">{!! config('hervis.name') !!}</h2>
                        <h3>texto de prueba</h3>
                    </div>
                    <div class="row">
                        <div class="col-xl-7 d-block d-sm-flex d-xl-block justify-content-center">
                            <div class="d-block d-lg-inline-flex mr-0 mr-sm-3">
                                <div class="dataTables_length" id="data-table-combine_length">
                                    <label> Show
                                        <select name="data-table-combine_length" aria-controls="data-table-combine" class="custom-select custom-select-sm form-control form-control-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                            <div class="d-block d-lg-inline-flex">
                                <div class="dt-buttons btn-group flex-wrap">
                                    <button class="btn btn-secondary buttons-copy buttons-html5 btn-sm" tabindex="0" aria-controls="data-table-combine" type="button">
                                        <span>Copiar</span>
                                    </button>
                                    <button class="btn btn-secondary buttons-csv buttons-html5 btn-sm" tabindex="0" aria-controls="data-table-combine" type="button">
                                        <span>CSV</span>
                                    </button>
                                    <button class="btn btn-secondary buttons-excel buttons-html5 btn-sm" tabindex="0" aria-controls="data-table-combine" type="button">
                                        <span>Excel</span>
                                    </button>
                                    <button class="btn btn-secondary buttons-pdf buttons-html5 btn-sm" tabindex="0" aria-controls="data-table-combine" type="button">
                                        <span>PDF</span>
                                    </button>
                                    <button class="btn btn-secondary buttons-print btn-sm" tabindex="0"
                                        aria-controls="data-table-combine" type="button">
                                        <span>Imprimir</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 d-flex d-xl-block justify-content-center">
                            <div id="data-table-combine_filter" class="dataTables_filter">
                                <label>Buscar:
                                    <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="data-table-combine">
                                </label>
                            </div>
                        </div>
                    </div>


                    <table id="ejemplo" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th class="text-nowrap sorting" tabindex="0" aria-controls="data-table-combine" rowspan="1" colspan="1" style="width: 109px;" data-column-index="2" aria-label="Rendering engine: activate to sort column ascending">RU</th>
                                <th class="text-nowrap sorting" tabindex="0" aria-controls="data-table-combine" rowspan="1" colspan="1" style="width: 133px;" data-column-index="4" aria-label="Platform(s): activate to sort column ascending">CI</th>
                                <th class="text-nowrap sorting" tabindex="0" aria-controls="data-table-combine" rowspan="1" colspan="1" style="width: 133px;" data-column-index="4" aria-label="Platform(s): activate to sort column ascending">NOMBRE</th>
                                <th class="text-nowrap sorting" tabindex="0" aria-controls="data-table-combine" rowspan="1" colspan="1" style="width: 133px;" data-column-index="4" aria-label="Platform(s): activate to sort column ascending">CARRERA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="text-nowrap sorting" tabindex="0" aria-controls="data-table-combine" rowspan="1" colspan="1" style="width: 109px;" data-column-index="2" aria-label="Rendering engine: activate to sort column ascending">RUE</th>
                                <th class="text-nowrap sorting" tabindex="0" aria-controls="data-table-combine" rowspan="1" colspan="1" style="width: 133px;" data-column-index="4" aria-label="Platform(s): activate to sort column ascending">CI</th>
                    </table>
                    <!--end table -->
                    <div class="row justify-content-around">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg" >Nueva Recepcion</button>
                        <button class="btn btn-primary" type="button" class="col-from-label col-md-5">Imprimir</button>

                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header text-center">
                                        <h4 class="modal-title w-100 font-weight-bold">Nueva Recepcion</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form class="modal-content">
                                        <div>
                                            <div class="form-group row" class="grid-container">
                                                <div class="col-xs-12">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="text-center">
                                                                <br>
                                                                <label class="font-weight-bold">TIPO DE BECA:</label>
                                                                <select name="data-table-combine_length" aria-controls="data-table-combine" class="custom-select custom-select-sm form-control form-control-sm" style="width: 290px;">
                                                                    <option id="demo_overview_minimal" class="form-control" data-role="select-dropdown" data-profile="minimal">Beca Alimentacion</option>
                                                                    <option id="demo_overview_minimal" class="form-control" data-role="select-dropdown" data-profile="minimal">Beca Internado</option>
                                                                </select>
                                                                <br>
                                                                <br>
                                                                <label class="col-from-label col-md-1" class="font-weight-bold">RU:</label>
                                                                <!-- Botón de éxito -->
                                                                <input type="input" class="input" class="col-from-label col-md-1"></input>
                                                                <!-- Botón de información  -->
                                                                <br>
                                                                <br>
                                                                <button type="button" class="btn btn-info">Buscar</button>
                                                            </div>
                                                            <br>
                                                            <br>
                                                        </div>
                                                        <div class="col-6" class="row justify-content-around">
                                                            <label class="col-from-label col-md-3" class="font-weight-bold">CI:</label>
                                                            <input type="input" class="input" class="col-xs-10"></input>
                                                            <br>
                                                            <label class="col-from-label col-md-3"class="font-weight-bold" >RU:</label>
                                                            <input type="input" class="input" class="col-xs-10"></input>
                                                            <br>
                                                            <label class="col-from-label col-md-3" class="font-weight-bold">PATERNO:</label>
                                                            <input type="input" class="input" class="col-xs-10"></input>
                                                            <br>
                                                            <label class="col-from-label col-md-3" class="font-weight-bold">MATERNO:</label>
                                                            <input type="input" class="input" class="col-xs-10"></input>
                                                            <br>
                                                            <label class="col-from-label col-md-3" class="font-weight-bold">NOMBRES:</label>
                                                            <input type="input" class="input" class="col-xs-10"></input>
                                                            <br>
                                                            <label class="col-from-label col-md-3" class="font-weight-bold">CARRERA:</label>
                                                            <input type="input" class="input" class="col-xs-10"></input>
                                                            <div class="col-xs-10">
                                                                <br>
                                                                <button type="button" class="btn btn-info">ACEPTAR
                                                                    FOLDER</button>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <label class="col-from-label col-md-4" style="padding-left: 1px;"class="font-weight-bold">OBSERVACION:</label>
                                                            <input type="input" class="input" class="col-xs-4"></input>
                                                            <label class="col-from-label col-md-4" style="padding-left: 1px;" class="font-weight-bold">FECHA DE AGENDAMIENTO:</label>
                                                            <input type="datetime-local" id="meeting-time" name="meeting-time" input type="date-time" class="col-from-label col-md-6"></input>
                                                            <br>
                                                            <br>
                                                            <div>
                                                                <button type="button" class="btn btn-info" class="col-from-label col-md-4">Rechazar</button>
                                                            </div>
                                                            <br>
                                                            <br>
                                                        </div>
                                                    </div>
                                                </div> <!-- more inputs -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal to bootom -->
                </div>
                <!--en table -->
                <!-- end panel-body -->
            </div>
        </div>
        <!-- end col-10 -->
    </div>
</div>
<!-- end row -->


@endsection

@push('scripts')
{{-- Aqui se coloca los JS de assets --}}
@endpush