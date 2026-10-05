@component('mail::message')
# Confirmation de votre demande de devis

Bonjour **{{ $quoteData['contact_name'] ?? 'Client' }}**,

Merci pour votre demande de devis. Nous avons bien reçu votre demande et un membre de notre équipe commerciale vous recontactera dans les plus brefs délais.

## Récapitulatif de votre demande

### Informations de Contact
- **Entreprise** : {{ $quoteData['company_name'] ?? 'Non spécifié' }}
- **Nom** : {{ $quoteData['contact_name'] ?? 'Non spécifié' }}
- **Email** : {{ $quoteData['email'] ?? 'Non spécifié' }}
- **Téléphone** : {{ $quoteData['phone'] ?? 'Non spécifié' }}
- **Adresse** : {{ ($quoteData['address'] ?? '') . ($quoteData['city'] ? ', ' . $quoteData['city'] : '') . ($quoteData['postal_code'] ? ' ' . $quoteData['postal_code'] : '') . ($quoteData['country'] ? ', ' . ($countries[$quoteData['country']] ?? $quoteData['country']) : '') }}

### Informations sur la Flotte
- **Nombre de véhicules** : {{ $quoteData['vehicle_count'] ?? 'Non spécifié' }}
- **Type de véhicules** : {{ $quoteData['vehicle_type'] ?? 'Non spécifié' }}

### Services Demandés
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
        Peut-être, je veux en savoir plus
    @endif
@endif

@if(!empty($quoteData['message']))
### Votre Message
{{ $quoteData['message'] }}
@endif

## Et après ?

1. **Confirmation** : Vous recevez cet email de confirmation
2. **Analyse** : Notre équipe analyse vos besoins
3. **Contact** : Nous vous recontacterons sous 24-48h avec une proposition personnalisée

N'hésitez pas à nous contacter directement si vous avez des questions urgentes :

- **Téléphone** : +352 123 456 789
- **Email** : info@bizztrack.eu

Merci de votre confiance,

**L'équipe BizzTrack International**

---

@component('mail::footer')
© {{ date('Y') }} BizzTrack International. Tous droits réservés.
@endcomponent
