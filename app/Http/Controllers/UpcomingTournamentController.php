<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tournament;

class UpcomingTournamentController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tournament  $tournament
     * @return \Illuminate\Http\Response
     */
    public function show(Tournament $tournament)
    {
        $tournaments = Tournament::where('date', '>', date("Y-m-d"))->orderBy('date')->limit(1)->first();
        return view('upcoming')
        ->with('tournaments', $tournaments);
    }

}
