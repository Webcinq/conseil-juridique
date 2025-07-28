@extends('layouts.app')

@section('title', 'Conseil en entrepreneuriat : Étude de projet, business plan et stratégie de lancement')
@section('meta-description', 'Validez la faisabilité de votre projet d\'entreprise grâce à un accompagnement stratégique : business plan, étude de marché, prévisionnel financier. Construisez une base solide.')
@section('keywords', 'conseil entrepreneuriat, business plan, étude faisabilité, création entreprise marrakech, accompagnement entrepreneur')

@section('content')
    <!-- Breadcrumb -->
    <div class="bg-gray-50 py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="{{ route('accueil') }}" class="text-blue-600 hover:text-blue-800">Accueil</a>
                <i class="fas fa-chevron-right text-gray-400"></i>
                <a href="{{ route('expertises.index') }}" class="text-blue-600 hover:text-blue-800">Nos Expertises</a>
                <i class="fas fa-chevron-right text-gray-400"></i>
                <span class="text-gray-600">Conseil en Entrepreneuriat</span>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="w-20 h-20 bg-yellow-100 rounded-xl flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-lightbulb text-yellow-600 text-3xl"></i>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Conseil en Entrepreneuriat : Un Accompagnement d'Expert pour Concrétiser Votre Projet
                </h1>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                    Vous avez une idée d'entreprise mais vous ne savez pas par où commencer ? Notre cabinet vous propose un 
                    <strong>accompagnement sur mesure à chaque étape de votre parcours entrepreneurial</strong>, de l'idée 
                    initiale jusqu'à la constitution définitive de votre société.
                </p>
            </div>
        </div>
    </section>

    <!-- Services Principaux -->
    <section class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
                <div>
                    <img src="https://images.unsplash.com/photo-1559136555-9303baea8ebd?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Conseil entrepreneuriat Marrakech" 
                         class="rounded-xl shadow-lg w-full h-96 object-cover">
                </div>
                <div class="space-y-8">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">
                            <i class="fas fa-rocket text-yellow-600 mr-3"></i>
                            Création d'Entreprise
                        </h2>
                        <p class="text-gray-600 mb-4">
                            Nous vous assistons à chaque étape de la création de votre entreprise pour sécuriser votre lancement et poser les bases d'un projet viable. 
                            Cela inclut également l'<strong>accompagnement juridique complet lors de la constitution de votre société</strong>, 
                            de la rédaction des statuts à l'immatriculation au registre de commerce.
                        </p>
                        <a href="{{ route('creation-entreprise') }}" class="text-blue-600 font-semibold hover:text-blue-800 transition-colors">
                            En savoir plus sur notre service de constitution de sociétés <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>

                    <div>
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">
                            <i class="fas fa-search text-green-600 mr-3"></i>
                            Étude de Faisabilité de Projets
                        </h2>
                        <p class="text-gray-600 mb-4">
                            Avant d'investir dans votre temps et dans vos ressources, il est indispensable de commencer par la validation de la viabilité de votre idée. 
                            Nous réalisons une analyse approfondie de la faisabilité de votre projet entrepreneurial, en tenant compte de :
                        </p>
                        <ul class="space-y-2">
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                L'environnement économique fiscal et social
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                L'environnement concurrentiel
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Les besoins du marché et les attentes des clients
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Vos ressources techniques, humaines et financières
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                L'évaluation des risques et des contraintes potentielles
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                La rentabilité prévisionnelle
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Business Plan Section -->
            <div class="bg-white rounded-xl shadow-lg p-8 mb-16">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">
                            <i class="fas fa-chart-bar text-blue-600 mr-3"></i>
                            Élaboration de Business Plan
                        </h2>
                        <p class="text-gray-600 mb-6">
                            Un business plan solide est essentiel pour obtenir un financement. Pour cela nous vous aidons à établir 
                            un document clair et bien structuré comprenant :
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                    <span class="text-gray-700">La présentation du projet</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                    <span class="text-gray-700">L'analyse de marché et la stratégie commerciale</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                    <span class="text-gray-700">Le plan d'action opérationnel</span>
                                </li>
                            </ul>
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                    <span class="text-gray-700">Le prévisionnel financier (compte de résultat, plan de financement, trésorerie)</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                    <span class="text-gray-700">Les besoins en financement</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                    <span class="text-gray-700">Les perspectives de rentabilité</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="Business plan" 
                             class="rounded-lg shadow-lg w-full h-80 object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Processus d'Accompagnement -->
    <section class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Notre Processus d'Accompagnement</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Une méthodologie éprouvée pour transformer votre idée en entreprise viable et rentable
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Étape 1 -->
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-8 card-hover">
                    <div class="w-16 h-16 bg-blue-600 text-white rounded-full flex items-center justify-center mb-6 font-bold text-2xl">1</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Analyse de Votre Projet</h3>
                    <p class="text-gray-600 mb-4">Étude approfondie de votre idée, de vos compétences et de votre marché cible.</p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-dot-circle text-blue-500 mr-2"></i>
                            Entretien personnalisé
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-dot-circle text-blue-500 mr-2"></i>
                            Analyse de faisabilité
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-dot-circle text-blue-500 mr-2"></i>
                            Étude de marché préliminaire
                        </li>
                    </ul>
                </div>

                <!-- Étape 2 -->
                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-8 card-hover">
                    <div class="w-16 h-16 bg-green-600 text-white rounded-full flex items-center justify-center mb-6 font-bold text-2xl">2</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Élaboration de la Stratégie</h3>
                    <p class="text-gray-600 mb-4">Construction du business plan et définition de la stratégie commerciale.</p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-dot-circle text-green-500 mr-2"></i>
                            Business plan détaillé
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-dot-circle text-green-500 mr-2"></i>
                            Prévisionnel financier
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-dot-circle text-green-500 mr-2"></i>
                            Plan marketing
                        </li>
                    </ul>
                </div>

                <!-- Étape 3 -->
                <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl p-8 card-hover">
                    <div class="w-16 h-16 bg-purple-600 text-white rounded-full flex items-center justify-center mb-6 font-bold text-2xl">3</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Recherche de Financement</h3>
                    <p class="text-gray-600 mb-4">Accompagnement dans la recherche et l'obtention des financements nécessaires.</p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-dot-circle text-purple-500 mr-2"></i>
                            Dossiers de financement
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-dot-circle text-purple-500 mr-2"></i>
                            Présentation aux investisseurs
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-dot-circle text-purple-500 mr-2"></i>
                            Négociation des conditions
                        </li>
                    </ul>
                </div>

                <!-- Étape 4 -->
                <div class="bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-xl p-8 card-hover">
                    <div class="w-16 h-16 bg-yellow-600 text-white rounded-full flex items-center justify-center mb-6 font-bold text-2xl">4</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Constitution Juridique</h3>
                    <p class="text-gray-600 mb-4">Création officielle de votre entreprise avec toutes les formalités légales.</p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-dot-circle text-yellow-500 mr-2"></i>
                            Rédaction des statuts
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-dot-circle text-yellow-500 mr-2"></i>
                            Immatriculation RC
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-dot-circle text-yellow-500 mr-2"></i>
                            Formalités administratives
                        </li>
                    </ul>
                </div>

                <!-- Étape 5 -->
                <div class="bg-gradient-to-br from-red-50 to-red-100 rounded-xl p-8 card-hover">
                    <div class="w-16 h-16 bg-red-600 text-white rounded-full flex items-center justify-center mb-6 font-bold text-2xl">5</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Lancement & Formation</h3>
                    <p class="text-gray-600 mb-4">Formation pratique et accompagnement lors des premiers mois d'activité.</p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-dot-circle text-red-500 mr-2"></i>
                            Formation gestion
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-dot-circle text-red-500 mr-2"></i>
                            Outils de pilotage
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-dot-circle text-red-500 mr-2"></i>
                            Suivi personnalisé
                        </li>
                    </ul>
                </div>

                <!-- Étape 6 -->
                <div class="bg-gradient-to-br from-indigo-50 to-indigo-100 rounded-xl p-8 card-hover">
                    <div class="w-16 h-16 bg-indigo-600 text-white rounded-full flex items-center justify-center mb-6 font-bold text-2xl">6</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Suivi & Développement</h3>
                    <p class="text-gray-600 mb-4">Accompagnement continu pour assurer la croissance de votre entreprise.</p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-dot-circle text-indigo-500 mr-2"></i>
                            Tableaux de bord
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-dot-circle text-indigo-500 mr-2"></i>
                            Conseils stratégiques
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-dot-circle text-indigo-500 mr-2"></i>
                            Optimisation continue
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Pourquoi Nous Choisir -->
    <section class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Pourquoi Choisir Notre Cabinet pour Votre Projet Entrepreneurial ?</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Une expertise reconnue et un accompagnement humain pour maximiser vos chances de réussite
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                <div class="bg-white rounded-xl shadow-lg p-8 text-center card-hover">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-ear-listen text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Un interlocuteur à votre écoute</h3>
                    <p class="text-gray-600">
                        Nous comprenons vos besoins spécifiques de débutant et adaptons notre accompagnement à votre rythme.
                    </p>
                </div>

                <div class="bg-white rounded-xl shadow-lg p-8 text-center card-hover">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-certificate text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Une expertise reconnue</h3>
                    <p class="text-gray-600">
                        Notre expérience en accompagnement des créateurs vous garantit un service fiable et conforme aux normes en vigueur.
                    </p>
                </div>

                <div class="bg-white rounded-xl shadow-lg p-8 text-center card-hover">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-handshake text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Un soutien pour votre réussite</h3>
                    <p class="text-gray-600">
                        Au-delà de la création d'entreprise, nous vous aidons à pérenniser votre entreprise grâce à un suivi régulier et des conseils adaptés.
                    </p>
                </div>
            </div>

            <!-- Témoignage -->
            <div class="bg-gradient-to-br from-yellow-50 to-orange-50 rounded-xl p-8">
                <div class="text-center mb-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Ce Que Disent Nos Clients</h3>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-white rounded-lg p-6 shadow-sm">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400 mr-4">
                                @for($i = 0; $i < 5; $i++)
                                    <i class="fas fa-star"></i>
                                @endfor
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4 italic">
                            "L'accompagnement de Global Gestion a été déterminant dans la réussite de mon projet. 
                            Leur expertise m'a permis d'éviter de nombreux écueils et de structurer efficacement mon entreprise."
                        </p>
                        <div class="flex items-center">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" 
                                 alt="Client" class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <p class="font-semibold text-gray-900">Khalid Benjelloun</p>
                                <p class="text-sm text-gray-600">Fondateur, TechStart Marrakech</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg p-6 shadow-sm">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400 mr-4">
                                @for($i = 0; $i < 5; $i++)
                                    <i class="fas fa-star"></i>
                                @endfor
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4 italic">
                            "Le business plan élaboré avec leur équipe m'a permis d'obtenir le financement nécessaire. 
                            Leur approche professionnelle et leurs conseils ont été précieux."
                        </p>
                        <div class="flex items-center">
                            <img src="https://images.unsplash.com/photo-1494790108755-2616b612b182?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" 
                                 alt="Client" class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <p class="font-semibold text-gray-900">Aicha Lamrani</p>
                                <p class="text-sm text-gray-600">Directrice, Green Solutions</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Secteurs d'Activité -->
    <section class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Secteurs d'Activité Accompagnés</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Notre expertise s'étend à tous les secteurs d'activité, avec une approche personnalisée selon vos spécificités
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
                <div class="text-center p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                    <i class="fas fa-laptop-code text-3xl text-blue-600 mb-3"></i>
                    <p class="text-sm font-medium text-gray-900">Tech & Digital</p>
                </div>
                <div class="text-center p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                    <i class="fas fa-store text-3xl text-green-600 mb-3"></i>
                    <p class="text-sm font-medium text-gray-900">Commerce</p>
                </div>
                <div class="text-center p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                    <i class="fas fa-utensils text-3xl text-orange-600 mb-3"></i>
                    <p class="text-sm font-medium text-gray-900">Restauration</p>
                </div>
                <div class="text-center p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                    <i class="fas fa-home text-3xl text-purple-600 mb-3"></i>
                    <p class="text-sm font-medium text-gray-900">Immobilier</p>
                </div>
                <div class="text-center p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                    <i class="fas fa-shipping-fast text-3xl text-red-600 mb-3"></i>
                    <p class="text-sm font-medium text-gray-900">Import-Export</p>
                </div>
                <div class="text-center p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                    <i class="fas fa-hammer text-3xl text-yellow-600 mb-3"></i>
                    <p class="text-sm font-medium text-gray-900">Artisanat</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Final -->
    <section class="bg-gradient-to-r from-yellow-500 to-orange-500 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-white mb-4">Prêt à Concrétiser Votre Projet Entrepreneurial ?</h2>
            <p class="text-xl text-yellow-100 mb-8 max-w-3xl mx-auto">
                Notre accompagnement en entrepreneuriat vise à transformer vos idées en projets concrets, viables et rentables. 
                Contactez-nous pour un entretien personnalisé ou une étude de projet sur mesure.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="bg-white text-yellow-600 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-100 transition-all transform hover:scale-105">
                    Démarrer mon projet
                </a>
                <a href="tel:+212524XXXXXX" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white hover:text-yellow-600 transition-all">
                    Appeler pour un conseil
                </a>
            </div>
        </div>
    </section>
@endsection