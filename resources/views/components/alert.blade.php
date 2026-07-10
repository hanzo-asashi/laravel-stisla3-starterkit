@props(['type' => 'primary', 'dismissible' => false])

<div {{ $attributes->merge(['class' => "alert alert--{$type}" . ($dismissible ? ' alert--dismissible' : '')]) }} role="alert">
    {{ $slot }}
    @if($dismissible)
        <button type="button" class="alert__close" data-stisla-alert-close aria-label="Close">&times;</button>
    @endif
</div>