@extends('components.layouts')
@section('title','OutFit')

<x-layout>
        <p>TOP</p>
        <p>BOTTOM</p>
        <p>SHOES</p>
        <button>これでいく！</button>
        <a href="{{ route('posts.outfit') }}">やり直す</a>
        <a href="{{ route('posts.index') }}">HOMEに戻る</a>
</x-layout>
