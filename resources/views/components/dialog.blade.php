@props([
    'id',
    'title' => null,
    'size' => null,
    'dismissAction' => null,
    'static' => false,
    'blockEsc' => false,
    'fullscreen' => false,
    'almostFullscreen' => false,
    'scrollable' => false,
    'position' => null
])

<div
  class="dialog {{ $size ? "dialog--{$size}" : '' }} {{ $fullscreen ? 'dialog--fullscreen' : '' }} {{ $almostFullscreen ? 'dialog--almost-fullscreen' : '' }}"
  id="{{ $id }}"
  data-stisla-dialog
  @if($static) data-stisla-dialog-backdrop="static" @endif
  @if($blockEsc) data-stisla-dialog-keyboard="false" @endif
  role="dialog"
  aria-modal="true"
  aria-labelledby="{{ $id }}Label"
  {{ $attributes->whereDoesntStartWith('class') }}
>
  <div class="dialog__backdrop" data-stisla-dialog-dismiss @if(!$static && $dismissAction) wire:click="{{ $dismissAction }}" @endif></div>
  <div class="dialog__panel {{ $scrollable ? 'dialog__panel--scrollable' : '' }} {{ $position ? "dialog__panel--{$position}" : '' }}">
    <div class="dialog__content">
      <button
        type="button"
        class="dialog__close"
        data-stisla-dialog-dismiss
        aria-label="Close"
        @if($dismissAction) wire:click="{{ $dismissAction }}" @endif
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="1.25em"
          height="1.25em"
          viewBox="0 0 24 24"
          aria-hidden="true"
        >
          <path
            fill="none"
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="1.5"
            d="M6 18L18 6M6 6l12 12"
          />
        </svg>
      </button>

      @if($title)
        <div class="dialog__header">
          <h3 class="dialog__title" id="{{ $id }}Label">{{ $title }}</h3>
        </div>
      @endif

      <div class="dialog__body flex flex-col gap-4">
        {{ $slot }}
      </div>

      @if(isset($footer))
        <div class="dialog__footer">
          {{ $footer }}
        </div>
      @endif
    </div>
  </div>
</div>
