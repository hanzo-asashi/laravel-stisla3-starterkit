@extends('layouts.app')

@section('title', 'Products')

@section('content')
<header class="page__header">
              <div class="page__headline">
                <h1 class="page__title">Products</h1>
                <p class="page__description">Your catalog of 10 products across four categories.</p>
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
                <a href="{{ route('products.create') }}" class="button button--primary"
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
                  Add product</a
                >
              </div>
            </header>

            <div class="page__body">
              <section class="page__section">
                <div class="card" data-table-select>
                  <div class="card__header flex-wrap">
                    <div
                      class="toggle-group mt-4 md:mt-0"
                      data-stisla-toggle-group
                      role="radiogroup"
                      aria-label="Filter by category"
                    >
                      <button
                        type="button"
                        class="toggle"
                        role="radio"
                        aria-checked="true"
                        data-state="active"
                      >
                        All
                      </button>

                      <button type="button" class="toggle" role="radio" aria-checked="false">
                        Coffee
                      </button>

                      <button type="button" class="toggle" role="radio" aria-checked="false">
                        Equipment
                      </button>

                      <button type="button" class="toggle" role="radio" aria-checked="false">
                        Supplies
                      </button>

                      <button type="button" class="toggle" role="radio" aria-checked="false">
                        Gifts
                      </button>
                    </div>
                    <form class="input-group ms-auto w-full md:w-60 mb-4 md:mb-0" role="search">
                      <span class="input-group__text"
                        ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="1em"
                          height="1em"
                          viewBox="0 0 24 24"
                          aria-hidden="true"
                        >
                          <g fill="none" stroke="currentColor" stroke-width="1.5">
                            <circle cx="11.5" cy="11.5" r="9.5" />
                            <path stroke-linecap="round" d="M18.5 18.5L22 22" />
                          </g></svg
                      ></span>
                      <input
                        type="search"
                        name="q"
                        class="input"
                        placeholder="Search products…"
                        aria-label="Search products"
                      />
                    </form>
                  </div>

                  <div class="card__header card__header--alt flex-wrap" data-bulkbar hidden>
                    <span><strong data-select-count>0</strong> selected</span>
                    <div class="flex flex-wrap items-center gap-2 ms-auto">
                      <button
                        type="button"
                        class="button button--sm button--outline button--neutral"
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
                              d="M9 12c0-.466 0-.699.076-.883a1 1 0 0 1 .541-.54c.184-.077.417-.077.883-.077h3c.466 0 .699 0 .883.076a1 1 0 0 1 .54.541c.077.184.077.417.077.883s0 .699-.076.883a1 1 0 0 1-.541.54c-.184.077-.417.077-.883.077h-3c-.466 0-.699 0-.883-.076a1 1 0 0 1-.54-.541C9 12.699 9 12.466 9 12Z"
                            />
                            <path
                              stroke-linecap="round"
                              d="M20.5 7v6c0 3.771 0 5.657-1.172 6.828S16.271 21 12.5 21h-1c-3.771 0-5.657 0-6.828-1.172S3.5 16.771 3.5 13V7"
                            />
                            <path
                              d="M2 5c0-.943 0-1.414.293-1.707S3.057 3 4 3h16c.943 0 1.414 0 1.707.293S22 4.057 22 5s0 1.414-.293 1.707S20.943 7 20 7H4c-.943 0-1.414 0-1.707-.293S2 5.943 2 5Z"
                            />
                          </g>
                        </svg>
                        Archive
                      </button>
                      <button
                        type="button"
                        class="button button--sm button--danger"
                        data-stisla-dialog-trigger="deleteConfirm"
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
                        Delete
                      </button>
                    </div>
                  </div>

                  <div class="table-responsive">
                    <table class="table table--hover table--align-middle">
                      <thead class="table__head--alt">
                        <tr>
                          <th scope="col">
                            <input
                              class="checkbox"
                              type="checkbox"
                              data-select-all
                              aria-label="Select all products on this page"
                            />
                          </th>
                          <th scope="col"><a class="table__sort" href="?sort=name">Product</a></th>
                          <th scope="col">
                            <a class="table__sort" href="?sort=category">Category</a>
                          </th>
                          <th scope="col" class="text-end">
                            <a class="table__sort" href="?sort=price">Price</a>
                          </th>
                          <th scope="col" class="text-end">
                            <a class="table__sort" href="?sort=stock">Stock</a>
                          </th>
                          <th scope="col">Status</th>
                          <th scope="col" class="text-end"><span class="sr-only">Actions</span></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <input
                              class="checkbox"
                              type="checkbox"
                              data-select-row
                              aria-label="Select Espresso Beans 2kg"
                            />
                          </td>
                          <th scope="row">
                            <div class="flex items-center gap-3">
                              <img
                                class="shrink-0 rounded-sm object-cover"
                                src="https://picsum.photos/seed/ESP-2000/96/96"
                                alt=""
                                width="40"
                                height="40"
                                loading="lazy"
                              />
                              <div>
                                <a href="{{ route('products.create') }}" class="font-medium"
                                  >Espresso Beans 2kg</a
                                >
                                <div class="text-xs text-muted-foreground">SKU ESP-2000</div>
                              </div>
                            </div>
                          </th>
                          <td>Coffee</td>
                          <td class="text-end"><span class="font-semibold">$32.00</span></td>
                          <td class="text-end">124</td>
                          <td>
                            <span class="badge badge--soft badge--success">In stock</span>
                          </td>
                          <td class="text-end">
                            <div class="flex justify-end gap-1">
                              <a
                                href="{{ route('products.create') }}"
                                class="button button--ghost button--neutral button--icon-only button--sm"
                                aria-label="Edit Espresso Beans 2kg"
                                ><svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="1em"
                                  height="1em"
                                  viewBox="0 0 24 24"
                                  aria-hidden="true"
                                >
                                  <path
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    d="m14.36 4.079l.927-.927a3.932 3.932 0 0 1 5.561 5.561l-.927.927m-5.56-5.561s.115 1.97 1.853 3.707C17.952 9.524 19.92 9.64 19.92 9.64m-5.56-5.561l-8.522 8.52c-.577.578-.866.867-1.114 1.185a6.6 6.6 0 0 0-.749 1.211c-.173.364-.302.752-.56 1.526l-1.094 3.281m17.6-10.162L11.4 18.16c-.577.577-.866.866-1.184 1.114a6.6 6.6 0 0 1-1.211.749c-.364.173-.751.302-1.526.56l-3.281 1.094m0 0l-.802.268a1.06 1.06 0 0 1-1.342-1.342l.268-.802m1.876 1.876l-1.876-1.876"
                                  /></svg
                              ></a>
                              <button
                                type="button"
                                class="button button--ghost button--danger button--icon-only button--sm"
                                data-stisla-dialog-trigger="deleteProduct"
                                data-fill-name="Espresso Beans 2kg"
                                aria-label="Delete Espresso Beans 2kg"
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
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td>
                            <input
                              class="checkbox"
                              type="checkbox"
                              data-select-row
                              aria-label="Select Ceramic Pour-Over"
                            />
                          </td>
                          <th scope="row">
                            <div class="flex items-center gap-3">
                              <img
                                class="shrink-0 rounded-sm object-cover"
                                src="https://picsum.photos/seed/POU-014/96/96"
                                alt=""
                                width="40"
                                height="40"
                                loading="lazy"
                              />
                              <div>
                                <a href="{{ route('products.create') }}" class="font-medium"
                                  >Ceramic Pour-Over</a
                                >
                                <div class="text-xs text-muted-foreground">SKU POU-014</div>
                              </div>
                            </div>
                          </th>
                          <td>Equipment</td>
                          <td class="text-end"><span class="font-semibold">$45.00</span></td>
                          <td class="text-end">18</td>
                          <td>
                            <span class="badge badge--soft badge--success">In stock</span>
                          </td>
                          <td class="text-end">
                            <div class="flex justify-end gap-1">
                              <a
                                href="{{ route('products.create') }}"
                                class="button button--ghost button--neutral button--icon-only button--sm"
                                aria-label="Edit Ceramic Pour-Over"
                                ><svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="1em"
                                  height="1em"
                                  viewBox="0 0 24 24"
                                  aria-hidden="true"
                                >
                                  <path
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    d="m14.36 4.079l.927-.927a3.932 3.932 0 0 1 5.561 5.561l-.927.927m-5.56-5.561s.115 1.97 1.853 3.707C17.952 9.524 19.92 9.64 19.92 9.64m-5.56-5.561l-8.522 8.52c-.577.578-.866.867-1.114 1.185a6.6 6.6 0 0 0-.749 1.211c-.173.364-.302.752-.56 1.526l-1.094 3.281m17.6-10.162L11.4 18.16c-.577.577-.866.866-1.184 1.114a6.6 6.6 0 0 1-1.211.749c-.364.173-.751.302-1.526.56l-3.281 1.094m0 0l-.802.268a1.06 1.06 0 0 1-1.342-1.342l.268-.802m1.876 1.876l-1.876-1.876"
                                  /></svg
                              ></a>
                              <button
                                type="button"
                                class="button button--ghost button--danger button--icon-only button--sm"
                                data-stisla-dialog-trigger="deleteProduct"
                                data-fill-name="Ceramic Pour-Over"
                                aria-label="Delete Ceramic Pour-Over"
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
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td>
                            <input
                              class="checkbox"
                              type="checkbox"
                              data-select-row
                              aria-label="Select Paper Filters (100pk)"
                            />
                          </td>
                          <th scope="row">
                            <div class="flex items-center gap-3">
                              <img
                                class="shrink-0 rounded-sm object-cover"
                                src="https://picsum.photos/seed/FIL-100/96/96"
                                alt=""
                                width="40"
                                height="40"
                                loading="lazy"
                              />
                              <div>
                                <a href="{{ route('products.create') }}" class="font-medium"
                                  >Paper Filters (100pk)</a
                                >
                                <div class="text-xs text-muted-foreground">SKU FIL-100</div>
                              </div>
                            </div>
                          </th>
                          <td>Supplies</td>
                          <td class="text-end"><span class="font-semibold">$8.50</span></td>
                          <td class="text-end">0</td>
                          <td>
                            <span class="badge badge--soft badge--danger">Out of stock</span>
                          </td>
                          <td class="text-end">
                            <div class="flex justify-end gap-1">
                              <a
                                href="{{ route('products.create') }}"
                                class="button button--ghost button--neutral button--icon-only button--sm"
                                aria-label="Edit Paper Filters (100pk)"
                                ><svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="1em"
                                  height="1em"
                                  viewBox="0 0 24 24"
                                  aria-hidden="true"
                                >
                                  <path
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    d="m14.36 4.079l.927-.927a3.932 3.932 0 0 1 5.561 5.561l-.927.927m-5.56-5.561s.115 1.97 1.853 3.707C17.952 9.524 19.92 9.64 19.92 9.64m-5.56-5.561l-8.522 8.52c-.577.578-.866.867-1.114 1.185a6.6 6.6 0 0 0-.749 1.211c-.173.364-.302.752-.56 1.526l-1.094 3.281m17.6-10.162L11.4 18.16c-.577.577-.866.866-1.184 1.114a6.6 6.6 0 0 1-1.211.749c-.364.173-.751.302-1.526.56l-3.281 1.094m0 0l-.802.268a1.06 1.06 0 0 1-1.342-1.342l.268-.802m1.876 1.876l-1.876-1.876"
                                  /></svg
                              ></a>
                              <button
                                type="button"
                                class="button button--ghost button--danger button--icon-only button--sm"
                                data-stisla-dialog-trigger="deleteProduct"
                                data-fill-name="Paper Filters (100pk)"
                                aria-label="Delete Paper Filters (100pk)"
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
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td>
                            <input
                              class="checkbox"
                              type="checkbox"
                              data-select-row
                              aria-label="Select Cold Brew Concentrate"
                            />
                          </td>
                          <th scope="row">
                            <div class="flex items-center gap-3">
                              <img
                                class="shrink-0 rounded-sm object-cover"
                                src="https://picsum.photos/seed/CLD-050/96/96"
                                alt=""
                                width="40"
                                height="40"
                                loading="lazy"
                              />
                              <div>
                                <a href="{{ route('products.create') }}" class="font-medium"
                                  >Cold Brew Concentrate</a
                                >
                                <div class="text-xs text-muted-foreground">SKU CLD-050</div>
                              </div>
                            </div>
                          </th>
                          <td>Coffee</td>
                          <td class="text-end"><span class="font-semibold">$16.00</span></td>
                          <td class="text-end">73</td>
                          <td>
                            <span class="badge badge--soft badge--success">In stock</span>
                          </td>
                          <td class="text-end">
                            <div class="flex justify-end gap-1">
                              <a
                                href="{{ route('products.create') }}"
                                class="button button--ghost button--neutral button--icon-only button--sm"
                                aria-label="Edit Cold Brew Concentrate"
                                ><svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="1em"
                                  height="1em"
                                  viewBox="0 0 24 24"
                                  aria-hidden="true"
                                >
                                  <path
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    d="m14.36 4.079l.927-.927a3.932 3.932 0 0 1 5.561 5.561l-.927.927m-5.56-5.561s.115 1.97 1.853 3.707C17.952 9.524 19.92 9.64 19.92 9.64m-5.56-5.561l-8.522 8.52c-.577.578-.866.867-1.114 1.185a6.6 6.6 0 0 0-.749 1.211c-.173.364-.302.752-.56 1.526l-1.094 3.281m17.6-10.162L11.4 18.16c-.577.577-.866.866-1.184 1.114a6.6 6.6 0 0 1-1.211.749c-.364.173-.751.302-1.526.56l-3.281 1.094m0 0l-.802.268a1.06 1.06 0 0 1-1.342-1.342l.268-.802m1.876 1.876l-1.876-1.876"
                                  /></svg
                              ></a>
                              <button
                                type="button"
                                class="button button--ghost button--danger button--icon-only button--sm"
                                data-stisla-dialog-trigger="deleteProduct"
                                data-fill-name="Cold Brew Concentrate"
                                aria-label="Delete Cold Brew Concentrate"
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
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td>
                            <input
                              class="checkbox"
                              type="checkbox"
                              data-select-row
                              aria-label="Select Milk Frother"
                            />
                          </td>
                          <th scope="row">
                            <div class="flex items-center gap-3">
                              <img
                                class="shrink-0 rounded-sm object-cover"
                                src="https://picsum.photos/seed/FRO-220/96/96"
                                alt=""
                                width="40"
                                height="40"
                                loading="lazy"
                              />
                              <div>
                                <a href="{{ route('products.create') }}" class="font-medium"
                                  >Milk Frother</a
                                >
                                <div class="text-xs text-muted-foreground">SKU FRO-220</div>
                              </div>
                            </div>
                          </th>
                          <td>Equipment</td>
                          <td class="text-end"><span class="font-semibold">$29.00</span></td>
                          <td class="text-end">9</td>
                          <td>
                            <span class="badge badge--soft badge--warning">Low stock</span>
                          </td>
                          <td class="text-end">
                            <div class="flex justify-end gap-1">
                              <a
                                href="{{ route('products.create') }}"
                                class="button button--ghost button--neutral button--icon-only button--sm"
                                aria-label="Edit Milk Frother"
                                ><svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="1em"
                                  height="1em"
                                  viewBox="0 0 24 24"
                                  aria-hidden="true"
                                >
                                  <path
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    d="m14.36 4.079l.927-.927a3.932 3.932 0 0 1 5.561 5.561l-.927.927m-5.56-5.561s.115 1.97 1.853 3.707C17.952 9.524 19.92 9.64 19.92 9.64m-5.56-5.561l-8.522 8.52c-.577.578-.866.867-1.114 1.185a6.6 6.6 0 0 0-.749 1.211c-.173.364-.302.752-.56 1.526l-1.094 3.281m17.6-10.162L11.4 18.16c-.577.577-.866.866-1.184 1.114a6.6 6.6 0 0 1-1.211.749c-.364.173-.751.302-1.526.56l-3.281 1.094m0 0l-.802.268a1.06 1.06 0 0 1-1.342-1.342l.268-.802m1.876 1.876l-1.876-1.876"
                                  /></svg
                              ></a>
                              <button
                                type="button"
                                class="button button--ghost button--danger button--icon-only button--sm"
                                data-stisla-dialog-trigger="deleteProduct"
                                data-fill-name="Milk Frother"
                                aria-label="Delete Milk Frother"
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
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td>
                            <input
                              class="checkbox"
                              type="checkbox"
                              data-select-row
                              aria-label="Select Travel Mug"
                            />
                          </td>
                          <th scope="row">
                            <div class="flex items-center gap-3">
                              <img
                                class="shrink-0 rounded-sm object-cover"
                                src="https://picsum.photos/seed/MUG-330/96/96"
                                alt=""
                                width="40"
                                height="40"
                                loading="lazy"
                              />
                              <div>
                                <a href="{{ route('products.create') }}" class="font-medium"
                                  >Travel Mug</a
                                >
                                <div class="text-xs text-muted-foreground">SKU MUG-330</div>
                              </div>
                            </div>
                          </th>
                          <td>Equipment</td>
                          <td class="text-end"><span class="font-semibold">$24.00</span></td>
                          <td class="text-end">210</td>
                          <td>
                            <span class="badge badge--soft badge--success">In stock</span>
                          </td>
                          <td class="text-end">
                            <div class="flex justify-end gap-1">
                              <a
                                href="{{ route('products.create') }}"
                                class="button button--ghost button--neutral button--icon-only button--sm"
                                aria-label="Edit Travel Mug"
                                ><svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="1em"
                                  height="1em"
                                  viewBox="0 0 24 24"
                                  aria-hidden="true"
                                >
                                  <path
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    d="m14.36 4.079l.927-.927a3.932 3.932 0 0 1 5.561 5.561l-.927.927m-5.56-5.561s.115 1.97 1.853 3.707C17.952 9.524 19.92 9.64 19.92 9.64m-5.56-5.561l-8.522 8.52c-.577.578-.866.867-1.114 1.185a6.6 6.6 0 0 0-.749 1.211c-.173.364-.302.752-.56 1.526l-1.094 3.281m17.6-10.162L11.4 18.16c-.577.577-.866.866-1.184 1.114a6.6 6.6 0 0 1-1.211.749c-.364.173-.751.302-1.526.56l-3.281 1.094m0 0l-.802.268a1.06 1.06 0 0 1-1.342-1.342l.268-.802m1.876 1.876l-1.876-1.876"
                                  /></svg
                              ></a>
                              <button
                                type="button"
                                class="button button--ghost button--danger button--icon-only button--sm"
                                data-stisla-dialog-trigger="deleteProduct"
                                data-fill-name="Travel Mug"
                                aria-label="Delete Travel Mug"
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
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td>
                            <input
                              class="checkbox"
                              type="checkbox"
                              data-select-row
                              aria-label="Select Gift Box"
                            />
                          </td>
                          <th scope="row">
                            <div class="flex items-center gap-3">
                              <img
                                class="shrink-0 rounded-sm object-cover"
                                src="https://picsum.photos/seed/GFT-001/96/96"
                                alt=""
                                width="40"
                                height="40"
                                loading="lazy"
                              />
                              <div>
                                <a href="{{ route('products.create') }}" class="font-medium"
                                  >Gift Box</a
                                >
                                <div class="text-xs text-muted-foreground">SKU GFT-001</div>
                              </div>
                            </div>
                          </th>
                          <td>Gifts</td>
                          <td class="text-end"><span class="font-semibold">$20.00</span></td>
                          <td class="text-end">56</td>
                          <td>
                            <span class="badge badge--soft badge--success">In stock</span>
                          </td>
                          <td class="text-end">
                            <div class="flex justify-end gap-1">
                              <a
                                href="{{ route('products.create') }}"
                                class="button button--ghost button--neutral button--icon-only button--sm"
                                aria-label="Edit Gift Box"
                                ><svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="1em"
                                  height="1em"
                                  viewBox="0 0 24 24"
                                  aria-hidden="true"
                                >
                                  <path
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    d="m14.36 4.079l.927-.927a3.932 3.932 0 0 1 5.561 5.561l-.927.927m-5.56-5.561s.115 1.97 1.853 3.707C17.952 9.524 19.92 9.64 19.92 9.64m-5.56-5.561l-8.522 8.52c-.577.578-.866.867-1.114 1.185a6.6 6.6 0 0 0-.749 1.211c-.173.364-.302.752-.56 1.526l-1.094 3.281m17.6-10.162L11.4 18.16c-.577.577-.866.866-1.184 1.114a6.6 6.6 0 0 1-1.211.749c-.364.173-.751.302-1.526.56l-3.281 1.094m0 0l-.802.268a1.06 1.06 0 0 1-1.342-1.342l.268-.802m1.876 1.876l-1.876-1.876"
                                  /></svg
                              ></a>
                              <button
                                type="button"
                                class="button button--ghost button--danger button--icon-only button--sm"
                                data-stisla-dialog-trigger="deleteProduct"
                                data-fill-name="Gift Box"
                                aria-label="Delete Gift Box"
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
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td>
                            <input
                              class="checkbox"
                              type="checkbox"
                              data-select-row
                              aria-label="Select Tasting Notebook"
                            />
                          </td>
                          <th scope="row">
                            <div class="flex items-center gap-3">
                              <img
                                class="shrink-0 rounded-sm object-cover"
                                src="https://picsum.photos/seed/NOT-012/96/96"
                                alt=""
                                width="40"
                                height="40"
                                loading="lazy"
                              />
                              <div>
                                <a href="{{ route('products.create') }}" class="font-medium"
                                  >Tasting Notebook</a
                                >
                                <div class="text-xs text-muted-foreground">SKU NOT-012</div>
                              </div>
                            </div>
                          </th>
                          <td>Supplies</td>
                          <td class="text-end"><span class="font-semibold">$12.00</span></td>
                          <td class="text-end">0</td>
                          <td>
                            <span class="badge badge--soft badge--danger">Out of stock</span>
                          </td>
                          <td class="text-end">
                            <div class="flex justify-end gap-1">
                              <a
                                href="{{ route('products.create') }}"
                                class="button button--ghost button--neutral button--icon-only button--sm"
                                aria-label="Edit Tasting Notebook"
                                ><svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="1em"
                                  height="1em"
                                  viewBox="0 0 24 24"
                                  aria-hidden="true"
                                >
                                  <path
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    d="m14.36 4.079l.927-.927a3.932 3.932 0 0 1 5.561 5.561l-.927.927m-5.56-5.561s.115 1.97 1.853 3.707C17.952 9.524 19.92 9.64 19.92 9.64m-5.56-5.561l-8.522 8.52c-.577.578-.866.867-1.114 1.185a6.6 6.6 0 0 0-.749 1.211c-.173.364-.302.752-.56 1.526l-1.094 3.281m17.6-10.162L11.4 18.16c-.577.577-.866.866-1.184 1.114a6.6 6.6 0 0 1-1.211.749c-.364.173-.751.302-1.526.56l-3.281 1.094m0 0l-.802.268a1.06 1.06 0 0 1-1.342-1.342l.268-.802m1.876 1.876l-1.876-1.876"
                                  /></svg
                              ></a>
                              <button
                                type="button"
                                class="button button--ghost button--danger button--icon-only button--sm"
                                data-stisla-dialog-trigger="deleteProduct"
                                data-fill-name="Tasting Notebook"
                                aria-label="Delete Tasting Notebook"
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
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td>
                            <input
                              class="checkbox"
                              type="checkbox"
                              data-select-row
                              aria-label="Select Burr Grinder"
                            />
                          </td>
                          <th scope="row">
                            <div class="flex items-center gap-3">
                              <img
                                class="shrink-0 rounded-sm object-cover"
                                src="https://picsum.photos/seed/GRD-450/96/96"
                                alt=""
                                width="40"
                                height="40"
                                loading="lazy"
                              />
                              <div>
                                <a href="{{ route('products.create') }}" class="font-medium"
                                  >Burr Grinder</a
                                >
                                <div class="text-xs text-muted-foreground">SKU GRD-450</div>
                              </div>
                            </div>
                          </th>
                          <td>Equipment</td>
                          <td class="text-end"><span class="font-semibold">$89.00</span></td>
                          <td class="text-end">7</td>
                          <td>
                            <span class="badge badge--soft badge--warning">Low stock</span>
                          </td>
                          <td class="text-end">
                            <div class="flex justify-end gap-1">
                              <a
                                href="{{ route('products.create') }}"
                                class="button button--ghost button--neutral button--icon-only button--sm"
                                aria-label="Edit Burr Grinder"
                                ><svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="1em"
                                  height="1em"
                                  viewBox="0 0 24 24"
                                  aria-hidden="true"
                                >
                                  <path
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    d="m14.36 4.079l.927-.927a3.932 3.932 0 0 1 5.561 5.561l-.927.927m-5.56-5.561s.115 1.97 1.853 3.707C17.952 9.524 19.92 9.64 19.92 9.64m-5.56-5.561l-8.522 8.52c-.577.578-.866.867-1.114 1.185a6.6 6.6 0 0 0-.749 1.211c-.173.364-.302.752-.56 1.526l-1.094 3.281m17.6-10.162L11.4 18.16c-.577.577-.866.866-1.184 1.114a6.6 6.6 0 0 1-1.211.749c-.364.173-.751.302-1.526.56l-3.281 1.094m0 0l-.802.268a1.06 1.06 0 0 1-1.342-1.342l.268-.802m1.876 1.876l-1.876-1.876"
                                  /></svg
                              ></a>
                              <button
                                type="button"
                                class="button button--ghost button--danger button--icon-only button--sm"
                                data-stisla-dialog-trigger="deleteProduct"
                                data-fill-name="Burr Grinder"
                                aria-label="Delete Burr Grinder"
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
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td>
                            <input
                              class="checkbox"
                              type="checkbox"
                              data-select-row
                              aria-label="Select Whole Bean Sampler"
                            />
                          </td>
                          <th scope="row">
                            <div class="flex items-center gap-3">
                              <img
                                class="shrink-0 rounded-sm object-cover"
                                src="https://picsum.photos/seed/SMP-006/96/96"
                                alt=""
                                width="40"
                                height="40"
                                loading="lazy"
                              />
                              <div>
                                <a href="{{ route('products.create') }}" class="font-medium"
                                  >Whole Bean Sampler</a
                                >
                                <div class="text-xs text-muted-foreground">SKU SMP-006</div>
                              </div>
                            </div>
                          </th>
                          <td>Gifts</td>
                          <td class="text-end"><span class="font-semibold">$28.00</span></td>
                          <td class="text-end">41</td>
                          <td>
                            <span class="badge badge--soft badge--success">In stock</span>
                          </td>
                          <td class="text-end">
                            <div class="flex justify-end gap-1">
                              <a
                                href="{{ route('products.create') }}"
                                class="button button--ghost button--neutral button--icon-only button--sm"
                                aria-label="Edit Whole Bean Sampler"
                                ><svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="1em"
                                  height="1em"
                                  viewBox="0 0 24 24"
                                  aria-hidden="true"
                                >
                                  <path
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    d="m14.36 4.079l.927-.927a3.932 3.932 0 0 1 5.561 5.561l-.927.927m-5.56-5.561s.115 1.97 1.853 3.707C17.952 9.524 19.92 9.64 19.92 9.64m-5.56-5.561l-8.522 8.52c-.577.578-.866.867-1.114 1.185a6.6 6.6 0 0 0-.749 1.211c-.173.364-.302.752-.56 1.526l-1.094 3.281m17.6-10.162L11.4 18.16c-.577.577-.866.866-1.184 1.114a6.6 6.6 0 0 1-1.211.749c-.364.173-.751.302-1.526.56l-3.281 1.094m0 0l-.802.268a1.06 1.06 0 0 1-1.342-1.342l.268-.802m1.876 1.876l-1.876-1.876"
                                  /></svg
                              ></a>
                              <button
                                type="button"
                                class="button button--ghost button--danger button--icon-only button--sm"
                                data-stisla-dialog-trigger="deleteProduct"
                                data-fill-name="Whole Bean Sampler"
                                aria-label="Delete Whole Bean Sampler"
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
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <div class="card__footer">
                    <span class="text-xs text-muted-foreground">Showing 1–10 of 10</span>
                    <nav class="ms-auto" aria-label="Products pages">
                      <ul class="pagination">
                        <li>
                          <span
                            class="pagination__button"
                            aria-disabled="true"
                            aria-label="Previous"
                            ><svg
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
                                d="m15 5l-6 7l6 7"
                              /></svg
                          ></span>
                        </li>
                        <li>
                          <a
                            class="pagination__button"
                            href="?page=1"
                            data-state="active"
                            aria-current="page"
                            >1</a
                          >
                        </li>
                        <li>
                          <span class="pagination__button" aria-disabled="true" aria-label="Next"
                            ><svg
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
                                d="m9 5l6 7l-6 7"
                              /></svg
                          ></span>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>

        <div
          class="dialog dialog--sm"
          id="deleteProduct"
          data-stisla-dialog
          data-state="closed"
          role="alertdialog"
          aria-modal="true"
          aria-labelledby="deleteProductLabel"
          aria-describedby="deleteProductDesc"
          aria-hidden="true"
          tabindex="-1"
        >
          <div class="dialog__backdrop" data-stisla-dialog-dismiss></div>
          <div class="dialog__panel">
            <div class="dialog__content">
              <button
                type="button"
                class="dialog__close"
                data-stisla-dialog-dismiss
                aria-label="Close"
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
              </button>
              <div class="dialog__body text-center pt-6">
                <span class="icon-box icon-box--danger icon-box--circle icon-box--lg mb-3">
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
                </span>
                <h3 class="dialog__title mb-1" id="deleteProductLabel">
                  Delete <span data-slot="name"></span>?
                </h3>
                <p class="text-muted-foreground" id="deleteProductDesc">
                  This removes the product from your catalog. This can't be undone.
                </p>
              </div>
              <div class="dialog__footer justify-center">
                <button
                  type="button"
                  class="button button--ghost button--neutral"
                  data-stisla-dialog-dismiss
                >
                  Cancel
                </button>
                <button type="button" class="button button--danger" data-stisla-dialog-dismiss>
                  Delete product
                </button>
              </div>
            </div>
          </div>
        </div>

        <div
          class="dialog dialog--sm"
          id="deleteConfirm"
          data-stisla-dialog
          data-state="closed"
          role="alertdialog"
          aria-modal="true"
          aria-labelledby="delProdLabel"
          aria-describedby="delProdDesc"
          aria-hidden="true"
          tabindex="-1"
        >
          <div class="dialog__backdrop" data-stisla-dialog-dismiss></div>
          <div class="dialog__panel">
            <div class="dialog__content">
              <button
                type="button"
                class="dialog__close"
                data-stisla-dialog-dismiss
                aria-label="Close"
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
              </button>
              <div class="dialog__body text-center pt-6">
                <span class="icon-box icon-box--danger icon-box--circle icon-box--lg mb-3">
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
                </span>
                <h3 class="dialog__title mb-1" id="delProdLabel">
                  Delete <span data-select-count>0</span> products?
                </h3>
                <p class="text-muted-foreground" id="delProdDesc">
                  The selected products are permanently removed. This can't be undone.
                </p>
              </div>
              <div class="dialog__footer justify-center">
                <button
                  type="button"
                  class="button button--ghost button--neutral"
                  data-stisla-dialog-dismiss
                >
                  Cancel
                </button>
                <button type="button" class="button button--danger" data-stisla-dialog-dismiss>
                  Delete products
                </button>
              </div>
            </div>
@endsection
