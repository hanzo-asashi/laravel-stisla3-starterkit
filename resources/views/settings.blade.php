@extends('layouts.app')

@section('title', 'Settings')

@section('content')
<header class="page__header">
              <div class="page__headline">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb__item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb__item" aria-current="page">Settings</li>
                  </ol>
                </nav>
                <h1 class="page__title">Settings</h1>
                <p class="page__description">
                  Manage your profile, store, and account preferences.
                </p>
              </div>
            </header>

            <div class="page__body">
              <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 lg:col-span-3">
                  <aside class="sidebar sidebar--setting" aria-label="Settings sections">
                    <div class="sidebar__content">
                      <nav class="sidebar__menu">
                        <div class="sidebar__group">
                          <ul class="sidebar__list">
                            <li class="sidebar__item">
                              <button
                                type="button"
                                class="sidebar__button"
                                aria-controls="settingsTabs"
                                data-stisla-tabs-value="profile"
                                aria-current="page"
                              >
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="1em"
                                  height="1em"
                                  viewBox="0 0 24 24"
                                  aria-hidden="true"
                                >
                                  <g fill="none" stroke="currentColor" stroke-width="1.5">
                                    <circle cx="12" cy="9" r="3" />
                                    <circle cx="12" cy="12" r="10" />
                                    <path
                                      stroke-linecap="round"
                                      d="M17.97 20c-.16-2.892-1.045-5-5.97-5s-5.81 2.108-5.97 5"
                                    />
                                  </g></svg
                                ><span>Profile</span>
                              </button>
                            </li>

                            <li class="sidebar__item">
                              <button
                                type="button"
                                class="sidebar__button"
                                aria-controls="settingsTabs"
                                data-stisla-tabs-value="notifications"
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
                                      d="M18.75 9.71v-.705C18.75 5.136 15.726 2 12 2S5.25 5.136 5.25 9.005v.705a4.4 4.4 0 0 1-.692 2.375L3.45 13.81c-1.011 1.575-.239 3.716 1.52 4.214a25.8 25.8 0 0 0 14.06 0c1.759-.498 2.531-2.639 1.52-4.213l-1.108-1.725a4.4 4.4 0 0 1-.693-2.375Z"
                                    />
                                    <path
                                      stroke-linecap="round"
                                      d="M7.5 19c.655 1.748 2.422 3 4.5 3s3.845-1.252 4.5-3"
                                    />
                                  </g></svg
                                ><span>Notifications</span>
                              </button>
                            </li>

                            <li class="sidebar__item">
                              <button
                                type="button"
                                class="sidebar__button"
                                aria-controls="settingsTabs"
                                data-stisla-tabs-value="security"
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
                                      d="M3 10.417c0-3.198 0-4.797.378-5.335c.377-.537 1.88-1.052 4.887-2.081l.573-.196C10.405 2.268 11.188 2 12 2s1.595.268 3.162.805l.573.196c3.007 1.029 4.51 1.544 4.887 2.081C21 5.62 21 7.22 21 10.417v1.574c0 5.638-4.239 8.375-6.899 9.536C13.38 21.842 13.02 22 12 22s-1.38-.158-2.101-.473C7.239 20.365 3 17.63 3 11.991z"
                                    />
                                    <path
                                      stroke-linejoin="round"
                                      d="M11.5 16h1a1 1 0 0 0 1-1v-1.401A2.999 2.999 0 0 0 12 8a3 3 0 0 0-1.5 5.599V15a1 1 0 0 0 1 1Z"
                                    />
                                  </g></svg
                                ><span>Security</span>
                              </button>
                            </li>

                            <li class="sidebar__item">
                              <button
                                type="button"
                                class="sidebar__button"
                                aria-controls="settingsTabs"
                                data-stisla-tabs-value="danger"
                              >
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="1em"
                                  height="1em"
                                  viewBox="0 0 24 24"
                                  aria-hidden="true"
                                >
                                  <g fill="none">
                                    <path
                                      stroke="currentColor"
                                      stroke-width="1.5"
                                      d="M5.312 10.762C8.23 5.587 9.689 3 12 3s3.77 2.587 6.688 7.762l.364.644c2.425 4.3 3.638 6.45 2.542 8.022S17.786 21 12.364 21h-.728c-5.422 0-8.134 0-9.23-1.572s.117-3.722 2.542-8.022z"
                                    />
                                    <path
                                      stroke="currentColor"
                                      stroke-linecap="round"
                                      stroke-width="1.5"
                                      d="M12 8v5"
                                    />
                                    <circle cx="12" cy="16" r="1" fill="currentColor" />
                                  </g></svg
                                ><span>Danger zone</span>
                              </button>
                            </li>
                          </ul>
                        </div>
                      </nav>
                    </div>
                    <footer class="sidebar__footer">
                      <hr class="separator mb-2" />
                      <ul class="sidebar__list">
                        <li class="sidebar__item">
                          <a
                            class="sidebar__button"
                            href="{{ route('login') }}"
                            style="--sidebar-button-color: var(--color-danger)"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="1em"
                              height="1em"
                              viewBox="0 0 24 24"
                              aria-hidden="true"
                            >
                              <g
                                fill="none"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-width="1.5"
                              >
                                <path
                                  d="M9.002 7c.012-2.175.109-3.353.877-4.121C10.758 2 12.172 2 15 2h1c2.829 0 4.243 0 5.122.879C22 3.757 22 5.172 22 8v8c0 2.828 0 4.243-.878 5.121C20.242 22 18.829 22 16 22h-1c-2.828 0-4.242 0-5.121-.879c-.768-.768-.865-1.946-.877-4.121"
                                />
                                <path stroke-linejoin="round" d="M15 12H2m0 0l3.5-3M2 12l3.5 3" />
                              </g></svg
                            ><span>Sign out</span>
                          </a>
                        </li>
                      </ul>
                    </footer>
                  </aside>
                </div>

                <div class="col-span-12 lg:col-span-9">
                  <div class="tabs" id="settingsTabs" data-stisla-tabs>
                    <div class="tabs__panel" data-value="profile" data-state="active">
                      <div class="flex flex-col gap-6">
                        <section class="flex flex-col gap-3">
                          <div class="flex flex-col gap-1">
                            <h2 class="page__section-title">Profile</h2>
                            <p class="page__section-description">
                              Update your photo and personal details.
                            </p>
                          </div>
                          <div class="card">
                            <div class="card__body">
                              <div class="flex items-center gap-3">
                                <span class="avatar avatar--circle avatar--xl" data-stisla-avatar>
                                  <img
                                    class="avatar__image"
                                    src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=facearea&facepad=2.5&w=160&h=160&q=80"
                                    alt=""
                                  />
                                  <span class="avatar__fallback">SG</span>
                                </span>
                                <div class="flex gap-2">
                                  <button
                                    type="button"
                                    class="button button--outline button--neutral button--sm"
                                  >
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
                                        d="M3 15c0 2.828 0 4.243.879 5.121C4.757 21 6.172 21 9 21h6c2.828 0 4.243 0 5.121-.879C21 19.243 21 17.828 21 15m-9 1V3m0 0l4 4.375M12 3L8 7.375"
                                      />
                                    </svg>
                                    Upload
                                  </button>
                                  <button
                                    type="button"
                                    class="button button--ghost button--danger button--sm"
                                  >
                                    Remove
                                  </button>
                                </div>
                              </div>
                              <div class="grid grid-cols-12 gap-4">
                                <div class="col-span-12 sm:col-span-6">
                                  <div class="field">
                                    <label for="setFirst" class="field__label">First name</label>
                                    <input type="text" class="input" id="setFirst" value="Steven" />
                                  </div>
                                </div>
                                <div class="col-span-12 sm:col-span-6">
                                  <div class="field">
                                    <label for="setLast" class="field__label">Last name</label>
                                    <input type="text" class="input" id="setLast" value="Gerrard" />
                                  </div>
                                </div>
                              </div>
                              <div class="field">
                                <label for="setEmail" class="field__label">Email</label>
                                <input
                                  type="email"
                                  class="input"
                                  id="setEmail"
                                  value="steven@meridian.com"
                                />
                              </div>
                              <div class="field">
                                <label for="setCountry" class="field__label"
                                  >Country of residence</label
                                >
                                <select
                                  class="select"
                                  id="setCountry"
                                  data-stisla-select
                                  data-placeholder="Select country"
                                >
                                  <option value=""></option>
                                  <option value="us" selected>United States</option>
                                  <option value="gb">United Kingdom</option>
                                  <option value="id">Indonesia</option>
                                  <option value="sg">Singapore</option>
                                </select>
                              </div>
                              <div class="flex justify-end mt-2">
                                <button type="button" class="button button--primary">
                                  Save Changes
                                </button>
                              </div>
                            </div>
                          </div>
                        </section>

                        <section class="flex flex-col gap-3">
                          <div class="flex flex-col gap-1">
                            <h2 class="page__section-title">Appearance</h2>
                          </div>
                          <div class="card">
                            <ul class="list-group list-group--seamless">
                              <li class="media">
                                <div class="media__content">
                                  <label class="media__title" for="setTheme">Theme</label>
                                  <small class="media__description"
                                    >Override your browser's preferred theme setting.</small
                                  >
                                </div>
                                <div class="media__action">
                                  <select
                                    class="select select--sm max-w-36"
                                    id="setTheme"
                                    aria-label="Theme"
                                  >
                                    <option selected>System</option>
                                    <option>Light</option>
                                    <option>Dark</option>
                                  </select>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </section>
                      </div>
                    </div>

                    <div class="tabs__panel" data-value="notifications" data-state="inactive">
                      <section class="flex flex-col gap-3">
                        <div class="flex flex-col gap-1">
                          <h2 class="page__section-title">Notifications</h2>
                          <p class="page__section-description">
                            Choose which emails Meridian sends you.
                          </p>
                        </div>
                        <div class="card">
                          <ul class="list-group list-group--seamless">
                            <li class="media">
                              <div class="media__content">
                                <label class="media__title" for="notifOrders">Order updates</label>
                                <small class="media__description"
                                  >When an order is placed or changes status.</small
                                >
                              </div>
                              <div class="media__action">
                                <input
                                  class="switch switch--lg"
                                  type="checkbox"
                                  role="switch"
                                  id="notifOrders"
                                  checked
                                />
                              </div>
                            </li>

                            <li class="media">
                              <div class="media__content">
                                <label class="media__title" for="notifCustomer"
                                  >New customers</label
                                >
                                <small class="media__description"
                                  >When someone creates their first order.</small
                                >
                              </div>
                              <div class="media__action">
                                <input
                                  class="switch switch--lg"
                                  type="checkbox"
                                  role="switch"
                                  id="notifCustomer"
                                  checked
                                />
                              </div>
                            </li>

                            <li class="media">
                              <div class="media__content">
                                <label class="media__title" for="notifStock"
                                  >Low stock alerts</label
                                >
                                <small class="media__description"
                                  >When a product drops below its threshold.</small
                                >
                              </div>
                              <div class="media__action">
                                <input
                                  class="switch switch--lg"
                                  type="checkbox"
                                  role="switch"
                                  id="notifStock"
                                />
                              </div>
                            </li>

                            <li class="media">
                              <div class="media__content">
                                <label class="media__title" for="notifReport">Weekly summary</label>
                                <small class="media__description"
                                  >A digest of sales and traffic every Monday.</small
                                >
                              </div>
                              <div class="media__action">
                                <input
                                  class="switch switch--lg"
                                  type="checkbox"
                                  role="switch"
                                  id="notifReport"
                                  checked
                                />
                              </div>
                            </li>
                          </ul>
                        </div>
                      </section>
                    </div>

                    <div class="tabs__panel" data-value="security" data-state="inactive">
                      <div class="flex flex-col gap-6">
                        <section class="flex flex-col gap-3">
                          <div class="flex flex-col gap-1">
                            <h2 class="page__section-title">Login methods</h2>
                            <p class="page__section-description">
                              Ways you can sign in to your account.
                            </p>
                          </div>
                          <div class="card">
                            <ul class="list-group list-group--seamless">
                              <li class="media">
                                <span class="media__figure"
                                  ><svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="1em"
                                    height="1em"
                                    viewBox="0 0 24 24"
                                    aria-hidden="true"
                                  >
                                    <g fill="none" stroke="currentColor" stroke-width="1.5">
                                      <path
                                        d="M2 12c0-3.771 0-5.657 1.172-6.828S6.229 4 10 4h4c3.771 0 5.657 0 6.828 1.172S22 8.229 22 12s0 5.657-1.172 6.828S17.771 20 14 20h-4c-3.771 0-5.657 0-6.828-1.172S2 15.771 2 12Z"
                                      />
                                      <path
                                        stroke-linecap="round"
                                        d="m6 8l2.159 1.8c1.837 1.53 2.755 2.295 3.841 2.295s2.005-.765 3.841-2.296L18 8"
                                      />
                                    </g></svg
                                ></span>
                                <div class="media__content">
                                  <div class="media__title">steven@meridian.com</div>
                                  <small class="media__description"
                                    >Sign in with one-time codes sent to your email.</small
                                  >
                                </div>
                                <div class="media__action">
                                  <button
                                    type="button"
                                    class="button button--outline button--neutral button--sm"
                                  >
                                    Change email
                                  </button>
                                </div>
                              </li>
                              <li class="media">
                                <span class="media__figure"
                                  ><svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="1em"
                                    height="1em"
                                    viewBox="0 0 24 24"
                                    aria-hidden="true"
                                  >
                                    <g fill="none" stroke="currentColor" stroke-width="1.5">
                                      <path
                                        d="M2 16c0-2.828 0-4.243.879-5.121C3.757 10 5.172 10 8 10h8c2.828 0 4.243 0 5.121.879C22 11.757 22 13.172 22 16s0 4.243-.879 5.121C20.243 22 18.828 22 16 22H8c-2.828 0-4.243 0-5.121-.879C2 20.243 2 18.828 2 16Z"
                                      />
                                      <circle cx="12" cy="16" r="2" />
                                      <path stroke-linecap="round" d="M6 10V8a6 6 0 1 1 12 0v2" />
                                    </g></svg
                                ></span>
                                <div class="media__content">
                                  <div class="media__title">Password</div>
                                  <small class="media__description"
                                    >Last changed 3 months ago.</small
                                  >
                                </div>
                                <div class="media__action">
                                  <button
                                    type="button"
                                    class="button button--outline button--neutral button--sm"
                                  >
                                    Change
                                  </button>
                                </div>
                              </li>
                              <li class="media">
                                <span class="media__figure"
                                  ><svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="1em"
                                    height="1em"
                                    viewBox="0 0 24 24"
                                    aria-hidden="true"
                                  >
                                    <path
                                      fill="currentColor"
                                      d="m18.977 5.023l.53-.53zm0 9.767l.53.53zM7.146 12.668l-.53-.53zM3.433 16.38l.53.53zm4.187 4.187l-.53-.53zm3.712-3.713l-.53-.53zm-8.323.736l-.745.083zm.232 2.089l-.745.083zm1.08 1.08l-.083.745zm2.089.232l.082-.745zm-2.886-.723l.53-.53zm.208.208l-.53.53zm3.672-8.845l-.726.187zm4.965 4.965l-.187.726zm-4.73.467a.75.75 0 1 0-1.055 1.066zm5.477-6.18a1.25 1.25 0 0 1 0-1.767l-1.06-1.06a2.75 2.75 0 0 0 0 3.889zm1.768 0a1.25 1.25 0 0 1-1.768 0l-1.06 1.062a2.75 2.75 0 0 0 3.889 0zm0-1.767a1.25 1.25 0 0 1 0 1.768l1.06 1.06a2.75 2.75 0 0 0 0-3.889zm1.06-1.06a2.75 2.75 0 0 0-3.889 0l1.061 1.06a1.25 1.25 0 0 1 1.768 0zm2.503-2.503a6.157 6.157 0 0 1 0 8.707l1.06 1.06a7.657 7.657 0 0 0 0-10.827zm1.06-1.06a7.657 7.657 0 0 0-10.828 0l1.06 1.06a6.157 6.157 0 0 1 8.708 0zM6.615 12.138L2.903 15.85l1.06 1.06l3.714-3.71zm1.535 8.959l1.24-1.24l-1.06-1.061l-1.24 1.24zm1.24-1.24l2.472-2.472l-1.06-1.061l-2.472 2.472zm-7.126-2.184l.232 2.089l1.49-.166l-.232-2.088zm1.974 3.831l2.089.232l.165-1.49l-2.088-.232zm-1.244-.706l.208.208l1.06-1.06l-.208-.209zm1.41-.784a.24.24 0 0 1-.141-.068l-1.061 1.06c.279.28.644.455 1.036.498zm-1.908-.252c.043.392.219.757.498 1.036l1.06-1.06a.24.24 0 0 1-.067-.142zm4.593.274a.73.73 0 0 1-.597.21l-.165 1.49a2.23 2.23 0 0 0 1.823-.64zM2.903 15.85a2.23 2.23 0 0 0-.64 1.823l1.491-.165a.73.73 0 0 1 .21-.597zm5.228-4.405A6.15 6.15 0 0 1 9.74 5.553l-1.06-1.06a7.65 7.65 0 0 0-2.002 7.325zm10.316 2.815a6.15 6.15 0 0 1-5.892 1.61l-.373 1.452a7.65 7.65 0 0 0 7.325-2.001zm-6.585 3.124c.056-.055.17-.1.32-.062l.373-1.453c-.588-.15-1.27-.028-1.753.455zM7.676 13.2c.483-.483.606-1.166.455-1.754l-1.453.373c.038.15-.007.264-.063.32zm1.711 5.594l-1.749-1.73l-1.054 1.066l1.749 1.73z"
                                    /></svg
                                ></span>
                                <div class="media__content">
                                  <div class="media__title">Passkey</div>
                                  <small class="media__description"
                                    >Use Face ID, Touch ID, or a security key.</small
                                  >
                                </div>
                                <div class="media__action">
                                  <button
                                    type="button"
                                    class="button button--outline button--neutral button--sm"
                                  >
                                    Add passkey
                                  </button>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </section>

                        <section class="flex flex-col gap-3">
                          <div class="flex flex-col gap-1">
                            <h2 class="page__section-title">Two-factor authentication</h2>
                            <p class="page__section-description">
                              Add an extra layer of security when you sign in.
                            </p>
                          </div>
                          <div class="card">
                            <ul class="list-group list-group--seamless">
                              <li class="media">
                                <span class="media__figure"
                                  ><svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="1em"
                                    height="1em"
                                    viewBox="0 0 24 24"
                                    aria-hidden="true"
                                  >
                                    <g fill="none" stroke="currentColor" stroke-width="1.5">
                                      <path
                                        d="M4 10c0-3.771 0-5.657 1.172-6.828S8.229 2 12 2s5.657 0 6.828 1.172S20 6.229 20 10v4c0 3.771 0 5.657-1.172 6.828S15.771 22 12 22s-5.657 0-6.828-1.172S4 17.771 4 14z"
                                      />
                                      <path stroke-linecap="round" d="M15 19H9" />
                                    </g></svg
                                ></span>
                                <div class="media__content">
                                  <div class="media__title">Authenticator app</div>
                                  <small class="media__description"
                                    >Use an app like 1Password or Authy to generate codes.</small
                                  >
                                </div>
                                <div class="media__action">
                                  <button type="button" class="button button--primary button--sm">
                                    Set up
                                  </button>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </section>
                      </div>
                    </div>

                    <div class="tabs__panel" data-value="danger" data-state="inactive">
                      <section class="flex flex-col gap-3">
                        <div class="flex flex-col gap-1">
                          <h2 class="page__section-title">Danger zone</h2>
                          <p class="page__section-description">
                            Irreversible actions for your account. Proceed with care.
                          </p>
                        </div>
                        <div class="card">
                          <ul class="list-group list-group--seamless">
                            <li class="media">
                              <div class="media__content">
                                <div class="media__title">Delete account</div>
                                <small class="media__description"
                                  >Permanently remove your account and all of its data.</small
                                >
                              </div>
                              <div class="media__action">
                                <button
                                  type="button"
                                  class="button button--outline button--danger button--sm"
                                  data-stisla-dialog-trigger="deleteAccount"
                                >
                                  Delete account
                                </button>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </section>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div
          class="dialog dialog--sm"
          id="deleteAccount"
          data-stisla-dialog
          data-state="closed"
          role="alertdialog"
          aria-modal="true"
          aria-labelledby="deleteAccountLabel"
          aria-describedby="deleteAccountDesc"
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
                <h3 class="dialog__title mb-1" id="deleteAccountLabel">Delete your account?</h3>
                <p class="text-muted-foreground" id="deleteAccountDesc">
                  This permanently removes your account, store, and all data. This can't be undone.
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
                  Delete account
                </button>
              </div>
            </div>
@endsection
