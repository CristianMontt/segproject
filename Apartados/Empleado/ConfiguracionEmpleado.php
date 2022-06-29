<?php
include('../../Conexion/conexion.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sección Empleados</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../../recursos/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../recursos/dist/css/adminlte.min.css">
    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <!--DataTables-->
    <link rel="stylesheet" href="../../recursos/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../recursos/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
</head>


<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <div id="navBar">
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
                            <h1 class="m-0">Sección Empleados</h1>
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
                                    <!-- Aquí poner los botones -->
                                    <!-- Button trigger modal -->
                                    <div class="botones" style="margin-bottom:1%; margin-top:1%">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#FichaEmpleado">
                                            Ingresar Empleado
                                        </button>


                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="FichaEmpleado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color:#3f668d">
                                                    <h5 class="modal-title" style="color:white" id="exampleModalLabel">Ficha Empleado</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">


                                                    <form method="POST" action="../../PhP/INSERTAR_EMPLEADO.php">
                                                        <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #00c0ef;">
                                                            Datos del Empleado</h4>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="inputNombreEmpleado">Nombre del Empleado</label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-user"></i>
                                                                    </div>
                                                                    <input type="text" class="form-control" name="NombreEmpleado" id="NombreEmpleado" placeholder="Ingrese nombre del empleado">
                                                                </div>

                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputRut">Rut</label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-address-card"></i>
                                                                    </div>
                                                                    <input type="text" class="form-control" name="RutEmpleado" id="RutEmpleado" placeholder="11111111-1">
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="form-row">

                                                            <div class="form-group col-md-6">
                                                                <label for="inputTlf">Telefono</label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-mobile"></i>
                                                                    </div>
                                                                    <input type="text" class="form-control" name="telefono" id="telefono" placeholder="911111111">
                                                                </div>

                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <label for="inputEmail">Email</label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-envelope"></i>
                                                                    </div>
                                                                    <input type="email" class="form-control" name="Email" id="Email" placeholder="contacto@dominio.com">
                                                                </div>

                                                            </div>


                                                        </div>
                                                        <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #4437ff;">
                                                            Asignación de estado</h4>

                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="inputNombreEmpleado">Seleccionar Cuadrilla</label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-user"></i>
                                                                    </div>
                                                                    <select class="form-control" name="Cuadrilla" id="Cuadrilla">
                                                                        <?php
                                                                        $sql = ("SELECT * FROM cuadrilla");
                                                                        $query = $conn->query($sql);
                                                                        while ($valores = mysqli_fetch_array($query)) {
                                                                            echo '<option value="' . $valores['id_personal'] . '">' . $valores['Alias'] . '</option>';
                                                                            //por defecto se creará como libre
                                                                        }
                                                                        ?>

                                                                    </select>
                                                                </div>

                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputCargo">Seleccione Cargo</label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-address-card"></i>
                                                                    </div>
                                                                    <select class="form-control" name="cargo" id="cargo">
                                                                        <?php
                                                                        $sql = ("SELECT * FROM tipocargo");
                                                                        $query = $conn->query($sql);
                                                                        while ($valores = mysqli_fetch_array($query)) {
                                                                            echo '<option value="' . $valores['id_cargo'] . '">' . $valores['Nombre_Cargo'] . '</option>';
                                                                        }
                                                                        ?>

                                                                    </select>
                                                                </div>

                                                            </div>

                                                        </div>


                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                    <button type="submit" class="btn btn-primary">Agregar</button>
                                                </div>
                                                </form>


                                            </div>

                                        </div>
                                    </div>


                                </div>

                            </div>
                            <!-- /.card-header -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Información Empleado</h3>
                                </div>
                                <div class="card-body">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Rut</th>
                                                <th>Email</th>
                                                <th>Teléfono</th>
                                                <th>Cargo</th>
                                                <th>Cuadrilla</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = "SELECT * FROM empleado where id_cargo IN (Select id_cargo  FROM tipocargo )";
                                            //ver como mostrar el nombre en vez del cargo

                                            $resultado = mysqli_query($conn, $sql);
                                            while ($filas = mysqli_fetch_array($resultado)) {
                                                $var = $filas['id_cargo'];
                                                $sql2 = "SELECT * FROM tipocargo where id_cargo=$var";
                                                $resultado2 = mysqli_query($conn, $sql2);
                                                $id_Cod = mysqli_fetch_array($resultado2);
                                                $var2 = $filas['id_cuadrilla'];
                                                $sql3 = "SELECT * FROM cuadrilla where id_personal=$var2";
                                                $resultado3 = mysqli_query($conn, $sql3);
                                                $id_cuadrilla = mysqli_fetch_array($resultado3);

                                            ?>
                                                <tr>
                                                    <td><?php echo $filas['Nombre'] ?></td>
                                                    <td><?php echo $filas['Rut_Empleado'] ?></td>
                                                    <td><?php echo $filas['Email'] ?></td>
                                                    <td><?php echo $filas['Telefono'] ?></td>

                                                    <td><?php

                                                        echo $id_Cod['Nombre_Cargo'] ?></td>
                                                    <td><?php echo $id_cuadrilla['Alias'] ?></td>

                                                    <td>
                                                        <a href="../../CRUD/DELETE_Empleado.php?id=<?php echo $filas['Rut_Empleado'] ?>"><button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button></a>
                                                        <button type="button" class="btn btn-primary editbtn" data-toggle="modal" data-target="#crud<?php echo $filas['Rut_Empleado']; ?>"><i class="fas fa-edit"></i></button>

                                                    </td>
                                                </tr>
                                            <?php
                                                include './CRUD/EditarEmpleado.php';
                                            }
                                            ?>
                                        </tbody>
                                    </table>


                                </div>
                            </div>

                            <br>



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
            $('#example3').DataTable({
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
</body>

</html>