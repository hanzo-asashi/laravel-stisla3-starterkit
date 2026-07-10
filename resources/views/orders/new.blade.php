@extends('layouts.app')

@section('title', 'New Order')

@section('content')
<header class="page__header">
              <div class="page__headline">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb__item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb__item"><a href="{{ route('orders.index') }}">Orders</a></li>
                    <li class="breadcrumb__item" aria-current="page">New order</li>
                  </ol>
                </nav>
                <h1 class="page__title">New order</h1>
                <p class="page__description">
                  Add products, assign a customer, and set shipping before saving.
                </p>
              </div>
            </header>

            <div class="page__body">
              <form class="order-form" data-order-form>
                <div class="grid grid-cols-12 gap-4">
                  <div class="col-span-12 lg:col-span-8">
                    <div class="flex flex-col gap-3">
                      <div class="card">
                        <div class="card__header"><span class="card__title">Line items</span></div>
                        <div class="line-items">
                          <div class="line-items__head" aria-hidden="true">
                            <span>Product</span>
                            <span class="text-end">Qty</span>
                            <span class="text-end">Unit price</span>
                            <span class="text-end">Total</span>
                            <span></span>
                          </div>
                          <div data-line-items>
                            <div class="line-items__row" data-line-row>
                              <div class="line-items__field">
                                <span class="line-items__label">Product</span>
                                <input
                                  type="text"
                                  class="input"
                                  value="Aged Cheddar 1kg"
                                  placeholder="Product name"
                                  aria-label="Product name"
                                />
                              </div>
                              <div class="line-items__field">
                                <span class="line-items__label">Qty</span>
                                <input
                                  type="number"
                                  class="input text-end"
                                  value="3"
                                  min="1"
                                  data-qty
                                  aria-label="Quantity"
                                />
                              </div>
                              <div class="line-items__field">
                                <span class="line-items__label">Unit price</span>
                                <div class="input-group">
                                  <span class="input-group__text">$</span>
                                  <input
                                    type="number"
                                    class="input text-end"
                                    value="24.00"
                                    min="0"
                                    step="0.01"
                                    data-price
                                    aria-label="Unit price"
                                  />
                                </div>
                              </div>
                              <div class="line-items__field">
                                <span class="line-items__label">Total</span>
                                <span class="line-items__total" data-line-total>$0.00</span>
                              </div>
                              <div class="line-items__remove">
                                <button
                                  type="button"
                                  class="button button--soft button--danger"
                                  data-remove-item
                                  aria-label="Remove item"
                                >
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="1em"
                                    height="1em"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    aria-hidden="true"
                                  >
                                    <path d="M6 6l12 12M18 6L6 18" />
                                  </svg>
                                  <span class="line-items__remove-text">Remove</span>
                                </button>
                              </div>
                            </div>

                            <div class="line-items__row" data-line-row>
                              <div class="line-items__field">
                                <span class="line-items__label">Product</span>
                                <input
                                  type="text"
                                  class="input"
                                  value="Olive Oil 500ml"
                                  placeholder="Product name"
                                  aria-label="Product name"
                                />
                              </div>
                              <div class="line-items__field">
                                <span class="line-items__label">Qty</span>
                                <input
                                  type="number"
                                  class="input text-end"
                                  value="2"
                                  min="1"
                                  data-qty
                                  aria-label="Quantity"
                                />
                              </div>
                              <div class="line-items__field">
                                <span class="line-items__label">Unit price</span>
                                <div class="input-group">
                                  <span class="input-group__text">$</span>
                                  <input
                                    type="number"
                                    class="input text-end"
                                    value="18.50"
                                    min="0"
                                    step="0.01"
                                    data-price
                                    aria-label="Unit price"
                                  />
                                </div>
                              </div>
                              <div class="line-items__field">
                                <span class="line-items__label">Total</span>
                                <span class="line-items__total" data-line-total>$0.00</span>
                              </div>
                              <div class="line-items__remove">
                                <button
                                  type="button"
                                  class="button button--soft button--danger"
                                  data-remove-item
                                  aria-label="Remove item"
                                >
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="1em"
                                    height="1em"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    aria-hidden="true"
                                  >
                                    <path d="M6 6l12 12M18 6L6 18" />
                                  </svg>
                                  <span class="line-items__remove-text">Remove</span>
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="card__body items-end">
                          <button
                            type="button"
                            class="button button--soft button--primary button--sm"
                            data-add-item
                          >
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
                            Add item
                          </button>
                        </div>

                        <div class="card__footer">
                          <dl class="order-form__totals">
                            <div class="order-form__total-row">
                              <dt>Subtotal</dt>
                              <dd data-subtotal>$0.00</dd>
                            </div>
                            <div class="order-form__total-row">
                              <dt>Tax (10%)</dt>
                              <dd data-tax>$0.00</dd>
                            </div>
                            <div class="order-form__total-row">
                              <dt>Shipping</dt>
                              <dd>
                                <div class="input-group w-30">
                                  <span class="input-group__text">$</span>
                                  <input
                                    type="number"
                                    class="input text-end"
                                    value="15.00"
                                    min="0"
                                    step="0.01"
                                    data-shipping
                                    aria-label="Shipping cost"
                                  />
                                </div>
                              </dd>
                            </div>
                            <div class="order-form__total-row order-form__total-row--grand">
                              <dt>Total</dt>
                              <dd data-total>$0.00</dd>
                            </div>
                          </dl>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card__header"><span class="card__title">Notes</span></div>
                        <div class="card__body">
                          <div class="field">
                            <label for="orderNotes" class="field__label">Order notes</label>
                            <textarea
                              class="textarea"
                              id="orderNotes"
                              rows="3"
                              placeholder="Internal notes, delivery instructions, or anything the team should know."
                            ></textarea>
                            <p class="field__description">
                              Notes are private and never shown to the customer.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-span-12 lg:col-span-4">
                    <div class="flex flex-col gap-3">
                      <div class="card">
                        <div class="card__header"><span class="card__title">Status</span></div>
                        <div class="card__body">
                          <div class="field">
                            <label for="orderStatus" class="field__label">Order status</label>
                            <select class="select" id="orderStatus" data-stisla-select>
                              <option value="pending" selected>Pending</option>
                              <option value="processing">Processing</option>
                              <option value="shipped">Shipped</option>
                              <option value="completed">Completed</option>
                              <option value="cancelled">Cancelled</option>
                            </select>
                          </div>
                          <div class="field">
                            <label for="paymentStatus" class="field__label">Payment status</label>
                            <select class="select" id="paymentStatus" data-stisla-select>
                              <option value="unpaid" selected>Unpaid</option>
                              <option value="paid">Paid</option>
                              <option value="partial">Partially paid</option>
                              <option value="refunded">Refunded</option>
                            </select>
                          </div>
                          <div class="field">
                            <div class="field__item">
                              <input
                                class="switch"
                                type="checkbox"
                                role="switch"
                                id="sendConfirm"
                                checked
                              />
                              <label class="field__label" for="sendConfirm"
                                >Send confirmation email</label
                              >
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card__header"><span class="card__title">Customer</span></div>
                        <div class="card__body">
                          <div class="field">
                            <label for="customer" class="field__label">Customer</label>
                            <select
                              class="select"
                              id="customer"
                              data-stisla-select
                              data-placeholder="Search customers"
                            >
                              <option value=""></option>
                              <option value="acme">Acme Corp</option>
                              <option value="riverway">Riverway Ltd</option>
                              <option value="northwind">Northwind Traders</option>
                              <option value="globex">Globex</option>
                              <option value="initech">Initech</option>
                            </select>
                          </div>
                          <div class="field">
                            <label for="custEmail" class="field__label">Email</label>
                            <input
                              type="email"
                              class="input"
                              id="custEmail"
                              placeholder="billing@acme.co"
                            />
                          </div>
                          <div class="field">
                            <label for="custPhone" class="field__label">Phone</label>
                            <div class="input-group">
                              <span class="input-group__text"
                                ><svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="1em"
                                  height="1em"
                                  viewBox="0 0 24 24"
                                  aria-hidden="true"
                                >
                                  <path
                                    fill="currentColor"
                                    d="m16.1 13.359l-.528-.532zm.456-.453l.529.532zm2.417-.317l-.358.66zm1.91 1.039l-.358.659zm.539 3.255l.529.532zm-1.42 1.412l-.53-.531zm-1.326.67l.07.747zm-9.86-4.238l.528-.532zM4.002 5.746l-.749.042zm6.474 1.451l.53.532zm.157-2.654l.6-.449zM9.374 2.86l-.601.45zM6.26 2.575l.53.532zm-1.57 1.56l-.528-.531zm7.372 7.362l.529-.532zm4.567 2.394l.455-.453l-1.058-1.064l-.455.453zm1.985-.643l1.91 1.039l.716-1.318l-1.91-1.038zm2.278 3.103l-1.42 1.413l1.057 1.063l1.42-1.412zm-2.286 1.867c-1.45.136-5.201.015-9.263-4.023l-1.057 1.063c4.432 4.407 8.65 4.623 10.459 4.454zm-9.263-4.023c-3.871-3.85-4.512-7.087-4.592-8.492l-1.498.085c.1 1.768.895 5.356 5.033 9.47zm1.376-6.18l.286-.286L9.95 6.666l-.287.285zm.515-3.921L9.974 2.41l-1.201.899l1.26 1.684zM5.733 2.043l-1.57 1.56l1.058 1.064l1.57-1.56zm4.458 5.44c-.53-.532-.53-.532-.53-.53h-.002l-.003.004a1 1 0 0 0-.127.157c-.054.08-.113.185-.163.318a2.1 2.1 0 0 0-.088 1.071c.134.865.73 2.008 2.256 3.526l1.058-1.064c-1.429-1.42-1.769-2.284-1.832-2.692c-.03-.194.001-.29.01-.312q.009-.02 0-.006a.3.3 0 0 1-.03.039l-.01.01l-.01.009zm1.343 4.546c1.527 1.518 2.676 2.11 3.542 2.242c.443.068.8.014 1.071-.087a1.5 1.5 0 0 0 .42-.236l.05-.045l.007-.006l.003-.003l.001-.002s.002-.001-.527-.533c-.53-.532-.528-.533-.528-.533l.002-.002l.002-.002l.006-.005l.01-.01l.038-.03q.014-.009-.007.002c-.025.009-.123.04-.32.01c-.414-.064-1.284-.404-2.712-1.824zm-1.56-9.62C8.954 1.049 6.95.834 5.733 2.044L6.79 3.107c.532-.529 1.476-.475 1.983.202zM4.752 5.704c-.02-.346.139-.708.469-1.036L4.163 3.604c-.537.534-.96 1.29-.909 2.184zm14.72 12.06c-.274.274-.57.428-.865.455l.139 1.494c.735-.069 1.336-.44 1.784-.885zM11.006 7.73c.985-.979 1.058-2.527.229-3.635l-1.201.899c.403.539.343 1.246-.085 1.673zm9.52 6.558c.817.444.944 1.49.367 2.064l1.058 1.064c1.34-1.333.927-3.557-.71-4.446zm-3.441-.849c.384-.382 1.002-.476 1.53-.19l.716-1.317c-1.084-.59-2.428-.427-3.304.443z"
                                  /></svg
                              ></span>
                              <input
                                type="tel"
                                class="input"
                                id="custPhone"
                                placeholder="+1 555 0123"
                              />
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card__header"><span class="card__title">Shipping</span></div>
                        <div class="card__body">
                          <div class="field">
                            <label for="shipMethod" class="field__label">Method</label>
                            <select class="select" id="shipMethod" data-stisla-select>
                              <option value="standard" selected>Standard (3–5 days)</option>
                              <option value="express">Express (1–2 days)</option>
                              <option value="pickup">Local pickup</option>
                            </select>
                          </div>
                          <div class="field">
                            <label for="shipAddress" class="field__label">Address</label>
                            <textarea
                              class="textarea"
                              id="shipAddress"
                              rows="3"
                              placeholder="Street, city, state, ZIP"
                            ></textarea>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card__header"><span class="card__title">Tags</span></div>
                        <div class="card__body">
                          <div class="field">
                            <label for="orderTags" class="field__label">Tags</label>
                            <select
                              class="select"
                              id="orderTags"
                              multiple
                              data-stisla-select
                              data-placeholder="Add tags"
                            >
                              <option value="vip">VIP</option>
                              <option value="wholesale">Wholesale</option>
                              <option value="rush">Rush</option>
                              <option value="gift">Gift</option>
                              <option value="fragile">Fragile</option>
                            </select>
                            <p class="field__description">
                              Used for filtering and automation rules.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="sticky-bar">
                  <div class="me-auto">
                    <div class="text-xs text-muted-foreground">Order total</div>
                    <div class="text-xl font-bold" data-total>$0.00</div>
                  </div>
                  <a href="{{ route('orders.index') }}" class="button button--ghost button--neutral"
                    >Cancel</a
                  >
                  <button type="submit" class="button button--primary">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="1em"
                      height="1em"
                      viewBox="0 0 24 24"
                      aria-hidden="true"
                    >
                      <g fill="none" stroke="currentColor" stroke-width="1.5">
                        <circle cx="12" cy="12" r="10" />
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="m8.5 12.5l2 2l5-5"
                        />
                      </g>
                    </svg>
                    Save order
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>

        <template data-line-template>
          <div class="line-items__row" data-line-row>
            <div class="line-items__field">
              <span class="line-items__label">Product</span>
              <input
                type="text"
                class="input"
                placeholder="Product name"
                aria-label="Product name"
              />
            </div>
            <div class="line-items__field">
              <span class="line-items__label">Qty</span>
              <input
                type="number"
                class="input text-end"
                value="1"
                min="1"
                data-qty
                aria-label="Quantity"
              />
            </div>
            <div class="line-items__field">
              <span class="line-items__label">Unit price</span>
              <div class="input-group">
                <span class="input-group__text">$</span>
                <input
                  type="number"
                  class="input text-end"
                  value="0.00"
                  min="0"
                  step="0.01"
                  data-price
                  aria-label="Unit price"
                />
              </div>
            </div>
            <div class="line-items__field">
              <span class="line-items__label">Total</span>
              <span class="line-items__total" data-line-total>$0.00</span>
            </div>
            <div class="line-items__remove">
              <button
                type="button"
                class="button button--soft button--danger"
                data-remove-item
                aria-label="Remove item"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="1em"
                  height="1em"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  aria-hidden="true"
                >
                  <path d="M6 6l12 12M18 6L6 18" />
                </svg>
                <span class="line-items__remove-text">Remove</span>
              </button>
            </div>
          </div>
        </template>
      </main>
    </div>

    <!-- Third-party (CDN in both dev and prod). Loads before main.js so charts.js sees window.ApexCharts. -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3"></script>

    <script
      type="module"
      src="https://cdn.jsdelivr.net/npm/@stisla/vanilla@3/dist/stisla.js"
    ></script>
    <script src="assets/js/app-shell.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/charts.js"></script>
    <script src="assets/js/order-form.js"></script>
    <script src="assets/js/table-select.js"></script>
  </body>
</html>
@endsection
