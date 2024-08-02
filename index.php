<?php

    $name = "Jose";
    $last_name = ' Cueto';
    $full_name = $name . $last_name;
    $age = 0 ;

    $outputEdad = match(true){
        $age < 2 => "Eres un bebe , $name",
        $age < 10  => "Eres un niño , $name",
        $age < 18 => "Eres un adolescente, $name",
        $age === 18 => "Eres Mayor de Edad $name " ,
        $age < 40 => "Eres un adulto joven , $name",
        default => "Vamos mal....",


    };
   

    $lenguajes = ["javascript","php","python" ];

    $lenguajes[] = "Java";



    

    $person = [
        "name" => "Miguel",
        "age" => 20 ,


    ];

    $person ["name"] ="Modi";

?>

<ul>
<?php foreach($person as $key => $la) : ?>

<li><?= $key . "  " . $la ?></li>

<?php endforeach; ?>

</ul>

<h1>
    
    <?= $outputEdad;?>
</h1>

<style>
    :root {
        color-scheme: light dark;
    }

    body{
        display: grid;
        place-content: center;
    }


</style>