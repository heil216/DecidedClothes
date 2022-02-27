@extends('layouts.app')
@section('title','一覧')

@section('content')
    <h1>一覧</h1>
        @foreach ($clothes as $clothe)
            @if ($clothe->image_path)
                <a href="{{ route('show',$clothe->id) }}" ><img src="{{ $clothe->image_path }}"></a>
            @endif
        @endforeach
        
        
        
        <div class='paginate'>
            {{ $clothes->links() }}
        </div>
@endsection