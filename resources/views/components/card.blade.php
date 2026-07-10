@props(['title' => null])

<div {{ $attributes->merge(['class' => 'card']) }} style="border: 1px solid var(--border-color);">
    @if($title || isset($header))
        <div class="card__header">
            @if(isset($header))
                {{ $header }}
            @else
                <h3 class="card__title font-bold">{{ $title }}</h3>
            @endif
        </div>
    @endif
    <div class="card__body p-6">
        {{ $slot }}
    </div>
</div>