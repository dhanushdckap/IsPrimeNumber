<?php
function getDaysBetweenDates($startDate, $endDate) {
    $startTimestamp = strtotime($startDate);
    $endTimestamp = strtotime($endDate);

    $secondsPerDay = 24 * 60 * 60;
    $daysBetween = ($endTimestamp - $startTimestamp) / $secondsPerDay;

    return $daysBetween;
}

$startDate = '2003-10-30';
$endDate = '2023-05-20';

$days = getDaysBetweenDates($startDate, $endDate);

echo "Number of days between $startDate and $endDate: $days days."."\n";


?>