<?php
require_once 'Biblioteca.php';

$biblioteca = new Biblioteca();

$biblioteca->agregarLibro("El Quijote", "Miguel de Cervantes", "Novela");
$biblioteca->agregarLibro("Cien años de soledad", "Gabriel García Márquez", "Realismo mágico");
$biblioteca->agregarLibro("1984", "George Orwell", "Ciencia ficción");

$todosLosLibros = $biblioteca->obtenerTodosLosLibros();
?>