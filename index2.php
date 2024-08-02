<?php



const API_URL = "https://whenisthenextmcufilm.com/api";
#Inicialiciamos una sesion de curl
$ch = curl_init(API_URL);
//Para recibir el resulttado de la peticion sin mostrarla en la pantalla

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/* Ejecutamos la peticion
y guardamos el resultado*/


curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

$result = curl_exec($ch);
$data = json_decode ($result , true);

curl_close($ch);


?>

<head>
    <meta charset="UTF-8">
    <title>La proxima Pelicula de marvel</title>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
>

</head>


<main>
    <h2 style="color:white">¿Cuando se estrena proxima pelicula de marvel?</h2>
    <section >
        <img src=" <?= $data["poster_url"] ?>" width="300"  style="border-radius: 16px;"
        
        />



    </section>
    <hgroup>
        <h3 style="color:white"><?= $data["title"]; ?> se estrena en <?= $data["days_until"]; ?> dias</h3>
        <p style="color:white">Fecha de estreno: <?= $data["release_date"];?></p>
        <p style="color:white">La siguiente es  <?= $data["following_production"]["title"];?></p>

    </hgroup>

</main>


<style>
    :root {
        color-scheme: light dark;
    }

    body{
        display: grid;
        size: 20px;
        background-color :#162B4E;
        place-content:center;
    }

    img {
        margin: 0 auto;
    }

    section {
       display: flex;
       justify-content: center;
         

    }
    hgroup{
        display: flex;
        flex-direction: column;
        justify-content: center;

    }

</style>

