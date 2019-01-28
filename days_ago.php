<?php
/**
 * Created by PhpStorm.
 * User: salman9607
 * Date: 9/27/2018
 * Time: 12:17 PM
 */

date_default_timezone_set('Asia/Karachi');

function diffHuman(DateTime $date){ //Datetime agr na b likha to koi faraq nae parta it's just an time hinting you can say

    $currentDate = new DateTime();

    $difference = $currentDate->diff($date);

    // below two lines are default of switch statement
    $unit = 'second';
    $count = $difference->s;

    switch (true){ //true mean each of cases will be checked

        case $difference->y > 0;

        $unit = 'year';
        $count = $difference->y;
        break;

        case $difference->m > 0;

            $unit = 'month';
            $count = $difference->m;
            break;

        case $difference->d > 0;

            $unit = 'day';
            $count = $difference->d;
            break;

        case $difference->h > 0;

            $unit = 'hour';
            $count = $difference->h;
            break;

        case $difference->i > 0;

            $unit = 'mint';
            $count = $difference->i;
            break;

    }

    if ($count === 0){
        $count = 1;
    }

    if ($count !== 1){
        $unit .= 's'; // Now we are appending
    }

//    var_dump($difference); // by this we are checking if invert is equal zero then time is in future and if 1 then past

    $inversion = $difference->invert == 0 ? 'from now' : 'ago';

//    return "{$count} {$unit} ago";
    return "{$count} {$unit} {$inversion}";

}

$date = new DateTime('2018-9-27 12:49:00');
//var_dump(diffHuman($date));

echo diffHuman($date);
