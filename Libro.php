<?php
interface ILibro {
    public function getTitulo();
    public function getAutor();
    public function getCategoria();
}

class Libro implements ILibro {
    private $titulo;
    private $autor;
    private $categoria;

    public function __construct($titulo, $autor, $categoria) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->categoria = $categoria;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getCategoria() {
        return $this->categoria;
    }
}
?>
