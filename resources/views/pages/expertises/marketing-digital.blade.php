@extends('layouts.app')

@section('title', 'Stratégie & Marketing Digital à Marrakech - Solutions Web & SEO')
@section('meta-description', 'Services marketing digital complets : création de sites web, référencement SEO/SEA, copywriting. Développez votre présence en ligne avec nos experts digitaux.')
@section('keywords', 'marketing digital marrakech, création site web, SEO, SEA, copywriting, stratégie digitale')

@section('content')
    <!-- Breadcrumb -->
    <div class="bg-gray-50 py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="{{ route('accueil') }}" class="text-blue-600 hover:text-blue-800">Accueil</a>
                <i class="fas fa-chevron-right text-gray-400"></i>
                <a href="{{ route('expertises.index') }}" class="text-blue-600 hover:text-blue-800">Nos Expertises</a>
                <i class="fas fa-chevron-right text-gray-400"></i>
                <span class="text-gray-600">Stratégie & Marketing Digital</span>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="w-20 h-20 bg-indigo-100 rounded-xl flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-chart-line text-indigo-600 text-3xl"></i>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Stratégie & Marketing Digital : Solutions Digitales pour Développer Votre Présence en Ligne
                </h1>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                    Accélérez votre croissance digitale avec nos solutions marketing complètes. De la création de site web au référencement, 
                    en passant par la stratégie de contenu, nous vous accompagnons dans votre transformation digitale.
                </p>
            </div>
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
                            <i class="fas fa-mobile-alt text-blue-600 text-xl"></i>
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
                        <i class="fas fa-code text-blue-600 text-2xl"></i>
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
                            <span class="text-2xl font-bold text-blue-600">+340%</span>
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
                            <span class="text-2xl font-bold text-blue-600">+200%</span>
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
                            <span class="text-2xl font-bold text-blue-600">+120%</span>
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
                            <span class="text-4xl font-bold text-blue-600">À partir de</span>
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
                            <span class="text-4xl font-bold text-blue-600">À partir de</span>
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