@extends('layouts.app')

@section('title', 'Confirmation de Devis')
@section('description', 'Merci pour votre demande de devis. Nous avons bien reçu votre demande.')

@section('content')
    <!-- Hero Section -->
    <section class="py-16 bg-gradient-to-br from-primary-500 to-primary-700 text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-black bg-opacity-20"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <svg class="w-16 h-16 text-white text-opacity-50 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
            </svg>
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                Merci pour votre demande !
            </h1>
            <p class="text-xl mb-8 max-w-3xl mx-auto text-white text-opacity-90">
                Nous avons bien reçu votre demande de devis.
            </p>
        </div>
    </section>

    <!-- Confirmation Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-xl shadow-lg p-8 text-center">
                <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    Votre demande a été envoyée avec succès
                </h2>
                
                <p class="text-gray-600 mb-8">
                    Merci pour votre message. Nous avons bien reçu votre demande, un membre de notre équipe commerciale vous recontactera dans les plus brefs délais.
                </p>

                <div class="bg-gray-50 rounded-xl p-6 mb-8 text-left">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">
                        Récapitulatif de votre demande :
                    </h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <p class="text-sm text-gray-500 mb-1">Entreprise</p>
                            <p class="font-medium text-gray-800">{{ $quoteData['company_name'] ?? 'Non spécifié' }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500 mb-1">Contact</p>
                            <p class="font-medium text-gray-800">{{ $quoteData['contact_name'] ?? 'Non spécifié' }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500 mb-1">Email</p>
                            <p class="font-medium text-gray-800">{{ $quoteData['email'] ?? 'Non spécifié' }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500 mb-1">Téléphone</p>
                            <p class="font-medium text-gray-800">{{ $quoteData['phone'] ?? 'Non spécifié' }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500 mb-1">Nombre de véhicules</p>
                            <p class="font-medium text-gray-800">{{ $quoteData['vehicle_count'] ?? 'Non spécifié' }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500 mb-1">Type de véhicules</p>
                            <p class="font-medium text-gray-800">{{ $quoteData['vehicle_type'] ?? 'Non spécifié' }}</p>
                        </div>
                    </div>
                    
                    @if(!empty($quoteData['services']))
                        <div class="mt-6">
                            <p class="text-sm text-gray-500 mb-2">Services demandés</p>
                            <div class="flex flex-wrap gap-2">
                                @foreach($quoteData['services'] as $service)
                                    <span class="bg-primary-100 text-primary-600 text-sm font-medium px-3 py-1 rounded-full">
                                        {{ ucfirst($service) }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>

                <div class="mb-8">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">
                        Et après ?
                    </h3>
                    <div class="space-y-4 text-left">
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-primary-100 rounded-full flex items-center justify-center">
                                <span class="text-primary-500 font-bold">1</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Confirmation par Email</h4>
                                <p class="text-gray-600 text-sm">Vous allez recevoir un email de confirmation à l'adresse {{ $quoteData['email'] ?? 'que vous avez indiquée' }}.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-primary-100 rounded-full flex items-center justify-center">
                                <span class="text-primary-500 font-bold">2</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Analyse de votre demande</h4>
                                <p class="text-gray-600 text-sm">Notre équipe commerciale analyse vos besoins et prépare une offre personnalisée.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-primary-100 rounded-full flex items-center justify-center">
                                <span class="text-primary-500 font-bold">3</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Contact sous 24-48h</h4>
                                <p class="text-gray-600 text-sm">Un membre de notre équipe vous contactera pour discuter de votre projet et vous proposer une solution adaptée.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <x-buttons.primary href="/">
                        Retour à l'Accueil
                    </x-buttons.primary>
                    <x-buttons.secondary href="/services">
                        Découvrir nos Services
                    </x-buttons.secondary>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Info Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    Besoin d'une réponse plus rapide ?
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    N'hésitez pas à nous contacter directement par téléphone ou email.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
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
                        123 Rue de l'Industrie, Luxembourg
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
