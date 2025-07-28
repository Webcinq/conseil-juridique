@extends('layouts.app')

@section('title', 'Créer une SARL au Maroc - Guide 2025, création rapide et accompagnement expert')
@section('meta-description', 'Guide 2025 pour créer une SARL au Maroc : toutes les étapes expliquées, documents requis, délais, et astuces d\'expert pour réussir votre création.')
@section('keywords', 'guide création SARL maroc, étapes création société, documents SARL, certificat négatif, registre commerce')

@section('content')
    <!-- Breadcrumb -->
    <div class="bg-gray-50 py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="{{ route('accueil') }}" class="text-blue-600 hover:text-blue-800">Accueil</a>
                <i class="fas fa-chevron-right text-gray-400"></i>
                <a href="{{ route('conseil-juridique') }}" class="text-blue-600 hover:text-blue-800">Conseil Juridique</a>
                <i class="fas fa-chevron-right text-gray-400"></i>
                <span class="text-gray-600">Guide Création SARL</span>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="w-20 h-20 bg-green-100 rounded-xl flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-file-alt text-green-600 text-3xl"></i>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Constituer une SARL au Maroc : Guide Complet des 9 Étapes Essentielles
                </h1>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                    Si vous envisagez de créer une société SARL au Maroc, nous vous guidons pas à pas à travers toutes les étapes de la constitution de votre société. 
                    Grâce à notre expérience, nous rendons le processus simple et rapide, pour que vous puissiez démarrer votre entreprise en toute sérénité.
                </p>
            </div>
        </div>
    </section>

    <!-- Introduction aux Étapes -->
    <section class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-blue-50 rounded-xl p-8 mb-16">
                <div class="text-center">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Les 9 Étapes Principales</h2>
                    <p class="text-gray-600 mb-8">
                        Pour constituer une société SARL au Maroc, voici les principales étapes à suivre dans l'ordre chronologique :
                    </p>
                    <div class="grid grid-cols-3 md:grid-cols-9 gap-4">
                        @for($i = 1; $i <= 9; $i++)
                            <div class="flex flex-col items-center">
                                <div class="w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold text-lg mb-2">{{ $i }}</div>
                                <div class="text-xs text-gray-600 text-center">
                                    @switch($i)
                                        @case(1) Certificat Négatif @break
                                        @case(2) Siège Social @break
                                        @case(3) Statuts @break
                                        @case(4) Capital @break
                                        @case(5) Enregistrement @break
                                        @case(6) Taxe Pro @break
                                        @case(7) RC @break
                                        @case(8) CNSS @break
                                        @case(9) Publications @break
                                    @endswitch
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>

            <!-- Étapes Détaillées -->
            <div class="space-y-12">
                <!-- Étape 1 : Certificat Négatif -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="bg-gradient-to-r from-blue-500 to-blue-600 p-6 text-white">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-white bg-opacity-20 rounded-full flex items-center justify-center mr-4 font-bold text-xl">1</div>
                            <div>
                                <h3 class="text-2xl font-bold">Demande du Certificat Négatif</h3>
                                <p class="text-blue-100">Premier document indispensable</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-8">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                            <div>
                                <p class="text-gray-600 mb-6">
                                    Le certificat négatif est le 1er document indispensable à la création d'une société. 
                                    Pour dénommer la société en constitution il faut trois noms aux choix et une pièce d'identité du demandeur.
                                </p>
                                <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-6">
                                    <p class="text-yellow-800">
                                        <i class="fas fa-exclamation-triangle mr-2"></i>
                                        <strong>Important :</strong> Une fois le certificat négatif obtenu, il est valable 90 jours. 
                                        À défaut de l'immatriculation sous ce délai, le certificat perd sa validité.
                                    </p>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-gray-900 mb-4">Documents Requis :</h4>
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                           <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                        <span class="text-gray-700">Trois noms de société au choix</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                        <span class="text-gray-700">Copie de la CIN du demandeur</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                        <span class="text-gray-700">Formulaire de demande rempli</span>
                                    </li>
                                </ul>
                                <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                                    <p class="text-sm text-gray-600">
                                        <i class="fas fa-info-circle text-blue-500 mr-2"></i>
                                        <strong>Bon à savoir :</strong> Ce certificat négatif est facultatif pour les entreprises personne physique.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Étape 2 : Siège Social -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="bg-gradient-to-r from-green-500 to-green-600 p-6 text-white">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-white bg-opacity-20 rounded-full flex items-center justify-center mr-4 font-bold text-xl">2</div>
                            <div>
                                <h3 class="text-2xl font-bold">Le Siège Social</h3>
                                <p class="text-green-100">Domicile juridique et fiscal</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-8">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                            <div>
                                <p class="text-gray-600 mb-6">
                                    L'adresse de siège social de la société en cours de constitution doit être précisée dans les statuts. 
                                    Ce local qui constitue le domicile juridique et fiscal de l'entreprise doit faire l'objet d'un contrat de bail commercial ou d'un contrat de domiciliation.
                                </p>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-gray-900 mb-4">Options Disponibles :</h4>
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <i class="fas fa-building text-blue-500 mr-3 mt-1"></i>
                                        <span class="text-gray-700">Bail commercial</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-home text-green-500 mr-3 mt-1"></i>
                                        <span class="text-gray-700">Contrat de domiciliation</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-key text-purple-500 mr-3 mt-1"></i>
                                        <span class="text-gray-700">Titre de propriété</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Étape 3 : Rédaction des Statuts -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="bg-gradient-to-r from-purple-500 to-purple-600 p-6 text-white">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-white bg-opacity-20 rounded-full flex items-center justify-center mr-4 font-bold text-xl">3</div>
                            <div>
                                <h3 class="text-2xl font-bold">Rédaction des Statuts</h3>
                                <p class="text-purple-100">Document fondamental de la société</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-8">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                            <div>
                                <p class="text-gray-600 mb-6">
                                    Les statuts doivent être établis par écrit. Ils peuvent être rédigés soit par un acte authentique ou par acte sous seing privé.
                                </p>
                                <div class="bg-blue-50 border-l-4 border-blue-400 p-4">
                                    <p class="text-blue-800">
                                        <i class="fas fa-lightbulb mr-2"></i>
                                        <strong>Conseil d'expert :</strong> Nous recommandons de faire appel à un professionnel pour la rédaction des statuts afin d'éviter les erreurs coûteuses.
                                    </p>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-gray-900 mb-4">Contenu des Statuts :</h4>
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                        <span class="text-gray-700">Dénomination sociale</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                        <span class="text-gray-700">Objet social</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                        <span class="text-gray-700">Capital social</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                        <span class="text-gray-700">Durée de la société</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                        <span class="text-gray-700">Gérance et administration</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Étape 4 : Capital Social -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="bg-gradient-to-r from-yellow-500 to-yellow-600 p-6 text-white">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-white bg-opacity-20 rounded-full flex items-center justify-center mr-4 font-bold text-xl">4</div>
                            <div>
                                <h3 class="text-2xl font-bold">Libération du Capital Social et Blocage des Fonds</h3>
                                <p class="text-yellow-100">Minimum 10,000 MAD</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-8">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                            <div>
                                <p class="text-gray-600 mb-6">
                                    La constitution d'une société SARL au Maroc nécessite un capital minimum de 10.000 MAD. 
                                    Mais si le capital social de votre société SARL en cours de constitution est inférieur à 100.000 MAD, 
                                    le dépôt des fonds provenant de la libération de capital n'est pas obligatoire.
                                </p>
                                <div class="bg-red-50 border-l-4 border-red-400 p-4">
                                    <p class="text-red-800">
                                        <i class="fas fa-exclamation-triangle mr-2"></i>
                                        <strong>Attention :</strong> Si le montant du capital social dépasse 100.000 MAD, 
                                        les fonds doivent être déposés dans un compte bloqué en banque.
                                    </p>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-gray-900 mb-4">Règles du Capital :</h4>
                                <div class="space-y-4">
                                    <div class="p-4 bg-green-50 rounded-lg">
                                        <h5 class="font-semibold text-green-800">Capital < 100,000 MAD</h5>
                                        <p class="text-green-700 text-sm">Pas d'obligation de blocage des fonds</p>
                                    </div>
                                    <div class="p-4 bg-yellow-50 rounded-lg">
                                        <h5 class="font-semibold text-yellow-800">Capital > 100,000 MAD</h5>
                                        <p class="text-yellow-700 text-sm">Dépôt obligatoire en compte bloqué + attestation de blocage</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Étape 5 : Enregistrement -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="bg-gradient-to-r from-red-500 to-red-600 p-6 text-white">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-white bg-opacity-20 rounded-full flex items-center justify-center mr-4 font-bold text-xl">5</div>
                            <div>
                                <h3 class="text-2xl font-bold">L'Enregistrement des Actes</h3>
                                <p class="text-red-100">Étape préalable obligatoire</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-8">
                        <p class="text-gray-600 mb-6">
                            L'enregistrement des actes est une étape qui précède l'inscription à la taxe professionnelle et le dépôt des actes au greffe. 
                            Les actes concernés par l'enregistrement sont les statuts, le contrat de bail, le PV de l'assemblée constitutive, les procurations...
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <h4 class="text-lg font-bold text-gray-900 mb-4">Documents à Enregistrer :</h4>
                                <ul class="space-y-2">
                                    <li class="flex items-center">
                                        <i class="fas fa-file-alt text-blue-500 mr-3"></i>
                                        <span class="text-gray-700">Statuts de la société</span>
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-home text-green-500 mr-3"></i>
                                        <span class="text-gray-700">Contrat de bail</span>
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-users text-purple-500 mr-3"></i>
                                        <span class="text-gray-700">PV de l'assemblée constitutive</span>
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-signature text-yellow-500 mr-3"></i>
                                        <span class="text-gray-700">Procurations</span>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-gray-900 mb-4">Où s'adresser :</h4>
                                <div class="p-4 bg-gray-50 rounded-lg">
                                    <p class="text-gray-700">
                                        <i class="fas fa-map-marker-alt text-red-500 mr-2"></i>
                                        Conservation Foncière ou Bureau d'Enregistrement
                                    </p>
                                    <p class="text-gray-600 text-sm mt-2">
                                        Selon la localisation de votre siège social
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Étape 6 : Taxe Professionnelle -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="bg-gradient-to-r from-indigo-500 to-indigo-600 p-6 text-white">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-white bg-opacity-20 rounded-full flex items-center justify-center mr-4 font-bold text-xl">6</div>
                            <div>
                                <h3 class="text-2xl font-bold">Inscription aux Rôles de la Taxe Professionnelle</h3>
                                <p class="text-indigo-100">Obtention de l'IF</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-8">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                            <div>
                                <p class="text-gray-600 mb-6">
                                    L'inscription de la société nouvelle aux rôles de la taxe professionnelle se fait auprès de l'administration fiscale 
                                    ce qui permet à cette entreprise d'obtenir son identifiant à la taxe professionnelle et son identifiant fiscal (IF).
                                </p>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-gray-900 mb-4">Résultats de cette étape :</h4>
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <i class="fas fa-id-card text-blue-500 mr-3 mt-1"></i>
                                        <span class="text-gray-700">Identifiant à la taxe professionnelle</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-hashtag text-green-500 mr-3 mt-1"></i>
                                        <span class="text-gray-700">Identifiant fiscal (IF)</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Étape 7 : Registre de Commerce -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="bg-gradient-to-r from-pink-500 to-pink-600 p-6 text-white">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-white bg-opacity-20 rounded-full flex items-center justify-center mr-4 font-bold text-xl">7</div>
                            <div>
                                <h3 class="text-2xl font-bold">Immatriculation au Registre de Commerce</h3>
                                <p class="text-pink-100">Existence légale de la société</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-8">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                            <div>
                                <p class="text-gray-600 mb-6">
                                    Pour être immatriculé au registre de commerce, une demande doit être déposée au secrétariat-greffe du tribunal de commerce 
                                    dont relève le siège social de l'entreprise.
                                </p>
                                <div class="bg-green-50 border-l-4 border-green-400 p-4">
                                    <p class="text-green-800">
                                        <i class="fas fa-check mr-2"></i>
                                        <strong>Résultat :</strong> Vous obtenez votre numéro RC (Registre de Commerce) 
                                        qui confirme l'existence légale de votre société.
                                    </p>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-gray-900 mb-4">Documents Nécessaires :</h4>
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <i class="fas fa-file-contract text-blue-500 mr-3 mt-1"></i>
                                        <span class="text-gray-700">Statuts enregistrés</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-certificate text-green-500 mr-3 mt-1"></i>
                                        <span class="text-gray-700">Certificat négatif</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-id-card text-purple-500 mr-3 mt-1"></i>
                                        <span class="text-gray-700">CIN des associés</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-receipt text-yellow-500 mr-3 mt-1"></i>
                                        <span class="text-gray-700">Justificatifs d'enregistrement</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Étape 8 : CNSS -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="bg-gradient-to-r from-teal-500 to-teal-600 p-6 text-white">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-white bg-opacity-20 rounded-full flex items-center justify-center mr-4 font-bold text-xl">8</div>
                            <div>
                                <h3 class="text-2xl font-bold">Affiliation à la CNSS</h3>
                                <p class="text-teal-100">Obligation légale</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-8">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                            <div>
                                <p class="text-gray-600 mb-6">
                                    Au Maroc, toutes les entreprises, qu'elles soient personne physique ou morale, doivent être affiliées à la CNSS. 
                                    C'est une obligation légale.
                                </p>
                                <div class="bg-red-50 border-l-4 border-red-400 p-4">
                                    <p class="text-red-800">
                                        <i class="fas fa-exclamation-triangle mr-2"></i>
                                        <strong>Obligatoire :</strong> Cette affiliation doit être effectuée dès le début de l'activité.
                                    </p>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-gray-900 mb-4">Avantages de l'affiliation :</h4>
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <i class="fas fa-shield-alt text-blue-500 mr-3 mt-1"></i>
                                        <span class="text-gray-700">Couverture sociale des employés</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-heartbeat text-red-500 mr-3 mt-1"></i>
                                        <span class="text-gray-700">Prestations maladie</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-money-bill-wave text-green-500 mr-3 mt-1"></i>
                                        <span class="text-gray-700">Prestations familiales</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Étape 9 : Publications -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="bg-gradient-to-r from-orange-500 to-orange-600 p-6 text-white">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-white bg-opacity-20 rounded-full flex items-center justify-center mr-4 font-bold text-xl">9</div>
                            <div>
                                <h3 class="text-2xl font-bold">Publications Officielles (Formalités Publicitaires)</h3>
                                <p class="text-orange-100">Dernière étape obligatoire</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-8">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                            <div>
                                <p class="text-gray-600 mb-6">
                                    La publication doit se faire dans un journal d'annonces légales et aussi dans le bulletin officiel (BO). 
                                    Le texte qui doit être établi en version arabe et en français doit contenir les informations indispensables.
                                </p>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-gray-900 mb-4">Contenu de la publication :</h4>
                                <ul class="space-y-2">
                                    <li class="flex items-center">
                                        <i class="fas fa-dot-circle text-blue-500 mr-3"></i>
                                        <span class="text-gray-700 text-sm">La forme juridique de la société</span>
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-dot-circle text-green-500 mr-3"></i>
                                        <span class="text-gray-700 text-sm">La dénomination sociale</span>
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-dot-circle text-purple-500 mr-3"></i>
                                        <span class="text-gray-700 text-sm">L'objet social</span>
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-dot-circle text-yellow-500 mr-3"></i>
                                        <span class="text-gray-700 text-sm">L'adresse du siège social</span>
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-dot-circle text-red-500 mr-3"></i>
                                        <span class="text-gray-700 text-sm">La durée pour laquelle la société est constituée</span>
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-dot-circle text-indigo-500 mr-3"></i>
                                        <span class="text-gray-700 text-sm">Le montant du capital social</span>
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-dot-circle text-pink-500 mr-3"></i>
                                        <span class="text-gray-700 text-sm">Le prénom, nom, qualité et domicile des associés</span>
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-dot-circle text-teal-500 mr-3"></i>
                                        <span class="text-gray-700 text-sm">Le numéro d'immatriculation au registre du commerce</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Récapitulatif Délais et Coûts -->
    {{-- <section class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Récapitulatif : Délais et Coûts</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Voici un aperçu des délais et coûts moyens pour chaque étape
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Délais -->
                <div class="bg-blue-50 rounded-xl p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">
                        <i class="fas fa-clock text-blue-600 mr-3"></i>
                        Délais Moyens
                    </h3>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <span class="text-gray-700">Certificat négatif</span>
                            <span class="font-bold text-blue-600">1-2 jours</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-700">Rédaction statuts</span>
                            <span class="font-bold text-blue-600">1-2 jours</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-700">Enregistrement</span>
                            <span class="font-bold text-blue-600">1 jour</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-700">Taxe professionnelle</span>
                            <span class="font-bold text-blue-600">1 jour</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-700">Registre de commerce</span>
                            <span class="font-bold text-blue-600">2-3 jours</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-700">Publications</span>
                            <span class="font-bold text-blue-600">1-2 jours</span>
                        </div>
                        <hr class="border-blue-200">
                        <div class="flex justify-between items-center text-lg font-bold">
                            <span class="text-gray-900">Total</span>
                            <span class="text-blue-600">7-11 jours</span>
                        </div>
                    </div>
                </div>

                <!-- Coûts -->
                <div class="bg-green-50 rounded-xl p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">
                        <i class="fas fa-money-bill-wave text-green-600 mr-3"></i>
                        Coûts Approximatifs
                    </h3>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <span class="text-gray-700">Certificat négatif</span>
                            <span class="font-bold text-green-600">230 DH</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-700">Enregistrement statuts</span>
                            <span class="font-bold text-green-600">1,000 DH</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-700">Taxe professionnelle</span>
                            <span class="font-bold text-green-600">150 DH</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-700">Registre de commerce</span>
                            <span class="font-bold text-green-600">350 DH</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-700">Publications</span>
                            <span class="font-bold text-green-600">1,500 DH</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-700">Frais divers</span>
                            <span class="font-bold text-green-600">500 DH</span>
                        </div>
                        <hr class="border-green-200">
                        <div class="flex justify-between items-center text-lg font-bold">
                            <span class="text-gray-900">Total (hors accompagnement)</span>
                            <span class="text-green-600">3,730 DH</span>
                        </div>
                    </div>
                    <div class="mt-4 p-3 bg-white rounded-lg">
                        <p class="text-sm text-gray-600">
                            <i class="fas fa-info-circle text-blue-500 mr-2"></i>
                            Ces montants sont indicatifs et peuvent varier selon les spécificités de votre dossier.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Check-list Documents -->
    <section class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Check-list Complète des Documents</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Préparez tous ces documents pour accélérer votre processus de création
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Documents Obligatoires -->
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-6">
                            <i class="fas fa-star text-yellow-500 mr-3"></i>
                            Documents Obligatoires
                        </h3>
                        <div class="space-y-3">
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600 rounded">
                                <span class="ml-3 text-gray-700">Copie CIN ou passeport des associés</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600 rounded">
                                <span class="ml-3 text-gray-700">Justificatif de domiciliation (bail, contrat ou titre de propriété)</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600 rounded">
                                <span class="ml-3 text-gray-700">Projet de statuts</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600 rounded">
                                <span class="ml-3 text-gray-700">Certificat négatif</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600 rounded">
                                <span class="ml-3 text-gray-700">Attestation de dépôt de capital (si > 100,000 MAD)</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600 rounded">
                                <span class="ml-3 text-gray-700">Formulaires de création (RC, IF, ICE)</span>
                            </label>
                        </div>
                    </div>

                    <!-- Documents Complémentaires -->
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-6">
                            <i class="fas fa-plus-circle text-blue-500 mr-3"></i>
                            Documents Complémentaires
                        </h3>
                        <div class="space-y-3">
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-green-600 rounded">
                                <span class="ml-3 text-gray-700">PV de l'assemblée constitutive</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-green-600 rounded">
                                <span class="ml-3 text-gray-700">Procurations (si nécessaire)</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-green-600 rounded">
                                <span class="ml-3 text-gray-700">Déclaration de souscription et de versement</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-green-600 rounded">
                                <span class="ml-3 text-gray-700">Attestation de gérance</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-green-600 rounded">
                                <span class="ml-3 text-gray-700">Photos d'identité des gérants</span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="mt-8 p-4 bg-blue-50 rounded-lg">
                    <p class="text-blue-800">
                        <i class="fas fa-lightbulb mr-2"></i>
                        <strong>Conseil :</strong> Rassemblez tous ces documents avant de commencer les démarches pour éviter les allers-retours 
                        et accélérer le processus de création de votre SARL.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Erreurs à Éviter -->
    <section class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Erreurs Courantes à Éviter</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Évitez ces pièges fréquents pour un processus de création sans encombre
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Erreur 1 -->
                <div class="bg-red-50 border border-red-200 rounded-xl p-6">
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-exclamation-triangle text-red-600 text-xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Nom de société déjà pris</h3>
                    <p class="text-gray-600 text-sm mb-4">
                        Ne pas vérifier la disponibilité du nom avant de préparer les statuts.
                    </p>
                    <div class="bg-white p-3 rounded border-l-4 border-red-400">
                        <p class="text-red-800 text-sm">
                            <strong>Solution :</strong> Toujours faire une recherche préalable et prévoir 3 noms de secours.
                        </p>
                    </div>
                </div>

                <!-- Erreur 2 -->
                <div class="bg-yellow-50 border border-yellow-200 rounded-xl p-6">
                    <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-clock text-yellow-600 text-xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Délai de validité dépassé</h3>
                    <p class="text-gray-600 text-sm mb-4">
                        Laisser expirer le certificat négatif (90 jours) avant l'immatriculation.
                    </p>
                    <div class="bg-white p-3 rounded border-l-4 border-yellow-400">
                        <p class="text-yellow-800 text-sm">
                            <strong>Solution :</strong> Planifier et respecter scrupuleusement les délais de validité.
                        </p>
                    </div>
                </div>

                <!-- Erreur 3 -->
                <div class="bg-blue-50 border border-blue-200 rounded-xl p-6">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-file-alt text-blue-600 text-xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Statuts mal rédigés</h3>
                    <p class="text-gray-600 text-sm mb-4">
                        Rédiger des statuts incomplets ou non conformes à la législation.
                    </p>
                    <div class="bg-white p-3 rounded border-l-4 border-blue-400">
                        <p class="text-blue-800 text-sm">
                            <strong>Solution :</strong> Faire appel à un professionnel pour la rédaction des statuts.
                        </p>
                    </div>
                </div>

                <!-- Erreur 4 -->
                <div class="bg-green-50 border border-green-200 rounded-xl p-6">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-money-bill-wave text-green-600 text-xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Capital social inadéquat</h3>
                    <p class="text-gray-600 text-sm mb-4">
                        Choisir un capital trop faible par rapport à l'activité envisagée.
                    </p>
                    <div class="bg-white p-3 rounded border-l-4 border-green-400">
                        <p class="text-green-800 text-sm">
                            <strong>Solution :</strong> Évaluer les besoins réels et prévoir un capital cohérent.
                        </p>
                    </div>
                </div>

                <!-- Erreur 5 -->
                <div class="bg-purple-50 border border-purple-200 rounded-xl p-6">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-map-marker-alt text-purple-600 text-xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Problème de domiciliation</h3>
                    <p class="text-gray-600 text-sm mb-4">
                        Utiliser une adresse non conforme ou sans justificatif valable.
                    </p>
                    <div class="bg-white p-3 rounded border-l-4 border-purple-400">
                        <p class="text-purple-800 text-sm">
                            <strong>Solution :</strong> S'assurer de la validité juridique de l'adresse de domiciliation.
                        </p>
                    </div>
                </div>

                <!-- Erreur 6 -->
                <div class="bg-indigo-50 border border-indigo-200 rounded-xl p-6">
                    <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-newspaper text-indigo-600 text-xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Publication incorrecte</h3>
                    <p class="text-gray-600 text-sm mb-4">
                        Publier des annonces légales avec des informations erronées ou incomplètes.
                    </p>
                    <div class="bg-white p-3 rounded border-l-4 border-indigo-400">
                        <p class="text-indigo-800 text-sm">
                            <strong>Solution :</strong> Vérifier minutieusement le contenu avant publication.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Final -->
    <section class="bg-gradient-to-r from-green-600 to-blue-600 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-white mb-4">Besoin d'Aide pour Créer Votre SARL ?</h2>
            <p class="text-xl text-green-100 mb-8 max-w-3xl mx-auto">
                N'attendez plus pour donner vie à votre projet à Marrakech. Contactez-nous dès aujourd'hui et bénéficiez 
                d'un accompagnement sur mesure pour lancer votre entreprise en toute confiance !
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('constitution-sarl') }}" class="bg-white text-green-600 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-100 transition-all transform hover:scale-105">
                    Être accompagné par un expert
                </a>
                <a href="{{ route('contact') }}" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white hover:text-green-600 transition-all">
                    Prendre rendez-vous
                </a>
            </div>
        </div>
    </section>
@endsection