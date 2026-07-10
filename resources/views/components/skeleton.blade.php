@props(['type' => 'text', 'width' => 'full'])

@php
  $hasWidth = str_contains($attributes->get('class', ''), 'w-');
  $hasHeight = str_contains($attributes->get('class', ''), 'h-');

  $widthClass = $hasWidth ? '' : match($width) {
    'sm' => 'w-1/4',
    'md' => 'w-1/2',
    'lg' => 'w-3/4',
    default => 'w-full'
  };

  $shapeClass = match($type) {
    'circle' => ($hasWidth ? '' : 'w-12') . ' ' . ($hasHeight ? '' : 'h-12') . ' rounded-full',
    'rect' => ($hasHeight ? '' : 'h-24') . ' rounded-lg',
    default => ($hasHeight ? '' : 'h-4') . ' rounded'
  };
@endphp

<div {{ $attributes->merge(['class' => "animate-pulse {$widthClass} {$shapeClass}"]) }} style="background-color: currentColor; opacity: 0.18;"></div>