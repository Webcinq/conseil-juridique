<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue de Cours - GlobaleG</title>
    @vite('resources/css/app.css')
    <style>
        .course-card {
            transition: all 0.3s ease;
            transform: translateY(0);
        }
        
        .course-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .progress-bar {
            background: linear-gradient(90deg, #10b981 0%, #059669 100%);
        }
        
        .category-badge {
            transition: all 0.2s ease;
        }
        
        .category-badge:hover {
            transform: scale(1.05);
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .filter-active {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">
    <!-- Header -->
    <header class="bg-white shadow-sm border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="w-8 h-8 bg-indigo-600 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="ml-4">
                        <h1 class="text-2xl font-bold text-gray-900">Catalogue de Cours</h1>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <input type="text" placeholder="Rechercher des cours..." class="w-64 pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                        <svg class="absolute left-3 top-2.5 h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="text-sm text-gray-600">{{ auth()->user()->name ?? 'Étudiant' }}</span>
                        <div class="w-8 h-8 bg-indigo-600 rounded-full flex items-center justify-center">
                            <span class="text-white text-sm font-medium">{{ strtoupper(substr(auth()->user()->name ?? 'E', 0, 1)) }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Section Statistiques -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-blue-100">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600">Total Cours</p>
                        <p class="text-2xl font-bold text-gray-900">247</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-green-100">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600">Terminés</p>
                        <p class="text-2xl font-bold text-gray-900">12</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-yellow-100">
                        <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600">En Cours</p>
                        <p class="text-2xl font-bold text-gray-900">8</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-purple-100">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600">Certificats</p>
                        <p class="text-2xl font-bold text-gray-900">9</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Filtres -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mb-8">
            <div class="flex flex-wrap items-center gap-4">
                <h3 class="text-lg font-medium text-gray-900">Filtrer par catégorie :</h3>
                <button class="filter-active px-4 py-2 rounded-full text-sm font-medium transition-all">Tous les Cours</button>
                <button class="category-badge px-4 py-2 rounded-full text-sm font-medium bg-gray-100 text-gray-700 hover:bg-gray-200">Développement Web</button>
                <button class="category-badge px-4 py-2 rounded-full text-sm font-medium bg-gray-100 text-gray-700 hover:bg-gray-200">Science des Données</button>
                <button class="category-badge px-4 py-2 rounded-full text-sm font-medium bg-gray-100 text-gray-700 hover:bg-gray-200">Design</button>
                <button class="category-badge px-4 py-2 rounded-full text-sm font-medium bg-gray-100 text-gray-700 hover:bg-gray-200">Marketing</button>
                <button class="category-badge px-4 py-2 rounded-full text-sm font-medium bg-gray-100 text-gray-700 hover:bg-gray-200">Business</button>
            </div>
        </div>

        <!-- Grille de Cours -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Carte Cours 1 -->
            <div class="course-card bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Cours React" class="w-full h-48 object-cover">
                    <div class="absolute top-4 left-4">
                        <span class="bg-blue-500 text-white px-3 py-1 rounded-full text-sm font-medium">Développement Web</span>
                    </div>
                    <div class="absolute top-4 right-4">
                        <button class="p-2 bg-white rounded-full shadow-sm hover:shadow-md transition-shadow">
                            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-2">
                        <div class="flex items-center space-x-1">
                            <span class="text-yellow-400">★</span>
                            <span class="text-sm text-gray-600">4.8 (1,234 avis)</span>
                        </div>
                        <span class="text-sm text-gray-500">12 heures</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Cours Complet React Developer</h3>
                    <p class="text-gray-600 mb-4">Maîtrisez React de débutant à avancé avec des projets pratiques et des applications du monde réel.</p>
                    <div class="flex items-center mb-4">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Instructeur" class="w-8 h-8 rounded-full mr-3">
                        <span class="text-sm text-gray-700">John Smith</span>
                    </div>
                    <div class="mb-4">
                        <div class="flex items-center justify-between text-sm text-gray-600 mb-1">
                            <span>Progression</span>
                            <span>75%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="progress-bar h-2 rounded-full" style="width: 75%"></div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-gray-900">89€</span>
                        <a href="{{ route('student.course', ['id' => 1]) }}" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors">
                            Continuer
                        </a>
                    </div>
                </div>
            </div>

            <!-- Carte Cours 2 -->
            <div class="course-card bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Cours Python" class="w-full h-48 object-cover">
                    <div class="absolute top-4 left-4">
                        <span class="bg-green-500 text-white px-3 py-1 rounded-full text-sm font-medium">Science des Données</span>
                    </div>
                    <div class="absolute top-4 right-4">
                        <button class="p-2 bg-white rounded-full shadow-sm hover:shadow-md transition-shadow">
                            <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-2">
                        <div class="flex items-center space-x-1">
                            <span class="text-yellow-400">★</span>
                            <span class="text-sm text-gray-600">4.9 (856 avis)</span>
                        </div>
                        <span class="text-sm text-gray-500">20 heures</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Python pour la Science des Données</h3>
                    <p class="text-gray-600 mb-4">Apprenez la programmation Python pour l'analyse de données, la visualisation et les applications d'apprentissage automatique.</p>
                    <div class="flex items-center mb-4">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b182?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Instructeur" class="w-8 h-8 rounded-full mr-3">
                        <span class="text-sm text-gray-700">Sarah Johnson</span>
                    </div>
                    <div class="mb-4">
                        <div class="flex items-center justify-between text-sm text-gray-600 mb-1">
                            <span>Progression</span>
                            <span>100%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="progress-bar h-2 rounded-full" style="width: 100%"></div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-gray-900">129€</span>
                        <button class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors">
                            <svg class="w-5 h-5 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Terminé
                        </button>
                    </div>
                </div>
            </div>

            <!-- Carte Cours 3 -->
            <div class="course-card bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1558655146-d09347e92766?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Cours Design" class="w-full h-48 object-cover">
                    <div class="absolute top-4 left-4">
                        <span class="bg-purple-500 text-white px-3 py-1 rounded-full text-sm font-medium">Design</span>
                    </div>
                    <div class="absolute top-4 right-4">
                        <button class="p-2 bg-white rounded-full shadow-sm hover:shadow-md transition-shadow">
                            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-2">
                        <div class="flex items-center space-x-1">
                            <span class="text-yellow-400">★</span>
                            <span class="text-sm text-gray-600">4.7 (642 avis)</span>
                        </div>
                        <span class="text-sm text-gray-500">8 heures</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Masterclass UI/UX Design</h3>
                    <p class="text-gray-600 mb-4">Maîtrisez les fondamentaux du design d'interface utilisateur et d'expérience utilisateur avec des projets pratiques.</p>
                    <div class="flex items-center mb-4">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Instructeur" class="w-8 h-8 rounded-full mr-3">
                        <span class="text-sm text-gray-700">Mike Chen</span>
                    </div>
                    <div class="mb-4">
                        <div class="flex items-center justify-between text-sm text-gray-600 mb-1">
                            <span>Pas commencé</span>
                            <span>0%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-gray-300 h-2 rounded-full" style="width: 0%"></div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-gray-900">79€</span>
                        <button class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors">Commencer le Cours</button>
                    </div>
                </div>
            </div>

            <!-- Carte Cours 4 -->
            <div class="course-card bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Cours Marketing" class="w-full h-48 object-cover">
                    <div class="absolute top-4 left-4">
                        <span class="bg-orange-500 text-white px-3 py-1 rounded-full text-sm font-medium">Marketing</span>
                    </div>
                    <div class="absolute top-4 right-4">
                        <button class="p-2 bg-white rounded-full shadow-sm hover:shadow-md transition-shadow">
                            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-2">
                        <div class="flex items-center space-x-1">
                            <span class="text-yellow-400">★</span>
                            <span class="text-sm text-gray-600">4.6 (423 avis)</span>
                        </div>
                        <span class="text-sm text-gray-500">15 heures</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Stratégie Marketing Digital</h3>
                    <p class="text-gray-600 mb-4">Apprenez les stratégies complètes de marketing digital incluant SEO, SEM, médias sociaux et analytics.</p>
                    <div class="flex items-center mb-4">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Instructeur" class="w-8 h-8 rounded-full mr-3">
                        <span class="text-sm text-gray-700">Emma Davis</span>
                    </div>
                    <div class="mb-4">
                        <div class="flex items-center justify-between text-sm text-gray-600 mb-1">
                            <span>Progression</span>
                            <span>35%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="progress-bar h-2 rounded-full" style="width: 35%"></div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-gray-900">99€</span>
                        <button class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors">Continuer</button>
                    </div>
                </div>
            </div>

            <!-- Carte Cours 5 -->
            <div class="course-card bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Cours Business" class="w-full h-48 object-cover">
                    <div class="absolute top-4 left-4">
                        <span class="bg-red-500 text-white px-3 py-1 rounded-full text-sm font-medium">Business</span>
                    </div>
                    <div class="absolute top-4 right-4">
                        <button class="p-2 bg-white rounded-full shadow-sm hover:shadow-md transition-shadow">
                            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-2">
                        <div class="flex items-center space-x-1">
                            <span class="text-yellow-400">★</span>
                            <span class="text-sm text-gray-600">4.8 (789 avis)</span>
                        </div>
                        <span class="text-sm text-gray-500">10 heures</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Essentiels de la Gestion de Projet</h3>
                    <p class="text-gray-600 mb-4">Maîtrisez les fondamentaux de la gestion de projet avec les méthodologies Agile et Scrum pour les équipes modernes.</p>
                    <div class="flex items-center mb-4">
                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Instructeur" class="w-8 h-8 rounded-full mr-3">
                        <span class="text-sm text-gray-700">David Wilson</span>
                    </div>
                    <div class="mb-4">
                        <div class="flex items-center justify-between text-sm text-gray-600 mb-1">
                            <span>Pas commencé</span>
                            <span>0%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-gray-300 h-2 rounded-full" style="width: 0%"></div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-gray-900">89€</span>
                        <button class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors">Commencer le Cours</button>
                    </div>
                </div>
            </div>

            <!-- Carte Cours 6 -->
            <div class="course-card bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1633356122544-f134324a6cee?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Cours JavaScript" class="w-full h-48 object-cover">
                    <div class="absolute top-4 left-4">
                        <span class="bg-yellow-500 text-white px-3 py-1 rounded-full text-sm font-medium">Développement Web</span>
                    </div>
                    <div class="absolute top-4 right-4">
                        <button class="p-2 bg-white rounded-full shadow-sm hover:shadow-md transition-shadow">
                            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-2">
                        <div class="flex items-center space-x-1">
                            <span class="text-yellow-400">★</span>
                            <span class="text-sm text-gray-600">4.9 (567 avis)</span>
                        </div>
                        <span class="text-sm text-gray-500">14 heures</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">JavaScript Avancé</h3>
                    <p class="text-gray-600 mb-4">Approfondissez vos connaissances JavaScript avec ES6+, programmation asynchrone, et patterns avancés.</p>
                    <div class="flex items-center mb-4">
                        <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Instructeur" class="w-8 h-8 rounded-full mr-3">
                        <span class="text-sm text-gray-700">Alex Rodriguez</span>
                    </div>
                    <div class="mb-4">
                        <div class="flex items-center justify-between text-sm text-gray-600 mb-1">
                            <span>Progression</span>
                            <span>62%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="progress-bar h-2 rounded-full" style="width: 62%"></div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-gray-900">119€</span>
                        <button class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors">Continuer</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="mt-12 flex items-center justify-between">
            <div class="text-sm text-gray-600">
                Affichage de <span class="font-medium">1</span> à <span class="font-medium">6</span> sur <span class="font-medium">247</span> cours
            </div>
            <nav class="flex items-center space-x-2">
                <button class="px-3 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 disabled:opacity-50" disabled>
                    Précédent
                </button>
                <button class="px-3 py-2 text-sm font-medium text-white bg-indigo-600 border border-indigo-600 rounded-lg">
                    1
                </button>
                <button class="px-3 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50">
                    2
                </button>
                <button class="px-3 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50">
                    3
                </button>
                <span class="px-3 py-2 text-sm font-medium text-gray-500">...</span>
                <button class="px-3 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50">
                    42
                </button>
                <button class="px-3 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50">
                    Suivant
                </button>
            </nav>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white shadow-sm border-t border-gray-200 mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center mb-4">
                        <div class="w-8 h-8 bg-indigo-600 rounded-lg flex items-center justify-center mr-3">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                        <span class="text-xl font-bold text-gray-900">GlobaleG</span>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Votre plateforme d'apprentissage en ligne pour maîtriser les compétences de demain. 
                        Apprenez à votre rythme avec nos experts.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-gray-600">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M20 10c0-5.523-4.477-10-10-10S0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.56V10h2.77l-.442 2.891h-2.328v6.987C16.343 19.128 20 14.991 20 10z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-600">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"></path>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-600">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-sm font-semibold text-gray-900 tracking-wider uppercase mb-4">Liens Rapides</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-600 hover:text-gray-900 transition-colors">Accueil</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-900 transition-colors">Tous les Cours</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-900 transition-colors">Mes Cours</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-900 transition-colors">Certificats</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-sm font-semibold text-gray-900 tracking-wider uppercase mb-4">Support</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-600 hover:text-gray-900 transition-colors">Centre d'aide</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-900 transition-colors">Nous Contacter</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-900 transition-colors">Politique de Confidentialité</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-900 transition-colors">Conditions d'Utilisation</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="mt-8 pt-8 border-t border-gray-200 flex items-center justify-between">
                <div class="text-gray-600 text-sm">
                    &copy; 2023 GlobaleG. Tous droits réservés.
                </div>
                <div class="flex items-center space-x-6">
                    <span class="text-sm text-gray-600">Langue:</span>
                    <select class="text-sm border-gray-300 rounded-md">
                        <option>Français</option>
                        <option>English</option>
                        <option>Español</option>
                    </select>
                </div>
            </div>
        </div>
    </footer>

    @vite('resources/js/app.js')

    <script>
        // JavaScript pour l'interactivité des filtres
        document.addEventListener('DOMContentLoaded', function() {
            // Gestion des filtres de catégorie
            const filterButtons = document.querySelectorAll('.category-badge, .filter-active');
            
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Retirer la classe active de tous les boutons
                    filterButtons.forEach(btn => {
                        btn.classList.remove('filter-active');
                        btn.classList.add('category-badge', 'bg-gray-100', 'text-gray-700');
                    });

                    // Ajouter la classe active au bouton cliqué
                    this.classList.remove('category-badge', 'bg-gray-100', 'text-gray-700');
                    this.classList.add('filter-active');
                });
            });

            // Gestion de la recherche
            const searchInput = document.querySelector('input[placeholder="Rechercher des cours..."]');
            if (searchInput) {
                searchInput.addEventListener('input', function() {
                    const searchTerm = this.value.toLowerCase();
                    const courseCards = document.querySelectorAll('.course-card');
                    
                    courseCards.forEach(card => {
                        const title = card.querySelector('h3').textContent.toLowerCase();
                        const description = card.querySelector('p').textContent.toLowerCase();
                        
                        if (title.includes(searchTerm) || description.includes(searchTerm)) {
                            card.style.display = 'block';
                        } else {
                            card.style.display = searchTerm === '' ? 'block' : 'none';
                        }
                    });
                });
            }

            // Animation au survol des cartes
            const courseCards = document.querySelectorAll('.course-card');
            courseCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-4px)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });
        });
    </script>
</body>
</html>