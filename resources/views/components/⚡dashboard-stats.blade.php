<?php
use Livewire\Component;
use App\Models\User;

new class extends Component {
    public string $timeframe = 'This Month';
    
    // Stats data (dynamically adjusted based on timeframe)
    public int $totalOrders = 59;
    public int $pendingOrders = 24;
    public int $shippingOrders = 12;
    public int $completedOrders = 23;
    public float $revenue = 8450.00;
    public float $revenueIncrease = 18.2;
    public int $totalCustomers = 0;

    public function mount(): void
    {
        $this->totalCustomers = User::count();
        $this->updateStats();
    }

    public function setTimeframe(string $timeframe): void
    {
        $this->timeframe = $timeframe;
        $this->updateStats();
    }

    private function updateStats(): void
    {
        $this->totalCustomers = User::count();

        // Simulate dynamic stats updates depending on selected timeframe
        switch ($this->timeframe) {
            case 'Today':
                $this->totalOrders = 5;
                $this->pendingOrders = 2;
                $this->shippingOrders = 1;
                $this->completedOrders = 2;
                $this->revenue = 680.00;
                $this->revenueIncrease = 4.2;
                break;
            case 'This Week':
                $this->totalOrders = 22;
                $this->pendingOrders = 8;
                $this->shippingOrders = 4;
                $this->completedOrders = 10;
                $this->revenue = 3120.00;
                $this->revenueIncrease = 12.5;
                break;
            case 'This Month':
                $this->totalOrders = 59;
                $this->pendingOrders = 24;
                $this->shippingOrders = 12;
                $this->completedOrders = 23;
                $this->revenue = 8450.00;
                $this->revenueIncrease = 18.2;
                break;
            case 'This Year':
                $this->totalOrders = 642;
                $this->pendingOrders = 180;
                $this->shippingOrders = 82;
                $this->completedOrders = 380;
                $this->revenue = 92400.00;
                $this->revenueIncrease = 24.8;
                break;
        }
    }
};
?>

<div>
  <!-- Timeframe Selector -->
  <div class="flex items-center justify-between gap-4 mb-6">
    <header class="page__header p-0 m-0 border-0">
      <h1 class="page__title">Welcome back, <span>{{ auth()->user()->name }}</span> 👋</h1>
    </header>
    
    <div class="toggle-group" role="radiogroup" aria-label="Filter timeframe">
      @foreach(['Today', 'This Week', 'This Month', 'This Year'] as $t)
        <button
          type="button"
          class="toggle {{ $timeframe === $t ? 'active' : '' }}"
          wire:click="setTimeframe('{{ $t }}')"
          role="radio"
          aria-checked="{{ $timeframe === $t ? 'true' : 'false' }}"
          data-state="{{ $timeframe === $t ? 'active' : '' }}"
        >
          {{ $t }}
        </button>
      @endforeach
    </div>
  </div>

  <section class="page__section mb-6">
    <div class="grid grid-cols-12 gap-4">
      <!-- Order Stats Card -->
      <div class="col-span-12 xl:col-span-4">
        <div class="card card--stat h-full" style="border: 1px solid var(--border-color);">
          <div class="card__body p-6">
            <div class="card__title text-muted-foreground text-sm font-semibold">Order Statistics</div>

            <div class="stat mt-3">
              <div class="stat__value text-3xl font-bold">{{ $totalOrders }}</div>
              <div class="stat__meta flex items-center gap-2 mt-1">
                <span class="stat__label text-xs uppercase tracking-wider text-muted-foreground">Total Orders · {{ $timeframe }}</span>
              </div>
            </div>

            <!-- Stisla 3 Progress Bar Component -->
            <div class="meter meter--block meter--lg meter--stat mt-4">
              <div class="meter__track bg-neutral-200 dark:bg-neutral-800 h-2.5 rounded-full overflow-hidden flex">
                @if($totalOrders > 0)
                  <span class="meter__bar meter__bar--warning bg-yellow-500 h-full" style="width: {{ ($pendingOrders / $totalOrders) * 100 }}%"></span>
                  <span class="meter__bar meter__bar--primary bg-primary h-full" style="width: {{ ($shippingOrders / $totalOrders) * 100 }}%"></span>
                  <span class="meter__bar meter__bar--success bg-green-500 h-full" style="width: {{ ($completedOrders / $totalOrders) * 100 }}%"></span>
                @endif
              </div>
            </div>

            <div class="stat-detail mt-6 grid grid-cols-3 gap-2">
              <div class="stat-detail__col text-center">
                <span class="stat-detail__label text-xs text-muted-foreground block mb-1">
                  <span class="inline-block h-2 w-2 rounded-full bg-yellow-500 me-1"></span>
                  Pending
                </span>
                <span class="stat-detail__value font-bold block">{{ $pendingOrders }}</span>
                <span class="stat-detail__pct text-xs text-muted-foreground block">{{ $totalOrders > 0 ? round(($pendingOrders / $totalOrders) * 100) : 0 }}%</span>
              </div>

              <div class="stat-detail__col text-center">
                <span class="stat-detail__label text-xs text-muted-foreground block mb-1">
                  <span class="inline-block h-2 w-2 rounded-full bg-primary me-1"></span>
                  Shipping
                </span>
                <span class="stat-detail__value font-bold block">{{ $shippingOrders }}</span>
                <span class="stat-detail__pct text-xs text-muted-foreground block">{{ $totalOrders > 0 ? round(($shippingOrders / $totalOrders) * 100) : 0 }}%</span>
              </div>

              <div class="stat-detail__col text-center">
                <span class="stat-detail__label text-xs text-muted-foreground block mb-1">
                  <span class="inline-block h-2 w-2 rounded-full bg-green-500 me-1"></span>
                  Completed
                </span>
                <span class="stat-detail__value font-bold block">{{ $completedOrders }}</span>
                <span class="stat-detail__pct text-xs text-muted-foreground block">{{ $totalOrders > 0 ? round(($completedOrders / $totalOrders) * 100) : 0 }}%</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Revenue Card -->
      <div class="col-span-12 sm:col-span-6 xl:col-span-4">
        <div class="card card--stat h-full" style="border: 1px solid var(--border-color);">
          <div class="card__body p-6">
            <div class="flex justify-between items-center">
              <span class="icon-box icon-box--primary icon-box--lg" style="background-color: var(--color-primary-soft); color: var(--color-primary); padding: 0.5rem; border-radius: var(--radius-md);">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="1.5em"
                  height="1.5em"
                  viewBox="0 0 24 24"
                  aria-hidden="true"
                >
                  <g fill="none" stroke="currentColor" stroke-width="1.5">
                    <circle cx="12" cy="12" r="10" />
                    <path stroke-linecap="round" d="M12 17v1m0-12v1m3 2.5C15 8.12 13.657 7 12 7S9 8.12 9 9.5s1.343 2.5 3 2.5s3 1.12 3 2.5s-1.343 2.5-3 2.5s-3-1.12-3-2.5" />
                  </g>
                </svg>
              </span>
              <span class="badge badge--soft badge--success flex items-center gap-1">
                ↑ {{ $revenueIncrease }}%
              </span>
            </div>

            <div class="stat mt-6">
              <span class="stat__label text-xs uppercase tracking-wider text-muted-foreground">Revenue</span>
              <div class="stat__value text-3xl font-bold mt-1">${{ number_format($revenue, 2) }}</div>
              <p class="text-xs text-muted-foreground mt-2">Earned through online store sales during {{ $timeframe }}.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Active Customers Card -->
      <div class="col-span-12 sm:col-span-6 xl:col-span-4">
        <div class="card card--stat h-full" style="border: 1px solid var(--border-color);">
          <div class="card__body p-6">
            <div class="flex justify-between items-center">
              <span class="icon-box icon-box--primary icon-box--lg" style="background-color: var(--color-success-soft); color: var(--color-success); padding: 0.5rem; border-radius: var(--radius-md);">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="1.5em"
                  height="1.5em"
                  viewBox="0 0 24 24"
                  aria-hidden="true"
                >
                  <g fill="none" stroke="currentColor" stroke-width="1.5">
                    <circle cx="12" cy="6" r="4" />
                    <path d="M20 17.5c0 2.485 0 4.5-8 4.5s-8-2.015-8-4.5S7.582 13 12 13s8 2.015 8 4.5Z" />
                  </g>
                </svg>
              </span>
            </div>

            <div class="stat mt-6">
              <span class="stat__label text-xs uppercase tracking-wider text-muted-foreground">Active Customers</span>
              <div class="stat__value text-3xl font-bold mt-1">{{ $totalCustomers }}</div>
              <p class="text-xs text-muted-foreground mt-2">Registered system accounts observed in database.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
