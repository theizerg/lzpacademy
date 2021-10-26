@extends('layouts.admin')

@section('content')
<div class="row">
	<div class="col-xl-8 col-md-12 col-lg-8">
	<div class="card">
	  <div class="card-header">
	    <h4>Revenue Chart</h4>
	  </div>
	  <div class="card-body">
	    <ul class="list-inline text-center">
	      <li class="list-inline-item p-r-30"><i data-feather="arrow-up-circle" class="col-green"></i>
	        <h5 class="m-b-0">$675</h5>
	        <p class="text-muted font-14 m-b-0">Weekly Earnings</p>
	      </li>
	      <li class="list-inline-item p-r-30"><i data-feather="arrow-down-circle" class="col-orange"></i>
	        <h5 class="m-b-0">$1,587</h5>
	        <p class="text-muted font-14 m-b-0">Monthly Earnings</p>
	      </li>
	      <li class="list-inline-item p-r-30"><i data-feather="arrow-up-circle" class="col-green"></i>
	        <h5 class="mb-0 m-b-0">$45,965</h5>
	        <p class="text-muted font-14 m-b-0">Yearly Earnings</p>
	      </li>
	    </ul>
	    <div id="revenue"></div>
	  </div>
	</div>
	</div>
	<div class="col-xl-4 col-md-12 col-lg-4">
	<div class="card l-bg-orange">
	  <div class="card-body">
	    <div class="text-white">
	      <div class="row">
	        <div class="col-md-6 col-lg-5">
	          <h4 class="mb-0 font-26">$1,235</h4>
	          <p class="mb-2">Avg Sales Per Month</p>
	          <p class="mb-0">
	            <span class="font-20">+11.25% </span>Increase
	          </p>
	        </div>
	        <div class="col-md-6 col-lg-7">
	          <div class="sparkline-bar p-t-50"></div>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
	<div class="card l-bg-cyan">
	  <div class="card-body">
	    <div class="text-white">
	      <div class="row">
	        <div class="col-md-6 col-lg-5">
	          <h4 class="mb-0 font-26">758</h4>
	          <p class="mb-2">Avg new Cust Per Month</p>
	          <p class="mb-0">
	            <span class="font-20">+25.11%</span> Increase
	          </p>
	        </div>
	        <div class="col-md-6 col-lg-7">
	          <div class="sparkline-line-chart2 p-t-50"></div>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
	</div>
	</div>
	<div class="row">
	<div class="col-12 col-sm-12 col-lg-6">
	<div class="card">
	  <div class="card-header">
	    <h4>Summary</h4>
	    <div class="card-header-action">
	      <a href="#summary-chart" data-tab="summary-tab" class="btn active">Chart</a>
	      <a href="#summary-text" data-tab="summary-tab" class="btn">Text</a>
	    </div>
	  </div>
	  <div class="card-body">
	    <div class="summary">
	      <div class="summary-info" data-tab-group="summary-tab" id="summary-text">
	        <h4>$3,157</h4>
	        <div class="text-muted">Total Earning Today</div>
	        <div class="d-block mt-2">
	          <a href="#">View All</a>
	        </div>
	      </div>
	      <div class="summary-chart active" data-tab-group="summary-tab" id="summary-chart">
	        <canvas id="myChart" height="180"></canvas>
	      </div>
	      <div class="summary-item">
	        <h6 class="mt-3">Recent Purchase <span class="text-muted">(4 Items)</span></h6>
	        <ul class="list-unstyled list-unstyled-border">
	          <li class="media">
	            <img alt="image" src="images/users/user-1.png"
	              class="mr-3 user-img-radious-style user-list-img" width="40">
	            <div class="media-body">
	              <div class="media-right">$112</div>
	              <div class="media-title"><a href="#">Sarah Smith</a></div>
	              <div class="text-small text-muted">From <a href="#">London</a>
	                <div class="bullet"></div> Monday
	              </div>
	            </div>
	          </li>
	          <li class="media">
	            <a href="#">
	              <img alt="image" src="images/users/user-2.png"
	                class="mr-3 user-img-radious-style user-list-img" width="40">
	            </a>
	            <div class="media-body">
	              <div class="media-right">$225</div>
	              <div class="media-title"><a href="#">Ashton Cox</a></div>
	              <div class="text-small text-muted">From <a href="#">India</a>
	                <div class="bullet"></div> Sunday
	              </div>
	            </div>
	          </li>
	          <li class="media">
	            <a href="#">
	              <img alt="image" src="images/users/user-3.png"
	                class="mr-3 user-img-radious-style user-list-img" width="40">
	            </a>
	            <div class="media-body">
	              <div class="media-right">$479</div>
	              <div class="media-title"><a href="#">John Doe</a></div>
	              <div class="text-muted text-small">From <a href="#">China</a>
	                <div class="bullet"></div> Friday
	              </div>
	            </div>
	          </li>
	          <li class="media">
	            <a href="#">
	              <img alt="image" src="images/users/user-4.png"
	                class="mr-3 user-img-radious-style user-list-img" width="40">
	            </a>
	            <div class="media-body">
	              <div class="media-right">$669</div>
	              <div class="media-title"><a href="#">Airi Satou</a></div>
	              <div class="text-small text-muted">From <a href="#">Shilanka</a>
	                <div class="bullet"></div> Tuesday
	              </div>
	            </div>
	          </li>
	        </ul>
	      </div>
	    </div>
	  </div>
	</div>
	</div>
	<div class="col-12 col-sm-12 col-lg-6">
	<div class="card">
	  <div class="card-header">
	    <h4>Statistics</h4>
	    <div class="card-header-action">
	      <a href="#" class="btn active">Week</a>
	      <a href="#" class="btn">Month</a>
	      <a href="#" class="btn">Year</a>
	    </div>
	  </div>
	  <div class="card-body">
	    <canvas id="myChart2" height="180"></canvas>
	    <div class="statistic-details mt-1">
	      <div class="statistic-details-item">
	        <div class="text-small text-muted"><span class="text-primary"><i
	              class="fas fa-caret-up"></i></span> 12%</div>
	        <div class="detail-value">$125</div>
	        <div class="detail-name">Today</div>
	      </div>
	      <div class="statistic-details-item">
	        <div class="text-small text-muted"><span class="text-danger"><i
	              class="fas fa-caret-down"></i></span> 33%</div>
	        <div class="detail-value">$3,564</div>
	        <div class="detail-name">This Week</div>
	      </div>
	      <div class="statistic-details-item">
	        <div class="text-small text-muted"><span class="text-primary"><i
	              class="fas fa-caret-up"></i></span>19%</div>
	        <div class="detail-value">$14,687</div>
	        <div class="detail-name">This Month</div>
	      </div>
	      <div class="statistic-details-item">
	        <div class="text-small text-muted"><span class="text-primary"><i
	              class="fas fa-caret-up"></i></span>29%</div>
	        <div class="detail-value">$88,568</div>
	        <div class="detail-name">This Year</div>
	      </div>
	    </div>
	  </div>
	</div>
	<div class="card mt-4">
	  <div class="card-header">
	    <h4>Popular Browser</h4>
	  </div>
	  <div class="card-body">
	    <div class="row">
	      <div class="col mb-4 mb-lg-0 text-center">
	        <div class="browser browser-chrome"></div>
	        <div class="mt-2 font-weight-bold">Chrome</div>
	        <div class="text-small text-muted"><span class="text-primary"><i
	              class="fas fa-caret-up"></i></span> 38%</div>
	      </div>
	      <div class="col mb-4 mb-lg-0 text-center">
	        <div class="browser browser-firefox"></div>
	        <div class="mt-2 font-weight-bold">Firefox</div>
	        <div class="text-small text-muted"><span class="text-primary"><i
	              class="fas fa-caret-up"></i></span> 22%</div>
	      </div>
	      <div class="col mb-4 mb-lg-0 text-center">
	        <div class="browser browser-safari"></div>
	        <div class="mt-2 font-weight-bold">Safari</div>
	        <div class="text-small text-muted"><span class="text-danger"><i
	              class="fas fa-caret-down"></i></span> 27%</div>
	      </div>
	      <div class="col mb-4 mb-lg-0 text-center">
	        <div class="browser browser-opera"></div>
	        <div class="mt-2 font-weight-bold">Opera</div>
	        <div class="text-small text-muted">9%</div>
	      </div>
	      <div class="col mb-4 mb-lg-0 text-center">
	        <div class="browser browser-internet-explorer"></div>
	        <div class="mt-2 font-weight-bold">IE</div>
	        <div class="text-small text-muted"><span class="text-primary"><i
	              class="fas fa-caret-up"></i></span> 4%</div>
	      </div>
	    </div>
	  </div>
	</div>
	</div>
	</div>
	<div class="row">
	<div class="col-lg-4 col-md-4 col-sm-12">
	<div class="card card-statistic-2">
	  <div class="card-icon shadow-primary bg-cyan">
	    <i class="fas fa-hiking"></i>
	  </div>
	  <div class="card-wrap">
	    <div class="card-header">
	      <h4 class="pull-right">New Clients</h4>
	    </div>
	    <div class="card-body pull-right">
	      10,225
	    </div>
	  </div>
	  <div class="card-chart">
	    <canvas id="chart-1" height="80"></canvas>
	  </div>
	</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-12">
	<div class="card card-statistic-2">
	  <div class="card-icon shadow-primary bg-purple">
	    <i class="fas fa-drafting-compass"></i>
	  </div>
	  <div class="card-wrap">
	    <div class="card-header">
	      <h4 class="pull-right">Delivered Order</h4>
	    </div>
	    <div class="card-body pull-right">
	      2,857
	    </div>
	  </div>
	  <div class="card-chart">
	    <canvas id="chart-2" height="80"></canvas>
	  </div>
	</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-12">
	<div class="card card-statistic-2">
	  <div class="card-icon shadow-primary bg-green">
	    <i class="fas fa-dollar-sign"></i>
	  </div>
	  <div class="card-wrap">
	    <div class="card-header">
	      <h4 class="pull-right">Total Earning</h4>
	    </div>
	    <div class="card-body pull-right">
	      $17,458
	    </div>
	  </div>
	  <div class="card-chart">
	    <canvas id="chart-3" height="80"></canvas>
	  </div>
	</div>
	</div>
	</div>
	<div class="row">
	<div class="col-12 col-sm-12 col-lg-6">
	<div class="card">
	  <div class="card-header">
	    <h4>Visitors</h4>
	  </div>
	  <div class="card-body">
	    <div id="visitorMap4" data-height="190"></div>
	  </div>
	  <div class="card-footer card-footer-grey pt-0">
	    <div class="statistic-details mt-4 align-items-center justify-content-center">
	      <div class="statistic-details-item col-sm-4 col-12">
	        <div class="detail-chart">
	          <div class="sparkline-line-chart"></div>
	        </div>
	        <div class="detail-value">11,365</div>
	        <div class="detail-name">Visits</div>
	      </div>
	      <div class="statistic-details-item col-sm-4 col-12">
	        <div class="detail-chart">
	          <div class="sparkline-line-chart"></div>
	        </div>
	        <div class="detail-value">32%</div>
	        <div class="detail-name">Referral</div>
	      </div>
	      <div class="statistic-details-item col-sm-4 col-12">
	        <div class="detail-chart">
	          <div class="sparkline-line-chart"></div>
	        </div>
	        <div class="detail-value">68%</div>
	        <div class="detail-name">Organic</div>
	      </div>
	    </div>
	  </div>
	</div>
	<div class="card mt-4">
	  <div class="card-body">
	    <div class="row">
	      <div class="col-sm-3 col-6 mb-md-0 mb-4 text-center">
	        <div class="img-shadow flag-icon flag-icon-au"></div>
	        <div class="mt-2 font-weight-bold text-nowrap">Australia</div>
	        <div class="text-small text-muted">9,500</div>
	      </div>
	      <div class="col-sm-3 col-6 mb-md-0 mb-4 text-center">
	        <div class="img-shadow flag-icon flag-icon-br"></div>
	        <div class="mt-2 font-weight-bold text-nowrap">Brazil</div>
	        <div class="text-small text-muted"><span class="text-primary"><i
	              class="fas fa-caret-up"></i></span> 7,328</div>
	      </div>
	      <div class="col-sm-3 col-6 text-center">
	        <div class="img-shadow flag-icon flag-icon-in"></div>
	        <div class="mt-2 font-weight-bold text-nowrap">India</div>
	        <div class="text-small text-muted"><span class="text-danger"><i
	              class="fas fa-caret-down"></i></span> 5,830</div>
	      </div>
	      <div class="col-sm-3 col-6 text-center">
	        <div class="img-shadow flag-icon flag-icon-ch"></div>
	        <div class="mt-2 font-weight-bold text-nowrap">Switzerland</div>
	        <div class="text-small text-muted">4,763</div>
	      </div>
	    </div>
	  </div>
	</div>
	</div>
	<div class="col-12 col-sm-12 col-lg-6 mt-lg-0 mt-sm-4">
	<div class="card">
	  <div class="card-header">
	    <h4>Referral URL</h4>
	  </div>
	  <div class="card-body">
	    <canvas id="myChart3" height="170"></canvas>
	    <div class="mb-4 mt-4">
	      <div class="text-small float-right font-weight-bold text-muted">558</div>
	      <div class="font-weight-bold mb-1">Google</div>
	      <div class="progress" data-height="4" data-toggle="tooltip" title="58%">
	        <div class="progress-bar bg-success" data-width="58%"></div>
	      </div>
	    </div>
	    <div class="mb-4">
	      <div class="text-small float-right font-weight-bold text-muted">338</div>
	      <div class="font-weight-bold mb-1">Facebook</div>
	      <div class="progress" data-height="4" data-toggle="tooltip" title="44%">
	        <div class="progress-bar bg-purple" data-width="44%"></div>
	      </div>
	    </div>
	    <div class="mb-4">
	      <div class="text-small float-right font-weight-bold text-muted">238</div>
	      <div class="font-weight-bold mb-1">Bing</div>
	      <div class="progress" data-height="4" data-toggle="tooltip" title="32%">
	        <div class="progress-bar bg-orange" data-width="32%"></div>
	      </div>
	    </div>
	    <div class="mb-4">
	      <div class="text-small float-right font-weight-bold text-muted">190</div>
	      <div class="font-weight-bold mb-1">Yahoo</div>
	      <div class="progress" data-height="4" data-toggle="tooltip" title="22%">
	        <div class="progress-bar bg-cyan" data-width="22%"></div>
	      </div>
	    </div>
	  </div>
	</div>
	</div>
	</div>
	<div class="row">
	<div class="col-lg-6 col-md-12 col-12 col-sm-12">
	<div class="card mt-sm-5 mt-md-0">
	  <div class="card-header">
	    <h4>Visitors</h4>
	  </div>
	  <div class="card-body">
	    <canvas id="donutChart"></canvas>
	    <ul class="p-t-30 list-unstyled">
	      <li class="padding-5"><span><i class="fa fa-circle m-r-5 col-black"></i></span>Search Engines<span
	          class="float-right">30%</span></li>
	      <li class="padding-5"><span><i class="fa fa-circle m-r-5 col-green"></i></span>Direct Click<span
	          class="float-right">50%</span></li>
	      <li class="padding-5"><span><i class="fa fa-circle m-r-5 col-orange"></i></span>Video Click<span
	          class="float-right">20%</span></li>
	    </ul>
	  </div>
	</div>
	</div>
	<div class="col-lg-6 col-md-12 col-12 col-sm-12">
	<div class="card">
	  <div class="card-header">
	    <h4>Authors</h4>
	  </div>
	  <div class="card-body">
	    <h3 class="card-title"><i class="fas fa-dollar-sign col-green font-30 p-b-10"></i> 763,215</h3>
	    <canvas id="line-chart3"></canvas>
	    <div class="row p-t-20">
	      <div class="col-4">
	        <p class="text-muted font-15 text-truncate m-b-5">Target</p>
	        <h5>
	          <i class="fas fa-arrow-circle-up col-green m-r-5"></i>$15.3k
	        </h5>
	      </div>
	      <div class="col-4">
	        <p class="text-muted font-15 text-truncate m-b-5">Last
	          week</p>
	        <h5>
	          <i class="fas fa-arrow-circle-down col-red m-r-5"></i>$2.8k
	        </h5>
	      </div>
	      <div class="col-4">
	        <p class="text-muted text-truncate m-b-5">Last
	          Month</p>
	        <h5>
	          <i class="fas fa-arrow-circle-up col-green m-r-5"></i>$12.5k
	        </h5>
	      </div>
	    </div>
	  </div>
	</div>
	</div>
	</div>
	</div>
@endsection
@push('scripts')
<script>
	"use strict";

var sparkline_values = [10, 7, 4, 8, 5, 8, 6, 5, 2, 4, 7, 4, 9, 6, 5, 9];
var sparkline_values_chart = [2, 6, 4, 8, 3, 5, 2, 7];
var sparkline_values_bar = [10, 7, 4, 8, 5, 8, 6, 5, 2, 4, 7, 4, 9, 10, 7, 4, 8, 5, 8, 6, 5, 2, 4, 7, 4, 9, 8, 6, 5, 2, 4, 7, 4, 9, 10, 2, 4, 7, 4, 9, 7, 4, 8, 5, 8, 6, 5];

$('.sparkline-inline').sparkline(sparkline_values, {
  type: 'line',
  width: '100%',
  height: '32',
  lineWidth: 3,
  lineColor: 'rgba(87,75,144,.1)',
  fillColor: 'rgba(87,75,144,.25)',
  highlightSpotColor: 'rgba(87,75,144,.1)',
  highlightLineColor: 'rgba(87,75,144,.1)',
  spotRadius: 3,
});

$('.sparkline-line').sparkline(sparkline_values, {
  type: 'line',
  width: '100%',
  height: '32',
  lineWidth: 3,
  lineColor: 'rgba(63, 82, 227, .5)',
  fillColor: 'transparent',
  highlightSpotColor: 'rgba(63, 82, 227, .5)',
  highlightLineColor: 'rgba(63, 82, 227, .5)',
  spotRadius: 3,
});

$('.sparkline-line-chart').sparkline(sparkline_values_chart, {
  type: 'line',
  width: '100%',
  height: '32',
  lineWidth: 2,
  lineColor: 'rgba(63, 82, 227, .5)',
  fillColor: 'transparent',
  highlightSpotColor: 'rgba(63, 82, 227, .5)',
  highlightLineColor: 'rgba(63, 82, 227, .5)',
  spotRadius: 2,
});
$('.sparkline-line-chart2').sparkline(sparkline_values_chart, {
  type: "line",
  width: "100%",
  height: "100",
  lineWidth: 3,
  lineColor: "white",
  fillColor: "transparent",
  highlightSpotColor: "rgba(63,82,227,.1)",
  highlightLineColor: "rgba(63,82,227,.1)",
  spotRadius: 3
});

$(".sparkline-bar").sparkline(sparkline_values_bar, {
  type: "bar",
  width: "100%",
  height: "100",
  barColor: "white",
  barWidth: 2
});


var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
    datasets: [{
      label: 'Statistics',
      data: [460, 458, 330, 502, 430, 610, 488],
      borderWidth: 2,
      backgroundColor: 'rgba(145,141,197,.8)',
      borderWidth: 0,
      borderColor: 'transparent',
      pointBorderWidth: 0,
      pointRadius: 3.5,
      pointBackgroundColor: 'transparent',
      pointHoverBackgroundColor: 'rgba(63,82,227,.8)',
    }, {
      label: 'Statistics',
      data: [390, 600, 390, 280, 600, 430, 638],
      borderWidth: 2,
      backgroundColor: 'rgba(58,184,214,.7)',
      borderWidth: 0,
      borderColor: 'transparent',
      pointBorderWidth: 0,
      pointRadius: 3.5,
      pointBackgroundColor: 'transparent',
      pointHoverBackgroundColor: 'rgba(254,86,83,.8)',
    }]
  },
  options: {
    legend: {
      display: false
    },
    scales: {
      yAxes: [{
        gridLines: {
          drawBorder: false,
          color: '#f2f2f2',
        },
        ticks: {
          beginAtZero: true,
          stepSize: 200,
          fontColor: "#9aa0ac", // Font Color
          callback: function (value, index, values) {
            return value;
          }
        }
      }],
      xAxes: [{
        gridLines: {
          display: false,
          tickMarkLength: 15,
        },
        ticks: {
          fontColor: "#9aa0ac", // Font Color
        }
      }]
    },
  }
});

var ctx = document.getElementById("myChart2").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
    datasets: [{
      label: 'Statistics',
      data: [428, 354, 425, 528, 450, 632, 429],
      borderWidth: 2,
      backgroundColor: 'rgba(255,164,38,.9)',
      borderColor: 'rgba(255,164,38,.9)',
      borderWidth: 2.5,
      pointBackgroundColor: '#ffffff',
      pointRadius: 4
    }, {
      label: 'Statistics',
      data: [468, 387, 401, 574, 498, 568, 452],
      borderWidth: 2,
      backgroundColor: 'rgba(71,65,98,.9)',
      borderColor: 'transparent',
      borderWidth: 0,
      pointBackgroundColor: '#999',
      pointRadius: 4
    }]
  },
  options: {
    legend: {
      display: false
    },
    scales: {
      yAxes: [{
        gridLines: {
          drawBorder: false,
          color: '#f2f2f2',
        },
        ticks: {
          beginAtZero: true,
          stepSize: 150,
          fontColor: "#9aa0ac", // Font Color
        }
      }],
      xAxes: [{
        gridLines: {
          display: false
        },
        ticks: {
          fontColor: "#9aa0ac", // Font Color
        }
      }]
    },
  }
});

var ctx = document.getElementById("myChart3").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
    datasets: [{
      label: 'Google',
      data: [290, 358, 220, 402, 440, 510, 688],
      borderWidth: 2,
      backgroundColor: 'transparent',
      borderColor: 'rgba(254,86,83,.7)',
      borderWidth: 2.5,
      pointBackgroundColor: 'transparent',
      pointBorderColor: 'transparent',
      pointRadius: 4
    },
    {
      label: 'Facebook',
      data: [450, 258, 390, 162, 650, 570, 438],
      borderWidth: 2,
      backgroundColor: 'transparent',
      borderColor: 'rgba(63,82,227,.8)',
      borderWidth: 0,
      pointBackgroundColor: 'transparent',
      pointBorderColor: 'transparent',
      pointRadius: 4
    },
    ]
  },
  options: {
    legend: {
      display: false
    },
    scales: {
      yAxes: [{
        gridLines: {
          drawBorder: false,
          color: '#f2f2f2',
        },
        ticks: {
          beginAtZero: true,
          stepSize: 200,
          fontColor: "#9aa0ac", // Font Color
        }
      }],
      xAxes: [{
        gridLines: {
          display: false
        },
        ticks: {
          fontColor: "#9aa0ac", // Font Color
        }
      }]
    },
  }
});

$('#visitorMap4').vectorMap(
  {
    map: 'world_en',
    backgroundColor: '#ffffff',
    borderColor: '#F5AE46',
    borderOpacity: .8,
    borderWidth: 1,
    hoverColor: '#000',
    hoverOpacity: .8,
    color: '#ddd',
    normalizeFunction: 'linear',
    selectedRegions: false,
    showTooltip: true,
    pins: {
      id: '<div class="jqvmap-circle"></div>',
      my: '<div class="jqvmap-circle"></div>',
      th: '<div class="jqvmap-circle"></div>',
      sy: '<div class="jqvmap-circle"></div>',
      eg: '<div class="jqvmap-circle"></div>',
      ae: '<div class="jqvmap-circle"></div>',
      nz: '<div class="jqvmap-circle"></div>',
      tl: '<div class="jqvmap-circle"></div>',
      ng: '<div class="jqvmap-circle"></div>',
      si: '<div class="jqvmap-circle"></div>',
      pa: '<div class="jqvmap-circle"></div>',
      au: '<div class="jqvmap-circle"></div>',
      ca: '<div class="jqvmap-circle"></div>',
      tr: '<div class="jqvmap-circle"></div>',
    },
  });

/* chart shadow */
var draw = Chart.controllers.line.prototype.draw;
Chart.controllers.lineShadow = Chart.controllers.line.extend({
  draw: function () {
    draw.apply(this, arguments);
    var ctx = this.chart.chart.ctx;
    var _stroke = ctx.stroke;
    ctx.stroke = function () {
      ctx.save();
      ctx.shadowColor = '#00000075';
      ctx.shadowBlur = 10;
      ctx.shadowOffsetX = 8;
      ctx.shadowOffsetY = 8;
      _stroke.apply(this, arguments)
      ctx.restore();
    }
  }
});

var balance_chart = document.getElementById("chart-1").getContext('2d');

var balance_chart_bg_color = balance_chart.createLinearGradient(0, 0, 0, 70);
balance_chart_bg_color.addColorStop(0, 'rgba(120, 107, 236, .2)');
balance_chart_bg_color.addColorStop(1, 'rgba(120, 107, 236, 0)');

var myChart = new Chart(balance_chart, {
  type: 'lineShadow',
  data: {
    labels: ['1990', '1991', '1992', '1993', '1994', '1995', '1996', '1997', '1998', '1999', '2000', '2001'],
    datasets: [{
      label: 'Balance',
      data: [50, 61, 80, 50, 72, 52, 60, 41, 30, 45, 70, 40],
      backgroundColor: balance_chart_bg_color,
      borderWidth: 3,
      borderColor: 'rgba(41, 192, 177, 1)',
      pointBorderWidth: 0,
      pointBorderColor: 'transparent',
      pointRadius: 3,
      pointBackgroundColor: 'transparent',
      pointHoverBackgroundColor: 'rgba(120, 107, 236,1)',
    }]
  },
  options: {
    layout: {
      padding: {
        bottom: -1,
        left: -1
      }
    },
    legend: {
      display: false
    },

    scales: {
      yAxes: [{
        gridLines: {
          display: false,
          drawBorder: false,
        },
        ticks: {
          beginAtZero: true,
          display: false,
          fontColor: "#9aa0ac", // Font Color
        }
      }],
      xAxes: [{
        gridLines: {
          drawBorder: false,
          display: false,
        },
        ticks: {
          display: false,
          fontColor: "#9aa0ac", // Font Color
        }
      }]
    },
  }
});

var sales_chart = document.getElementById("chart-2").getContext('2d');

var myChart = new Chart(sales_chart, {
  type: 'lineShadow',
  data: {
    labels: ['1990', '1991', '1992', '1993', '1994', '1995', '1996', '1997', '1998', '1999', '2000', '2001'],
    datasets: [{
      label: 'Sales',
      data: [70, 62, 44, 40, 21, 63, 82, 52, 50, 31, 70, 50],
      borderWidth: 2,
      backgroundColor: balance_chart_bg_color,
      borderWidth: 3,
      borderColor: 'rgba(156, 39, 176, 1)',
      pointBorderWidth: 0,
      pointBorderColor: 'transparent',
      pointRadius: 3,
      pointBackgroundColor: 'transparent',
      pointHoverBackgroundColor: 'rgba(120, 107, 236,1)',
    }]
  },
  options: {
    layout: {
      padding: {
        bottom: -1,
        left: -1
      }
    },
    legend: {
      display: false
    },
    scales: {
      yAxes: [{
        gridLines: {
          display: false,
          drawBorder: false,
        },
        ticks: {
          beginAtZero: true,
          display: false
        }
      }],
      xAxes: [{
        gridLines: {
          drawBorder: false,
          display: false,
        },
        ticks: {
          display: false
        }
      }]
    },
  }
});
var sales_chart = document.getElementById("chart-3").getContext('2d');

var myChart = new Chart(sales_chart, {
  type: 'lineShadow',
  data: {
    labels: ['1990', '1991', '1992', '1993', '1994', '1995', '1996', '1997', '1998', '1999', '2000', '2001'],
    datasets: [{
      label: 'Sales',
      data: [63, 82, 52, 50, 31, 70, 50, 70, 62, 44, 40, 21],
      borderWidth: 2,
      backgroundColor: balance_chart_bg_color,
      borderWidth: 3,
      borderColor: 'rgba(76, 175, 80, 1)',
      pointBorderWidth: 0,
      pointBorderColor: 'transparent',
      pointRadius: 3,
      pointBackgroundColor: 'transparent',
      pointHoverBackgroundColor: 'rgba(120, 107, 236,1)',
    }]
  },
  options: {
    layout: {
      padding: {
        bottom: -1,
        left: -1
      }
    },
    legend: {
      display: false
    },
    scales: {
      yAxes: [{
        gridLines: {
          display: false,
          drawBorder: false,
        },
        ticks: {
          beginAtZero: true,
          display: false
        }
      }],
      xAxes: [{
        gridLines: {
          drawBorder: false,
          display: false,
        },
        ticks: {
          display: false
        }
      }]
    },
  }
});

var ctx = document.getElementById("donutChart").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    datasets: [{
      data: [
        30,
        50,
        20,
      ],
      backgroundColor: [
        '#191d21',
        '#63ed7a',
        '#ffa426',
      ],
      label: 'Dataset 1'
    }],
    labels: [
      'Black',
      'Green',
      'Yellow',
    ],
  },
  options: {
    responsive: true,
    legend: {
      position: 'bottom',
      display: false
    },
  }
});

var ctx = document.getElementById('line-chart3').getContext("2d");

var gradientStroke = ctx.createLinearGradient(0, 0, 700, 0);
gradientStroke.addColorStop(0, 'rgba(255, 204, 128, 1)');
gradientStroke.addColorStop(0.5, 'rgba(255, 152, 0, 1)');
gradientStroke.addColorStop(1, 'rgba(239, 108, 0, 1)');

var myChart = new Chart(ctx, {
  type: 'lineShadow',
  data: {
    labels: ["2010", "2011", "2012", "2013", "2014", "2015", "2016"],
    type: 'line',
    defaultFontFamily: 'Poppins',
    datasets: [{
      label: "Income",
      data: [0, 30, 10, 120, 50, 63, 10],
      borderColor: gradientStroke,
      pointBorderColor: gradientStroke,
      pointBackgroundColor: gradientStroke,
      pointHoverBackgroundColor: gradientStroke,
      pointHoverBorderColor: gradientStroke,
      pointBorderWidth: 10,
      pointHoverRadius: 6,
      pointHoverBorderWidth: 1,
      pointRadius: 1,
      fill: false,
      borderWidth: 4,
    }, {
      label: "Expense",
      data: [0, 50, 40, 80, 40, 79, 120],
      borderColor: gradientStroke,
      pointBorderColor: gradientStroke,
      pointBackgroundColor: gradientStroke,
      pointHoverBackgroundColor: gradientStroke,
      pointHoverBorderColor: gradientStroke,
      pointBorderWidth: 10,
      pointHoverRadius: 6,
      pointHoverBorderWidth: 1,
      pointRadius: 1,
      fill: false,
      borderWidth: 4,
    }]
  },


  options: {
    legend: {
      position: "bottom",
      display: false
    },
    scales: {
      yAxes: [{
        ticks: {
          fontColor: "rgba(0,0,0,0.5)",
          fontStyle: "bold",
          beginAtZero: true,
          maxTicksLimit: 5,
          padding: 20,
          fontColor: "#9aa0ac", // Font Color
        },
        gridLines: {
          drawTicks: false,
          display: false
        }

      }],
      xAxes: [{
        gridLines: {
          zeroLineColor: "transparent"
        },
        ticks: {
          padding: 20,
          fontColor: "rgba(0,0,0,0.5)",
          fontStyle: "bold",
          fontColor: "#9aa0ac", // Font Color
        }
      }]
    }
  }
});

// revenue chart 
var options = {
  chart: {
    height: 230,
    type: "line",
    shadow: {
      enabled: true,
      color: "#000",
      top: 18,
      left: 7,
      blur: 10,
      opacity: 1
    },
    toolbar: {
      show: false
    }
  },
  colors: ["#3dc7be", "#ffa117"],
  dataLabels: {
    enabled: true
  },
  stroke: {
    curve: "smooth"
  },
  series: [{
    name: "High - 2019",
    data: [5, 15, 14, 36, 32, 32]
  },
  {
    name: "Low - 2019",
    data: [7, 11, 30, 18, 25, 13]
  }
  ],
  grid: {
    borderColor: "#e7e7e7",
    row: {
      colors: ["#f3f3f3", "transparent"], // takes an array which will be repeated on columns
      opacity: 0.0
    }
  },
  markers: {
    size: 6
  },
  xaxis: {
    categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],

    labels: {
      style: {
        colors: "#9aa0ac"
      }
    }
  },
  yaxis: {
    title: {
      text: "Income"
    },
    labels: {
      style: {
        color: "#9aa0ac"
      }
    },
    min: 5,
    max: 40
  },
  legend: {
    position: "top",
    horizontalAlign: "right",
    floating: true,
    offsetY: -25,
    offsetX: -5
  }
};

var chart = new ApexCharts(document.querySelector("#revenue"), options);

chart.render();


</script>
@endpush
