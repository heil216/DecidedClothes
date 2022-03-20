@extends('layouts.app')
@section('title','ホーム')

@section('content')
    <section>
        <a href="#index">今日のコーデを組む</a>
    </section>
    
    <section>
        <a id="index">初めての方はこちらから</a>
        <p>クローゼットに服を追加する</p>
        <a href="{{ route('todaymood') }}">コーデを組む</a>
    </section>
    
    <section>
        <p>まずは簡単５分の質問に答える！</p>
        [<a href="{{ route('step1') }}" >STEP1</a>]
        <p>MYプロフィール設定</p>
        [<a href="{{ route('step2') }}" >STEP2</a>]
        <p>服を追加</p>
        [<a href="{{ route('step3') }}" >STEP3</a>]
    </section>
    
    <section>
        <p>きれい</p>
        <p>カジュアル</p>
    </section>
@endsection

