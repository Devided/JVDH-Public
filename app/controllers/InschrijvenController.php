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

        $inschrijvingen = $user->subscriptions->all();

        return View::make('html-pages.inschrijven-index')->with(['inschrijvingen' => $inschrijvingen, 'user' => $user, 'admin' => $user->admin]);
	}

    public function showBeheer()
    {
        $user = Auth::user();

        if($user->admin)
        {
            $onderdelen = Part::all();
            return View::make('html-pages.inschrijven-beheer')->with(['onderdelen' => $onderdelen]);
        }

        return Redirect::action('inschrijven');
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
        $parts = Part::where('active','=','1')->where('clubid','=',$clubid)->orderBy('grootte','DESC')->get();
        return View::make('html-pages.inschrijven-new-2')->with(['clubid' => $clubid, 'parts' => $parts]);
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
            'telefoon' => 'required:min:7',
            'onderdeel' => 'required',
            'geslacht' => 'required'
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
            $subscription->part_id = Input::get('onderdeel');
            $subscription->user_id = Auth::user()->id;

            if(Input::get('geslacht') == 'man' || Input::get('geslacht') == 'vrouw') {
                $subscription->geslacht = Input::get('geslacht');
            } else {
                return Redirect::action('inschrijven.nieuw.2',['clubid' => Input::get('clubid')])->withInput(Input::all());
            }
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
	public function update()
	{
        $user = Auth::user();
        // Validate the login request
        $rules = array(
            'emailadres'    => 'required|email|min:3',
            'naam' => 'required|min:3'
        );

        $validator = Validator::make(Input::all(), $rules);
        // If the validator fails, redirect back to the form
        if ($validator->fails()) {
            return Redirect::to('inschrijven.wijzig')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::all()); // send back the input (not the password) so that we can repopulate the form
        } else {
            $user->naam = Input::get('naam');
            $user->email = Input::get('emailadres');
            $user->save();
            return Redirect::action('inschrijven');
        }
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /inschrijven/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function delete($id)
	{
		if($subscription = Subscription::find($id)){
            if($subscription->user_id == Auth::user()->id){
                // subscription is owned by the current user and we can delete it
                $subscription->delete();
            }
        }

        return Redirect::action('inschrijven');
	}

    public function showWijzig(){
        return View::make('html-pages.inschrijven-wijzig')->with(['user' => Auth::user()]);
    }

    public function showVoorwaarden(){
        return View::make('html-pages.inschrijven-voorwaarden');
    }

    public function download($clubid)
    {
        if(!Auth::user()->admin)
        {
            return Redirect::back();
        }

        $inschrijvingen = Subscription::all();

        $excel = [];

        if($clubid == 'all')
        {
            foreach($inschrijvingen as $inschrijving) {
                $excel['Persoon'] = $inschrijving->naam;
                $excel['Leeftijd'] = $inschrijving->geboortedatum;
                $excel['Ervaring'] = $inschrijving->ervaring;
                $excel['knltb'] = $inschrijving->knltb;
                $excel['Verhindering'] = $inschrijving->verhindering;
                $excel['Opmerking'] = $inschrijving->opmerking;
                $excel['Club'] = $inschrijving->club;
                $excel['Telefoon'] = $inschrijving->telefoon;
                $excel['Geslacht'] = $inschrijving->geslacht;
                $onderdeel = Part::where('id', '=', $inschrijving->part_id)->first();
                $excel['Onderdeel'] = $onderdeel->seizoen . ' (' . $onderdeel->grootte . ')';
                $user = User::where('id','=', $inschrijving->user_id)->first();
                $excel['Accountnaam'] = $user->naam;
                $excel['Accountemail'] = $user->email;
            }
        } else {
            foreach($inschrijvingen as $inschrijving) {
                if($inschrijving->club == $clubid)
                {
                    $excel['Persoon'] = $inschrijving->naam;
                    $excel['Leeftijd'] = $inschrijving->geboortedatum;
                    $excel['Ervaring'] = $inschrijving->ervaring;
                    $excel['knltb'] = $inschrijving->knltb;
                    $excel['Verhindering'] = $inschrijving->verhindering;
                    $excel['Opmerking'] = $inschrijving->opmerking;
                    $excel['Club'] = $inschrijving->club;
                    $excel['Telefoon'] = $inschrijving->telefoon;
                    $excel['Geslacht'] = $inschrijving->geslacht;
                    $onderdeel = Part::where('id', '=', $inschrijving->part_id)->first();
                    $excel['Onderdeel'] = $onderdeel->seizoen . ' (' . $onderdeel->grootte . ')';
                    $user = User::where('id','=', $inschrijving->user_id);
                    $excel['Accountnaam'] = $user->naam;
                    $excel['Accountemail'] = $user->email;
                }
            }
        }

        dd($excel);
    }

    public function togglePart($id)
    {
        if(!Auth::user()->admin)
        {
            return Redirect::back();
        }

        $part = Part::find($id);

        if($part->active)
        {
            $part->active = false;
        } else {
            $part->active = true;
        }

        $part->save();

        return Redirect::back();
    }

    public function deletePart($id)
    {
        if(!Auth::user()->admin)
        {
            return Redirect::back();
        }

        $part = Part::find($id);

        if($part->active)
        {
            return Redirect::back();
        } else {
            $subscriptions = Subscription::where('part_id', '=', $id);
            foreach($subscriptions as $subscription)
            {
                $subscription->delete();
            }
            $part->delete();
            return Redirect::back();
        }
    }
}
