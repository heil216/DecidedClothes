@extends('components.layout')
@section('title','UserProfile')

<x-layout>
        <label>ニックネーム <input type="text" placeholder="なまえ"></label>
        <label for="likestyle">好きなスタイル</label>
        <select id="likestyle">
            <option>きれい系</option>
            <option>ストリート</option>
            <option>古着</option>
        </select>
        <label>自己紹介<textarea placeholder="よろしくお願いします！"></textarea></label>
        [<a href="{{ route('posts.index') }}">HOMEに戻る</a>]
        [<a href="{{ route('posts.step3') }}">STEP3に進む</a>]
</x-layout>