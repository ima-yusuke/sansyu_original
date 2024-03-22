<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class recruitment extends Controller
{
    //
    public function show_job_opening()
    {
        return view("job-opening");
    }

    public function show_job_detail()
    {
        return view("job-detail");
    }

    public function show_job_flow()
    {
        return view("job-flow");
    }

    public function show_job_benefit()
    {
        return view("job-benefit");
    }

    public function show_job_internship()
    {
        return view("job-internship");
    }

    public function show_job_question()
    {
        return view("job-question");
    }
}
