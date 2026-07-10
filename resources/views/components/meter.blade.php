@props(['value' => 0, 'variant' => 'primary', 'size' => 'md'])

<div {{ $attributes->merge(['class' => "meter meter--block" . ($size ? " meter--{$size}" : "")]) }}>
    <div class="meter__track bg-neutral-200 dark:bg-neutral-800 rounded-full overflow-hidden flex h-2">
        <span class="meter__bar bg-{{ $variant }} h-full" style="width: {{ $value }}%"></span>
    </div>
</div>