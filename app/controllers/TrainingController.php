<?php

class TrainingController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /training
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('html-pages.trainingen');
	}
}