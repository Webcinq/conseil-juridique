@extends('layouts.app')

@section('title', 'Nos Expertises - Global Gestion Cabinet Comptable Marrakech')
@section('meta-description', 'Découvrez nos 6 pôles d\'expertise : gestion comptable, conseil juridique, conseil fiscal, création d\'entreprise, RH et marketing digital à Marrakech.')

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
                transform: translateY(-10px) rotate(5deg);
            }
        }

        @keyframes cogRotate {
            0% {
                transform: rotate(0deg) scale(1);
            }
            25% {
                transform: rotate(90deg) scale(1.05);
            }
            50% {
                transform: rotate(180deg) scale(1);
            }
            75% {
                transform: rotate(270deg) scale(1.05);
            }
            100% {
                transform: rotate(360deg) scale(1);
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

        @keyframes mechanicalGlow {
            0%, 100% {
                box-shadow: 0 0 25px rgba(59, 130, 246, 0.3);
                filter: brightness(1);
            }
            50% {
                box-shadow: 0 0 45px rgba(59, 130, 246, 0.6);
                filter: brightness(1.2);
            }
        }

        @keyframes orbitalMotion {
            0% {
                transform: rotate(0deg) translateX(40px) rotate(0deg);
            }
            100% {
                transform: rotate(360deg) translateX(40px) rotate(-360deg);
            }
        }

        @keyframes expertiseFlow {
            0% {
                opacity: 0;
                transform: translateY(20px) scale(0.8);
            }
            50% {
                opacity: 1;
                transform: translateY(0px) scale(1);
            }
            100% {
                opacity: 0;
                transform: translateY(-20px) scale(0.8);
            }
        }

        .hero-section {
            position: relative;
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.9), rgba(99, 102, 241, 0.8)),
                        url('https://images.unsplash.com/photo-1600880292089-90a7e086ee0c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2074&q=80') center/cover;
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
            background: rgba(0, 0, 0, 0.3);
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

        .animate-cog-rotate {
            animation: cogRotate 8s linear infinite;
        }

        .animate-pulse-soft {
            animation: pulse 3s ease-in-out infinite;
        }

        .animate-mechanical-glow {
            animation: mechanicalGlow 3s ease-in-out infinite;
        }

        .animate-orbital {
            animation: orbitalMotion 15s linear infinite;
        }

        .animate-expertise-flow {
            animation: expertiseFlow 4s ease-in-out infinite;
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
            transform: translateY(-8px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
        }

        /* Système d'engrenages */
        .gear-system {
            position: absolute;
            width: 80px;
            height: 80px;
        }

        .gear-main {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 60px;
            height: 60px;
            animation: cogRotate 8s linear infinite;
        }

        .gear-satellite {
            position: absolute;
            width: 20px;
            height: 20px;
            animation: orbitalMotion 12s linear infinite;
        }

        /* Particules d'expertise */
        .floating-particle {
            position: absolute;
            pointer-events: none;
        }

        .particle-accounting {
            top: 15%;
            left: 8%;
            animation: float 5s ease-in-out infinite;
        }

        .particle-legal {
            top: 20%;
            right: 10%;
            animation: expertiseFlow 6s ease-in-out infinite;
            animation-delay: 1s;
        }

        .particle-fiscal {
            bottom: 30%;
            left: 12%;
            animation: float 4s ease-in-out infinite reverse;
            animation-delay: 2s;
        }

        .particle-digital {
            bottom: 25%;
            right: 8%;
            animation: cogRotate 10s linear infinite;
            animation-delay: 0.5s;
        }

        .particle-hr {
            top: 40%;
            left: 5%;
            animation: pulse 3s ease-in-out infinite;
            animation-delay: 3s;
        }

        .particle-entrepreneur {
            top: 35%;
            right: 15%;
            animation: float 7s ease-in-out infinite reverse;
            animation-delay: 1.5s;
        }

        /* Lignes de connexion entre expertises */
        .connection-line {
            position: absolute;
            height: 2px;
            background: linear-gradient(90deg, transparent, rgba(99, 102, 241, 0.4), transparent);
            animation: expertiseFlow 5s ease-in-out infinite;
        }

        .connection-1 {
            top: 25%;
            left: 15%;
            width: 20%;
            transform: rotate(30deg);
        }

        .connection-2 {
            bottom: 35%;
            right: 20%;
            width: 25%;
            transform: rotate(-45deg);
            animation-delay: 1s;
        }

        .connection-3 {
            top: 60%;
            left: 25%;
            width: 15%;
            transform: rotate(60deg);
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
                <span class="text-gray-600">Nos Expertises</span>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
  <section class="hero-section flex items-center justify-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="hero-content text-center">
                <!-- Système d'engrenages central -->
                <div class="animate-fade-in-up opacity-0">
                    <div class="relative w-32 h-32 mx-auto mb-8">
                        <!-- Engrenage principal -->
                        <div class="glass-effect-blue rounded-xl flex items-center justify-center mx-auto hover-lift animate-mechanical-glow gear-system">
                            <i class="fas fa-cogs text-white text-5xl drop-shadow-lg gear-main"></i>
                            <!-- Satellites d'expertise -->
                            <div class="gear-satellite" style="animation-delay: 0s;">
                                <i class="fas fa-calculator text-green-400 text-sm"></i>
                            </div>
                            <div class="gear-satellite" style="animation-delay: 2s;">
                                <i class="fas fa-balance-scale text-purple-400 text-sm"></i>
                            </div>
                            <div class="gear-satellite" style="animation-delay: 4s;">
                                <i class="fas fa-chart-line text-yellow-400 text-sm"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Titre principal -->
                <div class="animate-fade-in-up animate-delay-200 opacity-0">
                    <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold text-white mb-6 text-shadow leading-tight">
                        <span class="text-blue-200 animate-pulse-soft">Nos Expertises</span>
                    </h1>
                </div>
                
                <!-- Sous-titre avec mise en avant du nombre -->
                <div class="animate-fade-in-up animate-delay-400 opacity-0">
                    <div class="max-w-5xl mx-auto mb-10">
                        <p class="text-xl md:text-3xl text-white leading-relaxed text-shadow opacity-95 mb-6">
                            <span class="text-6xl font-bold text-blue-300 animate-pulse-soft">6</span> pôles de conseil
                        </p>
                        <p class="text-base md:text-xl text-blue-100 leading-relaxed text-shadow">
                            pour vous accompagner à <strong>chaque étape</strong> de votre développement entrepreneurial. 
                            Une <strong>expertise complète</strong> au service de votre réussite.
                        </p>
                    </div>
                </div>

                <!-- Les 6 expertises en grille -->
                <div class="animate-fade-in-up animate-delay-600 opacity-0 mb-10">
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 max-w-4xl mx-auto">
                        <div class="glass-effect p-4 rounded-lg hover-lift animate-expertise-flow">
                            <i class="fas fa-calculator text-green-400 text-2xl mb-2"></i>
                            <h3 class="text-white font-semibold text-sm">Comptabilité</h3>
                        </div>
                        <div class="glass-effect p-4 rounded-lg hover-lift animate-expertise-flow" style="animation-delay: 0.5s;">
                            <i class="fas fa-balance-scale text-purple-400 text-2xl mb-2"></i>
                            <h3 class="text-white font-semibold text-sm">Juridique</h3>
                        </div>
                        <div class="glass-effect p-4 rounded-lg hover-lift animate-expertise-flow" style="animation-delay: 1s;">
                            <i class="fas fa-file-invoice-dollar text-red-400 text-2xl mb-2"></i>
                            <h3 class="text-white font-semibold text-sm">Fiscal</h3>
                        </div>
                        <div class="glass-effect p-4 rounded-lg hover-lift animate-expertise-flow" style="animation-delay: 1.5s;">
                            <i class="fas fa-users text-pink-400 text-2xl mb-2"></i>
                            <h3 class="text-white font-semibold text-sm">RH</h3>
                        </div>
                        <div class="glass-effect p-4 rounded-lg hover-lift animate-expertise-flow" style="animation-delay: 2s;">
                            <i class="fas fa-chart-line text-indigo-400 text-2xl mb-2"></i>
                            <h3 class="text-white font-semibold text-sm">Marketing Digital</h3>
                        </div>
                        <div class="glass-effect p-4 rounded-lg hover-lift animate-expertise-flow" style="animation-delay: 2.5s;">
                            <i class="fas fa-lightbulb text-yellow-400 text-2xl mb-2"></i>
                            <h3 class="text-white font-semibold text-sm">Entrepreneuriat</h3>
                        </div>
                    </div>
                </div>

                <!-- Boutons d'action -->
                <div class="animate-fade-in-up animate-delay-600 opacity-0">
                    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-8">
                        <button class="glass-effect-blue text-white px-8 py-4 rounded-full font-semibold text-lg hover-lift animate-mechanical-glow group">
                            <a href="#all-services" >
                            <i class="fas fa-compass mr-2 group-hover:rotate-45 transition-transform"></i>
                            Découvrez nos services
                            <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                            </a>
                        </button>
                        <button class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-white hover:text-blue-900 transition-all duration-300 hover-lift">
                            <a href="{{route('contact')}}">
                            <i class="fas fa-phone mr-2"></i>
                            Nous contacter
                            </a>
                        </button>
                    </div>
                </div>

                <!-- Avantages clés -->
                <div class="animate-fade-in-up animate-delay-800 opacity-0 mb-8">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 max-w-5xl mx-auto">
                        <div class="glass-effect p-4 rounded-lg hover-lift">
                            <i class="fas fa-check-circle text-green-400 text-2xl mb-2"></i>
                            <h3 class="text-white font-semibold text-sm">Expertise complète</h3>
                            <p class="text-white/80 text-xs">Tous vos besoins couverts</p>
                        </div>
                        <div class="glass-effect p-4 rounded-lg hover-lift">
                            <i class="fas fa-handshake text-blue-400 text-2xl mb-2"></i>
                            <h3 class="text-white font-semibold text-sm">Accompagnement personnalisé</h3>
                            <p class="text-white/80 text-xs">Solutions sur mesure</p>
                        </div>
                        <div class="glass-effect p-4 rounded-lg hover-lift">
                            <i class="fas fa-trophy text-yellow-400 text-2xl mb-2"></i>
                            <h3 class="text-white font-semibold text-sm">25 ans d'expérience</h3>
                            <p class="text-white/80 text-xs">Expertise reconnue</p>
                        </div>
                    </div>
                </div>

                <!-- Message inspirant -->
                <div class="animate-fade-in-up animate-delay-1000 opacity-0">
                    <div class="glass-effect border-l-4 border-blue-400 p-4 max-w-2xl mx-auto rounded-lg">
                        <div class="flex items-center justify-center">
                            <i class="fas fa-star text-yellow-400 text-xl mr-3 animate-pulse-soft"></i>
                            <div class="text-center">
                                <h3 class="text-white font-semibold">Votre réussite, notre expertise</h3>
                                <p class="text-white/90 text-sm">Un partenaire unique pour tous vos projets</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stats globales -->
                <div class="animate-fade-in-up animate-delay-1000 opacity-0 mt-12">
                    <div class="flex flex-wrap justify-center gap-8 text-white/80">
                        <div class="flex items-center gap-2">
                            <i class="fas fa-building text-blue-400 text-xl animate-cog-rotate"></i>
                            <div class="text-left">
                                <div class="text-lg font-bold text-white">2000+</div>
                                <div class="text-xs">Clients accompagnés</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fas fa-tasks text-green-400 text-xl animate-cog-rotate"></i>
                            <div class="text-left">
                                <div class="text-lg font-bold text-white">15000+</div>
                                <div class="text-xs">Missions réalisées</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fas fa-award text-yellow-400 text-xl animate-cog-rotate"></i>
                            <div class="text-left">
                                <div class="text-lg font-bold text-white">98%</div>
                                <div class="text-xs">Satisfaction client</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fas fa-users-cog text-purple-400 text-xl animate-cog-rotate"></i>
                            <div class="text-left">
                                <div class="text-lg font-bold text-white">25</div>
                                <div class="text-xs">Experts dédiés</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Particules d'expertise thématiques -->
        <div class="floating-particle particle-accounting opacity-20">
            <i class="fas fa-calculator text-green-300 text-3xl"></i>
        </div>
        <div class="floating-particle particle-legal opacity-25">
            <i class="fas fa-balance-scale text-purple-300 text-4xl"></i>
        </div>
        <div class="floating-particle particle-fiscal opacity-20">
            <i class="fas fa-file-invoice-dollar text-red-300 text-3xl"></i>
        </div>
        <div class="floating-particle particle-digital opacity-25">
            <i class="fas fa-chart-line text-indigo-300 text-3xl"></i>
        </div>
        <div class="floating-particle particle-hr opacity-15">
            <i class="fas fa-users text-pink-300 text-3xl"></i>
        </div>
        <div class="floating-particle particle-entrepreneur opacity-20">
            <i class="fas fa-lightbulb text-yellow-300 text-4xl"></i>
        </div>

        <!-- Lignes de connexion entre expertises -->
        <div class="connection-line connection-1"></div>
        <div class="connection-line connection-2"></div>
        <div class="connection-line connection-3"></div>

        <!-- Éléments décoratifs mécaniques -->
        <div class="absolute top-1/4 left-1/4 opacity-5">
            <i class="fas fa-project-diagram text-white text-8xl animate-cog-rotate" style="animation-delay: 2s;"></i>
        </div>
        <div class="absolute bottom-1/3 right-1/4 opacity-5">
            <i class="fas fa-sitemap text-white text-6xl animate-expertise-flow" style="animation-delay: 4s;"></i>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="bg-gray-50 py-20" id="all-services">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Gestion Comptable -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover group">
                    <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-500 to-blue-600 opacity-90"></div>
                        <div class="relative p-8 text-white">
                            <div class="w-16 h-16 bg-white bg-opacity-20 rounded-lg flex items-center justify-center mb-6">
                                <i class="fas fa-calculator text-white text-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold mb-4">Gestion Comptable</h3>
                            <p class="text-blue-100 mb-6">Service complet de gestion comptable pour TPE, PME et professions libérales.</p>
                        </div>
                    </div>
                    <div class="p-8">
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Tenue de comptabilité
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Déclarations fiscales et sociales
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Formalités juridiques courantes
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Révision comptable
                            </li>
                        </ul>
                        <a href="{{ route('gestion-comptable') }}" class="inline-flex items-center text-custom-blue font-semibold hover:text-blue-800 transition-colors group-hover:text-blue-700">
                            En savoir plus 
                            <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>

                <!-- Conseil Juridique -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover group">
                    <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-br from-purple-500 to-purple-600 opacity-90"></div>
                        <div class="relative p-8 text-white">
                            <div class="w-16 h-16 bg-white bg-opacity-20 rounded-lg flex items-center justify-center mb-6">
                                <i class="fas fa-gavel text-white text-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold mb-4">Conseil Juridique</h3>
                            <p class="text-purple-100 mb-6">Accompagnement juridique complet pour dirigeants et entrepreneurs.</p>
                        </div>
                    </div>
                    <div class="p-8">
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Constitution de sociétés
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Guide de création de la SARL
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Modifications statutaires
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Médiation & arbitrage
                            </li>
                        </ul>
                        <a href="{{ route('conseil-juridique') }}" class="inline-flex items-center text-custom-blue font-semibold hover:text-blue-800 transition-colors group-hover:text-blue-700">
                            En savoir plus 
                            <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>

                <!-- Conseil Fiscal -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover group">
                    <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-br from-green-500 to-green-600 opacity-90"></div>
                        <div class="relative p-8 text-white">
                            <div class="w-16 h-16 bg-white bg-opacity-20 rounded-lg flex items-center justify-center mb-6">
                                <i class="fas fa-file-invoice-dollar text-white text-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold mb-4">Conseil Fiscal</h3>
                            <p class="text-green-100 mb-6">Expertise fiscale avec assistance au contrôle et gestion des contentieux.</p>
                        </div>
                    </div>
                    <div class="p-8">
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Déclarations fiscales
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Assistance au contrôle fiscal
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Gestion du contentieux fiscal
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Optimisation fiscale
                            </li>
                        </ul>
                        <a href="{{ route('conseil-fiscal') }}" class="inline-flex items-center text-custom-blue font-semibold hover:text-blue-800 transition-colors group-hover:text-blue-700">
                            En savoir plus 
                            <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>

                <!-- Conseil en Entrepreneuriat -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover group">
                    <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-br from-yellow-500 to-yellow-600 opacity-90"></div>
                        <div class="relative p-8 text-white">
                            <div class="w-16 h-16 bg-white bg-opacity-20 rounded-lg flex items-center justify-center mb-6">
                                <i class="fas fa-lightbulb text-white text-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold mb-4">Conseil en Entrepreneuriat</h3>
                            <p class="text-yellow-100 mb-6">Accompagnement sur mesure de l'idée à la concrétisation du projet.</p>
                        </div>
                    </div>
                    <div class="p-8">
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Création d'entreprise
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Étude de faisabilité
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Élaboration de Business Plan
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Recherche de financements
                            </li>
                        </ul>
                        <a href="{{ route('entrepreneuriat') }}" class="inline-flex items-center text-custom-blue font-semibold hover:text-blue-800 transition-colors group-hover:text-blue-700">
                            En savoir plus 
                            <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>

                <!-- Recrutement & Management RH -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover group">
                    <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-br from-red-500 to-red-600 opacity-90"></div>
                        <div class="relative p-8 text-white">
                            <div class="w-16 h-16 bg-white bg-opacity-20 rounded-lg flex items-center justify-center mb-6">
                                <i class="fas fa-users text-white text-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold mb-4">Recrutement & Management RH</h3>
                            <p class="text-red-100 mb-6">Solutions RH complètes pour optimiser votre capital humain.</p>
                        </div>
                    </div>
                    <div class="p-8">
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Définition de poste & profil
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Aide au recrutement
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Diagnostic RH & climat social
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Formation des équipes
                            </li>
                        </ul>
                        <a href="{{ route('recrutement-rh') }}" class="inline-flex items-center text-custom-blue font-semibold hover:text-blue-800 transition-colors group-hover:text-blue-700">
                            En savoir plus 
                            <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>

                <!-- Stratégie & Marketing Digital -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover group">
                    <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-br from-indigo-500 to-indigo-600 opacity-90"></div>
                        <div class="relative p-8 text-white">
                            <div class="w-16 h-16 bg-white bg-opacity-20 rounded-lg flex items-center justify-center mb-6">
                                <i class="fas fa-chart-line text-white text-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold mb-4">Stratégie & Marketing Digital</h3>
                            <p class="text-indigo-100 mb-6">Solutions digitales pour développer votre présence en ligne.</p>
                        </div>
                    </div>
                    <div class="p-8">
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Création et refonte de site web
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Référencement SEO et SEA
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Copywriting professionnel
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Stratégie digitale
                            </li>
                        </ul>
                        <a href="{{ route('marketing-digital') }}" class="inline-flex items-center text-custom-blue font-semibold hover:text-blue-800 transition-colors group-hover:text-blue-700">
                            En savoir plus 
                            <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pourquoi Choisir Nos Expertises -->
    <section class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Pourquoi Choisir Nos Expertises ?</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Une approche globale et personnalisée pour répondre à tous vos besoins d'entreprise
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-award text-custom-blue text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Plus de 25 ans d'expérience</h3>
                    <p class="text-gray-600 text-sm">Une expertise reconnue auprès des TPE, PME et professions libérales.</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-users text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Accompagnement personnalisé</h3>
                    <p class="text-gray-600 text-sm">Adapté à votre secteur d'activité et à vos besoins spécifiques.</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-shield-alt text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Réactivité & Confidentialité</h3>
                    <p class="text-gray-600 text-sm">Service réactif avec une transparence totale des honoraires.</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-laptop text-yellow-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Outils numériques</h3>
                    <p class="text-gray-600 text-sm">Solutions conformes à la législation fiscale marocaine.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="gradient-bg py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-white mb-4">Besoin d'un accompagnement sur mesure ?</h2>
            <p class="text-xl text-gray-200 mb-8 max-w-2xl mx-auto">
                Contactez nos experts pour identifier la solution la plus adaptée à votre situation et vos objectifs.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="bg-white text-blue-700 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-100 transition-all transform hover:scale-105">
                    Prendre rendez-vous
                </a>
                <a href="tel:+212524XXXXXX" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white hover:text-blue-700 transition-all">
                    Appeler maintenant
                </a>
            </div>
        </div>
    </section>
@endsection