<?php

class EventController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /event
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('html-pages.events-overzicht');
	}

    public function detail($clubid)
    {
        return View::make('html-pages.events-'.$clubid)->with(['clubid' => $clubid]);
    }

	/**
	 * Show the form for creating a new resource.
	 * GET /event/create
	 *
	 * @return Response
	 */
	public function showTenniskamp($clubid)
	{
		//
        return View::make('html-pages.tenniskamp-inschrijven')->with(['clubid' => $clubid]);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /event
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /event/{id}
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
	 * GET /event/{id}/edit
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
	 * PUT /event/{id}
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
	 * DELETE /event/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}