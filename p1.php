<!-- Write a PHP program for print Previous semester Result using variables &
constants in PHP. -->
<?php

define("COLLEGE_NAME", "Marwadi University");


$studentName = "Sarthak Pandya";
$semester = "Semester 4";
$totalMarks = 600;
$obtainedMarks = 480;
$percentage = ($obtainedMarks / $totalMarks) * 100;


echo "<h2>Previous Semester Result</h2>";
echo "College Name: " . COLLEGE_NAME . "<br>";
echo "Student Name: " . $studentName . "<br>";
echo "Semester: " . $semester . "<br>";
echo "Total Marks: " . $totalMarks . "<br>";
echo "Obtained Marks: " . $obtainedMarks . "<br>";
echo "Percentage: " . $percentage . "%<br>";

if ($percentage >= 40) {
    echo "Result: PASS";
} else {
    echo "Result: FAIL";
}
?>