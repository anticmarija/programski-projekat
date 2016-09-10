<?php

namespace App\Http\Controllers;

use App\Project;
use App\Student;
use Illuminate\Http\Request;

use App\Http\Requests;

class StudentsController extends Controller

{

    public function store(Request $request) {

        for($i=1; $i<6; $i++) {
            
            $this->validate($request,
                ['name'.$i => 'required',
                    'index'.$i => 'required'
                ]);
        }

        for ($i=1; $i<6; $i++) {

            $student = new Student;

            $student->name = $request->input('name' . $i);
            $student->index = $request->input('index' . $i);
            $student->project_id = $request->input('project_id');

            $student->save();

        }

        return view('pages.end',['project_id' => $request->input('project_id')]);

}

    public function singleStudent() {

        return view('pages.singleStudent');
    }
    
    public function storeSingleStudent(Request $request) {

        $student = new Student;

        $student->name = $request->input('name');
        $student->index = $request->input('index');
        $student->project_id = 0;

        $student->save();

        return view('pages.uploadHandle');


    }
}
