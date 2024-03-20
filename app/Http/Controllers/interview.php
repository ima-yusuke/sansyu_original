<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class interview extends Controller
{
    //
    public function show_interview($id){
        return view("interview".$id);
    }
}
