<?php 
/**
 * Declaring varaible
 */
$WAGE_PER_HOUR = 20;
$FULL_TIME = 8;
$PART_TIME = 4;

/**
 * function to provide random number as attendance
 * returns random number either 1 or 2.
 */
function employeeAttendance(){
        return mt_rand(1,3);
}

/**
 * function to calculate employee Wage using switch statement
 */
function employeeWageCalculation(){
    $check = employeeAttendance();
    switch($check){
        case 1:
            echo "Employee is Present ";
            $totalWage = $GLOBALS['FULL_TIME'] * $GLOBALS['WAGE_PER_HOUR'];
            echo "And Full time Wage is: $totalWage";
            break;
        case 2:
            echo "Employee is Present ";
            $totalWage = $GLOBALS['PART_TIME'] * $GLOBALS['WAGE_PER_HOUR'];
            echo "And Part time Wage is: $totalWage";
            break;
        default:
            echo "Employee is Absent";
            break;
    }
}

/**
 * calling the function.
 */
employeeWageCalculation();
?>