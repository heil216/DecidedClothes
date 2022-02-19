@extends('components.layouts')
@extends('layouts.app')
@section('title','PutClothesStore')
@section('content')

        <form method="POST" action="/">
            @csrf
            
            <label>服の名称<input type="text" name="name" placeholder="○○パーカー"></label>
            <label for="Thickness">厚み</label>
            <select id="Thickness" name="thickness">
                <option value="clothes[厚め]">厚め</option>
                <option value="clothes[薄め]">薄め</option>
            </select>
            
            <!--<select id="ClotheColor" name="color">-->
            <!--    <option value="黒">黒</option>-->
            <!--    <option value="グレー">グレー</option>-->
            <!--    <option value="白">白</option>-->
            <!--    <option value="赤">赤</option>-->
            <!--    <option value="オレンジ">オレンジ</option>-->
            <!--    <option value="ベージュ">ベージュ</option>-->
            <!--    <option value="黄色">黄色</option>-->
            <!--    <option value="緑">緑</option>-->
            <!--    <option value="カーキ">カーキ</option>-->
            <!--    <option value="水色">水色</option>-->
            <!--    <option value="青">青</option>-->
            <!--    <option value="紫">紫</option>-->
            <!--    <option value="ピンク">ピンク</option>-->
            <!--</select>-->
            <div clas="clothes_color-group">
                <label for="clothescolor-id">色<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
                <select class="form-control" id="clothescolor-id" name="color">                          
                    @foreach($clothescolors as $clothescolor)
                        <option value="cloths[{{ $clothescolor->colors_id }}]">{{ $clothescolor->name }}</option>
                    @endforeach
                </select>
            </div>
            
            <label for="ClotheStyle">系統</label>
            <select id="ClotheStyle" name="style">
                <option value="clothes[カジュアル]">カジュアル</option>
                <option value="clothes[きれいめ]">きれいめ</option>
            </select>
            <input type="submit" value="クローゼットに追加する"/>
        </form>
        
    
    <section>
        <p>COLLECT!!!</p>
        [<a href="{{ route('step3') }}">続ける</a>]
        [<a href="{{ route('index') }}">HOMEに戻る</a>]
        [<a href="{{ route('outfit') }}">コーデを組む</a>]
    </section>
@endsection