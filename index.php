<?php
require_once './vendor/autoload.php';
?>


<?php

$faker = Faker\Factory::create(‘fr_FR’);

$loader = new Twig_Loader_Filesystem(__DIR__ . '/templates');
$twig = new Twig_Environment($loader, array(
    'cache' => false, //__DIR__ . '/tmp',
));

echo $twig->render('index.html', [
  'company' => $faker->company(),
  'catch' => $faker->catchPhrase(),
  'productAdjective' => $faker->text($maxNbChars = 30),
  'productName' => $faker->word(),
  'productMaterial' => $faker->bs(),
  'url' => $faker->url(),
  'color' => $faker->colorName(),
  'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 50, $max = 500),
  'username' => $faker->name(),
  'job' => $faker->jobTitle(),
  'mail' => $faker->email(),
  'phone' => $faker->phoneNumber(),
  'address' => $faker->address()
]);



?> 

