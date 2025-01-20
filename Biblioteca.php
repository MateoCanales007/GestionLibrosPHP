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
$biblioteca -> agregarLibro(new Libro("El Quijote", "Miguel de Cervantes", "Novela", true));
$biblioteca -> agregarLibro(new Libro("El hobbit", "J.R.R. Tolkien", "Fantasía", true));
$biblioteca -> agregarLibro(new Libro("Cien años de soledad", "Gabriel García Márquez", "Novela", true));
$biblioteca -> agregarLibro(new Libro("La Odisea", "Homero", "Epopeya", true));
$biblioteca -> agregarLibro(new Libro("El retrato de Dorian Gray", "Oscar Wilde", "Novela", true));

?>