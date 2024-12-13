
<?php





include 'test.php';
echo "My country name is $country";
echo "<br>";
$mydate = date("d-m-Y");

echo "Date: $mydate";







echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


$identity = "my name is imran kawsar I'm a student at national university";
$convert = explode(" ", $identity);
$number1 = "congrats";
$person = "Mr!";
$animal = "I love cats and dogs";

$number1 = 1000;

//they both are same and they will give you true
echo (is_int($number1));
echo (is_integer($number1));
echo (is_long($number1));
echo "<br>";

$number2 = 1.000;

//they both are same and they will give you true
echo (is_float($number2));
echo (is_double($number2));
echo "<br>";
echo "<br>";


//changing data type to string
$as = 10;
$bs = 10.10;
$cs = true;
$ds = null;
$es = "hello";

$castingS1 = (string) $as;
$castingS2 = (string) $bs;
$castingS3 = (string) $cs;
$castingS4 = (string) $ds;
var_dump($castingS1);
var_dump($castingS2);
var_dump($castingS3);
var_dump($castingS4);
echo "<br>";

//changing data type to integer
$an = "hello";
$bn = 10.10;
$cn = true;
$dn = null;

$castingN1 = (int) $an;
$castingN2 = (int) $bn;
$castingN3 = (int) $cn;
$castingN4 = (int) $dn;
var_dump($castingN1);
var_dump($castingN2);
var_dump($castingN3);
var_dump($castingN4);
echo "<br>";

//changing data type to float
$af = "hello";
$bf = 1000;
$cf = true;
$df = null;

$castingF1 = (float) $af;
$castingF2 = (float) $bf;
$castingF3 = (float) $cf;
$castingF4 = (float) $df;
var_dump($castingF1);
var_dump($castingF2);
var_dump($castingF3);
var_dump($castingF4);
echo "<br>";

//changing tata type to boolean
$ab = "hello";
$bb = 1000;
$cb = 10.10;
$db = null;

$castingB1 = (bool) $ab;
$castingB2 = (bool) $bb;
$castingB3 = (bool) $cb;
$castingB4 = (bool) $db;
var_dump($castingB1);
var_dump($castingB2);
var_dump($castingB3);
var_dump($castingB4);
echo "<br>";

//changing data type to array
$ar = "hello";
$br = 1000;
$cr = 10.10;
$dr = true;
$er = null;

$castingR1 = (array) $ar;
$castingR2 = (array) $br;
$castingR3 = (array) $cr;
$castingR4 = (array) $dr;
$castingR5 = (array) $er;
var_dump($castingR1);
var_dump($castingR2);
var_dump($castingR3);
var_dump($castingR4);
var_dump($castingR5);
echo "<br>";

echo pi();
echo "<br>";

$maxnumber = min(22, 89, 100, 30);
echo $maxnumber;
echo "<br>";

$random = rand(0, 10);

if($random % 2 === 0) {
    echo "this is even number";
}else {
    echo "this is odd number";
}

echo "<br>";

//Conditional statement of if..else..elseif

$newTime = rand(0, 15);

if($newTime < 10) {
    echo "Its less than 10";
}elseif($newTime == 10) {
    echo "Its equal to 10";
}elseif($newTime < 15) {
    echo "Its greater then 10";
}else {
    echo "Your condition is false";
}
echo "<br>";
$myNumber = 11;

if($myNumber > 15) {
    echo "It's above of 15";
    if($myNumber > 25) {
        echo "It's also above of 25";
    }else {
        echo "It's above of 15 but not above 25";
    }
}else {
    echo "Condition is false";
}

//switch statment
$fswitch = "football";

switch($fswitch) {
    case "football":
        echo "Football is your favorite game!";
        break;
    case "cricket":
        echo "Cricket is your favorite game!";
        break;
    case "vellyball":
        echo "Vellyball is your favorite game!";
        break;
    default:
    echo "Your favorite game neither of Football, Cricket, Vellyball";
}


echo "<br>";
echo "<br>";

//while loop

$lo = 10;
while ($lo < 200) {
    $lo+= 10;
    if($lo == 50 || $lo == 60 || $lo == 80) continue;
    echo $lo . "<br>";
}

//for loop 


for ($mylo = 2; $mylo <= 40; $mylo*= 4) {
    //if($mylo == 5) break;
    echo "The number is: $mylo <br>";
}

//foreach loop
//indexed array
$this_array = ["apple", "lemon", "mango", "litchi", "banana"];
echo $this_array[1] ."<br>";
foreach($this_array as $count) {
    echo "$count <br>";
}


//associative array
$brands = array("BMW"=>"1000", "Benz"=>"1200", "Toyota"=>"1000");
var_dump($brands);
echo "<br>";
foreach($brands as $ccb => $ccp) {
    echo $ccb .":". $ccp. "<br>";
}
echo "<br>";
//function
function myfunction($number1, $number2) {
    echo $number1 + $number2 . "<br>";
}
myfunction(22, 18);
myfunction(20, 20);
myfunction(30, 30);
myfunction(40, 40);


function myvalue($x, $y) {
    $z = $x + $y;
    return $z;
}
echo myvalue(10, 10);
echo "<br>";
$text = "this is a string";
echo "$text <br>";
echo gettype($text);

echo "<br>";

function another($sample =50) {
    echo "the age is: $sample";
}
another();
echo "<br>";


$aaa = 5;
$bbb = 5;

$ccc = $aaa <> $bbb; // these are same operators != and <>
if($ccc == true){
    echo "this is right";
}else{
    echo "this is false";
}

echo "<br>";
echo "<br>";

function myNewFunction(...$my) {
    $mycount = null;
    $itor = count($my);
    for($i = 1; $i < $itor; $i++) {
        $mycount = $mycount. $my[$i];
    }
    return $mycount;
}
echo myNewFunction(23, 12, 11);

echo "<br>";
$imran = 5;
$emon = 4;
$kawsar = 8;

if (($imran > $emon) && ($imran > $kawsar)) {
    echo "Imran is largest";
} elseif ($emon > $kawsar) {
    echo "Emon is largest";
} else  {
    echo "Kawsar is largest";
}
echo "<br>";
$num = 1;
$total = 0;
while ($num <= 10) {
    $total += $num++;
    echo "Total is: $total.<br>";
}


$newarray = array(3, 5, 2, 1);
foreach($newarray as $arek) {
    echo "current value: $arek.<br>";
}

$large = array("kawsar" => 22, "imran" => 32, "emon" => 12, "asif" => 44);
foreach($large as $key => $value) {
    echo "$key => $value.<br>";
}

echo "<br>";
echo "<br>";

$multi = [
    [22, 23],[20, 30],[50, 60]
];
print_r($multi);
foreach($multi as list($a, $b)) {
    echo "Name: $a; Age: $b";
}
echo "<br>";

$breaking = array("one", "two", "three", "stop", "five");
foreach($breaking as $fortest) {
    if($fortest == "stop") {
        break;
    }
    echo $fortest."<br>";
}


/*echo strtolower($identity);
echo "<br>";
echo strtoupper($identity);
echo "<br>";
echo strpos($identity, "imran");
echo "<br>";
echo str_word_count($identity);
echo "<br>";
echo strlen($identity);
echo "<br>";
var_dump($identity);
echo "<br>";
echo str_replace("imran kawsar", "kawsar imran", $identity);
echo "<br>";
echo strrev($identity);
echo "<br>";
echo trim($identity);
echo "<br>";
print_r($convert);
echo "<br>";
//they both will perform same, like congrats Mr!
echo "$number1 $person";
echo $number1 ." ". $person;
echo "<br>";
echo substr($animal, 0, 11);
echo "<br>";
echo substr($animal, -8, 6);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
*/


?>