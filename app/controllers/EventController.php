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
        $events = Tennisevent::where('club','=',$clubid)->get();
        return View::make('html-pages.events-'.$clubid)->with(['clubid' => $clubid, 'events' => $events]);
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

    public function postTenniskamp($clubid)
    {
        // Validate the login request
        $rules = array(
            'naam'    => 'required|min:3',
            'clubid' => 'required',
            'leeftijd' => 'required|min:1',
            'telefoon' => 'required:min:7',
            'geslacht' => 'required',
            'email' =>  'required'
        );

        $validator = Validator::make(Input::all(), $rules);
        // If the validator fails, redirect back to the form
        if ($validator->fails()) {
            return Redirect::action('tenniskamp',['clubid' => Input::get('clubid')])
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::all()); // send back the input (not the password) so that we can repopulate the form
        } else {
            /*Mail::send('emails.tenniskamp', [
                'naam' => Input::get('naam'),
                'leeftijd' => Input::get('leeftijd'),
                'geslacht' => Input::get('geslacht'),
                'ervaring' => Input::get('ervaring'),
                'opmerking' => Input::get('opmerking'),
                'email' => Input::get('email'),
                'club' => Input::get('clubid'),
                'telefoon' => Input::get('telefoon')
            ], function($message)
            {
                $message->to('duco@devided.com', 'Duco Visbeen')->subject('[tsjh.nl] Nieuwe inschrijving tenniskamp');
            });*/

            $camp = new Campsubscription();

            $camp->club = Input::get('clubid');
            $camp->naam = Input::get('naam');
            $camp->leeftijd = Input::get('leeftijd');
            $camp->geslacht = Input::get('geslacht');
            $camp->emailadres = Input::get('email');
            $camp->telefoon = Input::get('telefoon');

            $camp->save();

            return View::make('html-pages.bedankt-tenniskamp');
        }
    }

	/**
	 * Store a newly created resource in storage.
	 * POST /event
	 *
	 * @return Response
	 */
	public function delete($id)
	{
        if(!Auth::user()->admin)
        {
            return Redirect::back();
        }

        $event = Tennisevent::find($id);
        $event->delete();

        return Redirect::back();
	}

	/**
	 * Display the specified resource.
	 * GET /event/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function showAdd()
	{
        if(!Auth::user()->admin)
        {
            return Redirect::back();
        }

        return View::make('html-pages.event-add');
	}

    public function postAdd()
    {
        if(!Auth::user()->admin)
        {
            return Redirect::back();
        }

        $rules = array(
            'club'    => 'required|min:1',
            'naam' => 'required|min:1',
            'datum' => 'required|min:1'
        );

        $validator = Validator::make(Input::all(), $rules);
        // If the validator fails, redirect back to the form
        if ($validator->fails()) {
            return Redirect::action('event.add')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::all()); // send back the input (not the password) so that we can repopulate the form
        } else {
            $event = new Tennisevent();
            $event->naam = Input::get('naam');
            $event->datum = Input::get('datum');
            $event->club = Input::get('club');
            $event->save();

            return Redirect::action('inschrijven.beheren');
        }
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

    public function showInschrijven($id)
    {
        return View::make('html-pages.event-inschrijven');
    }

    public function postInschrijven($id)
    {
        $rules = array(
            'email'    => 'required|email',
            'naam'     => 'required',
            'leeftijd' => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);
        // If the validator fails, redirect back to the form
        if ($validator->fails()) {
            return Redirect::action('event.inschrijven', ['id' => $id])
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::all()); // send back the input (not the password) so that we can repopulate the form
        } else {
            $event = Tennisevent::find($id);
            $email = Input::get('email');
            $naam = Input::get('naam');

            Mail::send('emails.event', [
                'email' => Input::get('email'),
                'club' => $event->club,
                'eventnaam' => $event->naam,
                'eventdatum' => $event->datum,
                'naam'  => Input::get('naam'),
                'leeftijd' => Input::get('leeftijd')
            ], function($message)
            {
                $message->to('jeroenvandenheuvel@wxs.nl', 'Jeroen van den Heuvel')->subject('[tsjh.nl] Nieuwe inschrijving event');
            });

            Mail::send('emails.klant-event', [
                'event' => $event->naam
            ], function($message) use ($email,$naam)
            {
                $message->to($email, $naam)->subject('[tsjh.nl] Inschrijving event');
            });

            return View::make('html-pages.bedankt-tenniskamp');
        }
    }

}