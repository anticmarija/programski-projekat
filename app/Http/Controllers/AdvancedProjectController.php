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

        $project->title = $request->name;

        $project->save();

        if (sizeof($request->student) != 0) {

            foreach ($request->student as $student) {
                $students[] = json_decode($student, true);
            }


            foreach ($students as $i => $student) {

                $studentBaza = Student::find($student['id']);

                $studentBaza->project_id = $project->id;

                $studentBaza->save();

            }
        }

        return view('pages.end', ['project_id' => $project->id]);

    }
}