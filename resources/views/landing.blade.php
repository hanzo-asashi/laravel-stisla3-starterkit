<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link
      rel="icon"
      type="image/svg+xml"
      href='data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><style>.t{fill:%230a0a0a}.m{stroke:%23fafafa}@media (prefers-color-scheme: dark){.t{fill:%23fafafa}.m{stroke:%230a0a0a}}</style><rect class="t" width="512" height="512" rx="112"/><path class="m" d="M 392 144 H 200 A 56 56 0 0 0 200 256 H 312 A 56 56 0 0 1 312 368 H 120" fill="none" stroke-width="76" stroke-linecap="round" stroke-linejoin="round"/></svg>'
    />
    <script>
      (function () {
        var t = localStorage.getItem("stisla-theme");
        if (t === "dark" || t === "light") document.documentElement.dataset.theme = t;
      })();
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
    />
    <title>Meridian · E-Commerce Calmly</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
      .hero-gradient {
        background: radial-gradient(circle at top, oklch(0.96 0.05 260) 0%, oklch(0.9272 0.0116 257.69) 100%);
      }
      [data-theme="dark"] .hero-gradient {
        background: radial-gradient(circle at top, oklch(0.12 0.03 260) 0%, oklch(0.08 0 0) 100%);
      }
      .blur-circle {
        filter: blur(100px);
        opacity: 0.15;
      }
      [data-theme="dark"] .blur-circle {
        opacity: 0.08;
      }
    </style>
  </head>
  <body class="hero-gradient min-h-screen text-foreground antialiased selection:bg-primary/20">
    <div class="relative overflow-hidden">
      <!-- Ambient Lights -->
      <div class="blur-circle absolute -top-40 left-1/4 w-96 h-96 rounded-full bg-primary"></div>
      <div class="blur-circle absolute top-60 right-1/4 w-96 h-96 rounded-full bg-indigo-500"></div>

      <!-- Navigation Header -->
      <header class="relative z-10 mx-auto max-w-7xl px-6 py-6 md:px-8">
        <nav class="flex items-center justify-between">
          <a class="flex items-center gap-2 font-bold text-lg" href="{{ route('landing') }}">
            <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-neutral-900 text-white dark:bg-neutral-100 dark:text-black">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="1.25em"
                height="1.25em"
                viewBox="0 0 24 24"
                fill="currentColor"
              >
                <path d="M12 1.5l3.4 7.1 7.1 3.4-7.1 3.4-3.4 7.1-3.4-7.1L1.5 12l7.1-3.4z" opacity=".45" />
                <path d="M12 1.5l3.4 7.1L12 12 8.6 8.6z" />
              </svg>
            </span>
            <span class="tracking-tight text-xl">Meridian</span>
          </a>

          <div class="flex items-center gap-4">
            <button
              type="button"
              class="button button--ghost button--neutral button--icon-only"
              data-theme-toggle
              aria-label="Toggle theme"
            >
              <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor">
                <path d="m21.067 11.857l-.642-.388zm-8.924-8.924l-.388-.642zM21.25 12A9.25 9.25 0 0 1 12 21.25v1.5c5.937 0 10.75-4.813 10.75-10.75zM12 21.25A9.25 9.25 0 0 1 2.75 12h-1.5c0 5.937 4.813 10.75 10.75 10.75zM2.75 12A9.25 9.25 0 0 1 12 2.75v-1.5C6.063 1.25 1.25 6.063 1.25 12zm12.75 2.25A5.75 5.75 0 0 1 9.75 8.5h-1.5a7.25 7.25 0 0 0 7.25 7.25zm4.925-2.781A5.75 5.75 0 0 1 15.5 14.25v1.5a7.25 7.25 0 0 0 6.21-3.505zM9.75 8.5a5.75 5.75 0 0 1 2.781-4.925l-.776-1.284A7.25 7.25 0 0 0 8.25 8.5zM12 2.75a.38.38 0 0 1-.268-.118a.3.3 0 0 1-.082-.155c-.004-.031-.002-.121.105-.186l.776 1.284c.503-.304.665-.861.606-1.299c-.062-.455-.42-1.026-1.137-1.026zm9.71 9.495c-.066.107-.156.109-.187.105a.3.3 0 0 1-.155-.082a.38.38 0 0 1-.118-.268h1.5c0-.717-.571-1.075-1.026-1.137c-.438-.059-.995.103-1.299.606z" />
              </svg>
            </button>

            @auth
              <a href="{{ route('dashboard') }}" class="button button--primary">Dashboard</a>
            @else
              <a href="{{ route('login') }}" class="button button--ghost button--neutral">Sign in</a>
              <a href="{{ route('register') }}" class="button button--primary">Get Started</a>
            @endauth
          </div>
        </nav>
      </header>

      <!-- Hero Section -->
      <section class="relative z-10 mx-auto max-w-5xl px-6 pt-20 pb-16 text-center md:px-8 md:pt-32">
        <span class="inline-flex items-center gap-1.5 rounded-full bg-primary/10 px-3 py-1 text-xs font-semibold text-primary">
          <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 2.25a.75.75 0 0 1 .75.75v3.25h3.25a.75.75 0 0 1 0 1.5H12.75v3.25a.75.75 0 0 1-1.5 0V7.75H8a.75.75 0 0 1 0-1.5h3.25V3a.75.75 0 0 1 .75-.75" />
          </svg>
          Introducing Stisla 3 Meridian
        </span>
        <h1 class="mt-6 text-4xl font-extrabold tracking-tight sm:text-6xl lg:text-7xl leading-none">
          Run your commerce, <br class="hidden sm:inline" /><span class="bg-gradient-to-r from-primary to-indigo-600 bg-clip-text text-transparent">beautifully & calmly.</span>
        </h1>
        <p class="mx-auto mt-6 max-w-2xl text-lg text-muted-foreground sm:text-xl">
          Observe orders, manage products, and trace customer intelligence from a dashboard designed to protect your focus. Built on fresh Laravel 13, Fortify, and Livewire 4.
        </p>
        <div class="mt-10 flex flex-wrap justify-center gap-4">
          @auth
            <a href="{{ route('dashboard') }}" class="button button--primary button--lg px-8">Go to Dashboard</a>
          @else
            <a href="{{ route('register') }}" class="button button--primary button--lg px-8">Get Started for Free</a>
            <a href="{{ route('login') }}" class="button button--outline button--neutral button--lg px-8">Live Demo</a>
          @endauth
        </div>
      </section>

      <!-- Dashboard Preview -->
      <section class="relative z-10 mx-auto max-w-6xl px-6 pb-24 md:px-8">
        <div class="overflow-hidden rounded-2xl border border-neutral-200 bg-white/50 p-3 shadow-2xl backdrop-blur-md dark:border-neutral-800 dark:bg-neutral-900/50">
          <div class="rounded-xl overflow-hidden border border-neutral-100 bg-white dark:border-neutral-800 dark:bg-neutral-950">
            <div class="flex items-center gap-2 border-b border-neutral-100 px-4 py-3 dark:border-neutral-800">
              <div class="flex gap-1.5">
                <span class="h-3.5 w-3.5 rounded-full bg-red-500"></span>
                <span class="h-3.5 w-3.5 rounded-full bg-yellow-500"></span>
                <span class="h-3.5 w-3.5 rounded-full bg-green-500"></span>
              </div>
              <span class="mx-auto text-xs text-muted-foreground font-mono">https://laravel-stisla3-starterkit.test/dashboard</span>
            </div>
            <div class="relative bg-neutral-900 aspect-[16/9] overflow-hidden group">
              <img
                src="{{ asset('assets/images/meridian_dashboard_mockup.png') }}"
                alt="Meridian Admin Dashboard Mockup"
                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
              />
              <div class="absolute inset-0 bg-neutral-950/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 backdrop-blur-[2px]">
                <a href="{{ route('login') }}" class="button button--primary button--lg shadow-xl shadow-primary/20">
                  Launch Dashboard Demo
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
                      d="M4 12h16m0 0l-6-6m6 6l-6 6"
                    />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Features Section -->
      <section class="relative z-10 mx-auto max-w-7xl px-6 py-20 md:px-8 border-t border-neutral-200/50 dark:border-neutral-800/50">
        <div class="text-center max-w-3xl mx-auto">
          <h2 class="text-3xl font-bold tracking-tight sm:text-4xl">Engineered for Modern Laravel Teams</h2>
          <p class="mt-4 text-muted-foreground">The structure and performance you need to ship fast, reliable, and clean web applications.</p>
        </div>

        <div class="mt-16 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
          <!-- Feature 1 -->
          <div class="card bg-white/60 dark:bg-neutral-900/60 backdrop-blur-md hover:translate-y-[-4px] transition-transform duration-300">
            <div class="card__body p-6">
              <span class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10 text-primary mb-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
              </span>
              <h3 class="text-lg font-bold">Livewire 4 Reactivity</h3>
              <p class="text-muted-foreground mt-2 text-sm leading-relaxed">
                Enjoy reactive single-file components (SFC) for fast and interactive interfaces without leaving PHP code.
              </p>
            </div>
          </div>
          <!-- Feature 2 -->
          <div class="card bg-white/60 dark:bg-neutral-900/60 backdrop-blur-md hover:translate-y-[-4px] transition-transform duration-300">
            <div class="card__body p-6">
              <span class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-indigo-500/10 text-indigo-500 mb-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
              </span>
              <h3 class="text-lg font-bold">Fortify Authentication</h3>
              <p class="text-muted-foreground mt-2 text-sm leading-relaxed">
                Rock-solid headless authentication backend managing login, registration, and resets with zero friction.
              </p>
            </div>
          </div>
          <!-- Feature 3 -->
          <div class="card bg-white/60 dark:bg-neutral-900/60 backdrop-blur-md hover:translate-y-[-4px] transition-transform duration-300">
            <div class="card__body p-6">
              <span class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-emerald-500/10 text-emerald-500 mb-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-10h-9l1-8z"/></svg>
              </span>
              <h3 class="text-lg font-bold">Vite & Bun Bundler</h3>
              <p class="text-muted-foreground mt-2 text-sm leading-relaxed">
                Supercharge your development cycle. Assets compile in milliseconds with Vite and Bun integration.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- Reusable Components Showcase Section -->
      <section class="relative z-10 mx-auto max-w-7xl px-6 py-20 md:px-8 border-t border-neutral-200/50 dark:border-neutral-800/50">
        <div class="text-center max-w-3xl mx-auto">
          <span class="inline-flex items-center gap-1.5 rounded-full bg-indigo-500/10 px-3 py-1 text-xs font-semibold text-indigo-500">
            Developer Friendly
          </span>
          <h2 class="text-3xl font-bold tracking-tight sm:text-4xl mt-3">Pre-built Reusable Blade Components</h2>
          <p class="mt-4 text-muted-foreground">Every element is wrapped as an anonymous Blade component. Copy, paste, and render instantly.</p>
        </div>

        <div class="mt-16 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
          <!-- Button & Badges -->
          <div class="card bg-white/40 dark:bg-neutral-900/40 backdrop-blur-md" style="border: 1px solid var(--border-color);">
            <div class="card__body p-6 flex flex-col justify-between h-full">
              <div>
                <h3 class="font-bold text-base mb-2">Buttons & Badges</h3>
                <p class="text-xs text-muted-foreground leading-relaxed mb-4">Clean color variables and sizing variants.</p>
              </div>
              <div class="flex flex-wrap gap-2 items-center">
                <x-button variant="primary" size="sm">Primary</x-button>
                <x-button variant="outline" size="sm">Outline</x-button>
                <x-badge type="success" soft>Success</x-badge>
                <x-badge type="danger">Danger</x-badge>
              </div>
            </div>
          </div>

          <!-- Alert Component -->
          <div class="card bg-white/40 dark:bg-neutral-900/40 backdrop-blur-md" style="border: 1px solid var(--border-color);">
            <div class="card__body p-6 flex flex-col justify-between h-full">
              <div>
                <h3 class="font-bold text-base mb-2">Alerts</h3>
                <p class="text-xs text-muted-foreground leading-relaxed mb-4">Informative banners with optional close trigger.</p>
              </div>
              <x-alert type="warning" class="m-0 py-2 px-3 text-xs">
                Caution: Check parameters.
              </x-alert>
            </div>
          </div>

          <!-- Progress & Loaders -->
          <div class="card bg-white/40 dark:bg-neutral-900/40 backdrop-blur-md" style="border: 1px solid var(--border-color);">
            <div class="card__body p-6 flex flex-col justify-between h-full">
              <div>
                <h3 class="font-bold text-base mb-2">Progress & Loading</h3>
                <p class="text-xs text-muted-foreground leading-relaxed mb-4">Indicators for reactive background operations.</p>
              </div>
              <div class="flex flex-col gap-3">
                <x-meter value="65" variant="indigo-500" />
                <div class="flex items-center gap-2">
                  <x-spinner type="primary" class="w-4 h-4" />
                  <span class="text-xs text-muted-foreground">Loading...</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Skeleton Loader -->
          <div class="card bg-white/40 dark:bg-neutral-900/40 backdrop-blur-md" style="border: 1px solid var(--border-color);">
            <div class="card__body p-6 flex flex-col justify-between h-full">
              <div>
                <h3 class="font-bold text-base mb-2">Skeletons</h3>
                <p class="text-xs text-muted-foreground leading-relaxed mb-4">Placeholders indicating loading states.</p>
              </div>
              <div class="flex items-center gap-3">
                <x-skeleton type="circle" class="w-8 h-8" />
                <div class="flex-1 flex flex-col gap-2">
                  <x-skeleton type="text" width="md" />
                  <x-skeleton type="text" width="sm" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Footer -->
      <footer class="relative z-10 border-t border-neutral-200/50 dark:border-neutral-800/50 py-12 text-center text-sm text-muted-foreground">
        <div class="mx-auto max-w-7xl px-6 md:px-8">
          <p>© {{ date('Y') }} Meridian Storefront. All rights reserved.</p>
        </div>
      </footer>
    </div>

    <script
      type="module"
      src="https://cdn.jsdelivr.net/npm/@stisla/vanilla@3/dist/stisla.js"
    ></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
  </body>
</html>
