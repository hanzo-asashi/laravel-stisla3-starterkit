@extends('layouts.app')

@section('title', 'New Product')

@section('content')
<header class="page__header">
              <div class="page__headline">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb__item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb__item"><a href="{{ route('products.index') }}">Products</a></li>
                    <li class="breadcrumb__item" aria-current="page">New product</li>
                  </ol>
                </nav>
                <h1 class="page__title">New product</h1>
                <p class="page__description">
                  Add a product to your catalog with pricing, inventory, and images.
                </p>
              </div>
            </header>

            <div class="page__body">
              <form class="order-form">
                <div class="grid grid-cols-12 gap-4">
                  <div class="col-span-12 lg:col-span-8">
                    <div class="flex flex-col gap-3">
                      <div class="card">
                        <div class="card__header">
                          <span class="card__title">Product details</span>
                        </div>
                        <div class="card__body">
                          <div class="field">
                            <label for="prodName" class="field__label">Title</label>
                            <input
                              type="text"
                              class="input"
                              id="prodName"
                              placeholder="e.g. Espresso Beans 2kg"
                            />
                          </div>
                          <div class="field">
                            <label for="prodDesc" class="field__label">Description</label>
                            <textarea
                              class="textarea"
                              id="prodDesc"
                              rows="4"
                              placeholder="Describe the product for your storefront."
                            ></textarea>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card__header"><span class="card__title">Media</span></div>
                        <div class="card__body">
                          <div class="field">
                            <label for="prodImages" class="field__label">Images</label>
                            <input
                              type="file"
                              class="input"
                              id="prodImages"
                              accept="image/*"
                              multiple
                            />
                            <p class="field__description">
                              PNG or JPG, up to 5 MB each. The first image is the thumbnail.
                            </p>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card__header"><span class="card__title">Pricing</span></div>
                        <div class="card__body">
                          <div class="grid grid-cols-12 gap-4">
                            <div class="col-span-12 sm:col-span-6">
                              <div class="field">
                                <label for="prodPrice" class="field__label">Price</label>
                                <div class="input-group">
                                  <span class="input-group__text">$</span>
                                  <input
                                    type="number"
                                    class="input"
                                    id="prodPrice"
                                    placeholder="0.00"
                                    min="0"
                                    step="0.01"
                                  />
                                </div>
                              </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                              <div class="field">
                                <label for="prodCompare" class="field__label"
                                  >Compare-at price</label
                                >
                                <div class="input-group">
                                  <span class="input-group__text">$</span>
                                  <input
                                    type="number"
                                    class="input"
                                    id="prodCompare"
                                    placeholder="0.00"
                                    min="0"
                                    step="0.01"
                                  />
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card__header"><span class="card__title">Inventory</span></div>
                        <div class="card__body">
                          <div class="grid grid-cols-12 gap-4">
                            <div class="col-span-12 sm:col-span-6">
                              <div class="field">
                                <label for="prodSku" class="field__label">SKU</label>
                                <input
                                  type="text"
                                  class="input"
                                  id="prodSku"
                                  placeholder="ESP-2000"
                                />
                              </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                              <div class="field">
                                <label for="prodQty" class="field__label">Quantity</label>
                                <input type="number" class="input" id="prodQty" value="0" min="0" />
                              </div>
                            </div>
                          </div>
                          <div class="field mt-2">
                            <div class="field__item">
                              <input
                                class="switch"
                                type="checkbox"
                                role="switch"
                                id="prodTrack"
                                checked
                              />
                              <label class="field__label" for="prodTrack">Track quantity</label>
                            </div>
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
                            <label for="prodStatus" class="field__label">Status</label>
                            <select class="select" id="prodStatus" data-stisla-select>
                              <option value="active" selected>Active</option>
                              <option value="draft">Draft</option>
                              <option value="archived">Archived</option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card__header">
                          <span class="card__title">Organization</span>
                        </div>
                        <div class="card__body">
                          <div class="field">
                            <label for="prodCategory" class="field__label">Category</label>
                            <select
                              class="select"
                              id="prodCategory"
                              data-stisla-select
                              data-placeholder="Select category"
                            >
                              <option value=""></option>
                              <option value="coffee">Coffee</option>
                              <option value="equipment">Equipment</option>
                              <option value="supplies">Supplies</option>
                              <option value="gifts">Gifts</option>
                            </select>
                          </div>
                          <div class="field">
                            <label for="prodTags" class="field__label">Tags</label>
                            <select
                              class="select"
                              id="prodTags"
                              multiple
                              data-stisla-select
                              data-placeholder="Add tags"
                            >
                              <option value="featured">Featured</option>
                              <option value="new">New</option>
                              <option value="sale">Sale</option>
                              <option value="seasonal">Seasonal</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="sticky-bar">
                  <div class="me-auto">
                    <span class="badge badge--warning badge--soft">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="1em"
                        height="1em"
                        viewBox="0 0 24 24"
                        aria-hidden="true"
                      >
                        <g fill="none" stroke="currentColor" stroke-width="1.5">
                          <path stroke-linecap="round" d="M4 22h16" />
                          <path
                            d="m13.888 3.663l.742-.742a3.146 3.146 0 1 1 4.449 4.45l-.742.74m-4.449-4.448s.093 1.576 1.483 2.966s2.966 1.483 2.966 1.483m-4.449-4.45L7.071 10.48c-.462.462-.693.692-.891.947a5.2 5.2 0 0 0-.599.969c-.139.291-.242.601-.449 1.22l-.875 2.626m14.08-8.13l-6.817 6.817c-.462.462-.692.692-.947.891q-.451.352-.969.599c-.291.139-.601.242-1.22.448l-2.626.876m0 0l-.641.213a.848.848 0 0 1-1.073-1.073l.213-.641m1.501 1.5l-1.5-1.5"
                          />
                        </g>
                      </svg>
                      Draft
                    </span>
                  </div>
                  <a href="{{ route('products.index') }}" class="button button--ghost button--neutral"
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
                    Save product
                  </button>
                </div>
              </form>
            </div>
@endsection
