@extends('layouts.app')
@section('title','今日のコーデ')

@section('content')
        @if($personalcolors === "")
                <p>パーソナルカラー診断が完了していません！</p>
        @else
                <p>TOP</p>
                　　　　@if($clothe_top === "")
                                <p>条件に合うトップスが登録されていません</p>
                        @else
                                <img src="{{ $clothe_top->image_path }}">
                        @endif
                <p>BOTTOM</p>
                        @if($clothe_bottom === "")
                                <p>条件に合うボトムスが登録されていません</p>
                        @else
                                <img src="{{ $clothe_bottom->image_path }}">
                        @endif
                <p>SHOES</p>
                        @if($clothe_shoe === "")
                                <p>条件に合うシューズが登録されていません</p>
                        @else
                                <img src="{{ $clothe_shoe->image_path }}">
                        @endif
        @endif
       
        <button>これでいく！</button>
        
        <a href="/coordinate/{{ $mood }}">やり直す</a>
        <a href="{{ route('index') }}">HOMEに戻る</a>
@endsection
