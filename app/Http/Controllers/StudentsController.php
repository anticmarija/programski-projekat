<?php

namespace App\Http\Controllers;

use App\Project;
use App\Student;
use Illuminate\Http\Request;

use App\Http\Requests;

class StudentsController extends Controller

{

    public function store(Request $request) {


        for ($i=1; $i<6; $i++) {

            $student = new Student;

            $student->name = $request->input('name' . $i);
            $student->index = $request->input('index' . $i);
            $student->project_id = $request->input('project_id');

            $student->save();

        }

        return view('end');

    }
}
