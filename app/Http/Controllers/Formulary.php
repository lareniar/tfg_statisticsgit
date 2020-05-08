<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Projects;

class Formulary extends Controller
{
    public function create(Request $request)
    {
        
        // data validation
        $rules = [
            'classroom' => 'required',
            'description' => 'required',
            'equipo' => ['required', 'regex:/^HZ[1-9]{6}$/'],
            'state' => 'required',
        ];
        $customMessages = [
            'description.required' => 'Pon una descripcion minima de 10 caracteres.',
            'nombre.min' => 'El nombre no cumple.',
            'equipo.required' => 'El equipo tiene que ser HZ y 6 números',
            'equipo.regex' => 'El equipo tiene que ser HZ y 6 números',
            'state.required' => 'Pon el estado.',
        ];

        $inputsValue = [
            'input_name' =>  $request->project_name,
            'input_cost' =>  $request->project_cost,
            'input_start' =>  $request->project_start,
            'input_end' => $request->project_end,
        ];

        error_log($request->project_name);
            /*Como meter datos*/
            $Project = new Projects;
            $Project->project_name = $request->project_name;
            $Project->costs = $request->project_cost;
            $Project->costs_limit = $request->project_limit;
            $Project->date_start = $request->project_start;
            $Project->date_end = $request->project_end;
            $Project->description = $request->project_description;
            // enviar correo al administrador
            $Project->save();

            return redirect("/formulary");
       
    }
}
