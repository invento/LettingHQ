<?php

namespace App\Http\Controllers;

class LFController extends Controller {
	
	public function getIndex() {
		$with = array('active'=>'LF', 'subactive'=>'LF-Home');
		return view('LF.index')->with($with);
	}

}