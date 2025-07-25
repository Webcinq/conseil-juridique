@extends('layouts.app')

@section('title', 'Gestion de Comptabilité à Marrakech - Missions Comptables pour les entreprises')
@section('meta-description', 'Gestion complète de votre comptabilité à Marrakech : Tenue et révision comptable, bilans, déclarations fiscales et sociales. Un accompagnement personnalisé pour entrepreneurs.')
@section('keywords', 'cabinet comptable marrakech, gestion comptabilité, déclarations fiscales, expert comptable, tenue comptabilité')

@section('content')
    <!-- Breadcrumb -->
    <div class="bg-gray-50 py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="{{ route('accueil') }}" class="text-blue-600 hover:text-blue-800">Accueil</a>
                <i class="fas fa-chevron-right text-gray-400"></i>
                <a href="{{ route('expertises.index') }}" class="text-blue-600 hover:text-blue-800">Nos Expertises</a>
                <i class="fas fa-chevron-right text-gray-400"></i>
                <span class="text-gray-600">Gestion Comptable</span>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="w-20 h-20 bg-blue-100 rounded-xl flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-calculator text-blue-600 text-3xl"></i>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Gestion Comptable pour Entreprises à Marrakech
                </h1>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                    En tant que <strong>cabinet comptable à Marrakech</strong>, nous proposons un service complet de 
                    <strong>gestion comptable</strong> pour les TPE, PME et professions libérales. Notre objectif est de vous 
                    accompagner dans la <strong>tenue de votre comptabilité</strong>, le respect de vos 
                    <strong>obligations fiscales et sociales</strong> et la réalisation de vos <strong>formalités juridiques</strong>.
                </p>
            </div>
        </div>
    </section>

    <!-- Services Comptables -->
    <section class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
                <!-- Image -->
                <div class="order-2 lg:order-1">
                    <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Gestion comptable cabinet Marrakech" 
                         class="rounded-xl shadow-lg w-full h-96 object-cover">
                </div>
                
                <!-- Contenu -->
                <div class="order-1 lg:order-2">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">
                        <i class="fas fa-file-alt text-blue-600 mr-3"></i>
                        1. Travaux de Comptabilité : Tenue et révision comptable à Marrakech
                    </h2>
                    <p class="text-gray-600 mb-6">
                        Notre cabinet prend en charge l'ensemble des <strong>travaux comptables</strong> indispensables à la bonne gestion de votre activité :
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mr-3 mt-1 text-lg"></i>
                            <span class="text-gray-700"><strong>Saisie des pièces comptables</strong> (factures, relevés bancaires, autres justificatifs)</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mr-3 mt-1 text-lg"></i>
                            <span class="text-gray-700"><strong>Tenue journalière de la comptabilité</strong></span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mr-3 mt-1 text-lg"></i>
                            <span class="text-gray-700"><strong>Rapprochements bancaires</strong> et lettrage des comptes</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mr-3 mt-1 text-lg"></i>
                            <span class="text-gray-700"><strong>Révision comptable périodique</strong> pour garantir la sincérité des comptes</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mr-3 mt-1 text-lg"></i>
                            <span class="text-gray-700"><strong>Établissement du bilan</strong>, compte de produits et charges et annexes</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Déclarations Fiscales -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">
                        <i class="fas fa-receipt text-purple-600 mr-3"></i>
                        2. Déclarations Fiscales : Accompagnement fiscal personnalisé au Maroc
                    </h2>
                    <p class="text-gray-600 mb-6">
                        Nous assurons l'établissement et la télédéclaration de toutes vos <strong>obligations fiscales</strong> 
                        dans le respect de la législation fiscale :
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <i class="fas fa-arrow-right text-blue-500 mr-2 mt-1"></i>
                                <span class="text-gray-700">Déclarations de TVA mensuelle ou trimestrielle</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-arrow-right text-blue-500 mr-2 mt-1"></i>
                                <span class="text-gray-700">Calcul de l'impôt sur les sociétés</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-arrow-right text-blue-500 mr-2 mt-1"></i>
                                <span class="text-gray-700">Paiement trimestriel des acomptes provisionnels</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-arrow-right text-blue-500 mr-2 mt-1"></i>
                                <span class="text-gray-700">Déclaration mensuelle de l'Impôt sur le Revenu</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-arrow-right text-blue-500 mr-2 mt-1"></i>
                                <span class="text-gray-700">Déclaration de la taxe sur les produits des actions</span>
                            </li>
                        </ul>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <i class="fas fa-arrow-right text-blue-500 mr-2 mt-1"></i>
                                <span class="text-gray-700">Déclaration de l'État des clients et des honoraires</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-arrow-right text-blue-500 mr-2 mt-1"></i>
                                <span class="text-gray-700">Déclaration des droits de timbres</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-arrow-right text-blue-500 mr-2 mt-1"></i>
                                <span class="text-gray-700">Déclaration de la RAS des revenus fonciers</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-arrow-right text-blue-500 mr-2 mt-1"></i>
                                <span class="text-gray-700">Déclaration des délais de paiement</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-arrow-right text-blue-500 mr-2 mt-1"></i>
                                <span class="text-gray-700">Déclaration de la taxe professionnelle</span>
                            </li>
                        </ul>
                    </div>
                </div>