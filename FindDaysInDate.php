<?php
function getDaysBetweenDates($startDate, $endDate) {
    $startTimestamp = strtotime($startDate);
    $endTimestamp = strtotime($endDate);

    $secondsPerDay = 24 * 60 * 60;
    $daysBetween = ($endTimestamp - $startTimestamp) / $secondsPerDay;

    return $daysBetween;
}

$startDate = (string)readline("Enter the Starting date in (YYYY-MM-DD) :");
$endDate = (string)readline("Enter the ending date in (YYYY-MM-DD) :");

$days = getDaysBetweenDates($startDate, $endDate);

echo "Number of days between $startDate and $endDate: $days days."."\n";


?>