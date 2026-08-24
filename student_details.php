<?php

function studentDetails($studentName, $enrollmentNumber, $semester)
{
    return [
        'studentName' => $studentName,
        'enrollmentNumber' => $enrollmentNumber,
        'semester' => $semester,
    ];
}
