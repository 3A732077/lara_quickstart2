<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function  _construct()
    {
        $this->middleware('auth');
    }


}
