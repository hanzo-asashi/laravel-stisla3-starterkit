@props(['type' => 'neutral', 'soft' => false])

<span {{ $attributes->merge(['class' => 'badge' . ($soft ? ' badge--soft' : '') . " badge--{$type}"]) }}>
    {{ $slot }}
</span>