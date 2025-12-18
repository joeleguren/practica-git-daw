<?php
// Sistema de Gestió de Tasques
// Versió 1.0

function mostrarTasques($tasques) {
    echo "=== LLISTA DE TASQUES ===\n";
    foreach ($tasques as $id => $tasca) {
        echo "[$id] $tasca\n";
    }
}

// Crea un array amb almenys 3 tasques
$tasques = [
    "Comprar pa",
    "Fer els deures",
    "Netejar l'habitació"
];

echo "=== GESTOR DE TASQUES ===\n";
echo "Benvingut al sistema!\n\n";

// Crida a la funció mostrarTasques
mostrarTasques($tasques);
?>