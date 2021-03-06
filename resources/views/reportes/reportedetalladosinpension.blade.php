<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Reporte Histórico</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        }
        .factura{
            font-family: Verdana, Geneva, Tahoma, sans-serif !important;
            font-size: 8pt;
        }
        .titulo-1{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 8pt;
        }
        .titulo-2{
            text-align: center; 
        }

        #titulo{
            font-size: 9pt;
            text-align: center;
            padding-top: 4px;
            padding-bottom: 4px;
            background: #C7C7C7;
        }

        #data{
            font-size: 7pt;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .caja{
            width: 80%;
            border: 0.6px solid #000;
            margin-left: 13em;
            float: left;
            padding: 12px;
            font-size: 10pt;
        }
        .caja2{
            z-index: 999;
            position: absolute;
            margin-top: 170px;
            margin-left: 15px;
            width: 93%;
        }

        .datos-title {
            width: 16%;
            float: left;
            height: auto;
            margin-right: 5px;
        }
        .datos-title2{
            width: 12%;
            float: left;
            height: auto;
            margin-right: 5px;
        }
        .datos-content1{
            width: 20%;
            height: auto;
            float: left;
            margin-right: 5px;
        }
        .datos-content2{
            width: 24%;
            height: auto;
            float: left;
            margin-right: 5px;
        }
        .datos-content3{
            width: 24.2%;
            height: auto;
            float: left;
            margin-right: 4px;
        }

        .dato-number{
            width: 3%;
            height: auto;
            float: left;
            margin-left: 10px;
            margin-right: 10px;
            text-align: center;
        }
        .dato-name{
            width: 45.7%;
            height: auto;
            float: left;
        }
        .dato-name2{
            width: 62.3%;
            height: auto;
            float: left;
        }
        .bordes{
            border-top: 0.1px solid #000;
            border-left: 0.1px solid #000;
            border-right: 0.1px solid #000;
            border-bottom: 0.1px solid #000;
        }
        .bordes-rigth-bottom-top{
            border-top: 0.1px solid #000;
            border-right: 0.1px solid #000;
            border-bottom: 0.1px solid #000;
        }
        .bordes-left-rigth-bottom{
            border-left: 0.1px solid #000;
            border-right: 0.1px solid #000;
            border-bottom: 0.1px solid #000;
        }
        .bordes-rigth-bottom{
            border-right: 0.1px solid #000;
            border-bottom: 0.1px solid #000;
        }
        .logo1{
            margin-left: 32px;
            margin-bottom: 25px;
        }
        .imagen{
            /* position: absolute; */
            z-index: 200;
            margin-top: 4.8em;
            margin-right: 3.1em;
            width:18.2%;
            float: right;
        }
        .marca-agua{
            z-index: -90;
            margin-top: 16em;
            margin-left: 22em;
            width:42.8%;
            float: left;
        }
        .tabla-fact{ 
            color: #006BA8; 
            font-family: Verdana, Geneva, Tahoma, sans-serif !important;
            font-size: 7pt;
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
        $periodoEPS = date("Y-m");
        $fecha2 = date("d/m/Y");
        $tiempo = date("d/m/Y H:i:s", $time);
    @endphp


    <p class="titulo-2" >REPORTE HISTORICO</p>
    <div class="caja">
        <div class="datos-title"><b>NIT/CC Aportante</b></div>
        <div class="datos-content1" style="border: 1px solid black;">{{ $dni }}</div>
        <div class="dato-number" style="border: 1px solid black;">6</div>
        <div class="datos-title2" style="margin-left: 15px;"><b>Razón Social</b></div>
        <div class="dato-name" style="border: 1px solid black;">&nbsp;&nbsp;&nbsp;{{ $razon_social }} </div>

        <div style="width: 100%; height:8px;"></div>

        <div class="datos-title"><b>Codigo Sucursal</b></div>
        <div class="datos-content1" style="border: 1px solid black;">001</div>
        <div class="datos-title2" style="margin-left: 57px;"><b>Nombre Suc</b></div>
        <div class="dato-name" style="border: 1px solid black;">Principal</div>

        <div style="width: 100%; height:8px;"></div>

        <div class="datos-title"><b>Tipo de Documento</b></div>
        <div class="datos-content2" style="border: 1px solid black;">
            <span style="border: 1px solid black;">&nbsp;&nbsp;CC&nbsp;&nbsp;</span>
        </div>
        <div class="datos-title2" style="margin-left: 19px;"><b>Documento Id</b></div>
        <div class="datos-content3" style="border: 1px solid black;">{{ $dni }}</div>

        <div style="width: 77.2%; height:8px; "></div>

        <div class="datos-title"><b>Aliado</b></div>
        <div class="dato-name2" style="border: 1px solid black;">&nbsp;&nbsp;&nbsp;{{ $razon_social }}</div>

        <div style="width: 77.2%; height:8px;"></div>

        <div class="datos-title"><b>Cotizante</b></div>
        <div style="width: 3.4%;float: left;border-top: 1px solid black;border-left: 1px solid black;border-bottom: 1px solid black;">57</div>
        <div style="width: 20.3%;float: left;border: 1px solid black;">Indep. Pago Voluntario a Riesgos</div>
        <div class="datos-title2" style="margin-left: 19px;"><b>Subtipo</b></div>
        <div style="width: 3.4%;float: left;border: 1px solid black;text-align:center;">11</div>
        <div style="width: 20.3%;float: left;border: 1px solid black;margin-left:5px;">Conductor del S.P. de transporte</div>
    </div>

    
    <div class="caja2">
        <table cellspacing="0" style=" width:100%;">
            <tr>
                <td id="titulo" class="bordes" width='50'>F.Pago</td>
                <td id="titulo" class="bordes-rigth-bottom-top">Tip.</td>
                <td id="titulo" class="bordes-rigth-bottom-top" width='40'>Periódo<br>EPS</td>
                <td id="titulo" class="bordes-rigth-bottom-top" width='40'>Periódo<br>Otros</td>
                <td id="titulo" class="bordes-rigth-bottom-top" width='40'>Número<br>Plantilla</td>
                <td id="titulo" class="bordes-rigth-bottom-top" width='90'>EPS</td>
                <td id="titulo" class="bordes-rigth-bottom-top" width='90'>AFP</td>
                <td id="titulo" class="bordes-rigth-bottom-top" width='65'>C<br>C<br>F</td>
                <td id="titulo" class="bordes-rigth-bottom-top" width='90'>ARL</td>
                <td id="titulo" class="bordes-rigth-bottom-top" width='12'>I<br>N<br>G</td>
                <td id="titulo" class="bordes-rigth-bottom-top" width='12'>R<br>E<br>T</td>
                <td id="titulo" class="bordes-rigth-bottom-top" width='12'>T<br>A<br>E</td>
                <td id="titulo" class="bordes-rigth-bottom-top" width='12'>T<br>D<br>P</td>
                <td id="titulo" class="bordes-rigth-bottom-top" width='12'>T<br>A<br>P</td>
                <td id="titulo" class="bordes-rigth-bottom-top" width='12'>V<br>S<br>P</td>
                <td id="titulo" class="bordes-rigth-bottom-top" width='12'>V<br>T<br>E</td>
                <td id="titulo" class="bordes-rigth-bottom-top" width='12'>V<br>S<br>T</td>
                <td id="titulo" class="bordes-rigth-bottom-top" width='12'>S<br>L<br>N</td>
                <td id="titulo" class="bordes-rigth-bottom-top" width='12'>I<br>G<br>E</td>
                <td id="titulo" class="bordes-rigth-bottom-top" width='12'>L<br>M<br>A</td>
                <td id="titulo" class="bordes-rigth-bottom-top" width='12'>V<br>A<br>C</td>
                <td id="titulo" class="bordes-rigth-bottom-top" width='12'>A<br>V<br>P</td>
                <td id="titulo" class="bordes-rigth-bottom-top" width='12'>V<br>C<br>T</td>
                <td id="titulo" class="bordes-rigth-bottom-top" width='18'>IRP</td>
                <td id="titulo" class="bordes-rigth-bottom-top">Días<br>AFP</td>
                <td id="titulo" class="bordes-rigth-bottom-top">Días<br>EPS</td>
                <td id="titulo" class="bordes-rigth-bottom-top">Días<br>ARP</td>
                <td id="titulo" class="bordes-rigth-bottom-top">Días<br>CCF</td>
                <td id="titulo" class="bordes-rigth-bottom-top" width='50'>IBC<br>Salud</td>
                <td id="titulo" class="bordes-rigth-bottom-top" width='50'>IBC<br>Pensión</td>
                <td id="titulo" class="bordes-rigth-bottom-top" width='50'>IBC<br>Riesgos</td>
                <td id="titulo" class="bordes-rigth-bottom-top" width='50'>IBC<br>Cajas</td>
                <td id="titulo" class="bordes-rigth-bottom-top" width='50'>IBC<br>SENA/ICBF</td>
                <td id="titulo" class="bordes-rigth-bottom-top" width='50'>Aporte<br>Salud</td>
                <td id="titulo" class="bordes-rigth-bottom-top" width='50'>Aporte<br>Pensión</td>
                <td id="titulo" class="bordes-rigth-bottom-top" width='50'>Aporte<br>Riesgos</td>
                <td id="titulo" class="bordes-rigth-bottom-top" width='50'>Aporte<br>Caja</td>
                <td id="titulo" class="bordes-rigth-bottom-top" width='50'>Aporte<br>ICBF</td>
                <td id="titulo" class="bordes-rigth-bottom-top" width='40'>ESAP</td>
                <td id="titulo" class="bordes-rigth-bottom-top" width='40'>MINEDU</td>
                <td id="titulo" class="bordes-rigth-bottom-top" width='50'>Aporte<br>SENA</td>
                <td id="titulo" class="bordes-rigth-bottom-top" width='40'>Horas<br>Lab.</td>
                <td id="titulo" class="bordes-rigth-bottom-top" width='80'>TOTAL</td>
            </tr>
            <tr>
                <td id="data" class="bordes-left-rigth-bottom"> {{ $fecha }}</td>
                <td id="data" class="bordes-rigth-bottom" style="text-align: center">I</td>
                <td id="data" class="bordes-rigth-bottom">{{ $periodoEPS }}</td>
                <td id="data" class="bordes-rigth-bottom">{{ $periodoEPS }}</td>
                <td id="data" class="bordes-rigth-bottom"><b>{{ $number_p }}</b></td>
                <td id="data" class="bordes-rigth-bottom" style="text-align: center">{{ $eps }}</td>
                <td id="data" class="bordes-rigth-bottom" style="text-align: center"></td>
                <td id="data" class="bordes-rigth-bottom" ></td>
                <td id="data" class="bordes-rigth-bottom" style="text-align: center">{{ $arl }}</td>
                <td id="data" class="bordes-rigth-bottom"></td>
                <td id="data" class="bordes-rigth-bottom"></td>
                <td id="data" class="bordes-rigth-bottom"></td>
                <td id="data" class="bordes-rigth-bottom"></td>
                <td id="data" class="bordes-rigth-bottom"></td>
                <td id="data" class="bordes-rigth-bottom"></td>
                <td id="data" class="bordes-rigth-bottom"></td>
                <td id="data" class="bordes-rigth-bottom"></td>
                <td id="data" class="bordes-rigth-bottom"></td>
                <td id="data" class="bordes-rigth-bottom"></td>
                <td id="data" class="bordes-rigth-bottom"></td>
                <td id="data" class="bordes-rigth-bottom"></td>
                <td id="data" class="bordes-rigth-bottom"></td>
                <td id="data" class="bordes-rigth-bottom"></td>
                <td id="data" class="bordes-rigth-bottom"></td>
                <td id="data" class="bordes-rigth-bottom" style="text-align: center">0</td>
                <td id="data" class="bordes-rigth-bottom" style="text-align: center">30</td>
                <td id="data" class="bordes-rigth-bottom" style="text-align: center">30</td>
                <td id="data" class="bordes-rigth-bottom" style="text-align: center">0</td>
                <td id="data" class="bordes-rigth-bottom" style="text-align: right">908.526</td>
                <td id="data" class="bordes-rigth-bottom" style="text-align: right">0</td>
                <td id="data" class="bordes-rigth-bottom" style="text-align: right">908.526</td>
                <td id="data" class="bordes-rigth-bottom" style="text-align: right">0</td>
                <td id="data" class="bordes-rigth-bottom" style="text-align: right">N/A</td>
                <td id="data" class="bordes-rigth-bottom" style="text-align: right">113.600</td>
                <td id="data" class="bordes-rigth-bottom" style="text-align: right"></td>
                <td id="data" class="bordes-rigth-bottom" style="text-align: right">39.600</td>
                <td id="data" class="bordes-rigth-bottom" style="text-align: right">0</td>
                <td id="data" class="bordes-rigth-bottom" style="text-align: right">0</td>
                <td id="data" class="bordes-rigth-bottom" style="text-align: right">0</td>
                <td id="data" class="bordes-rigth-bottom" style="text-align: right">0</td>
                <td id="data" class="bordes-rigth-bottom" style="text-align: right">0</td>
                <td id="data" class="bordes-rigth-bottom" style="text-align: right">0</td>
                <td id="data" class="bordes-rigth-bottom" style="text-align: right">153.200</td>
            </tr>
            <tr>
                <td colspan="28"  ></td><b></b>
                <td id="data" class="bordes-left-rigth-bottom" style="text-align: right"><b>908.526</b></td>
                <td id="data" class="bordes-rigth-bottom" style="text-align: right">0</td>
                <td id="data" class="bordes-rigth-bottom" style="text-align: right">908.526</td>
                <td id="data" class="bordes-rigth-bottom" style="text-align: right"><b>0</b></td>
                <td id="data" class="bordes-rigth-bottom" style="text-align: right"><b>N/A</b></td>
                <td id="data" class="bordes-rigth-bottom" style="text-align: right"><b>113.600</b></td>
                <td id="data" class="bordes-rigth-bottom" style="text-align: right"><b></b></td>
                <td id="data" class="bordes-rigth-bottom" style="text-align: right"><b>39.600</b></td>
                <td id="data" class="bordes-rigth-bottom" style="text-align: right"><b>0</b></td>
                <td id="data" class="bordes-rigth-bottom" style="text-align: right"><b>0</b></td>
                <td id="data" class="bordes-rigth-bottom" style="text-align: right"><b>0</b></td>
                <td id="data" class="bordes-rigth-bottom" style="text-align: right"><b>0</b></td>
                <td id="data" class="bordes-rigth-bottom" style="text-align: right"><b>0</b></td>
                <td id="data" class="bordes-rigth-bottom" style="text-align: right"><b>0</b></td>
                <td id="data" class="bordes-rigth-bottom" style="text-align: right"><b>153.200</b></td>
            </tr>
        </table>
    </div>
    <img class="imagen" src="img/loguito2.jpg" alt="">
    <img class="marca-agua" src="img/marcadeagua.jpg" alt="">

    <div style="width:80%;position: absolute;float: left;margin-top:42em; padding:0px;">
        {{ $tiempo }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pág 1 de 2
        
    </div>

    <div class="factura" style="page-break-before: always;">
        <p class="titulo-1">{{ $fecha2 }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Historial de Transacciones</p>
        <img class="logo1" src="img/loguito.png" width="20%" alt="">

        <table class="tabla-fact">
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
                <td id="top"><b>153.200,00</b></td>
                <td id="top"><b>PAGADA</b></td>
                <td id="top"><b>APROBADA</b></td>
                <td id="top"><b>{{ $fecha }}</b></td>
            </tr>
        </table>

        <footer style="margin-top: 430px;">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pág 2 de 2
        </footer>
    </div>
</body>
</html>
