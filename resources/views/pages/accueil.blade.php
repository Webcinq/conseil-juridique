@extends('layouts.app')

@section('title', 'Global Gestion - Cabinet d\'expertise comptable, juridique et fiscal à Marrakech')
@section('meta-description', 'Cabinet comptable à Marrakech. Services en comptabilité, fiscalité et conseil juridique pour les entreprises et les particuliers.')

@section('content')
    <!-- Hero Section -->
  <section class="relative overflow-hidden" style="background: linear-gradient(135deg, #245fa0 0%, #fe7a36 100%); min-height: 600px;">
    <!-- Pattern overlay -->
    <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.1\'%3E%3Ccircle cx=\'30\' cy=\'30\' r=\'4\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E'); opacity: 0.5;"></div>
    
    <!-- Dark overlay -->
    <div class="absolute inset-0 bg-black opacity-10"></div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-28">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 leading-tight animate-fade-in">
                Bienvenue chez <span style="color: #fef3cd;">Global Gestion</span><br>
                Cabinet d'expertise comptable, juridique et fiscal
            </h1>
            <p class="text-xl text-gray-200 mb-8 max-w-4xl mx-auto animate-fade-in">
                Spécialisé dans le conseil et l'accompagnement des entreprises à Marrakech. 
                Nous vous proposons un service global en <strong>comptabilité</strong>, <strong>fiscalité</strong>, 
                <strong>conseil juridique et social</strong>, <strong>conseil en entrepreneuriat</strong> et 
                <strong>conseil en stratégie et marketing digital</strong>.
            </p>
            <div class="text-lg text-gray-200 mb-8 animate-fade-in">
                Implanté à Marrakech, nous mettons à votre disposition notre expertise pour vous aider à développer votre activité, 
                rationnaliser vos décisions et optimiser votre situation juridique et fiscale. Que vous soyez jeune créateur, 
                chef d'entreprise ou professionnel indépendant, nous vous accompagnons à chaque étape de votre développement 
                vers un modèle conciliant la performance, la prospérité et la durabilité.
            </div>
            <div class="flex flex-col sm:flex-row gap-4 justify-center animate-fade-in">
                <a href="{{ route('expertises.index') }}" class="bg-white px-8 py-4 rounded-lg font-semibold text-lg transition-all transform hover:scale-105" style="color: #245fa0;" onmouseover="this.style.backgroundColor='#f3f4f6'" onmouseout="this.style.backgroundColor='white'">
                    Découvrir nos services
                </a>
                <a href="{{ route('contact') }}" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold text-lg transition-all" onmouseover="this.style.backgroundColor='white'; this.style.color='#245fa0'" onmouseout="this.style.backgroundColor='transparent'; this.style.color='white'">
                    Prendre rendez-vous
                </a>
            </div>
        </div>
    </div>
    
    <!-- Floating Elements avec vos couleurs -->
    <div class="absolute top-20 left-10 w-20 h-20 rounded-full opacity-20 animate-pulse" style="background-color: #fef3cd;"></div>
    <div class="absolute bottom-20 right-10 w-16 h-16 rounded-full opacity-20 animate-pulse" style="background-color: #fe7a36; animation-delay: 1s;"></div>
    <div class="absolute top-1/2 right-20 w-12 h-12 rounded-full opacity-20 animate-pulse" style="background-color: #245fa0; animation-delay: 0.5s;"></div>
</section>


    <!-- Services Overview -->
    <section class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Nos Expertises</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    6 pôles de conseil pour vous accompagner à chaque étape de votre développement
                </p>
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
    <section class="bg-white py-20">
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
    </section>

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
@endpush 