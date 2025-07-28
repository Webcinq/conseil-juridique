@extends('layouts.app')

@section('title', 'Contentieux Fiscal au Maroc - Défense en Cas de Litige avec l\'Administration')
@section('meta-description', 'Vous faites face à un litige fiscal ? Notre cabinet vous accompagne dans vos recours, vos réponses à l\'administration et la gestion du contentieux fiscal partout au Maroc.')
@section('keywords', 'contentieux fiscal maroc, litige fiscal, recours fiscal, redressement fiscal, tribunal administratif')

@section('content')
    <!-- Breadcrumb -->
    <div class="bg-gray-50 py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="{{ route('accueil') }}" class="text-custom-blue hover:text-blue-800">Accueil</a>
                <i class="fas fa-chevron-right text-gray-400"></i>
                <a href="{{ route('conseil-fiscal') }}" class="text-custom-blue hover:text-blue-800">Conseil Fiscal</a>
                <i class="fas fa-chevron-right text-gray-400"></i>
                <span class="text-gray-600">Contentieux Fiscal</span>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="w-20 h-20 bg-purple-100 rounded-xl flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-gavel text-purple-600 text-3xl"></i>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Contentieux Fiscal au Maroc : Défendez Vos Droits avec un Accompagnement Professionnel
                </h1>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                    Être en désaccord avec l'administration fiscale peut être une source d'inquiétude et de stress pour un chef d'entreprise. 
                    Notre cabinet, spécialisé dans tous les domaines de la fiscalité marocaine, offre des solutions sur mesure pour répondre à vos besoins fiscaux spécifiques.
                </p>
            </div>
        </div>
    </section>

    <!-- Notre Expertise -->
    <section class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Une Expertise Complète en Contentieux Fiscal</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Notre cabinet réunit des experts dans le domaine des impôts et taxes, prêts à vous accompagner dans la gestion de votre contentieux fiscal.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
                <div>
                    <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Contentieux fiscal" 
                         class="rounded-xl shadow-lg w-full h-96 object-cover">
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Nos Domaines d'Intervention</h3>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-4 mt-1">
                                <i class="fas fa-file-alt text-custom-blue"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-2">Démarches de Régularisation</h4>
                                <p class="text-gray-600 text-sm">Accompagnement dans vos démarches de mise en conformité fiscale</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center mr-4 mt-1">
                                <i class="fas fa-exclamation-triangle text-green-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-2">Réclamations Contentieuses</h4>
                                <p class="text-gray-600 text-sm">Gestion de vos contestations auprès de l'administration fiscale</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center mr-4 mt-1">
                                <i class="fas fa-shield-alt text-purple-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-2">Contrôle Fiscal</h4>
                                <p class="text-gray-600 text-sm">Assistance et défense lors des vérifications fiscales</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-yellow-100 rounded-full flex items-center justify-center mr-4 mt-1">
                                <i class="fas fa-handshake text-yellow-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-2">Négociations Amiables</h4>
                                <p class="text-gray-600 text-sm">Recherche de solutions consensuelles avec l'administration</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center mr-4 mt-1">
                                <i class="fas fa-balance-scale text-red-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-2">Voies de Recours</h4>
                                <p class="text-gray-600 text-sm">Recours administratif et juridictionnel devant les tribunaux</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Zone d'Intervention -->
            <div class="bg-blue-50 rounded-xl p-8 text-center">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Zone d'Intervention</h3>
                <p class="text-gray-600 mb-6">
                    Spécialisé en fiscalité d'entreprise et contentieux fiscal, notre cabinet intervient principalement dans la région de Marrakech. 
                    Cependant, les dossiers provenant d'autres villes du Maroc peuvent être étudiés au cas par cas.
                </p>
                <div class="flex items-center justify-center space-x-8">
                    <div class="text-center">
                        <i class="fas fa-map-marker-alt text-custom-blue text-2xl mb-2"></i>
                        <p class="font-semibold text-gray-900">Marrakech</p>
                        <p class="text-gray-600 text-sm">Zone principale</p>
                    </div>
                    <div class="text-center">
                        <i class="fas fa-globe text-green-600 text-2xl mb-2"></i>
                        <p class="font-semibold text-gray-900">Tout le Maroc</p>
                        <p class="text-gray-600 text-sm">Selon complexité</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quand Parle-t-on de Contentieux -->
    <section class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Quand Parle-t-on de Contentieux Fiscal ?</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Le contentieux fiscal intervient généralement lorsqu'un désaccord survient avec l'administration
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
                <!-- Redressement Fiscal -->
                <div class="bg-red-50 border-l-4 border-red-400 rounded-lg p-8">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-file-invoice text-red-600 text-2xl mr-4"></i>
                        <h3 class="text-xl font-bold text-gray-900">Redressement Fiscal</h3>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Suite à un contrôle fiscal, l'administration peut proposer des rectifications concernant :
                    </p>
                    <ul class="space-y-2">
                        <li class="flex items-center">
                            <i class="fas fa-arrow-right text-red-500 mr-3"></i>
                            <span class="text-gray-700">Impôt sur les Sociétés (IS)</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-arrow-right text-red-500 mr-3"></i>
                            <span class="text-gray-700">Taxe sur la Valeur Ajoutée (TVA)</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-arrow-right text-red-500 mr-3"></i>
                            <span class="text-gray-700">Impôt sur le Revenu (IR)</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-arrow-right text-red-500 mr-3"></i>
                            <span class="text-gray-700">Autres taxes et impôts</span>
                        </li>
                    </ul>
                </div>

                <!-- Imposition Injustifiée -->
                <div class="bg-yellow-50 border-l-4 border-yellow-400 rounded-lg p-8">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-exclamation-triangle text-yellow-600 text-2xl mr-4"></i>
                        <h3 class="text-xl font-bold text-gray-900">Imposition Jugée Injustifiée</h3>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Lorsque vous estimez qu'une imposition n'est pas fondée légalement :
                    </p>
                    <ul class="space-y-2">
                        <li class="flex items-center">
                            <i class="fas fa-arrow-right text-yellow-500 mr-3"></i>
                            <span class="text-gray-700">Erreur d'interprétation de la loi</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-arrow-right text-yellow-500 mr-3"></i>
                            <span class="text-gray-700">Application incorrecte des textes</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-arrow-right text-yellow-500 mr-3"></i>
                            <span class="text-gray-700">Violation des droits du contribuable</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-arrow-right text-yellow-500 mr-3"></i>
                            <span class="text-gray-700">Défaut de motivation</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Nos Prestations -->
    <section class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Nos Prestations en Matière de Contentieux Fiscal</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Un accompagnement complet et personnalisé pour défendre efficacement vos droits
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Étude du Dossier -->
                <div class="bg-white rounded-xl shadow-lg p-8 card-hover">
                    <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-search text-custom-blue text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Étude du Dossier</h3>
                    <p class="text-gray-600 mb-4">Analyse complète et méticuleuse de votre situation fiscale</p>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Examen des pièces justificatives</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Vérification de la procédure</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Identification des moyens de défense</span>
                        </li>
                    </ul>
                </div>

                <!-- Analyse Juridique -->
                <div class="bg-white rounded-xl shadow-lg p-8 card-hover">
                    <div class="w-16 h-16 bg-green-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-balance-scale text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Analyse des Fondements Juridiques</h3>
                    <p class="text-gray-600 mb-4">Évaluation de la position de l'administration fiscale</p>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Vérification de la base légale</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Contrôle de la motivation</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Respect des droits de la défense</span>
                        </li>
                    </ul>
                </div>

                <!-- Rédaction de Réponse -->
                <div class="bg-white rounded-xl shadow-lg p-8 card-hover">
                    <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-pen text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Rédaction de la Réponse</h3>
                    <p class="text-gray-600 mb-4">Réponse argumentée à la proposition de rectification</p>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Arguments juridiques solides</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Références légales précises</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Respect des délais procéduraux</span>
                        </li>
                    </ul>
                </div>

                <!-- Recours Gracieux -->
                <div class="bg-white rounded-xl shadow-lg p-8 card-hover">
                    <div class="w-16 h-16 bg-yellow-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-handshake text-yellow-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Recours Gracieux et Hiérarchique</h3>
                    <p class="text-gray-600 mb-4">Tentative de résolution amiable du litige</p>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Négociation avec l'administration</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Recherche de solutions équitables</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Suivi des démarches</span>
                        </li>
                    </ul>
                </div>

                <!-- Accompagnement Contentieux -->
                <div class="bg-white rounded-xl shadow-lg p-8 card-hover">
                    <div class="w-16 h-16 bg-red-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-gavel text-red-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Accompagnement en Phase Contentieuse</h3>
                    <p class="text-gray-600 mb-4">Représentation devant les juridictions fiscales</p>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Préparation du dossier</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Collaboration avec votre avocat</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Suivi de la procédure</span>
                        </li>
                    </ul>
                </div>

                <!-- Conseil Stratégique -->
                <div class="bg-white rounded-xl shadow-lg p-8 card-hover">
                    <div class="w-16 h-16 bg-indigo-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-chess text-indigo-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Conseil Stratégique</h3>
                    <p class="text-gray-600 mb-4">Orientation sur la meilleure stratégie à adopter</p>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Évaluation des chances de succès</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Analyse coût/bénéfice</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Recommandations personnalisées</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Pourquoi Faire Appel à Nous -->
    <section class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Pourquoi Faire Appel à Notre Cabinet ?</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Une expertise reconnue et une approche personnalisée pour défendre efficacement vos intérêts
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-map-marker-alt text-custom-blue text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Intervention Locale</h3>
                    <p class="text-gray-600 text-sm">
                        Présence à Marrakech et intervention partout au Maroc selon la complexité du dossier
                    </p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-user-secret text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Confidentialité et Écoute</h3>
                    <p class="text-gray-600 text-sm">
                        Respect strict de la confidentialité et écoute attentive de vos préoccupations
                    </p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-graduation-cap text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Maîtrise du Droit Fiscal</h3>
                    <p class="text-gray-600 text-sm">
                        Connaissance approfondie du droit fiscal marocain et des procédures contentieuses
                    </p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-clock text-yellow-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Réactivité</h3>
                    <p class="text-gray-600 text-sm">
                        Intervention rapide et respect des délais procéduraux stricts
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Processus de Gestion -->
    <section class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Notre Processus de Gestion du Contentieux</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Une méthodologie éprouvée pour maximiser vos chances de succès
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                <!-- Étape 1 -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 font-bold text-xl">1</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Analyse Initial</h3>
                    <p class="text-gray-600 text-sm">Étude approfondie de votre dossier et des actes de l'administration</p>
                </div>

                <!-- Étape 2 -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-green-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 font-bold text-xl">2</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Stratégie</h3>
                    <p class="text-gray-600 text-sm">Élaboration de la stratégie de défense la plus adaptée</p>
                </div>

                <!-- Étape 3 -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-purple-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 font-bold text-xl">3</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Recours</h3>
                    <p class="text-gray-600 text-sm">Mise en œuvre des recours gracieux ou hiérarchiques</p>
                </div>

                <!-- Étape 4 -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-yellow-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 font-bold text-xl">4</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Négociation</h3>
                    <p class="text-gray-600 text-sm">Tentative de résolution amiable avec l'administration</p>
                </div>

                <!-- Étape 5 -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-red-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 font-bold text-xl">5</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Contentieux</h3>
                    <p class="text-gray-600 text-sm">Si nécessaire, accompagnement devant les juridictions</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="bg-white py-20">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Questions Fréquentes</h2>
                <p class="text-xl text-gray-600">Réponses aux questions les plus courantes sur le contentieux fiscal</p>
            </div>

            <div class="space-y-6">
                <div class="bg-gray-50 rounded-lg p-6">
                    <button onclick="toggleFAQ(this)" class="w-full text-left flex items-center justify-between">
                        <h3 class="text-lg font-semibold text-gray-900">Qu'est-ce qu'un contentieux fiscal ?</h3>
                        <i class="fas fa-chevron-down text-gray-400"></i>
                    </button>
                    <div class="hidden mt-4">
                        <p class="text-gray-600">
                            Il s'agit d'un désaccord formel entre un contribuable et l'administration fiscale, 
                            généralement à la suite d'un redressement, un rejet d'une réclamation ou une imposition non justifiée.
                        </p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-lg p-6">
                    <button onclick="toggleFAQ(this)" class="w-full text-left flex items-center justify-between">
                        <h3 class="text-lg font-semibold text-gray-900">Que faire après avoir reçu une notification de rectification ?</h3>
                        <i class="fas fa-chevron-down text-gray-400"></i>
                    </button>
                    <div class="hidden mt-4">
                        <p class="text-gray-600">
                            Il est essentiel d'analyser le document avec un professionnel. Vous disposez d'un délai pour formuler 
                            une réponse argumentée avant que les redressements ne soient appliqués. Ne laissez jamais passer ce délai.
                        </p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-lg p-6">
                    <button onclick="toggleFAQ(this)" class="w-full text-left flex items-center justify-between">
                        <h3 class="text-lg font-semibold text-gray-900">Peut-on contester une décision de l'administration fiscale ?</h3>
                        <i class="fas fa-chevron-down text-gray-400"></i>
                    </button>
                    <div class="hidden mt-4">
                        <p class="text-gray-600">
                            Oui, par un recours gracieux, hiérarchique ou contentieux devant le tribunal administratif, selon les cas. 
                            Chaque voie de recours a ses spécificités et ses délais qu'il faut respecter scrupuleusement.
                        </p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-lg p-6">
                    <button onclick="toggleFAQ(this)" class="w-full text-left flex items-center justify-between">
                        <h3 class="text-lg font-semibold text-gray-900">Intervenez-vous en dehors de Marrakech ?</h3>
                        <i class="fas fa-chevron-down text-gray-400"></i>
                    </button>
                    <div class="hidden mt-4">
                        <p class="text-gray-600">
                            Notre cabinet est basé à Marrakech, mais nous pouvons étudier certains dossiers en dehors de la région, 
                            selon leur nature et leur complexité. Contactez-nous pour évaluer votre situation.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Final -->
    <section class="bg-gradient-to-r from-purple-600 to-blue-600 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-white mb-4">Contactez-nous pour une Évaluation de Votre Litige Fiscal</h2>
            <p class="text-xl text-purple-100 mb-8 max-w-3xl mx-auto">
                Si vous avez reçu une notification de redressement fiscal, <strong>ne répondez pas seul</strong>. 
                Prenez rendez-vous dans nos locaux à Marrakech pour une analyse personnalisée de votre dossier.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="bg-white text-purple-600 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-100 transition-all transform hover:scale-105">
                    Analyse gratuite de votre dossier
                </a>
                <a href="tel:+212524XXXXXX" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white hover:text-purple-600 transition-all">
                    Appel urgent
                </a>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
function toggleFAQ(element) {
    const answer = element.nextElementSibling;
    const icon = element.querySelector('i');
    
    if (answer.classList.contains('hidden')) {
        answer.classList.remove('hidden');
        icon.classList.remove('fa-chevron-down');
        icon.classList.add('fa-chevron-up');
    } else {
        answer.classList.add('hidden');
        icon.classList.remove('fa-chevron-up');
        icon.classList.add('fa-chevron-down');
    }
}
</script>
@endpush