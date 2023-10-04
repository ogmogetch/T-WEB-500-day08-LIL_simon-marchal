<?php
function discover_type($name, $age, $isStudent, $gpa = 0.0) {
    if ($isStudent) {
        echo "Hello my name is $name, I’m $age years old. I’m a student with a GPA of $gpa.\n";
    } else {
        echo "Hello my name is $name, I’m $age years old. I’m not a student.\n";
    }
}