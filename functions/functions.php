<?php
function resoconto_positivi($reverse)
{
    foreach ($reverse as $rev) {
        echo "<strong>" . date('Y-m-d', strtotime($rev['data'])) . "</strong>" . " :   " . $rev['nuovi_positivi'];
        echo "<br>";
    }
}

function resoconto_terapie_intensive($reverse)
{
    foreach ($reverse as $rev) {
        echo "<strong>" . date('Y-m-d', strtotime($rev['data'])) . "</strong>" . " :   " . $rev['ingressi_terapia_intensiva'];
        echo "<br>";
    }
}

function resoconto_deceduti($reverse)
{
    foreach ($reverse as $rev) {
        echo "<strong>" . date('Y-m-d', strtotime($rev['data'])) . "</strong>" . " :   " . $rev['deceduti'];
        echo "<br>";
    }
}

function resoconto_tamponi($reverse)
{
    foreach ($reverse as $rev) {
        echo "<strong>" . date('Y-m-d', strtotime($rev['data'])) . "</strong>" . " :   " . $rev['tamponi'];
        echo "<br>";
    }
}