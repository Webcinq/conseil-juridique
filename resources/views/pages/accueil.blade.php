@extends('layouts.app')

@section('title', 'Global Gestion - Cabinet d\'expertise comptable, juridique et fiscal à Marrakech')
@section('meta-description', 'Cabinet comptable à Marrakech. Services en comptabilité, fiscalité et conseil juridique pour les entreprises et les particuliers.')

@section('content')
    <style>
        /* Variables personnalisées */
        :root {
            --primary-blue: #245fa0;
            --secondary-orange: #fe7a36;
            --primary-blue-dark: #1e3a5f;
            --secondary-orange-dark: #e55a2b;
        }

        /* Slider Container */
        .hero-slider {
            position: relative;
            height: 100vh;
            min-height: 700px;
            overflow: hidden;
        }

        /* Slides */
        .hero-slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--secondary-orange) 100%);
            opacity: 0;
            visibility: hidden;
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
            transform: translateX(100px);
        }

        .hero-slide.active {
            opacity: 1;
            visibility: visible;
            transform: translateX(0);
            z-index: 2;
        }

        .hero-slide.prev {
            transform: translateX(-100px);
        }

        /* Pattern overlay */
        .hero-pattern::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.1"%3E%3Ccircle cx="30" cy="30" r="4"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');
            pointer-events: none;
        }

        /* Dark overlay */
        .hero-overlay::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.1);
            pointer-events: none;
        }

        /* Service icon */
        .service-icon {
            width: 100px;
            height: 100px;
            border-radius: 25px;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 2rem;
            transition: all 0.3s ease;
        }

        .service-icon:hover {
            transform: scale(1.05);
            background: rgba(255, 255, 255, 0.2);
        }

        /* Navigation buttons */
        .nav-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 10;
            font-size: 18px;
        }

        .nav-btn:hover {
            background: rgba(255, 255, 255, 0.25);
            transform: translateY(-50%) scale(1.1);
        }

        .nav-btn.prev {
            left: 30px;
        }

        .nav-btn.next {
            right: 30px;
        }

        /* Indicators */
        .slider-indicators {
            position: absolute;
            bottom: 40px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 12px;
            z-index: 10;
        }

        .indicator {
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.4);
            cursor: pointer;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .indicator.active {
            background: white;
            transform: scale(1.2);
            border-color: rgba(255, 255, 255, 0.5);
        }

        .indicator:hover {
            background: rgba(255, 255, 255, 0.7);
        }

        /* Floating elements */
        .floating-element {
            position: absolute;
            border-radius: 50%;
            opacity: 0.15;
            pointer-events: none;
        }

        .float-1 {
            top: 15%;
            left: 8%;
            width: 80px;
            height: 80px;
            background: #fef3cd;
            animation: float1 8s ease-in-out infinite;
        }

        .float-2 {
            bottom: 15%;
            right: 8%;
            width: 60px;
            height: 60px;
            background: var(--secondary-orange);
            animation: float2 6s ease-in-out infinite;
        }

        .float-3 {
            top: 45%;
            right: 15%;
            width: 40px;
            height: 40px;
            background: var(--primary-blue-dark);
            animation: float3 7s ease-in-out infinite;
        }

        @keyframes float1 {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-30px) rotate(180deg); }
        }

        @keyframes float2 {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(-180deg); }
        }

        @keyframes float3 {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-25px) rotate(360deg); }
        }

        /* Text animations */
        .slide-content {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
            transition-delay: 0.3s;
        }

        .hero-slide.active .slide-content {
            opacity: 1;
            transform: translateY(0);
        }

        .slide-icon-bg {
            opacity: 0;
            transform: scale(0.8);
            transition: all 0.8s ease;
            transition-delay: 0.5s;
        }

        .hero-slide.active .slide-icon-bg {
            opacity: 0.1;
            transform: scale(1);
        }

        /* Buttons */
        .btn-primary {
            background: white;
            color: var(--primary-blue);
            padding: 16px 32px;
            border-radius: 12px;
            font-weight: 600;
            font-size: 18px;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            text-decoration: none;
        }

        .btn-primary:hover {
            background: #f8f9fa;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        .btn-secondary {
            background: transparent;
            color: white;
            padding: 16px 32px;
            border-radius: 12px;
            font-weight: 600;
            font-size: 18px;
            transition: all 0.3s ease;
            border: 2px solid white;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            text-decoration: none;
        }

        .btn-secondary:hover {
            background: white;
            color: var(--primary-blue);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .hero-slider {
                min-height: 600px;
            }
            
            .nav-btn {
                width: 50px;
                height: 50px;
                font-size: 16px;
            }
            
            .nav-btn.prev {
                left: 20px;
            }
            
            .nav-btn.next {
                right: 20px;
            }
        }

        @media (max-width: 768px) {
            .hero-slider {
                min-height: 500px;
            }
            
            .service-icon {
                width: 80px;
                height: 80px;
                margin-bottom: 1.5rem;
            }
            
            .float-1, .float-2, .float-3 {
                display: none;
            }
            
            .slider-indicators {
                bottom: 20px;
            }
        }
    </style>
    <!-- Hero Section -->
    <section class="hero-slider">
        <!-- Slide 1: Gestion Comptable -->
        <div class="hero-slide active hero-pattern hero-overlay">
            <div class="floating-element float-1"></div>
            <div class="floating-element float-2"></div>
            <div class="floating-element float-3"></div>
            
            <div class="relative h-full flex items-center">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <div class="slide-content">
                            <div class="service-icon">
                                <i class="fas fa-calculator text-white text-4xl"></i>
                            </div>
                            <h1 class="text-5xl md:text-6xl font-bold text-white mb-6 leading-tight">
                                Gestion <span style="color: #fef3cd;">Comptable</span><br>
                                Professionnelle
                            </h1>
                            <p class="text-xl text-gray-200 mb-8 leading-relaxed">
                                Tenue de comptabilité, déclarations fiscales et sociales, 
                                formalités juridiques courantes. Nous gérons votre comptabilité 
                                avec rigueur et expertise.
                            </p>
                       
                            <div class="flex flex-col sm:flex-row gap-4">
                                <a href="{{route('gestion-comptable')}}" class="btn-primary">En savoir plus</a>
                                <a href="{{route('contact')}}" class="btn-secondary">Devis gratuit</a>
                            </div>
                        </div>
                        <div class="hidden lg:block text-center">
                            <i class="fas fa-file-invoice text-white slide-icon-bg" style="font-size: 200px;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2: Conseil Juridique -->
        <div class="hero-slide hero-pattern hero-overlay">
            <div class="floating-element float-1"></div>
            <div class="floating-element float-2"></div>
            <div class="floating-element float-3"></div>
            
            <div class="relative h-full flex items-center">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <div class="slide-content">
                            <div class="service-icon">
                                <i class="fas fa-gavel text-white text-4xl"></i>
                            </div>
                            <h1 class="text-5xl md:text-6xl font-bold text-white mb-6 leading-tight">
                                Conseil <span style="color: #fef3cd;">Juridique</span><br>
                                Expert
                            </h1>
                            <p class="text-xl text-gray-200 mb-8 leading-relaxed">
                                Constitution de sociétés, modifications statutaires, 
                                médiation et arbitrage. Notre expertise juridique 
                                vous accompagne dans tous vos projets.
                            </p>
                       
                            <div class="flex flex-col sm:flex-row gap-4">
                                <a href="{{route(name: 'conseil-juridique')}}" class="btn-primary">En savoir plus</a>
                                <a href="{{route('contact')}}" class="btn-secondary">Consultation</a>
                            </div>
                        </div>
                        <div class="hidden lg:block text-center">
                            <i class="fas fa-balance-scale text-white slide-icon-bg" style="font-size: 200px;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3: Conseil Fiscal -->
        <div class="hero-slide hero-pattern hero-overlay">
            <div class="floating-element float-1"></div>
            <div class="floating-element float-2"></div>
            <div class="floating-element float-3"></div>
            
            <div class="relative h-full flex items-center">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <div class="slide-content">
                            <div class="service-icon">
                                <i class="fas fa-file-invoice-dollar text-white text-4xl"></i>
                            </div>
                            <h1 class="text-5xl md:text-6xl font-bold text-white mb-6 leading-tight">
                                Conseil <span style="color: #fef3cd;">Fiscal</span><br>
                                Spécialisé
                            </h1>
                            <p class="text-xl text-gray-200 mb-8 leading-relaxed">
                                Assistance au contrôle fiscal, gestion du contentieux fiscal, 
                                optimisation fiscale. Nous protégeons vos intérêts fiscaux 
                                avec expertise.
                            </p>
                    
                            <div class="flex flex-col sm:flex-row gap-4">
                                <a href="{{route('conseil-fiscal')}}" class="btn-primary">En savoir plus</a>
                                <a href="{{route('contact')}}" class="btn-secondary">Audit fiscal</a>
                            </div>
                        </div>
                        <div class="hidden lg:block text-center">
                            <i class="fas fa-chart-pie text-white slide-icon-bg" style="font-size: 200px;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 4: Entrepreneuriat -->
        <div class="hero-slide hero-pattern hero-overlay">
            <div class="floating-element float-1"></div>
            <div class="floating-element float-2"></div>
            <div class="floating-element float-3"></div>
            
            <div class="relative h-full flex items-center">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <div class="slide-content">
                            <div class="service-icon">
                                <i class="fas fa-lightbulb text-white text-4xl"></i>
                            </div>
                            <h1 class="text-5xl md:text-6xl font-bold text-white mb-6 leading-tight">
                                Conseil en <span style="color: #fef3cd;">Entrepreneuriat</span>
                            </h1>
                            <p class="text-xl text-gray-200 mb-8 leading-relaxed">
                                Création d'entreprise, étude de faisabilité, 
                                élaboration de business plan. Transformez vos idées 
                                en projets rentables.
                            </p>
                 
                            <div class="flex flex-col sm:flex-row gap-4">
                                <a href="{{route('entrepreneuriat')}}" class="btn-primary">En savoir plus</a>
                                <a href="{{route('contact')}}" class="btn-secondary">Accompagnement</a>
                            </div>
                        </div>
                        <div class="hidden lg:block text-center">
                            <i class="fas fa-rocket text-white slide-icon-bg" style="font-size: 200px;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 5: RH -->
        <div class="hero-slide hero-pattern hero-overlay">
            <div class="floating-element float-1"></div>
            <div class="floating-element float-2"></div>
            <div class="floating-element float-3"></div>
            
            <div class="relative h-full flex items-center">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <div class="slide-content">
                            <div class="service-icon">
                                <i class="fas fa-users text-white text-4xl"></i>
                            </div>
                            <h1 class="text-5xl md:text-6xl font-bold text-white mb-6 leading-tight">
                                Recrutement & <span style="color: #fef3cd;">Management RH</span>
                            </h1>
                            <p class="text-xl text-gray-200 mb-8 leading-relaxed">
                                Définition de poste, aide au recrutement, 
                                diagnostic RH et climat social. Optimisez 
                                votre capital humain.
                            </p>
                    
                            <div class="flex flex-col sm:flex-row gap-4">
                                <a href="{{route('recrutement-rh')}}" class="btn-primary">En savoir plus</a>
                                <a href="{{route('contact')}}" class="btn-secondary">Audit RH</a>
                            </div>
                        </div>
                        <div class="hidden lg:block text-center">
                            <i class="fas fa-user-tie text-white slide-icon-bg" style="font-size: 200px;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 6: Marketing Digital -->
        <div class="hero-slide hero-pattern hero-overlay">
            <div class="floating-element float-1"></div>
            <div class="floating-element float-2"></div>
            <div class="floating-element float-3"></div>
            
            <div class="relative h-full flex items-center">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <div class="slide-content">
                            <div class="service-icon">
                                <i class="fas fa-chart-line text-white text-4xl"></i>
                            </div>
                            <h1 class="text-5xl md:text-6xl font-bold text-white mb-6 leading-tight">
                                Stratégie & <span style="color: #fef3cd;">Marketing Digital</span>
                            </h1>
                            <p class="text-xl text-gray-200 mb-8 leading-relaxed">
                                Création de sites web, référencement SEO/SEA, 
                                copywriting professionnel. Boostez votre 
                                présence digitale.
                            </p>
                    
                            <div class="flex flex-col sm:flex-row gap-4">
                                <a href="{{route('contact')}}" class="btn-primary">En savoir plus</a>
                                <a href="{{route('marketing-digital')}}" class="btn-secondary">Audit digital</a>
                            </div>
                        </div>
                        <div class="hidden lg:block text-center">
                            <i class="fas fa-laptop-code text-white slide-icon-bg" style="font-size: 200px;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <button class="nav-btn prev" id="prevBtn">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button class="nav-btn next" id="nextBtn">
            <i class="fas fa-chevron-right"></i>
        </button>

        <!-- Indicators -->
        <div class="slider-indicators">
            <div class="indicator active" data-slide="0"></div>
            <div class="indicator" data-slide="1"></div>
            <div class="indicator" data-slide="2"></div>
            <div class="indicator" data-slide="3"></div>
            <div class="indicator" data-slide="4"></div>
            <div class="indicator" data-slide="5"></div>
        </div>
    </section>

    <!-- Section suivante -->
 <!-- Section d'introduction -->
<section class="relative py-20 overflow-hidden" style="background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 50%, #f1f5f9 100%);">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: 
            radial-gradient(circle at 25% 25%, #245fa0 2px, transparent 2px),
            radial-gradient(circle at 75% 75%, #fe7a36 2px, transparent 2px);
            background-size: 60px 60px;">
        </div>
    </div>
    
    <!-- Geometric shapes -->
    <div class="absolute top-10 left-10 w-32 h-32 rounded-full opacity-10" style="background: linear-gradient(45deg, #245fa0, #fe7a36);"></div>
    <div class="absolute bottom-20 right-20 w-24 h-24 rounded-full opacity-10" style="background: linear-gradient(-45deg, #fe7a36, #245fa0);"></div>
    <div class="absolute top-1/2 right-10 w-16 h-16 transform rotate-45 opacity-10" style="background: linear-gradient(135deg, #245fa0, #fe7a36);"></div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Texte à gauche -->
            <div class="order-2 lg:order-1">
                <h2 class="text-3xl md:text-4xl font-bold mb-6 leading-tight">
                    <span class="text-gray-800">Bienvenue chez</span> 
                    <span style="color: #245fa0;">Global Gestion</span> 
                    <span class="text-gray-800">cabinet d'expertise comptable, juridique et fiscal à</span> 
                    <span style="color: #fe7a36;">Marrakech</span><span class="text-gray-800">.</span>
                </h2>
                <div class="text-lg text-gray-700 leading-relaxed space-y-4">
                    <p>
                        Spécialisé dans le conseil et l'accompagnement des entreprises. Notre cabinet vous propose un service global en 
                        <strong >comptabilité</strong>, 
                        <strong >fiscalité</strong>, 
                        <strong >conseil juridique et social</strong>, 
                        <strong >conseil en entrepreneuriat</strong> et 
                        <strong >conseil en stratégie et marketing digital</strong>.
                    </p>
                    <p>
                        Implanté à <strong >Marrakech</strong>, nous mettons à votre disposition notre expertise pour vous aider à développer votre activité, 
                        rationnaliser vos décisions et optimiser votre situation juridique et fiscale. Que vous soyez <strong >jeune créateur</strong>, 
                        <strong >chef d'entreprise</strong> ou <strong >professionnel indépendant</strong>, nous vous accompagnons à chaque étape de votre développement 
                        vers un modèle conciliant la <strong >performance</strong>, la <strong >prospérité</strong> et la <strong >durabilité</strong>.
                    </p>
                </div>
                <!-- Bouton d'action avec gradient -->
                <div class="mt-8">
                    <a href="{{ route('expertises.index') }}" 
                       class="inline-flex items-center px-8 py-4 rounded-xl font-semibold text-lg text-white transition-all transform hover:scale-105 hover:shadow-2xl"
                       style="background: linear-gradient(135deg, #245fa0 0%, #fe7a36 100%); box-shadow: 0 10px 25px rgba(36, 95, 160, 0.3);">
                        Découvrir nos services
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
            
            <!-- Image à droite -->
            <div class="order-1 lg:order-2">
                <div class="relative">
                    <!-- Container avec bordure gradient -->
                    <div class="relative p-1 rounded-3xl" style="background: linear-gradient(135deg, #245fa0 0%, #fe7a36 100%);">
                        <!-- Image principale -->
                        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="Cabinet d'expertise comptable Global Gestion Marrakech" 
                             class="w-full h-96 lg:h-[500px] object-cover rounded-3xl">
                    </div>
                    
                    <!-- Badges flottants stylisés -->
                    <div class="absolute top-6 left-6 px-4 py-2 rounded-full shadow-xl backdrop-blur-sm" 
                         style="background: rgba(255, 255, 255, 0.95);">
                        <div class="flex items-center">
                            <i class="fas fa-star mr-2" style="color: #fe7a36;"></i>
                            <span class="font-bold" style="color: #245fa0;">Expert-comptable</span>
                        </div>
                    </div>
                    
                    <div class="absolute bottom-6 right-6 px-4 py-2 rounded-full shadow-xl text-white" 
                         style="background: linear-gradient(135deg, #245fa0 0%, #fe7a36 100%);">
                        <div class="flex items-center">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            <span class="font-bold">Marrakech</span>
                        </div>
                    </div>
                    
                    <!-- Badge années d'expérience -->
                    <div class="absolute top-6 right-6 px-4 py-2 rounded-full shadow-xl backdrop-blur-sm" 
                         style="background: rgba(254, 122, 54, 0.95);">
                        <div class="flex items-center text-white">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            <span class="font-bold">+10 ans</span>
                        </div>
                    </div>
                    
                    <!-- Éléments décoratifs améliorés -->
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 rounded-full opacity-20 blur-2xl" 
                         style="background: linear-gradient(45deg, #fe7a36, #245fa0);"></div>
                    <div class="absolute -top-6 -left-6 w-28 h-28 rounded-full opacity-20 blur-2xl" 
                         style="background: linear-gradient(-45deg, #245fa0, #fe7a36);"></div>
                    
                    <!-- Particules flottantes -->
                    <div class="absolute top-1/4 -left-4 w-3 h-3 rounded-full animate-pulse" 
                         style="background-color: #fe7a36; animation-delay: 0s;"></div>
                    <div class="absolute top-1/2 -right-2 w-2 h-2 rounded-full animate-pulse" 
                         style="background-color: #245fa0; animation-delay: 1s;"></div>
                    <div class="absolute bottom-1/4 -left-2 w-4 h-4 rounded-full animate-pulse" 
                         style="background-color: #245fa0; animation-delay: 0.5s;"></div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Services Overview -->
    <section class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Nos Expertises</h2>
            
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Gestion Comptable -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <div class="p-8">
                        <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
                            <i class="fas fa-calculator text-blue-600 text-2xl"></i>
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
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Formalités juridiques courantes
                            </li>
                        </ul>
                        <a href="{{ route('gestion-comptable') }}" class="text-blue-600 font-semibold hover:text-blue-800 transition-colors">
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
                        <a href="{{ route('conseil-juridique') }}" class="text-blue-600 font-semibold hover:text-blue-800 transition-colors">
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
                        </ul>
                        <a href="{{ route('conseil-fiscal') }}" class="text-blue-600 font-semibold hover:text-blue-800 transition-colors">
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
                                Élaboration de Business Plan
                            </li>
                        </ul>
                        <a href="{{ route('entrepreneuriat') }}" class="text-blue-600 font-semibold hover:text-blue-800 transition-colors">
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
                                Définition de poste & profil
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Aide au recrutement (annonces, sélection)
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Diagnostic RH & climat social
                            </li>
                        </ul>
                        <a href="{{ route('recrutement-rh') }}" class="text-blue-600 font-semibold hover:text-blue-800 transition-colors">
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
                                Création et refonte de site web
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Référencement SEO et SEA
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                Copywriting
                            </li>
                        </ul>
                        <a href="{{ route('marketing-digital') }}" class="text-blue-600 font-semibold hover:text-blue-800 transition-colors">
                            En savoir plus <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    {{-- <section class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Témoignages Clients</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Ce que disent nos clients de notre accompagnement
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Témoignage 1 -->
                <div class="bg-gray-50 rounded-xl p-8 card-hover">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            @for($i = 0; $i < 5; $i++)
                                <i class="fas fa-star"></i>
                            @endfor
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6 italic">"Excellent accompagnement pour la création de notre SARL. L'équipe est très professionnelle et réactive. Je recommande vivement leurs services."</p>
                    <div class="flex items-center">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Client" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <p class="font-semibold text-gray-900">Ahmed Benali</p>
                            <p class="text-sm text-gray-600">Directeur, Tech Solutions</p>
                        </div>
                    </div>
                </div>

                <!-- Témoignage 2 -->
                <div class="bg-gray-50 rounded-xl p-8 card-hover">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            @for($i = 0; $i < 5; $i++)
                                <i class="fas fa-star"></i>
                            @endfor
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6 italic">"Grâce à Global Gestion, notre comptabilité est parfaitement tenue et nous sommes toujours en règle avec les obligations fiscales."</p>
                    <div class="flex items-center">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b182?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Client" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <p class="font-semibold text-gray-900">Fatima El Mansouri</p>
                            <p class="text-sm text-gray-600">Gérante, Boutique Mode</p>
                        </div>
                    </div>
                </div>

                <!-- Témoignage 3 -->
                <div class="bg-gray-50 rounded-xl p-8 card-hover">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            @for($i = 0; $i < 5; $i++)
                                <i class="fas fa-star"></i>
                            @endfor
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6 italic">"Leur expertise en contrôle fiscal nous a été très précieuse. Ils nous ont défendus efficacement auprès de l'administration."</p>
                    <div class="flex items-center">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Client" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <p class="font-semibold text-gray-900">Youssef Alami</p>
                            <p class="text-sm text-gray-600">PDG, Import Export</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- CTA Section -->
    <section class="gradient-bg py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-white mb-4">Prêt à démarrer votre projet ?</h2>
            <p class="text-xl text-gray-200 mb-8 max-w-2xl mx-auto">
                Contactez notre équipe d'experts pour un accompagnement personnalisé dans tous vos projets comptables, juridiques et fiscaux.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="bg-white text-blue-700 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-100 transition-all transform hover:scale-105">
                    Prendre rendez-vous
                </a>
                <a href="tel:+212620307606" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white hover:text-blue-700 transition-all">
                    Appeler maintenant
                </a>
            </div>
        </div>
    </section>

    <!-- Back to top button -->
    <button id="back-to-top" class="fixed bottom-8 right-8 w-12 h-12 bg-blue-600 text-white rounded-full shadow-lg hover:bg-blue-700 transition-all transform hover:scale-110 opacity-0 invisible">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Chat Widget -->
    <div class="fixed bottom-8 left-8 w-14 h-14 bg-green-500 text-white rounded-full shadow-lg cursor-pointer hover:bg-green-600 transition-all transform hover:scale-110 flex items-center justify-center" onclick="openChat()">
        <i class="fas fa-comments text-xl"></i>
    </div>
@endsection

@push('scripts')
<script>
    function openChat() {
        alert('Chat en ligne bientôt disponible!\nEn attendant, contactez-nous par téléphone au +212.6.20.30.76.06 ');
    }
</script>


    <script>
        class ModernHeroSlider {
            constructor() {
                this.currentSlide = 0;
                this.slides = document.querySelectorAll('.hero-slide');
                this.indicators = document.querySelectorAll('.indicator');
                this.prevBtn = document.getElementById('prevBtn');
                this.nextBtn = document.getElementById('nextBtn');
                this.totalSlides = this.slides.length;
                this.isTransitioning = false;
                this.autoPlayInterval = null;
                this.autoPlayDelay = 6000; // 6 seconds
                
                this.init();
            }

            init() {
                this.bindEvents();
                this.startAutoPlay();
                console.log(`Slider initialized with ${this.totalSlides} slides`);
            }

            bindEvents() {
                // Navigation buttons
                this.prevBtn.addEventListener('click', () => this.previousSlide());
                this.nextBtn.addEventListener('click', () => this.nextSlide());

                // Indicators
                this.indicators.forEach((indicator, index) => {
                    indicator.addEventListener('click', () => {
                        if (index !== this.currentSlide) {
                            this.goToSlide(index);
                        }
                    });
                });

                // Pause on hover
                const slider = document.querySelector('.hero-slider');
                slider.addEventListener('mouseenter', () => this.stopAutoPlay());
                slider.addEventListener('mouseleave', () => this.startAutoPlay());

                // Keyboard navigation
                document.addEventListener('keydown', (e) => {
                    if (e.key === 'ArrowLeft') this.previousSlide();
                    if (e.key === 'ArrowRight') this.nextSlide();
                });
            }

            goToSlide(targetIndex) {
                if (this.isTransitioning || targetIndex === this.currentSlide) return;
                
                this.isTransitioning = true;

                // Remove active class from current slide
                this.slides[this.currentSlide].classList.remove('active');
                this.indicators[this.currentSlide].classList.remove('active');

                // Add prev class for smooth transition
                if (targetIndex < this.currentSlide) {
                    this.slides[this.currentSlide].classList.add('prev');
                }

                // Update current slide
                this.currentSlide = targetIndex;

                // Add active class to new slide
                setTimeout(() => {
                    this.slides[this.currentSlide].classList.add('active');
                    this.indicators[this.currentSlide].classList.add('active');
                    
                    // Clean up prev classes
                    this.slides.forEach(slide => slide.classList.remove('prev'));
                    
                    setTimeout(() => {
                        this.isTransitioning = false;
                    }, 800);
                }, 50);
            }

            nextSlide() {
                const nextIndex = (this.currentSlide + 1) % this.totalSlides;
                this.goToSlide(nextIndex);
            }

            previousSlide() {
                const prevIndex = (this.currentSlide - 1 + this.totalSlides) % this.totalSlides;
                this.goToSlide(prevIndex);
            }

            startAutoPlay() {
                this.stopAutoPlay(); // Clear any existing interval
                this.autoPlayInterval = setInterval(() => {
                    this.nextSlide();
                }, this.autoPlayDelay);
            }

            stopAutoPlay() {
                if (this.autoPlayInterval) {
                    clearInterval(this.autoPlayInterval);
                    this.autoPlayInterval = null;
                }
            }

            destroy() {
                this.stopAutoPlay();
                // Remove event listeners if needed
            }
        }

        // Initialize slider when DOM is loaded
        document.addEventListener('DOMContentLoaded', () => {
            const slider = new ModernHeroSlider();
            
            // Store slider instance globally if needed
            window.heroSlider = slider;
        });

        // Handle page visibility change (pause when tab is not active)
        document.addEventListener('visibilitychange', () => {
            if (window.heroSlider) {
                if (document.hidden) {
                    window.heroSlider.stopAutoPlay();
                } else {
                    window.heroSlider.startAutoPlay();
                }
            }
        });
    </script>
@endpush 