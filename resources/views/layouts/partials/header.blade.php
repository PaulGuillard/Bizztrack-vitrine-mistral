<header class="bg-white border-b border-gray-200 shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="/" class="flex items-center gap-2">
                    <x-logo />
                </a>
            </div>
            
            <!-- Navigation Desktop -->
            <nav class="hidden md:flex space-x-8">
                <a 
                    href="/" 
                    class="text-gray-700 hover:text-primary-500 px-3 py-2 text-sm font-medium transition-colors {{ request()->is('/') ? 'text-primary-500' : '' }}"
                >
                    {{ __('navigation.home') }}
                </a>
                <a 
                    href="/services" 
                    class="text-gray-700 hover:text-primary-500 px-3 py-2 text-sm font-medium transition-colors {{ request()->is('services*') ? 'text-primary-500' : '' }}"
                >
                    {{ __('navigation.services') }}
                </a>
                <a 
                    href="/tarifs" 
                    class="text-gray-700 hover:text-primary-500 px-3 py-2 text-sm font-medium transition-colors {{ request()->is('tarifs*') ? 'text-primary-500' : '' }}"
                >
                    {{ __('navigation.pricing') }}
                </a>
                <a 
                    href="/contact" 
                    class="text-gray-700 hover:text-primary-500 px-3 py-2 text-sm font-medium transition-colors {{ request()->is('contact*') ? 'text-primary-500' : '' }}"
                >
                    {{ __('navigation.contact') }}
                </a>
            </nav>
            
            <!-- Actions -->
            <div class="flex items-center space-x-4">
                <!-- Langues -->
                <div class="flex space-x-1">
                    <a 
                        href="/?lang=fr" 
                        class="text-sm font-medium text-gray-700 hover:text-primary-500 px-2 py-1 rounded transition-colors {{ app()->getLocale() === 'fr' ? 'bg-primary-500 text-white' : '' }}"
                    >
                        FR
                    </a>
                    <a 
                        href="/?lang=en" 
                        class="text-sm font-medium text-gray-700 hover:text-primary-500 px-2 py-1 rounded transition-colors {{ app()->getLocale() === 'en' ? 'bg-primary-500 text-white' : '' }}"
                    >
                        EN
                    </a>
                    <a 
                        href="/?lang=nl" 
                        class="text-sm font-medium text-gray-700 hover:text-primary-500 px-2 py-1 rounded transition-colors {{ app()->getLocale() === 'nl' ? 'bg-primary-500 text-white' : '' }}"
                    >
                        NL
                    </a>
                </div>
                
                <!-- Bouton Espace Client -->
                <a 
                    href="/login" 
                    class="bg-primary-500 hover:bg-primary-600 text-white font-semibold py-2 px-4 rounded-md shadow-sm hover:shadow-md transition-all duration-200 text-sm flex items-center gap-1"
                >
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                    </svg>
                    {{ __('navigation.client_area') }}
                </a>
                
                <!-- Menu Mobile -->
                <button 
                    class="md:hidden p-2 rounded-md text-gray-700 hover:text-primary-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-primary-500"
                    onclick="document.getElementById('mobile-menu').classList.toggle('hidden')"
                >
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Menu Mobile -->
    <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-200">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a 
                href="/" 
                class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-primary-500 hover:bg-gray-50 rounded-md transition-colors"
            >
                {{ __('navigation.home') }}
            </a>
            <a 
                href="/services" 
                class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-primary-500 hover:bg-gray-50 rounded-md transition-colors"
            >
                {{ __('navigation.services') }}
            </a>
            <a 
                href="/tarifs" 
                class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-primary-500 hover:bg-gray-50 rounded-md transition-colors"
            >
                {{ __('navigation.pricing') }}
            </a>
            <a 
                href="/contact" 
                class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-primary-500 hover:bg-gray-50 rounded-md transition-colors"
            >
                {{ __('navigation.contact') }}
            </a>
            <div class="border-t border-gray-200 mt-4 pt-4">
                <a 
                    href="/login" 
                    class="block px-3 py-2 text-base font-medium text-primary-500 bg-primary-50 rounded-md transition-colors flex items-center gap-1"
                >
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                    </svg>
                    {{ __('navigation.client_area') }}
                </a>
            </div>
        </div>
    </div>
</header>
