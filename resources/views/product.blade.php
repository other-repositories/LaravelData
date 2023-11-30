@extends("layouts.app")

@section("content")
<h1>{{$product->name}}</h1>
<p>
<a href="/product/{{ $product->id }}/edit">Редактировать</a> | <a href="/product/{{ $product->id }}/delete">Удалить</a>
</p>
<div>
	<div><b>Магазин: </b><span><a href="/shop/{{ $product->shop->id }}">{{$product->shop->name}}</a></span></div>
	<div><b>Описание: </b><span>{{$product->description ?? ""}}</span></div>
	<div><b>Цена: </b><span>{{$product->price}}</span></div>

</div>


@endsection
