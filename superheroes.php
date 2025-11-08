<?php
header("Content-Type: text/html; charset=UTF-8");

$superheroes = [
  ["id" => 1, "name" => "Steve Rogers", "alias" => "Captain America", "biography" => "Recipient of the Super-Soldier serum, World War II hero Steve Rogers fights for American ideals as one of the world’s mightiest heroes and the leader of the Avengers."],
  ["id" => 2, "name" => "Tony Stark", "alias" => "Ironman", "biography" => "Genius. Billionaire. Playboy. Philanthropist. Tony Stark's confidence is only matched by his high-flying abilities as the hero called Iron Man."],
  ["id" => 3, "name" => "Peter Parker", "alias" => "Spiderman", "biography" => "Bitten by a radioactive spider, Peter Parker’s arachnid abilities give him amazing powers he uses to help others."],
  ["id" => 4, "name" => "Carol Danvers", "alias" => "Captain Marvel", "biography" => "Carol Danvers becomes one of the universe's most powerful heroes when Earth is caught in the middle of a galactic war."],
  ["id" => 5, "name" => "Natasha Romanov", "alias" => "Black Widow", "biography" => "Despite super spy Natasha Romanoff’s checkered past, she’s become one of S.H.I.E.L.D.’s most deadly assassins."],
  ["id" => 6, "name" => "Bruce Banner", "alias" => "Hulk", "biography" => "Dr. Bruce Banner lives a life between a soft-spoken scientist and an uncontrollable green monster powered by rage."],
  ["id" => 7, "name" => "Clint Barton", "alias" => "Hawkeye", "biography" => "A master marksman and longtime friend of Black Widow, Clint Barton serves as the Avengers’ amazing archer."],
  ["id" => 8, "name" => "T'challa", "alias" => "Black Panther", "biography" => "T’Challa is the king of Wakanda and the warrior known as the Black Panther."],
  ["id" => 9, "name" => "Thor Odinson", "alias" => "Thor", "biography" => "The son of Odin uses his mighty abilities as the God of Thunder to protect Asgard and Earth alike."],
  ["id" => 10, "name" => "Wanda Maximoff", "alias" => "Scarlett Witch", "biography" => "Wanda Maximoff has fought both against and with the Avengers while learning to control her immense powers."],
];

$query = filter_input(INPUT_GET, "query", FILTER_SANITIZE_STRING);

if ($query) {
    $found = null;

    foreach ($superheroes as $hero) {
        if (strcasecmp($hero["name"], $query) === 0 || strcasecmp($hero["alias"], $query) === 0) {
            $found = $hero;
            break;
        }
    }

    if ($found) {
        echo "<h3>{$found['alias']}</h3>";
        echo "<h4>A.K.A {$found['name']}</h4>";
        echo "<p>{$found['biography']}</p>";
    } else {
        echo "<p style='color:red; font-weight:bold;'>Superhero not found</p>";
    }
} else {
    echo "<ul>";
    foreach ($superheroes as $hero) {
        echo "<li>{$hero['alias']}</li>";
    }
    echo "</ul>";
}
?>
