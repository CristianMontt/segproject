<?php
include('../../Conexion/conexion.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SISTEMA GESTIÓN</title>

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
            <div class="col-sm-8">
              <h1 class="m-0">Requerimiento de Bodega (para Compras) </h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-12">


              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="../MenuAdministrador/administrador.php">Inicio</a></li>

              </ol>
            </div>
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
                  <!-- Aquí va el contenido -->
                  <form class="row">
                    <div class="form-group col-md-4">
                      <h4 style=" font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #00c0ef;">
                        Proveedor Asociado</h4>
                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <label for="inputNombreCliente">Nombre de la empresa</label>
                          <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user"></i>
                            </div>
                            <select class="form-control" name="id" id="id">
                              <?php
                              $sql = ("SELECT * FROM proveedor");
                              $query = $conn->query($sql);
                              while ($valores = mysqli_fetch_array($query)) {
                                echo '<option value="' . $valores['Rut'] . '">' . $valores['Nombre_Empresa'] . '</option>';
                              }
                              ?>
                            </select>
                          </div>

                        </div>


                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputRut">Rut</label>
                          <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-address-card"></i>
                            </div>
                            <input disabled type="text" class="form-control" name="rutProveedor">
                          </div>

                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputRut">Dirección</label>
                          <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-house-user"></i>
                            </div>
                            <input disabled type="text" class="form-control" name="direccion">
                          </div>

                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputActividad">Actividad</label>
                          <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-building"></i>
                            </div>
                            <input disabled type="text" class="form-control" name="actividad">
                          </div>

                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputRut">Ejecutivo</label>
                          <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user"></i>
                            </div>
                            <input disabled type="text" class="form-control" name="Representante">
                          </div>

                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputTelefono">Teléfono</label>
                          <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-phone-square"></i>
                            </div>
                            <input disabled type="number" class="form-control" name="telefono">
                          </div>

                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputRut">Correo</label>
                          <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-at"></i>
                            </div>
                            <input disabled type="text" class="form-control" name="correo">
                          </div>

                        </div>
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <h4 style=" font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #00c0ef;">
                        Datos de Compra</h4>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputNombreCliente">Fecha Emisión</label>
                          <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user"></i>
                            </div>
                            <input type="date" class="form-control" name="FEmision">
                          </div>

                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputRut">Fecha Vencimiento</label>
                          <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-address-card"></i>
                            </div>
                            <input type="date" class="form-control" name="FEmision">
                          </div>

                        </div>

                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputNombreCliente">Centro de Costo</label>
                          <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user"></i>
                            </div>
                            <select class="form-control" name="id" id="id">
                              <?php
                              $sql = ("SELECT * FROM listaserviciopiping");
                              $query = $conn->query($sql);
                              while ($valores = mysqli_fetch_array($query)) {
                                echo '<option value="' . $valores['id_piping'] . '">' . $valores['Nombre'] . '</option>';
                              }
                              ?>
                            </select>
                          </div>

                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputRut">Bodega Destino</label>
                          <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-address-card"></i>
                            </div>
                            <select class="form-control" name="id" id="id">
                              <?php
                              $sql = ("SELECT * FROM bodega");
                              $query = $conn->query($sql);
                              while ($valores = mysqli_fetch_array($query)) {
                                echo '<option value="' . $valores['Codigo_bodega'] . '">' . $valores['Nombre_Bodega'] . '</option>';
                              }
                              ?>
                            </select>
                          </div>

                        </div>

                      </div>


                    </div>
                    <div class="form-group col-md-4">
                      <h4 style=" font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #00c0ef;">
                        Factura de Compra</h4>
                      <div class="form-row">
                        <div class="form-group col-md-4">

                          <div class="input-group-prepend">
                            <div class="input-group-text" style="background-color:red">Folio:
                            </div>
                            <input type="number" class="form-control" name="folio" id="folio">
                          </div>

                        </div>
                        <div class="form-group col-md-4">

                          <div class="input-group-prepend">
                            <div class="input-group-text">Proyecto:
                            </div>
                            <select class="form-control" name="proyecto" id="proyecto">
                              <?php
                              $sql = ("SELECT * FROM proyecto");
                              $query = $conn->query($sql);
                              while ($valores = mysqli_fetch_array($query)) {
                                echo '<option value="' . $valores['id_Proyecto'] . '">' . $valores['Rut_Cliente'] . '</option>';
                              }
                              ?>
                            </select>
                          </div>

                        </div>


                      </div>

                    </div>
                    <div class="form-group col-md-8">
                      <h4 style=" font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #03fc5e;">
                        Productos Seleccionados</h4>
                      <table id="example2" class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>Código</th>
                            <th>Descripción</th>
                            <th>Cantidad</th>
                            <th>Inventario</th>
                            <th>Diferencia</th>
                            <th>Salida Bodega</th>
                            
                            <th>Acciones</th>
                          </tr>
                        </thead>
                        <tbody id="seleccion" name="seleccion">
                          <?php
                          // AQUÍ VA LA CONSULTA CON EL ID OBTENIDO DE LA TABLA SELECCIONADA (PRODUCTO)
                          ?>
                          <tr>
                            <td><?php ?></td>
                            <td><?php ?></td>


                            <!-- Consulta para tener el telefono del empleado y el nombre de la comuna -->
                            <td><?php ?></td>
                            <td><?php  ?></td>
                            <td><?php  ?></td>
                            <td></td>
                            <td>
                              <a href="../../CRUD/DELETE_Bodega.php"><button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button></a>
                              <!-- <button type="button" class="btn btn-primary editbtn" data-toggle="modal" data-target="#update_bodega<?php echo $filas['Codigo_bodega']; ?>"><i class="fas fa-edit"></i></button> -->
                            </td>
                          </tr>
                          <?php
                          // include 'editarmodalbodega.php';
                          // }

                          ?>
                        </tbody>
                      </table>
                    </div>
                    
                    <div class="form-group col-md-8">
                      <h4 style=" font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #00c0ef;">
                        Observaciones</h4>
                      <div class="form-row">
                        <div class="form-group col-md-8">
                          <label for="inputNombreCliente">Observación</label>
                          <div class="input-group-prepend">

                            <input type="text" class="form-control" name="obs" id="obs">

                          </div>

                        </div>

                      </div>
                      

                    </div>


                </div>
                </form>

              </div>
              <!-- /.card-header -->

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
  <footer class=" main-footer">
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
  <script src="jquery.mim.js"></script>
  <script src="Ingresar.js"></script>

  <!-- DataTables  & Plugins -->

  <script src="../../recursos/plugins/jszip/jszip.min.js"></script>
  <script src="../../recursos/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="../../recursos/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="../../recursos/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../../recursos/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../../recursos/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../../recursos/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
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