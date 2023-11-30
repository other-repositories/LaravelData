@extends("layouts.app")

@section("content")
<h1>Редактирование магазина</h1>
<form method="POST" action="">
	@csrf

	<input type="hidden" name="id" value="{{ $shop->id }}">

	<div>
		<label for="name"><div>Название:</div></label>
			<input type="text" name="name" value="{{ old("name") ?? $shop->name }}">
			@error("name")
				<span>{{ $message }}</span>
			@enderror
		</label>
	</div>

	<div>
		<label for="description"><div>Описание:</div></label>
			<textarea name="description">{{ old("description") ?? $shop->description }}</textarea>
			@error("description")
				<span>{{ $message }}</span>
			@enderror
		</label>
	</div>
	<button type="submit">Сохранить</button>
</form>
@endsection
