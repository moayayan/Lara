<?php

class HomeController extends BaseController {
	public function home(){

		Mail::send('emails.auth.test', array('name' => 'Jhan'), function($message){
			$message->to('jhan.roenz@gmail.com','Jhan Roenz')->subject('Test email');
		});

		return View::make('home');

	}
}
