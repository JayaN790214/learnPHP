<?php
echo "Welcome to php tutorial on functions <br>";

function processMarks($marksArr){
    $sum = 0;
    foreach ($marksArr as $value) {
        $sum += $value;
    }
    return $sum;
}
function avgMarks($marksArr){
    $sum = 0;
    $i = 1;
    foreach ($marksArr as $value) {
        $sum += $value;
        $i++;
    }
    return $sum/$i;
}
$jaya = [34, 98, 45, 12, 98, 93];
$sumMarks = processMarks($jaya);
// $sumMarks = avgMarks($jaya);

$harry = [99, 98, 93, 94, 17, 100];
// $sumMarksHarry = processMarks($harry);
$sumMarksHarry = avgMarks($harry);
echo "Total marks scored by Jaya out of 600 is $sumMarks <br>";
echo "Average marks scored by Harry out of 600 is $sumMarksHarry";

?>