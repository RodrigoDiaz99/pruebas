 <body class="hold-transition sidebar-mini">
     <div class="wrapper">
         <div class="content-wrapper">
             <section class="content-header">
                 <div class="container-fluid">
                     <div class="row mb-2">
                         <div class="col-sm-6">
                             <h1>Lista de pacientes</h1>
                         </div>
                         <div class="col-sm-6">
                             <ol class="breadcrumb float-sm-right">
                                 <li class="breadcrumb-item"><a href="#">Home</a></li>
                                 <li class="breadcrumb-item active">Pacientes registrados</li>
                             </ol>
                         </div>
                     </div>
                 </div>
             </section>
             <section class="content">
                 <div class="row">
                     <div class="col-12">
                         <div class="card">
                             <div class="card-header">
                                 <h3 class="card-title">Lista de pacientes</h3>
                             </div>
                             <div class="card-body">
                                 <table id="example1" class="table table-bordered table-striped">
                                     <thead>
                                         <tr>
                                             <th>Nombre(s)</th>
                                             <th>Apellido Paterno</th>
                                             <th>Apellido Materno</th>
                                             <th>Edad</th>
                                             <th>Expediente</th>
                                         </tr>
                                     </thead>
                                     <tfoot>
                                         <tr>
                                             <th>Nombre(s)</th>
                                             <th>Apellido Paterno</th>
                                             <th>Apellido Materno</th>
                                             <th>Edad</th>
                                             <th>Expediente</th>
                                         </tr>
                                     </tfoot>
                                     <tbody>
                                         @foreach($pacientes as $i)
                                         <tr>
                                             <td>{{$i->nombre_paciente}}</td>
                                             <td>{{$i->apellido_paterno}}</td>
                                              <td>{{$i->apellido_materno}}</td>
                                             <td>{{$i->edad}}</td>
                                             <td><a href="{{url('/lista-pacientes/'.$i->id_paciente.'/edit')}}"> Ver expediente</a></td>
                                         </tr>
                                         @endforeach
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>
             </section>
         </div>
         <footer class="main-footer">
             @yield('footer')
         </footer>
     </div>
     <script>
         function capitalizeFirstLetter(string) {
             return string.charAt(0).toUpperCase() + string.slice(1);
         }
         $(function() {
             $("#example1").DataTable();
             $('#example2').DataTable({
                 "paging": true,
                 "lengthChange": false,
                 "searching": false,
                 "ordering": true,
                 "info": true,
                 "autoWidth": false,
             });
         });
     </script>
 </body>