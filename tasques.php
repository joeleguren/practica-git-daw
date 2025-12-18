
<?php
// Mòdul de tasques independent

function afegirTasca(&$tasques, $descripcio) {
    $id = count($tasques) + 1;  // Calcula el proper ID
    $tasques[$id] = $descripcio; // Afegeix la tasca a l'array
    return $id; // Retorna el nou ID
}

function eliminarTasca(&$tasques, $id) {
    if (isset($tasques[$id])) { // Comprova si la tasca existeix
        unset($tasques[$id]);   // Elimina-la
        return true;
    }
    return false; // Si no existeix, retorna false
}
?>