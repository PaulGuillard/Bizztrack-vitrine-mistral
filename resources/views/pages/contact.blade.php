@extends('layouts.app')

@section('title', 'Contact')
@section('description', 'Contactez BizzTrack International pour toute question sur nos solutions de géolocalisation')

@section('content')
    <!-- Hero Section -->
    <section class="py-16 bg-gradient-to-br from-primary-500 to-primary-700 text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-black bg-opacity-20"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                Contactez-Nous
            </h1>
            <p class="text-xl mb-8 max-w-3xl mx-auto text-white text-opacity-90">
                Vous avez des questions sur nos solutions de géolocalisation ? Notre équipe est à votre disposition.
            </p>
        </div>
    </section>

    <!-- Contact Info Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="card p-6 text-center">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">
                        Adresse
                    </h3>
                    <p class="text-gray-600">
                        123 Rue de l'Industrie<br>
                        L-1234 Luxembourg<br>
                        Luxembourg
                    </p>
                </div>
                
                <div class="card p-6 text-center">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">
                        Téléphone
                    </h3>
                    <p class="text-gray-600">
                        +352 123 456 789
                    </p>
                </div>
                
                <div class="card p-6 text-center">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">
                        Email
                    </h3>
                    <p class="text-gray-600">
                        info@bizztrack.eu
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-xl shadow-lg p-8">
                <div class="text-center mb-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">
                        Envoyez-nous un Message
                    </h2>
                    <p class="text-gray-600">
                        Remplissez ce formulaire et nous vous répondrons dans les plus brefs délais.
                    </p>
                </div>

                <form action="#" method="POST" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <x-forms.input 
                            name="name"
                            label="Nom *"
                            placeholder="Votre nom"
                            required
                        />
                        
                        <x-forms.input 
                            name="email"
                            label="Email *"
                            type="email"
                            placeholder="votre@email.com"
                            required
                        />
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <x-forms.input 
                            name="phone"
                            label="Téléphone"
                            type="tel"
                            placeholder="+352 123 456 789"
                        />
                        
                        <x-forms.input 
                            name="company"
                            label="Entreprise"
                            placeholder="Nom de votre entreprise"
                        />
                    </div>
                    
                    <x-forms.select 
                        name="subject"
                        label="Sujet *"
                        :options="[
                            'geolocalisation' => 'Géolocalisation',
                            'devis' => 'Demande de devis',
                            'support' => 'Support technique',
                            'information' => 'Demande d\'information',
                            'other' => 'Autre'
                        ]"
                        required
                    />
                    
                    <x-forms.textarea 
                        name="message"
                        label="Votre message *"
                        placeholder="Comment pouvons-nous vous aider ?"
                        required
                        rows="5"
                    />
                    
                    <div class="pt-4">
                        <x-buttons.primary type="submit" size="lg">
                            Envoyer le Message
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </x-buttons.primary>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gray-100 rounded-xl h-96 flex items-center justify-center">
                <div class="text-center">
                    <svg class="w-12 h-12 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    <p class="text-gray-500">
                        Carte interactive à venir
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
                    Vous préférez obtenir un devis directement ?
                </h2>
                <p class="text-gray-600 mb-6 max-w-2xl mx-auto">
                    Remplissez notre formulaire de devis pour recevoir une proposition personnalisée.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <x-buttons.primary href="/devis">
                        Obtenir un Devis
                    </x-buttons.primary>
                    <x-buttons.secondary href="/services">
                        Découvrir nos Services
                    </x-buttons.secondary>
                </div>
            </div>
        </div>
    </section>
@endsection
