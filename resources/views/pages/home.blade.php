@extends('layouts.app')

@section('title', 'Accueil')
@section('description', 'BizzTrack International - Solutions de géolocalisation professionnelles pour le Benelux et la France')

@section('content')
    <!-- Hero Section -->
    <section class="gradient-primary text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-black bg-opacity-20"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                    Optimisez votre flotte avec des <span class="text-white">solutions de géolocalisation</span> intelligentes
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-white text-opacity-90 leading-relaxed">
                    BizzTrack International vous propose des boîtiers de géolocalisation performants et des services sur mesure pour suivre et optimiser vos véhicules au Luxembourg, en Belgique et en France.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <x-buttons.primary href="/devis" size="lg">
                        Obtenir un Devis
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </x-buttons.primary>
                    <x-buttons.secondary href="#services" size="lg">
                        Découvrir nos Services
                    </x-buttons.secondary>
                </div>
            </div>
        </div>
        
        <!-- Wave Divider -->
        <div class="absolute bottom-0 left-0 right-0">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <path d="M0 120L60 110C120 100 240 80 360 70C480 60 600 60 720 65C840 70 960 80 1080 85C1200 90 1320 90 1380 90L1440 90V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="#f9fafb"/>
            </svg>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="inline-block bg-primary-100 text-primary-600 text-sm font-semibold px-4 py-1 rounded-full mb-4">
                    Nos Services
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Des solutions complètes pour votre flotte
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Plus de 10 ans d'expertise au service des professionnels du transport et de la logistique.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Service 1: Géolocalisation -->
                <x-cards.service-card 
                    title="Géolocalisation en temps réel"
                    description="Suivez vos véhicules en direct avec une précision optimale. Historique des trajets, alertes de vitesse, zones géographiques personnalisables."
                    icon='<svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>'
                    color="primary"
                />
                
                <!-- Service 2: Analyse -->
                <x-cards.service-card 
                    title="Analyse & Reporting"
                    description="Tableaux de bord complets, rapports personnalisés, analyse des temps de conduite, consommation de carburant, optimisation des coûts."
                    icon='<svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>'
                    color="primary"
                />
                
                <!-- Service 3: Alertes -->
                <x-cards.service-card 
                    title="Alertes Intelligentes"
                    description="Recevez des notifications en temps réel pour les excès de vitesse, les sorties de zone, les temps d'arrêt prolongés et plus encore."
                    icon='<svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>'
                    color="primary"
                />
                
                <!-- Service 4: API -->
                <x-cards.service-card 
                    title="API & Intégrations"
                    description="Connectez nos solutions à vos systèmes existants. Intégration avec votre ERP, CRM ou tout autre logiciel métier."
                    icon='<svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>'
                    color="primary"
                />
                
                <!-- Service 5: Support -->
                <x-cards.service-card 
                    title="Support Réactif"
                    description="Notre équipe est à votre disposition pour toute question ou besoin spécifique. Assistance technique et formation incluses."
                    icon='<svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>'
                    color="primary"
                />
                
                <!-- Service 6: Développement Sur Mesure -->
                <x-cards.service-card 
                    title="Développement Sur Mesure"
                    description="Des solutions adaptées à vos besoins spécifiques. Nous développons des fonctionnalités personnalisées pour répondre à vos exigences."
                    icon='<svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/></svg>'
                    color="primary"
                />
            </div>
        </div>
    </section>

    <!-- Modules Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="inline-block bg-gradient-to-r from-primary-500 to-primary-700 text-white text-sm font-semibold px-4 py-1 rounded-full mb-4">
                    Modules Optionnels
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Des fonctionnalités avancées pour aller plus loin
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Découvrez nos nouveaux modules pour optimiser encore davantage votre gestion de flotte.
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Module Tachygraphe -->
                <x-cards.module-card
                    title="Module Tachygraphe"
                    description="Gestion et suivi complet des tachygraphes numériques. Contrôlez les temps de conduite, les périodes de repos et générez des rapports conformes à la réglementation."
                    :features="[
                        'Lecture et analyse des données tachygraphiques',
                        'Alertes pour les dépassements de temps de conduite',
                        'Génération automatique des rapports légaux',
                        'Intégration avec les systèmes de paie',
                        'Historique complet et exportable'
                    ]"
                    color="tachygraph"
                    icon='<svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>'
                />
                
                <!-- Module Payroll -->
                <x-cards.module-card
                    title="Module Payroll"
                    description="Calcul automatique des salaires basé sur les relevés réels des conducteurs. Optimisez votre gestion de la paie avec des données précises et fiables."
                    :features="[
                        'Calcul automatique basé sur les temps réels',
                        'Intégration avec les données tachygraphiques',
                        'Gestion des primes et indemnités',
                        'Export vers les logiciels de paie',
                        'Rapports détaillés par conducteur'
                    ]"
                    color="payroll"
                    icon='<svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>'
                />
                
                <!-- Module Missions & Tournées -->
                <x-cards.module-card
                    title="Module Missions & Tournées"
                    description="Optimisez la gestion de vos missions et tournées de livraison. Planifiez, suivez et analysez vos itinéraires pour une logistique plus efficace."
                    :features="[
                        'Planification intelligente des tournées',
                        'Suivi en temps réel des livraisons',
                        'Optimisation des itinéraires',
                        'Alertes pour les retards ou déviations',
                        'Rapports de performance par tournée'
                    ]"
                    color="missions"
                    icon='<svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>'
                />
                
                <!-- Module PTO -->
                <x-cards.module-card
                    title="Module Power Take Off (PTO)"
                    description="Suivi et gestion de la prise de charge pour les véhicules utilitaires. Contrôlez l'utilisation des équipements auxiliaires et optimisez leur utilisation."
                    :features="[
                        'Suivi de l\'activation du PTO',
                        'Mesure du temps d\'utilisation',
                        'Alertes pour une utilisation excessive',
                        'Rapports d\'utilisation par véhicule',
                        'Intégration avec les systèmes de maintenance'
                    ]"
                    color="pto"
                    icon='<svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>'
                />
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <span class="inline-block bg-primary-100 text-primary-600 text-sm font-semibold px-4 py-1 rounded-full mb-4">
                        Pourquoi nous choisir ?
                    </span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">
                        Une expertise locale et une réactivité exceptionnelle
                    </h2>
                    <p class="text-xl text-gray-600 mb-8">
                        Depuis plus de 10 ans, nous accompagnons les entreprises du Benelux et de la France dans l'optimisation de leur gestion de flotte.
                    </p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">Expertise Locale</h3>
                                <p class="text-gray-600 text-sm">Basés au Luxembourg et en Belgique, nous connaissons parfaitement le marché local.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">10+ Ans d'Expérience</h3>
                                <p class="text-gray-600 text-sm">Une expertise reconnue dans le domaine de la géolocalisation professionnelle.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">Grande Réactivité</h3>
                                <p class="text-gray-600 text-sm">Notre équipe répond rapidement à vos demandes et besoins spécifiques.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">Développements Sur Mesure</h3>
                                <p class="text-gray-600 text-sm">Des solutions adaptées à vos besoins spécifiques et évolutifs.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">Connexion aux API Externes</h3>
                                <p class="text-gray-600 text-sm">Intégration facile avec vos systèmes existants et API externes.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-8">
                        <x-buttons.primary href="/contact">
                            Nous contacter
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </x-buttons.primary>
                    </div>
                </div>
                
                <div class="hidden lg:block">
                    <img 
                        src="https://images.unsplash.com/photo-1558618047-3c8c76ca7d13?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                        alt="Véhicule avec système de géolocalisation"
                        class="rounded-xl shadow-xl w-full h-full object-cover"
                    >
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <x-cards.stat-card 
                    value="10+" 
                    label="Années d'expérience"
                    icon='<svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>'
                    color="primary"
                />
                
                <x-cards.stat-card 
                    value="500+" 
                    label="Véhicules suivis"
                    icon='<svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>'
                    color="tachygraph"
                />
                
                <x-cards.stat-card 
                    value="200+" 
                    label="Clients satisfaits"
                    icon='<svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.085a2 2 0 00-1.736.97l-1.9 3.8z"/></svg>'
                    color="payroll"
                />
                
                <x-cards.stat-card 
                    value="3" 
                    label="Pays couverts"
                    icon='<svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2h10a2 2 0 002-2v-1a2 2 0 012-2h1.945M7.75 11a2.25 2.25 0 012.25-2.25h4.5a2.25 2.25 0 012.25 2.25M4 19h16"/></svg>'
                    color="missions"
                />
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="inline-block bg-primary-100 text-primary-600 text-sm font-semibold px-4 py-1 rounded-full mb-4">
                    Témoignages
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Ils nous font confiance
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Découvrez ce que nos clients pensent de nos solutions et services.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <x-cards.testimonial-card
                    quote="Grâce à BizzTrack, nous avons réduit nos coûts de carburant de 15% en quelques mois seulement. Leur solution est à la fois puissante et facile à utiliser."
                    author="Jean Dupont"
                    company="Transport Dupont"
                    rating="5"
                />
                
                <x-cards.testimonial-card
                    quote="Le module tachygraphe nous a permis de gagner un temps précieux dans la gestion de nos conducteurs. Le support est toujours très réactif."
                    author="Marie Martin"
                    company="Logistics Solutions"
                    rating="5"
                />
                
                <x-cards.testimonial-card
                    quote="Nous apprécions particulièrement la possibilité de développer des fonctionnalités sur mesure. BizzTrack s'adapte parfaitement à nos besoins spécifiques."
                    author="Pierre Bernard"
                    company="Bernard Transport"
                    rating="5"
                />
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-br from-primary-500 to-primary-700 text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-black bg-opacity-20"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">
                Prêt à optimiser votre gestion de flotte ?
            </h2>
            <p class="text-xl mb-8 max-w-3xl mx-auto text-white text-opacity-90">
                Contactez-nous dès aujourd'hui pour obtenir un devis personnalisé et découvrir comment nos solutions peuvent vous aider à réduire vos coûts et améliorer votre efficacité.
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
