@extends('layouts.app')

@section('title', 'Nos Expertises - Global Gestion Cabinet Comptable Marrakech')
@section('meta-description', 'Découvrez nos 6 pôles d\'expertise : gestion comptable, conseil juridique, conseil fiscal, création d\'entreprise, RH et marketing digital à Marrakech.')

@section('content')
    <!-- Breadcrumb -->
    <div class="bg-gray-50 py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="{{ route('accueil') }}" class="text-blue-600 hover:text-blue-800">Accueil</a>
                <i class="fas fa-chevron-right text-gray-400"></i>
                <span class="text-gray-600">Nos Expertises</span>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="w-20 h-20 bg-blue-100 rounded-xl flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-cogs text-blue-600 text-3xl"></i>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Nos Expertises</h1>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto">
                    6 pôles de conseil pour vous accompagner à chaque étape de votre développement entrepreneurial. 
                    Une expertise complète au service de votre réussite.
                </p>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="bg-gray-50 py-20">
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
                        <a href="{{ route('gestion-comptable') }}" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-800 transition-colors group-hover:text-blue-700">
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
                        <a href="{{ route('conseil-juridique') }}" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-800 transition-colors group-hover:text-blue-700">
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
                        <a href="{{ route('conseil-fiscal') }}" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-800 transition-colors group-hover:text-blue-700">
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
                        <a href="{{ route('entrepreneuriat') }}" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-800 transition-colors group-hover:text-blue-700">
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
                        <a href="{{ route('recrutement-rh') }}" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-800 transition-colors group-hover:text-blue-700">
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
                        <a href="{{ route('marketing-digital') }}" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-800 transition-colors group-hover:text-blue-700">
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
                        <i class="fas fa-award text-blue-600 text-2xl"></i>
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