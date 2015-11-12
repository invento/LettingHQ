<?php

namespace App\Http\Controllers;

class HQController extends Controller {
	
	public function getIndex() {
		return view('HQ.index')->with('active', 'HQ');
	}

	public function getPricing() {
		return view('HQ.pricing')->with('active', 'Pricing');
	}

	public function getContact() {
		return view('HQ.contact')->with('active', 'Contact');
	}

}