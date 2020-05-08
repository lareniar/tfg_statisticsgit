<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Tasks;

class Task extends Controller
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
            'input_name' =>  $request->Task_name,
            'input_cost' =>  $request->Task_cost,
            'input_start' =>  $request->Task_start,
            'input_end' => $request->Task_end,
        ];

        error_log($request->Task_name);
            /*Como meter datos*/
            $Task = new Tasks;
            // write function to add the asigned project to project_id in the table
            $Task->project_name = $request->task_asigned_project;
            $Task->task_name= $request->task_name;
            $Task->task_owner = $request->task_owner;
            $Task->group_owner = $request->task_group_owner;
            $Task->date_start = $request->task_start;
            $Task->date_end = $request->task_end;
            $Task->priority = $request->task_priority;
            $Task->description = $request->task_description;
            $Task->user_id = 1;
            $Task->project_id = 1;
            // enviar correo al administrador
            $Task->save();

            return redirect("/formulary");
       
    }
}
