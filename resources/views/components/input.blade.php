@props(['type' => 'text', 'invalid' => false])

<input type="{{ $type }}" {{ $attributes->merge(['class' => 'input' . ($invalid ? ' input--invalid' : '')]) }} />