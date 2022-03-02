@extends('layouts.app')
@section('title','洋服追加')
@section('content')

        <form method="POST" action="{{route('add') }}" enctype="multipart/form-data">
            @csrf
            
            <label>画像選択
                <input type="file" name="image" accept=".png,.jpg,.jpeg,image/png,image/jpg">
                <p class="image__error" style="color:red">{{ $errors->first('image') }}</p>
            </label>
            <label>ブランド名
                <input type="text" name="clothes[brand_name]" placeholder="○○パーカー" value="{{ old('clothes.brand_name') }}"><span class="badge badge-danger ml-2">{{ __('必須') }}</span>
                <p class="name__error" style="color:red">{{ $errors->first('clothes.brand_name') }}</p>
            </label>
            <label for="Type">性別<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
            <select id="Type" name="clothes[type]">
                <option value="MEN">MEN</option>
                <option value="WOMEN">WOMEN</option>
                <option value="UNISEX">UNISEX</option>
            </select>
            <label for="Type">カテゴリー<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
            <select id="Type" name="clothes[category]">
                <option value="top">top</option>
                <option value="bottom">bottom</option>
                <option value="shoe">shoe</option>
            </select>
            <label for="Season_type">季節感<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
            <select id="Season_type" name="clothes[season_type]">
                <option value="春・秋">春・秋</option>
                <option value="夏">夏</option>
                <option value="冬">冬</option>
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
                <option value="カジュアル">カジュアル系</option>
                <option value="きれい">きれい系</option>
            </select>
            <input type="submit" value="クローゼットに追加する"/>
        </form>
        
        
    
    <section>
        <p>COLLECT!!!</p>
        [<a href="{{ route('step3') }}">続ける</a>]
        [<a href="{{ route('index') }}">HOMEに戻る</a>]
        [<a href="{{ route('result') }}">コーデを組む</a>]
    </section>
@endsection