@extends('layouts.app')

@section('title', 'Stratégie & Marketing Digital à Marrakech - Solutions Web & SEO')
@section('meta-description', 'Services marketing digital complets : création de sites web, référencement SEO/SEA, copywriting. Développez votre présence en ligne avec nos experts digitaux.')
@section('keywords', 'marketing digital marrakech, création site web, SEO, SEA, copywriting, stratégie digitale')

@section('content')
    <!-- Breadcrumb -->
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
                transform: translateY(-12px) rotate(3deg);
            }
        }

        @keyframes chartGrow {
            0%, 100% {
                transform: scale(1) rotate(0deg);
            }
            33% {
                transform: scale(1.1) rotate(2deg);
            }
            66% {
                transform: scale(1.05) rotate(-1deg);
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

        @keyframes digitalPulse {
            0%, 100% {
                box-shadow: 0 0 0 0 rgba(99, 102, 241, 0.4);
                transform: scale(1);
            }
            50% {
                box-shadow: 0 0 0 20px rgba(99, 102, 241, 0);
                transform: scale(1.05);
            }
        }

        @keyframes dataFlow {
            0% {
                transform: translateX(-100%);
                opacity: 0;
            }
            50% {
                opacity: 1;
            }
            100% {
                transform: translateX(100%);
                opacity: 0;
            }
        }

        @keyframes screenGlow {
            0%, 100% {
                box-shadow: 0 0 30px rgba(99, 102, 241, 0.3);
            }
            50% {
                box-shadow: 0 0 50px rgba(99, 102, 241, 0.6);
            }
        }

        @keyframes rocket {
            0%, 100% {
                transform: translateY(0px) rotate(-15deg);
            }
            50% {
                transform: translateY(-15px) rotate(15deg);
            }
        }

        .hero-section {
            position: relative;
            background: linear-gradient(135deg, rgba(99, 102, 241, 0.9), rgba(129, 140, 248, 0.8)),
                        url('https://images.unsplash.com/photo-1460472178825-e5240623afd5?ixlib=rb-4.0.3&auto=format&fit=crop&w=2069&q=80') center/cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
            min-height: 100vh;
            padding: 15px ;
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

        .animate-chart-grow {
            animation: chartGrow 3s ease-in-out infinite;
        }

        .animate-pulse-soft {
            animation: pulse 3s ease-in-out infinite;
        }

        .animate-digital-pulse {
            animation: digitalPulse 2s infinite;
        }

        .animate-screen-glow {
            animation: screenGlow 3s ease-in-out infinite;
        }

        .animate-rocket {
            animation: rocket 4s ease-in-out infinite;
        }

        .animate-data-flow {
            animation: dataFlow 3s linear infinite;
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

        .glass-effect-indigo {
            backdrop-filter: blur(15px);
            background: rgba(99, 102, 241, 0.25);
            border: 1px solid rgba(99, 102, 241, 0.4);
        }

        .hover-lift {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .hover-lift:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.3);
        }

        /* Particules marketing digital */
        .floating-particle {
            position: absolute;
            pointer-events: none;
        }

        .particle-chart {
            top: 12%;
            left: 6%;
            animation: chartGrow 5s ease-in-out infinite;
        }

        .particle-laptop {
            top: 20%;
            right: 8%;
            animation: screenGlow 4s ease-in-out infinite;
            animation-delay: 1s;
        }

        .particle-mobile {
            bottom: 25%;
            left: 10%;
            animation: digitalPulse 3s infinite;
            animation-delay: 2s;
        }

        .particle-rocket {
            bottom: 15%;
            right: 12%;
            animation: rocket 6s ease-in-out infinite;
            animation-delay: 0.5s;
        }

        .particle-target {
            top: 45%;
            left: 3%;
            animation: pulse 4s ease-in-out infinite;
            animation-delay: 3s;
        }

        .particle-analytics {
            top: 30%;
            right: 15%;
            animation: float 5s ease-in-out infinite reverse;
            animation-delay: 1.5s;
        }

        /* Flux de données */
        .data-stream {
            position: absolute;
            height: 2px;
            background: linear-gradient(90deg, transparent, rgba(129, 140, 248, 0.8), transparent);
            animation: dataFlow 4s linear infinite;
        }

        .stream-1 {
            top: 30%;
            left: 0;
            width: 25%;
        }

        .stream-2 {
            bottom: 40%;
            right: 0;
            width: 30%;
            animation-delay: 1s;
        }

        .stream-3 {
            top: 65%;
            left: 0;
            width: 20%;
            animation-delay: 2s;
        }

        /* Code binaire animé */
        .binary-code {
            position: absolute;
            font-family: 'Courier New', monospace;
            font-size: 10px;
            color: rgba(129, 140, 248, 0.3);
            animation: dataFlow 8s linear infinite;
        }

        .binary-1 {
            top: 20%;
            right: 5%;
        }

        .binary-2 {
            bottom: 30%;
            left: 3%;
            animation-delay: 2s;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-section {
                background-attachment: scroll;
            }
        }
    </style>
    <div class="bg-gray-50 py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="{{ route('accueil') }}" class="text-custom-blue hover:text-blue-800">Accueil</a>
                <i class="fas fa-chevron-right text-gray-400"></i>
                <a href="{{ route('expertises.index') }}" class="text-custom-blue hover:text-blue-800">Nos Expertises</a>
                <i class="fas fa-chevron-right text-gray-400"></i>
                <span class="text-gray-600">Stratégie & Marketing Digital</span>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="hero-section flex items-center justify-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="hero-content text-center">
                <!-- Icône principale avec animation chart-grow -->
                <div class="animate-fade-in-up opacity-0">
                    <div class="w-28 h-28 glass-effect-indigo rounded-xl flex items-center justify-center mx-auto mb-8 animate-chart-grow hover-lift animate-screen-glow relative">
                        <i class="fas fa-chart-line text-white text-5xl drop-shadow-lg"></i>
                        <!-- Indicateurs de croissance -->
                        <div class="absolute -top-2 -right-2 w-4 h-4">
                            <i class="fas fa-arrow-up text-green-400 text-sm animate-digital-pulse"></i>
                        </div>
                        <div class="absolute -bottom-2 -left-2 w-3 h-3">
                            <i class="fas fa-wifi text-blue-300 text-xs animate-digital-pulse" style="animation-delay: 0.5s;"></i>
                        </div>
                    </div>
                </div>
                
                <!-- Titre principal -->
                <div class="animate-fade-in-up animate-delay-200 opacity-0">
                    <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-6 text-shadow leading-tight">
                        <span class="text-indigo-200 animate-pulse-soft">Stratégie & Marketing Digital</span>
                        <br>
                        <span class="text-2xl md:text-4xl lg:text-5xl text-white/95">
                            Solutions Digitales pour Développer Votre Présence en Ligne
                        </span>
                    </h1>
                </div>
                
                <!-- Sous-titre digital -->
                <div class="animate-fade-in-up animate-delay-400 opacity-0">
                    <div class="max-w-5xl mx-auto mb-8">
                        <p class="text-lg md:text-2xl text-white leading-relaxed text-shadow opacity-95 mb-6">
                            Accélérez votre croissance digitale avec nos solutions marketing complètes.
                        </p>
                        <p class="text-base md:text-xl text-indigo-100 leading-relaxed text-shadow">
                            De la <strong>création de site web</strong> au <strong>référencement</strong>, 
                            en passant par la <strong>stratégie de contenu</strong>, nous vous accompagnons 
                            dans votre <strong>transformation digitale</strong>.
                        </p>
                    </div>
                </div>

                <!-- Services digitaux en badges -->
                <div class="animate-fade-in-up animate-delay-600 opacity-0 mb-10">
                    <div class="flex flex-wrap justify-center gap-4 mb-8">
                        <div class="glass-effect px-4 py-2 rounded-full hover-lift">
                            <i class="fas fa-globe text-blue-400 mr-2"></i>
                            <span class="text-white text-sm font-medium">Site Web</span>
                        </div>
                        <div class="glass-effect px-4 py-2 rounded-full hover-lift">
                            <i class="fas fa-search text-green-400 mr-2"></i>
                            <span class="text-white text-sm font-medium">SEO</span>
                        </div>
                        <div class="glass-effect px-4 py-2 rounded-full hover-lift">
                            <i class="fas fa-share-alt text-pink-400 mr-2"></i>
                            <span class="text-white text-sm font-medium">Social Media</span>
                        </div>
                        <div class="glass-effect px-4 py-2 rounded-full hover-lift">
                            <i class="fas fa-bullhorn text-orange-400 mr-2"></i>
                            <span class="text-white text-sm font-medium">Publicité</span>
                        </div>
                    </div>
                </div>

                <!-- Boutons d'action -->
                <div class="animate-fade-in-up animate-delay-600 opacity-0">
                    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-8">
                        <button class="glass-effect-indigo text-white px-8 py-4 rounded-full font-semibold text-lg hover-lift animate-screen-glow group">
                            <i class="fas fa-rocket mr-2 group-hover:rotate-12 transition-transform"></i>
                            Boostez votre digital
                            <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                        </button>
                        <button class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-white hover:text-indigo-900 transition-all duration-300 hover-lift">
                            <i class="fas fa-chart-bar mr-2"></i>
                            Audit digital gratuit
                        </button>
                    </div>
                </div>

                <!-- Processus digital -->
                <div class="animate-fade-in-up animate-delay-800 opacity-0 mb-8">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 max-w-6xl mx-auto">
                        <div class="glass-effect p-4 rounded-lg hover-lift">
                            <i class="fas fa-lightbulb text-yellow-400 text-2xl mb-2 animate-digital-pulse"></i>
                            <h3 class="text-white font-semibold text-sm">Stratégie</h3>
                            <p class="text-white/80 text-xs">Analyse & objectifs</p>
                        </div>
                        <div class="glass-effect p-4 rounded-lg hover-lift">
                            <i class="fas fa-code text-blue-400 text-2xl mb-2 animate-digital-pulse"></i>
                            <h3 class="text-white font-semibold text-sm">Création</h3>
                            <p class="text-white/80 text-xs">Design & développement</p>
                        </div>
                        <div class="glass-effect p-4 rounded-lg hover-lift">
                            <i class="fas fa-megaphone text-pink-400 text-2xl mb-2 animate-digital-pulse"></i>
                            <h3 class="text-white font-semibold text-sm">Promotion</h3>
                            <p class="text-white/80 text-xs">Marketing & publicité</p>
                        </div>
                        <div class="glass-effect p-4 rounded-lg hover-lift">
                            <i class="fas fa-chart-line text-green-400 text-2xl mb-2 animate-digital-pulse"></i>
                            <h3 class="text-white font-semibold text-sm">Analyse</h3>
                            <p class="text-white/80 text-xs">ROI & optimisation</p>
                        </div>
                    </div>
                </div>

                <!-- Message digital -->
                <div class="animate-fade-in-up animate-delay-1000 opacity-0">
                    <div class="glass-effect border-l-4 border-indigo-400 p-4 max-w-2xl mx-auto rounded-lg">
                        <div class="flex items-center justify-center">
                            <i class="fas fa-wifi text-indigo-400 text-xl mr-3 animate-digital-pulse"></i>
                            <div class="text-center">
                                <h3 class="text-white font-semibold">Votre succès digital commence ici</h3>
                                <p class="text-white/90 text-sm">Transformez vos visiteurs en clients fidèles</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stats digitales -->
                <div class="animate-fade-in-up animate-delay-1000 opacity-0 mt-12">
                    <div class="flex flex-wrap justify-center gap-8 text-white/80">
                        <div class="flex items-center gap-2">
                            <i class="fas fa-globe text-indigo-400 text-xl animate-digital-pulse"></i>
                            <div class="text-left">
                                <div class="text-lg font-bold text-white">500+</div>
                                <div class="text-xs">Sites créés</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fas fa-chart-line text-green-400 text-xl animate-digital-pulse"></i>
                            <div class="text-left">
                                <div class="text-lg font-bold text-white">+300%</div>
                                <div class="text-xs">ROI moyen</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fas fa-users text-pink-400 text-xl animate-digital-pulse"></i>
                            <div class="text-left">
                                <div class="text-lg font-bold text-white">1M+</div>
                                <div class="text-xs">Visiteurs générés</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fas fa-trophy text-yellow-400 text-xl animate-digital-pulse"></i>
                            <div class="text-left">
                                <div class="text-lg font-bold text-white">5 ans</div>
                                <div class="text-xs">Expertise digital</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Particules marketing digital -->
        <div class="floating-particle particle-chart opacity-20">
            <i class="fas fa-chart-bar text-indigo-300 text-4xl"></i>
        </div>
        <div class="floating-particle particle-laptop opacity-25">
            <i class="fas fa-laptop text-blue-300 text-4xl"></i>
        </div>
        <div class="floating-particle particle-mobile opacity-20">
            <i class="fas fa-mobile-alt text-green-300 text-3xl"></i>
        </div>
        <div class="floating-particle particle-rocket opacity-25">
            <i class="fas fa-rocket text-red-300 text-3xl"></i>
        </div>
        <div class="floating-particle particle-target opacity-15">
            <i class="fas fa-bullseye text-orange-300 text-3xl"></i>
        </div>
        <div class="floating-particle particle-analytics opacity-20">
            <i class="fas fa-analytics text-purple-300 text-3xl"></i>
        </div>

        <!-- Flux de données -->
        <div class="data-stream stream-1"></div>
        <div class="data-stream stream-2"></div>
        <div class="data-stream stream-3"></div>

        <!-- Code binaire animé -->
        <div class="binary-code binary-1">
            01010101<br>11001100<br>10101010
        </div>
        <div class="binary-code binary-2">
            11100011<br>01011010<br>10010110
        </div>

        <!-- Éléments décoratifs numériques -->
        <div class="absolute top-1/4 left-1/4 opacity-5">
            <i class="fas fa-network-wired text-white text-8xl animate-digital-pulse" style="animation-delay: 2s;"></i>
        </div>
        <div class="absolute bottom-1/3 right-1/4 opacity-5">
            <i class="fas fa-server text-white text-6xl animate-screen-glow" style="animation-delay: 4s;"></i>
        </div>
    </section>

    <!-- Services Marketing Digital -->
    <section class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-16">
                <!-- Création et Refonte de Site Web -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <div class="bg-gradient-to-br from-blue-500 to-blue-600 p-6 text-white">
                        <div class="w-16 h-16 bg-white bg-opacity-20 rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-laptop-code text-white text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-2">Création et Refonte de Site Web</h3>
                        <p class="text-blue-100">Sites web professionnels et responsives</p>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Conception et développement de sites web modernes, optimisés pour la conversion et adaptés à tous les supports.
                        </p>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span class="text-gray-700">Design responsive et moderne</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span class="text-gray-700">Optimisation UX/UI</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span class="text-gray-700">CMS personnalisé</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span class="text-gray-700">Performance et sécurité</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Référencement SEO et SEA -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <div class="bg-gradient-to-br from-green-500 to-green-600 p-6 text-white">
                        <div class="w-16 h-16 bg-white bg-opacity-20 rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-search text-white text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-2">Référencement SEO et SEA</h3>
                        <p class="text-green-100">Visibilité optimale sur les moteurs de recherche</p>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Améliorez votre visibilité en ligne avec nos stratégies SEO et campagnes publicitaires SEA performantes.
                        </p>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span class="text-gray-700">Audit SEO technique</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span class="text-gray-700">Optimisation contenu</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span class="text-gray-700">Campagnes Google Ads</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span class="text-gray-700">Suivi et reporting</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Copywriting -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <div class="bg-gradient-to-br from-purple-500 to-purple-600 p-6 text-white">
                        <div class="w-16 h-16 bg-white bg-opacity-20 rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-pen-fancy text-white text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-2">Copywriting Professionnel</h3>
                        <p class="text-purple-100">Contenus persuasifs qui convertissent</p>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Création de contenus optimisés qui engagent votre audience et transforment vos visiteurs en clients.
                        </p>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span class="text-gray-700">Pages de vente optimisées</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span class="text-gray-700">Articles de blog SEO</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span class="text-gray-700">Newsletters et emails</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span class="text-gray-700">Contenu réseaux sociaux</span>
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
                            <i class="fas fa-chart-bar text-yellow-600 text-xl"></i>
                        </div>
                        <h3 class="font-bold text-gray-900 mb-2">Analytics & Reporting</h3>
                        <p class="text-gray-600 text-sm">Suivi des performances et analyses détaillées de vos campagnes</p>
                    </div>

                    <div class="text-center p-6 bg-gray-50 rounded-lg">
                        <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-bullhorn text-red-600 text-xl"></i>
                        </div>
                        <h3 class="font-bold text-gray-900 mb-2">Social Media Marketing</h3>
                        <p class="text-gray-600 text-sm">Gestion de vos réseaux sociaux et campagnes publicitaires</p>
                    </div>

                    <div class="text-center p-6 bg-gray-50 rounded-lg">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-envelope text-green-600 text-xl"></i>
                        </div>
                        <h3 class="font-bold text-gray-900 mb-2">Email Marketing</h3>
                        <p class="text-gray-600 text-sm">Campagnes d'emailing automatisées et personnalisées</p>
                    </div>

                    <div class="text-center p-6 bg-gray-50 rounded-lg">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-mobile-alt text-custom-blue text-xl"></i>
                        </div>
                        <h3 class="font-bold text-gray-900 mb-2">Applications Mobiles</h3>
                        <p class="text-gray-600 text-sm">Développement d'applications mobiles natives et hybrides</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Processus Digital -->
    <section class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Notre Méthodologie Digital</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Une approche structurée en 6 étapes pour maximiser votre retour sur investissement digital
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Étape 1 -->
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-8 text-center">
                    <div class="w-16 h-16 bg-blue-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 font-bold text-xl">1</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Audit Digital</h3>
                    <p class="text-gray-600">Analyse complète de votre présence en ligne actuelle et identification des opportunités</p>
                </div>

                <!-- Étape 2 -->
                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-8 text-center">
                    <div class="w-16 h-16 bg-green-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 font-bold text-xl">2</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Stratégie Digitale</h3>
                    <p class="text-gray-600">Élaboration d'une stratégie sur mesure alignée avec vos objectifs business</p>
                </div>

                <!-- Étape 3 -->
                <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl p-8 text-center">
                    <div class="w-16 h-16 bg-purple-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 font-bold text-xl">3</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Création & Développement</h3>
                    <p class="text-gray-600">Mise en œuvre technique : site web, contenus, campagnes publicitaires</p>
                </div>

                <!-- Étape 4 -->
                <div class="bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-xl p-8 text-center">
                    <div class="w-16 h-16 bg-yellow-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 font-bold text-xl">4</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Lancement & Optimisation</h3>
                    <p class="text-gray-600">Déploiement des solutions et optimisation continue des performances</p>
                </div>

                <!-- Étape 5 -->
                <div class="bg-gradient-to-br from-red-50 to-red-100 rounded-xl p-8 text-center">
                    <div class="w-16 h-16 bg-red-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 font-bold text-xl">5</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Mesure & Analyse</h3>
                    <p class="text-gray-600">Suivi des KPIs, analyse des résultats et reporting détaillé</p>
                </div>

                <!-- Étape 6 -->
                <div class="bg-gradient-to-br from-indigo-50 to-indigo-100 rounded-xl p-8 text-center">
                    <div class="w-16 h-16 bg-indigo-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 font-bold text-xl">6</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Amélioration Continue</h3>
                    <p class="text-gray-600">Ajustements stratégiques et évolution des solutions pour maximiser le ROI</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Technologies & Outils -->
    <section class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Technologies & Outils Utilisés</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Nous utilisons les meilleures technologies et outils du marché pour garantir des résultats optimaux
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Développement Web -->
                <div class="bg-white rounded-xl shadow-lg p-6 text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-code text-custom-blue text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Développement Web</h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p>WordPress • Laravel • React</p>
                        <p>Vue.js • PHP • JavaScript</p>
                        <p>HTML5 • CSS3 • Bootstrap</p>
                    </div>
                </div>

                <!-- SEO/SEA -->
                <div class="bg-white rounded-xl shadow-lg p-6 text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-search-plus text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-4">SEO/SEA</h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p>Google Ads • Bing Ads</p>
                        <p>SEMrush • Ahrefs • Screaming Frog</p>
                        <p>Google Analytics • Search Console</p>
                    </div>
                </div>

                <!-- Design & Créa -->
                <div class="bg-white rounded-xl shadow-lg p-6 text-center">
                    <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-palette text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Design & Créa</h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p>Adobe Creative Suite</p>
                        <p>Figma • Sketch • Canva</p>
                        <p>Photoshop • Illustrator</p>
                    </div>
                </div>

                <!-- Marketing Automation -->
                <div class="bg-white rounded-xl shadow-lg p-6 text-center">
                    <div class="w-16 h-16 bg-red-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-robot text-red-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Marketing Automation</h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p>Mailchimp • HubSpot</p>
                        <p>Zapier • Hootsuite</p>
                        <p>Google Tag Manager</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Études de Cas -->
    <section class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Nos Réalisations</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Découvrez comment nous avons aidé nos clients à atteindre leurs objectifs digitaux
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Cas 1 -->
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-8">
                    <div class="text-center mb-6">
                        <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-store text-white text-xl"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900">E-commerce Mode</h3>
                    </div>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">Trafic organique</span>
                            <span class="text-2xl font-bold text-custom-blue">+340%</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">Conversions</span>
                            <span class="text-2xl font-bold text-green-600">+180%</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">ROI</span>
                            <span class="text-2xl font-bold text-purple-600">+250%</span>
                        </div>
                    </div>
                </div>

                <!-- Cas 2 -->
                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-8">
                    <div class="text-center mb-6">
                        <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-hotel text-white text-xl"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900">Hôtel Luxe</h3>
                    </div>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">Réservations en ligne</span>
                            <span class="text-2xl font-bold text-green-600">+150%</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">Visibilité locale</span>
                            <span class="text-2xl font-bold text-custom-blue">+200%</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">Engagement social</span>
                            <span class="text-2xl font-bold text-purple-600">+300%</span>
                        </div>
                    </div>
                </div>

                <!-- Cas 3 -->
                <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl p-8">
                    <div class="text-center mb-6">
                        <div class="w-16 h-16 bg-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-briefcase text-white text-xl"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900">Cabinet Conseil</h3>
                    </div>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">Leads qualifiés</span>
                            <span class="text-2xl font-bold text-purple-600">+280%</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">Coût par lead</span>
                            <span class="text-2xl font-bold text-green-600">-45%</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">Autorité domaine</span>
                            <span class="text-2xl font-bold text-custom-blue">+120%</span>
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
                    Témoignages d'entreprises qui ont transformé leur présence digitale avec nous
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white rounded-xl shadow-lg p-8">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400 mr-4">
                            @for($i = 0; $i < 5; $i++)
                                <i class="fas fa-star"></i>
                            @endfor
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6 italic text-lg">
                        "Notre nouveau site web et la stratégie SEO mise en place ont complètement transformé notre visibilité en ligne. 
                        Nous avons multiplié nos leads par 3 en 6 mois seulement !"
                    </p>
                    <div class="flex items-center">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" 
                             alt="Client" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <p class="font-semibold text-gray-900">Rachid Benali</p>
                            <p class="text-sm text-gray-600">Directeur Marketing, Atlas Tech</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg p-8">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400 mr-4">
                            @for($i = 0; $i < 5; $i++)
                                <i class="fas fa-star"></i>
                            @endfor
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6 italic text-lg">
                        "L'équipe a su comprendre nos enjeux et créer une stratégie digitale parfaitement adaptée à notre secteur. 
                        Le ROI sur nos campagnes publicitaires a dépassé toutes nos attentes."
                    </p>
                    <div class="flex items-center">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b182?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" 
                             alt="Client" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <p class="font-semibold text-gray-900">Samira El Amrani</p>
                            <p class="text-sm text-gray-600">CEO, Green Solutions</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Packages & Tarifs -->
    <section class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Nos Packages Marketing Digital</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Des solutions adaptées à chaque budget et chaque objectif
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Package Starter -->
                <div class="bg-white border-2 border-gray-200 rounded-xl p-8 hover:border-blue-500 transition-colors">
                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Starter</h3>
                        <p class="text-gray-600">Idéal pour les petites entreprises</p>
                        <div class="mt-4">
                            <span class="text-4xl font-bold text-custom-blue">À partir de</span>
                            <span class="text-2xl font-bold text-gray-900 ml-2">15,000 DH</span>
                        </div>
                    </div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Site web responsive (5 pages)</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Optimisation SEO de base</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Configuration Google Analytics</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Création 5 contenus blog</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Support 3 mois</span>
                        </li>
                    </ul>
                    <button class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                        Choisir ce package
                    </button>
                </div>

                <!-- Package Professional -->
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 border-2 border-blue-500 rounded-xl p-8 relative">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                        <span class="bg-blue-500 text-white px-4 py-1 rounded-full text-sm font-semibold">Populaire</span>
                    </div>
                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Professional</h3>
                        <p class="text-gray-600">Pour une croissance accélérée</p>
                        <div class="mt-4">
                            <span class="text-4xl font-bold text-custom-blue">À partir de</span>
                            <span class="text-2xl font-bold text-gray-900 ml-2">35,000 DH</span>
                        </div>
                    </div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Site web avancé (15 pages)</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>SEO technique complet</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Campagne Google Ads (3 mois)</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>20 contenus blog optimisés</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Social media management</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Support prioritaire 6 mois</span>
                        </li>
                    </ul>
                    <button class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                        Choisir ce package
                    </button>
                </div>

                <!-- Package Enterprise -->
                <div class="bg-white border-2 border-gray-200 rounded-xl p-8 hover:border-purple-500 transition-colors">
                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Enterprise</h3>
                        <p class="text-gray-600">Solution complète sur mesure</p>
                        <div class="mt-4">
                            <span class="text-4xl font-bold text-purple-600">Sur devis</span>
                        </div>
                    </div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Plateforme e-commerce complète</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Stratégie SEO/SEA avancée</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Marketing automation</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Application mobile</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Dashboard analytics personnalisé</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Support dédié 24/7</span>
                        </li>
                    </ul>
                    <button class="w-full bg-purple-600 text-white py-3 rounded-lg font-semibold hover:bg-purple-700 transition-colors">
                        Demander un devis
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-gradient-to-r from-indigo-600 to-purple-600 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-white mb-4">Prêt à Transformer Votre Présence Digitale ?</h2>
            <p class="text-xl text-indigo-100 mb-8 max-w-3xl mx-auto">
                Discutons de votre projet et découvrons ensemble comment notre expertise peut accélérer votre croissance en ligne. 
                Audit gratuit et devis personnalisé sous 48h.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="bg-white text-indigo-600 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-100 transition-all transform hover:scale-105">
                    Demander un audit gratuit
                </a>
                <a href="tel:+212524XXXXXX" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white hover:text-indigo-600 transition-all">
                    Appeler nos experts
                </a>
            </div>
        </div>
    </section>
@endsection