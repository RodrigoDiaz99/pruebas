<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Calendario</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- fullCalendar -->
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- fullCalendar 2.2.5 -->
  <link rel="stylesheet" href="{{ asset('plugins/fullCalendar/core/main.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/fullCalendar/daygrid/main.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/fullCalendar/list/main.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/fullCalendar/timegrid/main.css') }}">

  <script src="{{ asset('plugins/fullCalendar/core/main.js') }}"></script>
  <script src="{{ asset('plugins/fullCalendar/interaction/main.js') }}"></script>
  <script src="{{ asset('plugins/fullCalendar/daygrid/main.js') }}"></script>
  <script src="{{ asset('plugins/fullCalendar/list/main.js') }}"></script>
  <script src="{{ asset('plugins/fullCalendar/timegrid/main.js') }}"></script>



</head>
<!-- Modal -->

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
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
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- /.col -->
            <div class="card card-primary">
              <div class="col-9">
                <!-- THE CALENDAR -->

                <div id="calendar"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
    </section>
    <footer class="main-footer">
      @yield('footer')
    </footer>

  </div>

  <!-- Modal de agenda -->
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
          <!-- Contenido del modal -->
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
        <!-- Footer modal (botones) -->
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

<!-- Script de fullCalendar -->
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


</html>