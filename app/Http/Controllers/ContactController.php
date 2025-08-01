<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\ContactFormMail;
use App\Mail\ContactConfirmationMail;

class ContactController extends Controller
{
    /**
     * Afficher le formulaire de contact
     */
    public function index()
    {
        return view('pages.contact');
    }

    /**
     * Traiter l'envoi du formulaire de contact
     */
    public function store(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'nullable|string|max:20',
            'entreprise' => 'nullable|string|max:255',
            'service' => 'required|string',
            'message' => 'required|string|max:2000',
        ], [
            'prenom.required' => 'Le prénom est obligatoire.',
            'nom.required' => 'Le nom est obligatoire.',
            'email.required' => 'L\'adresse email est obligatoire.',
            'email.email' => 'L\'adresse email doit être valide.',
            'service.required' => 'Veuillez sélectionner un service.',
            'message.required' => 'Le message est obligatoire.',
            'message.max' => 'Le message ne peut pas dépasser 2000 caractères.',
        ]);

        try {
            // Préparer les données pour l'email
            $contactData = [
                'prenom' => $validatedData['prenom'],
                'nom' => $validatedData['nom'],
                'email' => $validatedData['email'],
                'telephone' => $validatedData['telephone'] ?? 'Non renseigné',
                'entreprise' => $validatedData['entreprise'] ?? 'Non renseignée',
                'service' => $this->getServiceLabel($validatedData['service']),
                'message' => $validatedData['message'],
                'date_envoi' => now()->format('d/m/Y à H:i'),
                'ip_address' => $request->ip(),
            ];

            // Envoyer l'email à l'équipe
            Mail::to(config('mail.contact_email', 'contact@global-gestion.ma'))
                ->send(new ContactFormMail($contactData));

            // Envoyer l'email de confirmation au client
            Mail::to($validatedData['email'])
                ->send(new ContactConfirmationMail($contactData));

            // Log pour debug
            Log::info('Formulaire de contact envoyé', [
                'email' => $validatedData['email'],
                'service' => $validatedData['service'],
                'ip' => $request->ip()
            ]);

            return redirect()->back()->with('success', 
                'Merci pour votre message ! Nous vous recontacterons dans les plus brefs délais.');

        } catch (\Exception $e) {
            Log::error('Erreur lors de l\'envoi du formulaire de contact', [
                'error' => $e->getMessage(),
                'email' => $validatedData['email'] ?? 'inconnu'
            ]);

            return redirect()->back()
                ->with('error', 'Une erreur est survenue lors de l\'envoi de votre message. Veuillez réessayer.')
                ->withInput();
        }
    }

    /**
     * Convertir le code service en libellé
     */
    private function getServiceLabel($serviceCode)
    {
        $services = [
            'gestion-comptable' => 'Gestion Comptable',
            'conseil-juridique' => 'Conseil Juridique',
            'conseil-fiscal' => 'Conseil Fiscal',
            'creation-entreprise' => 'Création d\'Entreprise',
            'rh' => 'Recrutement & RH',
            'marketing-digital' => 'Marketing Digital',
        ];

        return $services[$serviceCode] ?? $serviceCode;
    }
}