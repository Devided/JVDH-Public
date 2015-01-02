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
        	return View::make('html-pages.inschrijven-new-2')->with(['clubid' => $clubid]);
    }

	/**
	 * Store a newly created resource in storage.
	 * POST /inschrijven
	 *
	 * @return Response
	 */
	public function store()
	{
        // Validate the login request
        $rules = array(
            'naam'    => 'required|min:3',
            'clubid' => 'required',
            'leeftijd' => 'required|min:1',
            'ervaring' => 'required|min:1',
            'knltb' => 'min:8',
            'verhindering' => 'min:1',
            'opmerking' => 'min:1',
            'telefoon' => 'required:min:7'
        );

        $validator = Validator::make(Input::all(), $rules);
        // If the validator fails, redirect back to the form
        if ($validator->fails()) {
            return Redirect::action('inschrijven.nieuw.2',['clubid' => Input::get('clubid')])
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::all()); // send back the input (not the password) so that we can repopulate the form
        } else {
            //succeeded...
            $subscription = new Subscription();
            $subscription->naam = Input::get('naam');
            $subscription->club = Input::get('clubid');
            $subscription->geboortedatum = Input::get('leeftijd');
            $subscription->ervaring = Input::get('ervaring');
            $subscription->knltb = Input::get('knltb');
            $subscription->verhindering = Input::get('verhindering');
            $subscription->opmerking = Input::get('opmerking');
            $subscription->telefoon = Input::get('telefoon');
            $subscription->partid = 0;
            $subscription->user_id = Auth::user()->id;
            $subscription->save();

            return Redirect::action('inschrijven');
        }
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
