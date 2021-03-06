@extends('layouts.app')
@section('title','ユーザー情報')

@section('content')
    <form method="post" action=" {{ route('profile') }}" enctype="multipart/form-data">
        @csrf
        
        <label>画像選択
            <input type="file" name="icon" value="{{ old('introduction') }}" accept=".png,.jpg,.jpeg,image/png,image/jpg">
            <p class="icon__error" style="color:red">{{ $errors->first('icon') }}</p>
        </label>
        <label for="likestyle">好きなスタイル<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
            <select id="likestyle" name="likestyle">
                <option value="きれい系">きれい系</option>
                <option value="ストリート">ストリート</option>
                <option value="古着">古着</option>
            </select>
        <label for="gender">性別<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
            <select id="gender" name="gender">
                <option value="男性">男性</option>
                <option value="女性">女性</option>
            </select>
        <label>自己紹介
            <input type="text" name="introduction" placeholder="よろしくお願いします！" value="{{ old('introduction') }}" cols="50" rows="3"><span class="badge badge-danger ml-2">{{ __('必須') }}</span>
            <p class="introduction__error" style="color:red">{{ $errors->first('introduction') }}</p>
        </label>
        <input type="submit" value="登録する"/>
    </form>
        
        [<a href="{{ route('index') }}">HOMEに戻る</a>]
@endsection