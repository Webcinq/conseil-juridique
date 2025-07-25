@extends('layouts.app')

@section('title', 'Contact - Global Gestion Cabinet Comptable Marrakech')
@section('meta-description', 'Contactez Global Gestion, votre cabinet comptable à Marrakech. Prendre rendez-vous pour vos besoins en comptabilité, fiscalité et conseil juridique.')

@section('content')
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
    <section class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="w-20 h-20 bg-blue-100 rounded-xl flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-phone text-blue-600 text-3xl"></i>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Contactez-nous</h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Prêt à démarrer votre projet ? Contactez notre équipe d'experts pour un accompagnement personnalisé 
                    dans tous vos besoins comptables, juridiques et fiscaux.
                </p>
            </div>
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
                                    <p class="text-gray-600">123 Avenue Mohammed V<br>Marrakech 40000, Maroc</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-phone text-green-600 text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900 mb-1">Téléphone</h3>
                                    <p class="text-gray-600">+212 5 24 XX XX XX</p>
                                    <p class="text-gray-600">+212 6 XX XX XX XX (Mobile)</p>
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
                                    <p class="text-gray-600">+212 5 24 XX XX XX</p>
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