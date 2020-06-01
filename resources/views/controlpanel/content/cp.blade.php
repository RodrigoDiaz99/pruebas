 <head>
   <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
 </head>

 <body class="hold-transition sidebar-mini layout-fixed">
   <div class="wrapper">
     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <div class="content-header">
         <div class="container-fluid">
           <div class="row mb-2">
             <div class="col-sm-6">
               <h1 class="m-0 text-dark">Inicio</h1>
             </div><!-- /.col -->
             <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                 <li class="breadcrumb-item"><a href="#">Panel de control</a></li>
                 <li class="breadcrumb-item active">Inicio
                 </li>
             </div>
           </div>
           </ol>
         </div><!-- /.col -->
       </div><!-- /.row -->
       <div>
         <div class="wrap">
           <div class="widget">
             <div class="fecha">
               <p id="diaSemana" class="diaSemana">Martes</p>
               <p id="dia" class="dia">27</p>
               <p>de </p>
               <p id="mes" class="mes">Octubre</p>
               <p>del </p>
               <p id="year" class="year">2015</p>
             </div>
             <div class="reloj">
               <p id="horas" class="horas">11</p>
               <p>:</p>
               <p id="minutos" class="minutos">48</p>
               <p>:</p>
               <div class="caja-segundos">
                 <p id="ampm" class="ampm">AM</p>
                 <p id="segundos" class="segundos">12</p>
               </div>
             </div>
           </div>
         </div><!-- /.container-fluid -->
       </div>
       <!-- /.content-header -->
     </div>
     <footer class="main-footer">
       @yield('footer')
     </footer>
     <!-- Control Sidebar -->
     <aside class="control-sidebar control-sidebar-dark">
       <!-- Control sidebar content goes here -->
     </aside>
     <!-- /.control-sidebar -->
   </div>
   <!-- ./wrapper -->
   <!-- jQuery -->
 </body>
 <link rel="stylesheet" href="{{ asset('/css/reloj.css') }}">
 <script src="{{ asset('dist/js/reloj.js') }}"></script>