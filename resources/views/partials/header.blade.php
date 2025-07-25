<!-- Navigation -->
<nav class="bg-white shadow-lg sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex items-center">
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('accueil') }}" class="flex items-center">
                        <div class="w-10 h-10 gradient-bg rounded-lg flex items-center justify-center">
                            <i class="fas fa-balance-scale text-white text-xl"></i>
                        </div>
                        <span class="ml-3 text-xl font-bold text-gray-900">Global Gestion</span>
                    </a>
                </div>
            </div>
            
            <!-- Navigation Desktop -->
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-8">
                    <a href="{{ route('accueil') }}" 
                       class="@if(request()->routeIs('accueil')) text-blue-600 @else text-gray-700 @endif hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors">
                        Accueil
                    </a>
                    
                    <!-- Dropdown Expertises -->
                    <div class="relative group">
                        <a href="{{ route('expertises.index') }}" 
                           class="@if(request()->routeIs('expertises.*') || request()->routeIs('gestion-comptable') || request()->routeIs('conseil-juridique') || request()->routeIs('conseil-fiscal') || request()->routeIs('entrepreneuriat') || request()->routeIs('recrutement-rh') || request()->routeIs('marketing-digital')) text-blue-600 @else text-gray-700 @endif hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors cursor-pointer">
                            Nos Expertises <i class="fas fa-chevron-down ml-1"></i>
                        </a>
                        <div class="absolute left-0 mt-2 w-64 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                            <div class="py-2">
                                <a href="{{ route('gestion-comptable') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <i class="fas fa-calculator mr-2"></i>Gestion Comptable
                                </a>
                                <a href="{{ route('conseil-juridique') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <i class="fas fa-gavel mr-2"></i>Conseil Juridique
                                </a>
                                <a href="{{ route('conseil-fiscal') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <i class="fas fa-file-invoice-dollar mr-2"></i>Conseil Fiscal
                                </a>
                                <a href="{{ route('entrepreneuriat') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <i class="fas fa-lightbulb mr-2"></i>Conseil en Entrepreneuriat
                                </a>
                                <a href="{{ route('recrutement-rh') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <i class="fas fa-users mr-2"></i>Recrutement & RH
                                </a>
                                <a href="{{ route('marketing-digital') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <i class="fas fa-chart-line mr-2"></i>Marketing Digital
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <a href="{{ route('about') }}" 
                       class="@if(request()->routeIs('about')) text-blue-600 @else text-gray-700 @endif hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors">
                        À propos
                    </a>
                    
                    <a href="{{ route('blog.index') }}" 
                       class="@if(request()->routeIs('blog.*')) text-blue-600 @else text-gray-700 @endif hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors">
                        Blog
                    </a>
                    
                    <a href="{{ route('contact') }}" 
                       class="@if(request()->routeIs('contact')) text-blue-600 @else text-gray-700 @endif hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors">
                        Contact
                    </a>
                </div>
            </div>
            
            <!-- CTA Button -->
            <div class="hidden md:flex items-center space-x-4">
                <a href="{{ route('contact') }}" class="bg-blue-600 text-white px-6 py-2 rounded-lg text-sm font-medium hover:bg-blue-700 transition-colors">
                    Prendre RDV
                </a>
            </div>
            
            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button onclick="toggleMobileMenu()" class="text-gray-500 hover:text-gray-700 focus:outline-none">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
        
        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="hidden md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white border-t">
                <a href="{{ route('accueil') }}" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-blue-600">Accueil</a>
                <a href="{{ route('expertises.index') }}" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-blue-600">Nos Expertises</a>
                <a href="{{ route('about') }}" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-blue-600">À propos</a>
                <a href="{{ route('blog.index') }}" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-blue-600">Blog</a>
                <a href="{{ route('contact') }}" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-blue-600">Contact</a>
                <a href="{{ route('contact') }}" class="block px-3 py-2 text-base font-medium bg-blue-600 text-white rounded-lg text-center mt-4">Prendre RDV</a>
            </div>
        </div>
    </div>
</nav>