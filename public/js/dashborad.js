// resources/js/student-dashboard.js
document.addEventListener('DOMContentLoaded', function() {
    // Gestion des filtres de catégorie
    const filterButtons = document.querySelectorAll('.category-badge, .filter-active');
    const courseCards = document.querySelectorAll('.course-card');

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

            // Ici vous pouvez ajouter la logique de filtrage
            const category = this.textContent.trim();
            console.log('Filtrer par:', category);
        });
    });

    // Gestion de la recherche
    const searchInput = document.querySelector('input[type="text"]');
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            console.log('Recherche:', searchTerm);
            // Ici vous pouvez ajouter la logique de recherche
        });
    }
});