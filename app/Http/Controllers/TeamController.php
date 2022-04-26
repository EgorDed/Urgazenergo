<?php

namespace App\Http\Controllers;


use App\Models\Team;
use App\Models\Project;
use Illuminate\Http\Request;


class TeamController extends Controller
{
    public function team(){
        $team = Team::all();
        return view('pages.team', [
            'team' => $team
        ]);
    }

    

    public function toCurentTeamItem($id ){
        $curent_team_item = Team::where('id', $id)->first();

        $name = explode(" ", $curent_team_item["name"]); 

        $projects_with_team_item = Project::where('team', 'like', '%' . $name[0] . '%')->get();

        return view('pages.team_item', [
            'curent_team_item' => $curent_team_item,
            'projects' => $projects_with_team_item
        ]);
    }
}
