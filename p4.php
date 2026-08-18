<?php

function welcomeStudent()
{
    echo "Welcome, student!";
}

if (function_exists('welcomeStudent')) {
    welcomeStudent();
} else {
    echo "Error: Function welcomeStudent() does not exist.";
}
