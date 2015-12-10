<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NoticesController extends Controller
{
	public function __construct() {
		$this->middleware('auth');
	}

	public function index() {
		return view('notices.index');
	}


	public function create() {
		$providers = [
			'Youtube',
			'Something else',
			'Another one'
		];

		return view('notices.create')->with('providers', $providers);
	}
}