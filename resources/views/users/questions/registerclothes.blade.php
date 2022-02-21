@extends('layouts.app')
@section('title','洋服追加')
@section('content')

        <form method="POST" action="{{route('add') }}"　enctype="multipart/form-data">
            @csrf
            
            <label>画像選択
                <input type="file" name="clothes[img]" accept=".png,.jpg,.jpeg,image/png,image/jpg"><span class="badge badge-danger ml-2">{{ __('必須') }}</span>
            </label>
            <label>服の名称
                <input type="text" name="clothes[name]" placeholder="○○パーカー"><span class="badge badge-danger ml-2">{{ __('必須') }}</span>
            </label>
            <label for="Type">種類<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
            <select id="Type" name="clothes[type]">
                <option value="top">top</option>
                <option value="bottom">bottom</option>
                <option value="shoe">shoe</option>
            </select>
            <label for="Thickness">厚み<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
            <select id="Thickness" name="clothes[thickness]">
                <option value="冬用">冬用</option>
                <option value="夏用">夏用</option>
            </select>
            <div clas="clothes_color-group">
                <label for="clothescolor-id">色<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
                <select class="form-control" id="clothescolor-id" name="clothes[color]">                          
                    @foreach($clothescolors as $clothescolor)
                        <option value="{{ $clothescolor->name }}">{{ $clothescolor->name }}</option>
                    @endforeach
                </select>
            </div>
            <label for="ClotheStyle">系統<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
            <select id="ClotheStyle" name="clothes[style]">
                <option value="カジュアル">カジュアル</option>
                <option value="きれい">きれい</option>
            </select>
            <label>購入場所
                <textarea name="clothes[where_buy]"placeholder="原宿/amazon" cols="30" rows="1"></textarea>
            </label>
            <input type="submit" value="クローゼットに追加する"/>
        </form>
        
        
    
    <section>
        <p>COLLECT!!!</p>
        [<a href="{{ route('step3') }}">続ける</a>]
        [<a href="{{ route('index') }}">HOMEに戻る</a>]
        [<a href="{{ route('result') }}">コーデを組む</a>]
    </section>
@endsection