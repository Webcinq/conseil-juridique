@extends('layouts.app')

@section('title', 'Assistance au Contrôle Fiscal à Marrakech - Défense et gestion des Contentieux')
@section('meta-description', 'Face à un contrôle fiscal ? Nos experts vous accompagnent dans vos démarches, défendent vos intérêts et gèrent vos litiges avec l\'administration fiscale.')
@section('keywords', 'contrôle fiscal marrakech, contentieux fiscal, assistance fiscale, expert fiscal, conseil fiscal')

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
                transform: translateY(-12px) rotate(3deg);
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

        @keyframes shimmer {
            0% {
                background-position: -200% 0;
            }
            100% {
                background-position: 200% 0;
            }
        }

        @keyframes subtleGlow {
            0%, 100% {
                box-shadow: 0 0 20px rgba(34, 197, 94, 0.2);
            }
            50% {
                box-shadow: 0 0 40px rgba(34, 197, 94, 0.4);
            }
        }

        .hero-section {
            position: relative;
            background: linear-gradient(135deg, rgba(21, 128, 61, 0.85), rgba(34, 197, 94, 0.75)),
                        url('https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80') center/cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
            min-height: 100vh;
                        padding: 10px

        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.25);
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
            animation: float 4s ease-in-out infinite;
        }

        .animate-pulse-soft {
            animation: pulse 3s ease-in-out infinite;
        }

        .animate-glow {
            animation: subtleGlow 3s ease-in-out infinite;
        }

        .animate-shimmer {
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            background-size: 200% 100%;
            animation: shimmer 2s infinite;
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
            text-shadow: 0 4px 8px rgba(0, 0, 0, 0.6);
        }

        .glass-effect {
            backdrop-filter: blur(15px);
            background: rgba(255, 255, 255, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .glass-effect-green {
            backdrop-filter: blur(15px);
            background: rgba(34, 197, 94, 0.2);
            border: 1px solid rgba(34, 197, 94, 0.4);
        }

        .hover-lift {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .hover-lift:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
        }

        /* Particules spécialisées pour le fiscal */
        .floating-particle {
            position: absolute;
            border-radius: 50%;
            pointer-events: none;
        }

        .particle-dollar {
            width: 20px;
            height: 20px;
            top: 15%;
            left: 8%;
            background: rgba(34, 197, 94, 0.3);
            animation: float 5s ease-in-out infinite;
        }

        .particle-euro {
            width: 16px;
            height: 16px;
            top: 25%;
            right: 12%;
            background: rgba(34, 197, 94, 0.2);
            animation: float 6s ease-in-out infinite reverse;
            animation-delay: 1s;
        }

        .particle-percent {
            width: 12px;
            height: 12px;
            bottom: 35%;
            left: 15%;
            background: rgba(255, 255, 255, 0.2);
            animation: float 4s ease-in-out infinite;
            animation-delay: 2s;
        }

        .particle-chart {
            width: 18px;
            height: 18px;
            bottom: 20%;
            right: 8%;
            background: rgba(34, 197, 94, 0.25);
            animation: float 7s ease-in-out infinite reverse;
            animation-delay: 0.5s;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-section {
                background-attachment: scroll;
            }
        }
</style>
    <!-- Breadcrumb -->
    <div class="bg-gray-50 py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="{{ route('accueil') }}" class="text-custom-blue hover:text-blue-800">Accueil</a>
                <i class="fas fa-chevron-right text-gray-400"></i>
                <a href="{{ route('expertises.index') }}" class="text-custom-blue hover:text-blue-800">Nos Expertises</a>
                <i class="fas fa-chevron-right text-gray-400"></i>
                <span class="text-gray-600">Conseil Fiscal</span>
            </nav>
        </div>
    </div>

    <!-- Hero Section Optimisée -->
    <section class="hero-section flex items-center justify-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="hero-content text-center">
                <!-- Icône principale avec effet lumineux -->
                <div class="animate-fade-in-up opacity-0">
                    <div class="w-24 h-24 glass-effect-green rounded-xl flex items-center justify-center mx-auto mb-8 animate-float hover-lift animate-glow">
                        <i class="fas fa-file-invoice-dollar text-white text-4xl drop-shadow-lg"></i>
                    </div>
                </div>
                
                <!-- Titre principal -->
                <div class="animate-fade-in-up animate-delay-200 opacity-0">
                    <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-6 text-shadow leading-tight">
                        <span class="text-green-300 animate-pulse-soft">Conseil Fiscal</span> pour Entreprises
                        <br>
                        <span class="text-2xl md:text-4xl lg:text-5xl text-white/90">
                            Accompagnement par une Expertise Fiscale
                        </span>
                    </h1>
                </div>
                
                <!-- Sous-titre avec mise en avant des points clés -->
                <div class="animate-fade-in-up animate-delay-400 opacity-0">
                    <div class="max-w-5xl mx-auto mb-8">
                        <p class="text-lg md:text-2xl text-white leading-relaxed text-shadow opacity-95 mb-6">
                            Notre cabinet d'expertise fiscale vous accompagne dans la gestion de votre fiscalité d'entreprise.
                        </p>
                        <p class="text-base md:text-xl text-green-100 leading-relaxed text-shadow">
                            Grâce à un service de <strong>conseil fiscal sur mesure</strong>, nous vous accompagnons lors d'un 
                            <strong>contrôle fiscal</strong>, de <strong>litige avec l'administration fiscale</strong> ou pour 
                            l'établissement de vos <strong>déclarations fiscales</strong>.
                        </p>
                    </div>
                </div>

                <!-- Services rapides -->
                <div class="animate-fade-in-up animate-delay-600 opacity-0 mb-10">
                    <div class="flex flex-wrap justify-center gap-4 mb-8">
                        <div class="glass-effect px-4 py-2 rounded-full hover-lift">
                            <i class="fas fa-shield-alt text-red-400 mr-2"></i>
                            <span class="text-white text-sm font-medium">Contrôle Fiscal</span>
                        </div>
                        <div class="glass-effect px-4 py-2 rounded-full hover-lift">
                            <i class="fas fa-gavel text-purple-400 mr-2"></i>
                            <span class="text-white text-sm font-medium">Contentieux</span>
                        </div>
                        <div class="glass-effect px-4 py-2 rounded-full hover-lift">
                            <i class="fas fa-file-invoice text-blue-400 mr-2"></i>
                            <span class="text-white text-sm font-medium">Déclarations</span>
                        </div>
                    </div>
                </div>

                <!-- Boutons d'action -->
                <div class="animate-fade-in-up animate-delay-600 opacity-0">
                    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-8">
                        <button class="glass-effect-green text-white px-8 py-4 rounded-full font-semibold text-lg hover-lift animate-glow group">
                            <a href="{{ route('contact') }}">
                            <i class="fas fa-phone mr-2 group-hover:rotate-12 transition-transform"></i>
                            Assistance immédiate
                            <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                            </a>
                        </button>
                        <button class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-white hover:text-green-800 transition-all duration-300 hover-lift">
                                                       <a href="{{ route('contact') }}">

                            <i class="fas fa-calculator mr-2"></i>
                            Devis gratuit
                            </a>
                        </button>
                    </div>
                </div>

                <!-- Alerte urgence -->
                <div class="animate-fade-in-up animate-delay-800 opacity-0">
                    <div class="glass-effect border-l-4 border-red-400 p-4 max-w-2xl mx-auto rounded-lg">
                        <div class="flex items-center">
                            <i class="fas fa-exclamation-triangle text-red-400 text-xl mr-3 animate-pulse-soft"></i>
                            <div class="text-left">
                                <h3 class="text-white font-semibold">Urgence Contrôle Fiscal</h3>
                                <p class="text-white/90 text-sm">Vous avez reçu un avis de vérification ? Ne restez pas seul face à l'administration fiscale.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stats de confiance -->
                <div class="animate-fade-in-up animate-delay-800 opacity-0 mt-12">
                    <div class="flex flex-wrap justify-center gap-8 text-white/80">
                        <div class="flex items-center gap-2">
                            <i class="fas fa-shield-check text-green-400 text-xl"></i>
                            <div class="text-left">
                                <div class="text-lg font-bold text-white">95%</div>
                                <div class="text-xs">Succès contentieux</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fas fa-clock text-blue-400 text-xl"></i>
                            <div class="text-left">
                                <div class="text-lg font-bold text-white">24h</div>
                                <div class="text-xs">Réponse garantie</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fas fa-users text-orange-400 text-xl"></i>
                            <div class="text-left">
                                <div class="text-lg font-bold text-white">+300</div>
                                <div class="text-xs">Contrôles gérés</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fas fa-award text-purple-400 text-xl"></i>
                            <div class="text-left">
                                <div class="text-lg font-bold text-white">25 ans</div>
                                <div class="text-xs">D'expertise</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Particules thématiques fiscales -->
        <div class="floating-particle particle-dollar">
            <i class="fas fa-dollar-sign text-green-300 text-xs"></i>
        </div>
        <div class="floating-particle particle-euro">
            <i class="fas fa-euro-sign text-green-200 text-xs"></i>
        </div>
        <div class="floating-particle particle-percent">
            <i class="fas fa-percentage text-white text-xs"></i>
        </div>
        <div class="floating-particle particle-chart">
            <i class="fas fa-chart-line text-green-300 text-xs"></i>
        </div>

        <!-- Éléments décoratifs supplémentaires -->
        <div class="absolute top-32 left-1/4 opacity-10">
            <i class="fas fa-balance-scale text-white text-6xl animate-float" style="animation-delay: 1.5s;"></i>
        </div>
        <div class="absolute bottom-32 right-1/4 opacity-10">
            <i class="fas fa-gavel text-white text-5xl animate-float" style="animation-delay: 3s;"></i>
        </div>
    </section>

    <!-- Services Fiscaux -->
    <section class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Introduction -->
            <div class="bg-white rounded-xl shadow-lg p-8 mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-6 text-center">Notre Approche Personnalisée</h2>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div>
                        <p class="text-gray-600 mb-4">Notre approche personnalisée inclut notamment :</p>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span>Le suivi et la réalisation de toutes les obligations fiscales de votre entreprise</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span>Une assistance complète lors du contrôle fiscal, avec une réponse claire et adaptée aux notifications de l'administration des impôts et taxes</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span>Une évaluation réaliste des chances de succès, afin de déterminer la meilleure voie de recours à utiliser : négocier un arrangement amiable, saisir les commissions fiscales ou entamer un recours devant le tribunal administratif</span>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="Conseil fiscal Marrakech" 
                             class="rounded-lg shadow-lg w-full h-64 object-cover">
                    </div>
                </div>
            </div>

            <!-- Services Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-16">
                <!-- Assistance Contrôle Fiscal -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <div class="bg-gradient-to-br from-red-500 to-red-600 p-6 text-white">
                        <div class="w-16 h-16 bg-white bg-opacity-20 rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-shield-alt text-white text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-2">Assistance au Contrôle Fiscal</h3>
                        <p class="text-red-100">Préparation et défense efficace lors des contrôles fiscaux</p>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">Un contrôle fiscal peut être source d'inquiétude et de risques financiers. Notre équipe de fiscaliste vous accompagne à chaque étape du contrôle fiscal.</p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-sm">
                                <i class="fas fa-arrow-right text-red-500 mr-2"></i>
                                <span>Préparation au contrôle</span>
                            </li>
                            <li class="flex items-center text-sm">
                                <i class="fas fa-arrow-right text-red-500 mr-2"></i>
                                <span>Assistance pendant le contrôle</span>
                            </li>
                            <li class="flex items-center text-sm">
                                <i class="fas fa-arrow-right text-red-500 mr-2"></i>
                                <span>Réponse aux notifications</span>
                            </li>
                        </ul>
                        <a href="{{ route('controle-fiscal') }}" class="text-red-600 font-semibold hover:text-red-800 transition-colors">
                            En savoir plus <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Contentieux Fiscal -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <div class="bg-gradient-to-br from-purple-500 to-purple-600 p-6 text-white">
                        <div class="w-16 h-16 bg-white bg-opacity-20 rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-gavel text-white text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-2">Gestion du Contentieux Fiscal</h3>
                        <p class="text-purple-100">Défense des intérêts de votre entreprise</p>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">En cas de désaccord avec l'administration suite à un contrôle ou une rectification d'imposition, nous intervenons pour gérer le contentieux fiscal.</p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-sm">
                                <i class="fas fa-arrow-right text-purple-500 mr-2"></i>
                                <span>Recours hiérarchique</span>
                            </li>
                            <li class="flex items-center text-sm">
                                <i class="fas fa-arrow-right text-purple-500 mr-2"></i>
                                <span>Représentation tribunal</span>
                            </li>
                        </ul>
                        <a href="{{ route('contentieux-fiscal') }}" class="text-purple-600 font-semibold hover:text-purple-800 transition-colors">
                            En savoir plus <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Déclarations Fiscales -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <div class="bg-gradient-to-br from-blue-500 to-blue-600 p-6 text-white">
                        <div class="w-16 h-16 bg-white bg-opacity-20 rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-file-invoice text-white text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-2">Déclarations Fiscales</h3>
                        <p class="text-blue-100">Optimisation et conformité fiscale</p>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">Profitez d'un suivi permanent pour anticiper vos obligations fiscales, optimiser votre fiscalité d'entreprise, et rester en conformité.</p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-sm">
                                <i class="fas fa-arrow-right text-blue-500 mr-2"></i>
                                <span>TVA, IR, IS</span>
                            </li>
                            <li class="flex items-center text-sm">
                                <i class="fas fa-arrow-right text-blue-500 mr-2"></i>
                                <span>Optimisation fiscale</span>
                            </li>
                            <li class="flex items-center text-sm">
                                <i class="fas fa-arrow-right text-blue-500 mr-2"></i>
                                <span>Conformité légale</span>
                            </li>
                        </ul>
                        <a href="{{ route('declarations-fiscales') }}" class="text-custom-blue font-semibold hover:text-blue-800 transition-colors">
                            En savoir plus <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Pourquoi faire appel à un expert-fiscaliste -->
            <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-xl p-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Pourquoi faire appel à un expert-fiscaliste pour votre fiscalité ?</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-chart-line text-custom-blue text-2xl"></i>
                        </div>
                        <h3 class="font-bold text-gray-900 mb-2">Une gestion optimale de votre fiscalité</h3>
                        <p class="text-gray-600 text-sm">Optimisation des charges fiscales et respect des obligations légales</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-user-tie text-green-600 text-2xl"></i>
                        </div>
                        <h3 class="font-bold text-gray-900 mb-2">Un interlocuteur unique</h3>
                        <p class="text-gray-600 text-sm">Pour la comptabilité, le juridique et le fiscal</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-handshake text-purple-600 text-2xl"></i>
                        </div>
                        <h3 class="font-bold text-gray-900 mb-2">Un partenaire solide</h3>
                        <p class="text-gray-600 text-sm">En cas de contrôle ou de litige fiscal</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Contrôle Fiscal Détaillée -->
    <section class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">
                        <i class="fas fa-shield-alt text-red-600 mr-3"></i>
                        Face au Contrôle Fiscal : Des Experts pour Vous Défendre
                    </h2>
                    <p class="text-gray-600 mb-6">
                        Vous venez de recevoir un avis de vérification fiscale ? Vous êtes déjà sous contrôle fiscal ou face à un redressement fiscal ? 
                        Contactez-nous et bénéficiez de l'expertise de notre équipe de fiscalistes qui maîtrise parfaitement les procédures liées à la vérification fiscale et au contentieux de l'impôt au Maroc.
                    </p>
                    <p class="text-gray-600 mb-6">
                        Notre cabinet basé à Marrakech, spécialisé en fiscalité des entreprises et contentieux fiscaux, intervient rapidement pour défendre vos intérêts avec rigueur et professionnalisme.
                    </p>
                    <div class="bg-red-50 rounded-lg p-6">
                        <h3 class="font-bold text-red-900 mb-3">
                            <i class="fas fa-exclamation-triangle text-red-600 mr-2"></i>
                            Urgence Contrôle Fiscal
                        </h3>
                        <p class="text-red-700 text-sm mb-4">
                            Vous avez reçu un avis de vérification ? Ne restez pas seul face à l'administration fiscale.
                        </p>
                        <a href="{{ route('contact') }}" class="bg-red-600 text-white px-6 py-2 rounded-lg hover:bg-red-700 transition-colors inline-flex items-center">
                            <i class="fas fa-phone mr-2"></i>
                            Contactez-nous immédiatement
                        </a>
                    </div>
                </div>
                <div>
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Expert fiscal Marrakech" 
                         class="rounded-xl shadow-lg w-full h-96 object-cover">
                </div>
            </div>

            <!-- Services Détaillés -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-gray-50 rounded-xl p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Nos Services en Matière de Contrôle Fiscal</h3>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-red-600 text-white rounded-full flex items-center justify-center mr-4 mt-1">
                                <i class="fas fa-check text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Préparation au contrôle fiscal</h4>
                                <p class="text-gray-600 text-sm">Vérification des pièces comptables et mise en conformité</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-red-600 text-white rounded-full flex items-center justify-center mr-4 mt-1">
                                <i class="fas fa-check text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Assistance complète pendant le contrôle fiscal</h4>
                                <p class="text-gray-600 text-sm">Accompagnement lors des échanges avec l'inspecteur des impôts, conseils sur les réponses à apporter</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-red-600 text-white rounded-full flex items-center justify-center mr-4 mt-1">
                                <i class="fas fa-check text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Gestion du redressement fiscal</h4>
                                <p class="text-gray-600 text-sm">Analyse de la proposition de rectification, rédaction d'une réponse claire et adaptée</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-red-600 text-white rounded-full flex items-center justify-center mr-4 mt-1">
                                <i class="fas fa-check text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Représentation en cas de litige</h4>
                                <p class="text-gray-600 text-sm">Assistance devant l'administration, suivi du dossier, préparation d'un éventuel recours</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-blue-50 rounded-xl p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Prévention des Risques Fiscaux</h3>
                    <p class="text-gray-600 mb-6">Anticiper les risques fiscaux est essentiel pour la pérennité de votre entreprise. C'est pourquoi nous mettons à votre disposition :</p>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-lightbulb text-custom-blue mr-3 mt-1"></i>
                            <span class="text-gray-700">Des séances de sensibilisation pratiques pour mieux comprendre les enjeux fiscaux actuels</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-graduation-cap text-custom-blue mr-3 mt-1"></i>
                            <span class="text-gray-700">Des programmes de formation personnalisés sur les aspects clés de la fiscalité</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-search text-custom-blue mr-3 mt-1"></i>
                            <span class="text-gray-700">Des missions d'audit fiscal approfondies pour évaluer et prévenir les risques</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-chart-bar text-custom-blue mr-3 mt-1"></i>
                            <span class="text-gray-700">Une analyse détaillée du risque fiscal lié à des montages complexes</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-gradient-to-r from-red-600 to-purple-600 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-white mb-4">Besoin d'une assistance lors d'un contrôle fiscal ?</h2>
            <p class="text-xl text-red-100 mb-8 max-w-3xl mx-auto">
                Vous avez reçu un avis de vérification ? Prenez contact dès aujourd'hui avec notre cabinet à Marrakech pour préparer votre défense sereinement.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="bg-white text-red-600 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-100 transition-all transform hover:scale-105">
                    Contactez-nous immédiatement
                </a>
                <a href="tel:+212524XXXXXX" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white hover:text-red-600 transition-all">
                    Appeler maintenant
                </a>
            </div>
        </div>
    </section>
@endsection