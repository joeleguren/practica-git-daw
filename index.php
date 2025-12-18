<?php
// Sistema de Gestió de Tasques
// Versió 1.0

function mostrarUsuari($nom) {
    echo "=== GESTOR DE TASQUES ===\n";
    echo "Usuari actual: $nom\n";
    echo "Benvingut al sistema!\n";
}

// Crea una variable $usuariActual amb un nom
$usuariActual = "Joel Eguren";

// Crida a la funció mostrarUsuari
mostrarUsuari($usuariActual);
?>