@extends('layouts.app')
@section('title','今日のコーデ')

@section('content')
        <p>TOP</p>
        <img src="{{ $clothe->image_path }}">
        <p class='brand_name'>{{ $clothe->brand_name }}</p>
        <p>BOTTOM</p>
        
        <p>SHOES</p>
       
        <button>これでいく！</button>
        
        <a href="{{ route('result') }}">やり直す</a>
        <a href="{{ route('index') }}">HOMEに戻る</a>
@endsection
