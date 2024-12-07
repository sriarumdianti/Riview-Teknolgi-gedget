// Data gadget baru
const newGadget = {
    image: 'gadget6.jpg',
    name: 'Headphone JKL',
    description: 'Headphone dengan suara berkualitas tinggi dan baterai tahan lama.',
    price: 'Rp 750.000'
};

// Fungsi untuk menambahkan gadget baru ke katalog
function addGadgetToCatalog(gadget) {
    const catalog = document.getElementById('catalog');
    const newItem = document.createElement('div');
    newItem.className = 'catalog-item';
    newItem.innerHTML = `
        <img src="${gadget.image}" alt="${gadget.name}">
        <h3>${gadget.name}</h3>
        <p>${gadget.description}</p>
        <p class="price">${gadget.price}</p>
    `;
    catalog.appendChild(newItem);
}

// Event listener untuk tombol tambah gadget
document.getElementById('addItemButton').addEventListener('click', function() {
    addGadgetToCatalog(newGadget);
});