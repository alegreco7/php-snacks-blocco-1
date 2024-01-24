<?php

$posts = array(
    array(
        'data' => '01-03-2002',
        'post' => 'Contenuto del post 1'
    ),
    array(
        'data' => '02-03-2002',
        'post' => 'Contenuto del post 2'
    ),
    array(
        'data' => '03-03-2002',
        'post' => 'Contenuto del post 3'
    ),
    array(
        'data' => '02-03-2002',
        'post' => 'Contenuto del post 4'
    ),
);

// Creare un array di array con chiavi basate sulla data
$posts_per_data = array();

foreach ($posts as $post) {
    $data = $post['data'];
    $post_content = $post['post'];

    // Verifica se la data esiste nell'array principale
    if (!array_key_exists($data, $posts_per_data)) {
        // Se la data non esiste, crea un nuovo array vuoto per quella data
        $posts_per_data[$data] = array();
    }

    // Aggiungi il post all'array associato alla data
    $posts_per_data[$data][] = $post_content;
}

// Stampare ogni data con i relativi post
foreach ($posts_per_data as $data => $posts) {
    echo "Data: $data\n";
    foreach ($posts as $post) {
        echo " - $post\n";
    }
}
