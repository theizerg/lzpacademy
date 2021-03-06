<div class="row">
  <div class="col-4">
    <label>Nombres: </label>
    <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i data-feather="user"></i></span>
        </div>
       {!! Form::text('name',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Nombres']) !!}
    </div>
  </div>
   <div class="col-4">
    <label>Apellidos: </label>
     <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-user-tie"></i></span>
        </div>
       {!! Form::text('lastname',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Apellidos']) !!}
    </div>
  </div>
  <div class="col-4">
    <label>Tipo de documento: </label>
     <div class="input-group input-group-merge mb-2">
      
      <select name="tipo_documento" class="form-control">
        <option value="cedula">Cédula</option>
        <option value="pasaporte">Pasaporte</option>
      </select>
    </div>
  </div>
  <div class="col-4">
    <label>Documento: </label>
     <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-id-card"></i></span>
        </div>
       {!! Form::text('documento',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Documento']) !!}
    </div>
  </div>
  <div class="col-4">
    <label>Correo: </label>
     <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
           <span class="input-group-text" id="basic-addon1">@</span>
        </div>
       {!! Form::text('email',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Correo electrónico']) !!}
    </div>
  </div>
   <div class="col-4">
    <label>Teléfono: </label>
     <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-phone"></i></span>
        </div>
       {!! Form::text('telefono',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Teléfono']) !!}
    </div>
  </div>
   <div class="col-4">
    <label>Lugar de nacimiento: </label>
     <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-map"></i></span>
        </div>
       {!! Form::text('lugar_nacimiento',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Lugar de nacimiento']) !!}
    </div>
  </div>
    <div class="col-4">
    <label>Fecha de nacimiento: </label>
     <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-calendar"></i></span>
        </div>
       {!! Form::text('fecha_nacimiento',null,['class'=>'form-control flatpickr-basic', 'required' => 'required','autocomplete' =>'off','placeholder' =>'YYYY-MM-DD','id' => 'fp-default']) !!}
       
    </div>
  </div>
  <div class="col-4">
    <label>Edad: </label>
     <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fab fa-old-republic"></i></span>
        </div>
       {!! Form::number('edad',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Edad']) !!}
    </div>
  </div>
@php
  $cargos =  App\Models\Cargo::pluck('name','id');
  $generos = App\Models\Genero::pluck('name','id');
  $estadocivil = App\Models\EstadoCivil::pluck('name','id')
@endphp
 <div class="col-4">
    <label>Cargo: </label>
     <div class="input-group input-group-merge mb-2">
        
      {!! Form::select('cargo_id', $cargos, null, ['class' => 'form-control ']) !!}
     </div>
 </div>
 <div class="col-4">
    <label>Géneros: </label>
     <div class="input-group input-group-merge mb-2">
        
      {!! Form::select('genero_id', $generos, null, ['class' => 'form-control ']) !!}
     </div>
 </div>
  <div class="col-4">
    <label>Estado Civil: </label>
     <div class="input-group input-group-merge mb-2">
        
      {!! Form::select('estado_civil_id', $estadocivil, null, ['class' => 'form-control ']) !!}
     </div>
 </div>
  <div class="col-12">
       <label for="textarea-counter">Dirección del empleado</label>
        <div class="form-label-group mb-0">
            
             {!! Form::textarea('direccion',null,['class'=>'form-control char-textarea', 'required' => 'required','autocomplete' =>'off','id' =>'textarea-counter',' data-length' => '60','rows'=>'3']) !!}
         
        </div>
        <small class="textarea-counter-value float-right"><span class="char-count">0</span> / 60 </small>
    </div>
    <div class="col-md-12 text-center">  
                                      
          <div class="checkbox icheck">  <br>

            <label>
               <b for="textarea-counter">Estado del empleado</b><br>
              <input type="radio" name="status" id="status" value="1" checked>  Activo&nbsp;&nbsp;
              <input type="radio" name="status" id="status" value="0"> Inactivo&nbsp;&nbsp;
            </label>
          </div>
      </div>
  </div>


 
</div>

@push('scripts')
    <script>
      /*=========================================================================================
    File Name: pickers.js
    Description: Pick a date/time Picker, Date Range Picker JS
    ----------------------------------------------------------------------------------------
    Item Name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
    Author: Pixinvent
    Author URL: hhttp://www.themeforest.net/user/pixinvent
==========================================================================================*/
(function (window, document, $) {
  'use strict';

  /*******  Flatpickr  *****/
  var basicPickr = $('.flatpickr-basic'),
    timePickr = $('.flatpickr-time'),
    dateTimePickr = $('.flatpickr-date-time'),
    multiPickr = $('.flatpickr-multiple'),
    rangePickr = $('.flatpickr-range'),
    humanFriendlyPickr = $('.flatpickr-human-friendly'),

    inlineRangePickr = $('.flatpickr-inline');

  // Default
  if (basicPickr.length) {
    basicPickr.flatpickr();
  }

  // Time
  if (timePickr.length) {
    timePickr.flatpickr({
      enableTime: true,
      dateFormat: "Y-m-d H:i",
      noCalendar: true
    });
  }

  // Date & TIme
  if (dateTimePickr.length) {
    dateTimePickr.flatpickr({
      enableTime: true
    });
  }

  // Multiple Dates
  if (multiPickr.length) {
    multiPickr.flatpickr({
      weekNumbers: true,
      mode: 'multiple',
      minDate: 'today'
    });
  }

  // Range
  if (rangePickr.length) {
    rangePickr.flatpickr({
      mode: 'range'
    });
  }

  // Human Friendly
  if (humanFriendlyPickr.length) {
    humanFriendlyPickr.flatpickr({
      altInput: true,
      altFormat: 'F j, Y',
      dateFormat: 'Y-m-d'
    });
  }


  // Inline
  if (inlineRangePickr.length) {
    inlineRangePickr.flatpickr({
      inline: true
    });
  }
  /*******  Pick-a-date Picker  *****/
  // Basic date
  $('.pickadate').pickadate();

  // Format Date Picker
  $('.format-picker').pickadate({
    format: 'mmmm, d, yyyy'
  });

  // Date limits
  $('.pickadate-limits').pickadate({
    min: [2019, 3, 20],
    max: [2019, 5, 28]
  });

  // Disabled Dates & Weeks

  $('.pickadate-disable').pickadate({
    disable: [1, [2019, 3, 6], [2019, 3, 20]]
  });

  // Picker Translations
  $('.pickadate-translations').pickadate({
    formatSubmit: 'dd/mm/yyyy',
    monthsFull: [
      'Janvier',
      'Février',
      'Mars',
      'Avril',
      'Mai',
      'Juin',
      'Juillet',
      'Août',
      'Septembre',
      'Octobre',
      'Novembre',
      'Décembre'
    ],
    monthsShort: ['Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Aou', 'Sep', 'Oct', 'Nov', 'Dec'],
    weekdaysShort: ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'],
    today: "aujourd'hui",
    clear: 'clair',
    close: 'Fermer'
  });

  // Month Select Picker
  $('.pickadate-months').pickadate({
    selectYears: false,
    selectMonths: true
  });

  // Month and Year Select Picker
  $('.pickadate-months-year').pickadate({
    selectYears: true,
    selectMonths: true
  });

  // Short String Date Picker
  $('.pickadate-short-string').pickadate({
    weekdaysShort: ['S', 'M', 'Tu', 'W', 'Th', 'F', 'S'],
    showMonthsShort: true
  });

  // Change first weekday
  $('.pickadate-firstday').pickadate({
    firstDay: 1
  });

  /*******    Pick-a-time Picker  *****/
  // Basic time
  $('.pickatime').pickatime();

  // Format options
  $('.pickatime-format').pickatime({
    // Escape any “rule” characters with an exclamation mark (!).
    format: 'T!ime selected: h:i a',
    formatLabel: 'HH:i a',
    formatSubmit: 'HH:i',
    hiddenPrefix: 'prefix__',
    hiddenSuffix: '__suffix'
  });

  // Format options
  $('.pickatime-formatlabel').pickatime({
    formatLabel: function (time) {
      var hours = (time.pick - this.get('now').pick) / 60,
        label = hours < 0 ? ' !hours to now' : hours > 0 ? ' !hours from now' : 'now';
      return 'h:i a <sm!all>' + (hours ? Math.abs(hours) : '') + label + '</sm!all>';
    }
  });

  // Min - Max Time to select
  $('.pickatime-min-max').pickatime({
    // Using Javascript
    min: new Date(2015, 3, 20, 7),
    max: new Date(2015, 7, 14, 18, 30)

    // Using Array
    // min: [7,30],
    // max: [14,0]
  });

  // Intervals
  $('.pickatime-intervals').pickatime({
    interval: 150
  });

  // Disable Time
  $('.pickatime-disable').pickatime({
    disable: [
      // Disable Using Integers
      3,
      5,
      7,
      13,
      17,
      21

      /* Using Array */
      // [0,30],
      // [2,0],
      // [8,30],
      // [9,0]
    ]
  });

  // Close on a user action
  $('.pickatime-close-action').pickatime({
    closeOnSelect: false,
    closeOnClear: false
  });
})(window, document, jQuery);

    </script>
     <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
@endpush
