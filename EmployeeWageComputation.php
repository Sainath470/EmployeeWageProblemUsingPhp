<?php 
/**
 * Declaring varaible
 */
$WAGE_PER_HOUR = 20;
$FULL_TIME = 8;
$PART_TIME = 4;
$TOTAL_WORKING_DAYS = 20;
$TOTAL_WORKING_HOURS = 100;

/**
 * function to provide random number as attendance
 * returns random number either 1 or 2.
 */
function employeeAttendance(){
        return mt_rand(1,3);
}

/**
 * function to calculate employee Wage using switch statement
 * returning total wage of employee , working days and working hours;
 */
function employeeWageCalculation(){
    $workingDays = 0;
    $employeeHours =0;
    global $TOTAL_WORKING_DAYS;
    global $TOTAL_WORKING_HOURS;

    While($workingDays < $TOTAL_WORKING_DAYS && $employeeHours < $TOTAL_WORKING_HOURS){
        $check = employeeAttendance();
        switch($check){
            case 1:
                $employeeHours += $GLOBALS['FULL_TIME'];
                break;
            case 2:
                $employeeHours += $GLOBALS['PART_TIME'];
                break;
            default:
                break;
        }
        $workingDays++;
    }
    $totalWage = $employeeHours * $GLOBALS['WAGE_PER_HOUR'];

    echo "Total Employee Wage for 20 days is: $totalWage\n";
    echo "Total Employee Working Hours:" .$employeeHours."\n";
    echo "Total Working days: " .$workingDays;
}

/**
 * calling the function.
 */
employeeWageCalculation();
?>