@extends('layouts.app')

@section('title', 'Services Juridiques à Marrakech : Conseil et Assistance pour Entreprises')
@section('meta_description', 'Cabinet de conseil juridique à Marrakech : création de sociétés, modifications statutaires, médiation, suivi juridique. Un partenaire fiable pour sécuriser vos démarches.')
@section('keywords', 'conseil juridique marrakech, création société, modifications statutaires, médiation arbitrage, droit des sociétés')

@section('content')
 <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px) rotate(0deg);
            }
            50% {
                transform: translateY(-15px) rotate(-2deg);
            }
        }

        @keyframes sway {
            0%, 100% {
                transform: rotate(-2deg);
            }
            50% {
                transform: rotate(2deg);
            }
        }

        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.08);
            }
        }

        @keyframes shimmer {
            0% {
                background-position: -200% 0;
            }
            100% {
                background-position: 200% 0;
            }
        }

        @keyframes subtleGlow {
            0%, 100% {
                box-shadow: 0 0 25px rgba(59, 130, 246, 0.3);
            }
            50% {
                box-shadow: 0 0 45px rgba(59, 130, 246, 0.5);
            }
        }

        .hero-section {
            position: relative;
            background: linear-gradient(135deg, rgba(30, 58, 138, 0.9), rgba(59, 130, 246, 0.8)),
                        url('https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80') center/cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
            min-height: 100vh;
            padding:10px
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.25);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .animate-fade-in-up {
            animation: fadeInUp 1s ease-out forwards;
        }

        .animate-float {
            animation: float 5s ease-in-out infinite;
        }

        .animate-sway {
            animation: sway 8s ease-in-out infinite;
        }

        .animate-pulse-soft {
            animation: pulse 3s ease-in-out infinite;
        }

        .animate-glow {
            animation: subtleGlow 4s ease-in-out infinite;
        }

        .animate-shimmer {
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            background-size: 200% 100%;
            animation: shimmer 3s infinite;
        }

        .animate-delay-200 {
            animation-delay: 0.2s;
        }

        .animate-delay-400 {
            animation-delay: 0.4s;
        }

        .animate-delay-600 {
            animation-delay: 0.6s;
        }

        .animate-delay-800 {
            animation-delay: 0.8s;
        }

        .animate-delay-1000 {
            animation-delay: 1s;
        }

        .text-shadow {
            text-shadow: 0 4px 12px rgba(0, 0, 0, 0.6);
        }

        .glass-effect {
            backdrop-filter: blur(15px);
            background: rgba(255, 255, 255, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .glass-effect-blue {
            backdrop-filter: blur(15px);
            background: rgba(59, 130, 246, 0.25);
            border: 1px solid rgba(59, 130, 246, 0.4);
        }

        .hover-lift {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .hover-lift:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.3);
        }

        /* Particules juridiques thématiques */
        .floating-particle {
            position: absolute;
            pointer-events: none;
        }

        .particle-scale {
            top: 12%;
            left: 5%;
            animation: sway 10s ease-in-out infinite;
        }

        .particle-gavel {
            top: 20%;
            right: 8%;
            animation: float 6s ease-in-out infinite reverse;
            animation-delay: 1.5s;
        }

        .particle-document {
            bottom: 25%;
            left: 10%;
            animation: float 7s ease-in-out infinite;
            animation-delay: 3s;
        }

        .particle-building {
            bottom: 15%;
            right: 12%;
            animation: sway 9s ease-in-out infinite reverse;
            animation-delay: 2s;
        }

        .particle-handshake {
            top: 40%;
            left: 3%;
            animation: float 8s ease-in-out infinite;
            animation-delay: 4s;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-section {
                background-attachment: scroll;
            }
        }
    </style>
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

    <!-- Hero Section Optimisée -->
    <section class="hero-section flex items-center justify-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="hero-content text-center">
                <!-- Icône principale avec animation balance -->
                <div class="animate-fade-in-up opacity-0">
                    <div class="w-24 h-24 glass-effect-blue rounded-xl flex items-center justify-center mx-auto mb-8 animate-sway hover-lift animate-glow">
                        <i class="fas fa-balance-scale text-white text-4xl drop-shadow-lg"></i>
                    </div>
                </div>
                
                <!-- Titre principal -->
                <div class="animate-fade-in-up animate-delay-200 opacity-0">
                    <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-6 text-shadow leading-tight">
                        <span class="text-blue-300 animate-pulse-soft">Conseil juridique</span> pour entreprises
                        <br>
                        <span class="text-2xl md:text-4xl lg:text-5xl text-white/90">
                            Création, suivi et accompagnement sur mesure
                        </span>
                    </h1>
                </div>
                
                <!-- Sous-titre avec points clés -->
                <div class="animate-fade-in-up animate-delay-400 opacity-0">
                    <div class="max-w-5xl mx-auto mb-8">
                        <p class="text-lg md:text-xl text-white leading-relaxed text-shadow opacity-95 mb-6">
                            Notre cabinet d'expertise juridique accompagne les dirigeants et entrepreneurs dans toutes leurs démarches juridiques.
                        </p>
                        <p class="text-base md:text-lg text-blue-100 leading-relaxed text-shadow">
                            <strong>Constitution de société</strong>, <strong>modification des statuts</strong>, 
                            <strong>suivi juridique annuel</strong>, <strong>médiation et arbitrage</strong>. 
                            Bénéficiez d'un accompagnement juridique conforme et adapté à vos besoins.
                        </p>
                    </div>
                </div>

                <!-- Services juridiques en badges -->
                <div class="animate-fade-in-up animate-delay-600 opacity-0 mb-10">
                    <div class="flex flex-wrap justify-center gap-4 mb-8">
                        <div class="glass-effect px-4 py-2 rounded-full hover-lift">
                            <i class="fas fa-building text-blue-400 mr-2"></i>
                            <span class="text-white text-sm font-medium">Constitution</span>
                        </div>
                        <div class="glass-effect px-4 py-2 rounded-full hover-lift">
                            <i class="fas fa-edit text-purple-400 mr-2"></i>
                            <span class="text-white text-sm font-medium">Modifications</span>
                        </div>
                        <div class="glass-effect px-4 py-2 rounded-full hover-lift">
                            <i class="fas fa-handshake text-green-400 mr-2"></i>
                            <span class="text-white text-sm font-medium">Médiation</span>
                        </div>
                        <div class="glass-effect px-4 py-2 rounded-full hover-lift">
                            <i class="fas fa-gavel text-yellow-400 mr-2"></i>
                            <span class="text-white text-sm font-medium">Arbitrage</span>
                        </div>
                    </div>
                </div>

                <!-- Boutons d'action -->
                <div class="animate-fade-in-up animate-delay-600 opacity-0">
                    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-8">
                        <button class="glass-effect-blue text-white px-8 py-4 rounded-full font-semibold text-lg hover-lift animate-glow group">
                            <i class="fas fa-rocket mr-2 group-hover:rotate-12 transition-transform"></i>
                            Créer ma société
                            <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                        </button>
                        <button class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-white hover:text-blue-900 transition-all duration-300 hover-lift">
                            <i class="fas fa-balance-scale mr-2"></i>
                            Consultation gratuite
                        </button>
                    </div>
                </div>

                <!-- Avantages clés -->
                <div class="animate-fade-in-up animate-delay-800 opacity-0 mb-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 max-w-4xl mx-auto">
                        <div class="glass-effect p-4 rounded-lg">
                            <i class="fas fa-shield-alt text-blue-400 text-xl mb-2"></i>
                            <h3 class="text-white font-semibold text-sm">Sécurité juridique assurée</h3>
                            <p class="text-white/80 text-xs">Conformité et protection</p>
                        </div>
                        <div class="glass-effect p-4 rounded-lg">
                            <i class="fas fa-clock text-green-400 text-xl mb-2"></i>
                            <h3 class="text-white font-semibold text-sm">Gain de temps</h3>
                            <p class="text-white/80 text-xs">Démarches simplifiées</p>
                        </div>
                    </div>
                </div>

                <!-- Délai création -->
                <div class="animate-fade-in-up animate-delay-1000 opacity-0">
                    <div class="glass-effect border-l-4 border-blue-400 p-4 max-w-2xl mx-auto rounded-lg">
                        <div class="flex items-center justify-center">
                            <i class="fas fa-clock text-blue-400 text-xl mr-3 animate-pulse-soft"></i>
                            <div class="text-center">
                                <h3 class="text-white font-semibold">Délai de Création</h3>
                                <p class="text-white/90 text-sm">En moyenne <strong>3 à 10 jours ouvrables</strong> pour créer votre SARL</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stats de confiance -->
                <div class="animate-fade-in-up animate-delay-1000 opacity-0 mt-12">
                    <div class="flex flex-wrap justify-center gap-8 text-white/80">
                        <div class="flex items-center gap-2">
                            <i class="fas fa-building text-blue-400 text-xl"></i>
                            <div class="text-left">
                                <div class="text-lg font-bold text-white">500+</div>
                                <div class="text-xs">Sociétés créées</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fas fa-handshake text-green-400 text-xl"></i>
                            <div class="text-left">
                                <div class="text-lg font-bold text-white">98%</div>
                                <div class="text-xs">Médiation réussie</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fas fa-clock text-orange-400 text-xl"></i>
                            <div class="text-left">
                                <div class="text-lg font-bold text-white">24h</div>
                                <div class="text-xs">Réponse rapide</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fas fa-award text-purple-400 text-xl"></i>
                            <div class="text-left">
                                <div class="text-lg font-bold text-white">25 ans</div>
                                <div class="text-xs">D'expertise</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Particules thématiques juridiques -->
        <div class="floating-particle particle-scale opacity-20">
            <i class="fas fa-balance-scale text-white text-5xl"></i>
        </div>
        <div class="floating-particle particle-gavel opacity-15">
            <i class="fas fa-gavel text-blue-300 text-4xl"></i>
        </div>
        <div class="floating-particle particle-document opacity-20">
            <i class="fas fa-file-contract text-white text-3xl"></i>
        </div>
        <div class="floating-particle particle-building opacity-15">
            <i class="fas fa-building text-blue-200 text-4xl"></i>
        </div>
        <div class="floating-particle particle-handshake opacity-20">
            <i class="fas fa-handshake text-green-300 text-3xl"></i>
        </div>

        <!-- Éléments décoratifs supplémentaires -->
        <div class="absolute top-1/4 right-1/4 opacity-5">
            <i class="fas fa-university text-white text-8xl animate-sway" style="animation-delay: 2s;"></i>
        </div>
        <div class="absolute bottom-1/3 left-1/4 opacity-5">
            <i class="fas fa-scroll text-white text-6xl animate-float" style="animation-delay: 4s;"></i>
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