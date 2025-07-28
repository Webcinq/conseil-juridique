@extends('layouts.app')

@section('title', 'Assistance au Contrôle Fiscal - Assistance, préparation et défense pour Entreprises')
@section('meta-description', 'Vous faites l\'objet d\'un contrôle fiscal ? Notre cabinet vous assiste à chaque étape : préparation des justificatifs, réponses à l\'administration, défense de vos intérêts.')
@section('keywords', 'contrôle fiscal marrakech, assistance contrôle fiscal, vérification fiscale, redressement fiscal, défense fiscale')

@section('content')
    <!-- Breadcrumb -->
    <div class="bg-gray-50 py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="{{ route('accueil') }}" class="text-blue-600 hover:text-blue-800">Accueil</a>
                <i class="fas fa-chevron-right text-gray-400"></i>
                <a href="{{ route('conseil-fiscal') }}" class="text-blue-600 hover:text-blue-800">Conseil Fiscal</a>
                <i class="fas fa-chevron-right text-gray-400"></i>
                <span class="text-gray-600">Contrôle Fiscal</span>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="w-20 h-20 bg-red-100 rounded-xl flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-shield-alt text-red-600 text-3xl"></i>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Face au Contrôle Fiscal : Des Experts Fiscalistes pour Vous Défendre Efficacement
                </h1>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                    Vous venez de recevoir un avis de vérification fiscale ? Vous êtes déjà sous contrôle fiscal ou face à un redressement fiscal ? 
                    Contactez-nous et bénéficiez de l'expertise de notre équipe de fiscalistes qui maîtrise parfaitement les procédures liées à la vérification fiscale 
                    et au contentieux de l'impôt au Maroc.
                </p>
            </div>
        </div>
    </section>

    <!-- Alerte Urgence -->
    <section class="bg-red-600 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <div class="flex items-center justify-center mb-4">
                    <i class="fas fa-exclamation-triangle text-white text-3xl mr-4"></i>
                    <h2 class="text-2xl font-bold text-white">URGENCE CONTRÔLE FISCAL</h2>
                </div>
                <p class="text-red-100 text-lg mb-6">
                    Vous avez reçu un avis de vérification ? Ne restez pas seul face à l'administration fiscale.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="tel:+212524XXXXXX" class="bg-white text-red-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                        <i class="fas fa-phone mr-2"></i>
                        Appel d'urgence : +212 5 24 XX XX XX
                    </a>
                    <a href="{{ route('contact') }}" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-red-600 transition-colors">
                        Contact immédiat
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Notre Expertise -->
    <section class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Notre Cabinet Spécialisé en Fiscalité des Entreprises</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Notre cabinet basé à Marrakech, spécialisé en fiscalité des entreprises et contentieux fiscaux, 
                    intervient rapidement pour défendre vos intérêts avec rigueur et professionnalisme.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
                <div>
                    <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Contrôle fiscal assistance" 
                         class="rounded-xl shadow-lg w-full h-96 object-cover">
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Une Expertise Reconnue</h3>
                    <p class="text-gray-600 mb-6">
                        Grâce à nos connaissances techniques très approfondies et notre expérience terrain multisectorielle, 
                        nous vous offrons un accompagnement solide à chaque étape du processus, pour vous aider à vous défendre 
                        tranquillement face à l'administration fiscale.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                            <span class="text-gray-700">Plus de 15 ans d'expérience en contentieux fiscal</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                            <span class="text-gray-700">Maîtrise parfaite des procédures de vérification</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                            <span class="text-gray-700">Expérience multisectorielle</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                            <span class="text-gray-700">Approche personnalisée selon votre situation</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Services en Matière de Contrôle Fiscal -->
            <div class="bg-white rounded-xl shadow-lg p-8">
                <h3 class="text-3xl font-bold text-gray-900 mb-8 text-center">Nos Services en Matière de Contrôle Fiscal</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Préparation -->
                    <div class="bg-blue-50 rounded-xl p-6">
                        <div class="w-12 h-12 bg-blue-600 text-white rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-clipboard-check"></i>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 mb-4">Préparation au Contrôle Fiscal</h4>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <i class="fas fa-arrow-right text-blue-600 mr-3 mt-1"></i>
                                <span class="text-gray-700">Vérification des pièces comptables et mise en conformité</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-arrow-right text-blue-600 mr-3 mt-1"></i>
                                <span class="text-gray-700">Organisation et classement des documents</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-arrow-right text-blue-600 mr-3 mt-1"></i>
                                <span class="text-gray-700">Identification des points de vigilance</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Assistance -->
                    <div class="bg-green-50 rounded-xl p-6">
                        <div class="w-12 h-12 bg-green-600 text-white rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 mb-4">Assistance Complète Pendant le Contrôle</h4>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <i class="fas fa-arrow-right text-green-600 mr-3 mt-1"></i>
                                <span class="text-gray-700">Accompagnement lors des échanges avec l'inspecteur des impôts</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-arrow-right text-green-600 mr-3 mt-1"></i>
                                <span class="text-gray-700">Conseils sur les réponses à apporter</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-arrow-right text-green-600 mr-3 mt-1"></i>
                                <span class="text-gray-700">Présence lors des entretiens</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Redressement -->
                    <div class="bg-purple-50 rounded-xl p-6">
                        <div class="w-12 h-12 bg-purple-600 text-white rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-file-invoice"></i>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 mb-4">Gestion du Redressement Fiscal</h4>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <i class="fas fa-arrow-right text-purple-600 mr-3 mt-1"></i>
                                <span class="text-gray-700">Analyse de la proposition de rectification</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-arrow-right text-purple-600 mr-3 mt-1"></i>
                                <span class="text-gray-700">Rédaction d'une réponse claire et adaptée</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-arrow-right text-purple-600 mr-3 mt-1"></i>
                                <span class="text-gray-700">Négociation avec l'administration</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Évaluation -->
                    <div class="bg-yellow-50 rounded-xl p-6">
                        <div class="w-12 h-12 bg-yellow-600 text-white rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 mb-4">Évaluation Réaliste des Chances</h4>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <i class="fas fa-arrow-right text-yellow-600 mr-3 mt-1"></i>
                                <span class="text-gray-700">Détermination de la meilleure voie de recours</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-arrow-right text-yellow-600 mr-3 mt-1"></i>
                                <span class="text-gray-700">Négociation d'un arrangement amiable</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-arrow-right text-yellow-600 mr-3 mt-1"></i>
                                <span class="text-gray-700">Saisie des commissions fiscales ou recours tribunal</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Notre Accompagnement -->
    <section class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Notre Accompagnement aux Entreprises : De la Vérification à la Contestation</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Nous travaillons principalement avec des TPE, PME, professions libérales et particuliers confrontés à un contrôle fiscal ou à un redressement.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <!-- TPE -->
                <div class="text-center p-6 bg-blue-50 rounded-xl">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-store text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">TPE & PME</h3>
                    <p class="text-gray-600 text-sm">Accompagnement adapté aux petites et moyennes entreprises</p>
                </div>

                <!-- Professions Libérales -->
                <div class="text-center p-6 bg-green-50 rounded-xl">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-user-tie text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Professions Libérales</h3>
                    <p class="text-gray-600 text-sm">Expertise dédiée aux professionnels indépendants</p>
                </div>

                <!-- Particuliers -->
                <div class="text-center p-6 bg-purple-50 rounded-xl">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-user text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Particuliers</h3>
                    <p class="text-gray-600 text-sm">Conseils sur mesure pour les contribuables personnes physiques</p>
                </div>
            </div>

            <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-xl p-8">
                <div class="text-center mb-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Notre Approche Personnalisée</h3>
                    <p class="text-gray-600">
                        Notre équipe intervient pour fournir des conseils sur mesure avant, pendant et après la vérification fiscale. 
                        Chaque situation est traitée précisément avec rigueur, professionnalisme et engagement.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="text-center">
                        <div class="w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center mx-auto mb-3 font-bold">1</div>
                        <h4 class="font-semibold text-gray-900 mb-2">Analyse</h4>
                        <p class="text-gray-600 text-sm">Étude approfondie de votre dossier</p>
                    </div>
                    <div class="text-center">
                        <div class="w-12 h-12 bg-green-600 text-white rounded-full flex items-center justify-center mx-auto mb-3 font-bold">2</div>
                        <h4 class="font-semibold text-gray-900 mb-2">Stratégie</h4>
                        <p class="text-gray-600 text-sm">Élaboration d'une défense sur mesure</p>
                    </div>
                    <div class="text-center">
                        <div class="w-12 h-12 bg-purple-600 text-white rounded-full flex items-center justify-center mx-auto mb-3 font-bold">3</div>
                        <h4 class="font-semibold text-gray-900 mb-2">Action</h4>
                        <p class="text-gray-600 text-sm">Mise en œuvre de la défense</p>
                    </div>
                    <div class="text-center">
                        <div class="w-12 h-12 bg-red-600 text-white rounded-full flex items-center justify-center mx-auto mb-3 font-bold">4</div>
                        <h4 class="font-semibold text-gray-900 mb-2">Suivi</h4>
                        <p class="text-gray-600 text-sm">Accompagnement jusqu'à la résolution</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Prévention des Risques -->
    <section class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Risque Fiscal : Comment Sécuriser l'Avenir de Votre Entreprise</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Anticiper les risques fiscaux est essentiel pour la pérennité de votre entreprise. 
                    C'est pourquoi nous mettons à votre disposition des solutions sur mesure.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Services Préventifs -->
                <div class="bg-white rounded-xl shadow-lg p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">
                        <i class="fas fa-shield-alt text-blue-600 mr-3"></i>
                        Services Préventifs
                    </h3>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-4 mt-1">
                                <i class="fas fa-lightbulb text-blue-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-2">Séances de Sensibilisation</h4>
                                <p class="text-gray-600 text-sm">
                                    Des séances de sensibilisation pratiques pour mieux comprendre les enjeux fiscaux actuels : 
                                    lois de finances, procédures fiscales, recouvrement des créances publiques.
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center mr-4 mt-1">
                                <i class="fas fa-graduation-cap text-green-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-2">Programmes de Formation</h4>
                                <p class="text-gray-600 text-sm">
                                    Des programmes de formation personnalisés sur les aspects clés de la fiscalité, 
                                    incluant le contrôle fiscal et le contentieux de l'impôt.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Audits et Analyses -->
                <div class="bg-white rounded-xl shadow-lg p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">
                        <i class="fas fa-search text-purple-600 mr-3"></i>
                        Audits et Analyses
                    </h3>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center mr-4 mt-1">
                                <i class="fas fa-chart-bar text-purple-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-2">Missions d'Audit Fiscal</h4>
                                <p class="text-gray-600 text-sm">
                                    Des missions d'audit fiscal approfondies pour évaluer et prévenir le risque fiscal potentiel, 
                                    en vous fournissant des recommandations concrètes.
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-yellow-100 rounded-full flex items-center justify-center mr-4 mt-1">
                                <i class="fas fa-cogs text-yellow-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-2">Analyse des Montages Complexes</h4>
                                <p class="text-gray-600 text-sm">
                                    Une analyse détaillée du risque fiscal lié à des montages fiscaux et financiers complexes, 
                                    pour vous offrir une vision claire et éviter des surprises désagréables.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="bg-white py-20">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Questions Fréquentes</h2>
                <p class="text-xl text-gray-600">Réponses aux questions les plus courantes sur le contrôle fiscal</p>
            </div>

            <div class="space-y-6">
                <div class="bg-gray-50 rounded-lg p-6">
                    <button onclick="toggleFAQ(this)" class="w-full text-left flex items-center justify-between">
                        <h3 class="text-lg font-semibold text-gray-900">Comment savoir si je vais être contrôlé fiscalement ?</h3>
                        <i class="fas fa-chevron-down text-gray-400"></i>
                    </button>
                    <div class="hidden mt-4">
                        <p class="text-gray-600">
                            L'administration vous envoie un avis de vérification. Les contrôles peuvent aussi débuter par une simple demande de justificatifs. 
                            Il est important de ne pas ignorer ces demandes et de réagir rapidement.
                        </p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-lg p-6">
                    <button onclick="toggleFAQ(this)" class="w-full text-left flex items-center justify-between">
                        <h3 class="text-lg font-semibold text-gray-900">Que dois-je préparer pour un contrôle fiscal ?</h3>
                        <i class="fas fa-chevron-down text-gray-400"></i>
                    </button>
                    <div class="hidden mt-4">
                        <p class="text-gray-600">
                            Vos documents comptables (journaux, bilans, factures), les déclarations fiscales récentes et toute pièce justificative utile. 
                            Il est recommandé de faire appel à un professionnel pour vous accompagner dans cette préparation.
                        </p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-lg p-6">
                    <button onclick="toggleFAQ(this)" class="w-full text-left flex items-center justify-between">
                        <h3 class="text-lg font-semibold text-gray-900">Puis-je me faire accompagner lors d'un contrôle fiscal ?</h3>
                        <i class="fas fa-chevron-down text-gray-400"></i>
                    </button>
                    <div class="hidden mt-4">
                        <p class="text-gray-600">
                            Oui, un expert-comptable, un comptable agréé ou un professionnel de la fiscalité peut vous assister, 
                            préparer votre dossier et vous représenter lors des échanges avec l'administration. C'est fortement recommandé.
                        </p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-lg p-6">
                    <button onclick="toggleFAQ(this)" class="w-full text-left flex items-center justify-between">
                        <h3 class="text-lg font-semibold text-gray-900">Combien de temps dure un contrôle fiscal ?</h3>
                        <i class="fas fa-chevron-down text-gray-400"></i>
                    </button>
                    <div class="hidden mt-4">
                        <p class="text-gray-600">
                            Cela dépend du type de contrôle (sur pièces ou sur place) mais peut varier de quelques semaines à 3 mois. 
                            La complexité de votre dossier et votre coopération influencent également la durée.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Final -->
    <section class="bg-gradient-to-r from-red-600 to-orange-600 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-white mb-4">Besoin d'une Assistance lors d'un Contrôle Fiscal ?</h2>
            <p class="text-xl text-red-100 mb-8 max-w-3xl mx-auto">
                Vous avez reçu un avis de vérification ? Prenez contact dès aujourd'hui avec notre cabinet à Marrakech 
                pour préparer votre défense sereinement. Notre expertise est votre meilleur atout.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="tel:+212524XXXXXX" class="bg-white text-red-600 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-100 transition-all transform hover:scale-105">
                    <i class="fas fa-phone mr-2"></i>
                    Appel d'urgence
                </a>
                <a href="{{ route('contact') }}" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white hover:text-red-600 transition-all">
                    Prendre rendez-vous
                </a>
            </div>
            <div class="mt-8 text-center">
                <p class="text-red-100 text-sm">
                    Cabinet fiscal à Marrakech - Assistance au contrôle fiscal, défense en cas de contentieux, 
                    optimisation fiscale, fiscalité des sociétés et des indépendants.
                </p>
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
</script>
@endpush