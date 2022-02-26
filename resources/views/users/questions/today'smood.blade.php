@extends('layouts.app')
@section('title','今日の気分')

@section('content')
    <form method="post" action="{{ route('coordinate') }}">
        @csrf
        
        <div class="mood">
            <select name="mood">
                <option value="カジュアル">カジュアル</option>
                <option value="きれいめ">きれいめ</option>
            </select>
        </div>
        <!--<div class="situation">-->
        <!--    <select name="situation">-->
        <!--        <option value="場所">どうしようか</option>-->
        <!--    </select>-->
        <!--</div>-->
        <input type="submit" value="コーデを組む"/>
    </form>
@endsection

