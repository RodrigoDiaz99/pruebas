<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>

<body class="hold-transition sidebar-mini">
    <div class="content-wrapper">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Apertura de expediente</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Nombre(s)</label>
                            <input type="text" class="form-control" value="Karen Elizabeth">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Apellido paterno</label>
                            <input type="text" class="form-control" value="Ayala">
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
                                <input type="text" class="form-control" value="Valladares">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Fecha de nacimiento:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" value="04/06/1998" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
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
                                    <input type="text" value="9992556950" class="form-control" style="width: auto;" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask>
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
                    </div>
                    <div class="row">

                        <div class="col-sm-6">
                            <div class="form-group clearfix">
                                <label for="radioPrimary3">
                                    Diabetes
                                </label>
                                <div class="icheck-primary d-inline">
                                    <input type="radio" id="radioPrimary1" name="r1" checked>
                                    <label for="radioPrimary1"> Sí
                                    </label>
                                </div>
                                <div class="icheck-primary d-inline">
                                    <input type="radio" id="radioPrimary2" name="r1">
                                    <label for="radioPrimary2">No
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group clearfix">
                                <label for="radioPrimary3">
                                    TB. Pulmonar
                                </label>
                                <div class="icheck-primary d-inline">
                                    <input type="radio" id="radioPrimary1" name="r1" checked>
                                    <label for="radioPrimary1"> Sí
                                    </label>
                                </div>
                                <div class="icheck-primary d-inline">
                                    <input type="radio" id="radioPrimary2" name="r1">
                                    <label for="radioPrimary2">No
                                    </label>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group clearfix">
                                <label for="radioPrimary3">
                                    Inter. Quirúrgica
                                </label>
                                <div class="icheck-primary d-inline">
                                    <input type="radio" id="radioPrimary1" name="r1" checked>
                                    <label for="radioPrimary1"> Sí
                                    </label>
                                </div>
                                <div class="icheck-primary d-inline">
                                    <input type="radio" id="radioPrimary2" name="r1">
                                    <label for="radioPrimary2">No
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group clearfix">
                                <label for="radioPrimary3">
                                    Patol. Psiquiátrica
                                </label>
                                <div class="icheck-primary d-inline">
                                    <input type="radio" id="radioPrimary1" name="r1" checked>
                                    <label for="radioPrimary1"> Sí
                                    </label>
                                </div>
                                <div class="icheck-primary d-inline">
                                    <input type="radio" id="radioPrimary2" name="r1">
                                    <label for="radioPrimary2">No
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group clearfix">
                                <label for="radioPrimary3">
                                    Convulsiones </label>
                                <div class="icheck-primary d-inline">
                                    <input type="radio" id="radioPrimary1" name="r1" checked>
                                    <label for="radioPrimary1"> Sí
                                    </label>
                                </div>
                                <div class="icheck-primary d-inline">
                                    <input type="radio" id="radioPrimary2" name="r1">
                                    <label for="radioPrimary2">No
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group clearfix">
                                <label for="radioPrimary3">
                                    Otros (Especifíque)
                                </label>
                                <div class="icheck-primary d-inline">
                                    <input type="radio" id="radioPrimary1" name="r1" checked>
                                    <label for="radioPrimary1"> Sí
                                    </label>
                                </div>
                                <div class="icheck-primary d-inline">
                                    <input type="radio" id="radioPrimary2" name="r1">
                                    <label for="radioPrimary2">No
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group clearfix">
                                <label for="radioPrimary3">
                                    Lueticas
                                </label>
                                <div class="icheck-primary d-inline">
                                    <input type="radio" id="radioPrimary1" name="r1" checked>
                                    <label for="radioPrimary1"> Sí
                                    </label>
                                </div>
                                <div class="icheck-primary d-inline">
                                    <input type="radio" id="radioPrimary2" name="r1">
                                    <label for="radioPrimary2">No
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
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.0.2-pre
            </div>
            <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>
        <!-- Control Sidebar -->

        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <!-- page script -->
    <script>
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

</html>