@extends('layouts.admin')
@section('title','HOME')
@section('content')
@push('styles')
@endpush
<div class="row match-height">
    <!-- Greetings Card starts -->
    <div class="col-xl-6 col-md-6 col-12">
        <div class="card card-congratulations">
            <div class="card-body text-center">
                <img src="{{ asset('images/elements/decore-left.png') }}" class="congratulations-img-left" alt="card-img-left" />
                <img src="{{ asset('images/elements/decore-right.png') }}" class="congratulations-img-right" alt="card-img-right" />
                <div class="avatar avatar-xl bg-primary shadow">
                    <div class="avatar-content">
                        <i data-feather="award" class="font-large-1"></i>
                    </div>
                </div>
                <div class="text-center">
                    <h2 class="mb-1 text-white">Felicidades {{ \Auth::user()->display_name }}</h2>
                    <p class="card-text m-auto w-75">
                       Gracias por <strong>preferirnos</strong> siempre estaremos dispuestos para ayudarte en todo lo que necesites.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-md-6 col-12">
      <div class="card card-statistics">
        <div class="card-header">
          <h4 class="card-title">Estadísticas</h4>
          <div class="d-flex align-items-center">
            <p class="card-text font-small-2 me-25 mb-0">{{ \Auth::user()->created_at->diffForHumans() }}</p>
          </div>
        </div>
        <div class="card-body statistics-body">
          <div class="row">
            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-primary me-2">
                  <div class="avatar-content">
                    <i class="avatar-icon fas fa-lock fa-2x"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0 ml-1">{{ Spatie\Permission\Models\Role::count() }}</h4>
                  <p class="card-text font-small-3 mb-0  ml-1">Roles</p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-info me-2">
                  <div class="avatar-content">
                    <i class="avatar-icon fas fa-user fa-2x"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0 ml-1">{{ App\Models\User::count() }}</h4>
                  <p class="card-text font-small-3 mb-0 ml-1">Usuarios</p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-danger me-2">
                  <div class="avatar-content">
                    <i  class="avatar-icon fas fa-user-tie fa-2x "></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0 ml-1">{{ Spatie\Permission\Models\Permission::count() }}</h4>
                  <p class="card-text font-small-3 mb-0 ml-1">Permisos</p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-success me-2">
                  <div class="avatar-content">
                    <i data-feather="dollar-sign" class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0">$9745</h4>
                  <p class="card-text font-small-3 mb-0">Revenue</p>
                </div>
              </div>
            </div>
           
            
          </div>
        </div>
      </div>
    </div>
      <div class="col-xl-6 col-md-6 col-12">
         <div class="card card-line-primary">
           <div class="card-header">
            <h5 class="h3 mb-0">Total de usuarios registrados durante los últimos 4 meses.</h5>
         </div>
        <div class="card-body">
          <div class="recent-report__chart">
              <div id="chart2"></div>
          </div>
        </div>
      </div>
    </div>
  <div class="col-lg-6 col-12">
        <div class="card card-user-timeline card-line-primary">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <i data-feather="list" class="user-timeline-title-icon"></i>
                    <h4 class="card-title">Comentarios sin leer</h4>
                </div>
            </div>
            @php
                $comentarios = App\Models\Comentario::get();
            @endphp
            <div class="card-body">
                <ul class="timeline ml-50">
                    @foreach ($comentarios->where('status',0) as $element)
                        <li class="timeline-item">
                         <button type="button" class="timeline-point timeline-point-indicator" data-toggle="tooltip" data-placement="top" title="Ver">             
                          </button>
                        <div class="timeline-event">
                            <h6>{{ $element->name }} {{ $element->lastname }}</h6>
                            <p>{{ $element->email }}</p>
                            <p>Enviado {{ $element->created_at->diffForHumans();  }}</p>
                            <div class="media align-items-center">
                                <p class="media-body mb-0">{{ $element->descripcion }}</p>
                            </div>

                        </div><br>
                       <a href="{{ url('comentario/enviarcorreo',$element->id) }}" class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Cambiar estado el comentario"> Responder mensaje           
                          </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection
@push('scripts')
<script>
'use strict';
   $(function () {
    chart2();
});


function chart2() {

    var options = {
        chart: {
            height: 350,
            type: 'bar',
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    position: 'top', // top, center, bottom
                },
            }
        },
        dataLabels: {
            enabled: true,
            formatter: function (val) {
                return val;
            },
            offsetY: -20,
            style: {
                fontSize: '12px',
                colors: ["#9aa0ac"]
            }
        },
        series: [{
            name: 'Usuarios',
            data: [

                        '{{$user_count_4}}',
                        '{{$user_count_3}}',
                        '{{$user_count_2}}',
                        '{{$user_count_1}}'
            ]
        }],
        xaxis: {
            categories: ["{{Carbon\Carbon::now()->subMonths(3)->toFormattedDateString()}}",
                        "{{Carbon\Carbon::now()->subMonths(2)->toFormattedDateString()}}",
                        "{{Carbon\Carbon::now()->subMonths(1)->toFormattedDateString()}}",
                        "{{Carbon\Carbon::now()->subMonths(0)->toFormattedDateString()}}"],
            position: 'top',
            labels: {
                offsetY: -18,
                style: {
                    colors: '#9aa0ac',
                }
            },
            axisBorder: {
                show: true
            },
            axisTicks: {
                show: true
            },
            crosshairs: {
                fill: {
                    type: 'gradient',
                    gradient: {
                        colorFrom: '#D8E3F0',
                        colorTo: '#BED1E6',
                        stops: [0, 100],
                        opacityFrom: 0.4,
                        opacityTo: 0.5,
                    }
                }
            },
            tooltip: {
                enabled: true,
                offsetY: -35,

            }
        },
        fill: {
            gradient: {
                shade: 'light',
                type: "horizontal",
                shadeIntensity: 0.25,
                gradientToColors: undefined,
                inverseColors: true,
                opacityFrom: 1,
                opacityTo: 1,
                stops: [50, 0, 100, 100]
            },
        },
        yaxis: {
            axisBorder: {
                show: true
            },
            axisTicks: {
                show: true,
            },
            labels: {
                show: true,
                formatter: function (val) {
                    return val;
                }
            }

        },
        title: {
            text: 'Conteo total de usuarios.',
            floating: true,
            offsetY: 320,
            align: 'center',
            style: {
                color: '#9aa0ac'
            }
        },
    }

    var chart = new ApexCharts(
        document.querySelector("#chart2"),
        options
    );

    chart.render();

}

 </script>

  

 <script>
       $(function () {
       
        $('#calendar').datetimepicker({
                 format: 'L',
                 inline: true
            });
        });
    </script>   

@endpush
