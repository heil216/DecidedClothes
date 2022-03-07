@extends('layouts.app')
@section('title','今日のコーデ')

@section('content')
        <p>TOP</p>
        <img src="{{ $clothe_top->image_path }}">
        <p>BOTTOM</p>
        <img src="{{ $clothe_bottom->image_path }}">
        
        <p>SHOES</p>
        <img src="{{ $clothe_shoe->image_path }}">
       
        <button>これでいく！</button>
        
        <a href="/coordinate/{{ $mood }}">やり直す</a>
        <a href="{{ route('index') }}">HOMEに戻る</a>
@endsection
