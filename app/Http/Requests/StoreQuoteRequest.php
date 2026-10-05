<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuoteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // Contact Information
            'company_name' => 'required|string|max:255',
            'contact_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:50',
            'address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:100',
            'postal_code' => 'nullable|string|max:20',
            'country' => 'required|string|in:LU,BE,FR,NL,other',

            // Fleet Information
            'vehicle_count' => 'required|string|in:1-5,6-10,11-25,26-50,51-100,100+',
            'vehicle_type' => 'required|string|in:cars,vans,trucks,buses,mixed,other',
            'vehicle_details' => 'nullable|string|max:1000',

            // Services
            'services' => 'nullable|array',
            'services.*' => 'string|in:geolocalisation,historique,alertes,analyse,tachygraph,payroll,missions,pto,api,support',
            'services_details' => 'nullable|string|max:1000',

            // Modules
            'module_interest' => 'required|string|in:yes,no,maybe',

            // Message
            'message' => 'nullable|string|max:2000',

            // Newsletter
            'newsletter' => 'nullable|string|in:1',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'company_name.required' => 'Le nom de l\'entreprise est obligatoire.',
            'contact_name.required' => 'Le nom du contact est obligatoire.',
            'email.required' => 'L\'adresse email est obligatoire.',
            'email.email' => 'Veuillez entrer une adresse email valide.',
            'phone.required' => 'Le numéro de téléphone est obligatoire.',
            'country.required' => 'Le pays est obligatoire.',
            'country.in' => 'Veuillez sélectionner un pays valide.',
            'vehicle_count.required' => 'Le nombre de véhicules est obligatoire.',
            'vehicle_count.in' => 'Veuillez sélectionner une plage de véhicules valide.',
            'vehicle_type.required' => 'Le type de véhicules est obligatoire.',
            'vehicle_type.in' => 'Veuillez sélectionner un type de véhicules valide.',
            'module_interest.required' => 'Veuillez indiquer votre intérêt pour les modules.',
            'module_interest.in' => 'Veuillez sélectionner une option valide.',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'company_name' => 'nom de l\'entreprise',
            'contact_name' => 'nom du contact',
            'email' => 'adresse email',
            'phone' => 'téléphone',
            'address' => 'adresse',
            'city' => 'ville',
            'postal_code' => 'code postal',
            'country' => 'pays',
            'vehicle_count' => 'nombre de véhicules',
            'vehicle_type' => 'type de véhicules',
            'vehicle_details' => 'détails des véhicules',
            'services' => 'services',
            'services_details' => 'détails des services',
            'module_interest' => 'intérêt pour les modules',
            'message' => 'message',
        ];
    }
}
