@extends('layouts.app')
@section('title','今日のコーデ')

@section('content')
        <p>TOP</p>
        <p>BOTTOM</p>
        <p>SHOES</p>
        <button>これでいく！</button>
        <a href="{{ route('result') }}">やり直す</a>
        <a href="{{ route('index') }}">HOMEに戻る</a>
@endsection
