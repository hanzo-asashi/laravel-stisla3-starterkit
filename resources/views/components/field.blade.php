@props(['label' => null, 'error' => null, 'description' => null, 'id' => null])

<div {{ $attributes->merge(['class' => 'field']) }}>
    @if($label)
        <label @if($id) for="{{ $id }}" @endif class="field__label">{{ $label }}</label>
    @endif
    {{ $slot }}
    @if($error)
        <span class="text-xs" style="color: var(--color-danger); margin-top: 0.25rem; display: block;">{{ $error }}</span>
    @endif
    @if($description)
        <p class="field__description">{{ $description }}</p>
    @endif
</div>