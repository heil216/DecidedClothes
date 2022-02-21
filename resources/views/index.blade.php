@extends('layouts.app')
@section('title','ホーム')

@section('content')
    <section>
        <p>今日のコーデを組む</p>
        <p>今日のコーデを見る</p>
    </section>
    
    <section>
        <p>初めての方はこちらから</p>
        <p>クローゼットに服を追加する</p>
        <p>コーデを組む</p>
    </section>
    
    <section>
        [<a href="{{ route('step1') }}" >STEP1</a>]
        <p>まずは簡単５分の質問に答える！</p>
        [<a href="{{ route('step2') }}" >STEP2</a>]
        <p>MYプロフィール設定</p>
        [<a href="{{ route('step3') }}" >STEP3</a>]
        <p>服を追加</p>
    </section>
    
    <section>
        <p>きれい</p>
        <p>カジュアル</p>
    </section>
@endsection

