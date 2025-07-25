@extends('layouts.app')

@section('title', 'GlobaleG - Master Programming Skills')

@section('content')
    <!-- Navigation -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <div class="w-10 h-10 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg flex items-center justify-center">
                            <span class="text-white font-bold text-xl">G</span>
                        </div>
                        <span class="ml-3 text-xl font-bold text-gray-900">GlobaleG</span>
                    </div>
                </div>
                
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <a href="#courses" class="text-gray-900 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors">Cours</a>
                        <a href="#about" class="text-gray-600 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors">À propos</a>
                        <a href="#pricing" class="text-gray-600 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors">Prix</a>
                        <a href="#contact" class="text-gray-600 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors">Contact</a>
                    </div>
                </div>
                
                <div class="flex items-center space-x-4">
                    <a href="{{ route('login') }}" class="text-gray-600 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors">
                        Connexion
                    </a>
                    <a href="{{ route('register') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-blue-700 transition-colors">
                        S'inscrire
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Banner -->
    <section class="relative bg-gradient-to-r from-blue-900 via-blue-700 to-purple-600 overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-20"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 leading-tight">
                    Maîtrisez les <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-orange-500">Compétences</span>
                    <br>de Programmation
                </h1>
                <p class="text-xl text-gray-200 mb-8 max-w-3xl mx-auto">
                    Apprenez auprès d'experts de l'industrie avec des projets pratiques, des leçons interactives et des applications du monde réel.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#courses" class="bg-white text-blue-700 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-100 transition-all transform hover:scale-105">
                        Parcourir les Cours
                    </a>
                    <button class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white hover:text-blue-700 transition-all">
                        Voir la Démo
                    </button>
                </div>
            </div>
        </div>
        <!-- Floating Elements -->
        <div class="absolute top-20 left-10 w-20 h-20 bg-yellow-400 rounded-full opacity-20 animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-16 h-16 bg-pink-400 rounded-full opacity-20 animate-pulse delay-1000"></div>
        <div class="absolute top-1/2 left-20 w-12 h-12 bg-green-400 rounded-full opacity-20 animate-pulse delay-500"></div>
    </section>

    <!-- Stats Banner -->
    <section class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="transform hover:scale-105 transition-transform">
                    <div class="text-4xl font-bold text-blue-600 mb-2">50K+</div>
                    <div class="text-gray-600">Étudiants</div>
                </div>
                <div class="transform hover:scale-105 transition-transform">
                    <div class="text-4xl font-bold text-blue-600 mb-2">100+</div>
                    <div class="text-gray-600">Cours</div>
                </div>
                <div class="transform hover:scale-105 transition-transform">
                    <div class="text-4xl font-bold text-blue-600 mb-2">95%</div>
                    <div class="text-gray-600">Taux de Réussite</div>
                </div>
                <div class="transform hover:scale-105 transition-transform">
                    <div class="text-4xl font-bold text-blue-600 mb-2">24/7</div>
                    <div class="text-gray-600">Support</div>
                </div>
            </div>
        </div>
    </section>

    <section id="courses" class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Cours Populaires</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Découvrez nos cours les plus populaires conçus par des experts de l'industrie
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Course Card 1: JavaScript -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="relative">
                        <div class="h-48 bg-gradient-to-br from-yellow-400 to-orange-500 flex items-center justify-center">
                            <div class="text-white text-6xl font-bold">JS</div>
                        </div>
                        <div class="absolute top-4 right-4 bg-white rounded-full px-3 py-1 text-sm font-semibold text-gray-800">
                            Bestseller
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">JavaScript Fondamentaux</h3>
                        <p class="text-gray-600 mb-4">Maîtrisez les bases de la programmation JavaScript avec des projets pratiques et des exemples concrets.</p>
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center space-x-2">
                                <div class="flex text-yellow-400">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                </div>
                                <span class="text-sm text-gray-600">4.8 (2,340)</span>
                            </div>
                            <div class="text-right">
                                <span class="text-2xl font-bold text-blue-600">89€</span>
                                <span class="text-gray-500 line-through ml-2">129€</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between text-sm text-gray-600 mb-4">
                            <span>12 leçons</span>
                            <span>8 heures</span>
                            <span>Débutant</span>
                        </div>
                        <button class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                            S'inscrire Maintenant
                        </button>
                    </div>
                </div>

                <!-- Course Card 2: Python -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="relative">
                        <div class="h-48 bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center">
                            <div class="text-white text-6xl font-bold">PY</div>
                        </div>
                        <div class="absolute top-4 right-4 bg-green-500 text-white rounded-full px-3 py-1 text-sm font-semibold">
                            Nouveau
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Python pour Débutants</h3>
                        <p class="text-gray-600 mb-4">Commencez votre parcours de programmation avec Python. Apprenez la syntaxe, les structures de données et créez des projets réels.</p>
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center space-x-2">
                                <div class="flex text-yellow-400">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                </div>
                                <span class="text-sm text-gray-600">4.9 (1,890)</span>
                            </div>
                            <div class="text-right">
                                <span class="text-2xl font-bold text-blue-600">79€</span>
                                <span class="text-gray-500 line-through ml-2">119€</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between text-sm text-gray-600 mb-4">
                            <span>15 leçons</span>
                            <span>10 heures</span>
                            <span>Débutant</span>
                        </div>
                        <button class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                            S'inscrire Maintenant
                        </button>
                    </div>
                </div>

                <!-- Course Card 3: React -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="relative">
                        <div class="h-48 bg-gradient-to-br from-green-500 to-teal-600 flex items-center justify-center">
                            <div class="text-white text-6xl font-bold">⚛️</div>
                        </div>
                        <div class="absolute top-4 right-4 bg-orange-500 text-white rounded-full px-3 py-1 text-sm font-semibold">
                            Populaire
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Développement React</h3>
                        <p class="text-gray-600 mb-4">Créez des applications web modernes avec React. Apprenez les composants, hooks et la gestion d'état.</p>
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center space-x-2">
                                <div class="flex text-yellow-400">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                </div>
                                <span class="text-sm text-gray-600">4.7 (3,120)</span>
                            </div>
                            <div class="text-right">
                                <span class="text-2xl font-bold text-blue-600">129€</span>
                                <span class="text-gray-500 line-through ml-2">179€</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between text-sm text-gray-600 mb-4">
                            <span>18 leçons</span>
                            <span>12 heures</span>
                            <span>Intermédiaire</span>
                        </div>
                        <button class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                            S'inscrire Maintenant
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center mb-4">
                        <div class="w-8 h-8 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg flex items-center justify-center">
                            <span class="text-white font-bold">G</span>
                        </div>
                        <span class="ml-2 text-lg font-bold">GlobaleG</span>
                    </div>
                    <p class="text-gray-400 mb-4">Autonomiser les développeurs du monde entier avec une éducation de qualité et des compétences pratiques.</p>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Liens Rapides</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Accueil</a></li>
                        <li><a href="#courses" class="text-gray-400 hover:text-white transition-colors">Cours</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">À propos</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Ressources</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Blog</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Centre d'aide</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Politique de confidentialité</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Conditions d'utilisation</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact</h3>
                    <p class="text-gray-400 mb-2">Email: contact@globaleg.com</p>
                </div>
            </div>
            
            <div class="text-center mt-8 border-t border-gray-800 pt-4">
                <p class="text-sm text-gray-500">© 2023 GlobaleG. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
@endsection