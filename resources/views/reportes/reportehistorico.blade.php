<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Historial de Transacciones</title>
    
    <style>
        body{
            font-family: Verdana, Geneva, Tahoma, sans-serif !important;
            font-size: 8pt;
        }
        p{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 8pt;
            /* text-align: center; */
        }
        table{ 
            color: #006BA8; 
            font-family: Verdana, Geneva, Tahoma, sans-serif !important;
            font-size: 7pt;
        }

        img{
            margin-left: 32px;
            margin-bottom: 25px;
        }
        #title{
            padding: 5px;
        }

        #top{
            padding-top: 20px;
        }
    </style>
</head>
<body> 
    @php
        $time = time();
        $mes = date("m");
        $año = date("Y");
        $fecha = date("Y-m-d");
        $tiempo = date("d/m/Y H:i:s", $time);
        $fecha2 = date("d/m/Y");
    @endphp
    <p>{{ $fecha2 }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Historial deTransacciones</p>
    <img src="img/loguito.png" width="20%" alt="">
    
    <table>
        <tr>
            <td id="title"><b><center>Transacción</center></b></td>
            <td id="title"><b><center>Planilla</center></b></td>
            <td id="title"><b><center>Año <br> Salud</b></center></td>
            <td id="title"><b><center>Mes <br>Salud</b></center></td>
            <td id="title"><b><center>Año <br>Otros</b></center></td>
            <td id="title"><b><center>Mes <br>Otros</b></center></td>
            <td id="title"><b><center>Valor</center></b></td>
            <td id="title"><b><center>Estado <br>Planilla</b></center></td>
            <td id="title"><b><center>Estado <br>Transacción</b></center></td>
            <td id="title"><b><center>Fecha Transacción</b></center></td>
        </tr>
        <tr>
            <td id="top"><b>{{ $number_t }}</b></td>
            <td id="top"><b>{{ $number_p }}</b></td>
            <td id="top"><b>{{ $año }}</b></td>
            <td id="top"><b>{{ $mes }}</b></td>
            <td id="top"><b>{{ $año }}</b></td>
            <td id="top"><b>{{ $mes }}</b></td>
            <td id="top"><b>298.600,00</b></td>
            <td id="top"><b>PAGADA</b></td>
            <td id="top"><b>APROBADA</b></td>
            <td id="top"><b>{{ $fecha }}</b></td>
        </tr>
    </table>

    <footer style="margin-top: 480px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pág 1 de2
    </footer>
</body>
</html>