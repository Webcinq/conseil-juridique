@extends('layouts.app')

@section('title', 'Gestion de Comptabilité à Marrakech - Missions Comptables pour les entreprises')
@section('meta_description', 'Gestion complète de votre comptabilité à Marrakech : Tenue et révision comptable, bilans, déclarations fiscales et sociales. Un accompagnement personnalisé pour entrepreneurs.')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Section Hero avec Background</title>
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
                transform: translateY(-10px) rotate(2deg);
            }
        }

        @keyframes subtleGlow {
            0%, 100% {
                box-shadow: 0 0 20px rgba(255, 255, 255, 0.1);
            }
            50% {
                box-shadow: 0 0 30px rgba(255, 255, 255, 0.2);
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

        .hero-section {
            position: relative;
            background: linear-gradient(135deg, rgba(30, 58, 138, 0.8), rgba(59, 130, 246, 0.7)),
                        url('https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80') center/cover;
            background-attachment: fixed; /* Fixe le background pour éviter le déplacement */
            background-repeat: no-repeat;
            min-height: 100vh;
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
            animation: float 3s ease-in-out infinite;
        }

        .animate-pulse-soft {
            animation: pulse 4s ease-in-out infinite;
        }

        .animate-glow {
            animation: subtleGlow 3s ease-in-out infinite;
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

        .text-shadow {
            text-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        }

        .glass-effect {
            backdrop-filter: blur(15px);
            background: rgba(255, 255, 255, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .hover-lift {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        /* Particules flottantes améliorées */
        .floating-particle {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            pointer-events: none;
        }

        .particle-1 {
            width: 4px;
            height: 4px;
            top: 20%;
            left: 10%;
            animation: float 6s ease-in-out infinite;
        }

        .particle-2 {
            width: 6px;
            height: 6px;
            top: 30%;
            right: 15%;
            animation: float 4s ease-in-out infinite reverse;
            animation-delay: 1s;
        }

        .particle-3 {
            width: 3px;
            height: 3px;
            bottom: 40%;
            left: 20%;
            animation: float 5s ease-in-out infinite;
            animation-delay: 2s;
        }

        .particle-4 {
            width: 5px;
            height: 5px;
            bottom: 20%;
            right: 10%;
            animation: float 7s ease-in-out infinite reverse;
            animation-delay: 0.5s;
        }

        /* Responsive fixes */
        @media (max-width: 768px) {
            .hero-section {
                background-attachment: scroll; /* Mobile friendly */
            }
        }
    </style>
</head>
   <div class="bg-gray-50 py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center space-x-2 text-sm">
             <a href="{{ route('accueil') }}" class="text-custom-blue hover:text-blue-800">Accueil</a>
                <i class="fas fa-chevron-right text-gray-400"></i>
                <a href="{{ route('expertises.index') }}" class="text-custom-blue hover:text-blue-800">Nos Expertises</a>
                <i class="fas fa-chevron-right text-gray-400"></i>
                <span class="text-gray-600">Gestion comptable</span>
            </nav>
        </div>
    </div>

    <!-- Hero Section Optimisée -->
    <section class="hero-section flex items-center justify-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="hero-content text-center">
                <!-- Icône principale -->
                <div class="animate-fade-in-up opacity-0">
                    <div class="w-20 h-20 glass-effect rounded-xl flex items-center justify-center mx-auto mb-8 animate-float hover-lift">
                        <i class="fas fa-calculator text-white text-3xl drop-shadow-lg"></i>
                    </div>
                </div>
                
                <!-- Titre principal -->
                <div class="animate-fade-in-up animate-delay-200 opacity-0">
                    <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-6 text-shadow leading-tight">
                        Gestion comptable pour entreprises à 
                        <span class="text-orange-400 animate-pulse-soft">Marrakech</span>
                    </h1>
                </div>
                
                <!-- Sous-titre -->
                <div class="animate-fade-in-up animate-delay-400 opacity-0">
                    <p class="text-lg md:text-2xl text-white max-w-4xl mx-auto leading-relaxed text-shadow opacity-90 mb-8">
                        Expertise, fiscalité et conformité pour votre réussite. 
                        Nous vous accompagnons dans toutes vos démarches comptables et fiscales afin d'optimiser la gestion et la performance de votre entreprise.
                    </p>
                </div>

                <!-- Boutons d'action -->
                <div class="animate-fade-in-up animate-delay-600 opacity-0">
                    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                        <button class="glass-effect text-white px-8 py-4 rounded-full font-semibold text-lg hover-lift animate-glow group">
                            Découvrir nos services
                            <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                        </button>
                        <button class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-white hover:text-blue-900 transition-all duration-300 hover-lift">
                            Devis gratuit
                            <i class="fas fa-phone ml-2"></i>
                        </button>
                    </div>
                </div>

                <!-- Badges de confiance -->
                <div class="animate-fade-in-up animate-delay-800 opacity-0 mt-12">
                    <div class="flex flex-wrap justify-center gap-6 text-white/80">
                        <div class="flex items-center gap-2">
                            <i class="fas fa-shield-alt text-green-400"></i>
                            <span class="text-sm">+25 ans d'expertise</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fas fa-users text-blue-400"></i>
                            <span class="text-sm">500+ clients</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fas fa-clock text-orange-400"></i>
                            <span class="text-sm">Réponse 24h</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Particules flottantes optimisées -->
        <div class="floating-particle particle-1"></div>
        <div class="floating-particle particle-2"></div>
        <div class="floating-particle particle-3"></div>
        <div class="floating-particle particle-4"></div>
    </section>

    <!-- Section d'introduction -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <p class="text-lg text-gray-700 leading-relaxed">
                    En tant que <strong>cabinet comptable à Marrakech</strong>, nous proposons un service complet de 
                    <strong>gestion comptable</strong> pour les TPE, PME et professions libérales. Notre objectif est de vous 
                    accompagner dans la <strong>tenue de votre comptabilité</strong>, le respect de vos 
                    <strong>obligations fiscales et sociales</strong> et la réalisation de vos <strong>formalités juridiques</strong>.
                </p>
            </div>
        </div>
    </section>

<!-- Services Section -->
<section id="services" class="py-20">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-16 text-gray-800">Nos Services Comptables</h2>
            
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Service 1 -->
                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition-shadow">
                    <div class="flex items-center mb-6">
                        <div class="bg-blue-100 p-3 rounded-lg mr-4">
                            <svg class="w-8 h-8 text-custom-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800">Travaux de comptabilité</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Tenue et révision comptable à Marrakech</p>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            Saisie des pièces comptables (factures, relevés bancaires, autres justificatifs)
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            Tenue journalière de la comptabilité
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            Rapprochements bancaires et lettrage des comptes
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            Révision comptable périodique pour garantir la sincérité des comptes
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            Établissement du bilan, compte de produits et charges et annexes
                        </li>
                    </ul>
                </div>

                <!-- Service 2 -->
                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition-shadow">
                    <div class="flex items-center mb-6">
                        <div class="bg-green-100 p-3 rounded-lg mr-4">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800">Déclarations fiscales</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Accompagnement fiscal personnalisé au Maroc</p>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            Déclarations de TVA mensuelle ou trimestrielle
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            Calcul de l'impôt sur les sociétés
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            Paiement trimestriel des acomptes provisionnels
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            Déclaration mensuelle de l'Impôt sur le Revenu
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            Déclaration de la taxe professionnelle
                        </li>
                    </ul>
                </div>

                <!-- Service 3 -->
                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition-shadow">
                    <div class="flex items-center mb-6">
                        <div class="bg-purple-100 p-3 rounded-lg mr-4">
                            <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800">Déclarations sociales</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Gestion de la paie et des obligations sociales</p>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            Établissement des bulletins de paie
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            Déclaration mensuelle à la CNSS, AMO, CIMR
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            Immatriculation des salariés et gestion des affiliations
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            Suivi des congés, absences et attestations employeur
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            Assistance aux vérifications sociales
                        </li>
                    </ul>
                </div>

                <!-- Service 4 -->
                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition-shadow">
                    <div class="flex items-center mb-6">
                        <div class="bg-red-100 p-3 rounded-lg mr-4">
                            <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800">Travaux juridiques</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Assistance juridique courante des entreprises</p>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            Suivi et réalisation des obligations juridiques de l'entreprise
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            Conseil juridique en droit des sociétés
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            Domiciliation, constitution, transformation et liquidation des sociétés
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            Rédaction des procès-verbaux d'assemblées générales
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            Approbation annuelle des comptes et dépôt au greffe
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">
                Pourquoi choisir notre cabinet d'expertise comptable à Marrakech ?
            </h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="flex items-start space-x-4">
                    <div class="bg-blue-100 p-2 rounded-lg">
                        <svg class="w-6 h-6 text-custom-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-800 mb-2">Accompagnement personnalisé</h3>
                        <p class="text-gray-600">Adapté à votre secteur d'activité</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="bg-blue-100 p-2 rounded-lg">
                        <svg class="w-6 h-6 text-custom-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-800 mb-2">Outils numériques conformes</h3>
                        <p class="text-gray-600">À la législation fiscale marocaine</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="bg-blue-100 p-2 rounded-lg">
                        <svg class="w-6 h-6 text-custom-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-800 mb-2">Réactivité et transparence</h3>
                        <p class="text-gray-600">Confidentialité et transparence des honoraires</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="bg-blue-100 p-2 rounded-lg">
                        <svg class="w-6 h-6 text-custom-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-800 mb-2">Plus de 25 ans d'expertise</h3>
                        <p class="text-gray-600">Auprès de TPE, PME et professions libérales</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-20">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">FAQ : Gestion comptable à Marrakech</h2>
            <div class="space-y-6">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="font-semibold text-lg mb-3 text-gray-800">
                        Q1 : Pourquoi externaliser la gestion comptable de mon entreprise ?
                    </h3>
                    <p class="text-gray-600">
                        Externaliser votre comptabilité vous permet de gagner en temps, en sécurité et en conformité. 
                        Vous bénéficiez d'un accompagnement professionnel, d'un suivi rigoureux des obligations fiscales 
                        et sociales et d'un pilotage plus clair de votre activité.
                    </p>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="font-semibold text-lg mb-3 text-gray-800">
                        Q2 : Est-ce que vous proposez des packs mensuels pour la gestion comptable ?
                    </h3>
                    <p class="text-gray-600">
                        Oui, nous proposons des <strong>formules adaptées</strong> à chaque profil d'entreprise : TPE, PME 
                        ou professionnels indépendants. Nos packs incluent la tenue comptable, les déclarations fiscales, 
                        la paie et les travaux juridiques courants.
                    </p>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="font-semibold text-lg mb-3 text-gray-800">
                        Q3 : Êtes-vous spécialisé dans un secteur d'activité ?
                    </h3>
                    <p class="text-gray-600">
                        Nous travaillons avec une grande variété de secteurs : <strong>commerçants, professions libérales, 
                        start-ups, artisans, restauration, immobilier, import-export, etc.</strong> Notre approche est 
                        toujours personnalisée en fonction de votre activité.
                    </p>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="font-semibold text-lg mb-3 text-gray-800">
                        Q4 : Que comprend le service de gestion de la paie ?
                    </h3>
                    <p class="text-gray-600">
                        Le service paie inclut : établissement des bulletins, déclarations CNSS/AMO, affiliation des salariés, 
                        et génération des documents sociaux. Il peut être intégré dans nos packs comptables.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-20 bg-blue-900 text-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8">Contactez-nous pour un devis gratuit pour votre gestion comptable</h2>
            <p class="text-xl mb-8 text-blue-100">
                Vous êtes à la recherche d'un <strong>cabinet comptable à Marrakech</strong> pour externaliser tout ou 
                partie de votre gestion comptable ? Contactez-nous pour un <strong>diagnostic gratuit</strong> de votre 
                situation et une proposition sur mesure.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="tel:+212524000000" class="bg-orange-500 hover:bg-orange-600 text-white px-8 py-4 rounded-lg font-semibold transition-colors">
                    Appelez-nous
                </a>
                <a href="#" class="border-2 border-white hover:bg-white hover:text-blue-900 text-white px-8 py-4 rounded-lg font-semibold transition-colors">
                    Prendre rendez-vous
                </a>
            </div>
        </div>
    </div>
</section>
@endsection