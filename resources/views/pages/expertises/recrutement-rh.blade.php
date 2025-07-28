@extends('layouts.app')

@section('title', 'Recrutement & Management RH à Marrakech - Solutions RH Complètes')
@section('meta-description', 'Services RH complets : définition de poste, aide au recrutement, diagnostic RH et climat social. Optimisez votre capital humain avec nos experts RH.')
@section('keywords', 'recrutement marrakech, management RH, diagnostic RH, climat social, ressources humaines')

@section('content')
    <!-- Breadcrumb -->
    <div class="bg-gray-50 py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="{{ route('accueil') }}" class="text-custom-blue hover:text-blue-800">Accueil</a>
                <i class="fas fa-chevron-right text-gray-400"></i>
                <a href="{{ route('expertises.index') }}" class="text-custom-blue hover:text-blue-800">Nos Expertises</a>
                <i class="fas fa-chevron-right text-gray-400"></i>
                <span class="text-gray-600">Recrutement & Management RH</span>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="w-20 h-20 bg-red-100 rounded-xl flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-users text-red-600 text-3xl"></i>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Recrutement & Management RH : Solutions Complètes pour Optimiser Votre Capital Humain
                </h1>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                    Optimisez la gestion de votre capital humain avec nos services RH sur mesure. De la définition de poste au management des équipes, 
                    nous vous accompagnons pour développer une stratégie RH performante et adaptée à vos enjeux.
                </p>
            </div>
        </div>
    </section>

    <!-- Services RH -->
    <section class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-16">
                <!-- Définition de Poste & Profil -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <div class="bg-gradient-to-br from-blue-500 to-blue-600 p-6 text-white">
                        <div class="w-16 h-16 bg-white bg-opacity-20 rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-user-tie text-white text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-2">Définition de Poste & Profil</h3>
                        <p class="text-blue-100">Structuration et optimisation de vos postes de travail</p>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Nous vous aidons à définir précisément les missions, compétences et profils recherchés pour chaque poste de votre entreprise.
                        </p>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span class="text-gray-700">Analyse des besoins en compétences</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span class="text-gray-700">Rédaction de fiches de poste détaillées</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span class="text-gray-700">Définition des profils de compétences</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span class="text-gray-700">Grilles de rémunération</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Aide au Recrutement -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <div class="bg-gradient-to-br from-green-500 to-green-600 p-6 text-white">
                        <div class="w-16 h-16 bg-white bg-opacity-20 rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-search text-white text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-2">Aide au Recrutement</h3>
                        <p class="text-green-100">Annonces, sélection et accompagnement</p>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Accompagnement complet dans votre processus de recrutement, de la publication d'annonces à la sélection finale des candidats.
                        </p>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span class="text-gray-700">Rédaction et diffusion d'annonces</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span class="text-gray-700">Présélection des candidatures</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span class="text-gray-700">Organisation des entretiens</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span class="text-gray-700">Tests de compétences</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Diagnostic RH & Climat Social -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <div class="bg-gradient-to-br from-purple-500 to-purple-600 p-6 text-white">
                        <div class="w-16 h-16 bg-white bg-opacity-20 rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-chart-bar text-white text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-2">Diagnostic RH & Climat Social</h3>
                        <p class="text-purple-100">Analyse et amélioration du climat de travail</p>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Évaluation complète de votre environnement RH pour identifier les axes d'amélioration et optimiser la performance.
                        </p>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span class="text-gray-700">Audit des pratiques RH</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span class="text-gray-700">Enquêtes de satisfaction</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span class="text-gray-700">Analyse du climat social</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span class="text-gray-700">Plan d'action RH</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Services Complémentaires -->
            <div class="bg-white rounded-xl shadow-lg p-8 mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Services Complémentaires</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="text-center p-6 bg-gray-50 rounded-lg">
                        <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-graduation-cap text-yellow-600 text-xl"></i>
                        </div>
                        <h3 class="font-bold text-gray-900 mb-2">Formation des Équipes</h3>
                        <p class="text-gray-600 text-sm">Programmes de formation adaptés aux besoins de vos collaborateurs</p>
                    </div>

                    <div class="text-center p-6 bg-gray-50 rounded-lg">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-comments text-custom-blue text-xl"></i>
                        </div>
                        <h3 class="font-bold text-gray-900 mb-2">Médiation Sociale</h3>
                        <p class="text-gray-600 text-sm">Résolution des conflits internes et amélioration de la communication</p>
                    </div>

                    <div class="text-center p-6 bg-gray-50 rounded-lg">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-target text-green-600 text-xl"></i>
                        </div>
                        <h3 class="font-bold text-gray-900 mb-2">Évaluation Performance</h3>
                        <p class="text-gray-600 text-sm">Mise en place de systèmes d'évaluation et de suivi des performances</p>
                    </div>

                    <div class="text-center p-6 bg-gray-50 rounded-lg">
                        <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-handshake text-red-600 text-xl"></i>
                        </div>
                        <h3 class="font-bold text-gray-900 mb-2">Relations Sociales</h3>
                        <p class="text-gray-600 text-sm">Accompagnement dans les relations avec les représentants du personnel</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Processus RH -->
    <section class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Secteurs d'Intervention</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Notre expertise RH s'adapte à tous les secteurs d'activité avec des solutions sur mesure
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl shadow-lg p-6 card-hover">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-hospital text-custom-blue text-xl"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900">Professions Libérales</h3>
                    </div>
                    <p class="text-gray-600 text-sm">Cabinets médicaux, avocats, architectes, consultants</p>
                </div>

                <div class="bg-white rounded-xl shadow-lg p-6 card-hover">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-industry text-green-600 text-xl"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900">PME Industrielles</h3>
                    </div>
                    <p class="text-gray-600 text-sm">Manufacturing, production, transformation</p>
                </div>

                <div class="bg-white rounded-xl shadow-lg p-6 card-hover">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-store text-purple-600 text-xl"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900">Commerce & Services</h3>
                    </div>
                    <p class="text-gray-600 text-sm">Retail, restauration, services aux entreprises</p>
                </div>

                <div class="bg-white rounded-xl shadow-lg p-6 card-hover">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-laptop-code text-yellow-600 text-xl"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900">Tech & Digital</h3>
                    </div>
                    <p class="text-gray-600 text-sm">Startups, SSII, agences digitales</p>
                </div>

                <div class="bg-white rounded-xl shadow-lg p-6 card-hover">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-home text-red-600 text-xl"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900">Immobilier</h3>
                    </div>
                    <p class="text-gray-600 text-sm">Promoteurs, agences, syndics de copropriété</p>
                </div>

                <div class="bg-white rounded-xl shadow-lg p-6 card-hover">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-shipping-fast text-indigo-600 text-xl"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900">Import-Export</h3>
                    </div>
                    <p class="text-gray-600 text-sm">Trading, logistique, distribution internationale</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Avantages de nos Services RH -->
    <section class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Pourquoi Externaliser Vos Fonctions RH ?</h2>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center mr-4 mt-1">
                                <i class="fas fa-check text-green-600"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900 mb-2">Expertise Spécialisée</h3>
                                <p class="text-gray-600">Bénéficiez de l'expertise de professionnels RH expérimentés sans les coûts d'un recrutement interne.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-4 mt-1">
                                <i class="fas fa-clock text-custom-blue"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900 mb-2">Gain de Temps</h3>
                                <p class="text-gray-600">Concentrez-vous sur votre cœur de métier pendant que nous gérons vos enjeux RH.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center mr-4 mt-1">
                                <i class="fas fa-chart-line text-purple-600"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900 mb-2">Optimisation des Coûts</h3>
                                <p class="text-gray-600">Réduisez vos coûts RH tout en améliorant la qualité de vos processus.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-yellow-100 rounded-full flex items-center justify-center mr-4 mt-1">
                                <i class="fas fa-shield-alt text-yellow-600"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900 mb-2">Conformité Légale</h3>
                                <p class="text-gray-600">Restez en conformité avec la législation sociale et du travail en constante évolution.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center mr-4 mt-1">
                                <i class="fas fa-users text-red-600"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900 mb-2">Amélioration du Climat Social</h3>
                                <p class="text-gray-600">Créez un environnement de travail motivant et productif pour vos équipes.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Équipe RH" 
                         class="rounded-xl shadow-lg w-full h-96 object-cover mb-8">
                    
                    <!-- Stats -->
                    <div class="grid grid-cols-2 gap-6">
                        <div class="text-center p-6 bg-gradient-to-br from-blue-50 to-blue-100 rounded-lg">
                            <div class="text-3xl font-bold text-custom-blue mb-2">95%</div>
                            <p class="text-sm text-gray-600">Taux de satisfaction client</p>
                        </div>
                        <div class="text-center p-6 bg-gradient-to-br from-green-50 to-green-100 rounded-lg">
                            <div class="text-3xl font-bold text-green-600 mb-2">72h</div>
                            <p class="text-sm text-gray-600">Délai moyen de recrutement</p>
                        </div>
                        <div class="text-center p-6 bg-gradient-to-br from-purple-50 to-purple-100 rounded-lg">
                            <div class="text-3xl font-bold text-purple-600 mb-2">150+</div>
                            <p class="text-sm text-gray-600">Entreprises accompagnées</p>
                        </div>
                        <div class="text-center p-6 bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-lg">
                            <div class="text-3xl font-bold text-yellow-600 mb-2">8 ans</div>
                            <p class="text-sm text-gray-600">Expérience moyenne équipe</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Témoignages -->
    <section class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Ce Que Disent Nos Clients</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Témoignages d'entreprises qui nous font confiance pour leurs enjeux RH
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400 mr-4">
                            @for($i = 0; $i < 5; $i++)
                                <i class="fas fa-star"></i>
                            @endfor
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6 italic">
                        "Leur accompagnement dans notre processus de recrutement a été remarquable. 
                        Nous avons trouvé les profils parfaits en un temps record."
                    </p>
                    <div class="flex items-center">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" 
                             alt="Client" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <p class="font-semibold text-gray-900">Hassan Chraibi</p>
                            <p class="text-sm text-gray-600">DG, TechSolutions</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg p-6">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400 mr-4">
                            @for($i = 0; $i < 5; $i++)
                                <i class="fas fa-star"></i>
                            @endfor
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6 italic">
                        "Le diagnostic RH réalisé nous a permis d'identifier et de résoudre des problèmes 
                        que nous n'arrivions pas à cerner. Excellente approche !"
                    </p>
                    <div class="flex items-center">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b182?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" 
                             alt="Client" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <p class="font-semibold text-gray-900">Leila Benkirane</p>
                            <p class="text-sm text-gray-600">RH Manager, Atlas Industries</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg p-6">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400 mr-4">
                            @for($i = 0; $i < 5; $i++)
                                <i class="fas fa-star"></i>
                            @endfor
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6 italic">
                        "Une équipe professionnelle qui comprend vraiment les enjeux RH des PME. 
                        Leur support nous fait gagner un temps précieux."
                    </p>
                    <div class="flex items-center">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" 
                             alt="Client" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <p class="font-semibold text-gray-900">Omar Tazi</p>
                            <p class="text-sm text-gray-600">Fondateur, GreenEnergy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-gradient-to-r from-red-600 to-purple-600 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-white mb-4">Optimisez Votre Gestion RH dès Aujourd'hui</h2>
            <p class="text-xl text-red-100 mb-8 max-w-3xl mx-auto">
                Faites confiance à nos experts RH pour développer votre capital humain et améliorer 
                la performance de vos équipes. Contactez-nous pour un diagnostic gratuit.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="bg-white text-red-600 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-100 transition-all transform hover:scale-105">
                    Demander un diagnostic RH
                </a>
                <a href="tel:+212524XXXXXX" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white hover:text-red-600 transition-all">
                    Appeler nos experts
                </a>
            </div>
        </div>
    </section>
@endsection