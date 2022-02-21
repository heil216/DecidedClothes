@extends('layouts.app')
@section('title','AddClothes')
@section('content')

        <form method="POST" action="{{route('add') }}"　enctype="multipart/form-data">
            @csrf
            
            <label>画像選択
                <input type="file" name="clothes[img]" accept=".png,.jpg,.jpeg,image/png,image/jpg"><span class="badge badge-danger ml-2">{{ __('必須') }}</span>
            </label>
            <label>服の名称
                <input type="text" name="clothes[name]" placeholder="○○パーカー"><span class="badge badge-danger ml-2">{{ __('必須') }}</span>
            </label>
            <label for="Thickness">厚み</label>
            <select id="Thickness" name="clothes[thickness]">
                <option value="厚め">厚め</option>
                <option value="薄め">薄め</option>
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
        [<a href="{{ route('outfit') }}">コーデを組む</a>]
    </section>
@endsection