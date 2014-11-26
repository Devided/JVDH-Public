<?php

class InschrijvenController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /inschrijven
	 *
	 * @return Response
	 */
	public function index()
	{
		//

        $user = Auth::user();

        $inschrijvingen = $user->subscriptions();
        return View::make('html-pages.inschrijven-index')->with(['inschrijvingen' => $inschrijvingen]);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /inschrijven/create
	 *
	 * @return Response
	 */
	public function create1()
	{
        return View::make('html-pages.inschrijven-new-1');
	}

	public function create2($clubid)
	{
        	return View::make('html-pages.inschrijven-new-2');
    	}

	/**
	 * Store a newly created resource in storage.
	 * POST /inschrijven
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /inschrijven/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /inschrijven/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /inschrijven/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /inschrijven/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
