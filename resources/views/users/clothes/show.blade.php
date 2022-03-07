@extends('layouts.app')
@section('title','詳細')

@section('content')
        <h3 class='name'>{{ $clothe->name }}</h3>
        <img src="{{ $clothe->image_path }}">
        <p class='type'>{{ $clothe->type }}</p>
        <p class='color'>{{ $clothe->color }}</p>
        <p class='season_type'>{{ $clothe->season_type }}</p>
        <p class='style'>{{ $clothe->style }}</p>
        <p class='brand_name'>{{ $clothe->brand_name }}</p>
        <p class='category'>{{ $clothe->category }}</p>
        
        <form action="/users/clothes/list/{{$clothe->id }}" id="form_{{ $clothe->id }}" method="post" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit">delete</button> 
        </form>
        <a href="{{ route('list') }}">戻る</a>
@endsection

