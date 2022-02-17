@extends('components.layouts')
@extends('layouts.app')
@section('title','PutClothesStore')
@section('content')
    <main>
        <form method="post" action="{{ route('register') }}">
            <label>服の名称<input type="text" placeholder="○○パーカー"></label>
            <label for="Thickness">厚み</label>
            <select id="Thickness">
                <option value="厚め">厚め</option>
                <option value="薄め">薄め</option>
            </select>
            
            <label for="ClotheColor">色</label>
            <select id="ClotheColor">
                <option value="黒">黒</option>
                <option value="グレー">グレー</option>
                <option value="白">白</option>
                <option value="赤">赤</option>
                <option value="オレンジ">オレンジ</option>
                <option value="ベージュ">ベージュ</option>
                <option value="黄色">黄色</option>
                <option value="緑">緑</option>
                <option value="カーキ">カーキ</option>
                <option value="水色">水色</option>
                <option value="青">青</option>
                <option value="紫">紫</option>
                <option value="ピンク">ピンク</option>
            </select>
            
            <label for="ClotheStyle">系統</label>
            <select id="ClotheStyle">
                <option value="カジュアル">カジュアル</option>
                <option value="きれいめ">きれいめ</option>
            </select>
            <input type="submit" value="クローゼットに追加する"/>
        </form>
        [<a href="{{ route('posts.index') }}">終了する</a>]
    </main>
    
    <section>
        <p>COLLECT!!!</p>
        [<a href="{{ route('step3') }}">続ける</a>]
        [<a href="{{ route('index') }}">HOMEに戻る</a>]
        [<a href="{{ route('outfit') }}">コーデを組む</a>]
    </section>
@endsection