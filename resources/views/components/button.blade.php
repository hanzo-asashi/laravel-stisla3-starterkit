@props(['type' => 'button', 'variant' => 'primary', 'size' => null, 'icon' => false])

<button type="{{ $type }}" {{ $attributes->merge(['class' => 'button' . ($variant ? " button--{$variant}" : "") . ($size ? " button--{$size}" : "") . ($icon ? " button--icon-only" : "")]) }}>
    {{ $slot }}
</button>