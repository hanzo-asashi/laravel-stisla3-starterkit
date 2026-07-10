@extends('layouts.app')

@section('title', 'User Management')

@section('content')
<header class="page__header">
  <div class="page__headline">
    <h1 class="page__title">User Management</h1>
    <p class="page__description">Administer user accounts, security credentials, and roles.</p>
  </div>
</header>

<div class="page__body">
  <section class="page__section">
    <!-- Livewire 4 User Manager SFC Component -->
    <livewire:user-manager />
  </section>
</div>
@endsection
