@extends('layouts.app')

@section('title', 'Tarifs')
@section('description', 'Découvrez nos tarifs pour les solutions de géolocalisation BizzTrack International')

@section('content')
    <!-- Hero Section -->
    <section class="py-16 bg-gradient-to-br from-primary-500 to-primary-700 text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-black bg-opacity-20"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                Nos Tarifs
            </h1>
            <p class="text-xl mb-8 max-w-3xl mx-auto text-white text-opacity-90">
                Des solutions adaptées à tous les budgets. Nous proposons des tarifs compétitifs pour répondre à vos besoins spécifiques.
            </p>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="inline-block bg-primary-100 text-primary-600 text-sm font-semibold px-4 py-1 rounded-full mb-4">
                    Tarifs Transparents
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Des solutions pour tous les besoins
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Nos tarifs dépendent du nombre de véhicules, des services choisis et des options sélectionnées. 
                    Contactez-nous pour obtenir un devis personnalisé.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Basic Plan -->
                <div class="card card-hover p-8 relative">
                    <div class="absolute top-0 left-0 w-full h-2 bg-primary-500"></div>
                    <div class="text-center mb-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">
                            Pack Essentiel
                        </h3>
                        <p class="text-gray-600 mb-4">
                            Solution de base pour les petites flottes
                        </p>
                        <div class="text-4xl font-bold text-primary-500 mb-2">
                            À partir de
                        </div>
                        <div class="text-4xl font-bold text-gray-800 mb-2">
                            15€ <span class="text-lg font-normal text-gray-500">/véhicule/mois</span>
                        </div>
                    </div>
                    
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-primary-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-gray-700">Géolocalisation en temps réel</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-primary-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-gray-700">Historique des trajets (30 jours)</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-primary-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-gray-700">Alertes de base (vitesse, géofencing)</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-primary-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-gray-700">Support par email</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-primary-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-gray-700">Accès à l'espace client</span>
                        </li>
                    </ul>
                    
                    <div class="text-center">
                        <x-buttons.primary href="/devis" class="w-full">
                            Obtenir un Devis
                        </x-buttons.primary>
                    </div>
                </div>
                
                <!-- Professional Plan -->
                <div class="card card-hover p-8 relative border-2 border-primary-500">
                    <div class="absolute top-0 left-0 w-full h-2 bg-primary-500"></div>
                    <div class="text-center mb-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">
                            Pack Professionnel
                        </h3>
                        <p class="text-gray-600 mb-4">
                            Solution complète pour les flottes moyennes
                        </p>
                        <div class="text-4xl font-bold text-primary-500 mb-2">
                            À partir de
                        </div>
                        <div class="text-4xl font-bold text-gray-800 mb-2">
                            25€ <span class="text-lg font-normal text-gray-500">/véhicule/mois</span>
                        </div>
                    </div>
                    
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-primary-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-gray-700">Tout le Pack Essentiel</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-primary-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-gray-700">Historique illimité</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-primary-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-gray-700">Alertes avancées personnalisables</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-primary-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-gray-700">Tableaux de bord et rapports avancés</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-primary-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-gray-700">Support téléphonique prioritaire</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-primary-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-gray-700">Intégration API de base</span>
                        </li>
                    </ul>
                    
                    <div class="text-center">
                        <x-buttons.primary href="/devis" class="w-full">
                            Obtenir un Devis
                        </x-buttons.primary>
                    </div>
                </div>
                
                <!-- Enterprise Plan -->
                <div class="card card-hover p-8 relative">
                    <div class="absolute top-0 left-0 w-full h-2 bg-primary-500"></div>
                    <div class="text-center mb-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">
                            Pack Entreprise
                        </h3>
                        <p class="text-gray-600 mb-4">
                            Solution sur mesure pour les grandes flottes
                        </p>
                        <div class="text-4xl font-bold text-primary-500 mb-2">
                            Sur Devis
                        </div>
                        <div class="text-lg font-normal text-gray-500 mb-2">
                            Contactez-nous
                        </div>
                    </div>
                    
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-primary-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-gray-700">Tout le Pack Professionnel</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-primary-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-gray-700">Modules optionnels inclus</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-primary-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-gray-700">Développements sur mesure</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-primary-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-gray-700">Intégration API complète</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-primary-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-gray-700">Support dédié 24/7</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-primary-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-gray-700">Formation complète incluse</span>
                        </li>
                    </ul>
                    
                    <div class="text-center">
                        <x-buttons.primary href="/devis" class="w-full">
                            Obtenir un Devis
                        </x-buttons.primary>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modules Pricing Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="inline-block bg-primary-100 text-primary-600 text-sm font-semibold px-4 py-1 rounded-full mb-4">
                    Modules Optionnels
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Tarifs des Modules Additionnels
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Ajoutez des fonctionnalités avancées à votre solution de géolocalisation.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="card p-6">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 bg-tachygraph-500 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800">
                            Module Tachygraphe
                        </h3>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Gestion et suivi complet des tachygraphes numériques.
                    </p>
                    <div class="text-2xl font-bold text-primary-500 mb-4">
                        +10€ /véhicule/mois
                    </div>
                    <x-buttons.outline href="/services#modules">
                        En savoir plus
                    </x-buttons.outline>
                </div>
                
                <div class="card p-6">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 bg-payroll-500 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800">
                            Module Payroll
                        </h3>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Calcul automatique des salaires basé sur les relevés réels.
                    </p>
                    <div class="text-2xl font-bold text-primary-500 mb-4">
                        +15€ /véhicule/mois
                    </div>
                    <x-buttons.outline href="/services#modules">
                        En savoir plus
                    </x-buttons.outline>
                </div>
                
                <div class="card p-6">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 bg-missions-500 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800">
                            Module Missions & Tournées
                        </h3>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Optimisation des tournées de livraison.
                    </p>
                    <div class="text-2xl font-bold text-primary-500 mb-4">
                        +20€ /véhicule/mois
                    </div>
                    <x-buttons.outline href="/services#modules">
                        En savoir plus
                    </x-buttons.outline>
                </div>
                
                <div class="card p-6">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 bg-pto-500 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800">
                            Module Power Take Off
                        </h3>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Suivi de la prise de charge pour les véhicules utilitaires.
                    </p>
                    <div class="text-2xl font-bold text-primary-500 mb-4">
                        +8€ /véhicule/mois
                    </div>
                    <x-buttons.outline href="/services#modules">
                        En savoir plus
                    </x-buttons.outline>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="inline-block bg-primary-100 text-primary-600 text-sm font-semibold px-4 py-1 rounded-full mb-4">
                    FAQ
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Questions Fréquentes
                </h2>
                <p class="text-xl text-gray-600">
                    Vous avez des questions sur nos tarifs ? Voici les réponses aux questions les plus courantes.
                </p>
            </div>
            
            <div class="space-y-6">
                <div class="card p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">
                        Y a-t-il des frais d'installation ?
                    </h3>
                    <p class="text-gray-600">
                        Oui, des frais d'installation peuvent s'appliquer selon le type de boîtier et la complexité de l'installation. Ces frais sont généralement compris entre 50€ et 200€ par véhicule. Contactez-nous pour obtenir un devis précis.
                    </p>
                </div>
                
                <div class="card p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">
                        Proposez-vous des remises pour les grandes flottes ?
                    </h3>
                    <p class="text-gray-600">
                        Oui, nous offrons des remises pour les flottes de plus de 25 véhicules. Le pourcentage de remise dépend du nombre total de véhicules. Contactez-nous pour discuter des conditions spéciales pour votre flotte.
                    </p>
                </div>
                
                <div class="card p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">
                        Puis-je essayer votre solution avant de m'engager ?
                    </h3>
                    <p class="text-gray-600">
                        Oui, nous proposons une période d'essai de 14 jours sans engagement pour que vous puissiez tester pleinement notre solution. Contactez-nous pour organiser une démonstration et un essai gratuit.
                    </p>
                </div>
                
                <div class="card p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">
                        Quels sont les modes de paiement acceptés ?
                    </h3>
                    <p class="text-gray-600">
                        Nous acceptons les paiements par virement bancaire, carte de crédit (Visa, MasterCard) et prélèvement automatique (SEPA). Les factures sont émises mensuellement ou annuellement selon votre préférence.
                    </p>
                </div>
                
                <div class="card p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">
                        Puis-je résilier mon abonnement à tout moment ?
                    </h3>
                    <p class="text-gray-600">
                        Oui, vous pouvez résilier votre abonnement à tout moment avec un préavis de 30 jours. Il n'y a pas de frais de résiliation. Nous nous engageons à vous rembourser tout montant payé d'avance pour la période non utilisée.
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
                    Prêt à commencer ?
                </h2>
                <p class="text-gray-600 mb-6 max-w-2xl mx-auto">
                    Obtenez un devis personnalisé adapté à vos besoins spécifiques. Notre équipe est à votre disposition pour répondre à toutes vos questions.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <x-buttons.primary href="/devis" size="lg">
                        Obtenir un Devis
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </x-buttons.primary>
                    <x-buttons.secondary href="/contact" size="lg">
                        Nous Contacter
                    </x-buttons.secondary>
                </div>
            </div>
        </div>
    </section>
@endsection
