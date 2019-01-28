<?php
/**
 * Created by PhpStorm.
 * User: salman9607
 * Date: 9/27/2018
 * Time: 11:28 AM
 */

echo date('m M Y').'<br>';

var_dump(checkdate(9,31,2018));

echo "<br>";

foreach (timezone_identifiers_list() as $time){
    echo $time , "<br>";
}

echo "<br>";

$start = new DateTime();

$start->setTime(10,00,00);

$end = clone $start;
$end->setTime(18,00,00);

$interval = new DateInterval('PT1H');

$dateRange = new DatePeriod($start, $interval, $end);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<select name="time" id="time">
    <?php   foreach ($dateRange as $dateRange) {    ?>
    <option value="<?php echo  $dateRange->format('H:i:s');  ?>"><?php echo  $dateRange->format('H:i:s');  ?></option>

    <?php  } ?>
</select>
</body>
</html>
