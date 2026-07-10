@props(['type' => 'primary'])

<span {{ $attributes->merge(['class' => "spinner spinner--{$type}"]) }} role="status"></span>