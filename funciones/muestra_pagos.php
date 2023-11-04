<?php
define ("HOST", 'localhost');
define ("BD", 'id21371185_paysafe');
define ("USER_BD", 'root');
define ("PASS_BD", '');
$total= $_SESSION['total'];

$conn=mysqli_connect(HOST, USER_BD, PASS_BD, BD);//este se tiene que cambiar a la info del server
$consulta="SELECT * FROM pago ";
$consulta2="SELECT SUM(cantidad) as total from pagos";
$resultados=mysqli_query($conn,$consulta);
$mostrar = mysqli_fetch_array($resultados);
?>

<head>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<div class="table-container">
    <table>
        <thead>

        </thead>
        <?php
        while($mostrar=mysqli_fetch_array($resultados)){
            echo "<tbody>";
            echo    "<tr>";
            echo       "<td>".$mostrar['fecha']."</td>";
            echo       "<td>".$mostrar['tipo']."</td>";
            echo        "<td>".$mostrar['descripcion']."</td>";
            echo        "<td>$".$mostrar['cantidad']."</td>";
            echo        "<td>".$mostrar['categoria']."</td>";
            echo        "<td>".$mostrar['estatus']."</td>";
            echo        "<td><button>Editar</button></td>";
            echo    "</tr>";
            echo "</tbody>";}
            ?>
        <?php 
        $resultados = mysqli_query($conn, $consulta2);
        $total = mysqli_fetch_assoc($resultados);
        $_SESSION['total']= $total;
        
        ?>

    </table>
</div>