@extends('layouts.app')

@section('title', 'Conseil Juridique')

@section('content')
    <!-- Navigation -->
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Gestion - Cabinet d'Expertise Comptable, Juridique et Fiscal à Marrakech</title>
    <meta name="description" content="Cabinet comptable à Marrakech. Services en comptabilité, fiscalité et conseil juridique pour les entreprises et les particuliers.">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #1e40af 0%, #7c3aed 100%);
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }
        .animate-fade-in {
            animation: fadeIn 1s ease-in;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .hero-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.1'%3E%3Ccircle cx='30' cy='30' r='4'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
    </style>
</head>
<body class="font-sans">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <div class="w-10 h-10 gradient-bg rounded-lg flex items-center justify-center">
                            <i class="fas fa-balance-scale text-white text-xl"></i>
                        </div>
                        <span class="ml-3 text-xl font-bold text-gray-900">Global Gestion</span>
                    </div>
                </div>
                
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <a href="#accueil" class="text-custom-blue hover:text-blue-800 px-3 py-2 text-sm font-medium transition-colors">Accueil</a>
                        <div class="relative group">
                            <a href="#expertises" class="text-gray-700 hover:text-custom-blue px-3 py-2 text-sm font-medium transition-colors cursor-pointer">
                                Nos Expertises <i class="fas fa-chevron-down ml-1"></i>
                            </a>
                            <div class="absolute left-0 mt-2 w-64 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                                <div class="py-2">
                                    <a href="#gestion-comptable" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Gestion Comptable</a>
                                    <a href="#conseil-juridique" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Conseil Juridique</a>
                                    <a href="#conseil-fiscal" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Conseil Fiscal</a>
                                    <a href="#entrepreneuriat" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Conseil en Entrepreneuriat</a>
                                    <a href="#rh" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Recrutement & Management RH</a>
                                    <a href="#marketing" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Marketing Digital</a>
                                </div>
                            </div>
                        </div>
                        <a href="#about" class="text-gray-700 hover:text-custom-blue px-3 py-2 text-sm font-medium transition-colors">À propos</a>
                        <a href="#blog" class="text-gray-700 hover:text-custom-blue px-3 py-2 text-sm font-medium transition-colors">Blog</a>
                        <a href="#contact" class="text-gray-700 hover:text-custom-blue px-3 py-2 text-sm font-medium transition-colors">Contact</a>
                    </div>
                </div>
                
                <div class="flex items-center space-x-4">
                    <a href="#contact" class="btn-custom-primary">
                        Prendre RDV
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="accueil" class="gradient-bg hero-pattern relative overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-28">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 leading-tight animate-fade-in">
                    Bienvenue chez <span class="text-yellow-300">Global Gestion</span><br>
                    Cabinet d'expertise comptable, juridique et fiscal
                </h1>
                <p class="text-xl text-gray-200 mb-8 max-w-4xl mx-auto animate-fade-in">
                    Spécialisé dans le conseil et l'accompagnement des entreprises à Marrakech. 
                    Nous vous proposons un service global en comptabilité, fiscalité, conseil juridique et social, 
                    conseil en entrepreneuriat et conseil en stratégie et marketing digital.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center animate-fade-in">
                    <a href="#expertises" class="bg-white text-blue-700 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-100 transition-all transform hover:scale-105">
                        Découvrir nos services
                    </a>
                    <a href="#contact" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white hover:text-blue-700 transition-all">
                        Prendre rendez-vous
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Floating Elements -->
        <div class="absolute top-20 left-10 w-20 h-20 bg-yellow-400 rounded-full opacity-20 animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-16 h-16 bg-green-400 rounded-full opacity-20 animate-pulse delay-1000"></div>
        <div class="absolute top-1/2 right-20 w-12 h-12 bg-blue-300 rounded-full opacity-20 animate-pulse delay-500"></div>
    </section>

    <!-- Services Overview -->
    <section id="expertises" class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Nos Expertises</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    6 pôles de conseil pour vous accompagner à chaque étape de votre développement
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Gestion Comptable -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <div class="p-8">
                        <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
                            <i class="fas fa-calculator text-custom-blue text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Gestion Comptable</h3>
                        <p class="text-gray-600 mb-6">Tenue de comptabilité, déclarations fiscales et sociales, formalités juridiques courantes.</p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Tenue de comptabilité
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Déclarations fiscales
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Déclarations sociales
                            </li>
                        </ul>
                        <a href="#gestion-comptable" class="text-custom-blue font-semibold hover:text-blue-800 transition-colors">
                            En savoir plus <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Conseil Juridique -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <div class="p-8">
                        <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
                            <i class="fas fa-gavel text-purple-600 text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Conseil Juridique</h3>
                        <p class="text-gray-600 mb-6">Constitution de sociétés, modifications statutaires, médiation et arbitrage.</p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Constitution de sociétés
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
                        <a href="#conseil-juridique" class="text-custom-blue font-semibold hover:text-blue-800 transition-colors">
                            En savoir plus <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Conseil Fiscal -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <div class="p-8">
                        <div class="w-16 h-16 bg-green-100 rounded-lg flex items-center justify-center mb-6">
                            <i class="fas fa-file-invoice-dollar text-green-600 text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Conseil Fiscal</h3>
                        <p class="text-gray-600 mb-6">Assistance au contrôle fiscal, gestion du contentieux fiscal, optimisation fiscale.</p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Assistance contrôle fiscal
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Gestion contentieux fiscal
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Optimisation fiscale
                            </li>
                        </ul>
                        <a href="#conseil-fiscal" class="text-custom-blue font-semibold hover:text-blue-800 transition-colors">
                            En savoir plus <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Conseil en Entrepreneuriat -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <div class="p-8">
                        <div class="w-16 h-16 bg-yellow-100 rounded-lg flex items-center justify-center mb-6">
                            <i class="fas fa-lightbulb text-yellow-600 text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Conseil en Entrepreneuriat</h3>
                        <p class="text-gray-600 mb-6">Création d'entreprise, étude de faisabilité, élaboration de business plan.</p>
                        <ul class="space-y-2 mb-6">
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
                                Business Plan
                            </li>
                        </ul>
                        <a href="#entrepreneuriat" class="text-custom-blue font-semibold hover:text-blue-800 transition-colors">
                            En savoir plus <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- RH -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <div class="p-8">
                        <div class="w-16 h-16 bg-red-100 rounded-lg flex items-center justify-center mb-6">
                            <i class="fas fa-users text-red-600 text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Recrutement & Management RH</h3>
                        <p class="text-gray-600 mb-6">Définition de poste, aide au recrutement, diagnostic RH et climat social.</p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Définition de poste
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Aide au recrutement
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Diagnostic RH
                            </li>
                        </ul>
                        <a href="#rh" class="text-custom-blue font-semibold hover:text-blue-800 transition-colors">
                            En savoir plus <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Marketing Digital -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <div class="p-8">
                        <div class="w-16 h-16 bg-indigo-100 rounded-lg flex items-center justify-center mb-6">
                            <i class="fas fa-chart-line text-indigo-600 text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Stratégie & Marketing Digital</h3>
                        <p class="text-gray-600 mb-6">Création de sites web, référencement SEO/SEA, copywriting professionnel.</p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Création de sites web
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Référencement SEO/SEA
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Copywriting
                            </li>
                        </ul>
                        <a href="#marketing" class="text-custom-blue font-semibold hover:text-blue-800 transition-colors">
                            En savoir plus <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Page Gestion Comptable -->
    <section id="gestion-comptable" class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Gestion Comptable pour Entreprises à Marrakech</h2>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto">
                    En tant que cabinet comptable à Marrakech, nous proposons un service complet de gestion comptable pour les TPE, PME et professions libérales.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
                <div>
                    <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Gestion comptable" class="rounded-lg shadow-lg">
                </div>
                <div class="space-y-8">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">
                            <i class="fas fa-file-alt text-custom-blue mr-3"></i>
                            Travaux de Comptabilité
                        </h3>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span>Saisie des pièces comptables (factures, relevés bancaires, autres justificatifs)</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span>Tenue journalière de la comptabilité</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span>Rapprochements bancaires et lettrage des comptes</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span>Établissement du bilan, compte de produits et charges</span>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">
                            <i class="fas fa-receipt text-purple-600 mr-3"></i>
                            Déclarations Fiscales
                        </h3>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span>Déclarations de TVA mensuelle ou trimestrielle</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span>Calcul de l'impôt sur les sociétés</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span>Déclaration mensuelle de l'Impôt sur le Revenu</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span>Déclaration de la taxe professionnelle</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div class="space-y-8">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">
                            <i class="fas fa-users text-red-600 mr-3"></i>
                            Déclarations Sociales
                        </h3>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span>Établissement des bulletins de paie</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span>Déclaration mensuelle à la CNSS, AMO, CIMR</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span>Immatriculation des salariés</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span>Assistance aux vérifications sociales</span>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">
                            <i class="fas fa-balance-scale text-yellow-600 mr-3"></i>
                            Travaux Juridiques
                        </h3>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span>Suivi des obligations juridiques de l'entreprise</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span>Domiciliation, constitution, transformation de sociétés</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span>Rédaction des procès-verbaux d'assemblées</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span>Rédaction des contrats de travail</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div>
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Expert comptable" class="rounded-lg shadow-lg">
                </div>
            </div>

            <!-- FAQ Section -->
            <div class="mt-20">
                <h3 class="text-3xl font-bold text-gray-900 mb-8 text-center">Questions Fréquentes</h3>
                <div class="space-y-6">
                    <div class="bg-gray-50 rounded-lg p-6">
                        <h4 class="text-lg font-semibold text-gray-900 mb-3">Pourquoi externaliser la gestion comptable de mon entreprise ?</h4>
                        <p class="text-gray-600">Externaliser votre comptabilité vous permet de gagner en temps, en sécurité et en conformité. Vous bénéficiez d'un accompagnement professionnel et d'un pilotage plus clair de votre activité.</p>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-6">
                        <h4 class="text-lg font-semibold text-gray-900 mb-3">Proposez-vous des packs mensuels pour la gestion comptable ?</h4>
                        <p class="text-gray-600">Oui, nous proposons des formules adaptées à chaque profil d'entreprise : TPE, PME ou professionnels indépendants. Nos packs incluent la tenue comptable, les déclarations fiscales, la paie et les travaux juridiques courants.</p>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-6">
                        <h4 class="text-lg font-semibold text-gray-900 mb-3">Êtes-vous spécialisé dans un secteur d'activité ?</h4>
                        <p class="text-gray-600">Nous travaillons avec une grande variété de secteurs : commerçants, professions libérales, start-ups, artisans, restauration, immobilier, import-export, etc. Notre approche est toujours personnalisée.</p>
                    </div>
                </div>
            </div>

            <!-- CTA -->
            <div class="mt-16 text-center">
                <div class="bg-blue-600 text-white rounded-lg p-8">
                    <h3 class="text-2xl font-bold mb-4">Contactez-nous pour un devis gratuit</h3>
                    <p class="text-lg mb-6">Vous êtes à la recherche d'un cabinet comptable à Marrakech ? Contactez-nous pour un diagnostic gratuit de votre situation.</p>
                    <a href="#contact" class="bg-white text-custom-blue px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                        Prendre rendez-vous
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Page Conseil Juridique -->
    <section id="conseil-juridique" class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Services Juridiques à Marrakech</h2>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto">
                    Notre cabinet d'expertise juridique accompagne les dirigeants et entrepreneurs dans toutes leurs démarches juridiques.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-16">
                <!-- Constitution de Sociétés -->
                <div class="bg-white rounded-xl shadow-lg p-8 card-hover">
                    <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-building text-custom-blue text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Constitution de Sociétés</h3>
                    <p class="text-gray-600 mb-6">Accompagnement complet pour la création de votre société (SARL, SARL AU, SCI, SCP, SNC, etc.).</p>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-start text-sm">
                            <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                            <span>Choix de la forme juridique</span>
                        </li>
                        <li class="flex items-start text-sm">
                            <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                            <span>Rédaction des statuts</span>
                        </li>
                        <li class="flex items-start text-sm">
                            <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                            <span>Démarches administratives</span>
                        </li>
                        <li class="flex items-start text-sm">
                            <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                            <span>Immatriculation RC</span>
                        </li>
                    </ul>
                    <a href="#constitution" class="text-custom-blue font-semibold hover:text-blue-800 transition-colors">
                        Guide création SARL <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>

                <!-- Modifications Statutaires -->
                <div class="bg-white rounded-xl shadow-lg p-8 card-hover">
                    <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-edit text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Modifications Statutaires</h3>
                    <p class="text-gray-600 mb-6">Toutes les démarches de mise à jour juridique de vos statuts.</p>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-start text-sm">
                            <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                            <span>Changement dénomination sociale</span>
                        </li>
                        <li class="flex items-start text-sm">
                            <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                            <span>Modification objet social</span>
                        </li>
                        <li class="flex items-start text-sm">
                            <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                            <span>Transfert siège social</span>
                        </li>
                        <li class="flex items-start text-sm">
                            <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                            <span>Augmentation capital</span>
                        </li>
                    </ul>
                    <a href="#modifications" class="text-custom-blue font-semibold hover:text-blue-800 transition-colors">
                        En savoir plus <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>

                <!-- Médiation & Arbitrage -->
                <div class="bg-white rounded-xl shadow-lg p-8 card-hover">
                    <div class="w-16 h-16 bg-green-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-handshake text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Médiation & Arbitrage</h3>
                    <p class="text-gray-600 mb-6">Résolution amiable des conflits pour préserver vos relations d'affaires.</p>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-start text-sm">
                            <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                            <span>Médiation d'entreprise</span>
                        </li>
                        <li class="flex items-start text-sm">
                            <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                            <span>Arbitrage commercial</span>
                        </li>
                        <li class="flex items-start text-sm">
                            <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                            <span>Gestion des litiges</span>
                        </li>
                        <li class="flex items-start text-sm">
                            <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                            <span>Procédures amiables</span>
                        </li>
                    </ul>
                    <a href="#mediation" class="text-custom-blue font-semibold hover:text-blue-800 transition-colors">
                        En savoir plus <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>

            <!-- Guide Constitution SARL -->
            <div id="constitution" class="bg-white rounded-xl shadow-lg p-8 mb-16">
                <div class="text-center mb-8">
                    <h3 class="text-3xl font-bold text-gray-900 mb-4">Guide pour Constituer une SARL au Maroc</h3>
                    <p class="text-lg text-gray-600">Les 9 étapes essentielles pour créer votre société</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-lg p-6">
                        <div class="w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center mb-4 font-bold text-lg">1</div>
                        <h4 class="text-lg font-semibold text-gray-900 mb-3">Certificat Négatif</h4>
                        <p class="text-sm text-gray-600">Réservation du nom de votre société à l'OMPIC. Document valable 90 jours.</p>
                    </div>

                    <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-lg p-6">
                        <div class="w-12 h-12 bg-purple-600 text-white rounded-full flex items-center justify-center mb-4 font-bold text-lg">2</div>
                        <h4 class="text-lg font-semibold text-gray-900 mb-3">Siège Social</h4>
                        <p class="text-sm text-gray-600">Définition de l'adresse avec contrat de bail commercial ou domiciliation.</p>
                    </div>

                    <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-lg p-6">
                        <div class="w-12 h-12 bg-green-600 text-white rounded-full flex items-center justify-center mb-4 font-bold text-lg">3</div>
                        <h4 class="text-lg font-semibold text-gray-900 mb-3">Rédaction Statuts</h4>
                        <p class="text-sm text-gray-600">Rédaction des statuts par acte authentique ou sous seing privé.</p>
                    </div>

                    <div class="bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-lg p-6">
                        <div class="w-12 h-12 bg-yellow-600 text-white rounded-full flex items-center justify-center mb-4 font-bold text-lg">4</div>
                        <h4 class="text-lg font-semibold text-gray-900 mb-3">Capital Social</h4>
                        <p class="text-sm text-gray-600">Libération du capital minimum 10,000 MAD et blocage si > 100,000 MAD.</p>
                    </div>

                    <div class="bg-gradient-to-br from-red-50 to-red-100 rounded-lg p-6">
                        <div class="w-12 h-12 bg-red-600 text-white rounded-full flex items-center justify-center mb-4 font-bold text-lg">5</div>
                        <h4 class="text-lg font-semibold text-gray-900 mb-3">Enregistrement</h4>
                        <p class="text-sm text-gray-600">Enregistrement des statuts et autres actes auprès de l'administration.</p>
                    </div>

                    <div class="bg-gradient-to-br from-indigo-50 to-indigo-100 rounded-lg p-6">
                        <div class="w-12 h-12 bg-indigo-600 text-white rounded-full flex items-center justify-center mb-4 font-bold text-lg">6</div>
                        <h4 class="text-lg font-semibold text-gray-900 mb-3">Taxe Professionnelle</h4>
                        <p class="text-sm text-gray-600">Inscription aux rôles et obtention de l'identifiant fiscal (IF).</p>
                    </div>

                    <div class="bg-gradient-to-br from-pink-50 to-pink-100 rounded-lg p-6">
                        <div class="w-12 h-12 bg-pink-600 text-white rounded-full flex items-center justify-center mb-4 font-bold text-lg">7</div>
                        <h4 class="text-lg font-semibold text-gray-900 mb-3">Registre Commerce</h4>
                        <p class="text-sm text-gray-600">Immatriculation au RC auprès du tribunal de commerce.</p>
                    </div>

                    <div class="bg-gradient-to-br from-teal-50 to-teal-100 rounded-lg p-6">
                        <div class="w-12 h-12 bg-teal-600 text-white rounded-full flex items-center justify-center mb-4 font-bold text-lg">8</div>
                        <h4 class="text-lg font-semibold text-gray-900 mb-3">Affiliation CNSS</h4>
                        <p class="text-sm text-gray-600">Affiliation obligatoire à la Caisse Nationale de Sécurité Sociale.</p>
                    </div>

                    <div class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-lg p-6">
                        <div class="w-12 h-12 bg-orange-600 text-white rounded-full flex items-center justify-center mb-4 font-bold text-lg">9</div>
                        <h4 class="text-lg font-semibold text-gray-900 mb-3">Publications</h4>
                        <p class="text-sm text-gray-600">Publication dans journal d'annonces légales et Bulletin Officiel.</p>
                    </div>
                </div>
            </div>

            <!-- FAQ Juridique -->
            <div class="bg-white rounded-xl shadow-lg p-8">
                <h3 class="text-3xl font-bold text-gray-900 mb-8 text-center">Questions Fréquentes - Conseil Juridique</h3>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div class="space-y-6">
                        <div>
                            <h4 class="text-lg font-semibold text-gray-900 mb-3">Combien de temps prend la constitution d'une SARL ?</h4>
                            <p class="text-gray-600">En moyenne, la création d'une SARL peut prendre entre 3 et 10 jours ouvrables, selon la réactivité de l'administration et la complétude du dossier.</p>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-gray-900 mb-3">Y a-t-il un capital minimum pour créer une SARL ?</h4>
                            <p class="text-gray-600">Le capital minimum est de 10 000 MAD, mais il est recommandé de constituer un capital cohérent avec l'activité.</p>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-gray-900 mb-3">Peut-on créer une SARL avec un seul associé ?</h4>
                            <p class="text-gray-600">Oui, c'est possible. On parle alors de SARL à associé unique (SARL AU).</p>
                        </div>
                    </div>
                    <div class="space-y-6">
                        <div>
                            <h4 class="text-lg font-semibold text-gray-900 mb-3">Quelle est la différence entre médiation et arbitrage ?</h4>
                            <p class="text-gray-600"><strong>Médiation :</strong> processus amiable où un tiers neutre aide les parties à trouver une solution consensuelle.<br><strong>Arbitrage :</strong> procédure plus formelle où un arbitre tranche le litige.</p>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-gray-900 mb-3">Faut-il publier un avis légal en cas de modification statutaire ?</h4>
                            <p class="text-gray-600">Oui, toute modification des statuts doit faire l'objet d'une modification au Registre de Commerce et d'un avis publié dans un journal d'annonces légales et au Bulletin Officiel.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Page Conseil Fiscal -->
    <section id="conseil-fiscal" class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Conseil Fiscal à Marrakech</h2>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto">
                    Notre cabinet d'expertise fiscale vous accompagne dans la gestion de votre fiscalité d'entreprise avec un service de conseil fiscal sur mesure.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-16">
                <!-- Assistance Contrôle Fiscal -->
                <div class="bg-gradient-to-br from-red-50 to-red-100 rounded-xl p-8 card-hover">
                    <div class="w-16 h-16 bg-red-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-shield-alt text-red-600 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Assistance au Contrôle Fiscal</h3>
                    <p class="text-gray-600 mb-6">Accompagnement complet lors d'un contrôle fiscal avec défense de vos intérêts.</p>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-start text-sm">
                            <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                            <span>Préparation au contrôle</span>
                        </li>
                        <li class="flex items-start text-sm">
                            <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                            <span>Assistance pendant le contrôle</span>
                        </li>
                        <li class="flex items-start text-sm">
                            <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                            <span>Réponse aux notifications</span>
                        </li>
                    </ul>
                    <a href="#controle-fiscal" class="text-red-600 font-semibold hover:text-red-800 transition-colors">
                        En savoir plus <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>

                <!-- Contentieux Fiscal -->
                <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl p-8 card-hover">
                    <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-gavel text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Gestion du Contentieux Fiscal</h3>
                    <p class="text-gray-600 mb-6">Défense de vos intérêts en cas de désaccord avec l'administration fiscale.</p>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-start text-sm">
                            <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                            <span>Recours gracieux</span>
                        </li>
                        <li class="flex items-start text-sm">
                            <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                            <span>Recours hiérarchique</span>
                        </li>
                        <li class="flex items-start text-sm">
                            <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                            <span>Représentation tribunal</span>
                        </li>
                    </ul>
                    <a href="#contentieux" class="text-purple-600 font-semibold hover:text-purple-800 transition-colors">
                        En savoir plus <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>

                <!-- Déclarations Fiscales -->
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-8 card-hover">
                    <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-file-invoice text-custom-blue text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Déclarations Fiscales</h3>
                    <p class="text-gray-600 mb-6">Suivi permanent pour optimiser votre fiscalité et rester en conformité.</p>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-start text-sm">
                            <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                            <span>TVA, IR, IS</span>
                        </li>
                        <li class="flex items-start text-sm">
                            <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                            <span>Optimisation fiscale</span>
                        </li>
                        <li class="flex items-start text-sm">
                            <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                            <span>Conformité légale</span>
                        </li>
                    </ul>
                    <a href="#declarations" class="text-custom-blue font-semibold hover:text-blue-800 transition-colors">
                        En savoir plus <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>

            <!-- Section Contrôle Fiscal Détaillée -->
            <div id="controle-fiscal" class="bg-red-50 rounded-xl p-8 mb-16">
                <div class="text-center mb-8">
                    <h3 class="text-3xl font-bold text-gray-900 mb-4">Face au Contrôle Fiscal : Des Experts pour Vous Défendre</h3>
                    <p class="text-lg text-gray-600">Vous venez de recevoir un avis de vérification fiscale ? Contactez-nous et bénéficiez de notre expertise.</p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <div>
                        <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Contrôle fiscal" class="rounded-lg shadow-lg">
                    </div>
                    <div>
                        <h4 class="text-2xl font-bold text-gray-900 mb-6">Nos Services en Matière de Contrôle Fiscal</h4>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-red-600 text-white rounded-full flex items-center justify-center mr-4 mt-1">
                                    <i class="fas fa-check text-sm"></i>
                                </div>
                                <div>
                                    <h5 class="font-semibold text-gray-900">Préparation au contrôle fiscal</h5>
                                    <p class="text-gray-600 text-sm">Vérification des pièces comptables et mise en conformité</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-red-600 text-white rounded-full flex items-center justify-center mr-4 mt-1">
                                    <i class="fas fa-check text-sm"></i>
                                </div>
                                <div>
                                    <h5 class="font-semibold text-gray-900">Assistance pendant le contrôle</h5>
                                    <p class="text-gray-600 text-sm">Accompagnement lors des échanges avec l'inspecteur des impôts</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-red-600 text-white rounded-full flex items-center justify-center mr-4 mt-1">
                                    <i class="fas fa-check text-sm"></i>
                                </div>
                                <div>
                                    <h5 class="font-semibold text-gray-900">Gestion du redressement fiscal</h5>
                                    <p class="text-gray-600 text-sm">Analyse et réponse à la proposition de rectification</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-red-600 text-white rounded-full flex items-center justify-center mr-4 mt-1">
                                    <i class="fas fa-check text-sm"></i>
                                </div>
                                <div>
                                    <h5 class="font-semibold text-gray-900">Représentation en cas de litige</h5>
                                    <p class="text-gray-600 text-sm">Assistance devant l'administration et préparation des recours</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Fiscal -->
            <div class="bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-xl p-8 text-center">
                <h3 class="text-2xl font-bold mb-4">Besoin d'une assistance lors d'un contrôle fiscal ?</h3>
                <p class="text-lg mb-6">Vous avez reçu un avis de vérification ? Prenez contact dès aujourd'hui avec notre cabinet à Marrakech.</p>
                <a href="#contact" class="bg-white text-custom-blue px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                    Contactez-nous immédiatement
                </a>
            </div>
        </div>
    </section>

    <!-- Page Conseil en Entrepreneuriat -->
    <section id="entrepreneuriat" class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Conseil en Entrepreneuriat</h2>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto">
                    Un accompagnement d'expert pour concrétiser votre projet entrepreneurial de l'idée initiale jusqu'à la constitution de votre société.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
                <div>
                    <img src="https://images.unsplash.com/photo-1559136555-9303baea8ebd?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Entrepreneuriat" class="rounded-lg shadow-lg">
                </div>
                <div class="space-y-8">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">
                            <i class="fas fa-rocket text-yellow-600 mr-3"></i>
                            Création d'Entreprise
                        </h3>
                        <p class="text-gray-600 mb-4">Nous vous assistons à chaque étape de la création de votre entreprise pour sécuriser votre lancement et poser les bases d'un projet viable.</p>
                        <a href="#creation-entreprise" class="text-custom-blue font-semibold hover:text-blue-800 transition-colors">
                            En savoir plus sur la création d'entreprise <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">
                            <i class="fas fa-search text-green-600 mr-3"></i>
                            Étude de Faisabilité
                        </h3>
                        <p class="text-gray-600 mb-4">Analyse approfondie de la viabilité de votre projet entrepreneurial avant d'investir vos ressources.</p>
                        <ul class="space-y-2">
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Présentation du projet
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Analyse de marché et stratégie commerciale
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Prévisionnel financier complet
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Section Création d'Entreprise Détaillée -->
            <div id="creation-entreprise" class="bg-white rounded-xl shadow-lg p-8 mb-16">
                <div class="text-center mb-8">
                    <h3 class="text-3xl font-bold text-gray-900 mb-4">Créez une Entreprise à Marrakech</h3>
                    <p class="text-lg text-gray-600">Une assistance complète pour réussir votre projet entrepreneurial</p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <div>
                        <h4 class="text-2xl font-bold text-gray-900 mb-6">Notre Accompagnement Étape par Étape</h4>
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center mr-4 font-bold">1</div>
                                <div>
                                    <h5 class="font-semibold text-gray-900 mb-2">Accompagnement sur mesure</h5>
                                    <p class="text-gray-600 text-sm">Suivi personnalisé dès la phase d'étude et de préparation selon votre profil et vos compétences.</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="w-10 h-10 bg-green-600 text-white rounded-full flex items-center justify-center mr-4 font-bold">2</div>
                                <div>
                                    <h5 class="font-semibold text-gray-900 mb-2">Étude de faisabilité</h5>
                                    <p class="text-gray-600 text-sm">Évaluation complète de la viabilité de votre projet avec analyse du secteur d'activité.</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="w-10 h-10 bg-purple-600 text-white rounded-full flex items-center justify-center mr-4 font-bold">3</div>
                                <div>
                                    <h5 class="font-semibold text-gray-900 mb-2">Élaboration du business plan</h5>
                                    <p class="text-gray-600 text-sm">Business plan structuré et conçu pour séduire vos partenaires financiers.</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="w-10 h-10 bg-yellow-600 text-white rounded-full flex items-center justify-center mr-4 font-bold">4</div>
                                <div>
                                    <h5 class="font-semibold text-gray-900 mb-2">Recherche de financements</h5>
                                    <p class="text-gray-600 text-sm">Accompagnement dans la constitution des dossiers de financement.</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="w-10 h-10 bg-red-600 text-white rounded-full flex items-center justify-center mr-4 font-bold">5</div>
                                <div>
                                    <h5 class="font-semibold text-gray-900 mb-2">Formation et accompagnement</h5>
                                    <p class="text-gray-600 text-sm">Formations pratiques en gestion, marketing, finance et ressources humaines.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Équipe entrepreneuriat" class="rounded-lg shadow-lg">
                    </div>
                </div>
            </div>

            <!-- Pourquoi Nous Choisir -->
            <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-xl p-8">
                <h3 class="text-3xl font-bold text-gray-900 mb-8 text-center">Pourquoi Choisir Notre Cabinet ?</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-ear-listen text-custom-blue text-2xl"></i>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Un interlocuteur à votre écoute</h4>
                        <p class="text-gray-600 text-sm">Nous comprenons vos besoins spécifiques et adaptons notre accompagnement à votre rythme.</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-certificate text-green-600 text-2xl"></i>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Une expertise reconnue</h4>
                        <p class="text-gray-600 text-sm">Notre expérience en accompagnement des créateurs vous garantit un service fiable et conforme.</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-handshake text-purple-600 text-2xl"></i>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Un soutien pour votre réussite</h4>
                        <p class="text-gray-600 text-sm">Au-delà de la création, nous vous aidons à pérenniser votre entreprise avec un suivi régulier.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section À Propos -->
    <section id="about" class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">À Propos du Cabinet</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Plus de 25 ans d'expertise au service des entreprises marocaines
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
                <div>
                    <h3 class="text-3xl font-bold text-gray-900 mb-6">Notre Histoire & Nos Valeurs</h3>
                    <div class="space-y-4 text-gray-600">
                        <p>Implanté à Marrakech, Global Gestion met à votre disposition son expertise pour vous aider à développer votre activité, rationnaliser vos décisions et optimiser votre situation juridique et fiscale.</p>
                        <p>Que vous soyez jeune créateur, chef d'entreprise ou professionnel indépendant, nous vous accompagnons à chaque étape de votre développement vers un modèle conciliant la performance, la prospérité et la durabilité.</p>
                        <p>Notre approche personnalisée et notre expertise multidisciplinaire font de nous un partenaire de confiance pour votre réussite.</p>
                    </div>
                    
                    <div class="mt-8">
                        <h4 class="text-xl font-semibold text-gray-900 mb-4">Nos Engagements</h4>
                        <ul class="space-y-3">
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                <span class="text-gray-600">Accompagnement personnalisé adapté à votre secteur</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                <span class="text-gray-600">Outils numériques conformes à la législation</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                <span class="text-gray-600">Réactivité, confidentialité et transparence</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                <span class="text-gray-600">Plus de 25 ans d'expertise</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div>
                    <img src="https://images.unsplash.com/photo-1577412647305-991150c7d163?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Cabinet Global Gestion" class="rounded-lg shadow-lg">
                </div>
            </div>

            <!-- Notre Équipe -->
            <div class="mb-16">
                <h3 class="text-3xl font-bold text-gray-900 mb-8 text-center">Notre Équipe</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Expert comptable" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover">
                        <h4 class="text-xl font-semibold text-gray-900 mb-2">Ahmed Bennani</h4>
                        <p class="text-custom-blue font-medium mb-2">Expert-Comptable</p>
                        <p class="text-gray-600 text-sm">Spécialisé en fiscalité des entreprises et optimisation comptable</p>
                    </div>
                    <div class="text-center">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Conseil juridique" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover">
                        <h4 class="text-xl font-semibold text-gray-900 mb-2">Fatima El Amrani</h4>
                        <p class="text-purple-600 font-medium mb-2">Conseillère Juridique</p>
                        <p class="text-gray-600 text-sm">Experte en droit des sociétés et constitution d'entreprises</p>
                    </div>
                    <div class="text-center">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Conseiller fiscal" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover">
                        <h4 class="text-xl font-semibold text-gray-900 mb-2">Youssef Alaoui</h4>
                        <p class="text-green-600 font-medium mb-2">Conseiller Fiscal</p>
                        <p class="text-gray-600 text-sm">Spécialiste en contentieux fiscal et contrôles fiscaux</p>
                    </div>
                </div>
            </div>

            <!-- Nos Outils & Technologies -->
            <div class="bg-gray-50 rounded-xl p-8">
                <h3 class="text-3xl font-bold text-gray-900 mb-8 text-center">Nos Outils & Technologies</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-cloud text-custom-blue text-2xl"></i>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Solutions Cloud</h4>
                        <p class="text-gray-600 text-sm">Accès sécurisé à vos données</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-green-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-shield-alt text-green-600 text-2xl"></i>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Sécurité SSL</h4>
                        <p class="text-gray-600 text-sm">Protection de vos données</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-mobile-alt text-purple-600 text-2xl"></i>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Applications Mobiles</h4>
                        <p class="text-gray-600 text-sm">Suivi en temps réel</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-yellow-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-robot text-yellow-600 text-2xl"></i>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Automatisation</h4>
                        <p class="text-gray-600 text-sm">Processus optimisés</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Blog -->
    <section id="blog" class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Actualités & Conseils</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Restez informés des dernières actualités juridiques, fiscales et comptables
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Article 1 -->
                <article class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Loi de finances 2024" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Comptabilité</span>
                            <span class="text-gray-500 text-sm ml-3">15 Déc 2023</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Nouveautés de la Loi de Finances 2024</h3>
                        <p class="text-gray-600 mb-4">Découvrez les principales mesures fiscales qui impacteront votre entreprise en 2024...</p>
                        <a href="#" class="text-custom-blue font-semibold hover:text-blue-800 transition-colors">
                            Lire la suite <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </article>

                <!-- Article 2 -->
                <article class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Constitution SARL" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded">Juridique</span>
                            <span class="text-gray-500 text-sm ml-3">10 Déc 2023</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Guide Complet : Créer sa SARL au Maroc</h3>
                        <p class="text-gray-600 mb-4">Toutes les étapes détaillées pour constituer votre société en toute sérénité...</p>
                        <a href="#" class="text-custom-blue font-semibold hover:text-blue-800 transition-colors">
                            Lire la suite <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </article>

                <!-- Article 3 -->
                <article class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <img src="https://images.unsplash.com/photo-1559136555-9303baea8ebd?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Business plan" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded">Création d'entreprise</span>
                            <span class="text-gray-500 text-sm ml-3">5 Déc 2023</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Comment Rédiger un Business Plan Efficace</h3>
                        <p class="text-gray-600 mb-4">Les clés pour construire un business plan qui séduira vos investisseurs...</p>
                        <a href="#" class="text-custom-blue font-semibold hover:text-blue-800 transition-colors">
                            Lire la suite <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </article>

                <!-- Article 4 -->
                <article class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Contrôle fiscal" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <span class="bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded">Fiscalité</span>
                            <span class="text-gray-500 text-sm ml-3">1 Déc 2023</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Préparer son Entreprise au Contrôle Fiscal</h3>
                        <p class="text-gray-600 mb-4">Conseils pratiques pour anticiper et bien gérer un contrôle fiscal...</p>
                        <a href="#" class="text-custom-blue font-semibold hover:text-blue-800 transition-colors">
                            Lire la suite <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </article>

                <!-- Article 5 -->
                <article class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="RH" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded">RH</span>
                            <span class="text-gray-500 text-sm ml-3">28 Nov 2023</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Optimiser la Gestion RH de votre PME</h3>
                        <p class="text-gray-600 mb-4">Stratégies pour améliorer le recrutement et la gestion des talents...</p>
                        <a href="#" class="text-custom-blue font-semibold hover:text-blue-800 transition-colors">
                            Lire la suite <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </article>

                <!-- Article 6 -->
                <article class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Marketing digital" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">Marketing Digital</span>
                            <span class="text-gray-500 text-sm ml-3">25 Nov 2023</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Développer sa Présence Digitale en 2024</h3>
                        <p class="text-gray-600 mb-4">Tendances et stratégies marketing digital pour les entreprises marocaines...</p>
                        <a href="#" class="text-custom-blue font-semibold hover:text-blue-800 transition-colors">
                            Lire la suite <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </article>
            </div>

            <!-- CTA Blog -->
            <div class="text-center mt-12">
                <a href="#" class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                    Voir tous les articles
                </a>
            </div>
        </div>
    </section>

    <!-- Section Contact -->
    <section id="contact" class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Contactez-nous</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Prêt à démarrer votre projet ? Contactez notre équipe d'experts pour un accompagnement personnalisé.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Formulaire de Contact -->
                <div class="bg-gray-50 rounded-xl p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Prendre Rendez-vous</h3>
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="prenom" class="block text-sm font-medium text-gray-700 mb-2">Prénom *</label>
                                <input type="text" id="prenom" name="prenom" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            </div>
                            <div>
                                <label for="nom" class="block text-sm font-medium text-gray-700 mb-2">Nom *</label>
                                <input type="text" id="nom" name="nom" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            </div>
                        </div>
                        
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email *</label>
                            <input type="email" id="email" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        
                        <div>
                            <label for="telephone" class="block text-sm font-medium text-gray-700 mb-2">Téléphone</label>
                            <input type="tel" id="telephone" name="telephone" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        
                        <div>
                            <label for="entreprise" class="block text-sm font-medium text-gray-700 mb-2">Entreprise</label>
                            <input type="text" id="entreprise" name="entreprise" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        
                        <div>
                            <label for="service" class="block text-sm font-medium text-gray-700 mb-2">Service demandé *</label>
                            <select id="service" name="service" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                <option value="">Sélectionnez un service</option>
                                <option value="gestion-comptable">Gestion Comptable</option>
                                <option value="conseil-juridique">Conseil Juridique</option>
                                <option value="conseil-fiscal">Conseil Fiscal</option>
                                <option value="creation-entreprise">Création d'Entreprise</option>
                                <option value="rh">Recrutement & RH</option>
                                <option value="marketing-digital">Marketing Digital</option>
                            </select>
                        </div>
                        
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message *</label>
                            <textarea id="message" name="message" rows="4" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Décrivez votre projet ou vos besoins..."></textarea>
                        </div>
                        
                        <button type="submit" class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                            Envoyer la demande
                        </button>
                    </form>
                </div>

                <!-- Informations de Contact -->
                <div class="space-y-8">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">Informations de Contact</h3>
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-map-marker-alt text-custom-blue text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Adresse</h4>
                                    <p class="text-gray-600">123 Avenue Mohammed V<br>Marrakech 40000, Maroc</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-phone text-green-600 text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Téléphone</h4>
                                    <p class="text-gray-600">+212 5 24 XX XX XX</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-envelope text-purple-600 text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Email</h4>
                                    <p class="text-gray-600">contact@global-gestion.ma</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-clock text-yellow-600 text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Horaires d'ouverture</h4>
                                    <p class="text-gray-600">
                                        Lundi - Vendredi: 9h00 - 18h00<br>
                                        Samedi: 9h00 - 13h00
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Téléchargements -->
                    <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-xl p-6">
                        <h4 class="text-xl font-bold text-gray-900 mb-4">Documents Utiles</h4>
                        <div class="space-y-3">
                            <a href="#" class="flex items-center p-3 bg-white rounded-lg hover:shadow-md transition-shadow">
                                <i class="fas fa-file-pdf text-red-500 text-xl mr-3"></i>
                                <div>
                                    <p class="font-medium text-gray-900">Plaquette du Cabinet</p>
                                    <p class="text-sm text-gray-600">Présentation complète de nos services</p>
                                </div>
                            </a>
                            <a href="#" class="flex items-center p-3 bg-white rounded-lg hover:shadow-md transition-shadow">
                                <i class="fas fa-file-alt text-blue-500 text-xl mr-3"></i>
                                <div>
                                    <p class="font-medium text-gray-900">Guide Création SARL</p>
                                    <p class="text-sm text-gray-600">Toutes les étapes détaillées</p>
                                </div>
                            </a>
                            <a href="#" class="flex items-center p-3 bg-white rounded-lg hover:shadow-md transition-shadow">
                                <i class="fas fa-calculator text-green-500 text-xl mr-3"></i>
                                <div>
                                    <p class="font-medium text-gray-900">Simulateur de Charges</p>
                                    <p class="text-sm text-gray-600">Estimez vos charges sociales</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Prise de RDV en ligne -->
                    <div class="bg-blue-600 text-white rounded-xl p-6">
                        <h4 class="text-xl font-bold mb-3">Prise de Rendez-vous en Ligne</h4>
                        <p class="mb-4">Planifiez votre consultation directement en ligne selon vos disponibilités.</p>
                        <button class="bg-white text-custom-blue px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            Réserver un créneau
                        </button>
                    </div>
                </div>
            </div>

            <!-- Carte Google Maps -->
            <div class="mt-16">
                <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">Plan d'Accès</h3>
                <div class="bg-gray-200 rounded-xl h-96 flex items-center justify-center">
                    <div class="text-center">
                        <i class="fas fa-map text-4xl text-gray-400 mb-4"></i>
                        <p class="text-gray-600">Carte Google Maps intégrée</p>
                        <p class="text-sm text-gray-500">Localisation : 123 Avenue Mohammed V, Marrakech</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Logo et Description -->
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center mb-6">
                        <div class="w-10 h-10 gradient-bg rounded-lg flex items-center justify-center">
                            <i class="fas fa-balance-scale text-white text-xl"></i>
                        </div>
                        <span class="ml-3 text-2xl font-bold">Global Gestion</span>
                    </div>
                    <p class="text-gray-400 mb-6 max-w-md">
                        Cabinet d'expertise comptable, juridique et fiscal à Marrakech. 
                        Votre partenaire de confiance pour accompagner le développement de votre entreprise.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-blue-600 transition-colors">
                            <i class="fab fa-facebook text-lg"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-blue-400 transition-colors">
                            <i class="fab fa-linkedin text-lg"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-blue-500 transition-colors">
                            <i class="fab fa-twitter text-lg"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-red-600 transition-colors">
                            <i class="fab fa-youtube text-lg"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Services -->
                <div>
                    <h3 class="text-lg font-semibold mb-6">Nos Services</h3>
                    <ul class="space-y-3">
                        <li><a href="#gestion-comptable" class="text-gray-400 hover:text-white transition-colors">Gestion Comptable</a></li>
                        <li><a href="#conseil-juridique" class="text-gray-400 hover:text-white transition-colors">Conseil Juridique</a></li>
                        <li><a href="#conseil-fiscal" class="text-gray-400 hover:text-white transition-colors">Conseil Fiscal</a></li>
                        <li><a href="#entrepreneuriat" class="text-gray-400 hover:text-white transition-colors">Création d'Entreprise</a></li>
                        <li><a href="#rh" class="text-gray-400 hover:text-white transition-colors">Recrutement & RH</a></li>
                        <li><a href="#marketing" class="text-gray-400 hover:text-white transition-colors">Marketing Digital</a></li>
                    </ul>
                </div>
                
                <!-- Liens Utiles -->
                <div>
                    <h3 class="text-lg font-semibold mb-6">Liens Utiles</h3>
                    <ul class="space-y-3">
                        <li><a href="#about" class="text-gray-400 hover:text-white transition-colors">À propos</a></li>
                        <li><a href="#blog" class="text-gray-400 hover:text-white transition-colors">Blog</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-white transition-colors">Contact</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">FAQ</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Témoignages</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Carrières</a></li>
                    </ul>
                </div>
            </div>
            
            <!-- Séparateur -->
            <div class="border-t border-gray-800 mt-12 pt-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Contact Info -->
                    <div>
                        <h4 class="text-sm font-semibold text-gray-300 uppercase tracking-wider mb-3">Contact</h4>
                        <div class="space-y-2 text-gray-400 text-sm">
                            <p><i class="fas fa-map-marker-alt mr-2"></i>123 Avenue Mohammed V, Marrakech</p>
                            <p><i class="fas fa-phone mr-2"></i>+212 5 24 XX XX XX</p>
                            <p><i class="fas fa-envelope mr-2"></i>contact@global-gestion.ma</p>
                        </div>
                    </div>
                    
                    <!-- Horaires -->
                    <div>
                        <h4 class="text-sm font-semibold text-gray-300 uppercase tracking-wider mb-3">Horaires</h4>
                        <div class="space-y-2 text-gray-400 text-sm">
                            <p>Lundi - Vendredi: 9h00 - 18h00</p>
                            <p>Samedi: 9h00 - 13h00</p>
                            <p>Dimanche: Fermé</p>
                        </div>
                    </div>
                    
                    <!-- Newsletter -->
                    <div>
                        <h4 class="text-sm font-semibold text-gray-300 uppercase tracking-wider mb-3">Newsletter</h4>
                        <p class="text-gray-400 text-sm mb-3">Recevez nos actualités juridiques et fiscales</p>
                        <div class="flex">
                            <input type="email" placeholder="Votre email" class="flex-1 px-3 py-2 bg-gray-800 border border-gray-700 rounded-l-lg text-white text-sm focus:outline-none focus:border-blue-500">
                            <button class="px-4 py-2 bg-blue-600 text-white rounded-r-lg hover:bg-blue-700 transition-colors">
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Copyright et Mentions Légales -->
            <div class="border-t border-gray-800 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center">
                <div class="text-center md:text-left">
                    <p class="text-sm text-gray-500">© 2023 Global Gestion. Tous droits réservés.</p>
                </div>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="text-sm text-gray-400 hover:text-white transition-colors">Mentions Légales</a>
                    <a href="#" class="text-sm text-gray-400 hover:text-white transition-colors">Politique de Confidentialité</a>
                    <a href="#" class="text-sm text-gray-400 hover:text-white transition-colors">CGV</a>
                    <a href="#" class="text-sm text-gray-400 hover:text-white transition-colors">Plan du Site</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bouton de retour en haut -->
    <button id="back-to-top" class="fixed bottom-8 right-8 w-12 h-12 bg-blue-600 text-white rounded-full shadow-lg hover:bg-blue-700 transition-all transform hover:scale-110 opacity-0 invisible">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Chat Widget -->
    <div id="chat-widget" class="fixed bottom-8 left-8 w-14 h-14 bg-green-500 text-white rounded-full shadow-lg cursor-pointer hover:bg-green-600 transition-all transform hover:scale-110 flex items-center justify-center">
        <i class="fas fa-comments text-xl"></i>
    </div>

    <!-- Scripts -->
    <script>
        // Navigation smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Back to top button
        const backToTopButton = document.getElementById('back-to-top');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.remove('opacity-0', 'invisible');
            } else {
                backToTopButton.classList.add('opacity-0', 'invisible');
            }
        });

        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Chat widget
        document.getElementById('chat-widget').addEventListener('click', () => {
            alert('Chat en ligne bientôt disponible!\nEn attendant, contactez-nous par téléphone ou email.');
        });

        // Form submission
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Merci pour votre message! Nous vous recontacterons dans les plus brefs délais.');
        });

        // Animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in');
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.card-hover, .bg-white, .bg-gray-50').forEach(el => {
            observer.observe(el);
        });

        // Mobile menu toggle (if needed)
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobile-menu');
            if (mobileMenu) {
                mobileMenu.classList.toggle('hidden');
            }
        }

        // Counter animation for stats
        function animateCounters() {
            const counters = document.querySelectorAll('.counter');
            counters.forEach(counter => {
                const target = parseInt(counter.getAttribute('data-target'));
                let count = 0;
                const increment = target / 100;
                
                const updateCounter = () => {
                    if (count < target) {
                        count += increment;
                        counter.textContent = Math.ceil(count);
                        setTimeout(updateCounter, 20);
                    } else {
                        counter.textContent = target;
                    }
                };
                
                updateCounter();
            });
        }

        // Trigger counter animation when in view
        const statsSection = document.querySelector('#expertises');
        if (statsSection) {
            const statsObserver = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateCounters();
                        statsObserver.unobserve(entry.target);
                    }
                });
            });
            
            statsObserver.observe(statsSection);
        }

        // Newsletter subscription
        function subscribeNewsletter() {
            const emailInput = document.querySelector('input[type="email"]');
            if (emailInput && emailInput.value) {
                alert('Merci pour votre inscription à notre newsletter!');
                emailInput.value = '';
            }
        }

        // FAQ Toggle (if implemented)
        function toggleFAQ(element) {
            const answer = element.nextElementSibling;
            const icon = element.querySelector('i');
            
            if (answer.style.display === 'block') {
                answer.style.display = 'none';
                icon.classList.remove('fa-chevron-up');
                icon.classList.add('fa-chevron-down');
            } else {
                answer.style.display = 'block';
                icon.classList.remove('fa-chevron-down');
                icon.classList.add('fa-chevron-up');
            }
        }

        // Search functionality (if implemented)
        function searchContent(query) {
            if (!query) return;
            
            const searchResults = [];
            const content = document.body.innerText.toLowerCase();
            
            if (content.includes(query.toLowerCase())) {
                // Highlight search results or navigate to relevant section
                console.log('Search results found for:', query);
            }
        }

        // Contact form validation
        function validateContactForm() {
            const form = document.querySelector('form');
            const requiredFields = form.querySelectorAll('[required]');
            let isValid = true;
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    field.classList.add('border-red-500');
                    isValid = false;
                } else {
                    field.classList.remove('border-red-500');
                }
            });
            
            return isValid;
        }

        // Initialize page
        document.addEventListener('DOMContentLoaded', function() {
            // Add any initialization code here
            console.log('Global Gestion website loaded successfully');
            
            // Set current year in footer
            const yearElement = document.querySelector('.text-gray-500');
            if (yearElement && yearElement.textContent.includes('2023')) {
                yearElement.textContent = yearElement.textContent.replace('2023', new Date().getFullYear());
            }
        });
    </script>
</body>
@endsection