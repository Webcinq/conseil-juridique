
<?php

 use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('landing');
// })->name('landing');

// // Vous pouvez aussi créer des routes pour login/register si elles n'existent pas
// Route::get('/login', function () {
//     return redirect('/'); // Redirige temporairement vers la landing page
// })->name('login');

// Route::get('/register', function () {
//     return redirect('/'); // Redirige temporairement vers la landing page
// })->name('register');

// Route::get('/admin/dashboard', function () {
//     return view('admin.dashboard');
// })->name('admin.dashboard');

// Route::get('/student/dashboard', function () {
//     return view('student.dashboard');
// })->name('student.dashboard');

// // Route pour accéder à un cours spécifique
// Route::get('/student/course/{id}', function ($id) {
//     // Ici vous pouvez récupérer les données du cours depuis la base de données
//     return view('student.course', compact('id'));
// })->name('student.course');


// Page d'accueil
Route::get('/', function () {
    return view('pages.accueil');
})->name('accueil');

// Nos expertises - Page principale
Route::get('/nos-expertises', function () {
    return view('pages.expertises.index');
})->name('expertises.index');

// Services comptables
Route::get('/cabinet-comptable-marrakech', function () {
    return view('pages.expertises.gestion-comptable');
})->name('gestion-comptable');

// Services juridiques
Route::get('/services-juridiques-marrakech', function () {
    return view('pages.expertises.conseil-juridique');
})->name('conseil-juridique');

// Constitution de SARL
Route::get('/constitution-sarl-marrakech', function () {
    return view('pages.juridique.constitution-sarl');
})->name('constitution-sarl');

// Guide création SARL
Route::get('/guide-creation-societe-sarl-maroc', function () {
    return view('pages.juridique.guide-creation-sarl');
})->name('guide-creation-sarl');

// Services fiscaux
Route::get('/conseil-fiscal-marrakech', function () {
    return view('pages.expertises.conseil-fiscal');
})->name('conseil-fiscal');

// Contrôle fiscal
Route::get('/assistance-controle-fiscal', function () {
    return view('pages.fiscal.controle-fiscal');
})->name('controle-fiscal');

// Contentieux fiscal
Route::get('/contentieux-fiscal-maroc', function () {
    return view('pages.fiscal.contentieux-fiscal');
})->name('contentieux-fiscal');

// Déclarations fiscales
Route::get('/declarations-fiscales-marrakech', function () {
    return view('pages.fiscal.declarations-fiscales');
})->name('declarations-fiscales');

// Conseil en entrepreneuriat
Route::get('/conseil-entrepreneuriat-business-plan-strategie', function () {
    return view('pages.expertises.entrepreneuriat');
})->name('entrepreneuriat');

// Création d'entreprise
Route::get('/creation-entreprise-marrakech', function () {
    return view('pages.entrepreneuriat.creation-entreprise');
})->name('creation-entreprise');

// Recrutement & RH
Route::get('/recrutement-management-rh', function () {
    return view('pages.expertises.recrutement-rh');
})->name('recrutement-rh');

// Marketing Digital
Route::get('/strategie-marketing-digital', function () {
    return view('pages.expertises.marketing-digital');
})->name('marketing-digital');

// Pages institutionnelles
Route::get('/a-propos-cabinet', function () {
    return view('pages.about');
})->name('about');

// Blog
Route::get('/actualites-conseils-blog', function () {
    return view('pages.blog.index');
})->name('blog.index');

Route::get('/blog/{slug}', function ($slug) {
    // Ici vous pourrez récupérer l'article depuis la base de données
    return view('pages.blog.article', compact('slug'));
})->name('blog.article');

// Contact
Route::get('/contact-prendre-rdv', function () {
    return view('pages.contact');
})->name('contact');

// Traitement du formulaire de contact
Route::post('/contact-prendre-rdv', function () {
    // Validation des données
    request()->validate([
        'prenom' => 'required|string|max:255',
        'nom' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'telephone' => 'nullable|string|max:20',
        'entreprise' => 'nullable|string|max:255',
        'service' => 'required|string',
        'message' => 'required|string|max:2000',
    ]);

    // Ici vous pouvez ajouter la logique pour :
    // - Sauvegarder en base de données
    // - Envoyer un email
    // - Envoyer une notification

    // Pour l'instant, simple redirection avec message de succès
    return redirect()->back()->with('success', 'Merci pour votre message ! Nous vous recontacterons dans les plus brefs délais.');
})->name('contact.store');

// Routes pour les pages légales
Route::get('/mentions-legales', function () {
    return view('pages.legal.mentions-legales');
})->name('mentions-legales');

Route::get('/politique-confidentialite', function () {
    return view('pages.legal.politique-confidentialite');
})->name('politique-confidentialite');

Route::get('/conditions-generales', function () {
    return view('pages.legal.cgv');
})->name('cgv');

Route::get('/plan-du-site', function () {
    return view('pages.plan-site');
})->name('plan-site');

// Redirections pour optimisation SEO
Route::redirect('/expert-comptable-marrakech', '/cabinet-comptable-marrakech', 301);
Route::redirect('/comptable-marrakech', '/cabinet-comptable-marrakech', 301);
Route::redirect('/creation-sarl-maroc', '/constitution-sarl-marrakech', 301);
Route::redirect('/fiscal-marrakech', '/conseil-fiscal-marrakech', 301);

// Route pour le sitemap (si nécessaire)
Route::get('/sitemap.xml', function () {
    return response()->view('sitemap')
                    ->header('Content-Type', 'text/xml');
})->name('sitemap');

// Routes pour les téléchargements (documents PDF, etc.)
Route::get('/telecharger/plaquette-cabinet', function () {
    // Logique pour télécharger la plaquette du cabinet
    return response()->download(public_path('documents/plaquette-global-gestion.pdf'));
})->name('download.plaquette');

Route::get('/telecharger/guide-creation-sarl', function () {
    // Logique pour télécharger le guide de création SARL
    return response()->download(public_path('documents/guide-creation-sarl-maroc.pdf'));
})->name('download.guide-sarl');

// API Routes pour AJAX (si nécessaire)
Route::prefix('api')->group(function () {
    Route::post('/newsletter', function () {
        request()->validate([
            'email' => 'required|email'
        ]);
        
        // Logique d'inscription à la newsletter
        return response()->json(['success' => true, 'message' => 'Inscription réussie !']);
    })->name('api.newsletter');
    
    Route::post('/devis-rapide', function () {
        request()->validate([
            'service' => 'required|string',
            'entreprise_type' => 'required|string',
            'email' => 'required|email',
            'telephone' => 'nullable|string'
        ]);
        
        // Logique pour traiter la demande de devis rapide
        return response()->json(['success' => true, 'message' => 'Demande de devis envoyée !']);
    })->name('api.devis-rapide');
});

// Routes d'administration (si nécessaire)
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    
    Route::get('/contacts', function () {
        // Afficher la liste des contacts
        return view('admin.contacts.index');
    })->name('admin.contacts.index');
    
    Route::get('/blog', function () {
        // Gestion des articles de blog
        return view('admin.blog.index');
    })->name('admin.blog.index');
});

// Routes pour l'authentification (si nécessaire)
// Route::get('/login', function () {
//     return view('auth.login');
// })->name('login');

// Route::post('/login', function () {
//     // Logique de connexion
// });

// Route::post('/logout', function () {
//     // Logique de déconnexion
// })->name('logout');

// Routes pour les erreurs personnalisées
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});

/*
|--------------------------------------------------------------------------
| Routes de redirection pour SEO
|--------------------------------------------------------------------------
|
| Redirections 301 pour maintenir le référencement
| en cas de changement d'URLs
|
*/

// Anciennes URLs vers nouvelles URLs
$redirections = [
    '/expertise-comptable' => '/cabinet-comptable-marrakech',
    '/services-comptables' => '/cabinet-comptable-marrakech',
    '/conseil-legal' => '/services-juridiques-marrakech',
    '/creation-entreprise' => '/creation-entreprise-marrakech',
    '/contact-us' => '/contact-prendre-rdv',
    '/about-us' => '/a-propos-cabinet',
    '/services' => '/nos-expertises',
];

foreach ($redirections as $old => $new) {
    Route::redirect($old, $new, 301);
}

/*
|--------------------------------------------------------------------------
| Routes multilingues (optionnel)
|--------------------------------------------------------------------------
|
| Si vous souhaitez ajouter le support multilingue
|
*/

// Route::prefix('{locale}')->where('locale', '[a-zA-Z]{2}')->group(function () {
//     Route::get('/', function ($locale) {
//         App::setLocale($locale);
//         return view('pages.accueil');
//     })->name('accueil.locale');
//     
//     // Autres routes traduites...
// });

/*
|--------------------------------------------------------------------------
| Routes pour les outils (optionnel)
|--------------------------------------------------------------------------
|
| Outils utiles pour les clients
|
*/

Route::prefix('outils')->group(function () {
    Route::get('/simulateur-charges-sociales', function () {
        return view('pages.outils.simulateur-charges');
    })->name('outils.simulateur-charges');
    
    Route::get('/calculateur-is', function () {
        return view('pages.outils.calculateur-is');
    })->name('outils.calculateur-is');
    
    Route::get('/checklist-creation-entreprise', function () {
        return view('pages.outils.checklist-creation');
    })->name('outils.checklist-creation');
});

/*
|--------------------------------------------------------------------------
| Routes pour les témoignages
|--------------------------------------------------------------------------
*/

Route::get('/nos-references-temoignages', function () {
    return view('pages.temoignages');
})->name('temoignages');

/*
|--------------------------------------------------------------------------
| Routes pour la FAQ
|--------------------------------------------------------------------------
*/

Route::get('/faq-questions-frequentes', function () {
    return view('pages.faq');
})->name('faq');

/*
|--------------------------------------------------------------------------
| Routes pour les secteurs d'activité
|--------------------------------------------------------------------------
*/

Route::prefix('secteurs')->group(function () {
    Route::get('/professions-liberales', function () {
        return view('pages.secteurs.professions-liberales');
    })->name('secteurs.professions-liberales');
    
    Route::get('/commercants-artisans', function () {
        return view('pages.secteurs.commercants-artisans');
    })->name('secteurs.commercants-artisans');
    
    Route::get('/startups-tpe', function () {
        return view('pages.secteurs.startups-tpe');
    })->name('secteurs.startups-tpe');
    
    Route::get('/immobilier', function () {
        return view('pages.secteurs.immobilier');
    })->name('secteurs.immobilier');
    
    Route::get('/import-export', function () {
        return view('pages.secteurs.import-export');
    })->name('secteurs.import-export');
});

/*
|--------------------------------------------------------------------------
| Routes pour les actualités par catégorie
|--------------------------------------------------------------------------
*/

Route::prefix('actualites')->group(function () {
    Route::get('/comptabilite-fiscalite', function () {
        return view('pages.blog.categories.comptabilite-fiscalite');
    })->name('blog.comptabilite-fiscalite');
    
    Route::get('/juridique-rh', function () {
        return view('pages.blog.categories.juridique-rh');
    })->name('blog.juridique-rh');
    
    Route::get('/creation-entreprise', function () {
        return view('pages.blog.categories.creation-entreprise');
    })->name('blog.creation-entreprise');
    
    Route::get('/strategie-performance', function () {
        return view('pages.blog.categories.strategie-performance');
    })->name('blog.strategie-performance');
    
    Route::get('/cas-clients', function () {
        return view('pages.blog.categories.cas-clients');
    })->name('blog.cas-clients');
});

/*
|--------------------------------------------------------------------------
| Routes pour les formulaires spécialisés
|--------------------------------------------------------------------------
*/

Route::get('/demande-devis-comptabilite', function () {
    return view('pages.formulaires.devis-comptabilite');
})->name('formulaires.devis-comptabilite');

Route::get('/demande-creation-sarl', function () {
    return view('pages.formulaires.creation-sarl');
})->name('formulaires.creation-sarl');

Route::get('/urgence-controle-fiscal', function () {
    return view('pages.formulaires.urgence-fiscal');
})->name('formulaires.urgence-fiscal');

// Traitement des formulaires spécialisés
Route::post('/demande-devis-comptabilite', function () {
    request()->validate([
        'nom_entreprise' => 'required|string|max:255',
        'secteur_activite' => 'required|string',
        'nombre_salaries' => 'required|string',
        'chiffre_affaires' => 'required|string',
        'services_souhaites' => 'required|array',
        'contact_nom' => 'required|string|max:255',
        'contact_email' => 'required|email',
        'contact_telephone' => 'required|string',
    ]);
    
    return redirect()->back()->with('success', 'Votre demande de devis a été envoyée. Nous vous contacterons sous 24h.');
})->name('formulaires.devis-comptabilite.store');

Route::post('/demande-creation-sarl', function () {
    request()->validate([
        'nom_societe' => 'required|string|max:255',
        'activite_principale' => 'required|string',
        'nombre_associes' => 'required|integer|min:1',
        'capital_social' => 'required|string',
        'adresse_siege' => 'required|string',
        'contact_nom' => 'required|string|max:255',
        'contact_email' => 'required|email',
        'contact_telephone' => 'required|string',
    ]);
    
    return redirect()->back()->with('success', 'Votre demande de création de SARL a été envoyée. Nous vous contacterons rapidement.');
})->name('formulaires.creation-sarl.store');

Route::post('/urgence-controle-fiscal', function () {
    request()->validate([
        'type_controle' => 'required|string',
        'date_reception_avis' => 'required|date',
        'entreprise' => 'required|string|max:255',
        'contact_nom' => 'required|string|max:255',
        'contact_email' => 'required|email',
        'contact_telephone' => 'required|string',
        'description_urgence' => 'required|string|max:1000',
    ]);
    
    // Ici vous pourriez envoyer une notification immédiate à l'équipe
    
    return redirect()->back()->with('success', 'Votre demande d\'urgence a été transmise. Nous vous recontacterons dans l\'heure.');
})->name('formulaires.urgence-fiscal.store');

/*
|--------------------------------------------------------------------------
| Routes pour les événements et webinaires
|--------------------------------------------------------------------------
*/

Route::prefix('evenements')->group(function () {
    Route::get('/', function () {
        return view('pages.evenements.index');
    })->name('evenements.index');
    
    Route::get('/webinaires-fiscalite', function () {
        return view('pages.evenements.webinaires');
    })->name('evenements.webinaires');
    
    Route::get('/formations-creation-entreprise', function () {
        return view('pages.evenements.formations');
    })->name('evenements.formations');
});

/*
|--------------------------------------------------------------------------
| Routes pour l'espace client (si implémenté)
|--------------------------------------------------------------------------
*/

// Route::prefix('espace-client')->middleware(['auth'])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('client.dashboard');
//     })->name('client.dashboard');
//     
//     Route::get('/documents', function () {
//         return view('client.documents');
//     })->name('client.documents');
//     
//     Route::get('/factures', function () {
//         return view('client.factures');
//     })->name('client.factures');
//     
//     Route::get('/rendez-vous', function () {
//         return view('client.rendez-vous');
//     })->name('client.rendez-vous');
// });

/*
|--------------------------------------------------------------------------
| Route de test pour les emails (développement uniquement)
|--------------------------------------------------------------------------
*/

if (app()->environment(['local', 'testing'])) {
    Route::get('/test-email', function () {
        // Test d'envoi d'email
        return 'Test email route - Only available in development';
    });
}