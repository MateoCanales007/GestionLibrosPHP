<?php
class BuscadorLibros {
    
    // Método para buscar libros por título.
    // Recibe un array de libros y un título a buscar.
    public function buscarPorTitulo(array $libros, $titulo) {
        // Filtra el array de libros, devolviendo solo aquellos cuyo título contiene la cadena buscada
        return array_filter($libros, function(ILibro $libro) use ($titulo) {
            // Utiliza stripos para realizar una búsqueda insensible a mayúsculas.
            return stripos($libro->getTitulo(), $titulo) !== false;
        });
    }

    // Método para buscar libros por autor.
    // Recibe un array de libros y un autor a buscar.
    public function buscarPorAutor(array $libros, $autor) {
        return array_filter($libros, function(ILibro $libro) use ($autor) {
            return stripos($libro->getAutor(), $autor) !== false;
        });
    }

    // Método para buscar libros por categoría.
    // Recibe un array de libros y una categoría a buscar.
    public function buscarPorCategoria(array $libros, $categoria) {
        return array_filter($libros, function(ILibro $libro) use ($categoria) {
            return stripos($libro->getCategoria(), $categoria) !== false;
        });
    }
}
?>
