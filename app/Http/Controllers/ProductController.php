<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Shop;
use App\Models\Product;

class ProductController extends Controller {
	function index() {
		$products = Product::all()->load("shop");

		return view("products", ["rows" => $products]);
	}

	function add() {
		return view("add_product", ["products" => Product::all()], ["shops" => Shop::all()]);
	}

	function view(Product $product) {
		return view("product", ["product" => $product->load(["shop" => function($query) {}])]);
	}

	function edit(Product $product) {
		return view("edit_product", ["product" => $product], ["shops" => Shop::all()]);
	}

	function store(Request $request) {
		$request->validate([
			"id" => "nullable|exists:products",
			"name" => "required",
			"description" => "nullable",
			"price" => "nullable|numeric",
			"shop" => "required|exists:shops,id"
		], [
			"name" => "У товара должно быть название!",
			"price" => "У товара должна быть цена!",
			"shop" => "У товара должен быть продавец!",
		]);

		$arr = $request;

		$product = Product::find($arr->id) ?? new Product;
		$product->name = $arr->name;
		$product->description = $arr->description;
		$product->price = $arr->price;
		$product->shop_id = $arr->shop;
		$product->save();

		return redirect('/products')->with('success', 'Success!');
	}


	function drop(Product $product) {
		$product->delete();
		return redirect('/products')->with('success', 'Success!');
	}
}
