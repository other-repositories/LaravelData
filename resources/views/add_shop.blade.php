@extends("layouts.app")

@section("content")
<h1>Добавление магазина</h1>
<form method="POST" action="">
	@csrf

	<div>
		<label for="name"><div>Название:</div></label>
			<input type="text" name="name" value="{{ old("name") }}">
			@error("name")
				<span>{{ $message }}</span>
			@enderror
	</div>

	<div>
		<label for="description"><div>Описание:</div></label>
			<textarea name="description">{{ old("description") }}</textarea>
			@error("description")
				<span>{{ $message }}</span>
			@enderror
	</div>
	<button type="submit">Сохранить</button>
</form>
@endsection
