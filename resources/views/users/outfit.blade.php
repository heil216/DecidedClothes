@extends('components.layouts')
@extends('layouts.app')
@section('title','OutFit')

@section('content')
        <p>TOP</p>
        <p>BOTTOM</p>
        <p>SHOES</p>
        <button>これでいく！</button>
        <a href="{{ route('outfit') }}">やり直す</a>
        <a href="{{ route('index') }}">HOMEに戻る</a>
@section
