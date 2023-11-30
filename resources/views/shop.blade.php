@extends("layouts.app")

@section("content")
<h1>{{$shop->name}}</h1>
<p>
	{{$shop->description ?? ""}}
</p>
<p>
	<a href="/shop/{{ $shop->id }}/edit">Редактировать</a> | <a href="/shop/{{ $shop->id }}/delete">Удалить</a>
</p>
<h3>Товары:</h3>
<table>
	<tr>
		<th>Название</th>
		<th>Описание</th>
		<th>Цена</th>

	</tr>
	@foreach ($shop->products as $row)
		<tr>
			<td><a href="/product/{{$row->id}}">{{$row->name}}</a></td>
			<td>{{$row->description}}</td>
			<td>{{$row->price}}</td>

		</tr>
	@endforeach
</table>
@endsection
