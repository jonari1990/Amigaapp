<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StorageController extends Controller
{
 
   public function index()
   {
       return view('estudiantes.subearchivo'); 

   } 	


   public function save(Request $request)
{
 
       
       $file = $request->file('file');
       $nombre = $file->getClientOriginalName();
       //dd($nombre);
       $carpeta='1110501800';
       \Storage::disk('local_2')->put($carpeta.'/'.$nombre,  \File::get($file));
 
       $exito= "archivo guardado";

       return redirect()->route('beneficiarios.subearchivo')->with('exito',$exito);
}



}
