<?php

class ConsultancyController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /lesdata
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('html-pages.consultancy');
	}
}