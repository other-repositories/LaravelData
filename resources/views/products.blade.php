@extends("layouts.app")

@section("content")
<h1>Все товары</h1>
<table>
<tr>
	<th>Название</th>
	<th>Описание</th>
	<th>Цена</th>
	<th>Магазин</th>

</tr>
@foreach ($rows as $row)
	<tr>
		<td><a href="/product/{{$row->id}}">{{$row->name}}</a></td>
		<td>{{$row->description}}</td>
		<td>{{$row->price}}</td>
		<td><a href="/shop/{{$row->shop->id}}">{{$row->shop->name}}</a></td>
	</tr>
@endforeach
</table>
<p><a href="/product/add">Добавить</a></p>
@endsection
