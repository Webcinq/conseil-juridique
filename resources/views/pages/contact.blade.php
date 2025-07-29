@extends('layouts.app')

@section('title', 'Contact - Global Gestion Cabinet Comptable Marrakech')
@section('meta-description', 'Contactez Global Gestion, votre cabinet comptable à Marrakech. Prendre rendez-vous pour vos besoins en comptabilité, fiscalité et conseil juridique.')

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
                transform: translateY(-8px) rotate(3deg);
            }
        }

        @keyframes phoneRing {
            0%, 100% {
                transform: scale(1) rotate(0deg);
            }
            10% {
                transform: scale(1.1) rotate(-3deg);
            }
            20% {
                transform: scale(1.05) rotate(3deg);
            }
            30% {
                transform: scale(1.1) rotate(-3deg);
            }
            40% {
                transform: scale(1.05) rotate(3deg);
            }
            50% {
                transform: scale(1) rotate(0deg);
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

        @keyframes communicationGlow {
            0%, 100% {
                box-shadow: 0 0 25px rgba(59, 130, 246, 0.4);
            }
            50% {
                box-shadow: 0 0 45px rgba(59, 130, 246, 0.7);
            }
        }

        @keyframes signalWaves {
            0% {
                transform: scale(0.8);
                opacity: 1;
            }
            100% {
                transform: scale(2);
                opacity: 0;
            }
        }

        @keyframes messageFlow {
            0% {
                opacity: 0;
                transform: translateX(-30px) scale(0.8);
            }
            50% {
                opacity: 1;
                transform: translateX(0px) scale(1);
            }
            100% {
                opacity: 0;
                transform: translateX(30px) scale(0.8);
            }
        }

        @keyframes contactInvite {
            0%, 100% {
                transform: translateY(0px);
                filter: brightness(1);
            }
            50% {
                transform: translateY(-5px);
                filter: brightness(1.1);
            }
        }

        .hero-section {
            position: relative;
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.9), rgba(99, 102, 241, 0.85)),
                        url('https://images.unsplash.com/photo-1423666639041-f56000c27a9a?ixlib=rb-4.0.3&auto=format&fit=crop&w=2074&q=80') center/cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
            min-height: 100vh;
            padding: 15px;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.3);
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

        .animate-phone-ring {
            animation: phoneRing 3s ease-in-out infinite;
        }

        .animate-pulse-soft {
            animation: pulse 2s ease-in-out infinite;
        }

        .animate-communication-glow {
            animation: communicationGlow 3s ease-in-out infinite;
        }

        .animate-signal-waves {
            animation: signalWaves 2s ease-out infinite;
        }

        .animate-message-flow {
            animation: messageFlow 4s ease-in-out infinite;
        }

        .animate-contact-invite {
            animation: contactInvite 3s ease-in-out infinite;
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

        .animate-delay-1000 {
            animation-delay: 1s;
        }

        .text-shadow {
            text-shadow: 0 4px 12px rgba(0, 0, 0, 0.6);
        }

        .glass-effect {
            backdrop-filter: blur(15px);
            background: rgba(255, 255, 255, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .glass-effect-blue {
            backdrop-filter: blur(15px);
            background: rgba(59, 130, 246, 0.25);
            border: 1px solid rgba(59, 130, 246, 0.4);
        }

        .hover-lift {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .hover-lift:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
        }

        /* Ondes de signal */
        .signal-wave {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 40px;
            height: 40px;
            border: 2px solid rgba(59, 130, 246, 0.4);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            animation: signalWaves 2s ease-out infinite;
        }

        .wave-1 {
            animation-delay: 0s;
        }

        .wave-2 {
            animation-delay: 0.5s;
        }

        .wave-3 {
            animation-delay: 1s;
        }

        /* Particules de communication */
        .floating-particle {
            position: absolute;
            pointer-events: none;
        }

        .particle-phone {
            top: 15%;
            left: 8%;
            animation: phoneRing 4s ease-in-out infinite;
        }

        .particle-email {
            top: 20%;
            right: 10%;
            animation: messageFlow 5s ease-in-out infinite;
            animation-delay: 1s;
        }

        .particle-chat {
            bottom: 30%;
            left: 12%;
            animation: float 6s ease-in-out infinite reverse;
            animation-delay: 2s;
        }

        .particle-location {
            bottom: 25%;
            right: 8%;
            animation: pulse 3s ease-in-out infinite;
            animation-delay: 0.5s;
        }

        .particle-calendar {
            top: 40%;
            left: 5%;
            animation: contactInvite 4s ease-in-out infinite;
            animation-delay: 3s;
        }

        .particle-support {
            top: 35%;
            right: 15%;
            animation: float 5s ease-in-out infinite reverse;
            animation-delay: 1.5s;
        }

        /* Lignes de connexion */
        .connection-line {
            position: absolute;
            height: 2px;
            background: linear-gradient(90deg, transparent, rgba(59, 130, 246, 0.4), transparent);
            animation: messageFlow 6s ease-in-out infinite;
        }

        .connection-1 {
            top: 25%;
            left: 15%;
            width: 25%;
            transform: rotate(30deg);
        }

        .connection-2 {
            bottom: 35%;
            right: 20%;
            width: 20%;
            transform: rotate(-45deg);
            animation-delay: 2s;
        }

        .connection-3 {
            top: 65%;
            left: 25%;
            width: 30%;
            transform: rotate(15deg);
            animation-delay: 4s;
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
                <a href="{{ route('accueil') }}" class="text-blue-600 hover:text-blue-800">Accueil</a>
                <i class="fas fa-chevron-right text-gray-400"></i>
                <span class="text-gray-600">Contact</span>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="hero-section flex items-center justify-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="hero-content text-center">
                <!-- Icône téléphone avec ondes de signal -->
                <div class="animate-fade-in-up opacity-0">
                    <div class="relative w-32 h-32 mx-auto mb-8">
                        <div class="glass-effect-blue rounded-xl flex items-center justify-center mx-auto hover-lift animate-communication-glow w-full h-full">
                            <i class="fas fa-phone text-white text-6xl drop-shadow-lg animate-phone-ring"></i>
                        </div>
                        <!-- Ondes de signal animées -->
                        <div class="signal-wave wave-1"></div>
                        <div class="signal-wave wave-2"></div>
                        <div class="signal-wave wave-3"></div>
                        <!-- Indicateur de disponibilité -->
                        <div class="absolute -top-2 -right-2 w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                            <i class="fas fa-check text-white text-xs animate-pulse-soft"></i>
                        </div>
                    </div>
                </div>
                
                <!-- Titre principal -->
                <div class="animate-fade-in-up animate-delay-200 opacity-0">
                    <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold text-white mb-6 text-shadow leading-tight">
                        <span class="text-blue-200 animate-pulse-soft">Contactez-nous</span>
                    </h1>
                </div>
                
                <!-- Invitation engageante -->
                <div class="animate-fade-in-up animate-delay-400 opacity-0">
                    <div class="max-w-4xl mx-auto mb-10">
                        <p class="text-xl md:text-2xl text-white leading-relaxed text-shadow opacity-95 mb-6">
                            <span class="text-yellow-300 font-semibold">Prêt à démarrer votre projet ?</span>
                        </p>
                        <p class="text-base md:text-xl text-blue-100 leading-relaxed text-shadow">
                            Contactez notre équipe d'<strong>experts</strong> pour un accompagnement <strong>personnalisé</strong> 
                            dans tous vos besoins <strong>comptables, juridiques et fiscaux</strong>.
                        </p>
                    </div>
                </div>

                <!-- Moyens de contact en badges -->
                <div class="animate-fade-in-up animate-delay-600 opacity-0 mb-10">
                    <div class="flex flex-wrap justify-center gap-4 mb-8">
                        <div class="glass-effect px-4 py-2 rounded-full hover-lift animate-contact-invite">
                            <i class="fas fa-phone text-green-400 mr-2"></i>
                            <span class="text-white text-sm font-medium">Téléphone</span>
                        </div>
                        <div class="glass-effect px-4 py-2 rounded-full hover-lift animate-contact-invite" style="animation-delay: 0.5s;">
                            <i class="fas fa-envelope text-blue-400 mr-2"></i>
                            <span class="text-white text-sm font-medium">Email</span>
                        </div>
                        <div class="glass-effect px-4 py-2 rounded-full hover-lift animate-contact-invite" style="animation-delay: 1s;">
                            <i class="fas fa-map-marker-alt text-red-400 mr-2"></i>
                            <span class="text-white text-sm font-medium">Visite</span>
                        </div>
                        <div class="glass-effect px-4 py-2 rounded-full hover-lift animate-contact-invite" style="animation-delay: 1.5s;">
                            <i class="fas fa-calendar-check text-purple-400 mr-2"></i>
                            <span class="text-white text-sm font-medium">Rendez-vous</span>
                        </div>
                    </div>
                </div>

                <!-- Boutons d'action prioritaires -->
               

                <!-- Avantages du contact -->
                <div class="animate-fade-in-up animate-delay-800 opacity-0 mb-8">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 max-w-5xl mx-auto">
                        <div class="glass-effect p-4 rounded-lg hover-lift">
                            <i class="fas fa-clock text-green-400 text-2xl mb-2 animate-pulse-soft"></i>
                            <h3 class="text-white font-semibold text-sm">Réponse rapide</h3>
                            <p class="text-white/80 text-xs">Sous 24h garantie</p>
                        </div>
                        <div class="glass-effect p-4 rounded-lg hover-lift">
                            <i class="fas fa-user-tie text-blue-400 text-2xl mb-2 animate-pulse-soft"></i>
                            <h3 class="text-white font-semibold text-sm">Expert dédié</h3>
                            <p class="text-white/80 text-xs">Conseiller personnel</p>
                        </div>
                        <div class="glass-effect p-4 rounded-lg hover-lift">
                            <i class="fas fa-gift text-yellow-400 text-2xl mb-2 animate-pulse-soft"></i>
                            <h3 class="text-white font-semibold text-sm">Consultation gratuite</h3>
                            <p class="text-white/80 text-xs">Premier échange offert</p>
                        </div>
                    </div>
                </div>

                <!-- Informations de contact rapides -->
             
                <!-- Message d'invitation finale -->
                <div class="animate-fade-in-up animate-delay-1000 opacity-0">
                    <div class="glass-effect border-l-4 border-green-400 p-6 max-w-3xl mx-auto rounded-lg">
                        <div class="flex items-center justify-center">
                            <i class="fas fa-comments text-green-400 text-2xl mr-4 animate-message-flow"></i>
                            <div class="text-center">
                                <h3 class="text-white font-bold text-lg mb-2">Parlons de votre projet !</h3>
                                <p class="text-white/90 text-base">
                                    Notre équipe est à votre écoute pour transformer vos ambitions en réussites concrètes.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stats de réactivité -->
                <div class="animate-fade-in-up animate-delay-1000 opacity-0 mt-12">
                    <div class="flex flex-wrap justify-center gap-8 text-white/80">
                        <div class="flex items-center gap-2">
                            <i class="fas fa-clock text-green-400 text-xl animate-pulse-soft"></i>
                            <div class="text-left">
                                <div class="text-lg font-bold text-white">< 24h</div>
                                <div class="text-xs">Temps de réponse</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fas fa-phone-volume text-blue-400 text-xl animate-phone-ring"></i>
                            <div class="text-left">
                                <div class="text-lg font-bold text-white">100%</div>
                                <div class="text-xs">Appels traités</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fas fa-smile text-yellow-400 text-xl animate-pulse-soft"></i>
                            <div class="text-left">
                                <div class="text-lg font-bold text-white">98%</div>
                                <div class="text-xs">Satisfaction</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fas fa-users text-purple-400 text-xl animate-contact-invite"></i>
                            <div class="text-left">
                                <div class="text-lg font-bold text-white">15</div>
                                <div class="text-xs">Conseillers</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Particules de communication -->
        <div class="floating-particle particle-phone opacity-20">
            <i class="fas fa-mobile-alt text-green-300 text-3xl"></i>
        </div>
        <div class="floating-particle particle-email opacity-25">
            <i class="fas fa-envelope text-blue-300 text-4xl"></i>
        </div>
        <div class="floating-particle particle-chat opacity-20">
            <i class="fas fa-comments text-purple-300 text-3xl"></i>
        </div>
        <div class="floating-particle particle-location opacity-25">
            <i class="fas fa-map-marker-alt text-red-300 text-3xl"></i>
        </div>
        <div class="floating-particle particle-calendar opacity-15">
            <i class="fas fa-calendar-check text-yellow-300 text-3xl"></i>
        </div>
        <div class="floating-particle particle-support opacity-20">
            <i class="fas fa-headset text-indigo-300 text-3xl"></i>
        </div>

        <!-- Lignes de connexion communication -->
        <div class="connection-line connection-1"></div>
        <div class="connection-line connection-2"></div>
        <div class="connection-line connection-3"></div>

        <!-- Éléments décoratifs communication -->
        <div class="absolute top-1/4 left-1/4 opacity-5">
            <i class="fas fa-satellite-dish text-white text-8xl animate-signal-waves" style="animation-delay: 2s;"></i>
        </div>
        <div class="absolute bottom-1/3 right-1/4 opacity-5">
            <i class="fas fa-broadcast-tower text-white text-6xl animate-phone-ring" style="animation-delay: 4s;"></i>
        </div>
    </section>

    <!-- Contact Content -->
    <section class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Formulaire de Contact -->
                <div class="bg-white rounded-xl shadow-lg p-8">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Prendre Rendez-vous</h2>
                    
                    @if(session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="prenom" class="block text-sm font-medium text-gray-700 mb-2">Prénom *</label>
                                <input type="text" id="prenom" name="prenom" required 
                                       value="{{ old('prenom') }}"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('prenom') border-red-500 @enderror">
                                @error('prenom')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="nom" class="block text-sm font-medium text-gray-700 mb-2">Nom *</label>
                                <input type="text" id="nom" name="nom" required 
                                       value="{{ old('nom') }}"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('nom') border-red-500 @enderror">
                                @error('nom')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email *</label>
                            <input type="email" id="email" name="email" required 
                                   value="{{ old('email') }}"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('email') border-red-500 @enderror">
                            @error('email')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div>
                            <label for="telephone" class="block text-sm font-medium text-gray-700 mb-2">Téléphone</label>
                            <input type="tel" id="telephone" name="telephone" 
                                   value="{{ old('telephone') }}"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        
                        <div>
                            <label for="entreprise" class="block text-sm font-medium text-gray-700 mb-2">Entreprise</label>
                            <input type="text" id="entreprise" name="entreprise" 
                                   value="{{ old('entreprise') }}"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        
                        <div>
                            <label for="service" class="block text-sm font-medium text-gray-700 mb-2">Service demandé *</label>
                            <select id="service" name="service" required 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('service') border-red-500 @enderror">
                                <option value="">Sélectionnez un service</option>
                                <option value="gestion-comptable" {{ old('service') == 'gestion-comptable' ? 'selected' : '' }}>Gestion Comptable</option>
                                <option value="conseil-juridique" {{ old('service') == 'conseil-juridique' ? 'selected' : '' }}>Conseil Juridique</option>
                                <option value="conseil-fiscal" {{ old('service') == 'conseil-fiscal' ? 'selected' : '' }}>Conseil Fiscal</option>
                                <option value="creation-entreprise" {{ old('service') == 'creation-entreprise' ? 'selected' : '' }}>Création d'Entreprise</option>
                                <option value="rh" {{ old('service') == 'rh' ? 'selected' : '' }}>Recrutement & RH</option>
                                <option value="marketing-digital" {{ old('service') == 'marketing-digital' ? 'selected' : '' }}>Marketing Digital</option>
                            </select>
                            @error('service')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message *</label>
                            <textarea id="message" name="message" rows="4" required 
                                      placeholder="Décrivez votre projet ou vos besoins..."
                                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('message') border-red-500 @enderror">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <button type="submit" class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                            Envoyer la demande
                        </button>
                    </form>
                </div>

                <!-- Informations de Contact -->
                <div class="space-y-8">
                    <div class="bg-white rounded-xl shadow-lg p-8">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">Informations de Contact</h2>
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-map-marker-alt text-blue-600 text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900 mb-1">Adresse</h3>
                                    <p class="text-gray-600">123 Avenue Allal al fassi<br>Marrakech 40000, Maroc</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-phone text-green-600 text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900 mb-1">Téléphone</h3>
                                    <p class="text-gray-600">+212.5.24.31.23.31</p>
                                    <p class="text-gray-600">+212.6.20.30.76.06 (Mobile)</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-envelope text-purple-600 text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900 mb-1">Email</h3>
                                    <p class="text-gray-600">contact@global-gestion.ma</p>
                                    <p class="text-gray-600">info@global-gestion.ma</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-clock text-yellow-600 text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900 mb-1">Horaires d'ouverture</h3>
                                    <p class="text-gray-600">
                                        <strong>Lundi - Vendredi:</strong> 9h00 - 18h00<br>
                                        <strong>Samedi:</strong> 9h00 - 13h00<br>
                                        <strong>Dimanche:</strong> Fermé
                                    </p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-fax text-red-600 text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900 mb-1">Fax</h3>
                                    <p class="text-gray-600">+212.5.24.31.23.31</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Documents Utiles -->
                    <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-xl p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Documents Utiles</h3>
                        <div class="space-y-3">
                            <a href="#" class="flex items-center p-3 bg-white rounded-lg hover:shadow-md transition-shadow">
                                <i class="fas fa-file-pdf text-red-500 text-xl mr-3"></i>
                                <div>
                                    <p class="font-medium text-gray-900">Plaquette du Cabinet</p>
                                    <p class="text-sm text-gray-600">Présentation complète de nos services</p>
                                </div>
                                <i class="fas fa-download text-gray-400 ml-auto"></i>
                            </a>
                            <a href="{{ route('guide-creation-sarl') }}" class="flex items-center p-3 bg-white rounded-lg hover:shadow-md transition-shadow">
                                <i class="fas fa-file-alt text-blue-500 text-xl mr-3"></i>
                                <div>
                                    <p class="font-medium text-gray-900">Guide Création SARL</p>
                                    <p class="text-sm text-gray-600">Toutes les étapes détaillées</p>
                                </div>
                                <i class="fas fa-external-link-alt text-gray-400 ml-auto"></i>
                            </a>
                            <a href="#" class="flex items-center p-3 bg-white rounded-lg hover:shadow-md transition-shadow">
                                <i class="fas fa-calculator text-green-500 text-xl mr-3"></i>
                                <div>
                                    <p class="font-medium text-gray-900">Simulateur de Charges</p>
                                    <p class="text-sm text-gray-600">Estimez vos charges sociales</p>
                                </div>
                                <i class="fas fa-download text-gray-400 ml-auto"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Prise de RDV en ligne -->
                    <div class="bg-blue-600 text-white rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            Prise de Rendez-vous en Ligne
                        </h3>
                        <p class="mb-4 text-blue-100">
                            Planifiez votre consultation directement en ligne selon vos disponibilités.
                        </p>
                        <button onclick="openCalendar()" class="bg-white text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            Réserver un créneau
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Maps -->
    <section class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Plan d'Accès</h2>
                <p class="text-gray-600">Retrouvez-nous au cœur de Marrakech</p>
            </div>
            
            <!-- Google Maps Placeholder -->
            <div class="bg-gray-200 rounded-xl h-96 flex items-center justify-center overflow-hidden">
                <div class="text-center">
                    <i class="fas fa-map text-4xl text-gray-400 mb-4"></i>
                    <p class="text-gray-600 font-medium">Carte Google Maps intégrée</p>
                    <p class="text-sm text-gray-500 mt-2">
                        <i class="fas fa-map-marker-alt mr-1"></i>
                        123 Avenue Mohammed V, Marrakech 40000
                    </p>
                    <button onclick="openMaps()" class="mt-4 bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                        Voir sur Google Maps
                    </button>
                </div>
            </div>
            
            <!-- Instructions d'accès -->
            <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="text-center p-6 bg-gray-50 rounded-lg">
                    <i class="fas fa-car text-blue-600 text-2xl mb-3"></i>
                    <h3 class="font-semibold text-gray-900 mb-2">En voiture</h3>
                    <p class="text-gray-600 text-sm">Parking disponible à proximité. Accès facile depuis l'autoroute.</p>
                </div>
                <div class="text-center p-6 bg-gray-50 rounded-lg">
                    <i class="fas fa-bus text-blue-600 text-2xl mb-3"></i>
                    <h3 class="font-semibold text-gray-900 mb-2">Transports en commun</h3>
                    <p class="text-gray-600 text-sm">Arrêt de bus à 100m. Lignes 5, 12 et 18.</p>
                </div>
                <div class="text-center p-6 bg-gray-50 rounded-lg">
                    <i class="fas fa-taxi text-blue-600 text-2xl mb-3"></i>
                    <h3 class="font-semibold text-gray-900 mb-2">Taxi</h3>
                    <p class="text-gray-600 text-sm">Station de taxi à proximité. Accès facile depuis l'aéroport.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Rapide -->
    <section class="bg-gray-50 py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Questions Fréquentes</h2>
                <p class="text-gray-600">Réponses aux questions les plus courantes</p>
            </div>
            
            <div class="space-y-4">
                <div class="bg-white rounded-lg shadow-sm">
                    <button onclick="toggleFAQ(this)" class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 focus:outline-none">
                        <span class="font-medium text-gray-900">Comment prendre rendez-vous ?</span>
                        <i class="fas fa-chevron-down text-gray-400"></i>
                    </button>
                    <div class="px-6 pb-4 hidden">
                        <p class="text-gray-600">
                            Vous pouvez prendre rendez-vous par téléphone, email, ou directement via notre formulaire en ligne. 
                            Nous vous confirmerons votre créneau dans les 24h.
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-sm">
                    <button onclick="toggleFAQ(this)" class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 focus:outline-none">
                        <span class="font-medium text-gray-900">Quels documents apporter lors du premier rendez-vous ?</span>
                        <i class="fas fa-chevron-down text-gray-400"></i>
                    </button>
                    <div class="px-6 pb-4 hidden">
                        <p class="text-gray-600">
                            Selon votre besoin : statuts de société, bilans précédents, pièces d'identité, 
                            documents fiscaux récents. Nous vous préciserons la liste lors de la prise de rendez-vous.
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-sm">
                    <button onclick="toggleFAQ(this)" class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 focus:outline-none">
                        <span class="font-medium text-gray-900">Proposez-vous des consultations en urgence ?</span>
                        <i class="fas fa-chevron-down text-gray-400"></i>
                    </button>
                    <div class="px-6 pb-4 hidden">
                        <p class="text-gray-600">
                            Oui, nous proposons des consultations d'urgence notamment pour les contrôles fiscaux, 
                            contentieux ou situations critiques. Contactez-nous directement par téléphone.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
function toggleFAQ(element) {
    const answer = element.nextElementSibling;
    const icon = element.querySelector('i');
    
    if (answer.classList.contains('hidden')) {
        answer.classList.remove('hidden');
        icon.classList.remove('fa-chevron-down');
        icon.classList.add('fa-chevron-up');
    } else {
        answer.classList.add('hidden');
        icon.classList.remove('fa-chevron-up');
        icon.classList.add('fa-chevron-down');
    }
}

function openCalendar() {
    alert('Système de réservation en ligne bientôt disponible!\nEn attendant, contactez-nous par téléphone pour prendre rendez-vous.');
}

function openMaps() {
    window.open('https://maps.google.com/?q=123+Avenue+Mohammed+V+Marrakech+Maroc', '_blank');
}
</script>
@endpush