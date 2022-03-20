@component('mail::message')
{{-- Greeting --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level === 'error')
# エラー
@else
# お知らせ
@endif
@endif

{{-- Subcopy --}}
@isset($actionText)
@slot('subcopy')
@lang(
"もし\":actionText\"ボタンが押すことができない場合は, 以下のURLをコピーして\n".
'ブラウザで貼り付けてください: [:actionURL](:actionURL)',
[
'actionText' => $actionText,
'actionURL' => $actionUrl,
]
)
@endslot
@endisset
@endcomponent