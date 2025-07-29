@extends('layouts.app')

@section('title', 'Recrutement & Management RH à Marrakech - Solutions RH Complètes')
@section('meta-description', 'Services RH complets : définition de poste, aide au recrutement, diagnostic RH et climat social. Optimisez votre capital humain avec nos experts RH.')
@section('keywords', 'recrutement marrakech, management RH, diagnostic RH, climat social, ressources humaines')

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
                transform: translateY(-10px) rotate(2deg);
            }
        }

        @keyframes teamwork {
            0%, 100% {
                transform: scale(1) rotate(0deg);
            }
            33% {
                transform: scale(1.05) rotate(1deg);
            }
            66% {
                transform: scale(1.02) rotate(-1deg);
            }
        }

        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.06);
            }
        }

        @keyframes heartbeat {
            0%, 100% {
                transform: scale(1);
                filter: brightness(1);
            }
            50% {
                transform: scale(1.1);
                filter: brightness(1.2);
            }
        }

        @keyframes subtleGlow {
            0%, 100% {
                box-shadow: 0 0 25px rgba(239, 68, 68, 0.3);
            }
            50% {
                box-shadow: 0 0 45px rgba(239, 68, 68, 0.5);
            }
        }

        @keyframes network {
            0%, 100% {
                opacity: 0.3;
                transform: translateY(0px);
            }
            50% {
                opacity: 0.8;
                transform: translateY(-5px);
            }
        }

        .hero-section {
            position: relative;
            background: linear-gradient(135deg, rgba(239, 68, 68, 0.85), rgba(248, 113, 113, 0.8)),
                        url('https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80') center/cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
            min-height: 100vh;
            padding: 10px;
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
            animation: float 4s ease-in-out infinite;
        }

        .animate-teamwork {
            animation: teamwork 4s ease-in-out infinite;
        }

        .animate-pulse-soft {
            animation: pulse 3s ease-in-out infinite;
        }

        .animate-heartbeat {
            animation: heartbeat 2s ease-in-out infinite;
        }

        .animate-glow {
            animation: subtleGlow 3s ease-in-out infinite;
        }

        .animate-network {
            animation: network 3s ease-in-out infinite;
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

        .glass-effect-red {
            backdrop-filter: blur(15px);
            background: rgba(239, 68, 68, 0.25);
            border: 1px solid rgba(239, 68, 68, 0.4);
        }

        .hover-lift {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .hover-lift:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
        }

        /* Particules RH thématiques */
        .floating-particle {
            position: absolute;
            pointer-events: none;
        }

        .particle-team {
            top: 15%;
            left: 8%;
            animation: teamwork 5s ease-in-out infinite;
        }

        .particle-handshake {
            top: 25%;
            right: 10%;
            animation: float 6s ease-in-out infinite reverse;
            animation-delay: 1s;
        }

        .particle-chart {
            bottom: 30%;
            left: 12%;
            animation: network 4s ease-in-out infinite;
            animation-delay: 2s;
        }

        .particle-user {
            bottom: 20%;
            right: 8%;
            animation: heartbeat 3s ease-in-out infinite;
            animation-delay: 0.5s;
        }

        .particle-target {
            top: 40%;
            left: 5%;
            animation: pulse 4s ease-in-out infinite;
            animation-delay: 3s;
        }

        .particle-growth {
            top: 35%;
            right: 15%;
            animation: float 5s ease-in-out infinite reverse;
            animation-delay: 1.5s;
        }

        /* Connexions réseau */
        .network-line {
            position: absolute;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            animation: network 4s ease-in-out infinite;
        }

        .line-1 {
            top: 25%;
            left: 20%;
            width: 15%;
            transform: rotate(30deg);
        }

        .line-2 {
            bottom: 35%;
            right: 25%;
            width: 12%;
            transform: rotate(-45deg);
            animation-delay: 1s;
        }

        .line-3 {
            top: 60%;
            left: 10%;
            width: 20%;
            transform: rotate(15deg);
            animation-delay: 2s;
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
                <span class="text-gray-600">Recrutement & Management RH</span>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="hero-section flex items-center justify-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="hero-content text-center">
                <!-- Icône principale avec animation teamwork -->
                <div class="animate-fade-in-up opacity-0">
                    <div class="w-28 h-28 glass-effect-red rounded-xl flex items-center justify-center mx-auto mb-8 animate-teamwork hover-lift animate-glow relative">
                        <i class="fas fa-users text-white text-5xl drop-shadow-lg"></i>
                        <!-- Indicateurs de réseau autour -->
                        <div class="absolute -top-1 -right-1 w-3 h-3 bg-green-400 rounded-full animate-heartbeat"></div>
                        <div class="absolute -bottom-1 -left-1 w-2 h-2 bg-yellow-400 rounded-full animate-heartbeat" style="animation-delay: 0.5s;"></div>
                    </div>
                </div>
                
                <!-- Titre principal -->
                <div class="animate-fade-in-up animate-delay-200 opacity-0">
                    <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-6 text-shadow leading-tight">
                        <span class="text-red-200 animate-pulse-soft">Recrutement & Management RH</span>
                        <br>
                        <span class="text-2xl md:text-4xl lg:text-5xl text-white/95">
                            Solutions Complètes pour Optimiser Votre Capital Humain
                        </span>
                    </h1>
                </div>
                
                <!-- Sous-titre avec focus RH -->
                <div class="animate-fade-in-up animate-delay-400 opacity-0">
                    <div class="max-w-5xl mx-auto mb-8">
                        <p class="text-lg md:text-2xl text-white leading-relaxed text-shadow opacity-95 mb-6">
                            Optimisez la gestion de votre capital humain avec nos services RH sur mesure.
                        </p>
                        <p class="text-base md:text-xl text-red-100 leading-relaxed text-shadow">
                            De la <strong>définition de poste</strong> au <strong>management des équipes</strong>, 
                            nous vous accompagnons pour développer une <strong>stratégie RH performante</strong> 
                            et adaptée à vos enjeux.
                        </p>
                    </div>
                </div>

                <!-- Services RH en badges -->
                <div class="animate-fade-in-up animate-delay-600 opacity-0 mb-10">
                    <div class="flex flex-wrap justify-center gap-4 mb-8">
                        <div class="glass-effect px-4 py-2 rounded-full hover-lift">
                            <i class="fas fa-search text-blue-400 mr-2"></i>
                            <span class="text-white text-sm font-medium">Recrutement</span>
                        </div>
                        <div class="glass-effect px-4 py-2 rounded-full hover-lift">
                            <i class="fas fa-users-cog text-green-400 mr-2"></i>
                            <span class="text-white text-sm font-medium">Management</span>
                        </div>
                        <div class="glass-effect px-4 py-2 rounded-full hover-lift">
                            <i class="fas fa-chart-line text-yellow-400 mr-2"></i>
                            <span class="text-white text-sm font-medium">Performance</span>
                        </div>
                        <div class="glass-effect px-4 py-2 rounded-full hover-lift">
                            <i class="fas fa-graduation-cap text-purple-400 mr-2"></i>
                            <span class="text-white text-sm font-medium">Formation</span>
                        </div>
                    </div>
                </div>

                <!-- Boutons d'action -->
                <div class="animate-fade-in-up animate-delay-600 opacity-0">
                    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-8">
                        <button class="glass-effect-red text-white px-8 py-4 rounded-full font-semibold text-lg hover-lift animate-glow group">
                            <i class="fas fa-user-plus mr-2 group-hover:rotate-12 transition-transform"></i>
                            Optimisez vos RH
                            <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                        </button>
                        <button class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-white hover:text-red-800 transition-all duration-300 hover-lift">
                            <i class="fas fa-handshake mr-2"></i>
                            Audit RH gratuit
                        </button>
                    </div>
                </div>

                <!-- Processus RH -->
                <div class="animate-fade-in-up animate-delay-800 opacity-0 mb-8">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 max-w-6xl mx-auto">
                        <div class="glass-effect p-4 rounded-lg hover-lift">
                            <i class="fas fa-bullseye text-red-400 text-2xl mb-2"></i>
                            <h3 class="text-white font-semibold text-sm">Définition</h3>
                            <p class="text-white/80 text-xs">Postes & profils</p>
                        </div>
                        <div class="glass-effect p-4 rounded-lg hover-lift">
                            <i class="fas fa-search-dollar text-blue-400 text-2xl mb-2"></i>
                            <h3 class="text-white font-semibold text-sm">Sourcing</h3>
                            <p class="text-white/80 text-xs">Candidats qualifiés</p>
                        </div>
                        <div class="glass-effect p-4 rounded-lg hover-lift">
                            <i class="fas fa-user-check text-green-400 text-2xl mb-2"></i>
                            <h3 class="text-white font-semibold text-sm">Sélection</h3>
                            <p class="text-white/80 text-xs">Tests & entretiens</p>
                        </div>
                        <div class="glass-effect p-4 rounded-lg hover-lift">
                            <i class="fas fa-rocket text-orange-400 text-2xl mb-2"></i>
                            <h3 class="text-white font-semibold text-sm">Intégration</h3>
                            <p class="text-white/80 text-xs">Suivi & formation</p>
                        </div>
                    </div>
                </div>

                <!-- Message RH -->
                <div class="animate-fade-in-up animate-delay-1000 opacity-0">
                    <div class="glass-effect border-l-4 border-red-400 p-4 max-w-2xl mx-auto rounded-lg">
                        <div class="flex items-center justify-center">
                            <i class="fas fa-heart text-red-400 text-xl mr-3 animate-heartbeat"></i>
                            <div class="text-center">
                                <h3 class="text-white font-semibold">L'humain au cœur de votre réussite</h3>
                                <p class="text-white/90 text-sm">Développez le potentiel de vos équipes</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stats RH -->
                <div class="animate-fade-in-up animate-delay-1000 opacity-0 mt-12">
                    <div class="flex flex-wrap justify-center gap-8 text-white/80">
                        <div class="flex items-center gap-2">
                            <i class="fas fa-user-tie text-red-400 text-xl"></i>
                            <div class="text-left">
                                <div class="text-lg font-bold text-white">1000+</div>
                                <div class="text-xs">Recrutements</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fas fa-chart-line text-green-400 text-xl"></i>
                            <div class="text-left">
                                <div class="text-lg font-bold text-white">90%</div>
                                <div class="text-xs">Taux de satisfaction</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fas fa-clock text-blue-400 text-xl"></i>
                            <div class="text-left">
                                <div class="text-lg font-bold text-white">21 jours</div>
                                <div class="text-xs">Délai moyen</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fas fa-trophy text-yellow-400 text-xl"></i>
                            <div class="text-left">
                                <div class="text-lg font-bold text-white">25 ans</div>
                                <div class="text-xs">D'expertise RH</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Particules RH thématiques -->
        <div class="floating-particle particle-team opacity-20">
            <i class="fas fa-users text-red-300 text-4xl"></i>
        </div>
        <div class="floating-particle particle-handshake opacity-25">
            <i class="fas fa-handshake text-green-300 text-3xl"></i>
        </div>
        <div class="floating-particle particle-chart opacity-20">
            <i class="fas fa-chart-network text-blue-300 text-3xl"></i>
        </div>
        <div class="floating-particle particle-user opacity-25">
            <i class="fas fa-user-graduate text-purple-300 text-3xl"></i>
        </div>
        <div class="floating-particle particle-target opacity-15">
            <i class="fas fa-bullseye text-yellow-300 text-3xl"></i>
        </div>
        <div class="floating-particle particle-growth opacity-20">
            <i class="fas fa-trending-up text-orange-300 text-3xl"></i>
        </div>

        <!-- Lignes de réseau RH -->
        <div class="network-line line-1"></div>
        <div class="network-line line-2"></div>
        <div class="network-line line-3"></div>

        <!-- Éléments décoratifs supplémentaires -->
        <div class="absolute top-1/4 left-1/4 opacity-5">
            <i class="fas fa-sitemap text-white text-8xl animate-network" style="animation-delay: 2s;"></i>
        </div>
        <div class="absolute bottom-1/3 right-1/4 opacity-5">
            <i class="fas fa-people-arrows text-white text-6xl animate-teamwork" style="animation-delay: 4s;"></i>
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