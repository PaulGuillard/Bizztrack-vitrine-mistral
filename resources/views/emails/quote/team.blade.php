@component('mail::message')
# Nouvelle Demande de Devis

Une nouvelle demande de devis a été reçue via le site web.

## Informations du Client

### Contact
- **Entreprise** : {{ $quoteData['company_name'] ?? 'Non spécifié' }}
- **Nom** : {{ $quoteData['contact_name'] ?? 'Non spécifié' }}
- **Email** : {{ $quoteData['email'] ?? 'Non spécifié' }}
- **Téléphone** : {{ $quoteData['phone'] ?? 'Non spécifié' }}
- **Adresse** : {{ ($quoteData['address'] ?? '') . ($quoteData['city'] ? ', ' . $quoteData['city'] : '') . ($quoteData['postal_code'] ? ' ' . $quoteData['postal_code'] : '') . ($quoteData['country'] ? ', ' . ($countries[$quoteData['country']] ?? $quoteData['country']) : '') }}

### Flotte
- **Nombre de véhicules** : {{ $quoteData['vehicle_count'] ?? 'Non spécifié' }}
- **Type de véhicules** : {{ $quoteData['vehicle_type'] ?? 'Non spécifié' }}

@if(!empty($quoteData['vehicle_details']))
- **Détails véhicules** : {{ $quoteData['vehicle_details'] }}
@endif

## Services Demandés

@if(!empty($quoteData['services']))
- {{ $quoteData['services'] }}
@else
- Aucun service spécifique sélectionné
@endif

@if(!empty($quoteData['services_details']))
- **Détails supplémentaires** : {{ $quoteData['services_details'] }}
@endif

@if(!empty($quoteData['module_interest']))
- **Intérêt pour les modules optionnels** : 
    @if($quoteData['module_interest'] === 'yes')
        Oui, intéressé
    @elseif($quoteData['module_interest'] === 'no')
        Non, pas pour le moment
    @else
        Peut-être, veut en savoir plus
    @endif
@endif

@if(!empty($quoteData['message']))
## Message du Client

{{ $quoteData['message'] }}
@endif

@if(!empty($quoteData['newsletter']))
- **Newsletter** : Le client souhaite recevoir la newsletter
@endif

## Action Requise

Merci de contacter ce client dans les plus brefs délais (sous 24-48h) pour :

1. Confirmer la réception de sa demande
2. Analyser ses besoins
3. Lui proposer une solution adaptée avec un devis personnalisé

---

**Date de la demande** : {{ now()->format('d/m/Y H:i:s') }}

@component('mail::footer')
© {{ date('Y') }} BizzTrack International. Tous droits réservés.
@endcomponent
