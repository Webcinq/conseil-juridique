@extends('layouts.app')

@section('title', 'Conseil en entrepreneuriat : Étude de projet, business plan et stratégie de lancement')
@section('meta-description', 'Validez la faisabilité de votre projet d\'entreprise grâce à un accompagnement stratégique : business plan, étude de marché, prévisionnel financier. Construisez une base solide.')
@section('keywords', 'conseil entrepreneuriat, business plan, étude faisabilité, création entreprise marrakech, accompagnement entrepreneur')

@section('content')
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conseil Entrepreneuriat Marrakech - Hero Section</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
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
                transform: translateY(-12px) rotate(5deg);
            }
        }

        @keyframes lightbulb {
            0%, 100% {
                transform: scale(1) rotate(0deg);
                filter: brightness(1);
            }
            50% {
                transform: scale(1.1) rotate(-3deg);
                filter: brightness(1.2);
            }
        }

        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
        }

        @keyframes sparkle {
            0%, 100% {
                opacity: 0;
                transform: scale(0) rotate(0deg);
            }
            50% {
                opacity: 1;
                transform: scale(1) rotate(180deg);
            }
        }

        @keyframes subtleGlow {
            0%, 100% {
                box-shadow: 0 0 30px rgba(245, 158, 11, 0.4);
            }
            50% {
                box-shadow: 0 0 50px rgba(245, 158, 11, 0.6);
            }
        }

        @keyframes rocket {
            0%, 100% {
                transform: translateY(0px) rotate(-10deg);
            }
            50% {
                transform: translateY(-20px) rotate(10deg);
            }
        }

        .hero-section {
            position: relative;
            background: linear-gradient(135deg, rgba(245, 158, 11, 0.85), rgba(251, 191, 36, 0.8)),
                        url('https://images.unsplash.com/photo-1559136555-9303baea8ebd?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80') center/cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
            min-height: 100vh;
            padding: 10px
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.2);
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

        .animate-lightbulb {
            animation: lightbulb 3s ease-in-out infinite;
        }

        .animate-pulse-soft {
            animation: pulse 3s ease-in-out infinite;
        }

        .animate-glow {
            animation: subtleGlow 3s ease-in-out infinite;
        }

        .animate-sparkle {
            animation: sparkle 2s ease-in-out infinite;
        }

        .animate-rocket {
            animation: rocket 4s ease-in-out infinite;
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

        .glass-effect-yellow {
            backdrop-filter: blur(15px);
            background: rgba(245, 158, 11, 0.25);
            border: 1px solid rgba(245, 158, 11, 0.4);
        }

        .hover-lift {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .hover-lift:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
        }

        /* Particules entrepreneuriales */
        .floating-particle {
            position: absolute;
            pointer-events: none;
        }

        .particle-lightbulb {
            top: 15%;
            left: 8%;
            animation: sparkle 3s ease-in-out infinite;
        }

        .particle-rocket {
            top: 25%;
            right: 10%;
            animation: rocket 5s ease-in-out infinite;
            animation-delay: 1s;
        }

        .particle-chart {
            bottom: 30%;
            left: 12%;
            animation: float 6s ease-in-out infinite;
            animation-delay: 2s;
        }

        .particle-target {
            bottom: 20%;
            right: 8%;
            animation: pulse 4s ease-in-out infinite;
            animation-delay: 0.5s;
        }

        .particle-idea {
            top: 40%;
            left: 5%;
            animation: lightbulb 7s ease-in-out infinite;
            animation-delay: 3s;
        }

        .particle-growth {
            top: 35%;
            right: 15%;
            animation: float 5s ease-in-out infinite reverse;
            animation-delay: 1.5s;
        }

        /* Étoiles scintillantes */
        .sparkle {
            position: absolute;
            color: rgba(255, 255, 255, 0.8);
            pointer-events: none;
        }

        .sparkle-1 {
            top: 20%;
            left: 15%;
            animation: sparkle 2s ease-in-out infinite;
        }

        .sparkle-2 {
            top: 70%;
            right: 20%;
            animation: sparkle 2.5s ease-in-out infinite;
            animation-delay: 0.5s;
        }

        .sparkle-3 {
            bottom: 40%;
            left: 20%;
            animation: sparkle 3s ease-in-out infinite;
            animation-delay: 1s;
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
                <span class="text-gray-600">Conseil Entrepreneuriat</span>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
   <section class="hero-section flex items-center justify-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="hero-content text-center">
                <!-- Icône principale avec animation lightbulb -->
                <div class="animate-fade-in-up opacity-0">
                    <div class="w-28 h-28 glass-effect-yellow rounded-xl flex items-center justify-center mx-auto mb-8 animate-lightbulb hover-lift animate-glow relative">
                        <i class="fas fa-lightbulb text-white text-5xl drop-shadow-lg"></i>
                        <!-- Étincelles autour de l'ampoule -->
                        <div class="absolute -top-2 -right-2">
                            <i class="fas fa-sparkles text-yellow-300 text-sm animate-sparkle"></i>
                        </div>
                        <div class="absolute -bottom-2 -left-2">
                            <i class="fas fa-sparkles text-yellow-200 text-xs animate-sparkle" style="animation-delay: 1s;"></i>
                        </div>
                    </div>
                </div>
                
                <!-- Titre principal -->
                <div class="animate-fade-in-up animate-delay-200 opacity-0">
                    <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-6 text-shadow leading-tight">
                        <span class="text-yellow-200 animate-pulse-soft">Conseil en Entrepreneuriat</span>
                        <br>
                        <span class="text-2xl md:text-4xl lg:text-5xl text-white/95">
                            Un Accompagnement d'Expert pour Concrétiser Votre Projet
                        </span>
                    </h1>
                </div>
                
                <!-- Sous-titre motivant -->
                <div class="animate-fade-in-up animate-delay-400 opacity-0">
                    <div class="max-w-5xl mx-auto mb-8">
                        <p class="text-lg md:text-2xl text-white leading-relaxed text-shadow opacity-95 mb-6">
                            Vous avez une idée d'entreprise mais vous ne savez pas par où commencer ?
                        </p>
                        <p class="text-base md:text-xl text-yellow-100 leading-relaxed text-shadow">
                            Notre cabinet vous propose un <strong>accompagnement sur mesure à chaque étape</strong> 
                            de votre parcours entrepreneurial, de l'<strong>idée initiale</strong> jusqu'à la 
                            <strong>constitution définitive</strong> de votre société.
                        </p>
                    </div>
                </div>

                <!-- Étapes entrepreneuriales en badges -->
                <div class="animate-fade-in-up animate-delay-600 opacity-0 mb-10">
                    <div class="flex flex-wrap justify-center gap-4 mb-8">
                        <div class="glass-effect px-4 py-2 rounded-full hover-lift">
                            <i class="fas fa-lightbulb text-yellow-400 mr-2"></i>
                            <span class="text-white text-sm font-medium">Idée</span>
                        </div>
                        <div class="glass-effect px-4 py-2 rounded-full hover-lift">
                            <i class="fas fa-route text-blue-400 mr-2"></i>
                            <span class="text-white text-sm font-medium">Stratégie</span>
                        </div>
                        <div class="glass-effect px-4 py-2 rounded-full hover-lift">
                            <i class="fas fa-chart-line text-green-400 mr-2"></i>
                            <span class="text-white text-sm font-medium">Business Plan</span>
                        </div>
                        <div class="glass-effect px-4 py-2 rounded-full hover-lift">
                            <i class="fas fa-rocket text-red-400 mr-2"></i>
                            <span class="text-white text-sm font-medium">Lancement</span>
                        </div>
                    </div>
                </div>

                <!-- Boutons d'action -->
                <div class="animate-fade-in-up animate-delay-600 opacity-0">
                    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-8">
                        <button class="glass-effect-yellow text-white px-8 py-4 rounded-full font-semibold text-lg hover-lift animate-glow group">
                           <a href="#services-principaux">
                            <i class="fas fa-rocket mr-2 group-hover:rotate-12 transition-transform"></i>
                            Lancer mon projet
                            <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                            </a>
                        </button>
                        <button class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-white hover:text-yellow-800 transition-all duration-300 hover-lift">
                           <a href="{{route('contact')}}">
                            <i class="fas fa-calendar-check mr-2"></i>
                            Rendez-vous gratuit
                            </a>
                        </button>
                    </div>
                </div>

                <!-- Services entrepreneuriaux -->
                <div class="animate-fade-in-up animate-delay-800 opacity-0 mb-8">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 max-w-5xl mx-auto">
                        <div class="glass-effect p-4 rounded-lg hover-lift">
                            <i class="fas fa-brain text-purple-400 text-2xl mb-2"></i>
                            <h3 class="text-white font-semibold text-sm">Validation d'idée</h3>
                            <p class="text-white/80 text-xs">Étude de faisabilité</p>
                        </div>
                        <div class="glass-effect p-4 rounded-lg hover-lift">
                            <i class="fas fa-map-marked-alt text-blue-400 text-2xl mb-2"></i>
                            <h3 class="text-white font-semibold text-sm">Stratégie business</h3>
                            <p class="text-white/80 text-xs">Plan d'action personnalisé</p>
                        </div>
                        <div class="glass-effect p-4 rounded-lg hover-lift">
                            <i class="fas fa-handshake text-green-400 text-2xl mb-2"></i>
                            <h3 class="text-white font-semibold text-sm">Accompagnement</h3>
                            <p class="text-white/80 text-xs">Suivi continu</p>
                        </div>
                    </div>
                </div>

                <!-- Message motivant -->
                <div class="animate-fade-in-up animate-delay-1000 opacity-0">
                    <div class="glass-effect border-l-4 border-yellow-400 p-4 max-w-2xl mx-auto rounded-lg">
                        <div class="flex items-center justify-center">
                            <i class="fas fa-quote-left text-yellow-400 text-xl mr-3"></i>
                            <div class="text-center">
                                <h3 class="text-white font-semibold">Transformez votre idée en succès</h3>
                                <p class="text-white/90 text-sm">Chaque grande entreprise a commencé par une simple idée</p>
                            </div>
                            <i class="fas fa-quote-right text-yellow-400 text-xl ml-3"></i>
                        </div>
                    </div>
                </div>

                <!-- Stats de réussite -->
                <div class="animate-fade-in-up animate-delay-1000 opacity-0 mt-12">
                    <div class="flex flex-wrap justify-center gap-8 text-white/80">
                        <div class="flex items-center gap-2">
                            <i class="fas fa-rocket text-yellow-400 text-xl"></i>
                            <div class="text-left">
                                <div class="text-lg font-bold text-white">200+</div>
                                <div class="text-xs">Projets accompagnés</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fas fa-chart-line text-green-400 text-xl"></i>
                            <div class="text-left">
                                <div class="text-lg font-bold text-white">85%</div>
                                <div class="text-xs">Taux de réussite</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fas fa-clock text-blue-400 text-xl"></i>
                            <div class="text-left">
                                <div class="text-lg font-bold text-white">15 jours</div>
                                <div class="text-xs">Délai moyen</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fas fa-award text-purple-400 text-xl"></i>
                            <div class="text-left">
                                <div class="text-lg font-bold text-white">25 ans</div>
                                <div class="text-xs">D'expérience</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Particules entrepreneuriales thématiques -->
        <div class="floating-particle particle-lightbulb opacity-20">
            <i class="fas fa-lightbulb text-yellow-300 text-3xl"></i>
        </div>
        <div class="floating-particle particle-rocket opacity-25">
            <i class="fas fa-rocket text-red-300 text-4xl"></i>
        </div>
        <div class="floating-particle particle-chart opacity-20">
            <i class="fas fa-chart-line text-green-300 text-3xl"></i>
        </div>
        <div class="floating-particle particle-target opacity-25">
            <i class="fas fa-bullseye text-blue-300 text-3xl"></i>
        </div>
        <div class="floating-particle particle-idea opacity-15">
            <i class="fas fa-brain text-purple-300 text-3xl"></i>
        </div>
        <div class="floating-particle particle-growth opacity-20">
            <i class="fas fa-seedling text-green-300 text-3xl"></i>
        </div>

        <!-- Étoiles scintillantes -->
        <div class="sparkle sparkle-1">
            <i class="fas fa-star text-sm"></i>
        </div>
        <div class="sparkle sparkle-2">
            <i class="fas fa-star text-xs"></i>
        </div>
        <div class="sparkle sparkle-3">
            <i class="fas fa-star text-sm"></i>
        </div>

        <!-- Éléments décoratifs supplémentaires -->
        <div class="absolute top-1/4 left-1/4 opacity-5">
            <i class="fas fa-cogs text-white text-8xl animate-float" style="animation-delay: 2s;"></i>
        </div>
        <div class="absolute bottom-1/3 right-1/4 opacity-5">
            <i class="fas fa-users text-white text-6xl animate-pulse-soft" style="animation-delay: 4s;"></i>
        </div>
    </section>

    <!-- Services Principaux -->
    <section class="bg-gray-50 py-20" id="services-principaux">
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
                        <a href="{{ route('creation-entreprise') }}" class="text-custom-blue font-semibold hover:text-blue-800 transition-colors">
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
                            <i class="fas fa-chart-bar text-custom-blue mr-3"></i>
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
                        <i class="fas fa-ear-listen text-custom-blue text-2xl"></i>
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
                    <i class="fas fa-laptop-code text-3xl text-custom-blue mb-3"></i>
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