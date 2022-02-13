@extends('components.layout')
@section('title','PutClothesStore')
<x-layput>
    <main>
        <label>服の名称<input type="text" placeholder="○○パーカー"></label>
        <label for="Thickness">厚み</label>
        <select id="Thickness">
            <option>厚め</option>
            <option>薄め</option>
        </select>
        
        <label for="ClotheColor">色</label>
        <select id="ClotheColor">
            <option>黒</option>
            <option>グレー</option>
            <option>白</option>
            <option>赤</option>
            <option>オレンジ</option>
            <option>ベージュ</option>
            <option>黄色</option>
            <option>緑</option>
            <option>カーキ</option>
            <option>水色</option>
            <option>青</option>
            <option>紫</option>
            <option>ピンク</option>
        </select>
        
        <label for="ClotheStyle">系統</label>
        <select id="ClotheStyle">
            <option>カジュアル</option>
            <option>きれい</option>
        </select>
        <button>クローゼットに追加する</button>
        [<a href="{{ route('posts.index') }}">終了する</a>]
    </main>
    
    <section>
        <p>COLLECT!!!</p>
        [<a href="{{ route('posts.step3') }}">続ける</a>]
        [<a href="{{ route('posts.index') }}">HOMEに戻る</a>]
        [<a href="{{ route('posts.outfit') }}">コーデを組む</a>]
    </section>
</x-layput>