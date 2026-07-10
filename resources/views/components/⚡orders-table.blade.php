<?php
use Livewire\Component;

new class extends Component {
    public string $search = '';
    public string $status = 'All';
    public string $sortBy = 'date';
    public string $sortDir = 'desc';
    public array $selectedOrders = [];

    // Static sample data for simulation
    public array $orders = [
        [
            'id' => 10428,
            'customer_name' => 'Acme Corp',
            'customer_email' => 'billing@acme.com',
            'customer_avatar' => 'https://i.pravatar.cc/64?img=12',
            'date' => 'Jun 19, 2026',
            'date_raw' => '2026-06-19',
            'items' => 12,
            'total' => 2400.00,
            'status' => 'Pending',
        ],
        [
            'id' => 10427,
            'customer_name' => 'Wayne Enterprises',
            'customer_email' => 'purchasing@wayne.com',
            'customer_avatar' => 'https://i.pravatar.cc/64?img=13',
            'date' => 'Jun 18, 2026',
            'date_raw' => '2026-06-18',
            'items' => 3,
            'total' => 850.00,
            'status' => 'Shipped',
        ],
        [
            'id' => 10426,
            'customer_name' => 'Stark Industries',
            'customer_email' => 'orders@stark.com',
            'customer_avatar' => 'https://i.pravatar.cc/64?img=14',
            'date' => 'Jun 17, 2026',
            'date_raw' => '2026-06-17',
            'items' => 8,
            'total' => 4200.00,
            'status' => 'Completed',
        ],
        [
            'id' => 10425,
            'customer_name' => 'Globex Corporation',
            'customer_email' => 'buy@globex.com',
            'customer_avatar' => 'https://i.pravatar.cc/64?img=15',
            'date' => 'Jun 16, 2026',
            'date_raw' => '2026-06-16',
            'items' => 1,
            'total' => 240.00,
            'status' => 'Refunded',
        ],
        [
            'id' => 10424,
            'customer_name' => 'Initech',
            'customer_email' => 'po@initech.com',
            'customer_avatar' => 'https://i.pravatar.cc/64?img=5',
            'date' => 'Jun 15, 2026',
            'date_raw' => '2026-06-15',
            'items' => 4,
            'total' => 1120.00,
            'status' => 'Completed',
        ],
        [
            'id' => 10423,
            'customer_name' => 'Hooli',
            'customer_email' => 'finance@hooli.com',
            'customer_avatar' => 'https://i.pravatar.cc/64?img=3',
            'date' => 'Jun 14, 2026',
            'date_raw' => '2026-06-14',
            'items' => 2,
            'total' => 310.00,
            'status' => 'Pending',
        ],
    ];

    public function setStatus(string $status): void
    {
        $this->status = $status;
        $this->selectedOrders = [];
    }

    public function sort(string $field): void
    {
        if ($this->sortBy === $field) {
            $this->sortDir = $this->sortDir === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortBy = $field;
            $this->sortDir = 'asc';
        }
    }

    public function getFilteredOrdersProperty(): array
    {
        $filtered = $this->orders;

        // Apply Status Filter
        if ($this->status !== 'All') {
            $filtered = array_filter($filtered, fn($o) => $o['status'] === $this->status);
        }

        // Apply Search
        if (trim($this->search) !== '') {
            $query = strtolower(trim($this->search));
            $filtered = array_filter($filtered, function($o) use ($query) {
                return str_contains(strtolower($o['customer_name']), $query) ||
                       str_contains(strtolower($o['customer_email']), $query) ||
                       str_contains((string)$o['id'], $query);
            });
        }

        // Apply Sorting
        usort($filtered, function($a, $b) {
            $valA = $this->sortBy === 'date' ? $a['date_raw'] : $a[$this->sortBy];
            $valB = $this->sortBy === 'date' ? $b['date_raw'] : $b[$this->sortBy];

            if (is_numeric($valA) && is_numeric($valB)) {
                return $this->sortDir === 'asc' ? $valA <=> $valB : $valB <=> $valA;
            }

            return $this->sortDir === 'asc' 
                ? strcasecmp((string)$valA, (string)$valB) 
                : strcasecmp((string)$valB, (string)$valA);
        });

        return $filtered;
    }

    public function deleteSelected(): void
    {
        $this->orders = array_filter($this->orders, fn($o) => !in_array($o['id'], $this->selectedOrders));
        $this->selectedOrders = [];
    }

    public function markShippedSelected(): void
    {
        foreach ($this->orders as &$order) {
            if (in_array($order['id'], $this->selectedOrders)) {
                $order['status'] = 'Shipped';
            }
        }
        $this->selectedOrders = [];
    }
};
?>

<div class="card">
  <div class="card__header flex-wrap">
    <div
      class="toggle-group mt-4 md:mt-0"
      role="radiogroup"
      aria-label="Filter by status"
    >
      @foreach(['All', 'Pending', 'Shipped', 'Completed', 'Refunded'] as $tab)
        <button
          type="button"
          class="toggle {{ $status === $tab ? 'active' : '' }}"
          wire:click="setStatus('{{ $tab }}')"
          role="radio"
          aria-checked="{{ $status === $tab ? 'true' : 'false' }}"
          data-state="{{ $status === $tab ? 'active' : '' }}"
        >
          {{ $tab }}
        </button>
      @endforeach
    </div>
    
    <div class="input-group ms-auto w-full md:w-60 mb-4 md:mb-0">
      <span class="input-group__text">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="1em"
          height="1em"
          viewBox="0 0 24 24"
          aria-hidden="true"
        >
          <g fill="none" stroke="currentColor" stroke-width="1.5">
            <circle cx="11.5" cy="11.5" r="9.5" />
            <path stroke-linecap="round" d="M18.5 18.5L22 22" />
          </g>
        </svg>
      </span>
      <input
        type="search"
        wire:model.live="search"
        class="input"
        placeholder="Search orders…"
        aria-label="Search orders"
      />
    </div>
  </div>

  @if(count($selectedOrders) > 0)
    <div class="card__header card__header--alt flex-wrap" style="background-color: var(--color-background); border-bottom: 1px solid var(--border-color);">
      <span><strong>{{ count($selectedOrders) }}</strong> selected</span>
      <div class="flex flex-wrap items-center gap-2 ms-auto">
        <button
          type="button"
          wire:click="markShippedSelected"
          class="button button--sm button--outline button--neutral"
        >
          Mark shipped
        </button>
        <button
          type="button"
          wire:click="deleteSelected"
          class="button button--sm button--danger"
        >
          Delete
        </button>
      </div>
    </div>
  @endif

  <div class="table-responsive">
    <table class="table table--hover table--align-middle">
      <thead class="table__head--alt">
        <tr>
          <th scope="col" style="width: 48px;">
            <!-- Select All Checkbox -->
            <input
              class="checkbox"
              type="checkbox"
              wire:model.live="selectedOrders"
              value="all"
              @if(count($this->filteredOrders) === count($selectedOrders)) checked @endif
              aria-label="Select all orders on this page"
            />
          </th>
          <th scope="col" class="cursor-pointer" wire:click="sort('id')">
            <div class="flex items-center gap-1">
              Order
              @if($sortBy === 'id')
                <span>{{ $sortDir === 'asc' ? '↑' : '↓' }}</span>
              @endif
            </div>
          </th>
          <th scope="col" class="cursor-pointer" wire:click="sort('customer_name')">
            <div class="flex items-center gap-1">
              Customer
              @if($sortBy === 'customer_name')
                <span>{{ $sortDir === 'asc' ? '↑' : '↓' }}</span>
              @endif
            </div>
          </th>
          <th scope="col" class="cursor-pointer" wire:click="sort('date')">
            <div class="flex items-center gap-1">
              Date
              @if($sortBy === 'date')
                <span>{{ $sortDir === 'asc' ? '↑' : '↓' }}</span>
              @endif
            </div>
          </th>
          <th scope="col" class="text-end cursor-pointer" wire:click="sort('items')">
            <div class="flex items-center justify-end gap-1">
              Items
              @if($sortBy === 'items')
                <span>{{ $sortDir === 'asc' ? '↑' : '↓' }}</span>
              @endif
            </div>
          </th>
          <th scope="col" class="text-end cursor-pointer" wire:click="sort('total')">
            <div class="flex items-center justify-end gap-1">
              Total
              @if($sortBy === 'total')
                <span>{{ $sortDir === 'asc' ? '↑' : '↓' }}</span>
              @endif
            </div>
          </th>
          <th scope="col" class="cursor-pointer" wire:click="sort('status')">
            <div class="flex items-center gap-1">
              Status
              @if($sortBy === 'status')
                <span>{{ $sortDir === 'asc' ? '↑' : '↓' }}</span>
              @endif
            </div>
          </th>
          <th scope="col" class="text-end"><span class="sr-only">Actions</span></th>
        </tr>
      </thead>
      <tbody>
        @forelse($this->filteredOrders as $order)
          <tr wire:key="order-row-{{ $order['id'] }}">
            <td>
              <input
                class="checkbox"
                type="checkbox"
                wire:model.live="selectedOrders"
                value="{{ $order['id'] }}"
                aria-label="Select order #{{ $order['id'] }}"
              />
            </td>
            <th scope="row">
              <a href="{{ route('orders.show', $order['id']) }}" class="link">
                <code>#{{ $order['id'] }}</code>
              </a>
            </th>
            <td>
              <div class="flex items-center gap-3">
                <span class="avatar avatar--sm avatar--circle">
                  <img class="avatar__image" src="{{ $order['customer_avatar'] }}" alt="" />
                  <span class="avatar__fallback">{{ substr($order['customer_name'], 0, 2) }}</span>
                </span>
                <div>
                  <div class="font-medium">{{ $order['customer_name'] }}</div>
                  <div class="text-xs text-muted-foreground">{{ $order['customer_email'] }}</div>
                </div>
              </div>
            </td>
            <td>{{ $order['date'] }}</td>
            <td class="text-end">{{ $order['items'] }}</td>
            <td class="text-end"><span class="font-semibold">${{ number_format($order['total'], 2) }}</span></td>
            <td>
              @php
                $badgeClass = match($order['status']) {
                  'Pending' => 'badge--warning',
                  'Shipped' => 'badge--info',
                  'Completed' => 'badge--success',
                  'Refunded' => 'badge--danger',
                  default => 'badge--neutral'
                };
              @endphp
              <span class="badge badge--soft {{ $badgeClass }}">{{ $order['status'] }}</span>
            </td>
            <td class="text-end">
              <a href="{{ route('orders.show', $order['id']) }}" class="button button--xs button--outline button--neutral">View</a>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="8" class="text-center py-8 text-muted-foreground">
              No orders found.
            </td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
