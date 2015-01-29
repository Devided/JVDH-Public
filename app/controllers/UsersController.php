<?php

class UsersController extends \BaseController {

    /**
     * Show the login form.
     * @return Response
     */
    public function getLogin()
    {
        return View::make('html-pages.login');
    }

    /**
     * Log the user in.
     * @return Response
     */
    public function postLogin()
    {

        // Validate the login request
        $rules = array(
            'emailadres'    => 'required|email|min:3',
            'password' => 'required|min:3'
        );

        $validator = Validator::make(Input::all(), $rules);
        // If the validator fails, redirect back to the form
        if ($validator->fails()) {
            return Redirect::to('login')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        } else {
            // create our user data for the authentication
            $userdata = array(
                'email' 	=> Input::get('emailadres'),
                'password' 	=> Input::get('password')
            );

            // attempt to do the login
            if (Auth::attempt($userdata)) {
                return Redirect::action('inschrijven');
            } else {
                // validation not successful, send back to form
                return Redirect::to('login')->withErrors('Gebruikersnaam of wachtwoord onjuist.');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /sessions/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy()
    {
        Auth::logout();
        return Redirect::to('/');
    }

    /**
     * Show the forgot password page
     * GET /login/vergeten
     *
     */
    public function getForgotPassword()
    {
        return View::make('html-pages.login-forgot');
    }

    /**
     * Email the users password based on emailadress
     * POST /login/vergeten
     *
     */
    public function postForgotPassword()
    {
        $email = Input::get('email');
        $user = User::where('email', '=', $email);

        if($email == '')
        {
            return Redirect::back();
        }

        $newpassword = str_random(8);
        $user->password = Hash::make($newpassword);
        $user->save();

        //send email with new password

        Mail::send('emails.forgot', [
            'wachtwoord' => $newpassword
        ], function($message) use ($user)
        {
            $message->to($user->email)->subject('[tsjh.nl] Nieuw wachtwoord');
        });

        $s = "Uw nieuwe wachtwoord is verzonden naar <b>" . $email . "</b>.";

        return Redirect::action('login')->withErrors($s);
    }

    /**
     * Show the register page
     * GET /registreren
     *
     */
    public function getRegister()
    {
        return View::make('html-pages.register');
    }

    /**
     * post the register page
     * POST /registreren
     *
     */
    public function postRegister()
    {
        // Validate the login request
        $rules = array(
            'emailadres'    => 'required|email|min:3',
            'password' => 'required|min:3',
            'naam' => 'required|min:3'
        );

        $validator = Validator::make(Input::all(), $rules);
        // If the validator fails, redirect back to the form
        if ($validator->fails()) {
            return Redirect::to('registreren')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        } else {
            // create our user data for the authentication
            $userdata = array(
                'email' 	=> Input::get('emailadres'),
                'password' 	=> Input::get('password')
            );

            // attempt to do the login
            if (Auth::attempt($userdata)) {
                Auth::logout();
                return Redirect::to('registreren')->withErrors('Onder dit emailadres is al een account aangemaakt.');
            } else {
                // validation not successful, send back to form
                $user = new User();
                $user->email = Input::get('emailadres');
                $user->password = Hash::make(Input::get('password'));
                $user->naam = Input::get('naam');
                $user->save();

                Auth::loginUsingId($user->id);

                return Redirect::action('inschrijven');
            }
        }
    }
}