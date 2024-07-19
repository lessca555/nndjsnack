<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<style>
    .offcanvas-menu {
        transition: transform 0.3s ease-in-out;
        transform: translateX(-100%);
    }
    .offcanvas-menu.open {
        transform: translateX(0);
    }
</style>

@role('Admin')

<nav class="bg-black text-white shadow-md w-full z-10 top-0">
    <div class="container mx-auto px-4 py-2 flex justify-between items-center">
        <div class="flex items-center space-x-4">
            <button id="menu-button" class="focus:outline-none flex items-center text-white">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <i class="fa-solid fa-bars"></i>
                </svg>
            </button>
            <a href="{{ route('dashboard') }}" class="text-xl font-bold">Snack</a>
        </div>

    </div>
</nav>


<div id="offcanvas-menu" class="offcanvas-menu fixed inset-y-0 left-0 w-64 bg-white shadow-lg z-20">
    <div class="flex justify-end p-4">
        <button id="close-button" class="text-gray-800 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
    <nav class="flex flex-col p-4">
        <x-dash-links :href="route('dashboard')" :active="request()->routeIs('dashboard')">Dashboard</x-dash-links>
        <x-dash-links :href="route('profile')" :active="request()->routeIs('profile')">Profile</x-dash-links>
        <x-dash-links :href="route('items')" :active="request()->routeIs('items')">Items</x-dash-links>
        <x-dash-links>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="text-black hover:text-white w-full text-start">Logout</button>
            </form>
        </x-dash-link>
    </nav>
</div>

@elserole('Sales')
<nav class="bg-black text-white shadow-md w-full z-10 top-0">
    <div class="container mx-auto px-4 py-2 flex justify-between items-center">
        <div class="flex items-center space-x-4">
            <button id="menu-button" class="focus:outline-none flex items-center text-white">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <i class="fa-solid fa-bars"></i>
                </svg>
            </button>
            <a href="{{ route('dashboard') }}" class="text-xl font-bold">Snack</a>
        </div>

    </div>
</nav>


<div id="offcanvas-menu" class="offcanvas-menu fixed inset-y-0 left-0 w-64 bg-white shadow-lg z-20">
    <div class="flex justify-end p-4">
        <button id="close-button" class="text-gray-800 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
    <nav class="flex flex-col p-4">
        <x-dash-links :href="route('dashboard')" :active="request()->routeIs('dashboard')">Dashboard</x-dash-links>
        <x-dash-links :href="route('profile')" :active="request()->routeIs('profile')">Profile</x-dash-links>
        <x-dash-links>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="text-black hover:text-white w-full text-start">Logout</button>
            </form>
        </x-dash-link>
    </nav>
</div>

@elserole('User')
<nav class="bg-black text-white shadow-md w-full z-10 top-0">
    <div class="container mx-auto px-4 py-2 flex justify-between items-center">
        <div class="flex items-center space-x-4">
            <button id="menu-button" class="focus:outline-none flex items-center text-white">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <i class="fa-solid fa-bars"></i>
                </svg>
            </button>
            <a href="{{ route('dashboard') }}" class="text-xl font-bold">Snack</a>
        </div>

    </div>
</nav>


<div id="offcanvas-menu" class="offcanvas-menu fixed inset-y-0 left-0 w-64 bg-white shadow-lg z-20">
    <div class="flex justify-end p-4">
        <button id="close-button" class="text-gray-800 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
    <nav class="flex flex-col p-4">
        <x-dash-links :href="route('dashboard')" :active="request()->routeIs('dashboard')">Dashboard</x-dash-links>
        <x-dash-links :href="route('profile')" :active="request()->routeIs('profile')">Profile</x-dash-links>
        <x-dash-links>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="text-black hover:text-white w-full text-start">Logout</button>
            </form>
        </x-dash-link>
    </nav>
</div>
@endrole


