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