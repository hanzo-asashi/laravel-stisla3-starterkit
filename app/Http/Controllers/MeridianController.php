<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class MeridianController extends Controller
{
    public function landing(): View
    {
        return view('landing');
    }

    public function index(): View
    {
        return view('dashboard');
    }

    public function blank(): View
    {
        return view('blank');
    }

    public function customers(): View
    {
        return view('customers.index');
    }

    public function forgot(): View
    {
        return view('auth.forgot');
    }

    public function login(): View
    {
        return view('auth.login');
    }

    public function register(): View
    {
        return view('auth.register');
    }

    public function orderDetail(int $id = 10424): View
    {
        return view('orders.detail', compact('id'));
    }

    public function orderNew(): View
    {
        return view('orders.new');
    }

    public function orders(): View
    {
        return view('orders.index');
    }

    public function productNew(): View
    {
        return view('products.new');
    }

    public function products(): View
    {
        return view('products.index');
    }

    public function profile(): View
    {
        return view('profile');
    }

    public function reports(): View
    {
        return view('reports');
    }

    public function settings(): View
    {
        return view('settings');
    }

    public function users(): View
    {
        return view('users.index');
    }
}
