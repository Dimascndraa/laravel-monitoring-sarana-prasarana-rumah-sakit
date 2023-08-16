@extends('inc.layout')
@section('title', 'Unit')
@section('content')

    <main id="js-page-content" role="main" class="page-content">
        <div class="row">
            <div class="col-xl-12">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Unit <span class="fw-300"><i>Table</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-primary btn-sm" data-toggle="dropdown">Table Style</button>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-menu-right position-absolute pos-top">
                                <button class="dropdown-item active" data-action="toggle" data-class="table-bordered"
                                    data-target="#dt-basic-example"> Bordered Table </button>
                                <button class="dropdown-item" data-action="toggle" data-class="table-sm"
                                    data-target="#dt-basic-example"> Smaller Table </button>
                                <button class="dropdown-item" data-action="toggle" data-class="table-dark"
                                    data-target="#dt-basic-example"> Table Dark </button>
                                <button class="dropdown-item active" data-action="toggle" data-class="table-hover"
                                    data-target="#dt-basic-example"> Table Hover </button>
                                <button class="dropdown-item active" data-action="toggle" data-class="table-stripe"
                                    data-target="#dt-basic-example"> Table Stripped </button>
                                <div class="dropdown-divider m-0"></div>
                                <div class="dropdown-multilevel dropdown-multilevel-left">
                                    <div class="dropdown-item">
                                        tbody color
                                    </div>
                                    <div class="dropdown-menu no-transition-delay">
                                        <div class="js-tbody-colors dropdown-multilevel dropdown-multilevel-left d-flex flex-wrap"
                                            style="width: 15.9rem; padding: 0.5rem">
                                            <a href="javascript:void(0);" data-bg="bg-primary-100"
                                                class="btn d-inline-block bg-primary-100 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-200"
                                                class="btn d-inline-block bg-primary-200 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-300"
                                                class="btn d-inline-block bg-primary-300 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-400"
                                                class="btn d-inline-block bg-primary-400 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-500"
                                                class="btn d-inline-block bg-primary-500 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-600"
                                                class="btn d-inline-block bg-primary-600 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-700"
                                                class="btn d-inline-block bg-primary-700 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-800"
                                                class="btn d-inline-block bg-primary-800 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-900"
                                                class="btn d-inline-block bg-primary-900 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-100"
                                                class="btn d-inline-block bg-success-100 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-200"
                                                class="btn d-inline-block bg-success-200 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-300"
                                                class="btn d-inline-block bg-success-300 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-400"
                                                class="btn d-inline-block bg-success-400 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-500"
                                                class="btn d-inline-block bg-success-500 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-600"
                                                class="btn d-inline-block bg-success-600 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-700"
                                                class="btn d-inline-block bg-success-700 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-800"
                                                class="btn d-inline-block bg-success-800 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-900"
                                                class="btn d-inline-block bg-success-900 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-100"
                                                class="btn d-inline-block bg-info-100 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-200"
                                                class="btn d-inline-block bg-info-200 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-300"
                                                class="btn d-inline-block bg-info-300 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-400"
                                                class="btn d-inline-block bg-info-400 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-500"
                                                class="btn d-inline-block bg-info-500 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-600"
                                                class="btn d-inline-block bg-info-600 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-700"
                                                class="btn d-inline-block bg-info-700 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-800"
                                                class="btn d-inline-block bg-info-800 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-900"
                                                class="btn d-inline-block bg-info-900 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-100"
                                                class="btn d-inline-block bg-danger-100 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-200"
                                                class="btn d-inline-block bg-danger-200 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-300"
                                                class="btn d-inline-block bg-danger-300 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-400"
                                                class="btn d-inline-block bg-danger-400 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-500"
                                                class="btn d-inline-block bg-danger-500 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-600"
                                                class="btn d-inline-block bg-danger-600 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-700"
                                                class="btn d-inline-block bg-danger-700 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-800"
                                                class="btn d-inline-block bg-danger-800 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-900"
                                                class="btn d-inline-block bg-danger-900 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-100"
                                                class="btn d-inline-block bg-warning-100 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-200"
                                                class="btn d-inline-block bg-warning-200 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-300"
                                                class="btn d-inline-block bg-warning-300 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-400"
                                                class="btn d-inline-block bg-warning-400 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-500"
                                                class="btn d-inline-block bg-warning-500 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-600"
                                                class="btn d-inline-block bg-warning-600 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-700"
                                                class="btn d-inline-block bg-warning-700 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-800"
                                                class="btn d-inline-block bg-warning-800 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-900"
                                                class="btn d-inline-block bg-warning-900 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-100"
                                                class="btn d-inline-block bg-fusion-100 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-200"
                                                class="btn d-inline-block bg-fusion-200 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-300"
                                                class="btn d-inline-block bg-fusion-300 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-400"
                                                class="btn d-inline-block bg-fusion-400 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-500"
                                                class="btn d-inline-block bg-fusion-500 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-600"
                                                class="btn d-inline-block bg-fusion-600 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-700"
                                                class="btn d-inline-block bg-fusion-700 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-800"
                                                class="btn d-inline-block bg-fusion-800 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-900"
                                                class="btn d-inline-block bg-fusion-900 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg=""
                                                class="btn d-inline-block bg-white border width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-multilevel dropdown-multilevel-left">
                                    <div class="dropdown-item">
                                        thead color
                                    </div>
                                    <div class="dropdown-menu no-transition-delay">
                                        <div class="js-thead-colors dropdown-multilevel dropdown-multilevel-left d-flex flex-wrap"
                                            style="width: 15.9rem; padding: 0.5rem">
                                            <a href="javascript:void(0);" data-bg="bg-primary-100"
                                                class="btn d-inline-block bg-primary-100 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-200"
                                                class="btn d-inline-block bg-primary-200 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-300"
                                                class="btn d-inline-block bg-primary-300 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-400"
                                                class="btn d-inline-block bg-primary-400 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-500"
                                                class="btn d-inline-block bg-primary-500 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-600"
                                                class="btn d-inline-block bg-primary-600 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-700"
                                                class="btn d-inline-block bg-primary-700 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-800"
                                                class="btn d-inline-block bg-primary-800 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-900"
                                                class="btn d-inline-block bg-primary-900 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-100"
                                                class="btn d-inline-block bg-success-100 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-200"
                                                class="btn d-inline-block bg-success-200 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-300"
                                                class="btn d-inline-block bg-success-300 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-400"
                                                class="btn d-inline-block bg-success-400 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-500"
                                                class="btn d-inline-block bg-success-500 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-600"
                                                class="btn d-inline-block bg-success-600 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-700"
                                                class="btn d-inline-block bg-success-700 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-800"
                                                class="btn d-inline-block bg-success-800 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-900"
                                                class="btn d-inline-block bg-success-900 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-100"
                                                class="btn d-inline-block bg-info-100 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-200"
                                                class="btn d-inline-block bg-info-200 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-300"
                                                class="btn d-inline-block bg-info-300 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-400"
                                                class="btn d-inline-block bg-info-400 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-500"
                                                class="btn d-inline-block bg-info-500 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-600"
                                                class="btn d-inline-block bg-info-600 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-700"
                                                class="btn d-inline-block bg-info-700 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-800"
                                                class="btn d-inline-block bg-info-800 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-900"
                                                class="btn d-inline-block bg-info-900 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-100"
                                                class="btn d-inline-block bg-danger-100 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-200"
                                                class="btn d-inline-block bg-danger-200 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-300"
                                                class="btn d-inline-block bg-danger-300 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-400"
                                                class="btn d-inline-block bg-danger-400 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-500"
                                                class="btn d-inline-block bg-danger-500 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-600"
                                                class="btn d-inline-block bg-danger-600 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-700"
                                                class="btn d-inline-block bg-danger-700 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-800"
                                                class="btn d-inline-block bg-danger-800 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-900"
                                                class="btn d-inline-block bg-danger-900 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-100"
                                                class="btn d-inline-block bg-warning-100 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-200"
                                                class="btn d-inline-block bg-warning-200 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-300"
                                                class="btn d-inline-block bg-warning-300 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-400"
                                                class="btn d-inline-block bg-warning-400 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-500"
                                                class="btn d-inline-block bg-warning-500 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-600"
                                                class="btn d-inline-block bg-warning-600 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-700"
                                                class="btn d-inline-block bg-warning-700 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-800"
                                                class="btn d-inline-block bg-warning-800 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-900"
                                                class="btn d-inline-block bg-warning-900 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-100"
                                                class="btn d-inline-block bg-fusion-100 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-200"
                                                class="btn d-inline-block bg-fusion-200 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-300"
                                                class="btn d-inline-block bg-fusion-300 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-400"
                                                class="btn d-inline-block bg-fusion-400 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-500"
                                                class="btn d-inline-block bg-fusion-500 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-600"
                                                class="btn d-inline-block bg-fusion-600 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-700"
                                                class="btn d-inline-block bg-fusion-700 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-800"
                                                class="btn d-inline-block bg-fusion-800 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-900"
                                                class="btn d-inline-block bg-fusion-900 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg=""
                                                class="btn d-inline-block bg-white border width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <!-- datatable start -->
                            <table id="unit" class="table table-bordered table-hover table-striped w-100"></table>
                            <div id="unitsPager"></div>
                            <!-- datatable end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
@section('plugin')
    <script src="/js/jquery-ui.js"></script>
    <script type="text/javascript" src="/js/jquery.multiselect.min.js"></script>
    <script src='/js/jquery.jqGrid.min.js' type="text/javascript"></script>
    <script src='/js/grid.locale-en.js' type="text/javascript"></script>
    <script src='/js/jquery.contextmenu.js' type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $("#unit").jqGrid({
                url: "/get-data-unit",
                datatype: "json",
                colModel: [{
                        label: "Nama",
                        name: "name",
                        width: 50,
                        editable: true
                    },
                    {
                        label: "Kode Unit",
                        name: "code",
                        width: 50,
                        editable: true
                    },
                    {
                        label: "Status",
                        name: "status",
                        width: 50,
                        editable: true
                    }
                ],
                viewrecords: true,
                width: 900,
                height: 300,
                rowNum: 10,
                pager: "#unitsPager",
                editurl: "/edit-unit",
                caption: "Data Unit",
                jsonReader: {
                    root: "data",
                    repeatitems: false
                }
            });

            $("#unit").jqGrid('navGrid', '#unitsPager', {
                    edit: true,
                    add: true,
                    del: false, // Menghilangkan tombol delete
                    afterSubmit: function(response, postdata) {
                        // Lakukan tindakan yang diperlukan setelah pengiriman berhasil
                        return [true, ""];
                    }
                },
                // Edit options
                {
                    url: "/edit-unit",
                    closeAfterEdit: true,
                },
                // Add options
                {
                    url: "/add-unit",
                    closeAfterAdd: true,
                });

        });
    </script>
@endsection
