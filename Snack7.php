<!-- Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php
    $classe = [
        [
            "nome" => "Jerry",
            "cognome" => "Calà",
            [
                "matematica" => 5,
                "italiano" => 8,
                "storia" => 7,
                "fisica" => 4,
                "filosofia" => 7
            ]
        ],
        [
            "nome" => "Massimo",
            "cognome" => "Boldi",
            $voti = [
                "matematica" => 10,
                "italiano" => 4,
                "storia" => 5,
                "fisica" => 8,
                "filosofia" => 6
            ]
        ],
        [
            "nome" => "Christian",
            "cognome" => "De Sica",
            $voti = [
                "matematica" => 6,
                "italiano" => 9,
                "storia" => 4,
                "fisica" => 8,
                "filosofia" => 7
            ]
        ],
        [
            "nome" => "Ezio",
            "cognome" => "Greggio",
            $voti = [
                "matematica" => 8,
                "italiano" => 8,
                "storia" => 5,
                "fisica" => 9,
                "filosofia" => 4
            ]
        ],
    ]
?>

<?php
    for ($i = 0; $i < count($classe); $i++) {
        $alunno = $classe[$i];
    ?>

        <div><?php echo $alunno["nome"] . " " . $alunno["cognome"] . " - " . array_sum($voti) / count($voti)?></div>
<?php } ?>