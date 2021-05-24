<?php 
/**
 * Declaring varaible
 */
$WAGE_PER_HOUR = 20;
$FULL_TIME = 8;
$PART_TIME = 4;
$TOTAL_WORKING_DAYS = 20;

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
    $workingDays = 0;
    global $TOTAL_WORKING_DAYS;
    While($workingDays < $TOTAL_WORKING_DAYS){
        $check = employeeAttendance();
        switch($check){
            case 1:
                $totalWage += $GLOBALS['FULL_TIME'] * $GLOBALS['WAGE_PER_HOUR'];
                break;
            case 2:
                $totalWage += $GLOBALS['PART_TIME'] * $GLOBALS['WAGE_PER_HOUR'];
                break;
            default:
                break;
        }
        $workingDays++;
    }
    echo "Total Employee Wage for 20 days is: $totalWage";
}

/**
 * calling the function.
 */
employeeWageCalculation();
?>