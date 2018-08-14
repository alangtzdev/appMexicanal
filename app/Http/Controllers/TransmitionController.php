<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Transmition;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;

class TransmitionController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
   {
      $transmitions = Transmition::all();
      return $transmitions;
   }

   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function create()
   {
      //
   }

   /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(Request $request)
   {
      //
   }

   /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function show(Request $request)
   {
      $dates = explode(' - ',$request->daterange);
      $date_start = Carbon::parse($dates[0]);
      $date_end = Carbon::parse($dates[1]);
      $nationalTime = Carbon::parse($request->nationalTime)->format('H:i:s');
      $runTime = $request->runTime;
      $programs = $request->programs;
      $transmitions = DB::table('transmitions')
         ->join('programs', 'transmitions.id_Program', '=', 'programs.id_Program')
         ->join('typetransmition', 'transmitions.id_TypeTransmition', '=', 'typetransmition.id_TypeTransmition')
         ->select('programs.name as program_name', 'transmitions.day', 'transmitions.AA')
         ->whereDate('transmitions.day', '>=', $date_start)
         ->whereDate('transmitions.day', '<=', $date_end)
         ->whereTime('transmitions.nationalTime', '=', $nationalTime)
         ->whereIn('programs.id_Program', $programs)
         ->whereIn('transmitions.runTime', $runTime)
         ->get();

      $graphics = collect([]);

      foreach($transmitions as $transmition){
         $day = Carbon::parse($transmition->day);

         if($day->dayOfWeek == Carbon::MONDAY){
            if($graphics->contains('Dia', 'Lunes'))
            {
               
            }else{
               $graphics->prepend([
                  'Dia' => 'Lunes',
                  'Datos' => [
                     [
                        'Programa' => $transmition->program_name,
                        'AA' => $transmition->AA
                     ]
                  ]
               ]);
            }
         }else if($day->dayOfWeek == Carbon::TUESDAY){
            if($graphics->contains('Dia', 'Martes'))
            {
               
            }else{
               $graphics->prepend([
                  'Dia' => 'Martes',
                  'Datos' => [
                     [
                        'Programa' => $transmition->program_name,
                        'AA' => $transmition->AA
                     ]
                  ]
               ]);
            }
         }else if($day->dayOfWeek == Carbon::WEDNESDAY){
            if($graphics->contains('Dia', 'Miercoles'))
            {
               
            }else{
               $graphics->prepend([
                  'Dia' => 'Miercoles',
                  'Datos' => [
                     [
                        'Programa' => $transmition->program_name,
                        'AA' => $transmition->AA
                     ]
                  ]
               ]);
            }
         }else if($day->dayOfWeek == Carbon::THURSDAY){
            if($graphics->contains('Dia', 'Jueves'))
            {
               
            }else{
               $graphics->prepend([
                  'Dia' => 'Jueves',
                  'Datos' => [
                     [
                        'Programa' => $transmition->program_name,
                        'AA' => $transmition->AA
                     ]
                  ]
               ]);
            }
         }else if($day->dayOfWeek == Carbon::FRIDAY){
            if($graphics->contains('Dia', 'Viernes'))
            {
               
            }else{
               $graphics->prepend([
                  'Dia' => 'Viernes',
                  'Datos' => [
                     [
                        'Programa' => $transmition->program_name,
                        'AA' => $transmition->AA
                     ]
                  ]
               ]);
            }
         }else if($day->dayOfWeek == Carbon::SATURDAY){
            if($graphics->contains('Dia', 'Sabado'))
            {
               
            }else{
               $graphics->prepend([
                  'Dia' => 'Sabado',
                  'Datos' => [
                     [
                        'Programa' => $transmition->program_name,
                        'AA' => $transmition->AA
                     ]
                  ]
               ]);
            }
         }else if($day->dayOfWeek == Carbon::SUNDAY){
            if($graphics->contains('Dia', 'Domingo'))
            {
               
            }else{
               $graphics->prepend([
                  'Dia' => 'Domingo',
                  'Datos' => [
                     [
                        'Programa' => $transmition->program_name,
                        'AA' => $transmition->AA
                     ]
                  ]
               ]);
            }
         }
      }
      dd($graphics);
   }

   /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function edit($id)
   {
      //
   }

   /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function update(Request $request, $id)
   {
      //
   }

   /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function destroy($id)
   {
      //
   }
}
