<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tournament;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $categories = Category::all();
        return view('tournaments.create', compact('categories'));
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
        return redirect()->route('categories.show', request()->category_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tournament = Tournament::find($id);
        return view('tournaments.show', compact('tournament'));
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

    public function join($id) {
      $tournament = Tournament::find($id);
      $user = Auth::user();
      $tournament->users()->attach($user);
      return redirect()->back();
    }

    public function leave($id) {
      $tournament = Tournament::find($id);
      $user = Auth::user();
      $tournament->users()->detach($user);
      return redirect()->back();
    }
}
