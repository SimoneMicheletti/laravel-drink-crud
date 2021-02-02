<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drink;

class DrinkController extends Controller
{
    public function index() {
		$drinks = Drink::All();
		return view('pages.drinks', compact('drinks'));
	}

	public function show($id) {
		$drink = Drink::findOrFail($id);
		return view('pages.drink', compact('drink'));
	}

	public function create() {
		return view('pages.drink-create');
	}

	public function store(Request $request) {
		Drink::create($request -> All());
		return redirect() -> route('drink-index');
	}

	public function edit($id) {
		$drink = Drink::findOrFail($id);
		return view('pages.drink-edit', compact('drink'));
	}

	public function update(Request $request, $id) {
		Drink::findOrFail($id) -> update($request -> All());
		return redirect() -> route('drink-index');
	}

	public function delete($id) {
		Drink::findOrFail($id) -> delete();
		return redirect() -> route('drink-index');
	}

}
