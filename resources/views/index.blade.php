@extends('components.layouts')
@section('title','HOME')

<x-layout>
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
        <p>STEP2</p>
        <p>MYプロフィール設定</p>
        <p>STEP3</p>
        <p>服を追加</p>
    </section>
    
    <section>
        <p>きれい</p>
        <p>カジュアル</p>
    </section>
    
</x-layout>

