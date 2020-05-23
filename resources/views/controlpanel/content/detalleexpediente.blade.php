<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>

<body class="hold-transition sidebar-mini">
    <div class="content-wrapper">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Detalles del paciente</h3>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Nombre(s)</label>
                            <input type="text" class="form-control" value="{{$pacientes->nombre_paciente}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Apellido paterno</label>
                            <input type="text" class="form-control" value="{{$pacientes->apellido_paterno}}">
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
                </section>
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Apellido materno</label>
                                <input type="text" class="form-control" value="{{$pacientes->apellido_materno}}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Edad</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" value="{{$pacientes->edad}}" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                </div>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Número telefónico:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="text" value="{{$expediente->telefono}}" class="form-control" style="width: auto;" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask>
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>
                        <!-- /.form group -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Estado</label>
                                <select class="form-control" style="width: max-content;">
                                    <option selected="selected">Yucatán</option>
                                    <option>Alaskaguamas</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Antecedentes</label>
                                <input type="text" value="Alergias, hipertensión" class="form-control" placeholder="Antecedentes">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Peso</label>
                                <input type="text" value="9999kg" class="form-control" placeholder="Antecedentes">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Estatura</label>
                                <input type="text" value="1.99m" class="form-control" placeholder="Antecedentes">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Categoría</label>
                                <select class="form-control" style="width: max-content;">
                                    <option selected="selected">Embarazo</option>
                                    <option>Embarazos</option>
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
                                    <input type="radio" id="radioDiabetesSi" name="r1">
                                    <label for="radioDiabetesSi"> Sí
                                    </label>
                                </div>
                                <div class="icheck-primary d-inline">
                                    <input type="radio" id="radioDiabetesNo" name="r1" checked>
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
                                    <input type="radio" id="radioTBPSi" name="r2">
                                    <label for="radioTBPSi"> Sí
                                    </label>
                                </div>
                                <div class="icheck-primary d-inline">
                                    <input type="radio" id="radioTBPNo" name="r2" checked>
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
                                    <input type="radio" id="radioInterQSi" name="r3">
                                    <label for="radioInterQSi"> Sí
                                    </label>
                                </div>
                                <div class="icheck-primary d-inline">
                                    <input type="radio" id="radioInterQNo" name="r3" checked>
                                    <label for="radioInterQNo">No
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group clearfix">
                                <label for="radioPatP">
                                    Patol. Psiquiátrica
                                </label>
                                <div class="icheck-primary d-inline">
                                    <input type="radio" id="radioPatPSi" name="r4">
                                    <label for="radioPatPSi"> Sí
                                    </label>
                                </div>
                                <div class="icheck-primary d-inline">
                                    <input type="radio" id="radioPatPNo" name="r4" checked>
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
                                    <input type="radio" id="radioConvulSi" name="r5">
                                    <label for="radioConvulSi"> Sí
                                    </label>
                                </div>
                                <div class="icheck-primary d-inline">
                                    <input type="radio" id="radioConvulNo" name="r5" checked>
                                    <label for="radioConvulNo">No
                                    </label>
                                </div>
                            </div>
                        </div>

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
                                    <input type="radio" id="radioLueticasSi" name="r7">
                                    <label for="radioLueticasSi"> Sí
                                    </label>
                                </div>
                                <div class="icheck-primary d-inline">
                                    <input type="radio" id="radioLueticasNo" name="r7" checked>
                                    <label for="radioLueticasNo">No
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <button type=" " class="btn btn-primary">Ver historial</button>
                            <button type=" " class="btn btn-primary">Ver estudios del paciente</button>
                            <button type=" " class="btn btn-primary">Ver colposcopías</button>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <button type=" " class="btn btn-danger">Cancelar</button>
                        </div>
                    </div>
                    <!-- /.card-body -->
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.0.2-pre
        </div>
        </div>
        </div>
        </div>
        <!-- /.card -->
        <!-- Page script -->
        <script>
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

</html>