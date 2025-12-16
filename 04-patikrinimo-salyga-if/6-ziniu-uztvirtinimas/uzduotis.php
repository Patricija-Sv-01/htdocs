<?php

// Užduoties tikslas

// Suskaičiuoti kiek duonos kepalų kepykla sugebės iškepti per dieną, ar
// spės įgyvendinti visus dienos užsakymus ir suskaičiuoti kiek iš jų uždirbs
// pelno.


// Duomenys

// 1. Apibrėžti duomenys:
//      1. Darbo valandų per dieną - 8 val.
// 2. Jūsų suvedami duomenys:
//      1. Kiek darbuotojas gali iškepti kepalų per valandą.
//      2. Kiek darbuotojų turi kepykla.
//      3. Vieno kepalo savikaina.
//      4. Vieno kepalo pardavimo kaina.
//      5. Kiek kepykla turi tą dieną iškepti kepalų (užsakymai).

$darboVal = 8;
$kepaluKiekis = 5;
$darbuotojuKiekis = 5;
$savikaina = 4;
$kaina = 6;
$uzsakymai = 500;

// Skaičiavimai

// 1. Suskaičiuoti kiek kepykla per vieną darbo dieną spės iškepti duonos
// kepalų.
$spesIskpeti = ($kepaluKiekis * $darbuotojuKiekis) * $darboVal;

// 2. Apskaičiuoti visų kepalų savikainą, gautas pajamas pardavus ir iš to gauto
// pelno dalį.
$visuSavikaina = $spesIskpeti * $savikaina;
$pajamos = $spesIskpeti * $kaina;
$pelnas = $pajamos - $visuSavikaina;

// 3. Patikrinti ar kepykla spės iškepti visus tos dienos užsakymus. Jei ne,
// suskaičiuoti kiek kepalų nespės iškepti.

if($spesIskpeti >= $uzsakymai){
    echo "Spes iskepti";
}
else{
    echo ("Nespes iskpeti, truksta: " . ($uzsakymai-$spesIskpeti));
}

// 4. (Papildomai) Įvertinkite tai, kad pajamas ir pelną galite gauti tik iš
// parduotų kepalų.








