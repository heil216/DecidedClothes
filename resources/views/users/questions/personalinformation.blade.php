@extends('layouts.app')
@section('title','UserProfile')

@section('content')
    <form method="post" action=" {{ route('profile') }}">
        @csrf
        
        <label for="likestyle">好きなスタイル<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
            <select id="likestyle" name="likestyle">
                <option value="きれい系">きれい系</option>
                <option value="ストリート">ストリート</option>
                <option value="古着">古着</option>
            </select>
        <label>自己紹介
            <textarea name="introduction"placeholder="よろしくお願いします！" cols="50" rows="3"></textarea><span class="badge badge-danger ml-2">{{ __('必須') }}</span>
        </label>
        <input type="submit" value="登録する"/>
    </form>
        
        [<a href="{{ route('index') }}">HOMEに戻る</a>]
@endsection