@props(['src' => null, 'fallback' => null, 'size' => 'md', 'circle' => false])

<span {{ $attributes->merge(['class' => "avatar" . ($size ? " avatar--{$size}" : "") . ($circle ? " avatar--circle" : "")]) }} data-stisla-avatar>
    @if($src)
        <img class="avatar__image" src="{{ $src }}" alt="" />
    @endif
    @if($fallback)
        <span class="avatar__fallback">{{ $fallback }}</span>
    @endif
</span>