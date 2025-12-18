<?php
// Sistema de Gestió de Tasques
// Versió 1.0

function mostrarTasques($tasques) {
    echo "=== LLISTA DE TASQUES ===\n";
     // ERROR INTENCIONAT: bucle for incorrecte
    for ($i = 0; $i < count($tasques); $i++) {
        echo "[$i] ERROR\n";  // Això no funcionarà correctament
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