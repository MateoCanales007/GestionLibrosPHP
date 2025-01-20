<?php

class Libro {
    private $titulo;
    private $autor;
    private $categoria;
    private $disponible;

    // constructor para la clase Libro que sirve para inicializar los atributos de la clase
    public function __construct ($titulo, $autor, $categoria, $disponible) {
        $this -> titulo = $titulo;
        $this -> autor = $autor;
        $this -> categoria = $categoria;
        $this -> disponible = $disponible;
    }

    // método que devuelve el título del libro
    public function getTitulo() {
        return $this -> titulo;
    }

    // método que devuelve el autor del libro
    public function getAutor() {
        return $this -> autor;
    }

    // método que devuelve la categoría del libro
    public function getCategoria() {
        return $this -> categoria;
    }

    // método que devuelve si el libro está disponible o no
    public function estaDisponible() {
        return $this -> disponible;
    }

    // método que permite prestar un libro si está disponible y devuelve true si se ha prestado correctamente
    public function prestar() {
        if ($this -> disponible) {
            $this -> disponible = false;
            return true;
        }
        return false;
    }

    // método que permite devolver un libro y lo marca como disponible y devuelve true si se ha devuelto correctamente
    public function devolver() {
        $this -> disponible = true;
    }

}
?>