@extends("layouts.app")

@section("content")
<h1>Магазины</h1>
<table>
<tr>
	<th>Название</th>
	<th>Описание</th>
</tr>
@foreach ($rows as $row)
	<tr>
		<td><a href="/shop/{{$row->id}}">{{$row->name}}</a></td>
		<td>{{$row->description}}</td>
	</tr>
@endforeach
</table>
<p><a href="/shop/add">Добавить</a></p>
@endsection
