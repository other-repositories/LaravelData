<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;

class ShopController extends Controller {
	function index() {
		$shops = Shop::all();

		return view("shops", ["rows" => $shops]);
	}

	function add() {
		return view("add_shop");
	}

	function view(Shop $shop) {
		return view("shop", [
			"shop" => $shop->load([
				"products" => function($query) {},
				"comments" => function($query) { $query->recent(); }
			])
		]);
	}

	function edit(Shop $shop) {
		return view("edit_shop", ["shop" => $shop]);
	}

	function store(Request $request) {
		$request->validate([
			"id" => "nullable|exists:shops",
			"name" => "required",
			"description" => "nullable"
		], [
			"name" => "Магазин должен иметь название!"
		]);

		$arr = $request;

		$shop = Shop::find($arr->id) ?? new Shop;
		$shop->name = $arr->name;
		$shop->description = $arr->description;
		$shop->save();

		return redirect('/shops')->with('success', 'Success!');
	}


	function drop(Shop $shop) {
		foreach($shop->products as $product) {
			$product->comments()->delete();
			$product->delete();
		}

		$shop->delete();
		return redirect('/shops')->with('success', 'Success!');
	}
}
