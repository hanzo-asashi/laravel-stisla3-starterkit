<?php
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

new class extends Component {
    public string $search = '';
    public bool $showForm = false;
    public ?int $userId = null;

    // Form fields
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $role = 'User';

    protected function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users', 'email')->ignore($this->userId),
            ],
            'password' => $this->userId ? ['nullable', 'string', 'min:8'] : ['required', 'string', 'min:8'],
            'role' => ['required', 'string', 'in:Administrator,Manager,User'],
        ];
    }

    public function openCreateForm(): void
    {
        $this->resetForm();
        $this->showForm = true;
    }

    public function edit(int $id): void
    {
        $this->resetForm();
        $user = User::findOrFail($id);
        $this->userId = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        // Default roles logic fallback
        $this->role = $id === 1 ? 'Administrator' : 'User';
        $this->showForm = true;
    }

    public function save(): void
    {
        $this->validate();

        if ($this->userId) {
            // Update
            $user = User::findOrFail($this->userId);
            $user->name = $this->name;
            $user->email = $this->email;
            if ($this->password) {
                $user->password = Hash::make($this->password);
            }
            $user->save();
            session()->flash('message', 'User updated successfully.');
        } else {
            // Create
            User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
            ]);
            session()->flash('message', 'User created successfully.');
        }

        $this->resetForm();
    }

    public function delete(int $id): void
    {
        if ($id === auth()->id()) {
            session()->flash('error', 'You cannot delete your own logged-in account.');
            return;
        }

        User::findOrFail($id)->delete();
        session()->flash('message', 'User deleted successfully.');
    }

    public function cancel(): void
    {
        $this->resetForm();
    }

    private function resetForm(): void
    {
        $this->userId = null;
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->role = 'User';
        $this->showForm = false;
        $this->resetErrorBag();
    }

    public function getUsersProperty()
    {
        $query = User::query();

        if (trim($this->search) !== '') {
            $searchTerm = '%' . trim($this->search) . '%';
            $query->where(function($q) use ($searchTerm) {
                $q->where('name', 'like', $searchTerm)
                  ->orWhere('email', 'like', $searchTerm);
            });
        }

        return $query->orderBy('name', 'asc')->get();
    }
};
?>

<div>
  <!-- Feedback Messages -->
  @if(session()->has('message'))
    <div style="background-color: var(--color-success-soft); color: var(--color-success); padding: 1rem; border-radius: var(--radius-md); margin-bottom: 1.5rem; font-size: 0.875rem;">
      {{ session('message') }}
    </div>
  @endif

  @if(session()->has('error'))
    <div style="background-color: var(--color-danger-soft); color: var(--color-danger); padding: 1rem; border-radius: var(--radius-md); margin-bottom: 1.5rem; font-size: 0.875rem;">
      {{ session('error') }}
    </div>
  @endif

  <!-- Dialog Modal (Add/Edit User) -->
  <x-dialog
    id="userManagerModal"
    title="{{ $userId ? 'Edit User' : 'Create New User' }}"
    data-state="{{ $showForm ? 'open' : 'closed' }}"
    dismissAction="cancel"
    size="lg"
    static=true
    blockEsc=true
  >
    <form wire:submit="save" class="flex flex-col gap-4">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <x-field label="Full Name" id="userName" :error="$errors->first('name')">
          <x-input
            type="text"
            wire:model="name"
            id="userName"
            placeholder="Steven Gerrard"
            required
            :invalid="$errors->has('name')"
          />
        </x-field>

        <x-field label="Email Address" id="userEmail" :error="$errors->first('email')">
          <x-input
            type="email"
            wire:model="email"
            id="userEmail"
            placeholder="admin@meridian.com"
            required
            :invalid="$errors->has('email')"
          />
        </x-field>

        <x-field label="Password {{ $userId ? '(Leave blank to keep current)' : '' }}" id="userPassword" :error="$errors->first('password')">
          <x-input
            type="password"
            wire:model="password"
            id="userPassword"
            placeholder="••••••••••"
            :invalid="$errors->has('password')"
            :required="!$userId"
          />
        </x-field>

        <x-field label="User Role" id="userRole" :error="$errors->first('role')">
          <select wire:model="role" class="input" id="userRole" style="appearance: auto; padding-inline-end: 2rem;">
            <option value="Administrator">Administrator</option>
            <option value="Manager">Manager</option>
            <option value="User">User</option>
          </select>
        </x-field>
      </div>

      <x-slot:footer>
        <x-button type="button" wire:click="cancel" variant="ghost" class="button--neutral" data-stisla-dialog-dismiss>
          Cancel
        </x-button>
        <x-button type="submit" variant="primary">
          {{ $userId ? 'Update User' : 'Create User' }}
        </x-button>
      </x-slot:footer>
    </form>
  </x-dialog>

  <!-- User Table Listing -->
  <div class="card">
    <div class="card__header flex-wrap justify-between items-center gap-4">
      <div class="input-group w-full md:w-80">
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
          placeholder="Search users..."
          aria-label="Search users"
        />
      </div>

      <button type="button" wire:click="openCreateForm" class="button button--primary">
        <svg
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
        Add User
      </button>
    </div>

    <div class="table-responsive">
      <table class="table table--hover table--align-middle">
        <thead class="table__head--alt">
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Created At</th>
            <th scope="col" class="text-end">Actions</th>
          </tr>
        </thead>
        <tbody>
          @forelse($this->users as $user)
            <tr wire:key="user-row-{{ $user->id }}">
              <td>
                <div class="flex items-center gap-3">
                  <span class="avatar avatar--sm avatar--circle">
                    <span class="avatar__fallback">{{ strtoupper(substr($user->name, 0, 2)) }}</span>
                  </span>
                  <div class="font-medium text-foreground">
                    {{ $user->name }}
                    @if($user->id === auth()->id())
                      <span class="badge badge--soft badge--neutral ms-1">You</span>
                    @endif
                  </div>
                </div>
              </td>
              <td><code>{{ $user->email }}</code></td>
              <td>
                @php
                  // Mock role check
                  $uRole = $user->id === 1 ? 'Administrator' : 'User';
                  $badgeClass = match($uRole) {
                    'Administrator' => 'badge--danger',
                    'Manager' => 'badge--warning',
                    default => 'badge--neutral'
                  };
                @endphp
                <span class="badge badge--soft {{ $badgeClass }}">{{ $uRole }}</span>
              </td>
              <td>{{ $user->created_at->format('M d, Y H:i') }}</td>
              <td class="text-end">
                <div class="flex items-center justify-end gap-2">
                  <button
                    type="button"
                    wire:click="edit({{ $user->id }})"
                    class="button button--ghost button--neutral button--icon-only button--sm"
                    aria-label="Edit User"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="1em"
                      height="1em"
                      viewBox="0 0 24 24"
                      aria-hidden="true"
                    >
                      <g fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M11 2H9C4.757 2 2 4.757 2 9v6c0 4.243 2.757 7 7 7h6c4.243 0 7-2.757 7-7v-2" opacity=".4"/>
                        <path d="M18.85 2.15a2.616 2.616 0 1 1 3.7 3.7L12.5 15.9l-4.5 1.5 1.5-4.5 10-9.9Z" stroke-linejoin="round"/>
                        <path stroke-linecap="round" d="m16 5l3 3"/>
                      </g>
                    </svg>
                  </button>
                  @if($user->id !== auth()->id())
                    <button
                      type="button"
                      wire:click="delete({{ $user->id }})"
                      onclick="confirm('Are you sure you want to delete this user?') || event.stopImmediatePropagation()"
                      class="button button--ghost button--danger button--icon-only button--sm"
                      aria-label="Delete User"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="1em"
                        height="1em"
                        viewBox="0 0 24 24"
                        aria-hidden="true"
                      >
                        <g fill="none" stroke="currentColor" stroke-width="1.5">
                          <path
                            stroke-linecap="round"
                            d="M20.5 6h-17m15.333 2.5l-.46 6.9c-.177 2.654-.265 3.981-1.13 4.79s-2.196.81-4.856.81h-.774c-2.66 0-3.991 0-4.856-.81c-.865-.809-.954-2.136-1.13-4.79l-.46-6.9M9.5 11l.5 5m4.5-5l-.5 5"
                          />
                          <path
                            d="M6.5 6h.11a2 2 0 0 0 1.83-1.32l.034-.103l.097-.291c.083-.249.125-.373.18-.479a1.5 1.5 0 0 1 1.094-.788C9.962 3 10.093 3 10.355 3h3.29c.262 0 .393 0 .51.019a1.5 1.5 0 0 1 1.094.788c.055.106.097.23.18.479l.097.291A2 2 0 0 0 17.5 6"
                          />
                        </g>
                      </svg>
                    </button>
                  @endif
                </div>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="5" class="text-center py-8 text-muted-foreground">
                No users found matching your search.
              </td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</div>
