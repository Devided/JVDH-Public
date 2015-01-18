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

            foreach($onderdelen as $onderdeel)
            {
                $inschrijvingen = Subscription::where('part_id','=',$onderdeel->id)->get();
                $onderdeel->inschrijvingen = count($inschrijvingen);
            }

            $events = Tennisevent::all();
            return View::make('html-pages.inschrijven-beheer')->with(['onderdelen' => $onderdelen, 'events' => $events]);
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
                $onderdeel = Part::where('id', '=', $inschrijving->part_id)->first();
                $user = User::where('id','=', $inschrijving->user_id)->first();

                $excel[] = [
                    'Persoon' => $inschrijving->naam,
                    'Leeftijd' => $inschrijving->geboortedatum,
                    'Ervaring' => $inschrijving->ervaring,
                    'knltb' => $inschrijving->knltb,
                    'Verhindering' => $inschrijving->verhindering,
                    'Opmerking' => $inschrijving->opmerking,
                    'Club' => $inschrijving->club,
                    'Telefoon' => $inschrijving->telefoon,
                    'Geslacht' => $inschrijving->geslacht,
                    'Onderdeel' => ($onderdeel->seizoen . " (" . $onderdeel->grootte . ")"),
                    'Accountnaam' => $user->naam,
                    'Accountemail' => $user->email
                ];
            }
        } else {
            foreach($inschrijvingen as $inschrijving) {
                if($inschrijving->club == $clubid)
                {
                    $onderdeel = Part::where('id', '=', $inschrijving->part_id)->first();
                    $user = User::where('id','=', $inschrijving->user_id)->first();

                    $excel[] = [
                        'Persoon' => $inschrijving->naam,
                        'Leeftijd' => $inschrijving->geboortedatum,
                        'Ervaring' => $inschrijving->ervaring,
                        'knltb' => $inschrijving->knltb,
                        'Verhindering' => $inschrijving->verhindering,
                        'Opmerking' => $inschrijving->opmerking,
                        'Club' => $inschrijving->club,
                        'Telefoon' => $inschrijving->telefoon,
                        'Geslacht' => $inschrijving->geslacht,
                        'Onderdeel' => ($onderdeel->seizoen . " (" . $onderdeel->grootte . ")"),
                        'Accountnaam' => $user->naam,
                        'Accountemail' => $user->email
                    ];
                }
            }
        }

        $flag = false;
        foreach($excel as $row) {
            if(!$flag) {
                // display field/column names as first row
                echo implode("\t", array_keys($row)) . "\r\n";
                $flag = true;
            }
            echo implode("\t", array_values($row)) . "\r\n";
        }

        header("Content-Disposition: attachment; filename=\"inschrijvingen-". $clubid .".xls\"");
        header("Content-Type: application/vnd.ms-excel");

        return;

        //dd($excel);
    }

    public function downloadOnderdeel($id)
    {
        if(!Auth::user()->admin)
        {
            return Redirect::back();
        }

        $inschrijvingen = Subscription::where('part_id','=', $id)->get();
        $onderdeel = Part::find($id);

        $excel = [];

        foreach($inschrijvingen as $inschrijving) {
            $onderdeel = Part::where('id', '=', $inschrijving->part_id)->first();
            $user = User::where('id','=', $inschrijving->user_id)->first();

            $excel[] = [
                'Persoon' => $inschrijving->naam,
                'Leeftijd' => $inschrijving->geboortedatum,
                'Ervaring' => $inschrijving->ervaring,
                'knltb' => $inschrijving->knltb,
                'Verhindering' => $inschrijving->verhindering,
                'Opmerking' => $inschrijving->opmerking,
                'Club' => $inschrijving->club,
                'Telefoon' => $inschrijving->telefoon,
                'Geslacht' => $inschrijving->geslacht,
                'Onderdeel' => ($onderdeel->seizoen . " (" . $onderdeel->grootte . ")"),
                'Accountnaam' => $user->naam,
                'Accountemail' => $user->email
            ];
        }


        $flag = false;
        foreach($excel as $row) {
            if(!$flag) {
                // display field/column names as first row
                echo implode("\t", array_keys($row)) . "\r\n";
                $flag = true;
            }
            echo implode("\t", array_values($row)) . "\r\n";
        }

        header("Content-Disposition: attachment; filename=\"inschrijvingen-". $onderdeel->seizoen . "-". $onderdeel->grootte ."-". $onderdeel->clubid .".xls\"");
        header("Content-Type: application/vnd.ms-excel");

        return;

        //dd($excel);
    }

    public function cleanData($str)
    {
        $str = preg_replace("/\t/", "\\t", $str);
        $str = preg_replace("/\r?\n/", "\\n", $str);
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
            $subscriptions = Subscription::where('part_id', '=', $id)->get();
            foreach($subscriptions as $subscription)
            {
                $subscription->delete();
            }
            $part->delete();
            return Redirect::back();
        }
    }

    public function showAdd()
    {
        if(!Auth::user()->admin)
        {
            return Redirect::back();
        }

        return View::make('html-pages.beheer-add');
    }

    public function postAdd()
    {
        if(!Auth::user()->admin)
        {
            return Redirect::back();
        }

        $rules = array(
            'club'    => 'required|min:1',
            'seizoen' => 'required|min:1',
            'aantal' => 'required|min:1',
            'prijs' => 'required|min:1'
        );

        $validator = Validator::make(Input::all(), $rules);
        // If the validator fails, redirect back to the form
        if ($validator->fails()) {
            return Redirect::action('beheer.add')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::all()); // send back the input (not the password) so that we can repopulate the form
        } else {
            $part = new Part();
            $part->seizoen = Input::get('seizoen');
            $part->grootte = Input::get('aantal');
            $part->prijs = Input::get('prijs');
            $part->clubid = Input::get('club');
            $part->save();

            return Redirect::action('inschrijven.beheren');
        }
    }
}
