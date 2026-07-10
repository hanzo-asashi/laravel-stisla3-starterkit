@extends('layouts.app')

@section('title', 'Orders')

@section('content')
<header class="page__header">
  <div class="page__headline">
    <h1 class="page__title">Orders</h1>
    <p class="page__description">Track, fulfil, and refund customer orders with Livewire 4 reactivity.</p>
  </div>
  <div class="page__action">
    <button type="button" class="button button--neutral">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="1em"
        height="1em"
        viewBox="0 0 24 24"
        aria-hidden="true"
      >
        <path
          fill="none"
          stroke="currentColor"
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="1.5"
          d="M3 15c0 2.828 0 4.243.879 5.121C4.757 21 6.172 21 9 21h6c2.828 0 4.243 0 5.121-.879C21 19.243 21 17.828 21 15M12 3v13m0 0l4-4.375M12 16l-4-4.375"
        />
      </svg>
      Export
    </button>
    <a href="{{ route('orders.create') }}" class="button button--primary"
      ><svg
        xmlns="http://www.w3.org/2000/svg"
        width="1em"
        height="1em"
        viewBox="0 0 24 24"
        aria-hidden="true"
      >
        <g fill="none" stroke="currentColor" stroke-width="1.5">
          <circle cx="12" cy="12" r="10" />
          <path stroke-linecap="round" d="M15 12h-3m0 0H9m3 0V9m0 3v3" />
        </g>
      </svg>
      New order</a
    >
  </div>
</header>

<div class="page__body">
  <section class="page__section">
    <!-- Livewire 4 Reactive Orders Table Component -->
    <livewire:orders-table />
  </section>
</div>
@endsection
