<?php
include('../Conexion/conexion.php');

$folio = 1;
$Femision = $_POST['Femision'];
$cliente = $_POST['cliente'];

$Email = $_POST['Email'];
$Pcontacto = $_POST['Pcontacto'];
$tcontrato = $_POST['tcontrato'];


$insertar = "INSERT INTO contrato(Folio,Femision,id_cliente,tcontrato,Pcontacto,email) 
VALUES ( '$folio','$Femision','$cliente','$tcontrato','$Pcontacto','$Email')";

$resultado = mysqli_query($conn, $insertar);

$sql = ("SELECT id_contrato FROM contrato WHERE id_cliente='$cliente' AND tcontrato='$tcontrato' AND Femision='$Femision'
AND Folio='$folio'");
$query = $conn->query($sql);
$valores = mysqli_fetch_row($query);






// Insertar lo de arriba primero



$tinstalacion = $_POST['TipIns'];

$areacontrato = $_POST['AreaCont'];

$listservicio = $_POST['listservicio'];

$listservicioV = $_POST['listservicioV'];

$pro_precio = $_POST['pro_precio'];   //fecha
$TipPer = $_POST['TipPer'];
$pro_cantidad = $_POST['pro_cantidad'];


if ($tinstalacion != NULL) {

    if ($areacontrato != NULL) {

        if ($listservicio != NULL) {

            if ($listservicioV != NULL) {

                if ($pro_precio != NULL) {

                    if ($TipPer != NULL) {

                        if ($pro_cantidad != NULL) {

                            for ($i = 0; $i < count($tinstalacion); $i++) {
                                $insertar = "INSERT INTO datos_servicios(id_contrato,id_instalacion,id_servicio,listaservicio,listservicioV,fecha_inicio,id_periodo,cantidad_tecnicos)
                                VALUES('$valores[0]','$tinstalacion[$i]','$areacontrato[$i]','$listservicio[$i]','$listservicioV[$i]','$pro_precio[$i]',
                                '$TipPer[$i]','$pro_cantidad[$i]')";
                                $resultado = mysqli_query($conn, $insertar);
                            }
                        }
                    }
                }
            }
        }
    }
}



// if ($tinstalacion) {
//     $contenedor = 0;
//     for ($i = 0; $i < count($tinstalacion); $i++) {
//         if ($tinstalacion[$i] != "")
//             for ($j = $contenedor; $j < count($listservicio); $j++) {
//                 if ($listservicio[$j] != "") {
//                     $sql = "INSERT INTO contrato (Folio,Femision,id_cliente,Finicio,tcontrato,Email,direccion,comuna,tinstalacion,NameInst,listservicio ,listservicioV,CantidadPersonal,RangoP,
//                 Fincial, observacion,AreaContrato,TipoPeriodo,eq_nombre,eq_codigo,eq_descripcion,eq_categoria,eq_area,eq_cantidadreq) VALUES ('$folio','$Femision','$cliente','$Finicio','$tcontrato','$Email','$direccion','$comuna','$tinstalacion[$i]',
//                         '$NameInst[$i]','$listservicio[$i]','$listservicioV[$i]','$cantidadEmpleados[$j]','$RangoP[$i]','$Fincial[$i]','$Observ[$i]','$areacontrato[$i]','$TipPer[$i]','$eq_nombre[$i]','$eq_codigo[$i]','$eq_descripcion[$i]','$eq_categoria[$i]','$eq_area[$i]','$eq_cantidadreq[$i]')";
//                     $resultado = mysqli_query($conn, $sql);
//                     $i++;
//                 }
//             }
//         $contenedor = $i;
//     }
// }

// if ($resultado) {
//     echo "<script>alert('Registrado con éxito')</script>";
//     header('Location:../Apartados/Cliente/get_contrato.php');
//     die;
// } else echo "error";
