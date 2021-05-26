<?php 
class EmployeeWageComputation{
    /**
     * Declaring constant properties and initializing
     */
    const FULL_TIME_HOURS = 8;
    const PART_TIME_HOURS = 4;

    /**
     * function to provide random number as attendance
     * returns random number either 1 or 2.
    */
    public function employeeAttendance(){
            return mt_rand(1,3);
    }

    /**
     * Method to calculate employee Wage using switch statement
     * printing total wage of employee , working days and working hours;
     */
    public function employeeWageCalculation($company, $wagePerHour, $totalWorkingDays, $totalWorkingHours){
        $workingDays = 0;
        $employeeHours =0;

        While($workingDays < $totalWorkingDays && $employeeHours < $totalWorkingHours){
            $check = $this->employeeAttendance();//calling method inside a method using this key word
            switch($check){
                case 1:
                    $employeeHours += self::FULL_TIME_HOURS;
                    break;
                case 2:
                    $employeeHours += self::PART_TIME_HOURS;
                    break;
                default:
                    break;
            }
            $workingDays++;
        }
        
        $totalWage = $employeeHours *  $wagePerHour;

        echo "Company name: " .$company. "\n";
        echo "Total Employee Working Hours:" .$employeeHours."\n";
        echo "Employee Wage Per Hour is: " .$wagePerHour. "\n";
        echo "Total Employee Wage for $totalWorkingDays days is: $totalWage\n";
        echo "\n";
    }
}

/**
 * creating an object for each company
 */
$employeeWageComputation = new EmployeeWageComputation();

/**
 * calling the function using the object and passing the arguments 
 */
$employeeWageComputation -> employeeWageCalculation("A-company", 20, 20, 100);
$employeeWageComputation -> employeeWageCalculation("B-company", 15, 30, 120);
$employeeWageComputation -> employeeWageCalculation("C-company", 25, 15, 80);
?>