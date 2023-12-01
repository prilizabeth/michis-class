<?php

class gato {
    public $nombre;
    public $edad;
    public $color;
    public $genero;
    public $raza;
    public $catfluencer = false;

    function comer($comida) {
        echo "Ham ham ham " . $comida;
    }

    function dormir() {
        return true;
    }

    function maullar() {
        echo "Miau";
    }

    function jugar($juguete) {
        echo "Juego con mi " . $juguete;
    }

    function soy_catfluencer($catfluencer, $cuenta_instagram) {
        if ($catfluencer == true) {
            echo "Soy michifluencer y mi cuenta es " . $cuenta_instagram;
        }
    }
}

$christopher = new gato();
$christopher->nombre = "Christopher";
$christopher->edad = 2;
$christopher->color = "blanco y gris";
$christopher->genero = "macho";
echo "Este michi se llama " . $christopher->nombre . ", tiene " . $christopher->edad . " años y es de color " . $christopher->color . "<br>";
echo $christopher->dormir();
echo "<br>";
$christopher->comer("pollito");
echo "<br>";

$astro = new gato();
$astro->nombre = "Astro";
$astro->edad = 5;
$astro->color = "blanco y negro";
$astro->genero = "hembra";
echo "Este michi se llama " . $astro->nombre . ", tiene " . $astro->edad . " años y es de color " . $astro->color . "<br>";
$astro->comer("atun");
echo "<br>";
$astro->jugar("pelotita de papel");
echo "<br>";

$garfield = new gato();
$garfield->nombre = "Garfield";
$garfield->edad = 7;
$garfield->color = "naranja";
$garfield->genero = "macho";
echo "Este michi se llama " . $garfield->nombre . ", tiene " . $garfield->edad . " años y es de color " . $garfield->color . "<br>";
$garfield->comer("lasagna");
echo "<br>";
$garfield->maullar();
echo "<br>";

$tsuru = new gato();
$tsuru->nombre = "Tsuru";
$tsuru->edad = 7;
$tsuru->color = "blanco y gris";
$tsuru->genero = "hembra";
echo "Este michi se llama " . $tsuru->nombre . ", tiene " . $tsuru->edad . " años y es de color " . $tsuru->color . "<br>";
$tsuru->maullar();
echo "<br>";
$tsuru->soy_catfluencer(true, "tsuru.nyan");
echo "<br>";

$nelly = new gato();
$nelly->nombre = "Nelly";
$nelly->edad = 7;
$nelly->color = "marron y blanco";
$nelly->genero = "hembra";
echo "Este michi se llama " . $nelly->nombre . ", tiene " . $nelly->edad . " años y es de color " . $nelly->color . "<br>";
$nelly->comer("carnecita");
echo "<br>";
$nelly->soy_catfluencer(true, "missenell");
echo "<br>";
