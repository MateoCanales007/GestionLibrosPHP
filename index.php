<?php
require_once 'Libro.php';
require_once 'GestorLibros.php';
require_once 'BuscadorLibros.php';

// instancias de gestor y buscador
$gestor = new GestorLibros();
$buscador = new BuscadorLibros();

// ejemplos libros
$gestor->agregarLibro(new Libro("El Quijote", "Miguel de Cervantes", "Novela"));
$gestor->agregarLibro(new Libro("Cien años de soledad", "Gabriel García Márquez", "Realismo mágico"));
$gestor->agregarLibro(new Libro("1984", "George Orwell", "Ciencia ficción"));

// Mostrar todos los libros
print "Todos los libros:\n";
foreach ($gestor->obtenerTodosLosLibros() as $libro) {
    print $libro->getTitulo() . " - " . $libro->getAutor() . " (" . $libro->getCategoria() . ")\n";
}

// Buscar por título
print "\nBúsqueda por título 'Quijote':\n";
$resultados = $buscador->buscarPorTitulo($gestor->obtenerTodosLosLibros(), "Quijote");
foreach ($resultados as $libro) {
    print $libro->getTitulo() . " - " . $libro->getAutor() . "\n";
}

// Buscar por autor
print "\nBúsqueda por autor 'García Márquez':\n";
$resultados = $buscador->buscarPorAutor($gestor->obtenerTodosLosLibros(), "García Márquez");
foreach ($resultados as $libro) {
    print $libro->getTitulo() . " - " . $libro->getAutor() . "\n";
}

// Buscar por categoría
print "\nBúsqueda por categoría 'Ciencia ficción':\n";
$resultados = $buscador->buscarPorCategoria($gestor->obtenerTodosLosLibros(), "Ciencia ficción");
foreach ($resultados as $libro) {
    print $libro->getTitulo() . " - " . $libro->getAutor() . "\n";
}
?>
