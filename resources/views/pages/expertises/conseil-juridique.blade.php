@extends('layouts.app')

@section('title', 'Services Juridiques à Marrakech : Conseil et Assistance pour Entreprises')
@section('meta_description', 'Cabinet de conseil juridique à Marrakech : création de sociétés, modifications statutaires, médiation, suivi juridique. Un partenaire fiable pour sécuriser vos démarches.')
@section('keywords', 'conseil juridique marrakech, création société, modifications statutaires, médiation arbitrage, droit des sociétés')

@section('content')
    <!-- Breadcrumb -->
    <div class="bg-gray-50 py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="{{ route('accueil') }}" class="text-custom-blue hover:text-blue-800">Accueil</a>
                <i class="fas fa-chevron-right text-gray-400"></i>
                <a href="{{ route('expertises.index') }}" class="text-custom-blue hover:text-blue-800">Nos Expertises</a>
                <i class="fas fa-chevron-right text-gray-400"></i>
                <span class="text-gray-600">Conseil Juridique</span>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="w-20 h-20 bg-green-100 rounded-xl flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-balance-scale text-green-600 text-3xl"></i>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Conseil juridique pour entreprises : Création, suivi et accompagnement sur mesure
                </h1>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                    Notre cabinet d'expertise juridique accompagne les dirigeants et entrepreneurs dans toutes leurs 
                    démarches juridiques : constitution de société, modification des statuts, suivi juridique annuel, 
                    médiation et arbitrage. Bénéficiez d'un accompagnement juridique conforme et adapté à vos besoins.
                </p>
            </div>
        </div>
    </section>

    <!-- Services Juridiques -->
    <section class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Introduction -->
            <div class="bg-white rounded-xl shadow-lg p-8 mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-6 text-center">Pourquoi choisir notre cabinet pour votre conseil juridique ?</h2>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span>Expertise combinée en comptabilité et droit des sociétés</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span>Accompagnement personnalisé et réactif</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span>Gain de temps et sécurité juridique assurée pour votre entreprise</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span>Relation de confiance et proximité avec nos clients</span>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="Conseil juridique Marrakech" 
                             class="rounded-lg shadow-lg w-full h-64 object-cover">
                    </div>
                </div>
            </div>

            <!-- Services Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-16">
                <!-- Constitution de Sociétés -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <div class="bg-gradient-to-br from-blue-500 to-blue-600 p-6 text-white">
                        <div class="w-16 h-16 bg-white bg-opacity-20 rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-building text-white text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-2">Constitution de Sociétés</h3>
                        <p class="text-blue-100">Création et formalités juridiques complètes</p>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">Vous souhaitez constituer une société à Marrakech ? Notre service juridique vous accompagne à chaque étape de la création de société.</p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-sm">
                                <i class="fas fa-arrow-right text-blue-500 mr-2"></i>
                                <span>SARL, SARL AU, SCI, SCP, SNC</span>
                            </li>
                            <li class="flex items-center text-sm">
                                <i class="fas fa-arrow-right text-blue-500 mr-2"></i>
                                <span>Rédaction des statuts</span>
                            </li>
                            <li class="flex items-center text-sm">
                                <i class="fas fa-arrow-right text-blue-500 mr-2"></i>
                                <span>Formalités d'immatriculation</span>
                            </li>
                            <li class="flex items-center text-sm">
                                <i class="fas fa-arrow-right text-blue-500 mr-2"></i>
                                <span>Accompagnement stratégique</span>
                            </li>
                        </ul>
                        <a href="{{ route('guide-creation-sarl') }}" class="text-custom-blue font-semibold hover:text-blue-800 transition-colors">
                            Guide création SARL <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Modifications Statutaires -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <div class="bg-gradient-to-br from-purple-500 to-purple-600 p-6 text-white">
                        <div class="w-16 h-16 bg-white bg-opacity-20 rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-edit text-white text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-2">Modifications Statutaires</h3>
                        <p class="text-purple-100">Mise à jour juridique des statuts</p>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">Nous intervenons dans toutes les démarches de mise à jour juridique des statuts notamment :</p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-sm">
                                <i class="fas fa-arrow-right text-purple-500 mr-2"></i>
                                <span>Changement dénomination sociale</span>
                            </li>
                            <li class="flex items-center text-sm">
                                <i class="fas fa-arrow-right text-purple-500 mr-2"></i>
                                <span>Modification objet social</span>
                            </li>
                            <li class="flex items-center text-sm">
                                <i class="fas fa-arrow-right text-purple-500 mr-2"></i>
                                <span>Transfert siège social</span>
                            </li>
                            <li class="flex items-center text-sm">
                                <i class="fas fa-arrow-right text-purple-500 mr-2"></i>
                                <span>Augmentation/réduction capital</span>
                            </li>
                        </ul>
                        <div class="bg-purple-50 p-3 rounded-lg">
                            <p class="text-xs text-purple-700">Publication obligatoire au journal d'annonces légales et au BO</p>
                        </div>
                    </div>
                </div>

                <!-- Médiation et Arbitrage -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <div class="bg-gradient-to-br from-green-500 to-green-600 p-6 text-white">
                        <div class="w-16 h-16 bg-white bg-opacity-20 rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-handshake text-white text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-2">Médiation et Arbitrage</h3>
                        <p class="text-green-100">Résolution amiable des conflits</p>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">Modes alternatifs de règlement des différends plus rapides, moins coûteux et confidentiels.</p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-sm">
                                <i class="fas fa-arrow-right text-green-500 mr-2"></i>
                                <span>Médiation d'entreprise</span>
                            </li>
                            <li class="flex items-center text-sm">
                                <i class="fas fa-arrow-right text-green-500 mr-2"></i>
                                <span>Arbitrage commercial</span>
                            </li>
                            <li class="flex items-center text-sm">
                                <i class="fas fa-arrow-right text-green-500 mr-2"></i>
                                <span>Gestion des litiges</span>
                            </li>
                            <li class="flex items-center text-sm">
                                <i class="fas fa-arrow-right text-green-500 mr-2"></i>
                                <span>Expert-médiateur arbitre</span>
                            </li>
                        </ul>
                        <div class="bg-green-50 p-3 rounded-lg">
                            <p class="text-xs text-green-700">Préservation des relations commerciales garantie</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Constitution de Sociétés Détaillée -->
    <section class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">
                        <i class="fas fa-building text-custom-blue mr-3"></i>
                        Guide pour la Création d'une Société au Maroc
                    </h2>
                    <p class="text-gray-600 mb-6">
                        La création d'une société au Maroc comprend plusieurs étapes essentielles que notre équipe maîtrise parfaitement. 
                        Nous vous accompagnons dans chaque démarche pour garantir une constitution rapide et conforme.
                    </p>
                    <div class="bg-blue-50 rounded-lg p-6">
                        <h3 class="font-bold text-blue-900 mb-3">
                            <i class="fas fa-clock text-custom-blue mr-2"></i>
                            Délai de Création
                        </h3>
                        <p class="text-blue-700 text-sm mb-4">
                            En moyenne, la création d'une SARL peut prendre entre <strong>3 et 10 jours ouvrables</strong>, 
                            selon la réactivité de l'administration et la complétude du dossier.
                        </p>
                        <a href="{{ route('contact') }}" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors inline-flex items-center">
                            <i class="fas fa-rocket mr-2"></i>
                            Créer ma société
                        </a>
                    </div>
                </div>
                <div>
                    <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Création société Marrakech" 
                         class="rounded-xl shadow-lg w-full h-96 object-cover">
                </div>
            </div>

            <!-- Étapes de Création -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-gray-50 rounded-xl p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Étapes de Création d'une Société</h3>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center mr-4 mt-1 text-sm font-bold">
                                1
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Choix de la forme juridique</h4>
                                <p class="text-gray-600 text-sm">SARL, SA, SNC, etc.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center mr-4 mt-1 text-sm font-bold">
                                2
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Réservation du nom commercial</h4>
                                <p class="text-gray-600 text-sm">À l'OMPIC</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center mr-4 mt-1 text-sm font-bold">
                                3
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Rédaction des statuts</h4>
                                <p class="text-gray-600 text-sm">Acte authentique ou sous seing privé</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center mr-4 mt-1 text-sm font-bold">
                                4
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Dépôt du capital social</h4>
                                <p class="text-gray-600 text-sm">Minimum 10 000 MAD pour SARL</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-green-50 rounded-xl p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Documents Nécessaires</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-file-alt text-green-600 mr-3 mt-1"></i>
                            <span class="text-gray-700">Copie CIN ou passeport des associés</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-home text-green-600 mr-3 mt-1"></i>
                            <span class="text-gray-700">Justificatif de domiciliation (bail, contrat de domiciliation ou titre de propriété)</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-scroll text-green-600 mr-3 mt-1"></i>
                            <span class="text-gray-700">Projet de statuts</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-certificate text-green-600 mr-3 mt-1"></i>
                            <span class="text-gray-700">Certificat négatif</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-university text-green-600 mr-3 mt-1"></i>
                            <span class="text-gray-700">Attestation de dépôt de capital</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-clipboard-list text-green-600 mr-3 mt-1"></i>
                            <span class="text-gray-700">Formulaires de création (RC, IF, ICE)</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-900">Foire Aux Questions</h2>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Constitution de sociétés -->
                <div class="space-y-6">
                    <h3 class="text-2xl font-semibold text-custom-blue mb-6">
                        <i class="fas fa-building mr-2"></i>
                        Constitution de sociétés
                    </h3>
                    
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h4 class="font-semibold text-lg mb-3 text-gray-800">
                            Q1 : Quelles sont les formes juridiques les plus courantes au Maroc ?
                        </h4>
                        <div class="text-gray-600">
                            <ul class="space-y-2">
                                <li><strong>SARL</strong> : pour les petites et moyennes entreprises</li>
                                <li><strong>SA</strong> : pour les grandes entreprises avec appel à l'épargne</li>
                                <li><strong>SNC</strong> : pour des projets immobiliers familiaux ou de confiance mutuelle</li>
                            </ul>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h4 class="font-semibold text-lg mb-3 text-gray-800">
                            Q2 : Y a-t-il un capital minimum pour créer une SARL ?
                        </h4>
                        <p class="text-gray-600">
                            Le capital minimum est de <strong>10 000 MAD</strong>, mais il est recommandé de 
                            constituer un capital cohérent avec l'activité.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h4 class="font-semibold text-lg mb-3 text-gray-800">
                            Q3 : Peut-on créer une SARL avec un seul associé ?
                        </h4>
                        <p class="text-gray-600">
                            Oui, c'est possible. On parle alors de <strong>SARL à associé unique (SARL AU)</strong>.
                        </p>
                    </div>
                </div>

                <!-- Modifications statutaires & Médiation -->
                <div class="space-y-6">
                    <h3 class="text-2xl font-semibold text-purple-600 mb-6">
                        <i class="fas fa-edit mr-2"></i>
                        Modifications & Médiation
                    </h3>
                    
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h4 class="font-semibold text-lg mb-3 text-gray-800">
                            Q4 : Faut-il publier un avis légal en cas de modification statutaire ?
                        </h4>
                        <p class="text-gray-600">
                            Oui, toute modification des statuts doit faire l'objet d'une modification au niveau du Registre 
                            de Commerce et d'un <strong>avis publié dans un journal d'annonces légales</strong> et au 
                            <strong>Bulletin Officiel</strong>.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h4 class="font-semibold text-lg mb-3 text-gray-800">
                            Q5 : Quelle est la différence entre médiation et arbitrage ?
                        </h4>
                        <div class="text-gray-600">
                            <ul class="space-y-2">
                                <li><strong>Médiation</strong> : processus amiable où un tiers neutre aide les parties à trouver une solution consensuelle</li>
                                <li><strong>Arbitrage</strong> : procédure plus formelle où un arbitre tranche le litige et rend une décision exécutoire</li>
                            </ul>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h4 class="font-semibold text-lg mb-3 text-gray-800">
                            Q6 : Dans quels cas peut-on recourir à la médiation ?
                        </h4>
                        <p class="text-gray-600">
                            La médiation est recommandée en cas de <strong>conflits entre associés</strong>, 
                            <strong>litiges commerciaux</strong>, <strong>conflits de gestion</strong>, ou pour toute 
                            situation nécessitant un règlement sans passer par la justice classique.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-gradient-to-r from-blue-600 to-green-600 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-white mb-4">Besoin d'un accompagnement juridique ?</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-3xl mx-auto">
                Contactez notre cabinet d'expertise juridique pour un conseil personnalisé et sécurisez 
                vos démarches juridiques dès aujourd'hui.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="bg-white text-custom-blue px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-100 transition-all transform hover:scale-105">
                    Consultation Gratuite
                </a>
                <a href="tel:+212524XXXXXX" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white hover:text-custom-blue transition-all">
                    Appeler maintenant
                </a>
            </div>
        </div>
    </section>
@endsection