@extends('layouts.app')

@section('body-class', 'bg-gray-50 text-gray-900')

@section('content')
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-slate-800">
            <div class="flex items-center px-6 py-4 bg-slate-900">
                <h1 class="text-xl font-semibold text-white">GlobaleG Admin</h1>
            </div>
            <nav class="mt-6 px-4">
                <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 text-gray-300 hover:text-white">Dashboard</a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1">
            <!-- Header -->
            <header class="bg-white shadow px-6 py-4">
                <h1 class="text-2xl font-semibold">@yield('page-title', 'Dashboard')</h1>
            </header>

            <!-- Content -->
            <main class="p-6">
                @yield('admin-content')
            </main>
        </div>
    </div>
@endsection