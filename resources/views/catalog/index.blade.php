@extends('layout.site', ['title' => 'Каталог товаров'])

@section('content')
    <h1>Каталог товаров</h1>

    <p>Для клиента очень важно обратить внимание на процесс адиписцирования. И мы ведем, с целесообразным осуществлением выбора, с правом и справедливым правом большого труда, который действительно отталкивает подобные времена в любое время! Они уходят, и боль мешает получению удовольствия от развода. Для клиента очень важно обратить внимание на процесс адиписцирования. И мы ведем, с целесообразным осуществлением выбора, с правом и справедливым правом большого труда, который действительно отталкивает подобные времена в любое время! Они уходят, и боль мешает получению удовольствия от развода.</p>

    <h2 class="mb-4">Разделы каталога</h2>
    <div class="row">
        @foreach ($roots as $root)
            @include('catalog.part.category', ['category' => $root])
        @endforeach
    </div>

    <h2 class="mb-4">Популярные бренды</h2>
    <div class="row">
        @foreach ($brands as $brand)
            @include('catalog.part.brand', ['brand' => $brand])
        @endforeach
    </div>
@endsection


