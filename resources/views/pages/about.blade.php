@extends('layouts.app')

@section('title', 'À Propos - Cabinet d\'Expertise Comptable et Juridique à Marrakech')
@section('meta_description', 'Découvrez notre cabinet d\'expertise comptable et juridique à Marrakech. Plus de 25 ans d\'expérience au service des entreprises, TPE, PME et professions libérales.')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-white py-20">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">
                À Propos de Notre Cabinet
            </h1>
            <p class="text-xl md:text-2xl mb-8 text-gray-100">
                Plus de 25 ans d'expertise au service de votre réussite
            </p>
        </div>
    </div>
</section>

<!-- Notre Histoire -->
<section class="py-20">
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
<section class="py-20 bg-gray-50">
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