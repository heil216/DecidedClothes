@extends('layouts.app')
@section('title','詳細')

@section('content')
        <h3 class='name'>{{ $clothes->name }}</h3>
        <img src="{{ $clothes->image_path }}">
        <p class='type'>{{ $clothes->type }}</p>
        <p class='color'>{{ $clothes->color }}</p>
        <p class='thickness'>{{ $clothes->thickness }}</p>
        <p class='style'>{{ $clothes->style }}</p>
        <p class='where_buy'>{{ $clothes->where_buy }}</p>
        
        <form action="/users/clothes/{{ $clothes->id }}" id="form_{{ $clothes->id }}" method="post" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit">delete</button> 
        </form>
        <a href="{{ route('list') }}">戻る</a>
@endsection

