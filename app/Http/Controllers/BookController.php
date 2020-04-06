<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller {
	public function index() {
		return 'this is /book/index';
	}

	public function author() {
		return 'this is /book/author';
	}

	public function store(Request $request) {

	}
}
