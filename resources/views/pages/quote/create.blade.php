@extends('layouts.app')

@section('title', 'Obtenir un Devis')
@section('description', 'Remplissez ce formulaire pour obtenir un devis personnalisé pour nos solutions de géolocalisation')

@section('content')
    <!-- Hero Section -->
    <section class="py-16 bg-gradient-to-br from-primary-500 to-primary-700 text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-black bg-opacity-20"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                Obtenir un Devis
            </h1>
            <p class="text-xl mb-8 max-w-3xl mx-auto text-white text-opacity-90">
                Remplissez ce formulaire et nous vous recontacterons dans les plus brefs délais avec une proposition adaptée à vos besoins.
            </p>
        </div>
    </section>

    <!-- Form Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-xl shadow-lg p-8">
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">
                        Formulaire de Devis
                    </h2>
                    <p class="text-gray-600">
                        Tous les champs marqués d'un (*) sont obligatoires.
                    </p>
                </div>

                <form action="{{ route('quote.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <!-- Informations de Contact -->
                    <div class="bg-gray-50 rounded-xl p-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">
                            Informations de Contact
                        </h3>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <x-forms.input 
                                name="company_name"
                                label="Nom de l'entreprise *"
                                placeholder="Nom de votre entreprise"
                                required
                                :value="old('company_name')"
                                :error="$errors->first('company_name')"
                            />
                            
                            <x-forms.input 
                                name="contact_name"
                                label="Nom du contact *"
                                placeholder="Votre nom"
                                required
                                :value="old('contact_name')"
                                :error="$errors->first('contact_name')"
                            />
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <x-forms.input 
                                name="email"
                                label="Email *"
                                type="email"
                                placeholder="votre@email.com"
                                required
                                :value="old('email')"
                                :error="$errors->first('email')"
                            />
                            
                            <x-forms.input 
                                name="phone"
                                label="Téléphone *"
                                type="tel"
                                placeholder="+352 123 456 789"
                                required
                                :value="old('phone')"
                                :error="$errors->first('phone')"
                            />
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <x-forms.input 
                                name="address"
                                label="Adresse"
                                placeholder="123 Rue de l'Industrie"
                                :value="old('address')"
                                :error="$errors->first('address')"
                            />
                            
                            <x-forms.input 
                                name="city"
                                label="Ville"
                                placeholder="Luxembourg"
                                :value="old('city')"
                                :error="$errors->first('city')"
                            />
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <x-forms.input 
                                name="postal_code"
                                label="Code Postal"
                                placeholder="1234"
                                :value="old('postal_code')"
                                :error="$errors->first('postal_code')"
                            />
                            
                            <x-forms.select 
                                name="country"
                                label="Pays *"
                                :options="[
                                    'LU' => 'Luxembourg',
                                    'BE' => 'Belgique', 
                                    'FR' => 'France',
                                    'NL' => 'Pays-Bas',
                                    'other' => 'Autre'
                                ]"
                                required
                                :value="old('country')"
                                :error="$errors->first('country')"
                            />
                        </div>
                    </div>

                    <!-- Informations sur la Flotte -->
                    <div class="bg-gray-50 rounded-xl p-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">
                            Informations sur la Flotte
                        </h3>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <x-forms.select 
                                name="vehicle_count"
                                label="Nombre de véhicules *"
                                :options="[
                                    '1-5' => '1 à 5 véhicules',
                                    '6-10' => '6 à 10 véhicules',
                                    '11-25' => '11 à 25 véhicules',
                                    '26-50' => '26 à 50 véhicules',
                                    '51-100' => '51 à 100 véhicules',
                                    '100+' => 'Plus de 100 véhicules'
                                ]"
                                required
                                :value="old('vehicle_count')"
                                :error="$errors->first('vehicle_count')"
                            />
                            
                            <x-forms.select 
                                name="vehicle_type"
                                label="Type de véhicules *"
                                :options="[
                                    'cars' => 'Voitures',
                                    'vans' => 'Utilitaires légers',
                                    'trucks' => 'Camions',
                                    'buses' => 'Bus',
                                    'mixed' => 'Mixte',
                                    'other' => 'Autre'
                                ]"
                                required
                                :value="old('vehicle_type')"
                                :error="$errors->first('vehicle_type')"
                            />
                        </div>
                        
                        <x-forms.textarea 
                            name="vehicle_details"
                            label="Détails supplémentaires sur les véhicules"
                            placeholder="Précisez les marques, modèles, années, ou toute autre information utile..."
                            :value="old('vehicle_details')"
                            :error="$errors->first('vehicle_details')"
                            rows="3"
                        />
                    </div>

                    <!-- Services Souhaités -->
                    <div class="bg-gray-50 rounded-xl p-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">
                            Services Souhaités
                        </h3>
                        
                        <p class="text-sm text-gray-600 mb-4">
                            Sélectionnez les services qui vous intéressent :
                        </p>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                            <x-forms.checkbox 
                                name="services[]"
                                label="Géolocalisation en temps réel"
                                value="geolocalisation"
                                :checked="in_array('geolocalisation', old('services', []))"
                            />
                            
                            <x-forms.checkbox 
                                name="services[]"
                                label="Historique des trajets"
                                value="historique"
                                :checked="in_array('historique', old('services', []))"
                            />
                            
                            <x-forms.checkbox 
                                name="services[]"
                                label="Alertes (vitesse, géofencing, etc.)"
                                value="alertes"
                                :checked="in_array('alertes', old('services', []))"
                            />
                            
                            <x-forms.checkbox 
                                name="services[]"
                                label="Analyse & Reporting"
                                value="analyse"
                                :checked="in_array('analyse', old('services', []))"
                            />
                            
                            <x-forms.checkbox 
                                name="services[]"
                                label="Module Tachygraphe"
                                value="tachygraph"
                                :checked="in_array('tachygraph', old('services', []))"
                            />
                            
                            <x-forms.checkbox 
                                name="services[]"
                                label="Module Payroll"
                                value="payroll"
                                :checked="in_array('payroll', old('services', []))"
                            />
                            
                            <x-forms.checkbox 
                                name="services[]"
                                label="Module Missions & Tournées"
                                value="missions"
                                :checked="in_array('missions', old('services', []))"
                            />
                            
                            <x-forms.checkbox 
                                name="services[]"
                                label="Module Power Take Off (PTO)"
                                value="pto"
                                :checked="in_array('pto', old('services', []))"
                            />
                            
                            <x-forms.checkbox 
                                name="services[]"
                                label="API & Intégrations"
                                value="api"
                                :checked="in_array('api', old('services', []))"
                            />
                            
                            <x-forms.checkbox 
                                name="services[]"
                                label="Support & Formation"
                                value="support"
                                :checked="in_array('support', old('services', []))"
                            />
                        </div>
                        
                        <x-forms.textarea 
                            name="services_details"
                            label="Autres services ou besoins spécifiques"
                            placeholder="Décrivez tout autre service ou besoin particulier..."
                            :value="old('services_details')"
                            :error="$errors->first('services_details')"
                            rows="3"
                        />
                    </div>

                    <!-- Modules Optionnels -->
                    <div class="bg-gray-50 rounded-xl p-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">
                            Modules Optionnels
                        </h3>
                        
                        <p class="text-sm text-gray-600 mb-4">
                            Êtes-vous intéressé par nos modules optionnels ?
                        </p>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <x-forms.radio 
                                name="module_interest"
                                label=""
                                :options="[
                                    'yes' => 'Oui, je suis intéressé par un ou plusieurs modules',
                                    'no' => 'Non, pas pour le moment',
                                    'maybe' => 'Peut-être, je veux en savoir plus'
                                ]"
                                :value="old('module_interest')"
                                :error="$errors->first('module_interest')"
                                inline
                            />
                        </div>
                    </div>

                    <!-- Message -->
                    <div class="bg-gray-50 rounded-xl p-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">
                            Message
                        </h3>
                        
                        <x-forms.textarea 
                            name="message"
                            label="Votre message"
                            placeholder="N'hésitez pas à nous donner plus de détails sur vos besoins, votre budget, vos attentes ou toute autre information qui nous aiderait à vous proposer la meilleure solution..."
                            :value="old('message')"
                            :error="$errors->first('message')"
                            rows="5"
                        />
                    </div>

                    <!-- Newsletter -->
                    <div class="bg-gray-50 rounded-xl p-6">
                        <x-forms.checkbox 
                            name="newsletter"
                            label="Je souhaite recevoir la newsletter BizzTrack avec les dernières actualités et offres spéciales"
                            value="1"
                            :checked="old('newsletter') === '1'"
                        />
                    </div>

                    <!-- Submit -->
                    <div class="pt-6">
                        <div class="flex items-center justify-between">
                            <p class="text-sm text-gray-500">
                                * Champs obligatoires
                            </p>
                            <x-buttons.primary type="submit" size="lg">
                                Envoyer la Demande
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </x-buttons.primary>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Info Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="flex items-center justify-center gap-4 mb-6">
                <svg class="w-8 h-8 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                </svg>
                <h2 class="text-2xl font-bold text-gray-800">
                    Que se passe-t-il après l'envoi ?
                </h2>
            </div>
            
            <p class="text-xl text-gray-600 max-w-3xl mx-auto mb-8">
                Vous recevrez un email de confirmation avec une copie de votre demande. 
                Un membre de notre équipe commerciale vous recontactera dans les plus brefs délais (généralement sous 24-48 heures) pour discuter de votre projet et vous proposer une solution adaptée.
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">
                        Confirmation par Email
                    </h3>
                    <p class="text-gray-600 text-sm">
                        Recevez immédiatement un accusé de réception avec votre demande.
                    </p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">
                        Analyse Personnalisée
                    </h3>
                    <p class="text-gray-600 text-sm">
                        Notre équipe analyse vos besoins et prépare une offre adaptée.
                    </p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">
                        Devis Sous 48h
                    </h3>
                    <p class="text-gray-600 text-sm">
                        Vous recevez une proposition commerciale détaillée rapidement.
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
                    Besoin d'aide pour remplir ce formulaire ?
                </h2>
                <p class="text-gray-600 mb-6 max-w-2xl mx-auto">
                    Notre équipe est à votre disposition pour vous guider et répondre à toutes vos questions.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <x-buttons.primary href="tel:+352123456789">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        Appeler le +352 123 456 789
                    </x-buttons.primary>
                    <x-buttons.secondary href="mailto:info@bizztrack.eu">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        Envoyer un Email
                    </x-buttons.secondary>
                </div>
            </div>
        </div>
    </section>
@endsection
