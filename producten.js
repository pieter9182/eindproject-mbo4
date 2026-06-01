const filterBtns = document.querySelectorAll('.filter-btn');
const sortBtns = document.querySelectorAll('.sort-btn');
const grid = document.querySelector('.producten-grid');

let activeFilter = 'all';
let activeSort = 'none';

function updateGrid() {
    const cards = Array.from(document.querySelectorAll('.product-card'));

    // Sorteren
    if (activeSort === 'laag-hoog') {
        cards.sort((a, b) => a.dataset.prijs - b.dataset.prijs);
    } else if (activeSort === 'hoog-laag') {
        cards.sort((a, b) => b.dataset.prijs - a.dataset.prijs);
    } else {
        cards.sort((a, b) => a.dataset.prijs - b.dataset.prijs); // standaard volgorde via id
        cards.sort((a, b) => {
            const idA = parseInt(a.querySelector('.product-naam').textContent.replace('Schilderij #', ''));
            const idB = parseInt(b.querySelector('.product-naam').textContent.replace('Schilderij #', ''));
            return idA - idB;
        });
    }

    // Volgorde in DOM aanpassen
    cards.forEach(card => grid.appendChild(card));

    // Filteren (tonen/verbergen)
    cards.forEach(card => {
        const match = activeFilter === 'all' || card.dataset.categorie === activeFilter;
        card.style.display = match ? 'flex' : 'none';
    });
}

filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        filterBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        activeFilter = btn.dataset.filter;
        updateGrid();
    });
});

sortBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        sortBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        activeSort = btn.dataset.sort;
        updateGrid();
    });
});