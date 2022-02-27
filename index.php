<!-- Snack 1 -->
<!-- Passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

$name = $_GET['name'] ?? '';
$mail = $_GET['mail'] ?? '';
$age = $_GET['age'] ?? '';

if (!empty($name) && !empty($mail) && !empty($age)) {
    if (strlen($name) > 3 && str_contains($mail, '@') && str_contains($mail, '') && is_numeric($age)) {
        echo "Accesso Riuscito";
    } else {
        echo "Accesso Negato";
    };
}

?>

<!-- Snack 2 -->
<!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007
e come valore un array di post associati a quella data. 
Stampare ogni data con i relativi post. -->

<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Marco',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Martina',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Alessio',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Luca',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Alessio',
            'text' => 'Testo post 6'
        ]
    ],
];

$keys_data = array_keys($posts);

?>

<?php

/* Snack 3 */
/* Creare un array con 15 numeri casuali, 
tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta. */

$numbers = [];

while (count($numbers) < 15) {
    $random_number = rand(1, 100);
    if (!in_array($random_number, $numbers)) {
        $numbers[] = $random_number;
    }
}

?>

<!-- Snack 4 -->
<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi in base ai punti: 
ogni punto un nuovo paragrafo. -->

<!-- <?php

        $paragraph = "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Soluta dolore, nihil adipisci molestiae consectetur magni totam. 
Sed nisi, ipsa obcaecati a commodi perspiciatis saepe quisquam.
Repellat facilis alias suscipit libero!";

        $new_paragraph = explode(".", $paragraph);

        var_dump($new_paragraph);

        ?> -->

<!-- Snack 5 -->

<?php

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

$keys_db = array_keys($db);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Snack</title>
    <style>
        .grey {
            width: 200px;
            height: 50px;
            background-color: grey;
        }

        .green {
            width: 200px;
            height: 50px;
            background-color: green;
        }
    </style>
</head>

<body>

    <!-- <section id="Snack-1">
        <div id="name">
            <form>
                <h3>Inserisci un nome</h3>
                <input type="text" placeholder="Inserisici il tuo nome" name="name">

                <h3>Inserisci un e-mail</h3>
                <input type="text" placeholder="Inserisci la tua e-mail" name="mail">

                <h3>Inserisci l'età</h3>
                <input type="text" placeholder="Inserisci la tua età" name="age">

                <button>Premi qui</button>
            </form>

        </div>
    </section> -->

    <!-- <section id="Snack-2">
        <ul>
            <?php for ($i = 0; $i < count($posts); $i++) : ?>
                <?php $current_post = $posts[$keys_data[$i]] ?>

                <?php for ($j = 0; $j < count($current_post); $j++) : ?>

                    <h2>Data: <?= $keys_data[$j] ?></h2>

                    <li>Titolo: <?= $current_post[$j]['title'] ?></li>
                    <li>Autore: <?= $current_post[$j]['author'] ?></li>
                    <li>Testo: <?= $current_post[$j]['text'] ?></li>

                <?php endfor; ?>

            <?php endfor; ?>
        </ul>
    </section> -->

    <!-- <section id="snack-3">
        <ul>
            <?php for ($i = 0; $i < count($numbers); $i++) : ?>
                <li><?= $numbers[$i] ?></li>
            <?php endfor; ?>
        </ul>
    </section> -->

    <!-- <section id="snack-4">

        <?php for ($i = 0; $i < count($new_paragraph); $i++) : ?>
            <p> <?php print_r($new_paragraph[$i]) ?> </p>
        <?php endfor; ?>

    </section> -->

    <section id="snack-5">

        <?php for ($i = 0; $i < count($db); $i++) : ?>
            <?php $current_db = $db[$keys_db[$i]] ?>

            <h2><?= $keys_db[$i] ?></h2>

            <?php for ($j = 0; $j < count($current_db); $j++) : ?>

                <div class="<?= $keys_db[$i] === 'teachers' ? 'grey' : 'green' ?>">

                    <li>Nome: <?= $current_db[$j]['name'] ?></li>
                    <li>Cognome: <?= $current_db[$j]['lastname'] ?></li>

                </div>

            <?php endfor; ?>

        <?php endfor; ?>

    </section>
</body>

</html>