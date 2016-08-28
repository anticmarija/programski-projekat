<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProjectController extends Controller
{
    public function create () {

        $teme =  array();
        $teme = Project::all();

        $teme_naslovi = array();

        foreach ($teme as $tema) {
            $teme_naslovi[] = $tema->title;
        }
        
      
        return view('pages.project',['teme' => $teme, 'teme_naslovi' => $teme_naslovi]);

    }

   public function storeProject(Request $request) {

       $this->validate($request,
           ['title' => 'required'
         ]);


       $project = new Project;

       $project->title=$request->title;
       $project->grade=0;

       $project->save();
       
       $brStud = 5;

       return view('pages.students', ['project' => $project, 'brStud' => $brStud]);


   }
}
