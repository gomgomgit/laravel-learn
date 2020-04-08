<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller {
	public function index() {
		return view('book.index');
	}

	public function author($name = null) {
		if ($name) {
			return view('book.anauthor')->with('name', $name);
		} else {
			return view('book.author');
		}
	}

	public function store(Request $request) {

	}
}
