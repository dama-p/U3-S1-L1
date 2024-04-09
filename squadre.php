<?php
    $animali = [
        'mammiferi' => [
            'tigri', 'cani', 'gatti'
        ],
        'uccelli' => ['passerotti', 'cormorani', 'pappagalli'],
        'pesci' => ['salmone', 'trota'],
        'insetti' => ['mosche'],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Data:</h1>
<p>
    <?php

$today = date("F j, Y");
echo $today
    
    ?>

</p>

<!-- OPPURE possiamo immaginare la data come una serie di variabili concatenate  -->

<h1>Mercoledì, 16 dicembre 2020</h1>
<?php

/* DEFINIAMO un array per tradurre i giorni in italiano */

$italian_days = [
    'Domenica',
    'Lunedì',
    'Martedì',
    'Mercoledì',
    'Giovedì',
    'Venerdì',
    'Sabato',
];

$day_ita = $italian_days[date("w")]; /// "w" rappresenta numericamente un numero
// della settimana = lo usiamo come indice per recuperare il giorno della settimana
// italiano nell'array da noi creato
$day_num = date("j"); // numero del giorno senza 0 iniziale
$year = date("Y"); // anno con 4 cifre

/* PER IL MESE possiamo fare la stessa cosa con uno switch case */

$num_month = date("n");
switch($num_month) {
    case "1":
        $month_ita = "gennaio";
        break;

    case "2":
        $month_ita = "febbraio";
        break;
    
    case "3":
        $month_ita = "marzo";
        break;

    case "4":
         $month_ita = "aprile";
         break;

} 



echo "$day_ita, $day_num $month_ita $year;" 

?>





    <h1>Squadre</h1>
    

    <ul><?php
        foreach($animali as $category => $animal_list) { ?>
            <li>
                <?= $category ?>
                <ul><?php
                    foreach ($animal_list as $animal_name) { ?>
                        <li><?= $animal_name ?></li><?php
                    } ?>
                </ul>
            </li><?php
        } ?>
    </ul>
</body>
</html>