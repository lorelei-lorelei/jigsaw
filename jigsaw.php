<?php
//Defining variables and arrays
$name = "Kimmii";
$age = 29;
$animal = horse;
$magic = glitter;
$mythical = ['unicorns', 'elves', 'dwarves', 'dragons', 'griffins'];
$text ="rainbows";
$a = 2; $b = 4; $c = 6;
$gem = "blue sapphire";
$year = 1986;
$bigwolf = 37;

//This is an include statement
include '../gittrial/puzzle_piece_autumn.php';

//This is an example of how to set the timezone (inc a builtin function).
date_default_timezone_set('UTC');

//This is an example of how to set the date.
echo "Today is" . gmdate(" d-m-Y.\n");

//This is an example of splitting a string.
$date = '06/08/2016';
$result = explode('/', $date);
  echo "$result[2]/$result[1]/$result[0]\n";

function dinner($eggs, $rice, $soy_sauce){
  return $rice+$eggs+$soy_sauce;
}

$dinner_tonight = dinner($eggs, $rice, $soy_sauce);
echo "Egg-fried rice!\n";

//This is a while loop
while ($year < 1987){
  echo "This is not your birth year.<br />";
  $year++;
}
  echo "This is your birth year.<br />";

//This is a for loop.
for ($year=1985;$year < 1987;$year++){
  echo "This is not your birth year.<br />";
}
  echo "This is your birth year.<br />";

//This is a foreach loop for the array $mythical that shows how to nest PHP inside HTML
//This allows for complex layers of HTML without lots of messy layers of echo statements
foreach ($mythical as $Tolkein){
  echo "These are mythical beasties: $Tolkein.";
}

//This is a foreach loop within a table
?>
  <table>
    <th>Beasties</th>
    <? foreach ($mythical as $Tolkein){ ?>
      <tr><td><?= $Tolkein ?></td></tr>
    <? } ?>
  </table>
<?

//This is correct, but very noisy and overcomplicated.
echo "I like " . $mythical[0] . " and " . $mythical[3] . ".", '<br />';

//This is also correct, but cleaner and simpler (and prettier).
echo "I like $mythical[0] and $mythical[3]<br />";

//Calling a function
unicorn($animal, $magic);

//Defining a function
function unicorn($animal, $magic)
{
  echo "It's a unicorn!", '<br />';
}

//An if statement -- if statements are a type of conditional
if ($name == "Kimmii") {
  echo "Hello, Kimmii!" . "What would you like to code today?", '<br />';
}
else{
  echo "You are not Kimmii!" . "Please try again later.";
}

//This is a logical conditional
if ($a == 2 && $b == 4 || $c == 6){
  echo "This is a multiple of 2!<br />";
} else {
  echo "This is not a multiple of 2!<br />";
}

//This is a switch statement
switch ($gem) {
  case 'blue sapphire':
  case 'pink sapphire':
      echo 'One of the most popular sapphire colours.<br />';
      break;
  case 'yellow sapphire':
      echo 'Popular sapphires for engagement rings.<br />';
      break;
  case 'padparadscha sapphire':
      echo 'A unique sapphire colour.<br />';
      break;
  default:
      echo 'A very dark coloured sapphire mined in Australia.<br />';
}

//This is an example of a function with no arguments.
function noArguments(){
  echo "This function has no arguments!<br />";
}
noArguments();

//This is an example of a function with only one argument.
function AlexAge($bigwolf){
  echo "Alex is $bigwolf.<br />";
}
AlexAge($bigwolf);

//This is an example of function that calls repeatedly.
function wolves($wolf){
  echo "$wolf wolf.<br />";
}
wolves("Big");
wolves("Middle");
wolves("Little");

//This is an example of a function with a default value.
function setCreditLimit($min = 20){
  echo "Account balance is:$min<br />";
}

setCreditLimit(50);
setCreditLimit();
?>
