<div class="row">
@php
  $cursos =  App\Models\Curso::pluck('name','id');
  $niveles = App\Models\Nivel::pluck('name','id');
  $condicion = App\Models\TipoCondicion::pluck('name','id');
  $turno = App\Models\Turno::pluck('name','id')
@endphp

<div class="col-6">
    <label>Turno: </label>
     <div class="input-group input-group-merge mb-2">
        
      {!! Form::select('turno_id', $turno, null, ['class' => 'form-control ']) !!}
     </div>
 </div>

 <div class="col-6">
    <label>Curso: </label>
     <div class="input-group input-group-merge mb-2">
        
      {!! Form::select('curso_alumno_id', $cursos, null, ['class' => 'form-control ']) !!}
     </div>
 </div>
  <div class="col-6">
    <label>Nievel del alumno: </label>
     <div class="input-group input-group-merge mb-2">
        
      {!! Form::select('nivel_alumno_id', $niveles, null, ['class' => 'form-control ']) !!}
     </div>
 </div>
 <input type="hidden" name="alumno_id" value="{{ $element->id }}">
  <div class="col-6">
    <label>Condición del alumno: </label>
     <div class="input-group input-group-merge mb-2">
        
      {!! Form::select('tipo_condicion_alumno_id', $condicion, null, ['class' => 'form-control ']) !!}
     </div>
 </div>
 <div class="col-12">
    <label>Fecha de matrícula: </label>
     <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-calendar"></i></span>
        </div>
       {!! Form::text('fecha_matricula',null,['class'=>'form-control flatpickr-basic', 'required' => 'required','autocomplete' =>'off','placeholder' =>'YYYY-MM-DD','id' => 'fp-default']) !!}
       
    </div>
  </div>
  <div class="col-12">
       <label for="textarea-counter">Observación de la matrícula</label>
        <div class="form-label-group mb-0">
            
             {!! Form::textarea('tx_observaciones',null,['class'=>'form-control char-textarea', 'required' => 'required','autocomplete' =>'off','id' =>'textarea-counter',' data-length' => '60','rows'=>'3']) !!}
         
        </div>
        <small class="textarea-counter-value float-right"><span class="char-count">0</span> / 60 </small>
    </div>
    <div class="col-md-12 text-center">  
                                      
          <div class="">  <br>

            <label>
               <b for="textarea-counter">Estado de la matrícula</b><br>
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
    
@endpush
