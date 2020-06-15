 <body  class="hold-transition sidebar-mini">
     <div class="content-wrapper">
         <div class="card card-primary">
             <div class="card-header">
                 <h3 class="card-title">Detalles del paciente</h3>
             </div>
             <div class="card-body">
                 <div class="row">
                     <div class="col-sm-6">
                         <div class="form-group">
                             <label>Nombre(s)</label>
                             <input disabled type="text" class="form-control" value="{{$pacientes->nombre_paciente}}">
                         </div>
                     </div>
                     <div class="col-sm-6">
                         <div class="form-group">
                             <label>Apellido paterno</label>
                             <input disabled type="text" class="form-control" value="{{$pacientes->apellido_paterno}}">
                         </div>
                     </div>
                 </div>
                 </section>
                 <section class="content">
                     <div class="row">
                         <div class="col-sm-6">
                             <div class="form-group">
                                 <label>Apellido materno</label>
                                 <input disabled type="text" class="form-control" value="{{$pacientes->apellido_materno}}">
                             </div>
                         </div>
                         <div class="col-sm-6">
                             <div class="form-group">
                                 <label>Edad</label>
                                 <div class="input-group">
                                     <div class="input-group-prepend">
                                         <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                     </div>
                                     <input disabled type="text" class="form-control" value="{{$pacientes->edad}}" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="form-group">
                                 <label>Número telefónico:</label>
                                 <div class="input-group">
                                     <div class="input-group-prepend">
                                         <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                     </div>
                                     <input disabled type="text" value="{{$expediente->telefono}}" class="form-control" style="width: auto;" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask>
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="form-group">
                                 <label>Estado</label>
                                 <select disabled class="form-control" style="width: max-content;">
                                     <option selected="selected">Yucatán</option>
                                     <option>Alaskaguamas</option>
                                 </select>
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
                                        <input disabled type="radio" id="radioDiabetesSi" name="radioDiabetes" value="si">
                                        <label for="radioDiabetesSi"> Sí
                                        </label>
                                    </div>
                                    <div class="icheck-primary d-inline">
                                        <input disabled type="radio" id="radioDiabetesNo" name="radioDiabetes" value="no" checked>
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
                                        <input disabled type="radio" id="radioTBPSi" name="radioTBP" value="si">
                                        <label for="radioTBPSi"> Sí
                                        </label>
                                    </div>
                                    <div class="icheck-primary d-inline">
                                        <input disabled type="radio" id="radioTBPNo" name="radioTBP" value="no" checked>
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
                                        <input disabled type="radio" id="radioInterQSi" name="radioInterQ" value="si">
                                        <label for="radioInterQSi"> Sí
                                        </label>
                                    </div>
                                    <div class="icheck-primary d-inline">
                                        <input disabled type="radio" id="radioInterQNo" name="radioInterQ" value="no" checked>
                                        <label for="radioInterQNo">No
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group clearfix">
                                    <label for="radioHTS">
                                        Hipertensión
                                    </label>
                                    <div class="icheck-primary d-inline">
                                        <input disabled type="radio" id="radioHTSSi" name="radioHTS" value="si">
                                        <label for="radioHTSSi"> Sí
                                        </label>
                                    </div>
                                    <div class="icheck-primary d-inline">
                                        <input disabled type="radio" id="radioHTSNo" name="radioHTS" value="no" checked>
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
                                        <input disabled type="radio" id="radioPatPSi" name="radioPatP" value="si">
                                        <label for="radioPatPSi"> Sí
                                        </label>
                                    </div>
                                    <div class="icheck-primary d-inline">
                                        <input disabled type="radio" id="radioPatPNo" name="radioPatP" value="no" checked>
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
                                        <input disabled type="radio" id="radioConvulSi" name="radioConv" value="si">
                                        <label for="radioConvulSi"> Sí
                                        </label>
                                    </div>
                                    <div class="icheck-primary d-inline">
                                        <input disabled type="radio" id="radioConvulNo" name="radioConv" value="no" checked>
                                        <label for="radioConvulNo">No
                                        </label>
                                    </div>
                                </div>
                            </div>
                     <div class="col-sm-6">
                         <div class="form-group">
                             <button onclick="verificarRadio()" type=" " class="btn btn-primary">Update</button>
                             <!--  <button type=" " class="btn btn-primary">Ver estudios del paciente</button>
                             <button type=" " class="btn btn-primary">Ver colposcopías</button>  -->
                         </div>
                     </div>
                     <!-- 
                          <div class="col-sm-6">
                         <div class="form-group">
                             <button type=" " class="btn btn-danger">Cancelar</button>
                         </div>
                     </div>
                    -->
             </div>
         </div>
     </div>
     </div>
     <footer class="main-footer">
         @yield('footer')
     </footer>
     <script>

$(document).ready(verificarRadio());

         function verificarRadio() {
            //Tomar datos de la BD
            var rDiabetes = {!! json_encode($antecedentesP->diabetes) !!};
            var rQuiru = {!! json_encode($antecedentesP->interv_quirurgica) !!};
            var rPatol = {!! json_encode($antecedentesP->patol_psiquiatrica) !!};
            var rTuber = {!! json_encode($antecedentesP->tbpulmonar) !!};
            var rHiper = {!! json_encode($antecedentesP->hipertencion) !!};
            var rConvu = {!! json_encode($antecedentesP->convulsiones) !!};
            
            //Verificar datos recibidos
            console.log(rDiabetes, rQuiru, rPatol, rTuber, rHiper, rConvu);

            //Set de radios en la vista (comparar)

            //Hipertensión
            if(rHiper == 'si'){
                rd = document.getElementById("radioDiabetesSi").checked = true;
                console.log("chec");
            }else{
                rd = document.getElementById("radioDiabetesNo").checked = true;
            }

            //Intervención Quirú
            if(rQuiru == 'si'){
                rd = document.getElementById("radioInterQSi").checked = true;
                console.log("chec");
            }else{
                rd = document.getElementById("radioInterQNo").checked = true;
            }

            //Patología Psi
            if(rPatol == 'si'){
                rd = document.getElementById("radioPatPSi").checked = true;
                console.log("chec");
            }else{
                rd = document.getElementById("radioPatPNo").checked = true;
            }

            //Tuberculosis
            if(rTuber == 'si'){
                rd = document.getElementById("radioTBPSi").checked = true;
                console.log("chec");
            }else{
                rd = document.getElementById("radioTBPNo").checked = true;
            }

            //Hipertensión

            if(rHiper == 'si'){
                rd = document.getElementById("radioHTSSi").checked = true;
                console.log("chec");
            }else{
                rd = document.getElementById("radioHTSNo").checked = true;
            }

            //Convulsiones
            if(rConvu == 'si'){
                rd = document.getElementById("radioConvulSi").checked = true;
                console.log("chec");
            }else{
                rd = document.getElementById("radioConvulNo").checked = true;
            }



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