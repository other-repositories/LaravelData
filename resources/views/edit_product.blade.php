@extends("layouts.app")

@section("content")
<h1>Редактирование товара</h1>
<form method="POST" action="">
	@csrf
	<input type="hidden" name="id" value="{{ $product->id }}">
	<div>
		<label for="name"><div>Название:</div></label>
			<input type="text" name="name" value="{{ old("name") ?? $product->name }}">
			@error("name")
				<span>{{ $message }}</span>
			@enderror
	</div>

	<div>
		<label for="description"><div>Описание:</div></label>
			<textarea name="description" >{{ old("description") ?? $product->description }}</textarea>
			@error("description")
				<span>{{ $message }}</span>
			@enderror
	</div>

	<div>
		<label for="price"><div>Цена:</div></label>
			<input type="number" name="price" value="{{ old("price") ?? $product->price }}">
			@error("price")
				<span>{{ $message }}</span>
			@enderror
	</div>
	<div>
		<label for="shop"><div>Магазин:</div></label>
        	<select id="shop" name="shop">
                @foreach ($shops as $shop)
			<option value="{{ $shop->id }}">{{ $shop->name }}</option>
		@endforeach
  		</select>
		@error("shop")
			<span>{{ $message }}</span>
		@enderror
	</div>
	<button type="submit">Сохранить</button>
</form>
@endsection
