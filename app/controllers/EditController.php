<?php

class EditController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /edit
	 *
	 * @return Response
	 */
	public function show($id)
	{
		//
        if(!Auth::user()->admin)
        {
            return Redirect::back();
        }

        $content = Content::find($id);

        if(!$content)
        {
            return Redirect::back();
        }

        return View::make('html-pages.editview')->with(['body' => $content->body]);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /edit/create
	 *
	 * @return Response
	 */
	public function post($id)
	{
		//
        if(!Auth::user()->admin)
        {
            return Redirect::back();
        }

        $content = Content::find($id);

        if(!$content)
        {
            return Redirect::back();
        }

        $newcontent = Input::get('content');
        $content->body = $newcontent;

        $content->save();

        return View::make('html-pages.editview')->with(['body' => $content->body, 'done' => true]);
	}

}