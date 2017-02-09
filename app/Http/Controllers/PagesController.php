<?php

namespace App\Http\Controllers;

class PagesController extends Controller{
	public function getIndex(){
		return view('pages.welcome');
	}

	public function getAbout(){
		$first = "Lawrence";
		$last = "Mamithi";
		$fullname = $first . " " . $last;
		$email = "19lawrence93@gmail.com";
		$data['email'] = $email;
		$data['fullname'] = $fullname;
		return view('pages.about')->withData($data);
	}

	public function getContact(){	
		return view('pages.contact');
	}

}


?>