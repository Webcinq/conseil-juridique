<!-- Footer -->
<footer class="bg-gray-900 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Logo et Description -->
            <div class="col-span-1 md:col-span-2">
                <div class="flex items-center mb-6">
                    <div class="w-10 h-10 gradient-bg rounded-lg flex items-center justify-center">
                        <i class="fas fa-balance-scale text-white text-xl"></i>
                    </div>
                    <span class="ml-3 text-2xl font-bold">Global Gestion</span>
                </div>
                <p class="text-gray-400 mb-6 max-w-md">
                    Cabinet d'expertise comptable, juridique et fiscal à Marrakech. 
                    Votre partenaire de confiance pour accompagner le développement de votre entreprise depuis plus de 25 ans.
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-blue-600 transition-colors">
                        <i class="fab fa-facebook text-lg"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-blue-400 transition-colors">
                        <i class="fab fa-linkedin text-lg"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-blue-500 transition-colors">
                        <i class="fab fa-twitter text-lg"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-red-600 transition-colors">
                        <i class="fab fa-youtube text-lg"></i>
                    </a>
                </div>
            </div>
            
            <!-- Services -->
            <div>
                <h3 class="text-lg font-semibold mb-6">Nos Services</h3>
                <ul class="space-y-3">
                    <li><a href="{{ route('gestion-comptable') }}" class="text-gray-400 hover:text-white transition-colors">Gestion Comptable</a></li>
                    <li><a href="{{ route('conseil-juridique') }}" class="text-gray-400 hover:text-white transition-colors">Conseil Juridique</a></li>
                    <li><a href="{{ route('conseil-fiscal') }}" class="text-gray-400 hover:text-white transition-colors">Conseil Fiscal</a></li>
                    <li><a href="{{ route('entrepreneuriat') }}" class="text-gray-400 hover:text-white transition-colors">Création d'Entreprise</a></li>
                    <li><a href="{{ route('recrutement-rh') }}" class="text-gray-400 hover:text-white transition-colors">Recrutement & RH</a></li>
                    <li><a href="{{ route('marketing-digital') }}" class="text-gray-400 hover:text-white transition-colors">Marketing Digital</a></li>
                </ul>
            </div>
            
            <!-- Liens Utiles -->
            <div>
                <h3 class="text-lg font-semibold mb-6">Liens Utiles</h3>
                <ul class="space-y-3">
                    <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-white transition-colors">À propos</a></li>
                    <li><a href="{{ route('blog.index') }}" class="text-gray-400 hover:text-white transition-colors">Blog</a></li>
                    <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-white transition-colors">Contact</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">FAQ</a></li>
                    <li><a href="{{ route('constitution-sarl') }}" class="text-gray-400 hover:text-white transition-colors">Guide Création SARL</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Témoignages</a></li>
                </ul>
            </div>
        </div>
        
        <!-- Séparateur -->
        <div class="border-t border-gray-800 mt-12 pt-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Contact Info -->
                <div>
                    <h4 class="text-sm font-semibold text-gray-300 uppercase tracking-wider mb-3">Contact</h4>
                    <div class="space-y-2 text-gray-400 text-sm">
                        <p><i class="fas fa-map-marker-alt mr-2"></i>123 Avenue Mohammed V, Marrakech 40000</p>
                        <p><i class="fas fa-phone mr-2"></i>+212 5 24 XX XX XX</p>
                        <p><i class="fas fa-envelope mr-2"></i>contact@global-gestion.ma</p>
                        <p><i class="fas fa-fax mr-2"></i>+212 5 24 XX XX XX</p>
                    </div>
                </div>
                
                <!-- Horaires -->
                <div>
                    <h4 class="text-sm font-semibold text-gray-300 uppercase tracking-wider mb-3">Horaires d'ouverture</h4>
                    <div class="space-y-2 text-gray-400 text-sm">
                        <p><strong>Lundi - Vendredi:</strong> 9h00 - 18h00</p>
                        <p><strong>Samedi:</strong> 9h00 - 13h00</p>
                        <p><strong>Dimanche:</strong> Fermé</p>
                        <p class="text-yellow-400 mt-2"><i class="fas fa-info-circle mr-1"></i>Rendez-vous sur appointment</p>
                    </div>
                </div>
                
                <!-- Newsletter -->
                <div>
                    <h4 class="text-sm font-semibold text-gray-300 uppercase tracking-wider mb-3">Newsletter</h4>
                    <p class="text-gray-400 text-sm mb-3">Recevez nos actualités juridiques, fiscales et comptables</p>
                    <form class="flex" onsubmit="subscribeNewsletter(event)">
                        <input type="email" placeholder="Votre email" required 
                               class="flex-1 px-3 py-2 bg-gray-800 border border-gray-700 rounded-l-lg text-white text-sm focus:outline-none focus:border-blue-500">
                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-r-lg hover:bg-blue-700 transition-colors">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Copyright et Mentions Légales -->
        <div class="border-t border-gray-800 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center">
            <div class="text-center md:text-left">
                <p class="text-sm text-gray-500">© {{ date('Y') }} Global Gestion. Tous droits réservés.</p>
            </div>
            <div class="flex space-x-6 mt-4 md:mt-0">
                <a href="#" class="text-sm text-gray-400 hover:text-white transition-colors">Mentions Légales</a>
                <a href="#" class="text-sm text-gray-400 hover:text-white transition-colors">Politique de Confidentialité</a>
                <a href="#" class="text-sm text-gray-400 hover:text-white transition-colors">CGV</a>
                <a href="#" class="text-sm text-gray-400 hover:text-white transition-colors">Plan du Site</a>
            </div>
        </div>
    </div>
</footer>

<script>
function subscribeNewsletter(event) {
    event.preventDefault();
    const email = event.target.querySelector('input[type="email"]').value;
    if (email) {
        alert('Merci pour votre inscription à notre newsletter!');
        event.target.reset();
    }
}
</script>