@extends('components.layouts')
@section('title','UserProfile')

<x-layout>
    </form method="POST" action=" {{ route('posts.store') }}">
        <label>ニックネーム <input type="text" name="POST[nickname]" placeholder="なまえ"></label>
        <label for="likestyle">好きなスタイル</label>
        <select id="likestyle" name="POST[likestyle]">
            <option>きれい系</option>
            <option>ストリート</option>
            <option>古着</option>
        </select>
        <label>自己紹介<textarea name="POST[intro]"placeholder="よろしくお願いします！"></textarea></label>
        <input type="submit" value="STEP3に進む"/>
    <form>
        
        [<a href="{{ route('posts.index') }}">HOMEに戻る</a>]
</x-layout>