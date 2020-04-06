<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller {
	public function index() {
		return 'this is /book/index';
	}

	public function author($id = null) {
		if ($id) {
			return 'this is /book/author with id ' . $id;
		} else {
			return 'this is /book/author without id';
		};
	}

	public function store(Request $request) {

	}
}
