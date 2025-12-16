<?php

// Susikurkite reikiamus kintamuosius. Išveskite nurodytą tekstą, kuriame
// tarp skliaustų { ir } įterpkite šių kintamųjų reikšmes. Tekstas išvedimui:
// Studentas {vardas} {pavardė} ({amžius} m.) mokosi {mokykla}, dabar yra
// {kursas} kurse. Iki šiol surinko kreditų {kreditai}. Studento studijų vidurkis
// {vidurkis}.

$vardas = "Lukas";
$amzius = 20;
$pavarde = "Lukaitis";
$mokykla = "Klaipedos Azuolyno gimnazijoje";
$kursas = 4;
$kreditai = 16;
$vidurkis = 8.9;

echo ("Studentas $vardas $pavarde ($amzius m.) mokosi $mokykla, dabar yra $kursas kurse. Iki šiol surinko kreditų $kreditai. Studento studijų vidurkis $vidurkis.");
