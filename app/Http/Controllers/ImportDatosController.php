<?php

namespace App\Http\Controllers;
use Excel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Transmition;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Contracts\Routing\ResponseFactory;
use Carbon\Carbon;

class ImportDatosController extends Controller
{
    private $excel;
    public function __construct(Excel $excel)
    {
        $this->excel = $excel;
    }
    // getImportData
 /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getImportData()
    {
        return view('layout.datos.importData');
    }

    public function importarDatosExcel(Request $request){
        $request->validate([
            'fileTransmition' => 'required'
        ]);

        $path = $request->file('fileTransmition')->getRealPath();
        $data = Excel::load($path)->get();
 
         // dd($data);
        if($data->count()){
            foreach ($data as $key => $value) {
                // $arrTransmition[] = ['title' => $value->title, 'description' => $value->description];
                $arrTransmition[] = 
                ['id_Program' => $value->id_Program,
                'id_TypeTransmition' => $value->id_TypeTransmition,
                'day' => $value->day,
                'nationalTime' => $value->nationalTime,
                'runTime' => $value->runTime,
                'RTG' => $value->RTG,
                'SH' => $value->SH,
                'percentReach' => $value->percentReach,
                'AVGpercentViewed' => $value->AVGpercentViewed,
                'HH' => $value->HH,
                'AA' => $value->AA,
                'totalHoursViewed' => $value->totalHoursViewed];
            }
            dd($arrTransmition);

            if(!empty($arr)){
                Transmition::insert($arr);
            }
        }
 
        return back()->with('success', 'Insert Record successfully.');
    
        // $archivo = $request->file('archivo');
        // $nomOriginal=$archivo->getClientOriginalName();
        // $extension=$archivo->getClienteOriginalExtension();
        // $rl=Storage::disk('archivos')->put($nomOriginal, \File::get($archivo) );
        // $ruta = storage_path('archivos') ."/". $nomOriginal;

        // if ($rl) {
        //     $ct=0;
        //     Excel::selectSheetsByIndex(0)->load($ruta, function($hoja){

        //         $hoja->each(function($fila) {
        //             $transmition = new Transmition;
        //             $transmition->id_Program = $fila->id_Program;
        //             $transmition->id_TypeTransmition = $fila->id_TypeTransmition;
        //             $transmition->day = $fila->day;
        //             $transmition->nationalTime = $fila->nationalTime;
        //             $transmition->runTime = $fila->runTime;
        //             $transmition->RTG = $fila->RTG;
        //             $transmition->SH = $fila->SH;
        //             $transmition->percentReach = $fila->percentReach;
        //             $transmition->AVGpercentViewed = $fila->AVGpercentViewed;
        //             $transmition->HH = $fila->HH;
        //             $transmition->AA = $fila->AA;
        //             $transmition->totalHoursViewed = $fila->totalHoursViewed;
        //             $transmition->save();
        //         });
                
        //         return 
        //         view('view.name')->with('msj', 'Excel cargador correctamente');
                
        //     });
        // }
        // return view('view.error')->with('msj', 'Error al importar archivo');
        
    }
    //////////////////////////
    public function importFile(Request $request){

        if($request->hasFile('sample_file')){

            $path = $request->file('sample_file')->getRealPath();

            $data = \Excel::load($path)->get();

            if($data->count()){

                foreach ($data as $key => $value) {

                    $arr[] = ['title' => $value->title, 'body' => $value->body];

                }

                if(!empty($arr)){

                    DB::table('products')->insert($arr);

                    dd('Insert Recorded successfully.');

                }

            }

        }

        dd('Request data does not have any files to import.');      

    }

}
