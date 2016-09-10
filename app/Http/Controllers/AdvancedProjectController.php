<?php

namespace App\Http\Controllers;

use App\Project;
use App\Student;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdvancedProjectController extends Controller
{
    public function create() {

        $students = Student::all();
        return view('pages.advancedProject', ['students' => $students]);
    }

    public function storeAdvancedProject(Request $request) {

        $this->validate($request,
            ['title' => 'required'
            ]);

        $project = new Project;

        $project->title = $request->title;

        $project->save();

        $student = json_decode($request->student, true);

        $studentBaza = Student::find($student['id']);

         $studentBaza->project_id = $project->id;

         $studentBaza->save();


        return view('pages.end', ['project_id' => $project->id]);

    }
}