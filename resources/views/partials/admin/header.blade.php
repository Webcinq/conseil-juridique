<header class="bg-white shadow-sm border-b border-gray-200 px-4 md:px-8 py-4">
    <div class="flex items-center justify-between">
        <div class="ml-12 md:ml-0">
            <h1 class="text-2xl font-semibold text-gray-900">@yield('page-title', 'Dashboard Overview')</h1>
            <p class="text-sm text-gray-600 mt-1">@yield('breadcrumb', 'Home / Dashboard')</p>
        </div>
        <div class="flex items-center space-x-4">
            <div class="text-right hidden sm:block">
                <p class="text-sm font-medium text-gray-900">{{ auth()->user()->name ?? 'John Anderson' }}</p>
                <p class="text-xs text-gray-500">Administrator</p>
            </div>
            <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center">
                <span class="text-white font-medium text-sm">{{ strtoupper(substr(auth()->user()->name ?? 'JA', 0, 2)) }}</span>
            </div>
        </div>
    </div>
</header>