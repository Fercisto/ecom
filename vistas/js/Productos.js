let productosTodos = [];
let productosFiltrados = [];
let paginaActual = 1;
const productosPorPagina = 9;

function cargarProductos() {
    fetch('../ajax/Producto.php')
    .then(res => res.json())
    .then(productos => {
        productosTodos = productos;
        productosFiltrados = productos;
        renderProductos();
        agregarListeners();
    })
    .catch(error => console.error('Error al cargar los productos:', error));
}

function agregarListeners() {
    const searchInput = document.getElementById('search-input');
    if(searchInput) {
        document.querySelectorAll('[id^="price-"]').forEach(cb => {
            cb.addEventListener('change', aplicarFiltros);
        });
    }
}

function aplicarFiltros() {
    const search = document.getElementById('search-input')?.value.toLowerCase() || '';
    const precios = Array.from(document.querySelectorAll('[id^="price-"]:checked')).map(c => c.id);

    cloneElement.querySelector('.img-prod').src = `../assets/images/products/product-${p.id_producto % 9 + 1}.jpg`;
    cloneElement.querySelector('.img-prod').alt = p.nombre_producto;
    cloneElement.querySelector('.name-prod').textContent = p.nombre_producto;
    cloneElement.querySelector('.name-prod').href = `product-detail.php?id=${p.id_producto}`;
    cloneElement.querySelector('.detail-btn-prod').href = `product-detail.php?id=${p.id_producto}`;
    cloneElement.querySelector('.price-prod').textContent = `$${p.precio_producto.toFixed(2)}`;
    cloneElement.querySelector('.price2-prod').textContent =  `$${(p.precio_producto * 1.2).toFixed(2)}`;
}