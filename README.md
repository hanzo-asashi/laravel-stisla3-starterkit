# Laravel 13 Stisla 3 Meridian Starter Kit

A fresh Laravel 13 starter kit beautifully integrated with the **Stisla 3 Meridian Admin Panel**, reactive **Livewire 4** components, and **Laravel Fortify** authentication.

## 🚀 Tech Stack
* **Core:** PHP ^8.3 & Laravel ^13.8
* **Authentication:** Laravel Fortify ^1.36 (Headless & Secure)
* **Reactivity:** Livewire ^4.3 (Stable, Single-File Components)
* **CSS & Design:** Tailwind CSS v4.0 & `@stisla/style` (Beta)
* **Assets Compiler & Runtime:** Vite ^8.0 & Bun ^1.3

---

## ✨ Features
1. **Premium Landing Storefront:** A modern, high-converting storefront page matching the Meridian design language, supporting light/dark theme toggles.
2. **Interactive Admin Dashboard:** Multi-page admin interface covering dashboard statistics, reports, settings, and profile pages.
3. **Livewire 4 Reactive Orders:** Features an advanced orders table component supporting:
   * Real-time live search.
   * Tab-based filtering by status (All, Pending, Shipped, Completed, Refunded).
   * Column sorting.
   * Multi-row bulk actions (Bulk Delete & Bulk Shipped).
4. **Fortify + Livewire Auth:** Reactively secure login, user registration, and password reset flows.

---

## 🛠️ Installation & Setup

Follow these steps to run the project locally:

### 1. Prerequisite Packages
Ensure you have **Composer**, **Bun**, and **PHP (>= 8.3)** installed on your machine.

### 2. Dependency Installations
Run the following commands inside the project root directory:

```bash
# Install PHP dependencies
composer install

# Install JS dependencies & compile Tailwind assets
bun install
bun run build
```

### 3. Setup Configuration
Duplicate the environment file and generate the application key:

```bash
cp .env.example .env
php artisan key:generate
```

*Note: The environment variable `APP_URL` is set to `https://laravel-stisla3-starterkit.test` by default (recommended for Laravel Herd).*

### 4. Database & Seeding
Create your local database, configure the connection in `.env`, and migrate & seed the default administrator account:

```bash
php artisan migrate --seed
```

### 5. Running the Application
If you are using **Laravel Herd**, the application will immediately be served at:
`https://laravel-stisla3-starterkit.test`

Alternatively, you can run the standard Artisan server:
```bash
php artisan serve
```

---

## 👤 Demo Administrator Credentials
You can log in to the admin panel using the following seeded credentials:

* **URL:** [https://laravel-stisla3-starterkit.test/login](https://laravel-stisla3-starterkit.test/login)
* **Email:** `admin@meridian.com`
* **Password:** `password`
* **Default Name:** Steven Gerrard

---

## 📦 Reusable UI Components (Stisla 3)

This starter kit ships with pre-configured, anonymous Blade UI components matching the Stisla 3 Meridian styling. They are located inside `resources/views/components/` and can be utilized anywhere:

### 1. Alert (`<x-alert>`)
* **Usage:** `<x-alert type="success" dismissible>Data saved!</x-alert>`
* **Parameters:** `type` (primary, success, danger, warning), `dismissible` (true/false).

### 2. Badge (`<x-badge>`)
* **Usage:** `<x-badge type="success" soft>Completed</x-badge>`
* **Parameters:** `type` (neutral, primary, success, warning, danger), `soft` (true/false).

### 3. Button (`<x-button>`)
* **Usage:** `<x-button variant="primary" size="lg">Submit</x-button>`
* **Parameters:** `variant` (primary, outline, danger, ghost), `size` (sm, lg), `icon` (true/false).

### 4. Card (`<x-card>`)
* **Usage:** `<x-card title="Revenue">Content here...</x-card>`
* **Parameters:** `title` (string).

### 5. Avatar (`<x-avatar>`)
* **Usage:** `<x-avatar src="url.jpg" circle />` or `<x-avatar fallback="SG" size="sm" />`
* **Parameters:** `src` (string), `fallback` (string), `size` (sm, md, lg), `circle` (true/false).

### 6. Spinner (`<x-spinner>`)
* **Usage:** `<x-spinner type="primary" />`
* **Parameters:** `type` (primary, success, danger, warning).

### 7. Meter (`<x-meter>`)
* **Usage:** `<x-meter value="75" variant="success" />`
* **Parameters:** `value` (0-100), `variant` (primary, success, warning, danger).

### 8. Input (`<x-input>`)
* **Usage:** `<x-input type="email" placeholder="name@email.com" invalid />`
* **Parameters:** `type` (text, email, password, etc.), `invalid` (true/false).

### 9. Field Wrapper (`<x-field>`)
* **Usage:** 
  ```html
  <x-field label="Email" id="email" error="Invalid email address">
      <x-input type="email" id="email" />
  </x-field>
  ```
* **Parameters:** `label` (string), `error` (string), `description` (string), `id` (string).

### 10. Table (`<x-table>`)
* **Usage:** 
  ```html
  <x-table>
      <thead><tr><th>Header</th></tr></thead>
      <tbody><tr><td>Data</td></tr></tbody>
  </x-table>
  ```
* **Parameters:** `hover` (true/false).

### 11. Empty State (`<x-empty-state>`)
* **Usage:** 
  ```html
  <x-empty-state title="No orders" description="Check back later.">
      <x-slot:action>
          <x-button variant="primary">Create Order</x-button>
      </x-slot:action>
  </x-empty-state>
  ```
* **Parameters:** `title` (string), `description` (string), `icon` (html slot).

### 12. Skeleton (`<x-skeleton>`)
* **Usage:** `<x-skeleton type="circle" />`
* **Parameters:** `type` (text, circle, rect), `width` (sm, md, lg, full).

### 13. Dialog Modal (`<x-dialog>`)
* **Usage:** 
  ```html
  <x-dialog id="myModal" title="Confirm Action">
      <p>Are you sure you want to proceed?</p>
      <x-slot:footer>
          <x-button variant="ghost" data-stisla-dialog-dismiss>Cancel</x-button>
          <x-button variant="primary">Confirm</x-button>
      </x-slot:footer>
  </x-dialog>
  ```
* **Parameters:** 
  * `id` (required string to match trigger `data-stisla-dialog-trigger="id"`)
  * `title` (string)
  * `size` (sm, lg, xl)
  * `static` (boolean to prevent backdrop close)
  * `blockEsc` (boolean to block ESC key close)
  * `fullscreen` (boolean to make dialog take up the full viewport)
  * `almostFullscreen` (boolean to take up almost the full viewport)
  * `scrollable` (boolean to make dialog body scrollable when content is long)
  * `position` (top, bottom to anchor dialog panel)

---

## 📄 License

The Laravel 13 Stisla 3 Meridian Starter Kit is open-sourced software licensed under the [MIT license](LICENSE).

