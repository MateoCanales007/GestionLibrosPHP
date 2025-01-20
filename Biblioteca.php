<?php

class Biblioteca {
    private $libros = array();

    // método que añade un libro a la biblioteca
    public function agregarLibro($libro) {
        $this -> libros[] = $libro;
    }

    // método que busca un libro en la biblioteca por su título
    public function buscarLibro($titulo) {
        foreach ($this -> libros as $libro) {
            if ($libro -> getTitulo() == $titulo) {
                return $libro;
            }
        }
        return null;
    }

    // método que devuelve un libro de la biblioteca por su título
    public function getLibro($titulo) {
        foreach ($this -> libros as $libro) {
            if ($libro -> getTitulo() == $titulo) {
                return $libro;
            }
        }
        return null;
    }

    // método que presta un libro de la biblioteca por su título y devuelve true si se ha prestado correctamente
    public function prestarLibro($titulo) {
        $libro = $this -> getLibro($titulo);
        if ($libro != null) {
            return $libro -> prestar();
        }
        return false;
    }

    // método que devuelve un libro a la biblioteca por su título y devuelve true si se ha devuelto correctamente
    public function devolverLibro($titulo) {
        $libro = $this -> getLibro($titulo);
        if ($libro != null) {
            return $libro -> devolver();
        }
        return false;
    }

    // método que devuelve un listado de los libros de la biblioteca
    public function getLibros() {
        return $this -> libros;
    }

}

// LIBROS de ejemplo

$libro = new Biblioteca();

$biblioteca->agregarLibro("El Quijote", "Miguel de Cervantes", "Novela");
$biblioteca->agregarLibro("Cien años de soledad", "Gabriel García Márquez", "Realismo mágico");
$biblioteca->agregarLibro("1984", "George Orwell", "Ciencia ficción");
$biblioteca->agregarLibro("La Odisea", "Homero", "Epopeya");

?>