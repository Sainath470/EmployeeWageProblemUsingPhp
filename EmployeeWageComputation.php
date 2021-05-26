<?php 

class EmployeeWageComputation{
    /**
     * Declaring constant properties and initializing
     */
    const WAGE_PER_HOUR = 20;
    const FULL_TIME = 8;
    const PART_TIME = 4;
    const TOTAL_WORKING_DAYS = 20;
    const TOTAL_WORKING_HOURS = 100;

    /**
     * function to provide random number as attendance
     * returns random number either 1 or 2.
    */
    function employeeAttendance(){
            return mt_rand(1,3);
    }

    /**
     * Method to calculate employee Wage using switch statement
     * returning total wage of employee , working days and working hours;
     */
    function employeeWageCalculation(){
        $workingDays = 0;
        $employeeHours =0;

        While($workingDays < (self::TOTAL_WORKING_DAYS) && $employeeHours < (self::TOTAL_WORKING_HOURS)){
            $check = $this->employeeAttendance();//calling method inside a method using this key word
            switch($check){
                case 1:
                    $employeeHours += self::FULL_TIME;
                    break;
                case 2:
                    $employeeHours += self::PART_TIME;
                    break;
                default:
                    break;
            }
            $workingDays++;
        }
        $totalWage = $employeeHours * (self :: WAGE_PER_HOUR);

        echo "Total Employee Wage for 20 days is: $totalWage\n";
        echo "Total Employee Working Hours:" .$employeeHours."\n";
        echo "Total Working days: " .$workingDays;
    }
}
/**
 * creating an object and calling the Method using the object
 */
$employeeWageComputation = new EmployeeWageComputation();

$employeeWageComputation -> employeeWageCalculation();
?>