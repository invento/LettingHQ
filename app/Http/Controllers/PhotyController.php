<?php

namespace App\Http\Controllers;

class PhotyController extends Controller {
	
	public function getIndex() {
		$with = array('active'=>'Photy', 'subactive'=>'Photy-Home');
		return view('Photy.index')->with($with);
	}

	public function getBook() {
		$with = array('active'=>'Photy', 'subactive'=>'Photy-Home');
		return view('Photy.book')->with($with);
	}

}