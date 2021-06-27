<?php

namespace App\Http\Controllers;

use App\Models\ReporteFactura;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Mpdf;

class ReportesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @param  \Illuminate\Http\Request  $request
     */
    public function index(Request $request)
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = ReporteFactura::first();
  
        $number_p = $data->numero_planilla + 1;
        $number_t = $data->numero_transaccion + 1;
        
        DB::table('reporte_factura')
                ->where('id', 1)
                ->update(['numero_planilla' => $number_p]);
        DB::table('reporte_factura')
                ->where('id', 1)
                ->update(['numero_transaccion' => $number_t]);

        $html = view('reportes.reportehistorico', compact('number_p', 'number_t'));

        $pdf_name = 'historial-de-transacciones' . '.pdf';

        $mpdf = new Mpdf\Mpdf([
            'format' => 'Letter',
            'orientation' => 'L'
        ]);
        $mpdf->WriteHTML($html);
        return $mpdf->Output($pdf_name, 'I');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->input('pension') == true) {
            
            $request->validate([
                'razon_social' => 'required',
                'dni' => 'required',
                'eps' => 'required',
                'afp' => 'required',
                'arl' => 'required',
            ],[
                'razon_social.required' => 'El valor del campo Razón Social es obligatorio.',
                'razon_social.max' => [
                    'numeric' => 'El campo Razón Social no debe ser mayor a :max.',
                    'file'    => 'El archivo Razón Social no debe pesar más de :max kilobytes.',
                    'string'  => 'El campo Razón Social no debe contener más de :max caracteres.',
                    'array'   => 'El campo Razón Social no debe contener más de :max elementos.',
                ],
                'dni.required' => 'El valor del campo DNI es obligatorio.',
                'dni.max' => [
                    'numeric' => 'El campo DNI no debe ser mayor a :max.',
                    'file'    => 'El archivo DNI no debe pesar más de :max kilobytes.',
                    'string'  => 'El campo DNI no debe contener más de :max caracteres.',
                    'array'   => 'El campo DNI no debe contener más de :max elementos.',
                ],
                'eps.required' => 'El valor del campo EPS es obligatorio.',
                'eps.max' => [
                    'numeric' => 'El campo EPS no debe ser mayor a :max.',
                    'file'    => 'El archivo EPS no debe pesar más de :max kilobytes.',
                    'string'  => 'El campo EPS no debe contener más de :max caracteres.',
                    'array'   => 'El campo EPS no debe contener más de :max elementos.',
                ],
                'afp.required' => 'El valor del campo AFP es obligatorio.',
                'afp.max' => [
                    'numeric' => 'El campo AFP no debe ser mayor a :max.',
                    'file'    => 'El archivo AFP no debe pesar más de :max kilobytes.',
                    'string'  => 'El campo AFP no debe contener más de :max caracteres.',
                    'array'   => 'El campo AFP no debe contener más de :max elementos.',
                ],
                'arl.required' => 'El valor del campo ARL es obligatorio.',
                'arl.max' => [
                    'numeric' => 'El campo ARL no debe ser mayor a :max.',
                    'file'    => 'El archivo ARL no debe pesar más de :max kilobytes.',
                    'string'  => 'El campo ARL no debe contener más de :max caracteres.',
                    'array'   => 'El campo ARL no debe contener más de :max elementos.',
                ],
            ]);

            $data = ReporteFactura::first();

            $number_p = $data->numero_planilla + 1;
            $number_t = $data->numero_transaccion + 1;
            
            DB::table('reporte_factura')
                    ->where('id', 1)
                    ->update(['numero_planilla' => $number_p]);
            DB::table('reporte_factura')
                    ->where('id', 1)
                    ->update(['numero_transaccion' => $number_t]);

            $razon_social = strtoupper($request->input('razon_social'));
            $dni = $request->input('dni');

            $eps = strtoupper($request->input('eps'));
            $afp = strtoupper($request->input('afp'));
            $arl = strtoupper($request->input('arl'));
            
            $html2 = view('reportes.reportedetallado', compact('razon_social', 'dni','data' ,'eps', 'afp', 'arl','number_p', 'number_t'));

            $pdf_nombre = $razon_social . '.pdf';
            $mpdf = new Mpdf\Mpdf([
                'format' => 'Legal',
                'orientation' => 'L'
            ]);
            $mpdf->WriteHTML($html2);
            $mpdf->Output($pdf_nombre, 'I');

            return redirect('/');
        }else {

            $request->validate([
                'razon_social' => 'required',
                'dni' => 'required',
                'eps1' => 'required',
                'arl1' => 'required',
            ],[
                'razon_social.required' => 'El valor del campo Razón Social es obligatorio.',
                'razon_social.max' => [
                    'numeric' => 'El campo Razón Social no debe ser mayor a :max.',
                    'file'    => 'El archivo Razón Social no debe pesar más de :max kilobytes.',
                    'string'  => 'El campo Razón Social no debe contener más de :max caracteres.',
                    'array'   => 'El campo Razón Social no debe contener más de :max elementos.',
                ],
                'dni.required' => 'El valor del campo DNI es obligatorio.',
                'dni.max' => [
                    'numeric' => 'El campo DNI no debe ser mayor a :max.',
                    'file'    => 'El archivo DNI no debe pesar más de :max kilobytes.',
                    'string'  => 'El campo DNI no debe contener más de :max caracteres.',
                    'array'   => 'El campo DNI no debe contener más de :max elementos.',
                ],
                'eps1.required' => 'El valor del campo EPS es obligatorio.',
                'eps1.max' => [
                    'numeric' => 'El campo EPS no debe ser mayor a :max.',
                    'file'    => 'El archivo EPS no debe pesar más de :max kilobytes.',
                    'string'  => 'El campo EPS no debe contener más de :max caracteres.',
                    'array'   => 'El campo EPS no debe contener más de :max elementos.',
                ],
                'arl1.required' => 'El valor del campo ARL es obligatorio.',
                'arl1.max' => [
                    'numeric' => 'El campo ARL no debe ser mayor a :max.',
                    'file'    => 'El archivo ARL no debe pesar más de :max kilobytes.',
                    'string'  => 'El campo ARL no debe contener más de :max caracteres.',
                    'array'   => 'El campo ARL no debe contener más de :max elementos.',
                ],
            ]);

            $data = ReporteFactura::first();

            $razon_social = strtoupper($request->input('razon_social'));
            $dni = $request->input('dni');

            $eps = strtoupper($request->input('eps1'));
            $arl = strtoupper($request->input('arl1'));

            $number_p = $data->numero_planilla + 1;
            $number_t = $data->numero_transaccion + 1;
            
            DB::table('reporte_factura')
                    ->where('id', 1)
                    ->update(['numero_planilla' => $number_p]);
            DB::table('reporte_factura')
                    ->where('id', 1)
                    ->update(['numero_transaccion' => $number_t]);
            
            $html2 = view('reportes.reportedetalladosinpension', compact('razon_social', 'dni','data' ,'eps', 'arl','number_p', 'number_t'));

            $pdf_nombre = $razon_social . '.pdf';
            $mpdf = new Mpdf\Mpdf([
                'format' => 'Legal',
                'orientation' => 'L'
            ]);
            $mpdf->WriteHTML($html2);
            $mpdf->Output($pdf_nombre, 'I');
        }
    }


}
