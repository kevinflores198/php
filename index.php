<!-- 
PHP:

EXAMPLE how we can add html, css, js and php at the same time in the same code:

<h1>
< ?= $outputAge; ?>
</h1>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>

                    Variable:

there are 3 caracteristics for those variables:

1. dinamic type, doesn't neet to name the variable
2. debil type, change the type each time like cascada and change the type
3. gradual type, you can indicate what type of variable will be, var_dump, get, etc

var_dump: it says the type of data and value of data tha the variable has in this moment
gettype: it says the kind of data

$name = "Kevin";
$isMe = true;
$age = 26;
$isOld = $age < 40;
$output = "Hola soy " . nombre . " y tengo " . $age . " años";

                    Contstantes:

constants global: for ex: define
constants locals: for ex: const

define('logo-url', 'img.svg');
const nombre = 'kevo';
                    If:
same as all languages.

if ($isOld) {
    echo "you're younger";
} else {
    echo "you're older";
}

- alternative sintaxis:

 if we want to use more than a line, and a long code we can try this:

<php if ($isOld) : ?>
    <h2>you're old</h2>
<php elseif ($isMe) : ?>
    <h2>you aren't too old</h2>
<php else : ?>
    <h2>you're young</h2>
<php endif; ?> 

other way:

$output = $isOld
    ? 'you re old'
    : 'youre young';

                    Match:

 - the value generated on the condition, is what the variable will be.
 - the great difference between that and conditionals, is we can use it on a variable

$outputAge = match (true) {
    $age < 2   => "You're a baby, $name",
    $age < 10  => "you're a boy $name",
    $age < 18  => "you're a young $name",
    $age < 40  => "you're a young old $name",
    default    => "You are old, $name",
}
    
< ?PHP
                    ARRAYS
$bestLanguages = ["php", "java", "javascript", "python"];
// we can add dinamicly like this, and automaticly take the position
$bestLanguages[3] = "rubi";
$bestLanguages[] = "typeScript";
?>

                    foreach

< !-- < ul>
    < ?php foreach ($bestLanguages as $Language) : ?>
        < Li>< ?= $Language ?>< /Li>
    < ?php endforeach; ?>

< /ul>

< h3>
    < ?= $bestLanguages[3] ?>
< /h3> 

                    indice foreach using a type of ARROW function


    < ul>
    < ?php foreach ($bestLanguages as $key => $Language) : ?>
        < Li>< ?= $Language ?>< /Li>
    < ?php endforeach; ?>

    < /ul>

                    diccionarios

$person = [
    "name" => "kevin",
    "age" => 26,
    "isMe" => true,
    "languages" => ["php", "java", "javascript", "python"],
];

// we can change what is designated

$person["name"] = "pepe";

// and should show it:

$person = [
    "name" => "pepe",
    "age" => 26,
    "isMe" => true,
    "languages" => ["php", "java", "javascript", "python"],
];
-->

<?PHP

#it's going to be a constant and we have to make:
const API_URL = "https://whenisthenextmcufilm.com/api";

# we will initialize a new sesion of cURL; ch = cURL handle
$ch = curl_init(API_URL);

#indicate we want to receive the petition result and doesn't show in screen
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

#ejecute petition and save the result
$result = curl_exec($ch);

#search data and transforn the json result, and to get the information we use true
$data = json_decode($result, true);

#we close because php sometimes let it up
curl_close($ch);

?>

<!-- we make html css -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" />
</head>

<main>
    <section>
        <!-- we use $data to import all the info of the API, and between [] use the variable name that is on API -->
        <img src="<?= $data["poster_url"] ?>" alt="Poste de <?= $data["title"] ?>">
    </section>
    <hgroup>
        <h2>
            <?= $data["title"]; ?> <br> SOLO FALTAN <?= $data["days_until"]; ?> DIAS
        </h2>
        <p>
            Fecha de estreno: <?= $data["release_date"]; ?>
        </p>

        <p>
            La proxima pelicula sera: <?= $data["following_production"]["title"]; ?>
        </p>
    </hgroup>
</main>