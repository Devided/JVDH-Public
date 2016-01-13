<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Third Party Services
	|--------------------------------------------------------------------------
	|
	| This file is for storing the credentials for third party services such
	| as Stripe, Mailgun, Mandrill, and others. This file provides a sane
	| default location for this type of information, allowing packages
	| to have a conventional place to find your various credentials.
	|
	*/

	'mailgun' => array(
		'domain' => 'tsjh.nl',
		'secret' => 'key-65cd5e9bcf1836d5271efb8a61f76666',
	),

	'mandrill' => array(
		'secret' => getenv('MANDRILL_SECRET'),
	),

	'stripe' => array(
		'model'  => 'User',
		'secret' => '',
	),

);
