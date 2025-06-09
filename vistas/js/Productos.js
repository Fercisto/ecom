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
    const search = document.getElementById('search-input').value.toLowerCase() || '';
    const precios = Array.from(document.querySelectorAll('[id^="price-"]:checked')).map(c => c.id);
}