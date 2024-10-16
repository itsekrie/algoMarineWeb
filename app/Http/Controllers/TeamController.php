<?php

namespace App\Http\Controllers;

use App\Models\Members;
use App\Models\Teams;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    function index(){
        $teams = Teams::all();
        
        return view('Public.Team.index', compact('teams'));
    }

    function show($slug){

        $team = Teams::where('Slug', $slug)->firstOrFail();
        $members = Members::where('Team_id',$team->id)->get();
        return view('public.team.show',compact('team','members'));
    }
}
