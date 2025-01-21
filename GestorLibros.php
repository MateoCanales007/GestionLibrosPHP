<?php
class GestorLibros {
    private $libros = [];

    public function agregarLibro(ILibro $libro) {
        $this->libros[] = $libro;
    }

    public function obtenerTodosLosLibros() {
        return $this->libros;
    }
}
?>
