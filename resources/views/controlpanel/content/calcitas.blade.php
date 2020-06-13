<head>
  <link rel="stylesheet" href="{{ asset('plugins/fullCalendar/core/main.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/fullCalendar/daygrid/main.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/fullCalendar/list/main.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/fullCalendar/timegrid/main.css') }}">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <div class="content-wrapper">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Calendario de citas</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Calendar</li>
              </ol>
            </div>
          </div>
        </div>
      </section>
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="card card-primary">
              <div class="col-9">
                <div id="calendar"></div>
              </div>
            </div>
          </div>
        </div>
    </div>
    </section>
    <footer class="main-footer">
      @yield('footer')
    </footer>
  </div>
  <div class="modal fade" id="modalCalendar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tituloEvento">Agregar cita para el día: </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-row">
            <div class="form-group col-md-12">
              <label>id</label>
              <input class="form-control" type="text" name="txtID" id="txtID">
            </div>
            <div class="form-group col-md-10">
              <label>Titulo de evento</label>
              <input class="form-control" type="text" name="txtTitle" id="txtTitle"> </div>
            <div class="form-group col-md-2">
              <label>Color</label>
              <input class="form-control" type="color" name="txtColor" id="txtColor"> </div>
            <div class="form-group col-md-6">
              <label>Fecha</label>
              <input class="form-control" type="text" name="txtFecha" id="txtFecha"> </div>
            <div class="form-group col-md-6">
              <label>Hora</label>
              <input class="form-control" type="text" name="txtHora" id="txtHora"> </div>
            <div class="form-group col-md-12">
              <label>Descripción</label>
              <textarea class="form-control" name="txtDescription" id="txtDescription" cols="30" rows="10"></textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button id="btnAgregar" type="button" class="btn btn-success">Agregar</button>
          <button id="btnModificar" type="button" class="btn btn-success">Modificar</button>
          <button id="btnBorrar" type="button" class="btn btn-danger">Borrar</button>
          <button id="btnCancelar" type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="{{ asset('plugins/fullCalendar/core/main.js') }}"></script>
<script src="{{ asset('plugins/fullCalendar/interaction/main.js') }}"></script>
<script src="{{ asset('plugins/fullCalendar/daygrid/main.js') }}"></script>
<script src="{{ asset('plugins/fullCalendar/list/main.js') }}"></script>
<script src="{{ asset('plugins/fullCalendar/timegrid/main.js') }}"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: ['dayGrid', 'interaction', 'timeGrid', 'list'],
      events: "{{ url('/calendario-citas/show') }}",
      dateClick: function(info) {
        $('#txtFecha').val(info.dateStr)
        $("#modalCalendar").modal();
      },
      eventClick: function(info) {
        $('#tituloEvento').html(info.title);
        $('#descripcionEvento').html(info.description);
        $('#modalCalendar').modal();
      }
    });
    calendar.setOption('locale', 'Es');
    calendar.render();
    $('#btnAgregar').click(function() {
      saveDB();
    });

    function saveDB() {
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $.ajax({
        type: "POST",
        url: "{{ url('/calendario-citas')}}/store",
        data: {
          id_agenda: $('#txtID').val(),
          title: $('#txtTitle').val(),
          description: $('#txtDescription').val(),
          color: $('#txtColor').val(),
          txtColor: '#FFFFFF',
          start: $('#txtFecha').val() + ' ' + $('#txtHora').val(),
          end: $('#txtFecha').val() + $('#txtHora').val(),
          "_token": $("meta[name='csrf-token']").attr("content"),
        },
        success: function(msg) {
          console.log(msg);
        },
        error: function(data) {
          alert("failed");
        }
      })
    }
  });
</script>

