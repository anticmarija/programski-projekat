<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProjectController extends Controller
{
    public function create () {
       
        return view('project');

    }

   public function storeProject(Request $request) {

       $this->validate($request,
           ['title' => 'required'
         ]);


       $project = new Project;

       $project->title=$request->title;

       $project->save();

       return view('students', ['project' => $project]);


   }
}
