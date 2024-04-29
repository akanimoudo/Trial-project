//Null coalescing(??)

<?php
$name=$_POST['name'] ?? 'I am the second operand';
echo $name;
echo'<br>';

$sch='WOFS';
$school= 'IVORY';
$schoolName=$sch ?? $school ?? 'I do not know the school name';
echo $schoolName;
echo '<br>';
$sch = 'WOFS';
$access = 
$schoolName=$_GET['sch'] ?? $_POST['sch'] ?? 'I do not know the school name';
echo $schoolName;
echo '<br>';
if(isset($sch)){
    echo $sch;
}
elseif(isset($school)){
    echo $school;
}
else{
    echo 'unknown';
}
echo '<br>';
//spaceship
$values = "9.56" <=> "9.60";
echo $values;
echo '<br>';
$age = 5;
echo $age;
echo '<br>';
echo $age--;
echo '<br>';
echo $age;
// Assignment


//Conditionals
$firstValue=5;
$secondValue=5;
if ($firstValue<$secondValue){
    echo 'There is need to increase';
}
elseif ($firstValue>$secondValue){
    echo 'You are good to go';
}
    else{
        echo 'You are on a tie';
    }
    echo'<br>';
    $firstValue=10;
    $secondValue=5;
    $testValue= ($firstValue<$secondValue);
    $testValue = $firstValue<$secondValue ? 'You are good to go now':'You are on a tie now';
    echo $testValue;
    echo '<br>';
    $integer = 10;
    $testIt = $integer<0 ? 'It is negative':'It is positive';
    echo $testIt;
     $country = 'Nigeria';
     switch ($country) {
        case 'US':
            echo 'You are not African';
            break;
        case 'UK':
            echo 'You are in Europe';
            break;
        case 'Ghana':
            echo 'You are African but not accepted here';
            break;
        case 'Nigeria':
            echo 'You are accepted here';
        break;
        default:
        echo 'Try some other input';
        break;
        echo '<br>';
        echo 'we are here to confirm changes';
        } 
        // Today Class
        // LOOP
        // foreach loops through an array. The 'continue' command halts


?>
<?php
        echo '<br>';
        $array = ['Emediong', 'Victor', 'Vera'];
        foreach ($array as $student) {
            if ($student == 'Vera'){
            continue;
            }
            if ($student == 'Victor') {
                echo '<br>';
                echo 'You were not the first';
                break;
            }
            echo '<br>';
                echo 'You were the first';
            }
            echo '<br>';
        for ($i=0; ; $i+=10) {
            if ($i>100){
                break;
            }
            echo $i;
        }
        //String manipulation
        //Types
        //1. String length
            // Syntax:
        $string = "We are out for today's class in good health.";
        $length = strlen($string);
        echo '<br>';
        echo 'The length of character is: '.$length;
        //2. Substr
        echo '<br>';
        $substring = substr($string, 10);
        echo 'Substring from position 10: '.$substring;
        echo '<br>';
        //3. str_replace
        $newString = str_replace('health', 'condition', $string);
        echo $newString;
        //4. str_positions
        $position = strpos($string, "'");
        echo $position;
        echo '<br>';
    
 ?>
