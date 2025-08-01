@extends('layouts.app')

@section('title', 'À Propos - Cabinet d\'Expertise Comptable et Juridique à Marrakech')
@section('meta_description', 'Découvrez notre cabinet d\'expertise comptable et juridique à Marrakech. Plus de 25 ans d\'expérience au service des entreprises, TPE, PME et professions libérales.')

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
                transform: translateY(-12px) rotate(2deg);
            }
        }

        @keyframes buildingGrow {
            0%, 100% {
                transform: scale(1) translateY(0px);
            }
            50% {
                transform: scale(1.08) translateY(-5px);
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

        @keyframes elegantGlow {
            0%, 100% {
                box-shadow: 0 0 30px rgba(156, 163, 175, 0.3);
                filter: brightness(1);
            }
            50% {
                box-shadow: 0 0 50px rgba(156, 163, 175, 0.5);
                filter: brightness(1.1);
            }
        }

        @keyframes experienceCounter {
            0% {
                transform: scale(0.8);
                opacity: 0;
            }
            50% {
                transform: scale(1.1);
                opacity: 1;
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes historyFlow {
            0% {
                opacity: 0.3;
                transform: translateX(-50px);
            }
            50% {
                opacity: 1;
                transform: translateX(0px);
            }
            100% {
                opacity: 0.3;
                transform: translateX(50px);
            }
        }

        @keyframes prestigeShimmer {
            0% {
                background-position: -200% 0;
            }
            100% {
                background-position: 200% 0;
            }
        }

        .hero-section {
            position: relative;
            background: linear-gradient(135deg, rgba(17, 24, 39, 0.95), rgba(55, 65, 81, 0.9), rgba(17, 24, 39, 0.95)),
                        url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80') center/cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
            min-height: 100vh;
            padding:20px;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.4);
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

        .animate-building-grow {
            animation: buildingGrow 4s ease-in-out infinite;
        }

        .animate-pulse-soft {
            animation: pulse 3s ease-in-out infinite;
        }

        .animate-elegant-glow {
            animation: elegantGlow 4s ease-in-out infinite;
        }

        .animate-experience-counter {
            animation: experienceCounter 2s ease-out forwards;
        }

        .animate-history-flow {
            animation: historyFlow 6s ease-in-out infinite;
        }

        .animate-prestige-shimmer {
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            background-size: 200% 100%;
            animation: prestigeShimmer 3s infinite;
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
            text-shadow: 0 4px 12px rgba(0, 0, 0, 0.7);
        }

        .glass-effect {
            backdrop-filter: blur(15px);
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .glass-effect-dark {
            backdrop-filter: blur(15px);
            background: rgba(55, 65, 81, 0.3);
            border: 1px solid rgba(156, 163, 175, 0.3);
        }

        .hover-lift {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .hover-lift:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.4);
        }

        /* Particules d'expertise et prestige */
        .floating-particle {
            position: absolute;
            pointer-events: none;
        }

        .particle-building {
            top: 15%;
            left: 8%;
            animation: buildingGrow 6s ease-in-out infinite;
        }

        .particle-award {
            top: 20%;
            right: 10%;
            animation: float 5s ease-in-out infinite reverse;
            animation-delay: 1s;
        }

        .particle-handshake {
            bottom: 30%;
            left: 12%;
            animation: historyFlow 7s ease-in-out infinite;
            animation-delay: 2s;
        }

        .particle-star {
            bottom: 25%;
            right: 8%;
            animation: pulse 3s ease-in-out infinite;
            animation-delay: 0.5s;
        }

        .particle-expertise {
            top: 40%;
            left: 5%;
            animation: float 6s ease-in-out infinite;
            animation-delay: 3s;
        }

        .particle-growth {
            top: 35%;
            right: 15%;
            animation: experienceCounter 4s ease-in-out infinite;
            animation-delay: 1.5s;
        }

        /* Lignes temporelles */
        .timeline-line {
            position: absolute;
            height: 2px;
            background: linear-gradient(90deg, transparent, rgba(156, 163, 175, 0.4), transparent);
            animation: historyFlow 8s ease-in-out infinite;
        }

        .timeline-1 {
            top: 30%;
            left: 10%;
            width: 25%;
            transform: rotate(15deg);
        }

        .timeline-2 {
            bottom: 40%;
            right: 15%;
            width: 30%;
            transform: rotate(-30deg);
            animation-delay: 2s;
        }

        .timeline-3 {
            top: 65%;
            left: 20%;
            width: 20%;
            transform: rotate(45deg);
            animation-delay: 4s;
        }

        /* Années d'expérience */
        .experience-badge {
            position: relative;
            overflow: hidden;
        }

        .experience-badge::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            animation: prestigeShimmer 4s infinite;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-section {
                background-attachment: scroll;
            }
        }
    </style>
<!-- Hero Section -->
 <div class="bg-gray-50 py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="{{route('accueil')}}" class="text-gray-600 hover:text-gray-800">Accueil</a>
                <i class="fas fa-chevron-right text-gray-400"></i>
                <span class="text-gray-600">À Propos</span>
            </nav>
        </div>
    </div>
 <section class="hero-section flex items-center justify-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="hero-content text-center">
                <!-- Icône prestige avec building -->
                <div class="animate-fade-in-up opacity-0">
                    <div class="w-32 h-32 glass-effect-dark rounded-xl flex items-center justify-center mx-auto mb-8 animate-building-grow hover-lift animate-elegant-glow relative">
                        <i class="fas fa-building text-gray-300 text-6xl drop-shadow-lg"></i>
                        <!-- Badge d'excellence -->
                        <div class="absolute -top-3 -right-3 w-8 h-8 bg-yellow-500 rounded-full flex items-center justify-center">
                            <i class="fas fa-crown text-white text-sm animate-pulse-soft"></i>
                        </div>
                        <!-- Étoiles de prestige -->
                        <div class="absolute -bottom-2 -left-2 flex space-x-1">
                            <i class="fas fa-star text-yellow-400 text-xs animate-pulse-soft"></i>
                            <i class="fas fa-star text-yellow-400 text-xs animate-pulse-soft" style="animation-delay: 0.2s;"></i>
                            <i class="fas fa-star text-yellow-400 text-xs animate-pulse-soft" style="animation-delay: 0.4s;"></i>
                        </div>
                    </div>
                </div>
                
                <!-- Titre principal -->
                <div class="animate-fade-in-up animate-delay-200 opacity-0">
                    <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold text-white mb-6 text-shadow leading-tight">
                        <span class="text-gray-200 animate-pulse-soft">À Propos</span>
                        <br>
                        <span class="text-3xl md:text-5xl lg:text-6xl text-gray-300">
                            de Notre Cabinet
                        </span>
                    </h1>
                </div>
                
          

                <!-- Valeurs du cabinet -->
                <div class="animate-fade-in-up animate-delay-600 opacity-0 mb-10">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
                        <div class="glass-effect p-6 rounded-lg hover-lift">
                            <i class="fas fa-shield-alt text-blue-400 text-3xl mb-3 animate-elegant-glow"></i>
                            <h3 class="text-white font-bold text-lg mb-2">Confiance</h3>
                            <p class="text-gray-300 text-sm">Un partenaire fiable depuis 1999</p>
                        </div>
                        <div class="glass-effect p-6 rounded-lg hover-lift">
                            <i class="fas fa-lightbulb text-yellow-400 text-3xl mb-3 animate-elegant-glow"></i>
                            <h3 class="text-white font-bold text-lg mb-2">Innovation</h3>
                            <p class="text-gray-300 text-sm">Solutions modernes et adaptées</p>
                        </div>
                        <div class="glass-effect p-6 rounded-lg hover-lift">
                            <i class="fas fa-heart text-red-400 text-3xl mb-3 animate-elegant-glow"></i>
                            <h3 class="text-white font-bold text-lg mb-2">Proximité</h3>
                            <p class="text-gray-300 text-sm">Accompagnement personnalisé</p>
                        </div>
                    </div>
                </div>

                <!-- Boutons d'action -->
                <div class="animate-fade-in-up animate-delay-600 opacity-0">
                    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-8">
                                                    <a href="#team">

                        <button class="glass-effect-dark text-white px-8 py-4 rounded-full font-semibold text-lg hover-lift animate-elegant-glow group">
                            <i class="fas fa-users mr-2 group-hover:rotate-12 transition-transform"></i>
                            Découvrez notre équipe
                            <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                        </button>
                            </a>
                                                                                    <a href="#hisory">


                        <button class="border-2 border-gray-300 text-gray-300 px-8 py-4 rounded-full font-semibold text-lg hover:bg-gray-300 hover:text-gray-900 transition-all duration-300 hover-lift">

                            <i class="fas fa-history mr-2"></i>
                            Notre histoire
                        </button>
                                                    </a>

                    </div>
                </div>

                <!-- Milestones historiques -->
             

                <!-- Message de prestige -->
                <div class="animate-fade-in-up animate-delay-1000 opacity-0">
                    <div class="glass-effect border-l-4 border-yellow-400 p-6 max-w-3xl mx-auto rounded-lg">
                        <div class="flex items-center justify-center">
                            <i class="fas fa-quote-left text-yellow-400 text-2xl mr-4"></i>
                            <div class="text-center">
                                <h3 class="text-white font-bold text-lg mb-2">L'excellence au service de votre ambition</h3>
                                <p class="text-gray-300 text-base italic">
                                    "Depuis plus de deux décennies, nous accompagnons les entrepreneurs dans leurs défis les plus importants, 
                                    avec la passion de l'excellence et l'engagement de la réussite partagée."
                                </p>
                            </div>
                            <i class="fas fa-quote-right text-yellow-400 text-2xl ml-4"></i>
                        </div>
                    </div>
                </div>

                <!-- Stats de prestige -->
                <div class="animate-fade-in-up animate-delay-1000 opacity-0 mt-12">
                    <div class="flex flex-wrap justify-center gap-8 text-gray-400">
                        <div class="flex items-center gap-2">
                            <i class="fas fa-users text-blue-400 text-xl animate-elegant-glow"></i>
                            <div class="text-left">
                                <div class="text-lg font-bold text-white">2500+</div>
                                <div class="text-xs">Clients de confiance</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fas fa-trophy text-yellow-400 text-xl animate-elegant-glow"></i>
                            <div class="text-left">
                                <div class="text-lg font-bold text-white">15</div>
                                <div class="text-xs">Prix & distinctions</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fas fa-globe text-green-400 text-xl animate-elegant-glow"></i>
                            <div class="text-left">
                                <div class="text-lg font-bold text-white">3</div>
                                <div class="text-xs">Bureaux</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fas fa-user-tie text-purple-400 text-xl animate-elegant-glow"></i>
                            <div class="text-left">
                                <div class="text-lg font-bold text-white">35</div>
                                <div class="text-xs">Experts dédiés</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Particules de prestige -->
        <div class="floating-particle particle-building opacity-15">
            <i class="fas fa-university text-gray-400 text-4xl"></i>
        </div>
        <div class="floating-particle particle-award opacity-20">
            <i class="fas fa-award text-yellow-300 text-3xl"></i>
        </div>
        <div class="floating-particle particle-handshake opacity-15">
            <i class="fas fa-handshake text-blue-300 text-3xl"></i>
        </div>
        <div class="floating-particle particle-star opacity-20">
            <i class="fas fa-star text-yellow-300 text-2xl"></i>
        </div>
        <div class="floating-particle particle-expertise opacity-15">
            <i class="fas fa-graduation-cap text-purple-300 text-3xl"></i>
        </div>
        <div class="floating-particle particle-growth opacity-20">
            <i class="fas fa-chart-line text-green-300 text-3xl"></i>
        </div>

        <!-- Lignes temporelles -->
        <div class="timeline-line timeline-1"></div>
        <div class="timeline-line timeline-2"></div>
        <div class="timeline-line timeline-3"></div>

        <!-- Éléments décoratifs prestigieux -->
        <div class="absolute top-1/4 left-1/4 opacity-5">
            <i class="fas fa-landmark text-white text-8xl animate-building-grow" style="animation-delay: 2s;"></i>
        </div>
        <div class="absolute bottom-1/3 right-1/4 opacity-5">
            <i class="fas fa-balance-scale text-white text-6xl animate-history-flow" style="animation-delay: 4s;"></i>
        </div>
    </section>

<!-- Notre Histoire -->
<section class="py-20" id="hisory">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold mb-6 text-gray-800">Notre Histoire</h2>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        Fondé à Marrakech il y a plus de 25 ans, notre cabinet s'est imposé comme un acteur 
                        incontournable dans l'accompagnement des entreprises marocaines. Nous avons bâti notre 
                        réputation sur l'excellence de nos services et la confiance de nos clients.
                    </p>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        Spécialisés dans l'expertise comptable, le conseil juridique et fiscal, nous accompagnons 
                        les TPE, PME et professions libérales dans toutes les étapes de leur développement, 
                        de la création à la croissance de leur activité.
                    </p>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-blue-600 mb-2">25+</div>
                            <div class="text-gray-600">Années d'expérience</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-green-600 mb-2">500+</div>
                            <div class="text-gray-600">Clients accompagnés</div>
                        </div>
                    </div>
                </div>
                <div class="lg:text-right">
                    <div class="bg-gradient-to-br from-blue-50 to-green-50 p-8 rounded-2xl">
                        <svg class="w-32 h-32 mx-auto lg:ml-auto text-blue-600 mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Cabinet de Référence</h3>
                        <p class="text-gray-600">
                            Reconnu pour notre expertise technique et notre approche personnalisée, 
                            nous sommes le partenaire de confiance des entrepreneurs à Marrakech.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Notre Mission -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-12 text-gray-800">Notre Mission</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <div class="bg-blue-100 p-4 rounded-full w-16 h-16 mx-auto mb-6 flex items-center justify-center">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Accompagner</h3>
                    <p class="text-gray-600">
                        Nous accompagnons les entrepreneurs dans la réalisation de leurs projets 
                        avec un service personnalisé et de qualité.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <div class="bg-green-100 p-4 rounded-full w-16 h-16 mx-auto mb-6 flex items-center justify-center">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Sécuriser</h3>
                    <p class="text-gray-600">
                        Nous sécurisons vos démarches juridiques, comptables et fiscales 
                        pour vous garantir une conformité totale.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <div class="bg-orange-100 p-4 rounded-full w-16 h-16 mx-auto mb-6 flex items-center justify-center">
                        <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Optimiser</h3>
                    <p class="text-gray-600">
                        Nous optimisons votre gestion administrative et fiscale pour vous 
                        permettre de vous concentrer sur votre cœur de métier.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Nos Valeurs -->
<section class="py-20">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-16 text-gray-800">Nos Valeurs</h2>
            <div class="grid lg:grid-cols-2 gap-12">
                <div class="space-y-8">
                    <div class="flex items-start space-x-4">
                        <div class="bg-blue-100 p-3 rounded-lg flex-shrink-0">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-2 text-gray-800">Proximité et Écoute</h3>
                            <p class="text-gray-600">
                                Nous privilégions une relation de proximité avec nos clients, 
                                basée sur l'écoute et la compréhension de leurs besoins spécifiques.
                            </p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="bg-green-100 p-3 rounded-lg flex-shrink-0">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-2 text-gray-800">Expertise et Professionnalisme</h3>
                            <p class="text-gray-600">
                                Notre équipe maîtrise parfaitement la législation marocaine et 
                                se forme continuellement aux évolutions réglementaires.
                            </p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="bg-purple-100 p-3 rounded-lg flex-shrink-0">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-2 text-gray-800">Transparence</h3>
                            <p class="text-gray-600">
                                Nous privilégions la transparence dans nos relations clients, 
                                avec des honoraires clairs et une communication ouverte.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="space-y-8">
                    <div class="flex items-start space-x-4">
                        <div class="bg-orange-100 p-3 rounded-lg flex-shrink-0">
                            <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-2 text-gray-800">Réactivité</h3>
                            <p class="text-gray-600">
                                Nous nous engageons à répondre rapidement à vos demandes 
                                et à traiter vos dossiers dans les meilleurs délais.
                            </p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="bg-red-100 p-3 rounded-lg flex-shrink-0">
                            <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-2 text-gray-800">Formation Continue</h3>
                            <p class="text-gray-600">
                                Nous investissons dans la formation continue de notre équipe 
                                pour vous offrir les meilleures solutions adaptées aux évolutions législatives.
                            </p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="bg-indigo-100 p-3 rounded-lg flex-shrink-0">
                            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-2 text-gray-800">Esprit d'Équipe</h3>
                            <p class="text-gray-600">
                                Notre équipe pluridisciplinaire travaille en synergie pour vous offrir 
                                une approche globale et cohérente de vos problématiques.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Notre Équipe -->
<section class="py-20 bg-gray-50" id="team">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-16 text-gray-800">Notre Équipe</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-lg text-center">
                    <div class="bg-gradient-to-br from-blue-100 to-blue-200 w-24 h-24 rounded-full mx-auto mb-6 flex items-center justify-center">
                        <svg class="w-12 h-12 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-gray-800">Expert-Comptable</h3>
                    <p class="text-blue-600 font-semibold mb-4">Responsable Comptabilité</p>
                    <p class="text-gray-600">
                        Spécialisé dans la gestion comptable des TPE et PME, 
                        avec une expertise approfondie en fiscalité marocaine.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg text-center">
                    <div class="bg-gradient-to-br from-green-100 to-green-200 w-24 h-24 rounded-full mx-auto mb-6 flex items-center justify-center">
                        <svg class="w-12 h-12 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-gray-800">Juriste d'Entreprise</h3>
                    <p class="text-green-600 font-semibold mb-4">Responsable Juridique</p>
                    <p class="text-gray-600">
                        Expert en droit des sociétés marocain, accompagnement 
                        dans toutes les formalités juridiques et contentieux.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg text-center">
                    <div class="bg-gradient-to-br from-purple-100 to-purple-200 w-24 h-24 rounded-full mx-auto mb-6 flex items-center justify-center">
                        <svg class="w-12 h-12 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-gray-800">Fiscaliste</h3>
                    <p class="text-purple-600 font-semibold mb-4">Responsable Fiscal</p>
                    <p class="text-gray-600">
                        Spécialisé dans l'optimisation fiscale et l'accompagnement 
                        lors des contrôles fiscaux et contentieux.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Nos Secteurs d'Activité -->
<section class="py-20">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-16 text-gray-800">Nos Secteurs d'Activité</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-6 rounded-xl text-center">
                    <div class="bg-blue-600 p-3 rounded-full w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Immobilier</h3>
                    <p class="text-sm text-gray-600">Promoteurs, agents immobiliers, SCI</p>
                </div>
                <div class="bg-gradient-to-br from-green-50 to-green-100 p-6 rounded-xl text-center">
                    <div class="bg-green-600 p-3 rounded-full w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Commerce</h3>
                    <p class="text-sm text-gray-600">Détaillants, grossistes, import-export</p>
                </div>
                <div class="bg-gradient-to-br from-purple-50 to-purple-100 p-6 rounded-xl text-center">
                    <div class="bg-purple-600 p-3 rounded-full w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Professions Libérales</h3>
                    <p class="text-sm text-gray-600">Médecins, avocats, consultants</p>
                </div>
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-6 rounded-xl text-center">
                    <div class="bg-orange-600 p-3 rounded-full w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Start-ups</h3>
                    <p class="text-sm text-gray-600">Jeunes entreprises innovantes</p>
                </div>
                <div class="bg-gradient-to-br from-red-50 to-red-100 p-6 rounded-xl text-center">
                    <div class="bg-red-600 p-3 rounded-full w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Artisanat</h3>
                    <p class="text-sm text-gray-600">Artisans, créateurs, manufacturiers</p>
                </div>
                <div class="bg-gradient-to-br from-indigo-50 to-indigo-100 p-6 rounded-xl text-center">
                    <div class="bg-indigo-600 p-3 rounded-full w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Services</h3>
                    <p class="text-sm text-gray-600">Conseil, formation, services aux entreprises</p>
                </div>
                <div class="bg-gradient-to-br from-yellow-50 to-yellow-100 p-6 rounded-xl text-center">
                    <div class="bg-yellow-600 p-3 rounded-full w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Restauration</h3>
                    <p class="text-sm text-gray-600">Restaurants, cafés, traiteurs</p>
                </div>
                <div class="bg-gradient-to-br from-teal-50 to-teal-100 p-6 rounded-xl text-center">
                    <div class="bg-teal-600 p-3 rounded-full w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Et bien d'autres...</h3>
                    <p class="text-sm text-gray-600">Tous secteurs d'activité</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-20 bg-gray-900 text-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8">Faites Confiance à Notre Expertise</h2>
            <p class="text-xl mb-8 text-gray-100">
                Rejoignez les centaines d'entreprises qui nous font confiance 
                pour leur gestion comptable, juridique et fiscale.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#contact-form" class="bg-orange-500 hover:bg-orange-600 text-white px-8 py-4 rounded-lg font-semibold transition-colors">
                    Prendre Contact
                </a>
                <a href="/services" class="border-2 border-white hover:bg-white hover:text-gray-900 text-white px-8 py-4 rounded-lg font-semibold transition-colors">
                    Découvrir nos Services
                </a>
            </div>
        </div>
    </div>
</section>
@endsection