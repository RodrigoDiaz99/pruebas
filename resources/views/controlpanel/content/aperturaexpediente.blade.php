<body class="hold-transition sidebar-mini">
    <div class="content-wrapper">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Apertura de expediente</h3>
            </div>
            <div class="card-body">
                <form method="POST">
                    @csrf
                    <!-- Main content -->
                    <section class="content">
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">



                                    <label>Paciente</label>
                                    <input required type="text" id="ph" value="" class="form-control" placeholder="Antecedentes">
                                    <select id="nombre" onchange="myFunction()" class="form-control" style="width: max-content;">

                                        <option selected="selected">- Seleccione -</option>
                                        @foreach($pacientes as $i)
                                        <option>{{$i->id_paciente}} {{$i->nombre_paciente}} {{$i->apellido_paterno}} {{$i->apellido_materno}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>

                        </div><!-- /.container-fluid -->
                        <div class="row">

                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Antecedentes</label>
                                    <input required type="text" id="antecedentes" value=" " class="form-control" placeholder="Antecedentes">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Peso</label>
                                    <input required type="text" id="peso" value="" class="form-control" placeholder="Peso">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Talla</label>
                                    <input required type="text" id="talla" value="" class="form-control" placeholder="Talla">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Estatura</label>
                                    <input required type="text" id="estatura" value="" class="form-control" placeholder="Estatura">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Categoría</label>
                                    <select id="categoria" class="form-control" style="width: max-content;">
                                        <option selected="selected">- Seleccione -</option>
                                        @foreach($categoria as $i)
                                        <option>{{$i->categoria}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Inicio Radios-->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group clearfix">
                                    <label for="radioDiabetes">
                                        Diabetes
                                    </label>
                                    <div class="icheck-primary d-inline">
                                        <input type="radio" id="radioDiabetesSi" name="radioDiabetes" value="si">
                                        <label for="radioDiabetesSi"> Sí
                                        </label>
                                    </div>
                                    <div class="icheck-primary d-inline">
                                        <input type="radio" id="radioDiabetesNo" name="radioDiabetes" value="no" checked>
                                        <label for="radioDiabetesNo">No
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group clearfix">
                                    <label for="radioTBP">
                                        TB. Pulmonar
                                    </label>
                                    <div class="icheck-primary d-inline">
                                        <input type="radio" id="radioTBPSi" name="radioTBP" value="si">
                                        <label for="radioTBPSi"> Sí
                                        </label>
                                    </div>
                                    <div class="icheck-primary d-inline">
                                        <input type="radio" id="radioTBPNo" name="radioTBP" value="no" checked>
                                        <label for="radioTBPNo">No
                                        </label>
                                    </div>
                                </div>
                                <!-- /.card -->
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group clearfix">
                                    <label for="radioInterQ">
                                        Inter. Quirúrgica
                                    </label>
                                    <div class="icheck-primary d-inline">
                                        <input type="radio" id="radioInterQSi" name="radioInterQ" value="si">
                                        <label for="radioInterQSi"> Sí
                                        </label>
                                    </div>
                                    <div class="icheck-primary d-inline">
                                        <input type="radio" id="radioInterQNo" name="radioInterQ" value="no" checked>
                                        <label for="radioInterQNo">No
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group clearfix">
                                    <label for="radioTBP">
                                        Hipertensión
                                    </label>
                                    <div class="icheck-primary d-inline">
                                        <input type="radio" id="radioHTSSi" name="radioHTS" value="si">
                                        <label for="radioHTSSi"> Sí
                                        </label>
                                    </div>
                                    <div class="icheck-primary d-inline">
                                        <input type="radio" id="radioHTSNo" name="radioHTS" value="no" checked>
                                        <label for="radioHTSNo">No
                                        </label>
                                    </div>
                                </div>
                                <!-- /.card -->
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group clearfix">
                                    <label for="radioPatP">
                                        Patol. Psiquiátrica
                                    </label>
                                    <div class="icheck-primary d-inline">
                                        <input type="radio" id="radioPatPSi" name="radioPatP" value="si">
                                        <label for="radioPatPSi"> Sí
                                        </label>
                                    </div>
                                    <div class="icheck-primary d-inline">
                                        <input type="radio" id="radioPatPNo" name="radioPatP" value="no" checked>
                                        <label for="radioPatPNo">No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group clearfix">
                                    <label for="radioConvul">
                                        Convulsiones </label>
                                    <div class="icheck-primary d-inline">
                                        <input type="radio" id="radioConvulSi" name="radioConv" value="si">
                                        <label for="radioConvulSi"> Sí
                                        </label>
                                    </div>
                                    <div class="icheck-primary d-inline">
                                        <input type="radio" id="radioConvulNo" name="radioConv" value="no" checked>
                                        <label for="radioConvulNo">No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!--
                            <div class="col-sm-6">
                                <div class="form-group clearfix">
                                    <label for="radioOtro">
                                        Otros (Especifíque)
                                    </label>
                                    <div class="icheck-primary d-inline">
                                        <input class type="radio" id="radioOtroSi" name="r6">
                                        <label for="radioOtroSi"> Sí
                                        </label>
                                    </div>
                                    <div class="icheck-primary d-inline">
                                        <input type="radio" id="radioOtroNo" name="r6" checked>
                                        <label for="radioOtroNo">No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group clearfix">
                                    <label for="radioLueticas">
                                        Lueticas
                                    </label>
                                    <div class="icheck-primary d-inline">
                                        <input type="radio" id="radioLueticasSi" name="radioLueticas" value="si">
                                        <label for="radioLueticasSi"> Sí
                                            </label>
                                        </div>
                                        <div class="icheck-primary d-inline">
                                            <input type="radio" id="radioLueticasNo" name="radioLueticas" value="no" checked>
                                            <label for="radioLueticasNo">No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                -->
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <button id="btnAgregar" type="button" class="btn btn-success">Agregar</button>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <button type=" " class="btn btn-danger">Cancelar</button>
                            </div>
                        </div>
                        <!-- /.card-body -->
                </form>
            </div>
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            @yield('footer')
        </footer>
    </div>


    <!-- /.card -->
    <!-- Page script -->
    <script>
        function myFunction() {
            var ids = document.getElementById("nombre").selectedIndex - 1;
            var ids2 = {{ json_encode(array_column($pacientes -> toArray(), "id_paciente")) }};
            document.getElementById("ph").value = ids2[ids];
            var idOutput = ids2[ids];
            return  idOutput
        }



        $('#btnAgregar').click(function() {
            saveDB();
        });

        function saveDB() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
            });
            $.ajax({
                type: 'post',
                url: "{{ url('/apertura-expediente')}}/store",
                data: {
                    //Sección Antecedentes Personales
                    id_paciente: myFunction(),
                    diabetes: $("input[name='radioDiabetes']:checked").val(),
                    interv_quirurgica: $("input[name='radioInterQ']:checked").val(),
                    patol_psiquiatrica: $("input[name='radioPatP']:checked").val(),
                    tbpulmonar: $("input[name='radioTBP']:checked").val(),
                    hipertencion: $("input[name='radioHTS']:checked").val(),
                    convulsiones: $("input[name='radioConv']:checked").val(),

                    "_token": $("meta[name='csrf-token']").attr("content"),

                },
                success: function(msg) {

                    console.log(msg);
                    location.reload();
                },
                error: function(msg) {
                    console.log(msg);

                    alert("failed");
                }
            })
        }

        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()
            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', {
                'placeholder': 'dd/mm/yyyy'
            })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', {
                'placeholder': 'mm/dd/yyyy'
            })
            //Money Euro
            $('[data-mask]').inputmask()
            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            })
            //Date range as a button
            $('#daterange-btn').daterangepicker({
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function(start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                }
            )
            //Timepicker
            $('#timepicker').datetimepicker({
                format: 'LT'
            })
            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()
            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()
            $('.my-colorpicker2').on('colorpickerChange', function(event) {
                $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
            });
            $("input[data-bootstrap-switch]").each(function() {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            });
        })
    </script>
</body>