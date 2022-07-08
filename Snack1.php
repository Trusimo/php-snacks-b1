<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->
<?php
$giornata = [
    [ 
        "teamcasa" => "Miami Heat",
        "teamout" => "Utah Jazz",
        "punticasa" => "110",
        "puntiout" => "99"
    ],
    [
        "teamcasa" => "Boston Celtics",
        "teamout" => "Los Angeles Clippers",
        "punticasa" => "104",
        "puntiout" => "117"
    ],
    [
        "teamcasa" => "Los Angeles Lakers",
        "teamout" => "Golden State Warriors",
        "punticasa" => "120",
        "puntiout" => "125"
    ],
    [
        "teamcasa" => "Chicago Bulls",
        "teamout" => "New York Knicks",
        "punticasa" => "98",
        "puntiout" => "90"
    ],
    [
        "teamcasa" => "Phoenix Suns",
        "teamout" => "Milwaukee Bucks",
        "punticasa" => "117",
        "puntiout" => "134"
    ],
];

?>

<?php
    for ($i = 0; $i < count($giornata); $i++) {
        $partita = $giornata[$i];
    ?>

        <div><?php echo $partita["teamcasa"] . "-" . $partita["teamout"] . " | " . $partita["punticasa"] . "-" . $partita["puntiout"]?></div>
<?php } ?>
