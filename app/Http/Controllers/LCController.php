<?php

namespace App\Http\Controllers;

class LCController extends Controller {
	
	public function getIndex() {
		$with = array('active'=>'LC', 'subactive'=>'LC-Home');
		return view('LC.index')->with($with);
	}

}