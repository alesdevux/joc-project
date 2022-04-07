<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\Request;

class TournamentController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
      $tournaments = Tournament::orderBy('date', 'desc')->simplePaginate(10);
      return view('home', compact('tournaments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newTournament = request()->except('_token');

        Tournament::create($newTournament);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tournament = Tournament::find($id);
        return view('tournaments.edit', compact('tournament'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $changeTournament = request()->except('_token');
        $tournament = Tournament::find($id);
        $tournament->update($changeTournament);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tournament::destroy($id);
        return redirect()->back();
    }
}
