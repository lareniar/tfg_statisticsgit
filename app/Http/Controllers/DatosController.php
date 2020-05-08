<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DatosController extends Controller
{
    public function index(Request $request)
    {
        $users = User::get();
        return $users;
    }
}
