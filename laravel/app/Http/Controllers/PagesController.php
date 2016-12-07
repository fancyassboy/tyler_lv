<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

	public function getIndex() {
		
		return view('pages.find');
	}

	public function getChat(){
		
		return view('pages.chat');
	}
	public  function getProfile(){

		return view('pages.profile');
	}




}