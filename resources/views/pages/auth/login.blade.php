@extends('layouts.app')

@section('title', 'Espace Client - Connexion')
@section('description', 'Connectez-vous à votre espace client BizzTrack International')

@section('content')
    <!-- Hero Section -->
    <section class="py-16 bg-gradient-to-br from-primary-500 to-primary-700 text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-black bg-opacity-20"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                Espace Client
            </h1>
            <p class="text-xl mb-8 max-w-3xl mx-auto text-white text-opacity-90">
                Connectez-vous pour accéder à votre tableau de bord et gérer vos véhicules.
            </p>
        </div>
    </section>

    <!-- Login Form Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-xl shadow-lg p-8">
                <div class="text-center mb-8">
                    <x-logo class="mx-auto mb-4" />
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">
                        Connexion
                    </h2>
                    <p class="text-gray-600">
                        Entrez vos identifiants pour accéder à votre espace client.
                    </p>
                </div>

                <form action="{{ route('login') }}" method="POST" class="space-y-6">
                    @csrf

                    <!-- Login Field -->
                    <x-forms.input 
                        name="login"
                        label="Identifiant *"
                        placeholder="Votre identifiant"
                        required
                        :value="old('login')"
                        :error="$errors->first('login')"
                        icon='<svg fill="none" stroke="currentColor" viewBox="0 0 24 24" class="w-5 h-5 text-gray-400"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>'
                    />

                    <!-- Password Field -->
                    <x-forms.input 
                        name="password"
                        label="Mot de passe *"
                        type="password"
                        placeholder="Votre mot de passe"
                        required
                        :value="old('password')"
                        :error="$errors->first('password')"
                        icon='<svg fill="none" stroke="currentColor" viewBox="0 0 24 24" class="w-5 h-5 text-gray-400"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"/></svg>'
                    />

                    <!-- SAT Radio Buttons -->
                    <div class="mb-6">
                        <label class="form-label">
                            Sélectionnez votre SAT *
                        </label>
                        <div class="flex gap-6 mt-2">
                            <div class="flex items-center gap-2">
                                <input 
                                    type="radio"
                                    id="sat1"
                                    name="sat"
                                    value="sat1"
                                    {{ old('sat', 'sat1') === 'sat1' ? 'checked' : '' }}
                                    required
                                    class="w-5 h-5 border-gray-300 text-primary-500 focus:ring-primary-500 focus:ring-2"
                                >
                                <label for="sat1" class="text-sm font-medium text-gray-700 cursor-pointer">
                                    SAT 1
                                </label>
                            </div>
                            <div class="flex items-center gap-2">
                                <input 
                                    type="radio"
                                    id="sat2"
                                    name="sat"
                                    value="sat2"
                                    {{ old('sat') === 'sat2' ? 'checked' : '' }}
                                    class="w-5 h-5 border-gray-300 text-primary-500 focus:ring-primary-500 focus:ring-2"
                                >
                                <label for="sat2" class="text-sm font-medium text-gray-700 cursor-pointer">
                                    SAT 2
                                </label>
                            </div>
                        </div>
                        @error('sat')
                            <p class="form-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center justify-between">
                        <x-forms.checkbox 
                            name="remember"
                            label="Se souvenir de moi"
                            value="1"
                            :checked="old('remember') === '1'"
                        />
                        
                        <a 
                            href="#" 
                            class="text-sm text-primary-500 hover:text-primary-600 font-medium transition-colors"
                        >
                            Mot de passe oublié ?
                        </a>
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-4">
                        <x-buttons.primary type="submit" size="lg" class="w-full">
                            Se Connecter
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                            </svg>
                        </x-buttons.primary>
                    </div>
                </form>

                <!-- Divider -->
                <div class="relative my-8">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-200"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-4 bg-white text-gray-500">
                            Ou
                        </span>
                    </div>
                </div>

                <!-- Alternative Actions -->
                <div class="space-y-4">
                    <div class="text-center">
                        <p class="text-gray-600 mb-4">
                            Vous n'avez pas encore de compte ?
                        </p>
                        <x-buttons.secondary href="#" class="w-full">
                            Demander un Compte
                        </x-buttons.secondary>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    Votre Espace Client vous permet de :
                </h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="card p-6 text-center">
                    <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">
                        Suivre vos véhicules
                    </h3>
                    <p class="text-gray-600 text-sm">
                        Visualisez la position de vos véhicules en temps réel sur une carte interactive.
                    </p>
                </div>
                
                <div class="card p-6 text-center">
                    <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">
                        Consulter les rapports
                    </h3>
                    <p class="text-gray-600 text-sm">
                        Accédez à tous vos rapports et analyses de données de flotte.
                    </p>
                </div>
                
                <div class="card p-6 text-center">
                    <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">
                        Recevoir des alertes
                    </h3>
                    <p class="text-gray-600 text-sm">
                        Configurez et recevez des alertes personnalisées pour vos véhicules.
                    </p>
                </div>
                
                <div class="card p-6 text-center">
                    <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">
                        Gérer votre compte
                    </h3>
                    <p class="text-gray-600 text-sm">
                        Modifiez vos informations, gérez vos utilisateurs et paramétrez vos préférences.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-xl shadow-lg p-8 text-center">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    Vous n'avez pas encore de compte ?
                </h2>
                <p class="text-gray-600 mb-6 max-w-2xl mx-auto">
                    Découvrez comment nos solutions de géolocalisation peuvent optimiser votre gestion de flotte.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <x-buttons.primary href="/devis">
                        Obtenir un Devis
                    </x-buttons.primary>
                    <x-buttons.secondary href="/contact">
                        Nous Contacter
                    </x-buttons.secondary>
                </div>
            </div>
        </div>
    </section>
@endsection
