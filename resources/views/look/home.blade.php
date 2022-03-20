@extends('layouts.app')
@section('title','服を見る')

@section('content')
    <a href="{{ route('mylist') }}">自分の服を見る</a>
    <a href="{{ route('otherslist') }}">他の人の服を見る</a>
    
@endsection