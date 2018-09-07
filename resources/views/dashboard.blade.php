<?php 
use App\Http\Controllers\DataController;
?>
@extends('layouts.backend')
@section('titulo')
Escritorio
@endsection
@section('contenido')
<div class="row">
<div class="col-lg-4 col-md-6 col-sm-6">
  <div class="card card-stats">
    <div class="card-header card-header-warning card-header-icon">
      <div class="card-icon">
        <i class="material-icons">local_hospital</i>
      </div>
      <p class="card-category">Facultativos</p>
      <h3 class="card-title">
        {{DataController::numFacultativos()}}
      </h3>
    </div>
    <div class="card-footer">
      <div class="stats">
        <i class="material-icons">local_hospital</i>
        <a href="/facultativos">Ver Facultativos</a>
      </div>
    </div>
  </div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6">
  <div class="card card-stats">
    <div class="card-header card-header-success card-header-icon">
      <div class="card-icon">
        <i class="material-icons">more</i>
      </div>
      <p class="card-category">Servicios Activos</p>
      <h3 class="card-title">{{DataController::serviciosActivos()}}</h3>
    </div>
    <div class="card-footer">
      <div class="stats">
        <i class="material-icons">date_range</i> Last 24 Hours
      </div>
    </div>
  </div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6">
  <div class="card card-stats">
    <div class="card-header card-header-danger card-header-icon">
      <div class="card-icon">
        <i class="material-icons">person</i>
      </div>
      <p class="card-category">Pacientes</p>
      <h3 class="card-title">{{DataController::numPacientes()}}</h3>
    </div>
    <div class="card-footer">
      <div class="stats">
        <i class="material-icons">person</i> Listado Pacientes
      </div>
    </div>
  </div>
</div>

</div>
<div class="row">
<div class="col-md-4">
  <div class="card card-chart">
    <div class="card-header card-header-success">
      <div class="ct-chart" id="dailySalesChart"></div>
    </div>
    <div class="card-body">
      <h4 class="card-title">Daily Sales</h4>
      <p class="card-category">
        <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
    </div>
    <div class="card-footer">
      <div class="stats">
        <i class="material-icons">access_time</i> updated 4 minutes ago
      </div>
    </div>
  </div>
</div>
<div class="col-md-4">
  <div class="card card-chart">
    <div class="card-header card-header-warning">
      <div class="ct-chart" id="websiteViewsChart"></div>
    </div>
    <div class="card-body">
      <h4 class="card-title">Email Subscriptions</h4>
      <p class="card-category">Last Campaign Performance</p>
    </div>
    <div class="card-footer">
      <div class="stats">
        <i class="material-icons">access_time</i> campaign sent 2 days ago
      </div>
    </div>
  </div>
</div>
<div class="col-md-4">
  <div class="card card-chart">
    <div class="card-header card-header-danger">
      <div class="ct-chart" id="completedTasksChart"></div>
    </div>
    <div class="card-body">
      <h4 class="card-title">Completed Tasks</h4>
      <p class="card-category">Last Campaign Performance</p>
    </div>
    <div class="card-footer">
      <div class="stats">
        <i class="material-icons">access_time</i> campaign sent 2 days ago
      </div>
    </div>
  </div>
</div>
</div>
<div class="row">
<div class="col-lg-6 col-md-12">
  <div class="card">
    <div class="card-header card-header-tabs card-header-primary">
      <div class="nav-tabs-navigation">
        <div class="nav-tabs-wrapper">
          <span class="nav-tabs-title">Tasks:</span>
          <ul class="nav nav-tabs" data-tabs="tabs">
            <li class="nav-item">
              <a class="nav-link active" href="#profile" data-toggle="tab">
                <i class="material-icons">bug_report</i> Bugs
                <div class="ripple-container"></div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#messages" data-toggle="tab">
                <i class="material-icons">code</i> Website
                <div class="ripple-container"></div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#settings" data-toggle="tab">
                <i class="material-icons">cloud</i> Server
                <div class="ripple-container"></div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="card-body">
      <div class="tab-content">
        <div class="tab-pane active" id="profile">
          <table class="table">
            <tbody>
              <tr>
                <td>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" value="" checked>
                      <span class="form-check-sign">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </td>
                <td>Sign contract for "What are conference organizers afraid of?"</td>
                <td class="td-actions text-right">
                  <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                    <i class="material-icons">edit</i>
                  </button>
                  <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                    <i class="material-icons">close</i>
                  </button>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" value="">
                      <span class="form-check-sign">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </td>
                <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                <td class="td-actions text-right">
                  <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                    <i class="material-icons">edit</i>
                  </button>
                  <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                    <i class="material-icons">close</i>
                  </button>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" value="">
                      <span class="form-check-sign">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </td>
                <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                </td>
                <td class="td-actions text-right">
                  <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                    <i class="material-icons">edit</i>
                  </button>
                  <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                    <i class="material-icons">close</i>
                  </button>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" value="" checked>
                      <span class="form-check-sign">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </td>
                <td>Create 4 Invisible User Experiences you Never Knew About</td>
                <td class="td-actions text-right">
                  <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                    <i class="material-icons">edit</i>
                  </button>
                  <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                    <i class="material-icons">close</i>
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="tab-pane" id="messages">
          <table class="table">
            <tbody>
              <tr>
                <td>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" value="" checked>
                      <span class="form-check-sign">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </td>
                <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                </td>
                <td class="td-actions text-right">
                  <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                    <i class="material-icons">edit</i>
                  </button>
                  <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                    <i class="material-icons">close</i>
                  </button>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" value="">
                      <span class="form-check-sign">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </td>
                <td>Sign contract for "What are conference organizers afraid of?"</td>
                <td class="td-actions text-right">
                  <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                    <i class="material-icons">edit</i>
                  </button>
                  <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                    <i class="material-icons">close</i>
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="tab-pane" id="settings">
          <table class="table">
            <tbody>
              <tr>
                <td>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" value="">
                      <span class="form-check-sign">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </td>
                <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                <td class="td-actions text-right">
                  <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                    <i class="material-icons">edit</i>
                  </button>
                  <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                    <i class="material-icons">close</i>
                  </button>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" value="" checked>
                      <span class="form-check-sign">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </td>
                <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                </td>
                <td class="td-actions text-right">
                  <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                    <i class="material-icons">edit</i>
                  </button>
                  <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                    <i class="material-icons">close</i>
                  </button>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" value="" checked>
                      <span class="form-check-sign">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </td>
                <td>Sign contract for "What are conference organizers afraid of?"</td>
                <td class="td-actions text-right">
                  <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                    <i class="material-icons">edit</i>
                  </button>
                  <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                    <i class="material-icons">close</i>
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-lg-6 col-md-12">
  <div class="card">
    <div class="card-header card-header-warning">
      <h4 class="card-title">Pr&oacute;ximas citas</h4>
      <p class="card-category"><a href="/calendario">Ver Todas</a></p>
    </div>
    <div class="card-body table-responsive">
      <table class="table table-hover">
        <thead class="text-warning">
          <th>Fecha de la cita</th>
          <th>Hora de entrada</th>
          <th>Facultativo</th>
          <th>Ver cita</th>
        </thead>
        <tbody>
        @foreach(DataController::proximasCitas() as $cita)
          <tr>
            <td>{{$cita->fechaCita}}</td>
            <td>{{$cita->horaEntrada}}</td>
            <td>{{$cita->tratamineto}} {{$cita->apellido}} {{$cita->segundoApellido}}</td>
            <td><i class="material-icons">date_range</i></td>
          </tr>
    	@endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
<script>
//Create a simple line chart
var data = {
  // A labels array that can contain any sort of values
  labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri'],
  // Our series array that contains series objects or in this case series data arrays
  series: [
    [5, 2, 4, 2, 0]
  ]
};

// As options we currently only set a static size of 300x200 px
var options = {
  width: '300px',
  height: '200px'
};

// In the global name space Chartist we call the Line function to initialize a line chart. As a first parameter we pass in a selector where we would like to get our chart created. Second parameter is the actual data object and as a third parameter we pass in our options
new Chartist.Line('.ct-chart', data, options);
</script>
@endsection