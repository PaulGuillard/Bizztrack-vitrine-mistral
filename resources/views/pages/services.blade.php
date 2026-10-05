@extends('layouts.app')

@section('title', 'Nos Services')
@section('description', 'Découvrez tous les services de géolocalisation et solutions connectées proposés par BizzTrack International')

@section('content')
    <!-- Hero Section -->
    <section class="py-20 bg-gradient-to-br from-primary-500 to-primary-700 text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-black bg-opacity-20"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">
                Nos Services
            </h1>
            <p class="text-xl mb-8 max-w-3xl mx-auto text-white text-opacity-90">
                Des solutions complètes de géolocalisation et de gestion de flotte pour les professionnels.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <x-buttons.primary href="#geolocalisation" size="lg">
                    Géolocalisation
                </x-buttons.primary>
                <x-buttons.secondary href="#modules" size="lg">
                    Modules Optionnels
                </x-buttons.secondary>
            </div>
        </div>
    </section>

    <!-- Géolocalisation Section -->
    <section id="geolocalisation" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <span class="inline-block bg-primary-100 text-primary-600 text-sm font-semibold px-4 py-1 rounded-full mb-4">
                        Géolocalisation
                    </span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">
                        Suivi en temps réel de vos véhicules
                    </h2>
                    <p class="text-xl text-gray-600 mb-8">
                        Nos boîtiers de géolocalisation vous permettent de suivre vos véhicules avec une précision optimale, où que vous soyez.
                    </p>
                    
                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-primary-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <p class="text-gray-700">Suivi GPS en temps réel avec une précision de quelques mètres</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-primary-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <p class="text-gray-700">Historique complet des trajets avec export des données</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-primary-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <p class="text-gray-700">Définition de zones géographiques (géofencing) avec alertes</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-primary-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <p class="text-gray-700">Alertes en temps réel pour les excès de vitesse</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-primary-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <p class="text-gray-700">Compatibilité avec tous types de véhicules (voitures, camions, utilitaires)</p>
                        </div>
                    </div>
                    
                    <div class="mt-8">
                        <x-buttons.primary href="/devis">
                            Demander un Devis
                        </x-buttons.primary>
                    </div>
                </div>
                
                <div class="hidden lg:block">
                    <img 
                        src="https://images.unsplash.com/photo-1566577739112-5180d4bf9390?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                        alt="Tableau de bord de géolocalisation"
                        class="rounded-xl shadow-xl w-full h-full object-cover"
                    >
                </div>
            </div>
        </div>
    </section>

    <!-- Analyse & Reporting Section -->
    <section id="analyse" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="hidden lg:block order-2">
                    <img 
                        src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                        alt="Analyse des données de flotte"
                        class="rounded-xl shadow-xl w-full h-full object-cover"
                    >
                </div>
                
                <div class="order-1">
                    <span class="inline-block bg-primary-100 text-primary-600 text-sm font-semibold px-4 py-1 rounded-full mb-4">
                        Analyse & Reporting
                    </span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">
                        Transformez vos données en décisions
                    </h2>
                    <p class="text-xl text-gray-600 mb-8">
                        Nos outils d'analyse vous fournissent des insights précieux pour optimiser votre gestion de flotte et réduire vos coûts.
                    </p>
                    
                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-primary-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <p class="text-gray-700">Tableaux de bord personnalisés avec indicateurs clés</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-primary-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <p class="text-gray-700">Analyse des temps de conduite et de repos</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-primary-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <p class="text-gray-700">Suivi de la consommation de carburant et des coûts associés</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-primary-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <p class="text-gray-700">Optimisation des itinéraires et réduction des kilomètres parcourus</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-primary-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <p class="text-gray-700">Export des données au format Excel, PDF ou via API</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modules Section -->
    <section id="modules" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="inline-block bg-gradient-to-r from-primary-500 to-primary-700 text-white text-sm font-semibold px-4 py-1 rounded-full mb-4">
                    Modules Optionnels
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Des fonctionnalités avancées pour vos besoins spécifiques
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Complétez votre solution de géolocalisation avec nos modules optionnels.
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Module Tachygraphe -->
                <div class="bg-gradient-to-br from-tachygraph-500 to-purple-700 rounded-xl p-8 text-white">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-16 h-16 bg-white bg-opacity-20 rounded-xl flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold">Module Tachygraphe</h3>
                    </div>
                    <p class="mb-6 text-white text-opacity-90">
                        Gestion et suivi complet des tachygraphes numériques. Contrôlez les temps de conduite, les périodes de repos et générez des rapports conformes à la réglementation européenne.
                    </p>
                    <ul class="space-y-2 mb-8">
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-white flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Lecture et analyse des données tachygraphiques</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-white flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Alertes pour les dépassements de temps de conduite</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-white flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Génération automatique des rapports légaux</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-white flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Intégration avec les systèmes de paie</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-white flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Historique complet et exportable</span>
                        </li>
                    </ul>
                    <x-buttons.secondary href="/devis" class="bg-white bg-opacity-20 hover:bg-opacity-30 border-0">
                        En savoir plus
                    </x-buttons.secondary>
                </div>
                
                <!-- Module Payroll -->
                <div class="bg-gradient-to-br from-payroll-500 to-green-700 rounded-xl p-8 text-white">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-16 h-16 bg-white bg-opacity-20 rounded-xl flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold">Module Payroll</h3>
                    </div>
                    <p class="mb-6 text-white text-opacity-90">
                        Calcul automatique des salaires basé sur les relevés réels des conducteurs. Optimisez votre gestion de la paie avec des données précises et fiables provenant directement des systèmes de suivi.
                    </p>
                    <ul class="space-y-2 mb-8">
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-white flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Calcul automatique basé sur les temps réels</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-white flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Intégration avec les données tachygraphiques</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-white flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Gestion des primes et indemnités</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-white flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Export vers les logiciels de paie</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-white flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Rapports détaillés par conducteur</span>
                        </li>
                    </ul>
                    <x-buttons.secondary href="/devis" class="bg-white bg-opacity-20 hover:bg-opacity-30 border-0">
                        En savoir plus
                    </x-buttons.secondary>
                </div>
                
                <!-- Module Missions & Tournées -->
                <div class="bg-gradient-to-br from-missions-500 to-orange-700 rounded-xl p-8 text-white">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-16 h-16 bg-white bg-opacity-20 rounded-xl flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold">Module Missions & Tournées</h3>
                    </div>
                    <p class="mb-6 text-white text-opacity-90">
                        Optimisez la gestion de vos missions et tournées de livraison. Planifiez, suivez et analysez vos itinéraires pour une logistique plus efficace et des livraisons toujours à l'heure.
                    </p>
                    <ul class="space-y-2 mb-8">
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-white flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Planification intelligente des tournées</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-white flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Suivi en temps réel des livraisons</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-white flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Optimisation des itinéraires</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-white flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Alertes pour les retards ou déviations</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-white flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Rapports de performance par tournée</span>
                        </li>
                    </ul>
                    <x-buttons.secondary href="/devis" class="bg-white bg-opacity-20 hover:bg-opacity-30 border-0">
                        En savoir plus
                    </x-buttons.secondary>
                </div>
                
                <!-- Module PTO -->
                <div class="bg-gradient-to-br from-pto-500 to-pink-700 rounded-xl p-8 text-white">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-16 h-16 bg-white bg-opacity-20 rounded-xl flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold">Module Power Take Off (PTO)</h3>
                    </div>
                    <p class="mb-6 text-white text-opacity-90">
                        Suivi et gestion de la prise de charge pour les véhicules utilitaires. Contrôlez l'utilisation des équipements auxiliaires (grue, benne, etc.) et optimisez leur utilisation.
                    </p>
                    <ul class="space-y-2 mb-8">
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-white flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Suivi de l'activation du PTO</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-white flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Mesure du temps d'utilisation</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-white flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Alertes pour une utilisation excessive</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-white flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Rapports d'utilisation par véhicule</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-white flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Intégration avec les systèmes de maintenance</span>
                        </li>
                    </ul>
                    <x-buttons.secondary href="/devis" class="bg-white bg-opacity-20 hover:bg-opacity-30 border-0">
                        En savoir plus
                    </x-buttons.secondary>
                </div>
            </div>
        </div>
    </section>

    <!-- API Section -->
    <section id="api" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <span class="inline-block bg-primary-100 text-primary-600 text-sm font-semibold px-4 py-1 rounded-full mb-4">
                        API & Intégrations
                    </span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">
                        Connectez nos solutions à vos systèmes
                    </h2>
                    <p class="text-xl text-gray-600 mb-8">
                        Notre API REST vous permet d'intégrer facilement nos données de géolocalisation avec vos systèmes existants (ERP, CRM, logiciels de gestion, etc.).
                    </p>
                    
                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-primary-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <p class="text-gray-700">API REST sécurisée avec authentification</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-primary-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <p class="text-gray-700">Documentation complète et exemples de code</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-primary-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <p class="text-gray-700">Accès aux données en temps réel ou en différé</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-primary-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <p class="text-gray-700">Webhooks pour les notifications en temps réel</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-primary-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <p class="text-gray-700">Support technique dédié pour les intégrations</p>
                        </div>
                    </div>
                    
                    <div class="mt-8">
                        <x-buttons.primary href="/contact">
                            Demander la Documentation API
                        </x-buttons.primary>
                    </div>
                </div>
                
                <div class="hidden lg:block">
                    <div class="bg-gray-800 rounded-xl p-6 shadow-xl">
                        <pre class="text-green-400 text-sm overflow-x-auto"><code>// Exemple de requête API
curl -X GET \
  'https://api.bizztrack.eu/v1/vehicles' \
  -H 'Authorization: Bearer YOUR_API_KEY' \
  -H 'Accept: application/json'

// Réponse
{
  "data": [
    {
      "id": "vehicle_001",
      "name": "Camion 01",
      "latitude": 49.8156,
      "longitude": 6.1296,
      "speed": 65,
      "timestamp": "2024-01-15T14:30:00Z"
    },
    ...
  ]
}</code></pre>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Support Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="hidden lg:block">
                    <img 
                        src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                        alt="Équipe de support technique"
                        class="rounded-xl shadow-xl w-full h-full object-cover"
                    >
                </div>
                
                <div>
                    <span class="inline-block bg-primary-100 text-primary-600 text-sm font-semibold px-4 py-1 rounded-full mb-4">
                        Support & Formation
                    </span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">
                        Un accompagnement complet
                    </h2>
                    <p class="text-xl text-gray-600 mb-8">
                        Notre équipe est à vos côtés à chaque étape : installation, formation, support technique et accompagnement personnalisé.
                    </p>
                    
                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-primary-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <p class="text-gray-700">Installation et configuration par nos experts</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-primary-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <p class="text-gray-700">Formation complète pour vos équipes</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-primary-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <p class="text-gray-700">Support technique réactif (téléphone, email, chat)</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-primary-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <p class="text-gray-700">Mises à jour régulières et améliorations continues</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-primary-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <p class="text-gray-700">Accès à notre base de connaissances et FAQ</p>
                        </div>
                    </div>
                    
                    <div class="mt-8">
                        <x-buttons.primary href="/contact">
                            Nous contacter
                        </x-buttons.primary>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-br from-primary-500 to-primary-700 text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-black bg-opacity-20"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">
                Intéressé par nos services ?
            </h2>
            <p class="text-xl mb-8 max-w-3xl mx-auto text-white text-opacity-90">
                Contactez-nous dès aujourd'hui pour obtenir un devis personnalisé ou pour discuter de vos besoins spécifiques.
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
    </section>
@endsection
