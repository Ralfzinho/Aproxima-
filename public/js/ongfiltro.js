// Filter functionality
const filterCheckboxes = document.querySelectorAll('.filter-checkbox');
const ongCards = document.querySelectorAll('.ong-card');
const searchInput = document.getElementById('search-input');
const resultsCount = document.getElementById('results-count');
const totalOngs = document.getElementById('total-ongs');

function updateResults() {
    const activeFilters = {
        causa: [],
        regiao: [],
        tipo: []
    };

    // Get active filters
    filterCheckboxes.forEach(checkbox => {
        if (checkbox.checked) {
            const filterType = checkbox.dataset.filter;
            const filterValue = checkbox.dataset.value;
            activeFilters[filterType].push(filterValue);
        }
    });

    const searchTerm = searchInput.value.toLowerCase();
    let visibleCount = 0;

    ongCards.forEach(card => {
        let shouldShow = true;

        // Check search term
        if (searchTerm) {
            const cardText = card.textContent.toLowerCase();
            if (!cardText.includes(searchTerm)) {
                shouldShow = false;
            }
        }

        // Check filters
        if (shouldShow) {
            // Check causa filter
            if (activeFilters.causa.length > 0) {
                const cardCausa = card.dataset.causa;
                if (!activeFilters.causa.includes(cardCausa)) {
                    shouldShow = false;
                }
            }

            // Check regiao filter
            if (activeFilters.regiao.length > 0) {
                const cardRegiao = card.dataset.regiao;
                if (!activeFilters.regiao.includes(cardRegiao)) {
                    shouldShow = false;
                }
            }

            // Check tipo filter
            if (activeFilters.tipo.length > 0) {
                const cardTipos = card.dataset.tipo.split(',');
                const hasMatchingTipo = activeFilters.tipo.some(tipo => cardTipos.includes(tipo));
                if (!hasMatchingTipo) {
                    shouldShow = false;
                }
            }
        }

        if (shouldShow) {
            card.style.display = 'block';
            visibleCount++;
        } else {
            card.style.display = 'none';
        }
    });

    resultsCount.textContent = `Mostrando ${visibleCount} de 250 organizações`;
}

// Add event listeners
filterCheckboxes.forEach(checkbox => {
    checkbox.addEventListener('change', updateResults);
});

searchInput.addEventListener('input', updateResults);

// Clear filters function
function clearFilters() {
    filterCheckboxes.forEach(checkbox => {
        checkbox.checked = false;
    });
    searchInput.value = '';
    updateResults();
}

// Sort functionality
const sortSelect = document.getElementById('sort-select');
sortSelect.addEventListener('change', function () {
    const sortValue = this.value;
    const grid = document.getElementById('ongs-grid');
    const cards = Array.from(ongCards);

    cards.sort((a, b) => {
        switch (sortValue) {
            case 'nome':
                const nameA = a.querySelector('h3').textContent;
                const nameB = b.querySelector('h3').textContent;
                return nameA.localeCompare(nameB);
            case 'localizacao':
                const locA = a.querySelector('.text-sm.text-gray-600').textContent;
                const locB = b.querySelector('.text-sm.text-gray-600').textContent;
                return locA.localeCompare(locB);
            case 'causa':
                return a.dataset.causa.localeCompare(b.dataset.causa);
            default:
                return 0;
        }
    });

    // Re-append sorted cards
    cards.forEach(card => grid.appendChild(card));
});

