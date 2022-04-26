<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Project;
use Illuminate\Http\Request;


class ProjectController extends Controller
{
    public function project(){
        $projects = Project::orderBy('id', 'desc')->get();

        return view('pages.projects', [
            'projects' => $projects
        ]);
    }

    public function toProject($id){
        $curent_project = Project::where('id', $id)->first();
        

            
        return view('pages.project_item', [
            'curent_project' => $curent_project,
            
        ]);
    }
}
