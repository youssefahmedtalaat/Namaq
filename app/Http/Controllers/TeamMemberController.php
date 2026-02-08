<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use Illuminate\Http\Request;

class TeamMemberController extends Controller
{
    public function index()
    {
        $teamMembers = TeamMember::orderBy('display_order')->get();
        return view('team', compact('teamMembers'));
    }

    public function show(TeamMember $teamMember)
    {
        return view('team.show', compact('teamMember'));
    }
}
