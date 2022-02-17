@extends('components.layouts')
@extends('layouts.app')
@section('title','UserProfile')

@section('content')
    </form method="post" action=" {{ route('profile') }}">
        @csrf
        
        <label for="likestyle">好きなスタイル</label>
            <select id="likestyle" name="personalinformation[likestyle]">
                <option value="きれい系">きれい系</option>
                <option value="ストリート">ストリート</option>
                <option value="古着">古着</option>
            </select>
        <label>自己紹介
            <textarea name="personalinformation[introduction]"placeholder="よろしくお願いします！" cols="50" rows="3"></textarea>
        </label>
        <input type="submit" value="登録する"/>
    <form>
        
        [<a href="{{ route('index') }}">HOMEに戻る</a>]
@endsection