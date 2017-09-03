@extends('layout.base')

@section('header-title', 'Reporte diario')

@section('header-subtitle')

@endsection

@section('current-position')
    <ol class="breadcrumb">
        <li>
            <i class="fa fa-file"></i>  <a href="{{ route('user.report.daily') }}">Reporte diario</a>
        </li>
    </ol>
@endsection

@section('content')

    <form action="{{ route('user.report.daily.generate') }}" method="get">

        {{ csrf_field() }}

        <div class="row">

            <div class="col-sm-3">

                <div class="form-group">
                    <label for="date_start">Fecha inicio</label>
                    <input type="date" class="form-control" name="date_start" id="date_start" placeholder="Fecha inicio" required>
                </div>
            </div>

            <div class="col-sm-3">

                <div class="form-group">
                    <label for="date_end">Fecha fin</label>
                    <input type="date" class="form-control" name="date_end" id="date_end" placeholder="Fecha fin" required>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-xs-12">
                <div class="form-group">
                    <button class="btn btn-success btn-lg"><i class="fa fa-fw fa-file"></i> Generar reporte</button>
                </div>
            </div>
        </div>

    </form>

@endsection