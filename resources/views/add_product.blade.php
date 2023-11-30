@extends("layouts.app")

@section("content")
<h1>Добавление товара</h1>
<form method="POST" action="">
	@csrf
	<div>
		<label for="name"><div>Название:</div></label>
			<input type="text" name="name">
			@error("name")
				<span>{{ $message }}</span>
			@enderror

	</div>

	<div>
		<label for="description"><div>Описание:</div></label>
			<textarea name="description"></textarea>
			@error("description")
				<span>{{ $message }}</span>
			@enderror
	</div>

	<div>
		<label for="price"><div>Цена:</div></label>
			<input type="number" name="price">
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
