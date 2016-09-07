<?php

namespace App\Http\Controllers;

use App\Project;
use App\Student;
use Illuminate\Http\Request;

use App\Http\Requests;

class StudentsController extends Controller

{

    public function store(Request $request) {

//       $this->validate($request,
//            [   'name' => 'required',
//                'index'=> 'required'
//            ]);

        for ($i=0; $i<5; $i++) {

            $student = new Student;

            $student->name = $request->input('name' . $i);
            $student->index = $request->input('index' . $i);
            $student->project_id = $request->input('project_id');

            $student->save();

        }

        return view('pages.end',['project_id' => $request->input('project_id')]);

    }
}
