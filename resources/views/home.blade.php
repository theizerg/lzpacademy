@extends('layouts.admin')

@section('content')

 <div class="content-body">
<!-- Dashboard Ecommerce Starts -->
<section id="dashboard-ecommerce">
<div class="row match-height">
    <!-- Medal Card -->
    <div class="col-xl-4 col-md-6 col-12">
        <div class="card card-congratulation-medal card-line-primary">
            <div class="card-body">
                <h5>¡Gracias! 🎉 {{ \Auth::user()->display_name }}!</h5>
                <p class="card-text font-small-3">Trabajamos por lo mejor</p>
                <h3 class="mb-75 mt-2 pt-50">
                    <a href="javascript:void(0);">$48.9k</a>
                </h3>
                <button type="button" class="btn btn-primary">View Sales</button>
                <img src="{{ asset('images/illustration/badge.svg') }}" class="congratulation-medal" alt="Medal Pic" />
            </div>
        </div>
    </div>
    <!--/ Medal Card -->

    <!-- Statistics Card -->
    <div class="col-xl-8 col-md-6 col-12">
        <div class="card card-statistics card-line-primary">
            <div class="card-header">
                <h4 class="card-title">Estadísticas generales</h4>
                <div class="d-flex align-items-center">
                    <p class="card-text font-small-2 mr-25 mb-0">Updated 1 month ago</p>
                </div>
            </div>
            <div class="card-body statistics-body">
                <div class="row">
                @if (Auth::user()->hasRole('Super Administrador'))
                    
                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                        <div class="media">
                            <div class="avatar white mr-2">
                                <div class="avatar-content">
                                    <i class="fas fa-user brown-text fa-3x" class="avatar-icon"></i>
                                </div>
                            </div>
                            <div class="media-body my-auto">
                                <h4 class="font-weight-bolder mb-0">{{ App\Models\User::count() }}</h4>
                                <p class="card-text font-small-3 mb-0">Usuarios</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                        <div class="media">
                            <div class="avatar white mr-2">
                                <div class="avatar-content">
                                    <i class="mdi mdi-lock-open black-text fa-3x" class="avatar-icon"></i>
                                </div>
                            </div>
                            <div class="media-body my-auto">
                                <h4 class="font-weight-bolder mb-0">{{ Spatie\Permission\Models\Role::count() }}</h4>
                                <p class="card-text font-small-3 mb-0">Roles</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                        <div class="media">
                            <div class="avatar white mr-2">
                                <div class="avatar-content">
                                    <i class="mdi mdi-lock-alert purple-text fa-3x" class="avatar-icon"></i>
                                </div>
                            </div>
                            <div class="media-body my-auto">
                                <h4 class="font-weight-bolder mb-0">{{ Spatie\Permission\Models\Permission::count() }}</h4>
                                <p class="card-text font-small-3 mb-0">Permisos</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="media">
                            <div class="avatar white mr-2">
                                <div class="avatar-content">
                                    <i class="mdi mdi-login-variant fa-3x red-text" class="avatar-icon"></i>
                                </div>
                            </div>
                            <div class="media-body my-auto">
                                <h4 class="font-weight-bolder mb-0">{{ App\Models\Login::count() }}</h4>
                                <p class="card-text font-small-3 mb-0">Visitas</p>
                            </div>
                        </div>
                    </div>
                   
                   
                    @endif

                </div>
                
            </div>
        </div>
    </div>
       <div class="col-xl-6 xl-100 box-col-12">
               @php
                   $date = \Carbon\Carbon::now();
                    //dd();
               @endphp
                  <div class="cal-date-widget card-body">
                    <div class="row">
                      <div class="col-xl-6 col-xs-12 col-md-6 col-sm-6">
                        <div class="cal-info text-center">
                          <div>
                            <h2>{{ date('d') }}</h2>
                            <div class="d-inline-block"><span class="pe-3">{{ $date->formatLocalized('%B') }} - </span><span class="ps-3"> {{ date('Y') }}</span></div>
                            <p class="f-16">There is no minimum donation, any sum is appreciated</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-6 col-xs-12 col-md-6 col-sm-6">
                        <div class="cal-datepicker ">
                          <div class="datepicker-here float-sm-end" data-language="en">           </div>
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
</section>


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
@endpush
