<?php

use function PHPSTORM_META\type;

include('../../Conexion/conexion.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sección Contrato</title>
    <!-- <script type="text/javascript" src="./js/submenu2.js"></script> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <link rel="stylesheet" href="bs-stepper.min.css">
    <!-- Styles por pasos -->
    <link rel="stylesheet" href="https://unpkg.com/bs-stepper/dist/css/bs-stepper.min.css">
    <script src="https://unpkg.com/bs-stepper/dist/js/bs-stepper.min.js"></script>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../../recursos/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../recursos/dist/css/adminlte.min.css">
    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <!--DataTables-->
    <link rel="stylesheet" href="../../recursos/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../recursos/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../Apartados/Cliente/css/style.css">
    <link rel="stylesheet" href="../Cliente/css/accordion.css">
</head>


<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <div id="nav-bar">
            <?php include '../1.ContenidoEstatico/NavBar.php' ?>
        </div>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <div id="sliceBar">
            <?php include '../1.ContenidoEstatico/Slicebar.php'  ?>
        </div>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="ml-3">Apartado: Contrato</h1>
                        </div>
                        <!-- /.col -->

                        <!-- /.col -->

                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="botones" style="margin-bottom:1%">
                <!-- Crear modal a todos los botones -->


            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">

                            <div class="card">
                                <div class="card-header">
                                    <h3>Creación de Contrato de Servicios</h3>
                                    <div id="stepper1" class="bs-stepper">
                                        <div class="bs-stepper-header" role="tablist">
                                            <div class="step" data-target="#test-l-1">
                                                <button type="button" class="step-trigger" role="tab" id="stepper1trigger1" aria-controls="test-l-1">
                                                    <span class="bs-stepper-circle">1</span>
                                                    <span class="bs-stepper-label">Detalles del Contrato</span>
                                                </button>
                                            </div>
                                            <div class="bs-stepper-line"></div>
                                            <div class="step" data-target="#test-l-2">
                                                <button type="button" class="step-trigger" role="tab" id="stepper1trigger2" aria-controls="test-l-2">
                                                    <span class="bs-stepper-circle">2</span>
                                                    <span class="bs-stepper-label">Creación del Servicio de Mantención</span>
                                                </button>
                                            </div>
                                            <div class="bs-stepper-line"></div>
                                            <div class="step" data-target="#test-l-3">
                                                <button type="button" class="step-trigger" role="tab" id="stepper1trigger3" aria-controls="test-l-3">
                                                    <span class="bs-stepper-circle">3</span>
                                                    <span class="bs-stepper-label">Detalles de Equipos
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="bs-stepper-content">
                                            <form onSubmit="return false" id="formulario" method="POST" action="../../PhP/INSERTAR_contrato.php">
                                                <div id="test-l-1" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger1">
                                                    <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #6B90F3;">
                                                        Datos de Emisión:</h4>
                                                    <div class="form-row">

                                                        <div class="form-group col-md-3">
                                                            <label for="inputNombreCliente">Folio del Contrato:</label>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text" style="background-color:red">Folio:
                                                                </div>
                                                                <?php
                                                                $sql = ("SELECT * FROM contrato ORDER by Folio DESC LIMIT 1");
                                                                $query = $conn->query($sql);
                                                                $valores = mysqli_fetch_array($query)
                                                                ?>
                                                                <input type="text" class="form-control" name="folio" id="folio" value="<?php if ($valores["Folio"] == NULL) {
                                                                                                                                            echo 1;
                                                                                                                                        } else
                                                                                                                                            echo $valor = $valores["Folio"] + 1; ?>" disabled>
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-md-4" style="position: absolute; right: 40px;">
                                                            <label for="inputNombreCliente">Fecha del Contrato:</label>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">Emisión:
                                                                </div>
                                                                <input type="date" class="form-control" name="Femision" id="Femision">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <br>
                                                    <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #2980B9;">
                                                        Datos del Cliente:</h4>


                                                    <div class="form-row">

                                                        <div class="form-group col-md-6">
                                                            <label for="inputNombreCliente">Cliente:</label>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text"><i class="fas fa-user"></i>
                                                                </div>
                                                                <select class="form-control" name="cliente" id="cliente">
                                                                    <?php
                                                                    $sql = ("SELECT * FROM cliente");
                                                                    $query = $conn->query($sql);
                                                                    //$valores = mysqli_fetch_assoc($query);
                                                                    // foreach ($vendedores as $key => $value) {
                                                                    //     echo '<option  value="'.$value["Rut"].'">'.$value["Nombre"].' </option>';
                                                                    //     }
                                                                    while ($valores = mysqli_fetch_assoc($query)) {
                                                                        echo '<option value="' . $valores['Rut'] . '">' . $valores['Nombre'] . '</option>';
                                                                    }

                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label for="inputNombreEmpleado">RUT:</label>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text"><i class="fa fa-id-card" aria-hidden="true"></i>
                                                                </div>
                                                                <input type="text" class="form-control" name="RUT" id="RUT" placeholder="98.123.567-K">
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <div class=" form-row">

                                                        <div class="form-group col-md-6">
                                                            <label for="inputNombreEmpleado">Dirección:</label>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text"><i class="fas fa-user"></i>
                                                                </div>
                                                                <input type="text" class="form-control" name="address" id="address" placeholder="Edificio el bosque...">
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label for="inputCiudad">Comuna:</label>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text"><i class="fas fa-building"></i>
                                                                </div>
                                                                <select class="form-control" name="comuna" id="comuna">

                                                                    <?php
                                                                    $sql = ("SELECT * FROM comuna");
                                                                    $query = $conn->query($sql);
                                                                    while ($valores = mysqli_fetch_array($query)) {
                                                                        echo '<option value="' . $valores['id_comuna'] . '">' . $valores['Nombre_comuna'] . '</option>';
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="form-row">

                                                        <div class="form-group col-md-6">
                                                            <label for="inputEmail">Correo Electrónico:</label>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text"><i class="fas fa-envelope"></i>
                                                                </div>
                                                                <input type="email" class="form-control" name="Email" id="Email" placeholder="contacto@dominio.com">
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label for="inputNombreEmpleado">Persona de Contacto:</label>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text"><i class="fas fa-user"></i>
                                                                </div>
                                                                <input type="text" class="form-control" name="Pcontacto" id="Pcontacto" placeholder="Nombre y Apellido...">
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="form-row">

                                                        <div class="form-group col-md-6">
                                                            <label for="inputNombreEmpleado">Tipo de Contrato:</label>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text"><i class="fas fa-newspaper"></i>
                                                                </div>
                                                                <select class="form-control" name="tcontrato" id="tcontrato">
                                                                    <?php
                                                                    $sql = ("SELECT * FROM tipocontrato");
                                                                    $query = $conn->query($sql);
                                                                    while ($valores = mysqli_fetch_array($query)) {
                                                                        echo '<option value="' . $valores['id_tipoContrato'] . '">' . $valores['Tipo'] . '</option>';
                                                                    }
                                                                    ?>

                                                                </select>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <br>

                                                    <div class="modal-footer">
                                                        <button class="btn btn-primary" style="margin-right: 46%;" onclick="stepper1.next()">Siguiente</button>
                                                    </div>

                                                </div>
                                                <div id="test-l-2" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger2">

                                                    <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #6B90F3;">
                                                        Instalación(es) a Requerir Servicio de Mantención:</h4>
                                                    <br>

                                                    <div class="card">
                                                        <FORM name="FormSerMant" method="POST" action="../../PhP/INSERTAR_contrato.php">
                                                            <div class="header">
                                                                <div class="form-row">
                                                                    <div class="col rounded-lg" style="background: #D6EAF8; margin-left: 2px; border-color: #85929E; text-align: center;">
                                                                        <label for="inputNombreEmpleado" style="margin-top: 10%;">Instalación:</label>
                                                                    </div>
                                                                    <div class="col rounded-lg" style="background: #D6EAF8; margin-left: 2px; border-color: #85929E; text-align: center;">
                                                                        <label for="inputNombreEmpleado" style="margin-top: 10%;">Area:</label>
                                                                    </div>
                                                                    <div class="col rounded-lg" style="background: #D6EAF8; margin-left: 2px; border-color: #85929E; text-align: center;">
                                                                        <label for="inputNombreEmpleado" style="margin-top: 10%;">Tipo de Ser.:</label>
                                                                    </div>
                                                                    <div class="col rounded-lg" style="background: #D6EAF8; margin-left: 2px; border-color: #85929E; text-align: center;">
                                                                        <label for="inputNombreEmpleado" style="margin-top: 10%;">Lista de Ser.:</label>
                                                                    </div>
                                                                    <div class="col rounded-lg" style="background: #D6EAF8; margin-left: 2px; border-color: #85929E; text-align: center;">
                                                                        <label for="inputNombreEmpleado" style="text-align: center;">Fecha de Inicio de Ser.:</label>
                                                                    </div>
                                                                    <div class="col rounded-lg" style="background: #D6EAF8; margin-left: 2px; border-color: #85929E; text-align: center;">
                                                                        <label for="inputNombreEmpleado" style="margin-top: 10%;">Periodo del Ser.:</label>
                                                                    </div>
                                                                    <div class="col rounded-lg" style="background: #D6EAF8; margin-left: 2px; border-color: #85929E; text-align: center;">
                                                                        <label for="inputNombreEmpleado" style="margin-top: 10%;">Cant. de Técnicos:</label>
                                                                    </div>
                                                                    <div class="col rounded-lg" style="background: #D6EAF8; margin-left: 2px; border-color: #85929E; text-align: center;">
                                                                        <label for="inputNombreEmpleado" style="margin-top: 10%;">Acciones:</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="form-row">
                                                                    <div id="productos" class="item2">
                                                                        <?php require_once("InputDinamico.php") ?>
                                                                    </div>
                                                                    <input class="btn btn-success" type="button" name="agregar_registros" value="Agregar Mas" onClick="AgregarMas();" />
                                                                    <input class="btn btn-danger" type="button" name="borrar_registros" value="Borrar Campos" onClick="BorrarRegistro();" />
                                                                </div>
                                                            </div>

                                                            <div class="form-row">
                                                                <div class="form-group col-md-8">
                                                                    <label for="inputNombreEmpleado">Observaciones:</label>
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text"><i class="fas fa-comment"></i>
                                                                        </div>
                                                                        <input type="text" class="form-control" id="Observa" name="Observa[]" value="" placeholder="Alguna otra cosa por aclarar...">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>

                                                    <button class="btn btn-primary" style="margin-left: 40%;" onclick="stepper1.previous()">Anterior</button>
                                                    <button class="btn btn-primary" onclick="stepper1.next()">Siguiente</button>

                                                </div>

                                                <div id="test-l-3" role="tabpanel" class="bs-stepper-pane text-center" aria-labelledby="stepper1trigger3">

                                                    <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #6B90F3;">
                                                        Detalle de Equipos Encontrados Según el Contrato de Mantención</h4>

                                                    <br>


                                                    <div id="seccion">


                                                    </div>


                                                    <!-- modal -->
                                                    <div class="modal fade" id="FichaProductos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header" style="background-color:#3f668d">
                                                                    <h5 class="modal-title" style="color:white" id="exampleModalLabel">Area 1</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form method="POST" action="#">
                                                                        <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #00c0ef;">
                                                                            Datos del Cliente:</h4>
                                                                        <div class="form-row item">

                                                                            <div class="form-group col-md-6">
                                                                                <label for="inputTlf">Descripción del Producto</label>
                                                                                <div class="input-group-prepend">
                                                                                    <div class="input-group-text"><i class="fas fa-mobile"></i>
                                                                                    </div>
                                                                                    <input type="text" class="form-control" name="descrip_prodp" id="descrip_prod" placeholder="911111111" value="5">
                                                                                </div>

                                                                            </div>
                                                                            <div class="form-group col-md-6">
                                                                                <label for="inputActividad">Cantidad:</label>
                                                                                <div class="input-group-prepend">
                                                                                    <div class="input-group-text"><i class="fas fa-briefcase"></i>
                                                                                    </div>
                                                                                    <input type="text" class="form-control" name="cant_prod" id="cant_prod" placeholder="Ingrese su actividad">
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                        <div class="modal-footer">
                                                                            <div class="input-group-btn">
                                                                                <button type="button" class="btn btn-success btn-xs" onclick="cantidades();" style="margin-left: 10px;"> <i class="fas fa-plus"></i> </button>
                                                                            </div>
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                                        </div>
                                                                    </form>


                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>


                                                    <button class="btn btn-primary mt-5" onclick="stepper1.previous()">Anterior</button>
                                                    <a><button type="button" id="enviar" class="btn btn-primary mt-5">Registrar</button></a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
                <!-- /.card-header -->
                <br>
                <!-- .card-body -->

                <!-- /.card-body -->
            </div>


        </div>







    </div>
    <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->



    <!-- Main Footer -->
    <footer class="main-footer">
        <strong>Propiedad de Mline 2021
            <a href="https://mlineseg.wixsite.com/website">Mline</a>.</strong>
        Todos los derechos reservados
        <div class="float-right d-none d-sm-inline-block">
            <b>Versión</b> 1.0
        </div>
    </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <script src="../../recursos/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../recursos/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="../../recursos/dist/js/adminlte.js"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="../../recursos/plugins/chart.js/Chart.min.js"></script>
    <script src="../../recursos/js/jquery-latest.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="./js/datosClientes.js"></script>
    <script src="../Cliente/js/ShowInput.js"></script>
    <script src="../Cliente/js/accordion.js"></script>
    <script src="bs-stepper.min.js"></script>
    <!-- DataTables  & Plugins -->

    <script src="../../recursos/plugins/jszip/jszip.min.js"></script>
    <script src="../../recursos/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../recursos/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../recursos/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../recursos/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../recursos/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../recursos/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $(' .$editbtn').on('click', function() {

                $('#crud').modal('show');

                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();
                $('#NombreCliente').val(data[0]);
            });
        });
    </script>
    <script>
        var stepper1Node = document.querySelector('#stepper1')
        var stepper1 = new Stepper(document.querySelector('#stepper1'))


        stepper1Node.addEventListener('shown.bs-stepper', function(event) {

            //    var id_cliente=localStorage.getItem('id_cliente');


            //   $.post("get_instalacioneslist.php",{id_cliente: id_cliente
            //   }, function(data){

            //     $("#TipIns").html(data);



            //   });




            id_cliente = document.getElementById("RUT").value;

            $.post("get_instalaciones.php", {
                id_cliente: id_cliente
            }, function(data) {
                var datos1 = data

                localStorage.setItem("insta", datos1)
                // console.log(datos1[0])
                return datos1;
                // alert(datos)
            });
            $.post("get_areas.php", function(data) {
                var datos = data
                localStorage.setItem("areas", datos)

                //console.log(datos)
                // alert(datos)
            });

            $.post("get_servicioslist.php", function(data) {
                var datos = data
                localStorage.setItem("servicios", datos)

                //console.log(datos)
                // alert(datos)
            });
            $.post("get_serviciosTlist.php", function(data) {
                var datos = data
                localStorage.setItem("Tservicios", datos)

                //console.log(datos)
                // alert(datos)
            });

            console.warn('shown.bs-stepper', event)
            var titulos = new Array();
            var enlaces = new Array();
            var areas = new Array();
            //Datos de los submenús

            //arrays para guardar elementos de la lista y submenús:
            var menu = new Array()
            var submenu = new Array()




            document.getElementById("seccion").innerHTML = ''



            var dato = document.getElementsByClassName("item3");
            let html2 = Array.from(dato).map(item2 => {

                //let descrip1 = $(item2).find("#cantidad").val()
                let instal = $(item2).find("#TipIns").val()
                // console.log(descrip,cantp);
                //console.log(descrip1);
                return {
                    instal
                }
                //Literal strings `` para retornar html

            });

            let html3 = Array.from(dato).map(item3 => {
                let instal1 = $(item3).find("#TipIns").val()
                let area = $(item3).find("#AreaCont").val()
                let servicio = $(item3).find("#serv").val()
                let tipoServ = $(item3).find("#tipo").val()
                let date = $(item3).find("#date").val()
                let periodo = $(item3).find("#periodo").val()
                let cantidad = $(item3).find("#cantidad").val()

                // console.log(descrip,cantp);
                //console.log(descrip1);
                return {
                    instal1,
                    area,
                    servicio,
                    tipoServ,
                    date,
                    periodo,
                    cantidad
                }
                //Literal strings `` para retornar html

            });

            let instt = localStorage.getItem('insta');
            let int = JSON.parse(instt)

            //console.log(int[0].id_instalacion)


            let bigCities = [];
            for (let i = 0; i < html2.length; i++) {
                for (let j = 0; j < int.length; j++) {
                    if (int[j].id_instalacion == html2[i].instal) {
                        bigCities.push(int[j]);
                    }
                }

            }
            let areaaa = localStorage.getItem('areas');
            let servi = localStorage.getItem('servicios');
            let tServi = localStorage.getItem('Tservicios');
            let are = JSON.parse(areaaa)
            let serv = JSON.parse(servi)
            let tserv = JSON.parse(tServi)


            let bigAreas = [];
            for (let i = 0; i < html3.length; i++) {
                for (let j = 0; j < are.length; j++) {
                    if (are[j].id_area == html3[i].area) {
                        bigAreas.push(are[j]);
                    }
                }

            }

            let bigAreas1 = [];
            for (let i = 0; i < html3.length; i++) {
                for (let j = 0; j < serv.length; j++) {
                    if (serv[j].id == html3[i].tipoServ) {
                        bigAreas1.push(serv[j]);
                    }
                }

            }
            let bigAreas2 = [];
            for (let i = 0; i < html3.length; i++) {
                for (let j = 0; j < tserv.length; j++) {
                    if (tserv[j].ID_lista == html3[i].servicio) {
                        bigAreas2.push(tserv[j]);
                    }
                }

            }



            const key = 'id_instalacion';

            const arrayUniqueByKey = [...new Map(bigCities.map(item => [item[key], item])).values()];





            console.log(bigCities);
            console.log(arrayUniqueByKey);
            console.log(html2);


            for (let i = 0; i < html3.length; i++) {

                for (let j = 0; j < bigAreas.length; j++) {
                    if (bigAreas[j].id_area == html3[i].area) {

                        html3[i].nombre = bigAreas[j].NombreArea;

                    }
                    if (bigAreas1[j].id == html3[i].tipoServ) {

                        html3[i].serv = bigAreas1[j].Nombre;

                    }
                    if (bigAreas2[j].ID_lista == html3[i].servicio) {

                        html3[i].tserv = bigAreas2[j].Nombre;

                    }

                }

            }









            let totaleas = []
            let areasss = [];

            for (let i = 0; i < arrayUniqueByKey.length; i++) {
                let vacio = [];
                for (let j = 0; j < html3.length; j++) {
                    if (arrayUniqueByKey[i].id_instalacion == html3[j].instal1) {

                        vacio.push(html3[j]);

                    }

                }
                totaleas[i] = areasss.concat(vacio);
            }
            console.log(totaleas);
            console.log(html3); //vas a guardar este array 
            console.log(bigAreas)
            console.log(bigAreas1)
            console.log(bigAreas2)
            for (i = 0; i < arrayUniqueByKey.length; i++) {
                //localizar elementos principales
                menu[i] = document.getElementById("seccion");
                //crear elemento menu desplegable
                menu[i].innerHTML += "<div id='subseccion" + i + "'><div class='accordion'><div class='card-header' id='heading" + i + "'><button class='btn  accordion-header' data-toggle='collapse' data-target='#collapse" + i + "' aria-expanded='true' aria-controls='collapse" + i + "'>" + arrayUniqueByKey[i]['nombre'] + "</button><div id='collapse" + i + "' class='collapse show' aria-labelledby='heading" + i + "' data-parent='#accordion'><div id='subseccions" + i + "'></div></div></div></div></div>"
                //localizar elemento menu desplegable
                submenu[i] = document.getElementById('subseccions' + i);
                //  //escribir menu desplegable
                for (j = 0; j < totaleas[i].length; j++) {


                    submenu[i].innerHTML += "<table><tr><th scope='col'>Area</th><th scope='col'>Tipo servicio</th><th scope='col'>Lista de Servicio</th></tr><tr><th scope='row'>" + totaleas[i][j]['nombre'] + "</th><td>" + totaleas[i][j]['tserv'] + "</td><td>" + totaleas[i][j]['serv'] + "</td></tr> </table>";
                    // submenu[i].innerHTML += "<p><a >"+totaleas[i][j]['nombre']+"</a> <Button style='margin-left: 5%;' type='button' class='btn btn-primary' data-toggle='modal' data-target='#FichaProductos'>Productos</Button></p>";
                }
                //  //estilo de los submenús
                //  menu[i].style.position="relative";
                //  submenu[i].style.position="absolute";
                //  submenu[i].style.top="100%";
                //  submenu[i].style.left="0px";
                //  submenu[i].style.backgroundColor="#41338b";
                //  submenu[i].style.font="normal 0.8em arial";
                //  submenu[i].style.padding="0.2em 0.5em";
                //  submenu[i].style.display="none"
            }



        })
        $("#enviar").click(function(e) {
            document.getElementById("formulario").submit();
        })

        function cantidades() {



            //var i2=index
            var dato = document.getElementsByClassName("item");

            let html = Array.from(dato).map(item => {
                console.log(item);
                let descrip = $(item).find("#descrip_prod").val()
                let cantp = $(item).find("#cant_prod").val()
                console.log(descrip, cantp);
                return {
                    descrip,
                    cantp
                }
                //Literal strings `` para retornar html

            });
            var dato = document.getElementsByClassName("item3");
            var dato1 = document.getElementsByName("TipIns[]").value;
            console.log(dato1)
            let html2 = Array.from(dato).map(item2 => {
                console.log(item2);
                let descrip1 = $(item2).find("#cantidad").val()
                let instal = $(item2).find("#TipIns").val()
                // console.log(descrip,cantp);
                console.log(descrip1);
                return {
                    descrip1,
                    instal
                }
                //Literal strings `` para retornar html

            });
            setTimeout(() => {
                alert(html[0]['cantp'])
                console.log(html2)
                alert(html2)
            }, 1000);

        }

        function AgregarMas() {
            $("<div>").load("InputDinamico.php", function() {
                $("#productos").append($(this).html());
            });


            setTimeout(() => {
                $('div.lista-producto').each(function(index, item) {
                    var i = index

                    $('li.list-group-item').each(function(index, item) {

                        //         var id_cliente= document.getElementById("RUT").value
                        // $.post("get_instalacioneslist.php", { id_cliente: id_cliente }, function(data){
                        //             document.getElementsByName('TipIns[]')[i2].innerHTML=data;
                        //         });


                        var i2 = index
                        var dato = document.getElementsByName('pro_cantidad[]')[i2].value;


                        document.getElementsByName('listservicio[]')[i2].onchange = function(e) {
                            option = this.value;

                            $.post("get_servicios.php", {
                                elegido: option
                            }, function(data) {
                                document.getElementsByName('listservicioV[]')[i2].innerHTML = data;
                            });

                        }

                    });

                });
            }, 100);
        }

        function BorrarRegistro() {
            $('div.lista-producto').each(function(index, item) {
                jQuery(':checkbox', this).each(function() {
                    if ($(this).is(':checked')) {
                        $(item).remove();
                    }
                });
            });

        }
    </script>
</body>

</html>



<table>
    <tr>
        <th scope="col">Player</th>
        <th scope="col">Gloobles</th>
        <th scope="col">Za'taak</th>
    </tr>
    <tr>
        <th scope="row">TR-7</th>
        <td>7</td>
        <td>4,569</td>
    </tr>
</table>