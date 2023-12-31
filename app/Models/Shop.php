<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shop extends Model
{
	use SoftDeletes;

	function products() {
		return $this->hasMany(Product::class);
	}
}
