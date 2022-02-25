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

$keys_info = array_keys($keys_data);


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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
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
            <?php for ($i = 0; $i < count($keys_data); $i++) : ?>
                <li>Data: <?= "$keys_data[$i]" ?></li>
            <?php endfor; ?>
        </ul>

        <ul>
            <?php for ($i = 0; $i < count($keys_info); $i++) : ?>
                <li>Info: <?= "$keys_info[$i]['text']" ?></li>
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
</body>

</html>