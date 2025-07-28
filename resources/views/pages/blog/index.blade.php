@extends('layouts.app')

@section('title', 'Blog - Actualités Comptables, Juridiques et Fiscales au Maroc')
@section('meta_description', 'Découvrez nos articles et conseils d\'experts sur la comptabilité, le droit des sociétés et la fiscalité des entreprises au Maroc. Restez informé des dernières actualités.')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-indigo-900 via-indigo-800 to-indigo-900 text-white py-20">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">
                Blog & Actualités
            </h1>
            <p class="text-xl md:text-2xl mb-8 text-indigo-100">
                Conseils d'experts en comptabilité, juridique et fiscal
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#articles" class="bg-orange-500 hover:bg-orange-600 text-white px-8 py-4 rounded-lg font-semibold transition-colors">
                    Lire nos Articles
                </a>
                <a href="#newsletter" class="border-2 border-white hover:bg-white hover:text-indigo-900 text-white px-8 py-4 rounded-lg font-semibold transition-colors">
                    S'abonner à la Newsletter
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Categories Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Nos Thématiques</h2>
            <div class="grid md:grid-cols-4 gap-6">
                <a href="#" class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow text-center group">
                    <div class="bg-blue-100 p-4 rounded-full w-16 h-16 mx-auto mb-4 group-hover:bg-blue-200 transition-colors">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-800 group-hover:text-blue-600 transition-colors">Comptabilité</h3>
                </a>
                <a href="#" class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow text-center group">
                    <div class="bg-green-100 p-4 rounded-full w-16 h-16 mx-auto mb-4 group-hover:bg-green-200 transition-colors">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-800 group-hover:text-green-600 transition-colors">Fiscalité</h3>
                </a>
                <a href="#" class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow text-center group">
                    <div class="bg-purple-100 p-4 rounded-full w-16 h-16 mx-auto mb-4 group-hover:bg-purple-200 transition-colors">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-800 group-hover:text-purple-600 transition-colors">Juridique</h3>
                </a>
                <a href="#" class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow text-center group">
                    <div class="bg-orange-100 p-4 rounded-full w-16 h-16 mx-auto mb-4 group-hover:bg-orange-200 transition-colors">
                        <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-800 group-hover:text-orange-600 transition-colors">Entrepreneuriat</h3>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Featured Articles Section -->
<section id="articles" class="py-20">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-16 text-gray-800">Articles Récents</h2>
            
            <!-- Featured Article -->
            <div class="mb-16">
                <article class="bg-white rounded-2xl shadow-xl overflow-hidden">
                    <div class="md:flex">
                        <div class="md:w-1/2">
                            <div class="h-64 md:h-full bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center">
                                <svg class="w-24 h-24 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="md:w-1/2 p-8">
                            <div class="flex items-center mb-4">
                                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-semibold">Comptabilité</span>
                                <span class="text-gray-500 ml-4 text-sm">15 Janvier 2025</span>
                            </div>
                            <h3 class="text-2xl font-bold mb-4 text-gray-800">
                                Nouveautés Comptables 2025 : Ce qui Change pour les Entreprises Marocaines
                            </h3>
                            <p class="text-gray-600 mb-6 leading-relaxed">
                                Découvrez les principales évolutions comptables et fiscales qui impactent 
                                les entreprises marocaines en 2025. De nouvelles obligations, des 
                                simplifications administratives et des opportunités d'optimisation fiscale.
                            </p>
                            <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-semibold transition-colors inline-flex items-center">
                                Lire l'article
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Article Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Article 1 -->
                <article class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div class="h-48 bg-gradient-to-br from-green-500 to-green-600 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs font-semibold">Fiscalité</span>
                            <span class="text-gray-500 ml-3 text-sm">12 Janvier 2025</span>
                        </div>
                        <h3 class="text-lg font-bold mb-3 text-gray-800">
                            Guide Complet : Optimiser sa Déclaration TVA au Maroc
                        </h3>
                        <p class="text-gray-600 text-sm mb-4">
                            Conseils pratiques pour optimiser vos déclarations TVA et éviter 
                            les erreurs courantes qui peuvent coûter cher à votre entreprise.
                        </p>
                        <a href="#" class="text-green-600 hover:text-green-700 font-semibold text-sm">
                            Lire la suite →
                        </a>
                    </div>
                </article>

                <!-- Article 2 -->
                <article class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div class="h-48 bg-gradient-to-br from-purple-500 to-purple-600 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded-full text-xs font-semibold">Juridique</span>
                            <span class="text-gray-500 ml-3 text-sm">10 Janvier 2025</span>
                        </div>
                        <h3 class="text-lg font-bold mb-3 text-gray-800">
                            SARL vs SA : Quelle Forme Juridique Choisir en 2025 ?
                        </h3>
                        <p class="text-gray-600 text-sm mb-4">
                            Analyse comparative des différentes formes juridiques au Maroc 
                            pour vous aider à faire le bon choix selon votre projet.
                        </p>
                        <a href="#" class="text-purple-600 hover:text-purple-700 font-semibold text-sm">
                            Lire la suite →
                        </a>
                    </div>
                </article>

                <!-- Article 3 -->
                <article class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div class="h-48 bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="bg-orange-100 text-orange-800 px-2 py-1 rounded-full text-xs font-semibold">Entrepreneuriat</span>
                            <span class="text-gray-500 ml-3 text-sm">8 Janvier 2025</span>
                        </div>
                        <h3 class="text-lg font-bold mb-3 text-gray-800">
                            10 Erreurs à Éviter lors de la Création d'Entreprise
                        </h3>
                        <p class="text-gray-600 text-sm mb-4">
                            Les pièges les plus fréquents lors de la création d'entreprise 
                            au Maroc et comment les éviter pour partir du bon pied.
                        </p>
                        <a href="#" class="text-orange-600 hover:text-orange-700 font-semibold text-sm">
                            Lire la suite →
                        </a>
                    </div>
                </article>

                <!-- Article 4 -->
                <article class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div class="h-48 bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs font-semibold">Comptabilité</span>
                            <span class="text-gray-500 ml-3 text-sm">5 Janvier 2025</span>
                        </div>
                        <h3 class="text-lg font-bold mb-3 text-gray-800">
                            Digitalisation Comptable : Les Outils Indispensables
                        </h3>
                        <p class="text-gray-600 text-sm mb-4">
                            Comment digitaliser sa comptabilité et quels outils choisir 
                            pour optimiser la gestion financière de votre entreprise.
                        </p>
                        <a href="#" class="text-blue-600 hover:text-blue-700 font-semibold text-sm">
                            Lire la suite →
                        </a>
                    </div>
                </article>

                <!-- Article 5 -->
                <article class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div class="h-48 bg-gradient-to-br from-red-500 to-red-600 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="bg-red-100 text-red-800 px-2 py-1 rounded-full text-xs font-semibold">Contrôle Fiscal</span>
                            <span class="text-gray-500 ml-3 text-sm">3 Janvier 2025</span>
                        </div>
                        <h3 class="text-lg font-bold mb-3 text-gray-800">
                            Comment se Préparer à un Contrôle Fiscal ?
                        </h3>
                        <p class="text-gray-600 text-sm mb-4">
                            Guide pratique pour préparer votre entreprise à un contrôle fiscal 
                            et gérer sereinement cette situation délicate.
                        </p>
                        <a href="#" class="text-red-600 hover:text-red-700 font-semibold text-sm">
                            Lire la suite →
                        </a>
                    </div>
                </article>

                <!-- Article 6 -->
                <article class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div class="h-48 bg-gradient-to-br from-indigo-500 to-indigo-600 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="bg-indigo-100 text-indigo-800 px-2 py-1 rounded-full text-xs font-semibold">Financement</span>
                            <span class="text-gray-500 ml-3 text-sm">1 Janvier 2025</span>
                        </div>
                        <h3 class="text-lg font-bold mb-3 text-gray-800">
                            Financement d'Entreprise : Nouvelles Opportunités 2025
                        </h3>
                        <p class="text-gray-600 text-sm mb-4">
                            Panorama des dispositifs de financement disponibles pour 
                            les entreprises marocaines et comment en bénéficier.
                        </p>
                        <a href="#" class="text-indigo-600 hover:text-indigo-700 font-semibold text-sm">
                            Lire la suite →
                        </a>
                    </div>
                </article>
            </div>

            <!-- Load More Button -->
            <div class="text-center mt-12">
                <button class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-8 py-3 rounded-lg font-semibold transition-colors">
                    Charger plus d'articles
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section id="newsletter" class="py-20 bg-indigo-900 text-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8">Restez Informé</h2>
            <p class="text-xl mb-8 text-indigo-100">
                Recevez nos derniers articles et conseils d'experts directement dans votre boîte mail
            </p>
            <div class="max-w-md mx-auto">
                <form class="flex flex-col sm:flex-row gap-4">
                    <input 
                        type="email" 
                        placeholder="Votre adresse email" 
                        class="flex-1 px-4 py-3 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-orange-500"
                        required
                    >
                    <button 
                        type="submit"
                        class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-lg font-semibold transition-colors"
                    >
                        S'abonner
                    </button>
                </form>
                <p class="text-sm text-indigo-200 mt-4">
                    Pas de spam, désinscription possible à tout moment
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Resources Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-16 text-gray-800">Ressources Utiles</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-lg text-center">
                    <div class="bg-blue-100 p-4 rounded-full w-16 h-16 mx-auto mb-6 flex items-center justify-center">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10.5v6m3-3H9m4.06-7.19l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Guides Pratiques</h3>
                    <p class="text-gray-600 mb-6">
                        Téléchargez nos guides complets sur la création d'entreprise, 
                        la comptabilité et la fiscalité.
                    </p>
                    <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-semibold transition-colors">
                        Télécharger
                    </a>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg text-center">
                    <div class="bg-green-100 p-4 rounded-full w-16 h-16 mx-auto mb-6 flex items-center justify-center">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Check-lists</h3>
                    <p class="text-gray-600 mb-6">
                        Des check-lists pratiques pour ne rien oublier dans vos 
                        démarches administratives et comptables.
                    </p>
                    <a href="#" class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-lg font-semibold transition-colors">
                        Accéder
                    </a>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg text-center">
                    <div class="bg-purple-100 p-4 rounded-full w-16 h-16 mx-auto mb-6 flex items-center justify-center">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">FAQ Complète</h3>
                    <p class="text-gray-600 mb-6">
                        Trouvez rapidement les réponses aux questions les plus 
                        fréquentes sur nos services et la législation.
                    </p>
                    <a href="#" class="bg-purple-600 hover:bg-purple-700 text-white px-6 py-2 rounded-lg font-semibold transition-colors">
                        Consulter
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection