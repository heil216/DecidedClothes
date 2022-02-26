@extends('layouts.app')
@section('title','一覧')

@section('content')
    <h1>一覧</h1>
        @foreach ($clothes as $clothe)
            <img src="{{ $clothe->image_path) }}">
            <h3 class='name'>{{ $clothe->name }}</h3>
            <p class='type'>{{ $clothe->type }}</p>
            <p class='color'>{{ $clothe->color }}</p>
            <p class='thickness'>{{ $clothe->thickness }}</p>
            <p class='style'>{{ $clothe->style }}</p>
            <p class='where_buy'>{{ $clothe->where_buy }}</p>
        @endforeach
        
        <div class='paginate'>
            {{ $clothes->links() }}
        </div>
@endsection