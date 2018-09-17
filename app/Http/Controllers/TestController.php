<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;

class TestController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function home()
	{
		//
		
		$data = array();
		$data['games'] = Game::all();
		return view('welcome', $data);
	}
	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function saveOptions(Request $request)
	{
		//
		$this->validate($request, [
			'id'           => 'required',
			'json_options' => 'required',
		]);
		
		
		$game = Game::find($request->input('id'));
		$game->json_options = $request->input('json_options');
		$game->save();
		
		return redirect(route('home'))->with('success', 'The options have been saved successfully.');
		//dd($request);
	}
}
