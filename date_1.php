<?php
/**
 * Created by PhpStorm.
 * User: salman9607
 * Date: 9/26/2018
 * Time: 10:38 PM
 */

$date = new DateTime();

//var_dump($date);
//echo "<br><br> ";
//print_r($date);

//echo $date->format('dS M Y');

//echo $date->getTimezone()->getName();

//is sa ap apnimerzi ke date show kr sakta ha
//$date = new DateTime();
//$date->setTimestamp('627212738');
//
//echo $date->format('dS M Y');
//output
//16th Nov 1989



//Modifying Date
//$date->sub(new DateInterval('P10DT2H'));
//var_dump($date);
//$date1 = new DateTime('-2 days 5 hours');
//var_dump($date1);


//Now we cloning the date/Variable

//$newdate = clone $date;
//$newdate = $newdate->modify('+2 days');
//var_dump($date);


//$myBirthday = (new DateTime())->setDate(1997, 9, 14)->setTime(10, 00, 00);
////var_dump($myBirthday);
//
//$timeTTillNow = $date->diff($myBirthday);
//var_dump($timeTTillNow->days);

//$myBirthdays = (new DateTime('18 November'))->setTime(10,00,00);
//$timeTTillNow = $date->diff($myBirthdays);
//echo $timeTTillNow->format('%m months %d days %h hours');

//
//$date1 = new DateTime('now', new DateTimeZone('Asia/Karachi'));
//var_dump($date1);

//var_dump(DateTimeZone::listIdentifiers());